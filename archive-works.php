<?php get_header();?>

<div class="w_inner" id="content">
  <div class="head"><h1>実績一覧</h1></div>
  
<div class="archive-works">
  <?php
    $args=array(
    "post_type"=>"works",//投稿タイプスラッグ
    "posts_per_page"=>0
  );
  $the_query=new WP_Query($args);
  if($the_query->have_posts()):?>
  <?php while($the_query->have_posts()):$the_query->the_post();?>
  
  <a href="<?php the_permalink();?>">
    <div class="portfolio card-effect">
    <div class="img"><img src="<?php echo CFS()->get("thumbnail");?>"></div>
    <div class="client">クライアント:<?php echo CFS()->get("client");?></div>
    </div>
  </a>
  <?php endwhile;?>
  </div>
  <?php wp_reset_postdata();?>
  <?php else:?>
  <?php endif;?>
  </div>


<?php get_footer();?>