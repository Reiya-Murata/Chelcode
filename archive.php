<?php get_header();?>

<div class="w_inner" id="content">

<div class="head">お知らせ</div>
  <ul>

    <?php if (have_posts()):while(have_posts()):the_post();?>

    <li><a href="<?php the_permalink();?>">
    <div class="date2"><?php echo get_the_date("Y.m.d");?> <?php the_title();?>
    </div>
    </a>
</li>

<?php endwhile;endif;?>

</ul>


</div>

<?php get_footer();?>