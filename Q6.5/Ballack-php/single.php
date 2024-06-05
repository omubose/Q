
<?php get_header("sub"); ?>


    <section id="news" class="news wp-single">
      <div class="inner">
        <div class="news__container">
          <div class="news__fire fadeRightTrigger">
            <img src="./img/fire.png" alt="" />
          </div>
          <div class="news__ornament">
            <img src="./img/ornament.png" alt="" />
          </div>
          <div class="news__bear box fadeLeftTrigger">
            <img src="./img/bear.png" alt="" />
          </div>
          <?php
           $cat = get_the_category();
             $catname = $cat[0]->cat_name;
           ?>

          <h2 class="section-title single"><?php echo $catname; ?></h2>
        </div>

        <div class="news__cards">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
          <div class="news__card">
            <div class="news__img">
              <a href=""><img src="<?php the_post_thumbnail_url(); ?>"></a>
            </div>
            <h3 class="news__title"><a href=""><?php the_title(); ?></a></h3>
            <time class="news__time"><?php the_time('Y/m/d'); ?></time>
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="page-nation-container">
        <?php 
        if (get_previous_post()) {
        previous_post_link('%link', '<<');
        }
        ?>
        <?php 
        if (get_next_post()) {
        next_post_link('%link', '>>');
        }
        ?>
        </div>
        <div class="top"><a href="<?php echo esc_url( home_url() ); ?>">topページへ戻る </a></div>
      </div>
    </section>


    <?php get_footer("sub"); ?>