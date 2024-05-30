<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <meta name="description" content="" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
    <link rel="preconnect" href="/https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  </head>
  <body>
    <header class="header" id="js-header">
      <div class="inner">
        <div class="header__flex">
          <h1 class="header__logo">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
          </h1>
          <nav id="page-link" class="header__nav">
            <ul class="header__list">
              <li class="header__item"><a href="#">Home</a></li>
              <li class="header__item"><a href="#menu">Menu</a></li>
              <li class="header__item"><a href="#about">About</a></li>
              <li class="header__item"><a href="#blog">Blog</a></li>
              <li class="header__item">
                <a
                  href="https://about.instagram.com/ja-jp/features/stories"
                  target="_blank"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt=""
                /></a>
              </li>
              <li class="header__item">
                <a
                  href="https://www.facebook.com/help/753701661398957"
                  target="_blank"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""
                /></a>
              </li>
            </ul>
          </nav>
          <div class="header__open">
            <button
              type="button"
              id="js-drawer-icon"
              class="drawer-icon"
              aria-label="メニューボタン"
            >
              <span class="drawer-icon__bar">
                <span class="drawer-icon__dot"></span>
              </span>
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
        aria-label="ドロワーメニューナビゲーション">
        <a href="#" class="drawer-content__link">Home</a>
        <a href="#menu" class="drawer-content__link">Menu</a>
        <a href="#about" class="drawer-content__link">About</a>
        <a href="#blog" class="drawer-content__link">Blog</a>
        <a
          href="https://about.instagram.com/ja-jp/features/stories"
          target="_blank"
          class="drawer-content__link"
          ><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt=""
        /></a>
        <a
          href="https://www.facebook.com/help/753701661398957"
          target="_blank"
          class="drawer-content__link"
          ><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""
        /></a>
        <a href="#" class="drawer-content__link">お問い合わせ</a>
      </nav>
    </div>

    <div class="fv">
      <div id="slider"></div>
      <div class="fv__title">
        <span class="fv__title-it"
          >Benvenuti <br class="br-hidden-sm" />al Ristorante Baresi!</span
        >
        <span class="fv__title-ja">レストランバレージへようこそ！</span>
      </div>
    </div>

    <section class="concept">
      <div class="inner">
        <h2 class="concept__title">
          <span class="concept__title-it"
            >Ci godiamo questo tempo meraviglioso</span
          >
          <span class="concept__title-ja"
            >楽しいひと時をお過ごし下さいませ</span
          >
        </h2>
        <div class="concept__flex">
          <div class="concept__img box fadeUpTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chef.jpg" alt="" />
          </div>
          <div class="concept__text">
            <div>
              <p>イタリア料理に欠かせないのは情熱</p>
              <p>
                シェフが丹精込めて作る料理は<br />その一皿ごとに情熱が詰まっています
              </p>
              <p>
                その場にいるだけで<br />まるでイタリアを旅しているような気分に
              </p>
              <p>豊かな風味と香りが<br />あなたをイタリアへお誘いいたします</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="menu" class="menu">
      <div class="inner">
        <h2 class="section-title">Menu</h2>
        <div class="menu__container">
          <div class="menu__item menu-item-1">
            <div class="menu__text">
              <div>
                <p>厳選された素材とシェフの技</p>
                <p>共に織りなす絶品ピザ</p>
                <p>
                  イタリアの太陽をそのままに<br />
                  心まで温まる味わいをお楽しみください
                </p>
              </div>
            </div>
            <div class="menu__img box fadeUpTrigger">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pizza.jpg" alt="" />
            </div>
          </div>
          <div class="menu__item menu-item-2">
            <div class="menu__text">
              <div>
                <p>
                  当店自慢の自家製パスタは、<br />
                  噛むたびに広がるもちもちの食感<br />
                  絶品ソースとの相性も抜群です
                </p>
                <p>
                  一口で広がるイタリアの風味を<br />
                  お楽しみください
                </p>
              </div>
            </div>
            <div class="menu__img fadeUpTrigger">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pasta.jpg" alt="" />
            </div>
          </div>
          <div class="menu__item menu-item-3">
            <div class="menu__text">
              <div>
                <p>
                  当店のソムリエが選び抜いた<br />
                  最高のワインを取り揃えています<br />
                  あなたにぴったりの一本を 見つけてください
                </p>
                <p>特別なディナーには特別なワインを</p>
                <p>
                  贅沢なひとときを演出する <br />
                  プレミアムワインをご用意しております
                </p>
              </div>
            </div>
            <div class="menu__img fadeUpTrigger">
              <img src="<?php echo get_template_directory_uri(); ?>/img/wine.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="inner">
        <h2 class="section-title">Blog</h2>
        <div class="blog__flex">
          <div class="blog__item">
            <a href=""
              ><div class="blog__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/post1.jpg" alt="" />
              </div>
              <h3 class="blog__post-title">タイトルタイトルタイトル</h3>
              <time class="blog__time">2024.5.30</time>
              <p class="blog__content">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...
              </p>
            </a>
          </div>
          <div class="blog__item">
            <a href=""
              ><div class="blog__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/post1.jpg" alt="" />
              </div>
              <h3 class="blog__post-title">タイトルタイトルタイトル</h3>
              <time class="blog__time">2024.5.30</time>
              <p class="blog__content">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...
              </p>
            </a>
          </div>
          <div class="blog__item">
            <a href=""
              ><div class="blog__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/post1.jpg" alt="" />
              </div>
              <h3 class="blog__post-title">タイトルタイトルタイトル</h3>
              <time class="blog__time">2024.5.30</time>
              <p class="blog__content">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...
              </p>
            </a>
          </div>
        </div>
        <div class="blog__more"><a href="archive.html">more</a></div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="inner">
        <h2 class="section-title">About</h2>
        <div class="about__map">
          <iframe
            class="map__iframe"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3482.356996790753!2d-73.96864922020313!3d40.78227014597579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2z44K744Oz44OI44Op44Or44O744OR44O844Kv!5e0!3m2!1sja!2sjp!4v1716497350516!5m2!1sja!2sjp"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__flex">
        <div class="footer__flex-text">
          <ul class="footer__list">
            <li class="footer__item footer__logo">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
            </li>
            <li class="footer__item">〒XXX~XXXX 東京都XXXXXXXXXXXXXX◯◯◯-◯</li>
            <li class="footer__item">Tel xx-xxxx-xxxx</li>
            <li class="footer__item">
              Open 火曜日〜日曜日　17:30~24:00(L.O23:00)
            </li>
            <li class="footer__item">Close 月曜日</li>
            <li class="footer__item"><a href="">お問い合わせ</a></li>
          </ul>
        </div>

        <div class="footer__img"><img src="<?php echo get_template_directory_uri(); ?>/img/houses.jpg" alt="" /></div>
      </div>

      <div class="footer__cpoyright"><small>&copy;Baressi</small></div>

      <div id="page-top" class="footer__top">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt="" /></a>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vegas.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  </body>
</html>
