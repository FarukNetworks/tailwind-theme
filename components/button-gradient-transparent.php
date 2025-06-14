<button type="button" class="relative group">
  <div
    class="bg-gradient-to-r from-primary to-secondary baseTransition opacity-0 group-hover:opacity-100 absolute bottom-0 left-0 rounded-full w-full h-[40.5px]">
  </div>
  <a class="buttonGradientTransparent !text-[16px]" href="<?php echo get_sub_field('button')['url']; ?>">
    <?php echo get_sub_field('button')['title']; ?>
  </a>

  <span
    class="absolute top-1/2 left-1/2 whitespace-nowrap -translate-x-1/2 -translate-y-1/2 group-hover:text-white baseTransition !font-[500] !text-[16px] pointer-events-none"><?php echo get_sub_field('button')['title']; ?></span>
</button>