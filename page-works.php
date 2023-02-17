<?php get_header();?>
<?php
/*
Template Name:works
*/
?>

<div id="content" class="page_wrap w_inner">
  <div id="main">



  <section class="sec-5" id="work">
    <div class="works">
      <h1>WORKS</h1>
      <p>制作実績</p>
    </div> 
      <div class="container-5">

      <!-- #region -->
    <div class="portfolio">
      <?php echo CFS()->get("work_title_1");?>
      <img class="work" src="<?php echo CFS()->get("work_img_1");?>">
      <br><?php echo CFS()->get("work_url_1");?>
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_2");?>
      <img class="work" src="<?php echo CFS()->get("work_img_2");?>">
      <br><?php echo CFS()->get("work_url_2");?>
    </div>
    <div class="portfolio">
    <?php echo CFS()->get("work_title_3");?>
      <img class="work" src="<?php echo CFS()->get("work_img_3");?>">
      <br><?php echo CFS()->get("work_url_3");?>
    </div>
  </div>
  
  </section>
  </div>
</div>


<?php get_footer();?>