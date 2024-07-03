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
              <li class="news__item box flipRightTrigger"><time class="news__time" datetime="">2024年5月24日</time><h3 class="news__content-title"> <a href="">タイトルタイトルタイトル</a></h3></li>
              <li class="news__item  box flipRightTrigger"><time class="news__time" datetime="">2024年5月24日</time><h3 class="news__content-title"> <a href="">タイトルタイトルタイトル</a></h3></li>
              <li class="news__item  box flipRightTrigger"><time class="news__time" datetime="">2024年5月24日</time><h3 class="news__content-title"> <a href="">タイトルタイトルタイトル</a></h3></li>
            </ul>
            <div class="btn"><a href="<?php echo home_url(); ?>/category/news">More</a></div>
          </div>
        </section>


        <section class="works">
          <div class="inner">
            <h2 class="section-title">Works</h2>
            <ul class="works__list">
              <div>
                <li class="works__item"><div class="works___img box flipRightTopTrigger"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/w1.jpg" alt=""></a></div><h3 class="works__content-title"><a href="">タイトルタイトルタイトル</a></h3></li>
                <li class="works__item"><div class="works___img box flipRightTopTrigger"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/w2.jpg" alt=""></a></div><h3 class="works__content-title"><a href="">タイトルタイトルタイトル</a></h3></li>

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