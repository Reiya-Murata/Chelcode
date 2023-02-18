<?php get_header();?>
<?php
/*
Template Name:works
*/
?>

<div id="content">
<div id="main">
  <section class="sec-5 w_inn" id="works">
  <div class="works">
      <div class="page_head"><h1>WORK</h1>
        <div>
          <p>制作実績</p>
        </div>
      </div> 
    <div class="container-5">  
      
        <div class="portfolio txt">
          <div class="ttl head"><?php echo CFS()->get  ("work_title_1");?></div>
          <div class="img"><img class="work" src="<?php echo CFS()->get("work_img_1");?>"></div>
          <br><div class="url"><?php echo CFS()->get  ("work_url_1");?></div>
        </div>
      
      
        <div class="portfolio txt">
          <div class="ttl page_head"><?php echo CFS()->get  ("work_title_2");?></div>
          <div class="img"><img class="work" src="<?php echo CFS()->get("work_img_2");?>"></div>
          <br><div class="url"><?php echo CFS()->get  ("work_url_2");?></div>
        </div>
      
      
        <div class="portfolio txt">
          <div class="ttl head"><?php echo CFS()->get  ("work_title_3");?></div>
          <div class="img"><img class="work" src="<?php echo CFS()->get("work_img_3");?>"></div>
          <br><div class="url"><?php echo CFS()->get  ("work_url_3");?></div>
        </div>
    
    </div>
    <a href="">一覧を見る</a>
  </div>
</section>
</div>
</div>


<?php get_footer();?>