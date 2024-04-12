<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<script src="https://cdn.tailwindcss.com"></script>

</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<script>

/** @type {import('tailwindcss').Config} */
tailwind.config = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt',
        './homepage.php'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        screens: {
            'xs': '480px',
            'sm': '767px',
            'md': '990px',
            'lg': '1200px',
            'xl': '1600px',
            '2xl': '1920px'
        }
    },
};


</script>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="">

		<div class="mx-auto container px-0 fixed left-0 z-30 bg-white w-full <?php if ( is_admin_bar_showing()): echo 'adminFixedHeader'; else: 'top-0'; endif ?>">
			<div class="md:flex md:justify-between md:items-center py-6">
				<div class="flex justify-between items-center">
					<div class="relative z-30">
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="md:hidden z-30">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'navBase navHandler',
						'menu_class'      => 'md:flex md:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'md:mx-4 text-center md:text-left',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
