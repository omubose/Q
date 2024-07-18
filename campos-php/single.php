<?php get_header(); ?>
      <ul class="wp-mv__list">
        <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull1.png" alt="" /></li>
        <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull2.png" alt="" /></li>
        <li class="wp-mv__item skull3"><img src="<?php echo get_template_directory_uri(); ?>/img/skull3.png" alt="" /></li>
        <li class="wp-mv__item skull4"><img src="<?php echo get_template_directory_uri(); ?>/img/skull4.png" alt="" /></li>
      </ul>

      <section class="wp-single">
        <div class="inner wp-single__inner">
          <h1 class="wp-single__title"><?php
// カテゴリーを取得
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    foreach ( $categories as $category ) {
        echo esc_html( $category->name ) . ' ';
    }
}
?></h1>

          <div class="wp-single__flex-right">
            <ul class="wp-single__flex-right-list">
            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
              <li class="wp-single__flex-right-item">
                <time class="wp-single__flex-right-time" datetime="<?php the_time('c'); ?>"
                  ><?php the_time('Y/m/d'); ?></time
                >
                <div class="wp-single__flex-right-img">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                </div>
                <h2 class="wp-single__flex-right-title">
                <?php the_title(); ?>
                </h2>
                <p class="wp-single__content">
                <?php the_content(); ?>
                </p>
              </li>
              <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
            </ul>
          </div>
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
          <div class="more wp-single__more">
            <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><img class="wp-single__more-img"  src="<?php echo get_template_directory_uri(); ?>/img/archive-logo.png" alt="" /></a>
          </div>
          <div class="more wp-single__more2">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home-logo.png" alt="" /></a>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="inner">
          <div class="footer__flex">
            <div class="footer__flex-left">
              <h2 class="footer__logo"><img src="img/logo-w.png" alt="" /></h2>
              <span class="footer__span1">〒000-0000</span>
              <span class="footer__span2"
                >東京都◯◯区◯◯◯町０−０−０
                <span class="br-inline">◯◯ビル0階</span>
              </span>
            </div>
            <nav class="footer__flex-right">
              <ul class="footer__list gnavi-w">
                <li class="footer__item"><a href="#">Home</a></li>
                <li class="footer__item"><a href="#">About us</a></li>
                <li class="footer__item"><a href="#news">News</a></li>
                <li class="footer__item"><a href="#">Business</a></li>
                <li class="footer__item"><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="footer__copyright"><small>&copy; campos</small></div>
        </div>
      </footer>

      <!-- wrap -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
