<?php get_header(); ?>

 

      <section class="wp-archive">
        <div class="inner wp-archive__inner">
          <h1 class="wp-archive__title">
            <span
              class="wp-archive__title-span1 fadeUpTrigger delay-time05 change-time2"
              >ご利用者様からの</span
            >
            <span
              class="wp-archive__title-span2 fadeUpTrigger delay-time1 change-time2"
              >「お言葉」</span
            >
          </h1>

          <ul class="wp-archive__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <li class="wp-archive__item">
              <a href="<?php the_permalink(); ?>">
                <div class="wp-archive__img"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div>
                <div class="wp-archive__card">
                  <span class="wp-archive__customer wp-archive__customer1"><?php echo post_custom('company'); ?></span>
                  <span class="voice__customer"><?php echo post_custom('customer'); ?>様</span>
                  <h3 class="wp-archive__content-title"><?php the_title(); ?></h3>
                  <p class="wp-archive__text"><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
         <?php endif; ?>   
         <?php wp_reset_postdata(); ?>  
          </ul>
          <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>
          <div class="more gnavi2 fadeUpTrigger delay-time05">
            <a href="<?php echo esc_url( home_url() ); ?>">home</a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>