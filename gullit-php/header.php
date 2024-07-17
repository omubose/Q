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
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap"
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
      <div class="header__logo-p">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-p.png " alt="" /><span class="TextRandomAnime"
          >Wings to Your World!</span
        >
      </div>
      <header id="header" class="header">
        <div class="header__inner">
          <div class="header__flex">
          <?php if (is_home() || is_front_page()) : ?>
            <h1 class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>">Gullit</a>
            </h1>
            <?php else : ?>
              <div class="header__logo">
              <a href="<?php echo esc_url( home_url() ); ?>">Gullit</a>
            </div>
            <?php endif; ?>
            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                <li class="header__item has-child">
                <?php if (is_home() || is_front_page()) : ?>
                  <a href="#business">事業紹介</a>
                  <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/#business')); ?>">事業紹介</a>
                    <?php endif; ?>
                  <ul class="header__drop-ul">
                    <li class="header__drop-li">
                      <a href="<?php echo home_url(); ?>/transport">
                        <div class="header__drop-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/j2.jpg" alt="" />
                        </div>
                        <span class="header__drop-title">航空運輸事業</span>
                      </a>
                    </li>
                    <li class="header__drop-li">
                      <a href="<?php echo home_url(); ?>/airport">
                        <div class="header__drop-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/j3.jpg" alt="" />
                        </div>
                        <span class="header__drop-title">空港運営事業</span>
                      </a>
                    </li>
                    <li class="header__drop-li">
                      <a href="<?php echo home_url(); ?>/cargo">
                        <div class="header__drop-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/j4.jpg" alt="" />
                        </div>
                        <span class="header__drop-title">航空貨物事業</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="header__item"><a href="<?php echo home_url(); ?>/category/actual">実績紹介</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/company">企業情報</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/column">コラム</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
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
          <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">News</a>
          <?php if (is_home() || is_front_page()) : ?>
          <a href="#business" class="drawer-content__link has-child">事業紹介 </a>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url('/#business')); ?>" class="drawer-content__link has-child">事業紹介 </a>
          <?php endif; ?>
          <a href="<?php echo home_url(); ?>/category/actual" class="drawer-content__link">実績紹介</a>
          <a href="<?php echo home_url(); ?>/company" class="drawer-content__link">企業情報</a>
          <a href="<?php echo home_url(); ?>/category/column" class="drawer-content__link">コラム</a>
          <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">お問い合わせ</a>
        </nav>
      </div>
