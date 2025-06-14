
  <?php if (is_search() || is_archive()):
    $postType = get_post_type(); ?>

    <?php if ($postType === 'post'): ?>
      <article id="post-<?php the_ID(); ?>" class="gsap-animated gsap-fade-in p-10 bg-[#F9F9F9] rounded-xl mb-3">
        <div class="grid md:grid-cols-2 gap-10 items-center">
          <div class="relative overflow-hidden rounded-md cursor-pointer group hover:scale-90 baseTransition">
            <a href="<?php echo the_permalink(); ?>">
              <img class="rounded-xl w-full object-cover h-[100%] min-h-[539px]"
                src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>" />
              <svg class="absolute bottom-0 left-0 baseTransition opacity-0 group-hover:opacity-100" width="50" height="51"
                viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.5" width="50" height="50" rx="5" fill="#FE5004"></rect>
                <path d="M25.4937 18.5H21L25.8457 24.5094L21 30.5H25.4937L30.3333 24.5142L28.0908 21.7324L25.4937 18.5Z"
                  fill="white"></path>
              </svg>
            </a>
          </div>

          <div class="flex flex-col justify-between h-full py-5">
            <div>
              <div class="text-sm uppercase mb-5"><span
                  class="pointer-events-none uppercase"><?php echo the_category(' | ', '', $post->id) ?></span> |
                <?php echo get_field('reading_time') ?> READ</div>
              <h2 class="text-3xl baseTransition hover:text-primary"><a
                  href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title() ?></a></h2>
            </div>
            <div>
              <p class="mb-10 text-[16px] leading-[30px]"><?php echo get_the_excerpt(); ?></p>
              <p class="text-black">
                <a class="underlineLink underlineLinkBlack group baseTransition hover:-translate-y-2 uppercase"
                  href="<?php echo get_the_permalink(); ?>">READ MORE
                  <?php echo do_shortcode('[arrow-svg color="var(--orange)" class="inline-block ml-2 group-hover:ml-6 baseTransition"]') ?>
                </a>
              </p>
            </div>
          </div>


        </div>

      </article> <!--- END FIRST COL -->
    <?php elseif ($postType === 'case-study-post-type'): ?>

      <article id="post-<?php the_ID(); ?>" class="borderMiddle gsap-animated gsap-fade-in">
        <div class="relative overflow-hidden rounded-md cursor-pointer group hover:scale-90 baseTransition mb-10">
          <a href="<?php echo the_permalink(); ?>">
            <img class="rounded-xl w-full object-cover md:h-[600px]"
              src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>" />
            <svg class="absolute bottom-0 right-0 baseTransition opacity-0 group-hover:opacity-100" width="50" height="51"
              viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect y="0.5" width="50" height="50" rx="5" fill="#FE5004"></rect>
              <path d="M25.4937 18.5H21L25.8457 24.5094L21 30.5H25.4937L30.3333 24.5142L28.0908 21.7324L25.4937 18.5Z"
                fill="white"></path>
            </svg>
          </a>
        </div>

        <h3 class="text-4xl mb-5"><?php echo get_the_title() ?></h3>
        <p class="mb-10"><?php echo get_the_excerpt(); ?></p>

        <div class="-ml-2">
          <?php
          $tags = get_the_tags(); // Get the tags for the current post
          if ($tags) {
            $tag_count = count($tags); // Get the number of tags
            $visible_tags = array_slice($tags, 0, 2); // Get the first two tags
            foreach ($visible_tags as $tag) {
              echo '<button class="bg-[#F9F9F9] py-3 px-4 text-base rounded-md hover:text-[#fff] hover:bg-primary baseTransition mx-2">' . $tag->name . '</button>';
            }
            if ($tag_count > 2) {
              echo '<button class="bg-[#F9F9F9] py-3 px-4 text-base rounded-md hover:text-[#fff] hover:bg-primary baseTransition mx-2">+' . ($tag_count - 2) . '</button>';
            }
          }
          ?>
        </div>
      </article> <!--- END FIRST COL -->

    <?php endif; ?>
  <?php else: ?>

    <div class="w-full max-w-full">
      <?php
      /* translators: %s: Name of current post */
      the_content(
        sprintf(
          __('Continue reading %s', 'tailpress'),
          the_title('<span class="screen-reader-text">"', '"</span>', false)
        )
      );

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

  <?php endif; ?>

</article>