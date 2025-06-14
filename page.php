<?php get_header(); ?>

<main>

  <?php if (have_rows('homepage-content')):
    while (have_rows('homepage-content')):
      the_row(); ?>

  <?php get_template_part('blocks/homepage/block', 'hero-section'); ?>

  <?php endwhile;
  endif; ?>


  <?php if (have_rows('inner-page-content')):
    while (have_rows('inner-page-content')):
      the_row(); ?>

  <?php get_template_part('blocks/shared/block', 'page-title'); ?>

  <?php endwhile;
  endif; ?>


  <?php the_content(); ?>

</main>


<?php
get_footer();