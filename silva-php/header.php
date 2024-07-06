<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>

  <?php if (is_home() || is_front_page()) : ?>
  <body class="no-scroll">
    <div id="wrap">
      
      <header id="header" class="header">
        
      <?php else : ?>
        <body class="no-scroll">
    <div id="wrap">
      
      <header  class="header wp">
      <?php endif; ?>



        <div class="header__inner">
          <div class="header__flex">
            <h1 class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </h1>
            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/info">企業情報</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
              </ul>
              <div class="header__contact">
                <a href="<?php echo home_url(); ?>/contact"
                  ><img src="" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mail-w.png" alt="" /><span
                    >お問い合わせ</span
                  ></a
                >
              </div>
            </nav>
            <div class="header__open">
                <button
                  type="button"
                  id="js-drawer-icon"
                  class="drawer-icon"
                  aria-label="メニューボタン"
                >
                  <span class="drawer-icon__bar"></span>
                  <span class="drawer-icon__bar"></span>
                  <span class="drawer-icon__bar"></span>
                </button>
              </div>
          </div>
        </div>
      </header>

      <!-- Drawer Content -->
      <div id="js-drawer-content" class="drawer-content">
        <nav
          class="drawer-content__menu"
          aria-label="ドロワーメニューナビゲーション"
        >
          <a href="<?php echo home_url(); ?>/about" class="drawer-content__link">About us</a>
          <a href="<?php echo home_url(); ?>/info" class="drawer-content__link">企業情報</a>
          <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">News</a>
          <a href="<?php echo home_url(); ?>/category/blog" class="drawer-content__link">Blog</a>
          <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">Contact</a>
        </nav>
      </div>