<?php get_header();?>

<div id="conttent" class="page_wrap winner" >

  <div id="main">
    <?php if (have_poost()):while   (have_post()):the_post();?>

    <h1><?php the_titele();?></h1>
    <div class="page_container">
      <?php the_content();?>
    </div>
    <?php endwhile;endif;?>

    </div>
  </div>    

<?php get_footer();?>