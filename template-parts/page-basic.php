<?php

/**
 * Template Name: Basic Text Page
 * Description: Page template with basic editor
 *
 */

get_header();

the_post();
?>

<section>
  <div class="container max-sm:pb-14 max-sm:pt-8 py-16 relative z-20 gsap-animated gsap-fade-in gsap-delay-hero">

    <div class="max-w-7xl mx-auto">
      <div class="editorSingle">
        <?php the_content(); ?>
      </div>
    </div>

  </div>
</section>

<?php
get_footer();