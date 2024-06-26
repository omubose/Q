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
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  </head>
  <?php wp_head(); ?>
  <body>
    <div class="wrap">
    <?php if (is_home() || is_front_page()) : ?>
    
      <header class="header">
        <div class="header__inner">
          <div class="header__flex">

            <h1 id="siteTitle" class="header__site-title">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt=""></a>
            </h1>

            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/reason">Reason</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/service">Service</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
              </ul>
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
      <?php else : ?>
        <header class="header">
        <div class="header__inner">
          <div class="header__flex">
              <div id="siteTitle" class="header__site-title2">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt=""></a>
            </div>
    

            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/reason">Reason</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/service">Service</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
              </ul>
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




        <?php endif; ?>


      <!-- Drawer Content -->
      <div id="js-drawer-content" class="drawer-content">
        <nav
          class="drawer-content__menu"
          aria-label="ドロワーメニューナビゲーション"
        >
          <a href="#" class="drawer-content__link">Top</a>
          <a href="<?php echo home_url(); ?>/about" class="drawer-content__link">About us</a>
          <a href="<?php echo home_url(); ?>/reason" class="drawer-content__link">Reason</a>
          <a href="<?php echo home_url(); ?>/service" class="drawer-content__link">Service</a>
          <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">News</a>
        </nav>
      </div>
