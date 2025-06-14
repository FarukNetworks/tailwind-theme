<?php get_header(); ?>

<?php
// Initialize the title variable
$title = '';

// Display page title based on the type of page
if (is_singular()) {
    // For single posts or pages
    $title = get_the_title(); // Get the title of the post or page
} elseif (is_category()) {
    // For category archive pages
    $title = single_cat_title('', false); // Get the name of the category
} elseif (is_tag()) {
    // For tag archive pages
    $title = single_tag_title('', false); // Get the name of the tag
} elseif (is_author()) {
    // For author archive pages
    $title = get_the_author(); // Get the name of the author
} elseif (is_archive()) {
    // For other archives (categories, tags, custom post types)
    $title = get_the_archive_title(); // Get the archive title
} elseif (is_search()) {
    // For search results page
    $title = sprintf(__('Search Results for: %s', 'textdomain'), get_search_query());
} elseif (is_404()) {
    // For 404 error pages
    $title = __('Page Not Found', 'textdomain');
} elseif (is_home()) {
    // For the blog posts page (home page if it shows latest posts)
    $title = __('Blog', 'textdomain');
} else {
    // Default title (for home, etc.)
    $title = get_bloginfo('name'); // Get the site name
}





?>

<?php if(is_author()): ?>

<section class="relative z-10">
  <div class="container mt-[96px] border-b border-dotted border-[#ccc] pb-14">
    <div class="relative z-20 flex items-center max-w-7xl mx-auto">
		
		<div class="w-1/3 relative">	
              <figure class="overflow-hidden rounded-[24px] max-w-[350px] max-h-[350px]">
			<?php echo get_avatar(get_the_author_meta('ID'), 350, '', '', array('class' => 'w-full h-full object-cover')); ?>
			</figure>
			
			<div class="max-w-[350px] relative">
				 <?php if(get_the_author_meta('linkedin', get_the_author_meta('ID'))): ?>
			<a href="<?php echo esc_url(get_the_author_meta('linkedin', get_the_author_meta('ID'))); ?>" target="_blank" class="absolute left-1/2 -bottom-5 -translate-x-1/2 baseTransition hover:scale-110" type="button">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" x="0" y="0" viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><circle cx="56.098" cy="56.097" r="56.098" style="" fill="#ad6996" data-original="#007ab9" opacity="1"/><path d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149zm-54.96-36.642c-4.587 0-7.588 3.011-7.588 6.967 0 3.872 2.914 6.97 7.412 6.97h.087c4.677 0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967zm-6.791 59.77H41.27v-40.33H27.865v40.33z" style="" fill="#ffffff" data-original="#f1f2f2" class="" opacity="1"/></g></svg>

              </a>
			<?php endif; ?>
			</div>
		</div>
		
		<div class="w-2/3">
			 <h1 class="text-[90px] leading-[1] mb-5 customTitleAnimation relative inline-block items-center">
        <?php echo get_the_author_meta('nickname'); ?>
        <div class="absolute top-0 bg-gradient-to-r from-primary to-secondary h-full customGradientBgAnimation"></div>
      </h1>
			 <p class="text-[19px] leading-[1.15] mb-8"><?php echo get_the_author_meta('description'); ?></p>
			
			<div class="flex items-center gap-2 group" type="button">
                <span class="text-[16px] baseTransition !font-[600] uppercase">
                  Recent Articles From <?php echo get_the_author_meta('first_name'); ?>
                </span>
                <svg class="arrowsBounce" width="12" height="11" viewBox="0 0 12 11" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1.5L6 4.5L10 1.5" stroke="#231F20" stroke-width="1.5" stroke-linecap="square"></path>
                  <path d="M2 6.5L6 9.5L10 6.5" stroke="#231F20" stroke-width="1.5" stroke-linecap="square"></path>
                </svg>

              </div>
		</div>
   
    </div>

  </div>
</section>

<?php else: ?>

<section class="relative z-20">
  <div class="container mt-[96px] border-b border-dotted border-[#ccc] pb-10">
    <div class="relative grid place-items-center z-20">
      <h1 class="basePageTitle mb-3 customTitleAnimation relative inline-block">
        <?php echo  $title; ?>
        <div class="absolute top-0 bg-gradient-to-r from-primary to-secondary h-full customGradientBgAnimation"></div>
      </h1>
		
		<div class="relative">
			
		 <div class="hidden max-lg:grid max-lg:place-items-center mt-7">
			  <button id="categories-menu-btn" type="button" class="max-lg:flex max-lg:gap-2 max-lg:items-center hidden text-[20px] !font-[500]">
			  	CATEGORIES 
				  <svg class="rotate-90" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="#231F20" stroke-width="1.5" stroke-linecap="square"></path>
                      </svg>
		  	  </button>
		  </div>
		
      <div id="categories-menu" class="max-lg:gap-0 max-lg:w-[100vw] max-lg:left-[-30vw] max-sm:p-5 max-lg:p-10 max-lg:flex-col max-lg:absolute max-lg:top-10 max-lg:bg-white flex gap-10 mt-7 gsap-animated gsap-fade-in-up gsap-delay-hero">
    
        <?php // print the categories in grid 
        
        $categories = get_categories();

        foreach ($categories as $category) {
          echo '<a href="' . get_category_link($category->term_id) . '"  class="max-sm:text-[18px] max-lg:whitespace-nowrap baseTransition hover:opacity-70 inline-block text-[20px] !font-[500] ' . (is_category($category->slug) ? 'text-primary hover:text-primary' : '') . '">' . $category->name . '</a>';
        }
        ?>
      </div>
		</div>
			
    </div>

  </div>
</section>

<?php endif; ?>


<?php if (have_posts()): // if have posts ?>

  <section class="relative z-10">
    <div class="container max-sm:py-10 py-14">
      <div id="posts-container" class="grid grid-cols-1 gap-10 md:grid-cols-3 md:gap-20 gsap-animated gsap-fade-in-up-stagger">
        <?php while (have_posts()):
          the_post(); ?>

          <article>
            <figure class="w-full h-[350px] overflow-hidden rounded-[24px] relative group mb-3">
              <div class="absolute inset-0 rounded-[24px] w-full h-full bg-secondary bg-opacity-70 grid place-items-center opacity-0 group-hover:opacity-100 baseTransition z-10 pointer-events-none	">
                <span class="text-white text-center text-[20px] !font-[600]">READ MORE</span>
              </div>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover baseTransition group-hover:scale-105']); ?>
              </a>
            </figure>
            <p class="opacity-70 text-[16px] -mb-3 text-center">
              <?php the_date(); ?> | <?php echo reading_time(); ?>
            </p>
            <h2>
              <a href="<?php the_permalink(); ?>"
                class="baseTransition hover:opacity-70 block mt-5 text-[28px] leading-[1.2] !font-[600] text-center"><?php the_title(); ?></a>
            </h2>

<!--             <div class="editorExcerpt">
              <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
            </div> -->
          </article>

        <?php endwhile; ?>
      </div>

      <div class="grid place-items-center mb-10 mt-16">
          <button id="load-more-posts" type="button" class="relative group">
  <div class="bg-gradient-to-r from-primary to-secondary baseTransition opacity-0 group-hover:opacity-100 absolute inset-0 rounded-full w-full h-[40px]"></div>
  <span class="buttonGradientTransparent !text-[16px]">
              LOAD MORE
            </span>
          
            <span
              class="absolute top-1/2 left-1/2 whitespace-nowrap -translate-x-1/2 -translate-y-1/2 group-hover:text-white baseTransition !font-[500] !text-[16px]">LOAD MORE</span>
          </button>
      </div>
    </div>
  </section>

<?php else: // if no posts print the content ?>

  <?php the_content(); ?>

<?php endif; // end of loop ?>

<?php
get_footer();
