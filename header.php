<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="discripton" content="HP・LP・Webサイト格安で作成いたします!。最安5万円～。格安でホームページを作りたい企業様・個人事業主様お気軽にご相談ください!">
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/style.css">
  <title>ChelCode 格安 HP・LP・Webサイト制作</title>
  <link rel="icon" href="<?php bloginfo("template_url");?>/img/logo (5).png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
<?php wp_head();?>
</head>

<body>
  <!-- nav-sectioon -->
  <section class="nav-section">
    <header> 
      <nav>
        <div class="logo">
          <img src="<?php bloginfo("template_url");?>/img/logo (4).png" alt="ChelCode">
        </div>
        <ul class="nav-links">
          <li><a href="<?php bloginfo("url");?>">HOME</a></li>
          <li><a href="<?php bloginfo("url");?>/about">ABOUT</a></li>
          <li><a href="<?php bloginfo("url");?>/service">SERVICE</a></li>
          <li><a href="<?php bloginfo("url");?>/quality">QUALITY</a></li>
          <li><a href="<?php bloginfo("url");?>/works">WORKS</a></li>
          <li><a href="<?php bloginfo("url");?>/contact">CONTACT</a></li>
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
</header>
<!-- heade img　条件分岐 -->
      <?php if(is_front_page()){?>
        <div class="header_img1"><!-- topページ -->
        <img src="<?php bloginfo('template_url');?>/img/hader_img.jpg">
        </div>
      <?php }else if(is_page('about')){?>
        <div class="header_img"><!-- aboutページ -->
        <img src="<?php bloginfo('template_url');?>/img/24633751_l.jpg">
        </div>
        <?php }else if(is_page('service')){?>
          <div class="header_img"><!-- serviceページ -->
        <img src="<?php bloginfo('template_url');?>/img/24633751_l.jpg" >
      </div>
      <?php }else if(is_page('quality')){?>
        <div class="header_img"><!-- qualityページ -->
        <img src="<?php bloginfo('template_url');?>/img/24633751_l.jpg" >
        </div>
        <?php }else if(is_page('works')){?>
          <div class="header_img"><!-- worlks -->
        <img src="<?php bloginfo('template_url');?>/img/24633751_l.jpg" >
      </div>
      <?php }else if(is_page('works')){?>
        <div class="header_img"><!-- priceページ -->
        <img src="<?php bloginfo('template_url');?>/img/24633751_l.jpg" >
        </div>
        <?php }else if(is_page('contact')){?>
          <div class="header_img"><!-- contactページ -->
        <img src="<?php bloginfo('template_url');?>/img/24633751_l.jpg" >
      </div>
        <?php }else{}?>

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

    