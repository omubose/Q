<?php get_header(); ?>

      <section class="wp-single-news">
        <div class="inner">
          <div class="wp-single-news__container">
            <div class="wp-single-news__logo-c">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-c.png" alt="ロゴ" />
             </div>
      
            <h1 class="wp-section-title"><?php the_title(); ?></h1>
            <div class="wp-single-news__date">
            <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
                  <p><?php the_content(); ?></p>
                
         <?php endwhile; ?>
        <?php endif; ?>
              <span class="wp-single-news__desc"
                >※状況により店休日・営業時間が<br>変更となる可能性がございます。<br>
                ご理解のほどよろしく<br class="br-md">お願いいたします。</span
              >
            </div>
            <div class="wp-single-news__home"><a href="<?php echo esc_url( home_url() ); ?>">home</a></div>
          </div>
      </section>

<?php get_footer(); ?>