<?php get_header();?>
<?php
/*
Template Name:works
*/
?>

<div id="conttent" class="page_wrap winner">
  <div id="main">



  <section class="sec-5" id="work">
    
      <
      <div class="container-5">
      <h1>WORKS</h1>
        <p>制作実績</p>
      <!-- #region -->
    <div class="portfolio">
      <?php echo CFS()->get("work_title_1");?>
      <?php echo CFS()->get("work_url_1");?>
      <img class="work" src="<?php echo CFS()->get("work_img_1");?>">
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_2");?>
      <?php echo CFS()->get("work_url_2");?>
      <img class="work" src="<?php echo CFS()->get("work_img_2");?>">
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_3");?>
      <?php echo CFS()->get("work_url_3");?>
      <img class="work" src="<?php echo CFS()->get("work_img_3");?>">
    </div>
  </div>
  </div>
  </section>


  </div>
</div>

<?php get_footer();?>