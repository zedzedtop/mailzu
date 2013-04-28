#!/usr/local/bin/perl -w

use strict;
use Getopt::Long;

##### PLEASE CONFIGURE THIS SECTION ######

# Globals
# Set this array for database authentication
my(@storage_sql_dsn) = (
        'DBI:Pg:database=dbname;host=host.example.org',
        'user','password'
                       );

# Set this to 1 if you are using the new database schema
# introduced with amavisd 2.4.0. Only do this if you also
# have the foreign key references between the tables and use
# time_iso as a real date type instead of a string.
my($new_dd) = 1; # 1 or undef

# Purge old messages - One Week
my($interval) = time - 7*24*60*60;
# Purge incomplete messages - 1 hour
my($partial_interval) = time - 60*60;

# These variables only matter if $new_dd is set to 1
# The values for these variables must be syntactically
# correct for your database. This value is passed to
# the 'interval' keyword. Please check your database
# documentation

# PostgreSQL
my($new_interval) = '1 week';
my($new_partial_interval) = '1 hour';
# MySQL
#my($new_interval) = '7 day';
#my($new_partial_interval) = '1 hour';

# PostgreSQL specific options
# Should we VACUUM ANALYZE the database after the purge?
# Default is undef because we should be using autovacuum
my($postop_vacuum) = undef; # 1 or undef

##### END OF CONFIGURATION SECTION ######

# Options array
my(%opt);

my(@modules);
my(@missing);

my(@dsn) = split(/:/,$storage_sql_dsn[0],-1);
push(@modules, 'DBD::'.$dsn[1])  if uc($dsn[0]) eq 'DBI';

for my $m (@modules) {
  local($_) = $m;
  $_ .= /^auto::/ ? '.al' : '.pm'  if !/\.(pm|pl|al)\z/;
  s[::][/]g;
  eval { require $_ } or push(@missing, $m);
}

die "ERROR: MISSING module(s):\n" . join('', map { "  $_\n" } @missing) if @missing;

sub build_queries($) {
  my($dbtype) = shift;
  # Return a hash of queries to be run
  my(%query) = ( 
               # Old schema queries
	       'del_d_flag' =>
	         'DELETE FROM msgrcpt ' .
		 'WHERE rs=\'D\'',
	       'del_partial_msg' =>
		 'DELETE FROM msgs ' .
		 "WHERE time_num < $partial_interval " .
		 'AND content IS NULL',
	       'del_old_mail_ids' =>
	         'DELETE FROM msgs ' .
		 "WHERE time_num < $interval",
               'del_msgs_mail_ids' => 
                 'DELETE FROM msgs ' .
                 'WHERE NOT EXISTS ' .
                 ' (SELECT 1 FROM msgrcpt ' .
                 '  WHERE msgrcpt.mail_id=msgs.mail_id)',
               'del_quarantine' => 
                 'DELETE FROM quarantine ' .
                 'WHERE NOT EXISTS '.
                 ' (SELECT 1 FROM msgs ' .
                 '  WHERE msgs.mail_id=quarantine.mail_id)',
               'del_msgrcpt' => 
                 'DELETE FROM msgrcpt ' .
                 'WHERE NOT EXISTS ' .
                 ' (SELECT 1 FROM msgs ' .
                 '  WHERE msgs.mail_id=msgrcpt.mail_id)',

               # New schema queries
               'del_d_flag_new' =>
                 'DELETE FROM msgs ' .
                 'WHERE mail_id IN ' .
                 '  (SELECT DISTINCT mail_id ' .
                 '   FROM msgrcpt WHERE rs=\'D\')',

               # Generic queries
	       'del_maddr' =>
		 'DELETE FROM maddr ' .
		 'WHERE NOT EXISTS '  .
		 '  (SELECT sid FROM msgs WHERE sid=id) ' .
    		 '   AND NOT EXISTS' . 
		 '  (SELECT rid FROM msgrcpt WHERE rid=id)'

	     );

  if ($dbtype eq 'pgsql') {
    $query{'vacuum_analyze'} = 'VACUUM ANALYZE';
    # New schema queries
    $query{'del_old_mail_ids_new'} = 'DELETE FROM msgs ' .
                                     'WHERE time_iso < now() ' .
                                     "- interval '$new_interval'";
    $query{'del_partial_msg_new'} = 'DELETE FROM msgs ' .
                                     'WHERE time_iso < now() ' .
                                     "- interval '$new_partial_interval' " .
                                     ' AND content IS NULL';
  }

  if ($dbtype eq 'mysql') {
    # New schema queries
    $query{'del_old_mail_ids_new'} = 'DELETE FROM msgs ' .
                                     'WHERE time_iso < UTC_TIMESTAMP() ' .
                                     "- interval $new_interval";
    $query{'del_partial_msg_new'} = 'DELETE FROM msgs ' .
                                     'WHERE time_iso < UTC_TIMESTAMP() ' .
                                     "- interval $new_partial_interval " .
                                     ' AND content IS NULL';

    # Old schema queries
    $query{'del_msgs_mail_ids'} = 'DELETE msgs FROM msgs ' .
		 		  'LEFT JOIN msgrcpt USING(mail_id) ' .
	 	 		  'WHERE msgrcpt.mail_id IS NULL';
    $query{'del_quarantine'} = 'DELETE quarantine FROM quarantine ' .
		               'LEFT JOIN msgs USING(mail_id) '.
	   	  	       'WHERE msgs.mail_id IS NULL';
    $query{'del_msgrcpt'} = 'DELETE msgrcpt FROM msgrcpt ' .
	 	            'LEFT JOIN msgs USING(mail_id) ' .
	    	            'WHERE msgs.mail_id IS NULL';
  }

  my(%post_query) = (
		'vacuum_analyze' => 'VACUUM ANALYZE'
		    );

  # Order of execution IS IMPORTANT!
  my(@query_order) = qw (del_d_flag del_partial_msg del_msgs_mail_ids 
			 del_old_mail_ids del_quarantine del_msgrcpt 
			 del_maddr
		        );

  @query_order = qw (del_d_flag_new del_partial_msg_new
                         del_old_mail_ids_new del_maddr
                        ) if $new_dd;

  my(@post_query_order); 
  push(@post_query_order, 'vacuum_analyze') if $dbtype eq 'pgsql' && $postop_vacuum;

  return (\%query,\@query_order,\%post_query,\@post_query_order);
}


sub usage {
  print "Usage:\n";
  print "\tmz_db_clean.pl [--verbose|-v] [--database|-db <dbtype>]\n";
  print "\tmz_db_clean.pl --help|-h \n\n";
  print "\tThe database configuration parameter is REQUIRED!\n\n";
  print "\tPossible parameters for the \'--database\' option is \'mysql\'\n" .
	"\tand 'pgsql'.\n";
  exit;
}

sub main {
  Getopt::Long::Configure('no_ignore_case');
  GetOptions(\%opt, 'help|h', 'database|db=s', 'verbose|v', 
            ) or exit(1);
  usage if $opt{help};
  usage if not $opt{database};
  my($dbh) = connect_to_sql(@storage_sql_dsn);
  my($query,$query_order,$p_query,$p_query_order) = build_queries($opt{database});
  my($sth_ref) = prepare_queries($dbh,$query,$p_query);
  my($result) = exec_queries($dbh,$sth_ref,$query,$p_query,
			     $query_order,$p_query_order
			    ); 
  print "Database cleanup successful\n" if $result;
  $dbh->disconnect;
}

sub exec_queries($$$$$) {
  my($dbh,$sth_ref,$query,$p_query,$query_o,$p_query_o) = @_;
  my($affected);

  $dbh->begin_work;
  eval { 
    foreach (@$query_o) {
      if ($opt{verbose}) {
	print "Executing... " . localtime() . "\n";
        print $query->{$_} . "\n";
      }
      $affected = $sth_ref->{$_}->execute or die "Query '$_' did not execute";
      print "$affected rows affected\n" if $opt{verbose};
    }
  };
  if ($@ ne '') {
    $dbh->rollback;
    print "There was an error executing a query! $@\n" .
  	  "No records modified by database maintenance\n" .
  	  "Rollback complete.\n";
    return undef
  } else {
    $dbh->commit;
  }
  
  eval { 
    foreach (@$p_query_o) {
      if ($opt{verbose}) {
	print "Executing... " . localtime() . "\n";
        print $p_query->{$_} . "\n";
      }
      $affected = $sth_ref->{$_}->execute or die "Query '$_' did not execute";
      print "$affected rows affected\n" if $opt{verbose};
    }
  };
  if ($@ ne '') {
    print "There was an error executing an optional query! $@\n" .
    return undef
  }
  
  return 1;

}

sub connect_to_sql(@) {
  my(@sql_dsn) = @_;
  my($dsn, $username, $password) = @sql_dsn;
  print "Connecting to SQL database server\n" if $opt{verbose};
  print "Trying dsn '$dsn'\n" if $opt{verbose};
  my($dbh) = DBI->connect($dsn, $username, $password,
#     {PrintError => 1, RaiseError => 0, Taint => 1, AutoCommit => 0} );
     {PrintError => 1, RaiseError => 0, Taint => 1} );
  if ($dbh) { 
    print "Connection to '$dsn' succeeded\n" if $opt{verbose}; 
  } else {
    die "Unable to connect to '$dsn'!\n";
  }
  $dbh;
}

sub prepare_queries($$$) {
  my($dbh) = shift;
  my($query) = shift;
  my($p_query) = shift;
  my(%sths);
  foreach my $query_set ($query, $p_query) {
    foreach (keys %$query) {
      $sths{$_} = $dbh->prepare($query->{$_});
    }
  }
  \%sths
}

main;
