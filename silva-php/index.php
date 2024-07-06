<?php get_header(); ?>
<div id="container">
      <div id="splash">
        <div id="splash_logo">
          <span class="bgextend bgLRextendTrigger silva-splash"
            ><span class="bgappearTrigger">silva</span>
          </span>
        </div>
      </div>

      <div class="mv">
        <div class="inner">
          <h2 class="mv__title">
            <span class="bgextend bgLRextendTrigger"
              ><span class="bgappearTrigger">自然の恵みを未来へ。</span></span
            >
          </h2>
          <p class="mv__text">
            Silva Agricultureは、<br />自然環境を大切にしながら<span class="br-inline"> 持続可能な農業を推進し、</span>
                    <br />新鮮で安心な食材を<span class="br-inline">未来の世代へ</span><span class="br-inline">届けることを <span class="br-inline">目指しています。</span></span>
                     
          </p>
        </div>
        <ul class="slider1">
          <li><img src="img/slider1.png" alt="" /></li>
          <li><img src="img/slider1.png" alt="" /></li>
          <li><img src="img/slider1.png" alt="" /></li>
          <!--/slider-->
        </ul>

        <div class="mv__container">
          <ul class="slider">
            <li class="slider-item slider-item01"></li>
            <li class="slider-item slider-item02"></li>
            <li class="slider-item slider-item03"></li>
          </ul>
        </div>
      </div>

      <section class="about">
        <ul class="slider3">
          <li><img src="img/welcome.png" alt="" /></li>
          <li><img src="img/welcome.png" alt="" /></li>
          <li><img src="img/welcome.png" alt="" /></li>

          <!--/slider-->
        </ul>

        <div class="about__flex">
          <div class="about__left">
            <div>
              <h2 class="about__title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="" />
              </h2>
              <ul class="about__list">
                <li
                  class="about__item about__item-title bgextend bgTBextendTrigger"
                >
                  <span class="bgappearTrigger"> 自然と共に育む</span>
                </li>
                <li class="about__item about__item-text">
                  持続可能な農業を通じて<br />
                  新鮮で安全な食材を<br>提供します。<br />自然環境を守りながら<br />
                  未来の世代へ豊かな恵みを<br>届けることを<br />目指しています。
                </li>
              </ul>
              <div class="btn-container">
                <a href="<?php echo home_url(); ?>/about" class="btn bgleft"><span>More</span></a>
              </div>
            </div>
          </div>

          <div class="about__right">
            <ul class="slider2">
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/a1-s.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/a2-s.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/a3-s.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/a4-s.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/a5-s.jpg" alt="" /></li>
              <!--/slider-->
            </ul>
          </div>
        </div>
        <div class="line"></div>
      </section>

      <section class="info">
        <div class="inner">
          <div class="info__flex">
            <div class="info__img box fadeUpTrigger">
              <img src="<?php echo get_template_directory_uri(); ?>/img/info-img.jpg" alt="" />
            </div>

            <div class="info__flex-right">
              <div>
                <h2 class="info__title"><img src="<?php echo get_template_directory_uri(); ?>/img/info.png" alt="" /></h2>
                <p class="info__text">
                  <span class="bgextend bgLRextendTrigger"
                    ><span class="bgappearTrigger"
                      >自然と共に持続可能な</span
                    ></span
                  >
                </p>
                  <p class="info__text">
                    <span class="bgextend bgLRextendTrigger"
                    ><span class="bgappearTrigger"
                      >農業を実践する企業</span
                    ></span
                  >

                  </p>
                  
            
                <div class="btn-container none1">
                  <a href="<?php echo home_url(); ?>/info" class="btn bgleft"><span>More</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-container none2">
            <a href="<?php echo home_url(); ?>/info" class="btn bgleft"><span>More</span></a>
          </div>
        </div>
      </section>

      <section class="news">
        <div class="inner">
          <h2 class="news__title"><img src="<?php echo get_template_directory_uri(); ?>/img/news-logo.png" alt="" /></h2>
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
                ><span class="bgextend bgLRextendTrigger"
                  ><span class="bgappearTrigger"
                    ><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></span
                ></span>
                <div class="news__card">
                  <time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                  <p class="news__content"><?php the_title(); ?></p>
                </div></a
              >
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <div class="btn-container">
            <a href="<?php echo home_url(); ?>/category/news" class="btn bgleft"><span>More</span></a>
          </div>
        </div>
      </section>

      <section class="blog">
        <div class="inner inner__blog">
          <div class="blog-flex">
            <div class="blog__left">
              <h2 class="blog-title"><img src="<?php echo get_template_directory_uri(); ?>/img/blog-logo.png" alt="" /></h2>
              <div class="btn-container none3">
                <a href="<?php echo home_url(); ?>/category/blog" class="btn bgleft"><span>More</span></a>
              </div>
            </div>
            <div class="blog-right">
              <ul class="blog__list gnavi">
              <?php
          $args = array(
            'posts_per_page' => 5,
            'category_name' => 'blog'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
                <li class="blog__item box flipRightTopTrigger">
                  <a href="<?php the_permalink(); ?>"
                    ><time class="blog__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h3 class="news__content-title">
                    <?php the_title(); ?>
                    </h3></a
                  >
                </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
     
              </ul>
            </div>
          </div>
          <div class="btn-container none4">
            <a href="<?php echo home_url(); ?>/category/blog"   class="btn bgleft"><span>More</span></a>
          </div>
        </div>
      </section>

      <div class="contact">
        <span class="bgextend bgLRextendTrigger"
        ><span class="bgappearTrigger">
        <div class="contact-position">
          <a href="<?php echo home_url(); ?>/contact" class="btntextchange">
            <span>Contact us</span><span>E-mail</span></a
          >
          
        </div>

        <ul class="contact__list">
          <li class="contact__item"><img src="<?php echo get_template_directory_uri(); ?>/img/c1.jpg" alt="" /></li>
          <li class="contact__item"><img src="<?php echo get_template_directory_uri(); ?>/img/c2.jpg" alt="" /></li>
          <li class="contact__item"><img src="<?php echo get_template_directory_uri(); ?>/img/c3.jpg" alt="" /></li>
          <li class="contact__item"><img src="<?php echo get_template_directory_uri(); ?>/img/c4.jpg" alt="" /></li>
        </ul>
      </span></span>
      </div>


      </div>
<?php get_footer(); ?>
