<?php get_header(); ?>

      <section class="wp-archive">
        <div class="inner">
        <h1 class="wp-archive__section-title">News</h1>
        <span class="wp-archive__archive">Archive</span>
        <ul class="wp-archive__list">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <li class="wp-archive__item">
            <a href="<?php the_permalink(); ?>"
              >
              <div class="wp-archive__img"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div>
              <time class="wp-archive__time"><?php the_time('Y/m/d'); ?></time
              ><h2 class="wp-archive__title"><?php the_title(); ?></h2>
              <p class="wp-archive__text"><?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
            </a>
          </li>

          <?php endwhile; ?>
         <?php endif; ?>   
       
        </ul>
        <div class="wp-archive__page-nation"><?php wp_pagenavi(); ?></div>
        <div class="wp-archive__home"><a href="<?php echo esc_url( home_url() ); ?>">Home</a></div>
      </div>
      </section>

<?php get_footer(); ?>