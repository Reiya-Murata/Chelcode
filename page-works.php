<?php get_header();?>
<?php
/*
Template Name:works
*/
?>

<div id="content">
  <div id="main">



  <section class="sec-5" id="works">
    <div class="works">
      <h1>WORKS</h1>
      <p>制作実績</p>
    </div> 
      <div class="container-5">

      <!-- #region -->
    <div class="portfolio">
      <div class="ttl"><?php echo CFS()->get("work_title_1");?></div>
      <img class="work" src="<?php echo CFS()->get("work_img_1");?>">
      <br><div class="url"><?php echo CFS()->get("work_url_1");?></div>
    </div>
    <div class="portfolio">
    <div class="ttl"><?php echo CFS()->get("work_title_2");?></div>
      <img class="work" src="<?php echo CFS()->get("work_img_2");?>">
      <br><div class="url"><?php echo CFS()->get("work_url_2");?></div>
    </div>
    <div class="portfolio">
    <div class="ttl"><?php echo CFS()->get("work_title_3");?></div>
      <img class="work" src="<?php echo CFS()->get("work_img_3");?>">
      <br><div class="url"><?php echo CFS()->get("work_url_3");?></div>
    </div>
  </div>
  
  </section>
  </div>
</div>


<?php get_footer();?>