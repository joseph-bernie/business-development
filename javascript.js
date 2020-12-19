"use strict";
/*
   Author: Joseph Martinez
   MSU Denver login name: jmart506
   Date Created: 03-29-19
   Date Due: 05-11-19
   Modified: 05-03-19
   Filename: javascript.js
   Purpose: Final Project CIS 3030
   Editor: Adobe Dreamweaver
*/

/*image banner*/
var bannerStatus= 1;
var bannerTimer= 4000; /*4000*/

window.onload = function () {  /*starts the loop*/
	bannerLoop();
}

var startBannerLoop = setInterval(function(){  /*keeps the loop going*/
	bannerLoop();
}, bannerTimer);

document.getElementById("main-banner").onmouseenter = function(){
	clearInterval(startBannerLoop);  /*stops Interval with mouse*/
}
document.getElementById("main-banner").onmouseleave = function(){
	startBannerLoop = setInterval(function(){   /*starts at exit*/
		bannerLoop();  
},	 bannerTimer);
}



document.getElementById("imgbanbtn-next").onclick = function() {
	bannerLoop();
}

function bannerLoop() {
	if (bannerStatus === 1) {
		document.getElementById("imgban2").style.opacity = "0";
		setTimeout(function() {
			document.getElementById("imgban1").style.right = "0px";
		    document.getElementById("imgban1").style.zIndex = "1000";
		    document.getElementById("imgban2").style.right = "-1200px";
			document.getElementById("imgban2").style.zIndex = "1500";
			document.getElementById("imgban3").style.right = "1200px";
			document.getElementById("imgban3").style.zIndex = "500";
		}, 500);
		setTimeout(function() {
			document.getElementById("imgban2").style.opacity = "1";
		}, 1000);
		bannerStatus= 2;
	}
	else if (bannerStatus === 2) {
		document.getElementById("imgban3").style.opacity = "0";
		setTimeout(function() {
			document.getElementById("imgban2").style.right = "0px";
		    document.getElementById("imgban2").style.zIndex = "1000";
		    document.getElementById("imgban3").style.right = "-1200px";
			document.getElementById("imgban3").style.zIndex = "1500";
			document.getElementById("imgban1").style.right = "1200px";
			document.getElementById("imgban1").style.zIndex = "500";
		}, 500);
		setTimeout(function() {
			document.getElementById("imgban3").style.opacity = "1";
		}, 1000);
		bannerStatus= 3;
	}
	else if (bannerStatus === 3) {
		document.getElementById("imgban1").style.opacity = "0";
		setTimeout(function() {
			document.getElementById("imgban3").style.right = "0px";
		    document.getElementById("imgban3").style.zIndex = "1000";
		    document.getElementById("imgban1").style.right = "-1200px";
			document.getElementById("imgban1").style.zIndex = "1500";
			document.getElementById("imgban2").style.right = "1200px";
			document.getElementById("imgban2").style.zIndex = "500";
		}, 500);
		setTimeout(function() {
			document.getElementById("imgban1").style.opacity = "1";
		}, 1000);
		bannerStatus= 1;
	}
}