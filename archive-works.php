<?php get_header();?>

<div class="w_inner" id="content">
  <ul>

    <?php if (have_posts()):while(have_posts()):the_post();?>

    <li><a href="<?php the_permalink();?>">
    <div class="dete"><?php echo get_the_date("Y.m.d");?> <?php the_title();?>
    </div>
    </a>
</li>

<?php endwhile;endif;?>

</ul>


</div>

<?php get_footer();?>