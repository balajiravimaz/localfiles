function changeimg(imgnumber) {
    var imgname = ["img/king.jpg", "img/king1.jpg"];
    var randnum = Math.floor(Math.random() * imgname.length);
    var imgshow = document.body.style.backgroundImage;
    document.body.style.backgroundImage = 'url(' + imgname[randnum] + ')';
}
window.onload = changeimg;