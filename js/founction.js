// function detectMobile() is to check whether users browser websites by mobile.
function detectMobile() {
	if( navigator.userAgent.match(/Android/i)
		|| navigator.userAgent.match(/webOS/i)
		|| navigator.userAgent.match(/iPhone/i)
		|| navigator.userAgent.match(/iPad/i)
		|| navigator.userAgent.match(/iPod/i)
		|| navigator.userAgent.match(/BlackBerry/i)
		|| navigator.userAgent.match(/Windows Phone/i)
		|| (window.innerWidth <= 800 && window.innerHeight <= 600)
	) { return true; } else { return false; }
}

// function openNav() is used to open the menu. 

//If users browser websites by mobile, the menu(mySidenav) will display in the whole screen. 
//If users browser websites by laptop, the menu(mySidenav) will display just in the left of screen.
function openNav(){
	if (detectMobile() == true) {
	document.getElementById("mySidenav").style.width = "100%";
	} else {
	document.getElementById("mySidenav").style.width = "40%";
	}

}

// mySide1nav includes the content of menu.
// When clicking function openNav1(), the content will be displayed on the menu.
function openNav1(){
	document.getElementById("mySide1nav").style.width = "100%";
}

//When clicking function closeNav() and closeNav1(), the menu will be hiden.	
function closeNav() {
	document.getElementById("mySidenav").style.width = "0%";
}
function closeNav1() {
	document.getElementById("mySide1nav").style.width = "0%";
}

