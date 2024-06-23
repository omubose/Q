<?php get_header(); ?>

      <div class="mv">
        <div class="mv__mv-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mv1.jpg" alt="居酒屋の写真" />
        </div>
        <div class="mv__logo-c"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-c-w.png" alt="ロゴ" /></div>

        <div class="mv__take-out"><a href="<?php echo home_url(); ?>/takeout" class="take-out-link"></a></div>
      </div>

      <section id="news" class="news">
        <div class="inner">
          <div class="scrolldown1"></div>
          <h2 class="section-title">お知らせ</h2>
          <ul class="news__list">
          <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <li class="news__item">
              <a href="<?php the_permalink(); ?>"
                ><time><?php the_time('Y/m/d'); ?></time>
                <h3 class="news__title"><?php the_title(); ?></h3></a
              >
            </li>
            <?php endforeach; ?>
         <?php wp_reset_postdata(); ?>
   
          </ul>
        </div>
      </section>

      <section  class="about">
        <div class="inner">
          <div class="about__container">
            <h2 class="about__title">元気の源　笑顔の酒場！</h2>
            <p class="about__text">
              その名の通り<br />私たちの居酒屋は活気と笑顔に満ち溢れています。<br />新鮮な食材を使った絶品料理と<br />多彩なドリンクメニューでお客様の舌を楽しませます。<br />アットホームな雰囲気と元気いっぱいのスタッフが
              <br />織りなす楽しいひと時をご提供します。
            </p>
            <div class="about__more">
              <a href="<?php echo home_url(); ?>/about"
                >いそがいについて<img src="img/double-arrow.png" alt=""
              /></a>
            </div>
          </div>
        </div>
      </section>

      <div class="slider-container">
        <ul class="slider">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s1.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s2.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s3.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s4.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s5.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s6.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s7.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s8.jpg" alt="" /></li>
          <!--/slider-->
        </ul>
      </div>

      <div  class="content">
        <div class="inner">
          <ul class="content__list">
            <li class="content__item">
              <a href="<?php echo home_url(); ?>/reservation"><img src="<?php echo get_template_directory_uri(); ?>/img/reservation.jpg" alt="" /></a
              ><span><a href="<?php echo home_url(); ?>/reservation">ご予約</a></span>
            </li>
            <li class="content__item">
              <a href="<?php echo home_url(); ?>/staff"><img src="<?php echo get_template_directory_uri(); ?>/img/staff.jpg" alt="" /></a
              ><span><a href="<?php echo home_url(); ?>/staff">スタッフ募集</a></span>
            </li>
          </ul>
        </div>
      </div>

      <section class="blog">
        <div class="inner">
          <div class="scrolldown1"></div>
          <h2 class="section-title">ブログ</h2>
          <ul class="blog__list">
          <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'blog'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <li class="blog__item">
              <a href="<?php the_permalink(); ?>"
                ><time><?php the_time('Y/m/d'); ?></time>
                <h3 class="blog__title"><?php the_title(); ?></h3></a
              >
            </li>
            <?php endforeach; ?>
         <?php wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="more"><a href="<?php echo home_url(); ?>/category/blog">more</a></div>
      </div>
      </section>

      <div class="inquiry">
        <div class="inner">
          <h2 class="section-title">よくあるお問い合わせ</h2>
          <ul class="inquiry__accordion-area">
            <li>
              <section>
                <h3 class="inquiry__title">
                  営業時間は何時から何時までですか？
                </h3>
                <div class="inquiry__box">
                  <p>17:30～22:00（ラストオーダー21:30）になります。</p>
                </div>
              </section>
            </li>
            <li>
              <section>
                <h3 class="inquiry__title">予約は必要ですか？</h3>
                <div class="inquiry__box">
                  <p>
                    必要ございません。しかし週末や祝日は混雑する為ご予約をした方が確実です。<a
                      href="#"
                      >ご予約はこちらから</a
                    >
                  </p>
                </div>
              </section>
            </li>
            <li>
              <section>
                <h3 class="inquiry__title">飲み放題プランはありますか？</h3>
                <div class="inquiry__box">
                  <p>
                    はい、飲み放題プランをご提供しています。<br />
                    2時間プランがあり、ビールやサワー、カクテル、焼酎、日本酒が飲み放題に含まれます。
                  </p>
                </div>
              </section>
            </li>
            <li>
              <section>
                <h3 class="inquiry__title">
                  クレジットカードや電子マネーは使えますか？
                </h3>
                <div class="inquiry__box">
                  <p>
                    はい、下記がご利用可能です。<br />
                    クレジットカード　VISA・Master Card・JCB
                    <br />電子マネー　PayPay・iD・Rpay
                  </p>
                </div>
              </section>
            </li>
          </ul>
        </div>
      </div>

<?php get_footer(); ?>