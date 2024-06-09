<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-13/css/reset.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-13/css/5-13.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>

  <body>
    <header id="fixed-header" class="header">
      <div class="header-flex">
        <h1 class="header__logo">
          <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
        </h1>
        <nav class="header-nav">
          <ul class="header-list">
            <li class="header-item"><a href="<?php echo esc_url( home_url() ); ?>">TOP</a></li>
            <li class="header-item"><a href="#news">NEWS</a></li>
            <li class="header-item"><a href="#about">ABOUT</a></li>
            <li class="header-item"><a href="#live-act">LIVE ACT</a></li>
            <li class="header-item"><a href="#tickets">TICKETS</a></li>
            <li class="header-item"><a href="#access">ACCESS</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__open">
        <button
          type="button"
          id="js-drawer-icon"
          class="drawer-icon"
          aria-label="メニューボタン"
        >
          <span class="drawer-icon__bar">
            <span class="drawer-icon__dot"></span>
          </span>
          <span class="drawer-icon__bar"></span>
          <span class="drawer-icon__bar"></span>
        </button>
      </div>
    </div>

    </header>

       <!-- Drawer Content -->
       <div id="js-drawer-content" class="drawer-content">
        <nav class="drawer-content__menu">
          <a class="drawer-content__link" href="<?php echo esc_url( home_url() ); ?>">TOP</a>
          <a class="drawer-content__link" href="#news">NEWS</a>
          <a class="drawer-content__link" href="#live-act">LIVE ACT</a>
          <a class="drawer-content__link" href="#tickets">TICKETS</a>
          <a class="drawer-content__link" href="#access">ACCESS</a>
      </div>

