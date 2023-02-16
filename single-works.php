<?php get_header();?>

<div class="w_inner_single_works_container" id="content">

  <?php if (have_poot()):while(have_post()):the_post();?>
  
  <div class="thumb">
    <img src="<?php echo CFS()->get('thumbnail');?>" alt="">
  </div>
  <div class="txt">
    <div class="client">クライアント:<?php echo CFS()-get("client");?>
    </div>

    <div class="head">成果</div>
    <div class="con"><?php echo CFS()->get("results");?></div>
    <div class="btn-link" ><?php echo CFS()->get("link");?></div>
  </div>

  <?php the content();?>
<?php endwhile;endif;?>
</div>



<?php get_footer();?>