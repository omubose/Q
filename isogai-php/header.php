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
      href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap"
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
    <div class="wrap">
      <header class="header">
        <div class="header__inner">
          <div class="header__flex">
            <h1 class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="ロゴ" /></a>
            </h1>
            <nav class="header__nav">
              <ul class="header__list">
              <?php if (is_home() || is_front_page()) : ?>
                <li class="header__item"><a href="#news">お知らせ</a></li>
                <?php else : ?>
                  <li class="header__item"><a href="<?php echo esc_url(home_url('/#news')); ?>">お知らせ</a></li>
                  <?php endif; ?>

                <li class="header__item"><a href="<?php echo home_url(); ?>/about">いそがいについて</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/reservation">ご予約</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/blog">ブログ</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/contact">コンタクト</a></li>
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
        <?php if (is_home() || is_front_page()) : ?>
          <a href="#news" class="drawer-content__link">お知らせ</a>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url('/#news')); ?>" class="drawer-content__link">お知らせ</a>
            <?php endif; ?>

          <a href="<?php echo home_url(); ?>/about" class="drawer-content__link">いそがいについて</a>
          <a href="<?php echo home_url(); ?>/reservation" class="drawer-content__link">ご予約</a>
          <a href="<?php echo home_url(); ?>/category/blog" class="drawer-content__link">ブログ</a>
          <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">コンタクト</a>
        </nav>
      </div>