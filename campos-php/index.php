<?php get_header(); ?>

      <div class="mv">
        <div class="mv__title"><img src="<?php echo get_template_directory_uri(); ?>/img/mv_title.png" alt="" /></div>
        <div id="slider"></div>
        <ul class="mv__list">
          <li class="mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull1.png" alt="" /></li>
          <li class="mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull2.png" alt="" /></li>
          <li class="mv__item skull3"><img src="<?php echo get_template_directory_uri(); ?>/img/skull3.png" alt="" /></li>
          <li class="mv__item skull4"><img src="<?php echo get_template_directory_uri(); ?>/img/skull4.png" alt="" /></li>
        </ul>
      </div>

      <section class="about">
        <div class="inner">
          <div class="about__flex">
            <div class="about__flex-left flipLeftTopTrigger">
              <h2 class="about__title">
                <span class="about__title-en"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/about-logo.png" alt=""
                /></span>
                <span class="about__title-ja">私たちについて</span>
              </h2>
              <p class="about__text">メキシコの情熱を味わう</p>
              <div class="more">
                <a href="<?php echo home_url(); ?>/about"><img src="img/more-b.png" alt="" /></a>
              </div>
            </div>
            <div class="about__flex-right">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- <section id="news" class="news">
        <div class="inner">
          <div class="news__flex">
            <div class="news__flex-left flipLeftTopTrigger">
              <h2 class="news__title">
                <span class="news__title-en"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/news-logo.png" alt=""
                /></span>
                <span class="news__title-ja">お知らせ</span>
              </h2>
              <ul class="news__flex-left-list gnavi">
                <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
                <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/blog">ブログ</a></li>
                <li class="news__flex-left-item">
                  <a href="<?php echo home_url(); ?>/category/important">重要なお知らせ</a>
                </li>
                <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/release">リリース</a></li>
              </ul>
            </div>

            <div class="news__flex-right">
              <ul class="news__flex-right-list">
                <li class="news__flex-right-item">
                  <a href="">
                    <time class="news__flex-right-time" datetime=""
                      >2025.05.24</time
                    >
                    <div class="news__flex-right-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/n1.jpg" alt="" />
                    </div>

                    <span class="news__flex-right-category">お知らせ</span>
                    <h2 class="news__flex-right-title">
                      タイトルタイトルタイトル
                    </h2>
                  </a>
                </li>
                <li class="news__flex-right-item">
                  <a href="">
                    <time class="news__flex-right-time" datetime=""
                      >2025.05.24</time
                    >
                    <div class="news__flex-right-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/n1.jpg" alt="" />
                    </div>
                    <span class="news__flex-right-category">お知らせ</span>
                    <h2 class="news__flex-right-title">
                      タイトルタイトルタイトル
                    </h2>
                  </a>
                </li>
                <li class="news__flex-right-item">
                  <a href="">
                    <time class="news__flex-right-time" datetime=""
                      >2025.05.24</time
                    >
                    <div class="news__flex-right-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/n1.jpg" alt="" />
                    </div>
                    <span class="news__flex-right-category">お知らせ</span>
                    <h2 class="news__flex-right-title">
                      タイトルタイトルタイトル
                    </h2>
                  </a>
                </li>
                <li class="news__flex-right-item">
                  <a href="">
                    <time class="news__flex-right-time" datetime=""
                      >2025.05.24</time
                    >
                    <div class="news__flex-right-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/n1.jpg" alt="" />
                    </div>
                    <span class="news__flex-right-category">お知らせ</span>
                    <h2 class="news__flex-right-title">
                      タイトルタイトルタイトル
                    </h2>
                  </a>
                </li>
                <li class="news__flex-right-item">
                  <a href="">
                    <time class="news__flex-right-time" datetime=""
                      >2025.05.24</time
                    >
                    <div class="news__flex-right-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/n1.jpg" alt="" />
                    </div>
                    <span class="news__flex-right-category">お知らせ</span>
                    <h2 class="news__flex-right-title">
                      タイトルタイトルタイトル
                    </h2>
                  </a>
                </li>
                <li class="news__flex-right-item">
                  <a href="">
                    <time class="news__flex-right-time" datetime=""
                      >2025.05.24</time
                    >
                    <div class="news__flex-right-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/n1.jpg" alt="" />
                    </div>
                    <span class="news__flex-right-category">お知らせ</span>
                    <h2 class="news__flex-right-title">
                      タイトルタイトルタイトル
                    </h2>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section> -->

      <section id="news" class="news">
  <div class="inner">
    <div class="news__flex">
      <div class="news__flex-left flipLeftTopTrigger">
        <h2 class="news__title">
          <span class="news__title-en"><img src="<?php echo get_template_directory_uri(); ?>/img/news-logo.png" alt="" /></span>
          <span class="news__title-ja">お知らせ</span>
        </h2>
        <ul class="news__flex-left-list gnavi">
          <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
          <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/blog">ブログ</a></li>
          <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/important">重要なお知らせ</a></li>
          <li class="news__flex-left-item"><a href="<?php echo home_url(); ?>/category/release">リリース</a></li>
        </ul>
      </div>

      <div class="news__flex-right">
        <ul class="news__flex-right-list">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 6,
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
                $categories = get_the_category();
                $category_names = array();
                foreach ($categories as $category) {
                  $category_names[] = $category->name;
                }
                $category_name = implode(', ', $category_names);
          ?>
          <li class="news__flex-right-item">
            <a href="<?php the_permalink(); ?>">
              <time class="news__flex-right-time" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
              <div class="news__flex-right-img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
              </div>
              <span class="news__flex-right-category"><?php echo $category_name; ?></span>
              <h2 class="news__flex-right-title"><?php the_title(); ?></h2>
            </a>
          </li>
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>



      <section class="business">
        <div class="inner">
          <div class="business__flex">
            <div class="business__flex-left flipLeftTopTrigger">
              <h2 class="business__title">
                <span class="business__title-en"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/business-logo.png" alt=""
                /></span>
                <span class="business__title-ja">事業紹介</span>
              </h2>
              <p class="business__text">
                多様なメキシコ食品<br />ビジネスで<br />世界とつながる
              </p>
              <div class="more">
                <a href="<?php echo home_url(); ?>/business"><img src="<?php echo get_template_directory_uri(); ?>/img/more-b.png" alt="" /></a>
              </div>
            </div>
            <div class="business__flex-right">
              <p class="business__flex-right-text">
                Camposカンポスは、メキシコ食品の輸入・販売、レストラン運営、オンラインショップ、食品加工、食育プログラム、メキシコ食材の輸出といった多岐にわたる事業を展開しています。<br />
                私たちは、本場の味を日本の皆様に届けるだけでなく、日本の高品質なメキシコ風食品を世界中に広めることで、食文化の交流と持続可能なビジネスの成長を目指しています。<br />
                すべての事業で顧客満足度を最優先に考え、最高のサービスを提供しています。
              </p>
            </div>
          </div>
        </div>
        <ul class="business__slider">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s1.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s2.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s3.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s4.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s5.jpg" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/s6.jpg" alt="" /></li>
        </ul>
      </section>

      <?php get_footer(); ?>