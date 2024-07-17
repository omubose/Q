<?php get_header(); ?>
      <section class="wp-single">
        <div class="inner">
          <h1 class="section-title flipLeftTopTrigger">
            <span><?php
// カテゴリーを取得
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    foreach ( $categories as $category ) {
        echo esc_html( $category->name ) . ' ';
    }
}
?></span>
          </h1>

          <div class="wp-single__container">
            <main class="wp-single__main">
          
              <ul class="wp-single__list">
              <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <li class="wp-single__item">
        
                    <span class="bgextend bgLRextendTrigger"
                      ><span class="bgappearTrigger"
                        ><div class="wp-single__img">
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div></span
                    ></span>
                    <div class="wp-single__card">
                      <h3 class="wp-single__content-title">
                      <?php the_title(); ?>
                      </h3>
                      <time class="wp-single__time" datetime="<?php the_time('c'); ?>"
                        ><?php the_time('Y/m/d'); ?></time
                      >
                      <p class="wp-single__text">
                      <?php the_content(); ?>
                      </p>
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
            </main>
            <aside class="aside">
              <div class="aside-container">
                <div class="aside-category">
                  <h2 class="aside-title">category</h2>
                  <ul class="aside-category__list gnavi1">
                  <?php
                                $categories = get_categories();
                                foreach ($categories as $category) {
                                    echo '<li class="aside-category__item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                                }
                                ?>
                  </ul>
                </div>
                <div class="aside-archive">
                  <h2 class="aside-title">archives</h2>
                  <ul class="aside-category__list gnavi1">
                  <?php
                                $archives = wp_get_archives(array(
                                    'type' => 'monthly',
                                    'limit' => 13,
                                    'format' => 'custom',
                                    'before' => '<li class="aside-category__item"><a href="#">',
                                    'after' => '</a></li>',
                                    'echo' => 0
                                ));
                                echo $archives;
                                ?>
                  </ul>
                </div>
              </div>           
            </aside>
          </div>

          <div class="more wp-single__more1">
            <a class="btnlinestretches2" href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">Archive</a>
          </div>
          <div class="more wp-single__more">
            <a class="btnlinestretches2" href="<?php echo esc_url( home_url() ); ?>">Home</a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
