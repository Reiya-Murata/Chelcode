<?php get_header();?>

  <div id="content" class="w_inner" >
    <?php if (have_posts()):while(have_posts()):the_post();?>

      <h1 class="ttl"><?php the_title();?></h1>
      <div class=""><?php echo get_the_date("Y.m.d");?><php the_category(",")?> </div>
      <?php the_content();?>
      
      <?php endwhile;endif;?>

  </div>

<?php get_footer();?>