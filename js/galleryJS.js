// better image preloading @ https://perishablepress.com/press/2009/12/28/3-ways-preload-images-css-javascript-ajax/
function preloader() {
    if (document.getElementById) {
        document.getElementById("pic01").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/kylefield.JPG) no-repeat -9999px -9999px";
        document.getElementById("pic02").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/pjandi.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic03").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/dog.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic04").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/Java_coding.png) no-repeat -9999px -9999px";
        document.getElementById("pic05").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/winning.png) no-repeat -9999px -9999px";
        document.getElementById("pic06").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/friends.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic07").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/rotaract.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic08").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/codingpractice.png) no-repeat -9999px -9999px";
        document.getElementById("pic09").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/cruise01.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic10").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/cruise02.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic11").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/aggiefootball.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic12").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/grilling01.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic13").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/finals01.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic14").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/firstapps.png) no-repeat -9999px -9999px";
        document.getElementById("pic15").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/aggierings01.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic16").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/aggiering02.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic17").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/codingESPN.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic18").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/UPEvolunteer.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic19").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/aggiering03.jpg) no-repeat -9999px -9999px";
        document.getElementById("pic20").style.background = "url(http://brandon-ellis.net/cgi-bin/Gallery/315code.jpg) no-repeat -9999px -9999px";
    }
}
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            if (oldonload) {
                oldonload();
            }
            func();
        }
    }
}
addLoadEvent(preloader);