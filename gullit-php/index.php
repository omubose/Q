<?php get_header(); ?>
      <div class="mv">
        <ul class="slider">
          <li class="slider-item slider-item01"></li>
          <li class="slider-item slider-item02"></li>
          <li class="slider-item slider-item03"></li>
        </ul>
        <h2 class="mv__title">
          <span class="mv__title-en js_typing">Fly Beyond Your Dreams</span>
          <span class="mv__title-ja js_typing">夢を超えるフライト</span>
        </h2>
      </div>

      <div class="mv__news">
        <div class="inner mv__news-inner">
          <div class="mv__flex">
            <div class="mv__flex-left">News</div>
            <ul class="mv__flex-right">
            <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
              <li class="mv__flex-right-item">
                <time class="mv__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time
                ><span class="mv__news-title"
                  ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span
                >
              </li>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
          
            </ul>
          </div>
          <div class="more">
            <a class="btnlinestretches2" href="<?php echo home_url(); ?>/category/news">Read more</a>
          </div>
        </div>
      </div>

      <section class="find">
        <div class="inner">
          <h2 class="section-title flipLeftTopTrigger">
            <span>新たな地平を発見</span>
          </h2>
          <div class="find__container">
            <div class="find__flex1 fadeUpTrigger">
              <div class="find__flex1-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fly1.jpg" alt="" />
              </div>
              <p class="find__flex1-text fadeUpTrigger">
                心地よい空間と行き届いたサービスで、<br />
                旅の始まりから終わりまで、<br />
                あなたの旅を特別なものにします。<br />
                快適な空の旅を提供し、<br />
                忘れられない思い出をお届けします。
              </p>
            </div>
            <div class="find__flex2">
              <div class="find__flex2-img fadeUpTrigger">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fly2.jpg" alt="" />
              </div>
              <p class="find__flex2-text fadeUpTrigger">
                美しい風景と新しい出会いを求めて、<br />
                私たちの翼で空の旅に出かけましょう。<br />
                心に残る瞬間を一緒に。<br />
                快適で安全な空の旅をお届けするために、<br />
                最新の機材とサービスを整えています。
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="business" class="business">
        <div class="business__title-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/j1.jpg" alt="" />
          <h2 class="section-title section-title-business">
            <span>事業紹介</span>
          </h2>
        </div>
        <ul class="business__list">
          <li class="business__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/j2.jpg" alt="" />
            <div class="business__card">
              <span>航空運輸事業</span>
              <div class="more">
                <a class="btnlinestretches2 btnlinestretches3" href="<?php echo home_url(); ?>/transport"
                  >Read more</a
                >
              </div>
            </div>
          </li>
          <li class="business__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/j3.jpg" alt="" />
            <div class="business__card">
              <span>空港運営事業</span>
              <div class="more">
                <a class="btnlinestretches2 btnlinestretches3" href="<?php echo home_url(); ?>/airport"
                  >Read more</a
                >
              </div>
            </div>
          </li>
          <li class="business__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/j4.jpg" alt="<?php echo home_url(); ?>/cargo" />
            <div class="business__card">
              <span>航空貨物事業</span>
              <div class="more business__more">
                <a class="btnlinestretches2 btnlinestretches3" href="<?php echo home_url(); ?>/cargo"
                  >Read more</a
                >
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="actual">
        <div class="inner">
          <h2 class="section-title flipLeftTopTrigger">
            <span>実績紹介</span>
          </h2>
          <ul class="actual__list">
          <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'actual'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <li class="actual__item">
              <a href="<?php the_permalink(); ?>"
                ><span class="bgextend bgLRextendTrigger"
                  ><span class="bgappearTrigger"
                    ><div class="actual__img">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div></span
                ></span>
                <p class="actual__content-title"><?php the_title(); ?></p></a
              >
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
         
          </ul>
          <div class="more actual__more">
            <a class="btnlinestretches2" href="<?php echo home_url(); ?>/category/actual">Read more</a>
          </div>
        </div>
      </section>

      <section class="column">
        <div class="inner">
          <h2 class="section-title flipLeftTopTrigger"><span>コラム</span></h2>
          <ul class="column__list">
          <?php
          $args = array(
            'posts_per_page' => 4,
            'category_name' => 'column'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
            <li class="column__item">
              <a href="<?php the_permalink(); ?>"
                ><span class="bgextend bgLRextendTrigger"
                  ><span class="bgappearTrigger"
                    ><div class="column__img">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div></span
                ></span>
                <div class="column__container">
                  <div>
                    <time class="column__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <p class="column__content-title">
                    <?php the_title(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
       
          </ul>
          <div class="more column__more">
            <a class="btnlinestretches2" href="<?php echo home_url(); ?>/category/column">Read more</a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>