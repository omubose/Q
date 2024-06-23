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
  <body class="no-scroll">
    <div id="splash">
      <div id="splash_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" class="fadeUp"></div></div>
    <div class="container">
      <header class="header">
        <div class="header__container">
          <div class="header__logo">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo-g.png" alt="" /></a>
          </div>
        </div>
      </header>
      <div class="content-area">
        <div class="header-nav">
          <ul class="header-nav__list">
            <li class="header-nav__item"><a href="#">トップ</a></li>
            <li class="header-nav__item"><a href="#concept">こだわり</a></li>
            <li class="header-nav__item"><a href="#menu">お品書き</a></li>
            <li class="header-nav__item"><a href="#access">アクセス</a></li>
          </ul>
          <div class="header-nav__tel">
            <span>お問い合わせ</span>
            <span>000-000-0000</span>
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

        
            <!-- Drawer Content -->
            <div id="js-drawer-content" class="drawer-content">
              <nav
                class="drawer-content__menu"
                aria-label="ドロワーメニューナビゲーション"
              >
                <a href="#" class="drawer-content__link">トップ</a>
                <a href="#concept" class="drawer-content__link">こだわり</a>
                <a href="#menu" class="drawer-content__link">お品書き</a>
                <a href="#access" class="drawer-content__link">アクセス</a>
              </nav>
            </div>


