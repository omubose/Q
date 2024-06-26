<?php get_header(); ?>
      <div class="mv">
        <div id="slider"></div>

        <div class="mv__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/mv-t1.png" alt="" /></div>
        <div class="mv__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/mv-t2.png" alt="" /></div>
        <div class="mv__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/mv-t3.png" alt="" /></div>
      </div>

      <div class="slogan">
        <ul class="slider">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/slogan-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/slogan-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/slogan-logo.png" alt="" /></li>
          <!--/slider-->
        </ul>
        <div class="slogan__logo-c-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/slogan-logo-c.png" alt="" />
        </div>
      </div>

      <section class="about-us">
        <div class="inner">
          <div class="section-title-flex">
            <h2 class="section-title">
              <span class="section-title-en">About us</span>
              <span class="section-title-ja">私たちについて</span>
            </h2>
            <p class="section-title-text">
              ようこそ、スキラッチモータースへ。<br />
              ここでは、精密さと性能が出会います。<br />
              自動車業界で20年以上の経験を持つ私たちは、価値あるお客様に最高の自動車サービスとソリューションを提供することを誇りにしています。
            </p>
          </div>

          <div class="more">
            <a href="<?php echo home_url(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="" /></a>
          </div>
          <div class="about-us__img"><img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="" /></div>
        </div>
      </section>

      <section class="reason">
        <div class="inner">
          <div class="section-title-flex">
            <h2 class="section-title">
              <span class="section-title-en">Reason</span>
              <span class="section-title-ja">選ばれる理由</span>
            </h2>
            <p class="section-title-text">
              私たちの技術者は高度なスキルを持ち、
              常に最新の自動車技術を学び続けています。<br />
              この日々の努力により、どんな車種でも適切に対応し、最高のサービスを提供できます。
            </p>
          </div>

          <ul class="slider1">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/r1.jpg" alt="" />
              <div class="slick-text">専門知識と経験</div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/r2.jpg" alt="" />
              <div class="slick-text">
                高品質な <br />
                サービス
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/r3.jpg" alt="" />
              <div class="slick-text">透明性と誠実さ</div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/r4.jpg" alt="" />
              <div class="slick-text">カスタマーケア</div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/r5.jpg" alt="" />
              <div class="slick-text">快適な施設</div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/r6.jpg" alt="" />
              <div class="slick-text">緊急対応</div>
            </li>
          </ul>

          <div class="more">
            <a href="<?php echo home_url(); ?>/reason"><img src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="" /></a>
          </div>
        </div>
      </section>

      <section class="service">
        <div class="service__bg"></div>
        <div class="inner">
          <div class="section-title-flex">
            <h2 class="section-title">
              <span class="section-title-en">Service</span>
              <span class="section-title-ja">サービス</span>
            </h2>
            <p class="section-title-text">
              車両のメンテナンスと修理、信頼できるサービスをご提供。<br />
              エンジン、ブレーキ、タイヤの全てに対応し、安全で快適、安心な走行をサポートします。
            </p>
          </div>

          <ul class="slider2">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/s1.jpg" alt="" />
              <div class="slick-text">
                定期メンテナンスと <br />
                点検
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/s2.jpg" alt="" />
              <div class="slick-text">高度な診断と修理</div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/s3.jpg" alt="" />
              <div class="slick-text">
                エンジンおよび <br />
                トランスミッションの <br />サービス
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/s4.jpg" alt="" />
              <div class="slick-text">
                ブレーキおよび <br />
                サスペンションの修理
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/s5.jpg" alt="" />
              <div class="slick-text">
                タイヤサービスおよび <br />
                アライメント
              </div>
            </li>
          </ul>
          <div class="more">
            <a href="<?php echo home_url(); ?>/service"><img src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="" /></a>
          </div>
        </div>
        <ul class="slider3">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s-s1a.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s-s1a.png" alt="" /></li>

          <!--/slider-->
        </ul>
      </section>

      <section class="news">
        <!-- <div class="news__bg"></div> -->
        <div class="inner">
          <div class="section-title-flex">
            <h2 class="section-title">
              <span class="section-title-en">News</span>
              <span class="section-title-ja">お知らせ</span>
            </h2>
            <p class="section-title-text">
              最新情報や重要なお知らせをお届けします。<br />
              イベント、サービス、キャンペーンなどのお得な最新情報は、<br> ここからチェックをお願いします。
            </p>
          </div>
          <ul class="news-list">
          <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
          <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <li class="news-item">
              <div class="news-list__img">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
              </div>
              <div class="news-list__content">
                <h3 class="news-list__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?>
                <p class="news-list__text">
                  <a href="<?php the_permalink(); ?>"
                    ><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></a
                  >
                </p>
              </div>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <div class="more">
            <a href="<?php echo home_url(); ?>/category/news"><img src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="" /></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>