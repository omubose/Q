<?php get_header(); ?>

      <section class="wp-archive">
        <div class="inner">
          <div class="wp-archive__container">
            <h1 class="wp-section-title">ブログ</h1>

            <ul class="wp-archive__list">
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
              <li class="wp-archive__item">
                <div class="wp-archive__img"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル"></a></div>
                <time class="wp-archive__time"><?php the_time('Y/m/d'); ?></time>
                <h2 class="wp-archive__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="wp-archive__list__text"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></a></p>
              </li>
              <?php endwhile; ?>
         <?php endif; ?>    
            </ul>
            <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>

            <div class="wp-archive__home"><a href="<?php echo esc_url( home_url() ); ?>">home</a></div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>