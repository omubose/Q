<?php get_header(); ?>

      <section class="wp-archive">
        <div class="inner">
          <h1 class="wp-contact__title">              <span class="slide-in_inner leftAnimeInner"> <?php
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
                    ?></span></h1>
          <ul class="wp-archive__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <li class="wp-archive__item">
              <a href="<?php the_permalink(); ?>"
                ><span class="bgextend bgLRextendTrigger"
                  ><span class="bgappearTrigger"
                    ><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></span
                ></span>
                <div class="wp-archive__card">
                  <time class="wp-archive__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                  <p class="wp-archive__content"><?php the_title(); ?></p>
                </div></a
              >
            </li>
            <?php endwhile; ?>
         <?php endif; ?>   
         <?php wp_reset_postdata(); ?>  
          
          </ul>
          <div class="wp-archive__page-nation" ><?php wp_pagenavi(); ?></div>
          <div class="btn-container">
            <a href="<?php echo esc_url( home_url() ); ?>" class="btn bgleft"><span>Home</span></a>
          </div>
        </div>
      </section>


    

<?php get_footer(); ?>