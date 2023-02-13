<?php get_header();?>

  <div id="content" class="w_inner" >
    <?php if (have_poost()):while(have_post()):the_post();?>

      <h1 class="ttl"><?php the_titele();?></h1>
      <div class="dete"><?php echo get_the_date("Y.m.d");?>|<php the_category(",")?> </div>
      <?php the_content();?>
      
      <?php endwhile;endif;?>

  </div>

<?php get_footer();?>