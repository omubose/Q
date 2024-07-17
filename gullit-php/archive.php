<?php get_header(); ?>

      <section class="wp-archive">
        <div class="inner">
          <h1 class="section-title flipLeftTopTrigger">
            <span> <?php
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
                    ?></span>
          </h1>

          <div class="wp-archive__container">
            <main class="wp-archive__main">
          
              <ul class="wp-archive__list">
              <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        
                <li class="wp-archive__item">
                  <a href="<?php the_permalink(); ?>"
                    ><span class="bgextend bgLRextendTrigger"
                      ><span class="bgappearTrigger"
                        ><div class="wp-archive__img">
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div></span
                    ></span>
                    <div class="wp-archive__card">
                      <h3 class="wp-archive__content-title">
                      <?php the_title(); ?>
                      </h3>
                      <time class="wp-archive__time" datetime="<?php the_time('c'); ?>"
                        ><?php the_time('Y/m/d'); ?></time
                      >
                      <p class="wp-archive__text">
                      <?php echo wp_trim_words(get_the_content(), 30, '…'); ?>
                      </p>
                    </div>
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

          <div class="more wp-archive__more">
            <a class="btnlinestretches2" href="<?php echo esc_url( home_url() ); ?>">Home</a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>