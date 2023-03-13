<footer>
<div class="copyright"><p>&copy2023 All right reserved</p></div>
</footer>
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

<?php wp_footer();?>
</body>
</html>