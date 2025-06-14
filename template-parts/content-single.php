<main class="relative z-10">

  <section>
    <div class="container mt-[96px] border-b border-dotted border-[#ccc] py-5">
      <div class="relative flex items-end z-20">

        <div class="w-full lg:max-w-[70%]">

          <h1 class="base90 lg:!text-[80px] customTitleAnimation relative inline-block text-left leading-[1] mb-5">
            <?php echo get_the_title(); ?>
            <div class="absolute top-0 bg-gradient-to-r from-primary to-secondary h-full customGradientBgAnimation"></div>
          </h1>

          <p class="!font-[500] text-left">
            <?php the_date(); ?> | <span
              class="text-[#A65E8E] categoryList"><?php echo get_the_category_list(', '); ?></span>
           <br class="hidden max-sm:block"> | <span class="read_time"><?php  echo reading_time(); ?></span>
          </p>
        </div>

      </div>

    </div>
  </section>


  <section>
    <div class="container pb-14 pt-5">

      <div class="grid grid-cols-1 gap-y-10 lg:grid-cols-3 lg:gap-32">
        <div class="col-span-2 gsap-animated gsap-fade-in gsap-delay-hero max-lg:order-2 lg:px-16 xl:px-20">


          
		<div class="flex flex-row items-center mb-10">
            <div class="w-[150px] mr-6 overflow-hidden rounded-[24px]">
              <?php echo get_avatar(get_the_author_meta('ID'), 150); ?>
            </div>
            <div class="w-full">
              <h3 class="text-[20px] leading-[20px] mb-2"><?php echo get_the_author_meta('nickname'); ?></h3>
              <p class="text-[16px] leading-[20px] mb-3"><?php echo get_field('excerpt', 'user_' . get_the_author_meta('ID')); ?></p>

              <a class="flex items-center gap-2 group" type="button" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <span class="text-[16px] baseTransition !font-[600] text-[#A65E8E] group-hover:text-primary">
                  More From <?php echo get_the_author_meta('first_name'); ?>
                </span>
                <svg class="arrowsBounce" width="12" height="11" viewBox="0 0 12 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="baseTransition group-hover:stroke-primary" d="M2 1.5L6 4.5L10 1.5" stroke="#A65E8E" stroke-width="1.5" stroke-linecap="square"></path>
                  <path class="baseTransition group-hover:stroke-primary" d="M2 6.5L6 9.5L10 6.5" stroke="#A65E8E" stroke-width="1.5" stroke-linecap="square"></path>
                </svg>

              </a>
            </div>
          </div>

          <figure class="mb-8">
    		<?php the_post_thumbnail('full', ['class' => 'rounded-[24px]']); ?>
          </figure>
          <div class="editorSingle">
            <?php the_content(); ?>
          </div>
			

			<div class="py-5">
				<?php get_template_part('components/post', 'navigation'); ?>
			</div>


          <?php
          wp_link_pages(
            array(
              'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
              'after' => '</div>',
              'link_before' => '<span>',
              'link_after' => '</span>',
              'pagelink' => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
              'separator' => '<span class="screen-reader-text">, </span>',
            )
          );
          ?>

        </div>
        <div id="sidebar" class="gsap-animated gsap-fade-in gsap-delay-hero max-lg:order-1">
          <div class="overflow-hidden rounded-[24px] mb-14">
            <?php echo do_shortcode('[ez-toc]'); ?>
          </div>

          <div>
            <?php if (get_field('sidebar-banner-heading')): ?>

              <div class="max-sm:p-8 py-10 pr-10 pl-14 bg-gradient-to-r from-primary to-secondary rounded-[24px]">
                <h2 class="text-white text-[32px] leading-[32px] mb-8"><?php echo get_field('sidebar-banner-heading'); ?>
                </h2>
                <?php if(get_field('button')): ?>
				  <button class="basicWhiteButton">
                  <a href="<?php echo get_field('button')['url']; ?>">
                    <?php echo get_field('button')['title']; ?>
                  </a>
                </button>
				  <?php else: ?>
				    <button class="basicWhiteButton">
                  <a href="<?php echo home_url('/contact') ?>">
                    GET IN TOUCH
                  </a>
                </button>
				  <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>