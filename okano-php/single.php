<?php get_header(); ?>

      <section class="wp-archive wp-single">
        <div class="inner wp-single__inner">
    

        <h1 class="wp-section-title">
<?php
// カテゴリーを取得
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    foreach ( $categories as $category ) {
        echo esc_html( $category->name ) . ' ';
    }
}
?>
          </h1>
          </h1>
          <ul class="wp-single__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <li class="blog__item ">
   
                <div class=" ">
                  <span class="bgextend bgLRextend"
                  ><span class="bgappear"
                    ><img class="wp-single__img" src="<?php the_post_thumbnail_url(); ?>" alt="" /></span
                ></span>
                </div>
                <time class="blog__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h3 class="blog__content-title">
                <?php the_title(); ?>
                </h3>
                <p><?php the_content(); ?></p>
            </li>  
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>     
          </ul>
          <div class="wp-single__page-nation"> <?php 
    if ( get_previous_post(true) ) {
        previous_post_link('%link', '<<', true, '', 'category');
    }
    ?>
    <?php 
    if ( get_next_post(true) ) {
        next_post_link('%link', '>>', true, '', 'category');
    }
    ?></div>
        
        




          <div class="more more-mission more-single">
            <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">ARCHIVE <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
          </div>
          <div class="more more-mission">
            <a href="<?php echo esc_url( home_url() ); ?>">HOME <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="" /></a>
          </div>

        </div>
      </section>

<?php get_header(); ?>