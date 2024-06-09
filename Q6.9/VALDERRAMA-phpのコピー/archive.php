<?php get_header(); ?>




    <section id="news" class="news wp-news">
      <div class="inner">
        <h2 class="section-title">NEWS</h2>
        <ul class="news__list">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
          <li class="news__item">
            <p class="news__date"><a href="<?php the_permalink(); ?>"><?php the_time('Y/m/d'); ?></a></p>
            <p class="news__title"><?php the_title(); ?></p>
            <p class="news__texr"><?php the_content(); ?></p>
          </li>
          <?php endwhile; ?>
        <?php endif; ?>
        </ul>
     

        <div class="wp-top"><a href="<?php echo esc_url( home_url() ); ?>">TOPページへ</a></div>
      </div>
    </section>

   

    <?php get_footer(); ?>