<?php get_header("sub"); ?>

    <section id="news" class="news wp-category">
      <div class="inner">
        <div class="news__container">
          <div class="news__fire ">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tent.png" alt="" />
          </div>
          <div class="news__ornament">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ornament.png" alt="" />
          </div>
          <div class="news__bear">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mountain.png" alt="" />
          </div>

          <h2 class="section-title"><?php single_cat_title(); ?></h2>
        </div>

        <div class="news__cards">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <div class="news__card">
            <div class="news__img">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
            </div>
            <h3 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <time class="news__time"><?php the_time('Y/m/d'); ?></time>
            <p> <?php echo wp_trim_words(get_the_content(), 30, '…'); ?></p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="page-nation-container-wp">
        <?php wp_pagenavi(); ?>
        </div>
        <div class="top"><a href="<?php echo esc_url( home_url() ); ?>">topページへ戻る </a></div>
      </div>
    </section>
    <?php get_footer("sub"); ?>
