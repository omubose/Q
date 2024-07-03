
<?php get_header(); ?>
      <div class="section-container">
        <section class="wp-archive">
          <div class="inner wp-archive__inner">
            <h1 class="wp-section-title slide-in leftAnime">
              <span class="slide-in_inner leftAnimeInner"> <?php
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

            <div class="wp-archive__container">
              <main class="wp-archive__main">
                <ul class="wp-archive__list">
                <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        
                  <li class="wp-archive__item">
                    <div class="wp-archive__img  bgextend bgRLextendTrigger">
                      <a href="<?php the_permalink(); ?>"><img class="bgappearTrigger" src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
                    </div>
                    <h3 class="wp-archive__title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <time  class="wp-archive__time"  datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <p class="wp-archive__text"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></a>
                      
                    </p>
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
                    <h2 class="aside-title">category</h2>
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
                    <h2 class="aside-title">archives</h2>
                    <ul class="aside-category__list gnavi1">
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
    

          
           
            <div class="btn"><a href="<?php echo esc_url( home_url() ); ?>">Home</a></div>
          </div>
        </section>

 <?php get_footer(); ?>