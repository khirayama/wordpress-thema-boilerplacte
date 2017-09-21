<main>
  <?php if (is_front_page()) { ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink() ?>">
        <p><?php the_title(); ?></p>
      </a>
    <?php endwhile; endif;?>
  <?php } ?>

  <?php if (is_single()) { ?>
    <h2>Content</h2>
  <?php } ?>
</main>
