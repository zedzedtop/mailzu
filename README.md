mailzu
======

Fork from http://sourceforge.net/projects/mailzu/?source=dlp 

MailZu is a simple and intuitive web interface to manage Amavisd-new quarantine. Users can view their own quarantine, release/delete messages or request the release of messages. MailZu is written in PHP and requires Amavisd-new version greater than 2.3.0 


MailZu is a quarantine management interface for amavisd-new
( http://www.ijs.si/software/amavisd/ ).

It provides users and administrators access to email that is suspected to be
spam or contain banned contents and gives users the ability to release, request,
or delete these messages from their quarantine.

Users can access their personal quarantine by authenticating to various
pre-existent backends such as LDAP ( or Active Directory ) or any PHP PEAR
supported database.

See the INSTALL file in the docs/ directory included with this distribution.
