document.getElementById("bars").addEventListener("click", open_close);
var menu = 0;

function open_close() {
    if (menu === 0) {
        menu = 1;
        document.getElementById("sidemenu").style.left = "-200px";
        document.getElementById("area-content").style.marginLeft = "-1px";
        document.getElementById("header").style.marginLeft = "-1px";
    } else {
        menu = 0;
        document.getElementById("sidemenu").style.left = "0";
        document.getElementById("area-content").style.marginLeft = "50px";
        document.getElementById("header").style.marginLeft = "50px";
    }
}