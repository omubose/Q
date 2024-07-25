<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap"
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
  <body>
    <div id="wrap">
      <header class="header">
        <div class="header__inner">
          <div class="header__flex">
          <?php if (is_home() || is_front_page()) : ?>
            <h1 class="header__logo header__logo-hidden">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </h1>
            <?php else : ?>
              <div class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </div>
            <?php endif; ?>



            <nav class="header__nav gnavi">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo esc_url( home_url() ); ?>">home</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/lessons">one-on-one lessons</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/coaching">coaching</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/jobs">coaching Jobs</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/voice">voice</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
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
      <!-- Drawer Content -->
      <div id="js-drawer-content" class="drawer-content">
        <nav
          class="drawer-content__menu"
          aria-label="ドロワーメニューナビゲーション"
        >
          <a href="<?php echo esc_url( home_url() ); ?>" class="drawer-content__link">home</a>
          <a href="<?php echo home_url(); ?>/lessons" class="drawer-content__link">one-on-one lessons</a>
          <a href="<?php echo home_url(); ?>/coaching" class="drawer-content__link">coaching</a>
          <a href="<?php echo home_url(); ?>/jobs" class="drawer-content__link">coaching Jobs</a>
          <a href="<?php echo home_url(); ?>/category/voice" class="drawer-content__link">voice</a>
        </nav>
      </div>