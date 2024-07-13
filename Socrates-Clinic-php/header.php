<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'name' ); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
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
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </h1>
            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="#">ホーム</a></li>
                <li class="header__item"><a href="#about">当院について</a></li>
                <li class="header__item"><a href="#treatment">診療内容</a></li>
                <li class="header__item"><a href="#doctor">医師紹介</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
              </ul>
            </nav>
            <?php else : ?>
              <div class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </div>
            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo esc_url( home_url() ); ?>">ホーム</a></li>
                <li class="header__item"><a href="<?php echo esc_url(home_url('/#about')); ?>">当院について</a></li>
                <li class="header__item"><a href="<?php echo esc_url(home_url('/#treatment')); ?>">診療内容</a></li>
                <li class="header__item"><a href="<?php echo esc_url(home_url('/#doctor')); ?>">医師紹介</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
              </ul>
            </nav>
             <?php endif; ?>

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
        <?php if (is_home() || is_front_page()) : ?>
          <a href="#" class="drawer-content__link">ホーム</a>
          <a href="#about" class="drawer-content__link">当院について</a>
          <a href="#treatment" class="drawer-content__link">診療内容</a>
          <a href="#doctor" class="drawer-content__link">医師紹介</a>
          <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">お知らせ</a>
          <?php else : ?>
            <a href="<?php echo esc_url( home_url() ); ?>" class="drawer-content__link">ホーム</a>
          <a href="<?php echo esc_url(home_url('/#about')); ?>" class="drawer-content__link">当院について</a>
          <a href="<?php echo esc_url(home_url('/#treatment')); ?>" class="drawer-content__link">診療内容</a>
          <a href="<?php echo esc_url(home_url('/#doctor')); ?>" class="drawer-content__link">医師紹介</a>
          <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">お知らせ</a>
         <?php endif; ?>
        </nav>
      </div>