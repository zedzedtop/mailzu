// Last modified: 03-04-05

function checkBrowser() {
	if ( (navigator.appName.indexOf("Netscape") != -1) && ( parseFloat(navigator.appVersion) <= 4.79 ) ) {
		newWin = window.open("","message","height=200,width=300");
		newWin.document.writeln("<center><b>This system is optimized for Netscape version 6.0 or higher.<br>" +
					"Please visit <a href='http://channels.netscape.com/ns/browsers/download.jsp' target='_blank'>Netscape.com</a> to obtain an update.");
		newWin.document.close();
	}
}

function help(file) {    
		window.open("help.php#" + file ,"","width=500,height=500,scrollbars");    
		void(0);    
}      

function isIE() {
	return document.all;
}

function resOver(cell, color) {
	cell.style.backgroundColor=color;
	cell.style.cursor='hand'
}

function resOut(cell, color) {
	cell.style.backgroundColor = color;
}

function showHideSearch(element) {
	var expires = new Date();
	var time = expires.getTime() + 2592000000;
	expires.setTime(time);
	var showHide = "";
	if (document.getElementById(element).style.display == "none") {
		document.getElementById(element).style.display='block';
		showHide = "show";
	} else {
		document.getElementById(element).style.display='none';
		showHide = "hide";
	}
	
	document.cookie = element + "=" + showHide + ";expires=" + expires.toGMTString();
}

function showHideFullHeaders(table) {
        var expires = new Date();
        var time = expires.getTime() + 2592000000;
        expires.setTime(time);
        var showHide = "";
	var cnames = 'visiblehidden';
	var i = 0;
        var rows = document.getElementById(table).rows;
	
	for (i = 0; i < rows.length; i++) {
	  rows[i].className = cnames.replace(rows[i].className, '');
	  showHide = rows[i].className;
        }
	
        document.cookie = table + "=" + showHide + ";EXpires=" + expires.toGMTString();
}

function changeLanguage(opt) {
	var expires = new Date();
	var time = expires.getTime() + 2592000000;
	expires.setTime(time);
	document.cookie = "lang=" + opt.options[opt.selectedIndex].value + ";expires=" + expires.toGMTString() + ";path=/";
	document.location.href = document.URL;
}

function clickTab(tabid, panel_to_show) {
	document.getElementById(tabid.getAttribute("id")).className = "tab-selected";
	rows = document.getElementById("tab-container").getElementsByTagName("td");
	for (i = 0; i < rows.length; i++) {
		if (rows[i].className == "tab-selected" && rows[i] != tabid) {
			rows[i].className = "tab-not-selected";
		}
	}

	div_to_display = document.getElementById(panel_to_show);
	div_to_display.style.display = isIE() ? "inline" : "table";
	divs = document.getElementById("main-tab-panel").getElementsByTagName("div");

	for (i = 0; i < divs.length; i++) {
		// only hide panels with prefix "pnl"
		if (divs[i] != div_to_display && divs[i].getAttribute("id").substring(0,3) == "pnl") {
			divs[i].style.display = "none";
		}
	}
}

function showHideMinMax(chk) {
	document.getElementById("minH").disabled = document.getElementById("minM").disabled = document.getElementById("maxH").disabled = document.getElementById("maxM").disabled= chk.checked
}

function CheckAll(frm) {
	var elmts = frm.elements;
	for (i=0;i<elmts.length;i++) {
    		if (elmts[i].type=="checkbox") {
      			elmts[i].checked=true;
      			ColorRow(elmts[i],"lightyellow");
    		}
  	}
}

function CheckNone(frm) {
  	var elmts = frm.elements;
  	for (i=0;i<elmts.length;i++) {
    		elmts[i].checked=false;
    		ColorRow(elmts[i],"lightyellow");
  	}
}


function ColorRow(obj,color) {
  	obj.checked==true ? bg=color : bg='';
  	while (obj.nodeName!='TR') {
    		obj=obj.parentNode;
  	}
  	obj.style.backgroundColor=bg;
}

function ViewOriginal(enc_mail_id,enc_recip_email) {
	var url = "read_original.php?mail_id=" + enc_mail_id + "&recip_email=" + enc_recip_email;
        window.open(url,'OriginalMessage','width=800,height=600,scrollbars=1');
}

