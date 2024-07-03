<?php get_header(); ?>

   
      <div class="mv"><div id="slider"></div></div>

     
      <div class="concept">
        <div class="concept__title">
          <div>心地よい空間を創る <br />デザインをコンセプトに。</div>
        </div>
        <div class="concept__img  box flipRightTopTrigger">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logp-house-blue.png" alt="" />
        </div>
      </div>

      <div class="concept-hor">
        <div class="inner">
          <div class="concept-hor__flex">
            <div class="concept-hor__title">
              心地よい空間を創る<br />デザインを<span class="br-inline">コンセプトに。</span>
                       
            </div>
            <div class="concept-hor__img  box flipRightTopTrigger">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logp-house-blue.png" alt="" />
            </div>

          </div>
        

        </div>
            
       
      </div>

      <div class="section-container">
        <section id="about" class="about">
          <div class="inner">
            <div class="about__img box fadeUpTrigger"><img src="<?php echo get_template_directory_uri(); ?>/img/house-i.jpg" alt="" /></div>
            <h2 class="section-title">心地よい空間を創るデザイン</h2>
            <p class="about__text">
              私たちの設計事務所は、「心地よい空間を創るデザイン」をコンセプトに掲げ、お客様一人ひとりのライフスタイルや価値観に寄り添った空間づくりをお手伝いしています。<br>私たちが目指すのは、ただ美しいだけでなく、心地よさと機能性を兼ね備えたデザインです。<br>家族が集うリビングから、集中して仕事ができるオフィススペースまで、どのような空間でも、利用する人々が心からリラックスし、快適に過ごせるような設計を心がけています。
            </p>
            <div class="btn"><a href="<?php echo home_url(); ?>/about">About us</a></div>
          </div>
        </section>

        <div class="slider-container">
          <ul class="slider">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/s1.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/s2.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/s3.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/s4.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/s5.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/s6.jpg" alt=""></li>

            <!--/slider--></ul>
        </div>

        <section class="news">
          <div class="inner">
            <h2 class="section-title">News</h2>
            <ul class="news__list gnavi">
            <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
              <li class="news__item box flipRightTrigger"><time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time><h3 class="news__content-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
            <div class="btn"><a href="<?php echo home_url(); ?>/category/news">More</a></div>
          </div>
        </section>


        <section class="works">
          <div class="inner">
            <h2 class="section-title">Works</h2>
            <ul class="works__list">
              <div>
              <?php
          $args = array(
            'posts_per_page' => 2,
            'category_name' => 'works'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
                <li class="works__item"><div class="works___img box flipRightTopTrigger"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a></div><h3 class="works__content-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
                <?php endforeach; ?>
         <?php wp_reset_postdata(); ?>
          
              </div>
           
            </ul>
            <div class="btn"><a href="<?php echo home_url(); ?>/category/works">More</a></div>
          </div>
        </section>

        <section class="strong-field">
          <div class="inner">
            <h2 class="section-title">Strong field</h2>
            <ul class="strong-field__list gallery-list flex delayScroll">
              <li class="strong-field__item  box"><a href="<?php echo get_template_directory_uri(); ?>/img/m1.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/m-s1.jpg" alt=""></a><span>テキストテキストテキスト</span></li>
              <li class="strong-field__item box"><a href="<?php echo get_template_directory_uri(); ?>/img/m2.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/m-s2.jpg" alt=""></a><span>テキストテキストテキスト</span></li>
              <li class="strong-field__item box"><a href="<?php echo get_template_directory_uri(); ?>/img/m3.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/img/m-s3.jpg" alt=""></a><span class="gallery">テキストテキストテキスト</span></li>
            </ul>
            <div class="btn"><a href="<?php echo home_url(); ?>/strong-field">More</a></div>
          </div>
        </section>

        <?php get_footer(); ?>