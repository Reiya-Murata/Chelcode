<footer>
<div class="copyright"><p>&copy2023 All right reserved</p></div>
</footer>

<script>
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

// スライダー
$(document).on('ready', function() {
  $(".regular_3").slick({
    dots: true, // ドットインジケーターの表示
    infinite: true, // スライドのループを有効にするか
    slidesToShow: 3, // 表示するスライド数を設定
    slidesToScroll: 1 // スクロールするスライド数を設定
  });
});
</script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
ScrollReveal({ 
  reset: false,
  distance:"60px",
  duretion:2000,
  delay:200,
});

ScrollReveal().reveal('.image,.text-1,.photo,h1,h2,h3,p,cheklist,li.check,img.work,.pc-img,box-icon', { delay: 300 ,origin:"bottom"});
ScrollReveal().reveal('.text-box', { delay: 700 ,origin:"right"});
ScrollReveal().reveal('.media-icons i', {
    delay: 200 ,
    origin:"bottom",
    interval:200,});
ScrollReveal().reveal('.media-info li', {
delay:500 ,
origin:"left",
interval:200,});
ScrollReveal().reveal('.sec-2 .image,.sec-3 .image', {
delay:500 ,
origin:"top",});
</script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<?php wp_footer();?>
</body>
</html>