<?php get_header();?>
<?php
/*
Template Name:works
*/
?>

<div id="conttent" class="page_wrap winner">
  <div id="main">
    <div class="page_head"><?php the_title();?>
  </div>

  <section class="sec-5" id="work">
    <div class="space">
      <h1>WORKS</h1>
        <p>制作実績</p>
      <div class="container-5">
        
      <!-- #region -->
<div class="sliderArea">
  <div class="regular_3 slider">
    <div class="portfolio">
      <?php echo CFS()->get("work_title_1");?>
      <a href="<?php echo CFS()->get("work_url_1");?>"><img class="work" src="<?php echo CFS()->get("work_img_1");?>" alt="制作サイト1"></a>
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_2");?>
      <a href="<?php echo CFS()->get("work_url_2");?>"><img class="work" src="<?php echo CFS()->get("work_img_2");?>/img/スクリーンショット (4).png" alt="制作サイト2"></a>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_3");?>
      <a href="    <?php echo CFS()->get("work_url_3");?>"><img class="work" src="<?php echo CFS()->get("work_img_3");?>/img/kasanari.jpg" alt="株式会社kasanari"></a>
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_4");?>
      <a href="<?php echo CFS()->get("work_url_4");?>">
      <img class="work" src="<?php echo CFS()->get("work_img_4");?>/img/スクリーンショット (3).png" alt="制作サイト3"></a>
    </div>
  </div>
</div>
  </section>


  </div>
</div>

<?php get_footer();?>