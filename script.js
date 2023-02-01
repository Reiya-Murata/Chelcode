const burger=document.querySelector(".burger");
const nav=document.querySelector(".nav-links");
const navLinks=document.querySelectorAll(".nav-links li");

burger.addEventListener("click",()=>{
  nav.classList.toggle("nav-active");

  navLinks.forEach((link, index) => {
    if (link.style.animation) {
      link.style.animation = "";
    } else {
      // console.log(index);
      link.style.animation = `navLinksFade 0.5s ease forwards ${
        index / 7 + 0.4
      }s`;
    }
  });
  //burger animataion
  burger.classList.toggle("toggle");
});
// burger menu

window.onload = function(){

setTimeout(()=> {
//loaderを消す
const loader = document.querySelector(".loader");
loader.classList.add("loaded");
// mainを見せる
const main = document.querySelector(".main");
main.style.visibility="visible";
},1500);
};



