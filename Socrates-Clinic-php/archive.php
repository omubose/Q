<?php get_header(); ?>

      <div class="wp-archive__slider">
        <ul class="slider2">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/news-slider-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/news-slider-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/news-slider-logo.png" alt="" /></li>
     
           <!--/slider-->
        </ul>
        <h1 class="wp-section-title">
          <span class="wp-section-title-ja"><?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_day()) {
                        echo 'Daily Archives: ' . get_the_date();
                    } elseif (is_month()) {
                        echo '' . get_the_date('Y F');
                    } elseif (is_year()) {
                        echo 'Yearly Archives: ' . get_the_date('Y');
                    } else {
                        echo 'Archives';
                    }
                    ?></span>
        </h1>
    
      </div>

      <section class="wp-archive">

        <div class="inner">

          <div class="wp-archive__flex">
            <main class="wp-archive__main">
              <ul class="wp-archive__list">
              <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <li class="wp-archive__item">
                  <a href="<?php the_permalink(); ?>">
                    <time class="wp-archive__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h3 class="wp-archive__content-title">
                    <?php the_title(); ?>
                    </h3>
                  </a>
                </li>
                <?php endwhile; ?>
         <?php endif; ?>   
         <?php wp_reset_postdata(); ?> 
          
              </ul>
              <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>
        
            </main>
            <aside class="aside">
              <div class="aside-container">
                <div class="aside-category">
                  <h2 class="aside-title">カテゴリー</h2>
                  <ul class="aside-category__list gnavi1">
                    <?php
                                $categories = get_categories();
                                foreach ($categories as $category) {
                                    echo '<li class="aside-category__item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                                }
                                ?>
                  </ul>
                </div>
                <div class="aside-archive">
                  <h2 class="aside-title">アーカイブ</h2>
                  <ul class="aside-category__list">
                  <?php
                                $archives = wp_get_archives(array(
                                    'type' => 'monthly',
                                    'limit' => 13,
                                    'format' => 'custom',
                                    'before' => '<li class="aside-category__item"><a href="#">',
                                    'after' => '</a></li>',
                                    'echo' => 0
                                ));
                                echo $archives;
                                ?>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
          <div class="wp-archive__more">
            <a href="<?php echo esc_url( home_url() ); ?>">ホーム<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-g.png" alt="" /></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>