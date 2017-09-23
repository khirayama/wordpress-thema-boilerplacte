<?php $page_view_logger = new PageViewLogger(); ?>

<main>
  <?php if (is_front_page()) { ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink() ?>">
        <p><?php the_title(); ?></p>
      </a>
    <?php endwhile; endif;?>
  <?php } ?>

  <?php if (is_single()) { ?>
    <?php $post_id = get_the_ID(); ?>

    <?php if ( !is_user_logged_in() ) { ?>
      <?php $page_view_logger->count($post_id); ?>
    <?php } ?>
    <?php echo $page_view_logger->get($post_id); ?>
    <h2>Content</h2>
  <?php } ?>

  <?php $page_view_logger->getPopularPosts(5); while(have_posts()) : the_post(); ?>
    <div class="col-sm-8 col-xs-8">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </div>
  <?php endwhile; ?>
</main>
