<?php get_header(); ?>

      <section class="wp-archive">
        <div class="inner">
          <h1 class="wp-section-title">
            <span class="slide-in leftAnime">
              <span class="slide-in_inner leftAnimeInner"><?php
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
            </span>
          </h1>
          <ul class="blog__list ">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <li class="blog__item ">
              <a href="<?php the_permalink(); ?>">
                <div class="blog__img ">
                  <span class="bgextend bgLRextend"
                  ><span class="bgappear"
                    ><img class="wp-archive-img" src="<?php the_post_thumbnail_url(); ?>" alt="" /></span
                ></span>
                </div>
                <time class="blog__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h3 class="blog__content-title">
                <?php the_title(); ?>
                </h3>
                <p><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
              </a>
            </li>
            <?php endwhile; ?>
         <?php endif; ?>   
         <?php wp_reset_postdata(); ?>  
         
        
          </ul>
          <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>
        



          <div class="more more-mission">
            <a href="<?php echo esc_url( home_url() ); ?>">HOME <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
          </div>

        </div>
      </section>

<?php get_footer(); ?>
