<?php get_header(); ?>

 

      <section class="wp-single">
        <div class="inner wp-single__inner">
          <h2 class="wp-single__title">
            <span
              class="wp-single__title-span1 fadeUpTrigger delay-time05 change-time2"
              >ご利用者様からの</span
            >
            <span
              class="wp-single__title-span2 fadeUpTrigger delay-time1 change-time2"
              >「お言葉」</span
            >
          </h2>

          <ul class="wp-single__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <li class="wp-single__item">
                <div class="wp-single__img"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div>
                <div class="wp-single__card">
                  <span class="wp-single__customer wp-single__customer1"><?php echo post_custom('company'); ?></span>
                  <span class="voice__customer"><?php echo post_custom('customer'); ?>様</span>
                  <h1 class="wp-single__content-title"><?php the_title(); ?></h1>
                  <p class="wp-single__text"><?php the_content(); ?></p>
                </div>
            </li>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
          </ul>
          <div class="wp-single__page-nation"><?php 
    if ( get_previous_post(true) ) {
        previous_post_link('%link', '<<', true, '', 'category');
    }
    ?>
    <?php 
    if ( get_next_post(true) ) {
        next_post_link('%link', '>>', true, '', 'category');
    }
    ?></div>
          <div class="more wp-single__more gnavi2 wp-single__more1 fadeUpTrigger delay-time05">
            <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">archive</a>
          </div>
          <div class="more wp-single__more gnavi2 fadeUpTrigger delay-time05">
            <a href="<?php echo esc_url( home_url() ); ?>">home</a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>