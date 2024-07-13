<?php get_header(); ?>

      <div class="wp-archive__slider">
        <h1 class=" wp-section-title-single">
          <time class="wp-single__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
          <span class="wp-section-title-ja"><?php the_title(); ?></span>
        </h1>
        <ul class="slider2 slider3">
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/news-slider-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/news-slider-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/img/news-slider-logo.png" alt="" /></li>
     
           <!--/slider-->
        </ul>
     
    
      </div>

      <section class="wp-single">

        <div class="inner">

          <div class="wp-single__flex">
            <main class="wp-single__main">
              <ul class="wp-single__list">
              <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <li class="wp-single__item">
             
  
                    <!-- <p class="wp-single__text"> -->
                    <?php the_content(); ?>
                    <!-- </p> -->
               
                </li>
                <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
             
              </ul>
              <div class="wp-single__page-nation"><?php 
    if ( get_previous_post(true) ) {
        previous_post_link('%link', '<<', true, '', 'category');
    }
    ?>
    <?php 
    if ( get_next_post(true) ) {
        next_post_link('%link', '>>', true, '', 'category');
    }
    ?></div>
        
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
                <div class="aside-single">
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
          <div class="wp-single__more">
            <a href="<?php echo esc_url( home_url() ); ?>">ホーム<img src="<?php echo get_template_directory_uri() ?>/img/arrow-g.png" alt="" /></a>
          </div>
          <div class="wp-single__more2">
            <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">アーカイブ<img src="<?php echo get_template_directory_uri() ?>/img/arrow-g.png" alt="" /></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>