<?php $root_url = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>Original</title>
  <link rel="stylesheet" href="<?php echo $root_url; ?>/styles/index.css">
<script src="<?php echo $root_url; ?>/bundle.js"></script>
</head>
<body>
  <header>
    <h1>Header</h1>
    <?php if ( is_user_logged_in() ) { ?>
      <a href="/wp-admin/">管理画面</a>
    <?php } ?>
</header>
  <main>
