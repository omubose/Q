<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrap ">
    <?php if (is_home() || is_front_page()) : ?>
      <header class="header scroll-header">
        <div class="header__flex">
          <h1 class="header__logo">
            <a href="<?php echo esc_url( home_url() ); ?>" class="scroll-logo"></a>
          </h1>
          <nav class="header__nav">
            <div class="header__list-flex scroll-nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/works">Works</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/strong-field">Strong field</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
              </ul>
            </div>
            <ul class="header__contact">
              <li class="header__contact-tel">
                <img src="<?php echo get_template_directory_uri(); ?>/img/call-w.png" alt="" /><span>000-000-0000</span>
              </li>
              <li class="header__contact-mail">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mail-w.png" alt="" /><span
                  ><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></span
                >
              </li>
            </ul>
          </nav>

         
        </div>
      </header>
            <?php else : ?>
              <header class="header scroll-header black">
              <h1 class="header__logo">
            <a href="<?php echo esc_url( home_url() ); ?>" class="scroll-logo b"></a>
          </h1>
          <nav class="header__nav">
            <div class="header__list-flex b scroll-nav">
              <ul class="header__list">
                <li class="header__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/category/works">Works</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/strong-field">Strong field</a></li>
                <li class="header__item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
              </ul>
            </div>
            <ul class="header__contact">
              <li class="header__contact-tel">
                <img src="<?php echo get_template_directory_uri(); ?>/img/call-w.png" alt="" /><span>000-000-0000</span>
              </li>
              <li class="header__contact-mail">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mail-w.png" alt="" /><span
                  ><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></span
                >
              </li>
            </ul>
          </nav>

         
        </div>
      </header>
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

         <!-- Drawer Content -->
         <div id="js-drawer-content" class="drawer-content">
        <nav
          class="drawer-content__menu"
          aria-label="ドロワーメニューナビゲーション"
        >
          <a href="<?php echo home_url(); ?>/about" class="drawer-content__link">About us</a>
          <a href="<?php echo home_url(); ?>/category/news" class="drawer-content__link">News</a>
          <a href="<?php echo home_url(); ?>/category/works" class="drawer-content__link">Works</a>
          <a href="<?php echo home_url(); ?>/strong-field" class="drawer-content__link">Strong field</a>
          <a href="<?php echo home_url(); ?>/contact" class="drawer-content__link">Contact</a>
        </nav>
      </div>
