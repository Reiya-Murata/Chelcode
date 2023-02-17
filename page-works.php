<?php get_header();?>
<?php
/*
Template Name:works
*/
?>

<div id="conttent" class="page_wrap winner">
  <div id="main">



  <section class="sec-5" id="work">
    <div class="space">
      <h1>WORKS</h1>
        <p>制作実績</p>
      <div class="container-5">
        
      <!-- #region -->
    <div class="portfolio">
      <?php echo CFS()->get("work_title_1");?>
      <?php echo CFS()->get("work_url_1");?><img class="work" src="<?php echo CFS()->get("work_img_1");?>" alt="制作サイト1"></a>
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_2");?>
      <a href="<?php echo CFS()->get("work_url_2");?>"><img class="work" src="<?php echo CFS()->get("work_img_2");?>></a>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_3");?>
      <a href="<?php echo CFS()->get("work_url_3");?>"><img class="work" src="<?php echo CFS()->get("work_img_3");?>"></a>
    </div>
  </div>

  </section>


  </div>
</div>

<?php get_footer();?>