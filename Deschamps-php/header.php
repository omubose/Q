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
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
  <?php if (is_home() || is_front_page()) : ?>
    <header class="header">
      <div class="header__inner">
        <div class="header__flex">
          <div class="header__flex-left">
            <div>
              <h1 class="header__logo">
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" /></a>
              </h1>
              <span class="header__mag-logo"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/mag-w.png" alt=""
              /></span>
              <nav class="header__nav">
                <ul class="header__list">
                  <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                  <li class="header__item"><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
                  <li class="header__item"><a href="#menu">Menu</a></li>
                  <li class="header__item"><a href="#info">Info</a></li>
                </ul>
              </nav>
            </div>
          </div>
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
          <div class="header__flex-right">
            <ul class="slider">
              <li class="slider-item slider-item01"></li>
              <li class="slider-item slider-item02"></li>
              <li class="slider-item slider-item03"></li>
            </ul>
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
        <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">News</a>
        <a href="<?php echo home_url(); ?>/category/blog" class="drawer-content__link">Blog</a>
        <a href="#menu" class="drawer-content__link">Menu</a>
        <a href="#info" class="drawer-content__link">Info</a>
      </nav>
    </div>

  <?php else : ?>

    <header class="header">
      <div class="header__inner">
        <div class="header__flex">
          <div class="header__flex-left">
            <div>
              <h1 class="header__logo">
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" /></a>
              </h1>
              <span class="header__mag-logo"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/mag-w.png" alt=""
              /></span>
              <!-- <nav class="header__nav">
                <ul class="header__list">
                  <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                  <li class="header__item"><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
                  <li class="header__item"><a href="<?php echo esc_url(home_url('/#menu')); ?>">Menu</a></li>
                  <li class="header__item"><a href="#<?php echo esc_url(home_url('/#info')); ?>">Info</a></li>
                </ul>
              </nav> -->
            </div>
          </div>
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
          <!-- <div class="header__flex-right">
            <ul class="slider">
              <li class="slider-item slider-item01"></li>
              <li class="slider-item slider-item02"></li>
              <li class="slider-item slider-item03"></li>
            </ul>
          </div> -->
        </div>
      </div>
    </header>

    <!-- Drawer Content -->
    <div id="js-drawer-content" class="drawer-content">
      <nav
        class="drawer-content__menu"
        aria-label="ドロワーメニューナビゲーション"
      >
        <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">News</a>
        <a href="<?php echo home_url(); ?>/category/blog" class="drawer-content__link">Blog</a>
        <a href="<?php echo esc_url(home_url('/#menu')); ?>" class="drawer-content__link">Menu</a>
        <a href="<?php echo esc_url(home_url('/#info')); ?>" class="drawer-content__link">Info</a>
      </nav>
    </div>
    <?php endif; ?>
