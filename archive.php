<?php get_header();?>

<div class="w_inner" id="content">
  <ul>

    <?php if (have_poot()):while(have_post()):the_post();?>

    <li><a href="<?php the_parmalink();?>">
    <div class="dete"><?php echo get_the_date("Y.m.d");?>  
    </div>
    <div class="ttl"><?php the_title();?>
    </div>
    </a>
</li>

<?php endwhile;endif;?>

</ul>


</div>

<?php get_footer();?>