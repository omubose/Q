<?php get_header(); ?>

      <section class="slogan">
        <h2 class="slogan__title animate__animated animate__bounceInRight">
          <img src="<?php echo get_template_directory_uri(); ?>/img/slogan-logo.png" alt="" />
        </h2>
  
        <h2 class="slogan__title1 animate__animated animate__bounceInRight">
          <img src="<?php echo get_template_directory_uri(); ?>/img/slogan-logo-ver.png" alt="" />
        </h2>
  
        <div class="slogan__container">
          <p class="slogan__text">
            「OKANO」での中華料理体験は、ただの食事ではなく、感動と驚きを提供するものです。当店は、中国の伝統的な調理法と革新的なアプローチを融合させ、他では味わえないユニークな料理を提供しています。四川の辛味や広東の甘味を見事に融合させた特製の火鍋や、創造力溢れる点心など、一口ごとに新しい発見があります。また、店内の雰囲気もお客様にとって心地よい空間を提供するように工夫されており、友人や家族と一緒に楽しいひとときを過ごすのに最適です。
            宴会やパーティーなど、特別なイベントにも対応しており、お客様のご要望に応じたプランをご提案します。美食家の方々にも満足していただけるよう、最高の食材と技術で一皿一皿を丁寧に仕上げています。新しい中華料理の魅力を、ぜひ「OKANO」で体験してください。スタッフ一同、皆様のご来店を心よりお待ちしております。
          </p>
          <div class="slogan__img bounceTrigger">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mabo.png" alt="" />
          </div>
        </div>
      </section>

      <section class="mission">
        <div class="inner">
          <h2 class="section-title backInLeftTrigger">OUR MISSION</h2>
          <h3 class="mission__title flipLeftTopTrigger delay-time03">中華料理で <br />驚きと感動を提供する</h3>
          <p class="mission__text flipLeftTopTrigger delay-time03">
            私たちは、<br />
            お客様に最高の中華料理体験を<br />
            提供することを使命としています。<br />伝統と革新を融合させた料理で、<span class="br-inline">驚きと感動をお届けします。</span>
                      
          </p>

          <div class="more more-mission">
            <a href="<?php echo home_url(); ?>/mission">MORE <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
          </div>
        </div>

        <ul class="mission__list c-w">
          <li class="mission__item1 fadeLeftTrigger delay-time03"><img src="<?php echo get_template_directory_uri(); ?>/img/g1.jpg" alt="" /></li>
          <li class="mission__item2 fadeRightTrigger delay-time06"><img src="<?php echo get_template_directory_uri(); ?>/img/g2.jpg" alt="" /></li>
          <li class="mission__item3 fadeRightTrigger delay-time03"><img src="<?php echo get_template_directory_uri(); ?>/img/g3.jpg" alt="" /></li>
        </ul>
      </section>

      <section class="service">
        <div class="inner">
          <h2 class="section-title backInLeftTrigger">SERVICE</h2>

          <h3 class="service__title  flipLeftTopTrigger delay-time03">
            心温まるサービスと <br />独創的な中華料理
          </h3>
          <p class="service__text  flipLeftTopTrigger delay-time03">
            私たちのサービスは、<span class="br-inline">お客様に心温まる</span
              ><span class="br-inline">新鮮な食材を厳選し、</span>
              <span class="br-inline"
                >料理長が一皿一皿
                <span class="br-inline">丁寧に仕上げます。</span> </span
              ><br /><span class="br-inline"
                >お客様一人一人に寄り添った
                <span class="br-inline">サービスを心掛け、</span> </span
              ><span class="br-inline">
                特別なリクエストや<span class="br-inline"
                  >アレルギー対応など、</span
                > </span
              ><span class="br-inline"> 柔軟に対応します。</span>
          </p>

          <div class="more more-service">
            <a href="<?php echo home_url(); ?>/service">MORE <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
          </div>
        </div>

        <div class="service__img blurTrigger delay-time1">
          <img class="c-w1" src="<?php echo get_template_directory_uri(); ?>/img/mv1.jpg" alt="" />
        </div>
      </section>

      <section class="news">
        <div class="inner">
          <h2 class="section-title backInLeftTrigger">NEWS</h2>
          <div class="news__container">
            <ul class="news__list">
            <?php
          $args = array(
            'posts_per_page' => 4,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
              <li class="news__item  flipLeftTopTrigger">
                <a class="news__item-flex" href="<?php the_permalink(); ?>">
                  <div class="news__text">
                    <time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h3 class="news__content-title">
                    <?php the_title(); ?>
                    </h3>
                  </div>
                  <div class="more news__item-more">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" />
                  </div>
                </a>
              </li>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
          
            </ul>
            <div class="more news__more">
              <a href="<?php echo home_url(); ?>/category/news">MORE <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
            </div>
          </div>
        </div>
      </section>

      <section class="blog">
        <div class="inner">
          <h2 class="section-title backInLeftTrigger">BLOG</h2>

          <ul class="blog__list ">
          <?php
          $args = array(
            'posts_per_page' => 4,
            'category_name' => 'blog'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <li class="blog__item ">
              <a href="<?php the_permalink(); ?>">
                <div class="blog__img ">
                  <span class="bgextend bgLRextendTrigger"
                  ><span class="bgappearTrigger"
                    ><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></span
                ></span>
                </div>
                <time class="blog__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h3 class="blog__content-title">
                <?php the_title(); ?>
                </h3>
              </a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
  
        
          </ul>

          <div class="more blog__more">
            <a href="<?php echo home_url(); ?>/category/blog">MORE <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>