<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrap">
      <header class="header">
        <div class="header__inner">
          <div class="header__flex">
            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/mission">OUR MISSION</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/service">SERVICE</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">NEWS</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/blog">BLOG</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
              </ul>
              <h1 class="header__logo">
                <a href="<?php echo esc_url( home_url() ); ?>">CHINESE RESTAURANT　OKANO</a>
              </h1>
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
            <a href="<?php echo home_url(); ?>/mission" class="drawer-content__link">OUR MISSION</a>
            <a href="<?php echo home_url(); ?>/service" class="drawer-content__link">SERVICE</a>
            <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">NEWS</a>
            <a href="<?php echo home_url(); ?>/category/blog" class="drawer-content__link">BLOG</a>
            <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">CONTACT</a>
          </nav>
        </div>