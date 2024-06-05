<?php get_header(); ?>
    <div class="fv">
      <ul class="slider">
        <li class="slider-item slider-item01"></li>
        <li class="slider-item slider-item02"></li>
        <li class="slider-item slider-item03"></li>
      </ul>
    </div>



    <section id="about" class="about">
      <div class="inner">
        <div class="about__container">
          <div class="about__img blurTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/car-mountain.png" alt="" />
          </div>
          <div class="about__desc">
            <div>
              <h2 class="about__title">
                キャンプの自由と
                <br />
                人生の豊かさを<br class="br-hidden-sm" />全ての人に
              </h2>
              <p class="about__text">
                キャンプサイトバラックは
                <br />
                初心者から上級者まで全ての<br
                  class="br-hidden-sm"
                />キャンパーが
                <br />
                楽しめる多彩な自然体験を<br class="br-hidden-sm" />提供します。
                <br />
                <br />
                初心者向けには快適なコテージや<br
                  class="br-hidden-sm"
                />レンタルテント
                <br />
                ガイド付き自然散策や<br
                  class="br-hidden-sm"
                />バーベキュー体験などを完備し
                <br />
                安心してキャンプデビューできる<br
                  class="br-hidden-sm"
                />環境を整えました
                <br />
                <br />
                上級者向けには広大な森林や<br
                  class="br-hidden-sm"
                />トレッキングコース
                <br />
                自力で設営するキャンプサイトを<br class="br-hidden-sm" />提供。
                <br />
                <br />
                定期的なイベントで<br class="br-hidden-sm" />全てのキャンパーが
                <br />
                自然の美しさを共有し<br
                  class="br-hidden-sm"
                />交流できる場を提供します。
              </p>
            </div>
          </div>
        </div>
        <div class="photo__flex">
          <div class="photo__img box blurTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/s1.jpg" alt="" />
          </div>
          <div class="photo__img box blurTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/s2.jpg" alt="" />
          </div>
          <div class="photo__img box blurTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/s3.jpg" alt="" />
          </div>
          <div class="photo__img box blurTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/s4.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="news" class="news">
      <div class="inner">
        <div class="news__container">
          <div class="news__fire fadeRightTrigger"><img src="<?php echo get_template_directory_uri(); ?>/img/fire.png" alt="" /></div>
          <div class="news__ornament">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ornament.png" alt="" />
          </div>
          <div class="news__bear box fadeLeftTrigger"><img src="<?php echo get_template_directory_uri(); ?>/img/bear.png" alt="" /></div>

          <h2 class="section-title">お知らせ</h2>
        </div>

        <div class="news__cards">
        <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <div class="news__card">
            <div class="news__img">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
            </div>
            <h3 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <time class="news__time"><?php the_time('Y/m/d'); ?></time>
          </div>
          <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        </div>
        <div class="news__more"><a href="<?php echo esc_url(home_url('/category/news/')); ?>">more</a></div>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="inner">
        <div class="blog__container">
          <div class="blog__tent fadeRightTrigger"><img src="<?php echo get_template_directory_uri(); ?>/img/tent.png" alt="" /></div>
          <div class="blog__ornament">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ornament.png" alt="" />
          </div>
          <div class="blog__mountain box fadeLeftTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mountain.png" alt="" />
          </div>
          <h2 class="section-title">ブログ</h2>
        </div>

        <div class="blog__cards">
        <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'blog'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <div class="blog__card">
            <div class="blog__img">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
            </div>
            <h3 class="blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <time class="blog__time"><?php the_time('Y/m/d'); ?></time>
          </div>
          <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        </div>
        <div class="news__more"><a href="<?php echo esc_url(home_url('/category/blog/')); ?>">more</a></div>
      </div>
    </section>

    <section id="access" class="access">
      <h2 class="section-title">アクセス</h2>
      <div class="access__map">
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
      <div class="access__desc">
        <span>◯◯県◯◯◯◯町</span>
        <span>◯◯◯◯線「◯◯町駅」から車で15分</span>
        <span>◯◯◯スマートIC から車で25分</span>
        <span>TEL ◯◯◯ー◯◯◯ー◯◯◯</span>
      </div>
    </section>

<?php get_footer(); ?>