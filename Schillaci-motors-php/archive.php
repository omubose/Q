<?php get_header(); ?>
           
            <section class="wp-archive">
              <!-- <div class="news__bg"></div> -->
              <div class="inner">
                <div class="section-title-flex">
                  <h2 class="section-title">
                    <span class="section-title-en">News</span>
                    <span class="section-title-ja">お知らせ</span>
                  </h2>
                  <p class="section-title-text">
                    最新情報や重要なお知らせを<span  class="wp-inline-b" >お届けします。</span> <br />
                    イベント、サービス、<span class="wp-inline-b">キャンペーンなどの</span><span class="wp-inline-b"></span><span  class="wp-inline-b">お得な最新情報は、</span><br> ここからチェックをお願いします。
                  </p>
                </div>
                <ul class="news-list">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?>
                  <li class="news-item">
                    <div class="news-list__img">
                      <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
                    </div>
                    <div class="news-list__content">
                      <h3 class="news-list__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                      <time class="news__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                      <p class="news-list__text">
                        <a href="<?php the_permalink(); ?>"
                          ><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></a
                        >
                      </p>
                    </div>
                  </li>
                  <?php endwhile; ?>
                  <?php endif; ?>    
                
                </ul>
                <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>
                <div class="more">
                  <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/home.png" alt="" /></a>
                </div>
              </div>
            </section>
            
      
<?php get_footer(); ?>