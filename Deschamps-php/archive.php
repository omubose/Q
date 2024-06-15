<?php get_header(); ?>

    <section class="wp-archive">
      <div class="inner">
        <h2 class="wp-archive__section-title"><?php single_cat_title(); ?></h2>
        <ul class="wp-archive__list">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <li class="wp-archive__item">
            <div class="wp-archive__img">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
            </div>
            <time class="wp-archive__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="wp-archive__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
          <?php endwhile; ?>
         <?php endif; ?>  
 
        </ul>
        <div class="wp-archive__page-nation">
        <?php wp_pagenavi(); ?>
        </div>
        <div class="more">
          <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home.png" alt="" /></a>
        </div>
      </div>
    </section>


<?php get_footer(); ?>