<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php wp_head(); ?>

</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

  <?php do_action('tailpress_site_before'); ?>

  <main id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>

    <header>

      <div class="baseTransition mx-auto grid place-items-center fixed z-[99] top-0 left-0 bg-transparent w-full 
          <?php if (is_admin_bar_showing()):
          echo 'adminFixedHeader';
          else:
          echo 'top-0';
          endif; ?>">
        <div class="md:flex md:justify-between md:items-center py-6 w-full max-w-[2250px] px-[var(--containerPadding)]">
          <div class="flex justify-between items-center w-full">
            <div id="logo" class="relative z-40">
              <?php if (has_custom_logo()) { ?>
              <?php the_custom_logo(); ?>

              <?php } else { ?>
              <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                <?php echo get_bloginfo('name'); ?>
              </a>

              <p class="text-sm font-light text-gray-600">
                <?php echo get_bloginfo('description'); ?>
              </p>

              <?php } ?>
            </div>

            <div class="relative z-40 flex gap-12 lg:hidden">
              <a class="group relative w-[35px] h-[35px]" href="#" aria-label="Toggle navigation"
                id="primary-menu-toggle">
                <svg class="group-[.is--open]:opacity-0 baseTransition" enable-background="new 0 0 512 512" height="35"
                  viewBox="0 0 512 512" width="35" xmlns="http://www.w3.org/2000/svg" id="fi_5259008">
                  <path
                    d="m128 102.4c0-14.138 11.462-25.6 25.6-25.6h332.8c14.138 0 25.6 11.462 25.6 25.6s-11.462 25.6-25.6 25.6h-332.8c-14.138 0-25.6-11.463-25.6-25.6zm358.4 128h-460.8c-14.138 0-25.6 11.463-25.6 25.6 0 14.138 11.462 25.6 25.6 25.6h460.8c14.138 0 25.6-11.462 25.6-25.6 0-14.137-11.462-25.6-25.6-25.6zm0 153.6h-230.4c-14.137 0-25.6 11.462-25.6 25.6 0 14.137 11.463 25.6 25.6 25.6h230.4c14.138 0 25.6-11.463 25.6-25.6 0-14.138-11.462-25.6-25.6-25.6z">
                  </path>
                </svg>

                <svg class="absolute inset-1 baseTransition opacity-0 group-[.is--open]:opacity-100" height="31"
                  viewBox="0 0 329.26933 329" width="31" xmlns="http://www.w3.org/2000/svg" id="fi_1828778">
                  <path
                    d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0">
                  </path>
                </svg>

              </a>
            </div>




            <div id="primary-menu" class="navBase navHandler mr-auto z-30">
              <div class="">
                <?php
              wp_nav_menu(
                array(
                  'menu_class' => 'max-sm:mb-10',
                  'theme_location' => 'primary',
                  'li_class' => '',
                  'fallback_cb' => false,
                )
              );
              ?>
              </div>

            </div>



          </div>
        </div>
    </header>

    <div id="content" class="site-content flex-grow overflow-hidden">



      <?php do_action('tailpress_content_start'); ?>