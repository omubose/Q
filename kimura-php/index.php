<?php get_header(); ?>
      
        <div class="slider-container">
          <div class="slider-container__img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w-g.png" alt=""></div>
          <ul class="slider">
            <li class="slider-item slider-item01"></li>
            <li class="slider-item slider-item02"></li>
            <li class="slider-item slider-item03"></li>
          </ul>
        </div>




        <div class="main">
          <section id="concept" class="concept">
            <div class="concept__container">
              <h2 class="concept__title">
                四季折々の味わいを堪能する<br />日本の心を感じる一皿
              </h2>
              <p class="concept__text">
                四季折々の旬の食材を使った<br />本格和食が楽しめる<br />日本の季節料理屋。<br /><br />春の山菜　夏の鮎
                <br />秋の松茸　冬のふぐなど<br />季節ごとの恵みを<br />最大限に活かした<br />料理を提供します。<br /><br />
                四季の移ろいを感じながら <br />
                和の美食を<br />お楽しみいただけます。
              </p>
            </div>
            <div class="concept__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-3.png" alt="" /></div>
          </section>

          <section  class="menu">
            <div class="menu__bg"></div>
            <h2 id="menu" class="section-title"><span>お品書き</span></h2>
            <div class="menu__flex menu__flex1">
              <p class="menu__flex-text">
                旬の食材を幸を厳選し<br />日本の季節を感じる<br />贅沢な一皿
              </p>
              <div class="menu__flex-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.jpg" alt="" />
              </div>
            </div>
            <div class="menu__flex menu__flex2">
              <div class="menu__flex-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu2.jpg" alt="" />
              </div>
              <p class="menu__flex-text">
                新鮮な魚介を使った<br />寿司と刺身<br />素材の旨味を引き立てる
                <br />
                繊細な味わいを<br />お楽しみください。
              </p>
            </div>
            <div class="menu__flex menu__flex3">
              <p class="menu__flex-text">
                山の恵みを <br />
                ふんだんに使った料理。<br />自然の豊かな風味を楽しむ<br />贅沢なひとときを<br />お届けします。
              </p>
              <div class="menu__flex-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu3.jpg" alt="" />
              </div>
            </div>
          </section>

          <section class="access">
            <div class="access__bg"></div>
            <h2  id="access" class="section-title"><span>アクセス</span></h2>
            <div class="access__map">
              <div class="access__map-flex">
                <div class="access__map-map">
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
                <div class="access__map-text">
                  <div>
                    <p>
                      季節料理　きむら <br />住所　◯◯県◯◯◯市◯◯町0-00
                      <br />電話　000-000-0000
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>

<?php get_footer(); ?>
