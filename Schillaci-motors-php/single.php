<?php get_header(); ?>

            <section class="wp-single">
              <!-- <div class="news__bg"></div> -->
              <div class="inner wp-single__inner">
                <div class="section-title-flex">
                  <h2 class="section-title">
                    <span class="section-title-en">News</span>
                    <span class="section-title-ja">お知らせ</span>
                  </h2>
                  <p class="section-title-text">
                    最新情報や重要なお知らせを<span class="wp-inline-b"
                      >お届けします。</span
                    >
                    <br />
                    イベント、サービス、<span class="wp-inline-b"
                      >キャンペーンなどの</span
                    ><span class="wp-inline-b"></span
                    ><span class="wp-inline-b">お得な最新情報は、</span><br />
                    ここからチェックをお願いします。
                  </p>
                </div>

                <div class="wp-single-item">
                  <div class="wp-single-img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <?php if(have_posts()): ?>
                    <?php while(have_posts()):the_post(); ?>
                  <div class="wp-single-list__content">
                    <h3 class="wp-single__title"><?php the_title(); ?></h3>
                    <time class="wp-single__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <div class="wp-single__text">
                    <?php the_content(); ?>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>

                <div class="wp-single__page-nation">        <?php 
if (get_previous_post()) {
	previous_post_link('%link', '&lt;&lt;');
}
?>
<?php 
if (get_next_post()) {
	next_post_link('%link', '&gt;&gt;');
}
?>
</div>
                <div class="wp-single__flex">
                  <div class="wp-archive-btn">
                    <a href="<?php echo home_url(); ?>/category/news"><img src="<?php echo get_template_directory_uri() ?>/img/archive.png" alt="" /></a>
                  </div>
                  <div class="wp-home">
                    <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/home.png" alt="" /></a>
                  </div>
                </div>
              </div>
            </section>

   <?php get_footer(); ?>