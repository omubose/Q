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
      href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css"
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
            <h1 class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" alt="" /></a>
            </h1>
            <?php else : ?>
              <div class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" alt="" /></a>
            </div>
            <?php endif; ?>

            <nav class="header__nav gnavi">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <?php if (is_home() || is_front_page()) : ?>
                <li class="header__item"><a href="#news">News</a></li>
                <?php else : ?>
                  <li class="header__item"><a href="#<?php echo esc_url(home_url('/#news')); ?>">News</a></li>
                  <?php endif; ?>
                <li class="header__item"><a href="<?php echo home_url(); ?>/business">Business</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
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

      <!-- Drawer Content -->
      <div id="js-drawer-content" class="drawer-content">
          <nav
            class="drawer-content__menu"
            aria-label="ドロワーメニューナビゲーション"
          >
            <a href="<?php echo esc_url( home_url() ); ?>" class="drawer-content__link">Home</a>
            <a href="<?php echo home_url(); ?>/about" class="drawer-content__link">About us</a>
            <?php if (is_home() || is_front_page()) : ?>
            <a href="#news" class="drawer-content__link">News</a>
            <?php else : ?>
              <a href="<?php echo esc_url(home_url('/#news')); ?>" class="drawer-content__link">News</a>
              <?php endif; ?>

            <a href="<?php echo home_url(); ?>/business" class="drawer-content__link">Business</a>
            <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">Contact</a>
          </nav>
        </div>