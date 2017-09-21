<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_template_part('meta') ?>
</head>
<body>
  <?php if ( is_user_logged_in() ) { ?>
    <a href="/wp-admin/">管理画面</a>
  <?php } ?>
  <?php get_template_part('header') ?>
  <?php get_template_part('main') ?>
  <?php get_template_part('footer') ?>
</body>
</html>
