<?php
$post = $wp_query->post;
// newsカテゴリであれば以下のテンプレートを呼び出す
if ( in_category('news') ):
    include(TEMPLATEPATH. '/single-news.php'); // 作成したnews用の単一記事テンプレート
// newsカテゴリでなければ、このままsingle.phpを使用
else: ?>


<?php get_header(); ?>
      <section class="wp-single">
        <div class="inner">
          <div class="wp-single__container">
            <h1 class="wp-section-title">ブログ</h1>

            <ul class="wp-single__list">
            <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
              <li class="wp-single__item">
                <div class="wp-single__img"><img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル"></div>
                <time class="wp-single__time"><?php the_time('Y/m/d'); ?></time>
                <h2 class="wp-single__title"><?php the_title(); ?></h2>
                <p class="wp-single__list__text"><?php the_content(); ?></p>
              </li>
              <?php endwhile; ?>
        <?php endif; ?>
             
            </ul>
            <div class="wp-single__page-nation">
   <?php 
   if ( get_previous_post(true) ) {
       previous_post_link('%link', '<<', true, '', 'category');
   }
   ?>
   <?php 
   if ( get_next_post(true) ) {
       next_post_link('%link', '>>', true, '', 'category');
   }
   ?></div>

            <div class="wp-single__home"><a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">archive</a></div>
            <div class="wp-single-news__home"><a href="<?php echo esc_url( home_url() ); ?>">home</a></div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>

<?php endif; ?>
