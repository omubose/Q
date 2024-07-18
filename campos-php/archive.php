<?php get_header(); ?>

      <ul class="wp-mv__list">
        <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull1.png" alt="" /></li>
        <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull2.png" alt="" /></li>
        <li class="wp-mv__item skull3"><img src="<?php echo get_template_directory_uri(); ?>/img/skull3.png" alt="" /></li>
        <li class="wp-mv__item skull4"><img src="<?php echo get_template_directory_uri(); ?>/img/skull4.png" alt="" /></li>
      </ul>

      <section class="wp-archive">
        <div class="inner wp-archive__inner">
          <h1 class="wp-archive__title"><?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_day()) {
                        echo 'Daily Archives: ' . get_the_date();
                    } elseif (is_month()) {
                        echo '' . get_the_date('Y年 n月');
                    } elseif (is_year()) {
                        echo 'Yearly Archives: ' . get_the_date('Y');
                    } else {
                        echo 'Archives';
                    }
                    ?></h1>

          <div class="wp-archive__flex-right">
            <ul class="wp-archive__flex-right-list">
            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
              <li class="wp-archive__flex-right-item">
                <a href="<?php the_permalink(); ?>">
                  <time class="wp-archive__flex-right-time" datetime="<?php the_time('c'); ?>"
                    ><?php the_time('Y/m/d'); ?></time
                  >
                  <div class="wp-archive__flex-right-img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <h2 class="wp-archive__flex-right-title">
                  <?php the_title(); ?>
                  </h2>
                  <p class="wp-archive__content"><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
                </a>
              </li>
              <?php endwhile; ?>
         <?php endif; ?>   
         <?php wp_reset_postdata(); ?>
       
           
            
         
            </ul>
          </div>
          <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>
          <div class="more wp-archive__more">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home-logo.png" alt="" /></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>