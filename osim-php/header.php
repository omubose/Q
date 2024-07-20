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
      href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrap">
      <header class="header">
        <div class="header__aside">
          <span>家</span>
          <span>事</span>
          <span>代</span>
          <span class="no-background">行</span>
        </div>

        <div class="header__flex">
        <?php if (is_home() || is_front_page()) : ?>
          <h1 class="header__logo">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
          </h1>
          <?php else : ?>
            <div class="header__logo">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </div>
            <?php endif; ?>


          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item b"><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
              <li class="header__item b"><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
              <li class="header__item b"><a href="<?php echo home_url(); ?>/works">WORKS</a></li>
              <li class="header__item"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
            </ul>
          </nav>
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
          <a href="<?php echo esc_url( home_url() ); ?>" class="drawer-content__link">HOME</a>
          <a href="<?php echo home_url(); ?>/company" class="drawer-content__link">会社案内</a>
          <a href="<?php echo home_url(); ?>/works" class="drawer-content__link">WORKS</a>
          <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">CONTACT</a>
        </nav>
      </div>

