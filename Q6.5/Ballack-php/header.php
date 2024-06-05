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
      href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon .ico" />
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    /> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="js-header" class="header">
      <div class="header__header">
        <div class="inner">
          <h1 class="header__logo">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
          </h1>
        </div>
      </div>
      <div class="inner header__inner">
        <div class="header__card">
          <div class="header__logo-maru">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-maru.png" alt="" /></a>
          </div>
          <h2 class="header__desc">
            <span>誰でも安心</span>
            <span>豊かな自然</span>
            <span>キャンプ場</span>
          </h2>
        </div>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item"><a href="#about">バラックについて</a></li>
            <li class="header__item"><a href="#news">お知らせ</a></li>
            <li class="header__item"><a href="#blog">ブログ</a></li>
            <li class="header__item"><a href="<?php echo home_url(); ?>/contact">コンタクト</a></li>
            <li class="header__item"><a href="#access">アクセス</a></li>
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
    </header>

        <!-- Drawer Content -->
        <div id="js-drawer-content" class="drawer-content">
      <nav class="drawer-content__menu">
        <a class="drawer-content__link" href="#about">バラックについて</a>
        <a class="drawer-content__link" href="#news">お知らせ</a>
        <a class="drawer-content__link" href="#blog">ブログ</a>
        <a class="drawer-content__link" href="<?php echo home_url(); ?>/contact">コンタクト</a>
        <a class="drawer-content__link" href="#access">アクセス</a>
      </nav>
    </div>
