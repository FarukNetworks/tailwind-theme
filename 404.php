<?php get_header(); ?>

<div class="container pt-20">
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm text-center">
        <h1 class="text-[42px] leading-[1] mb-4 text-center">Whoops!</h1>
        <p class="text-center text-[28px] leading-[1.2] mb-10">You found a broken page—<br>
          egg-xactly what we didn’t want!</p>


        <div class="grid place-items-center mb-10 max-sm:mb-3">
          <button type="button" class="relative group btn btn-primary">
            <a href="<?= home_url() ?>">
              HOMEPAGE
            </a>
          </button>
        </div>

      </div>
    </div>
  </section>
</div>

<?php get_footer();