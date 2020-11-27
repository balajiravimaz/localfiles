function slide(img){
  document.querySelector(".pepsi").src=img;
}
function changebg(col){
  let scr=document.querySelector(".sci");
  scr.style.background=col;
}

// menu toggle
function toglemenu(){
  let menu=document.querySelector(".togglemenu");
  let nav=document.querySelector(".nav");
  menu.classList.toggle("active");
  nav.classList.toggle("active");
}