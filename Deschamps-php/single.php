<?php get_header(); ?>

    <section class="wp-single">
      <div class="inner">
        <h2 class="wp-single__section-title"> <?php
       // カテゴリーを取得して表示する
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<span class="cat-links">';
                    foreach ( $categories as $category ) {
                        echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a> ';
                    }
                    echo '</span>';
                }
                ?></h2>
        <ul class="wp-single__list">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
          <li class="wp-single__item">
            <div class="wp-single__img">
           <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
            </div>
            <time class="wp-single__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="wp-single__title"><?php the_title(); ?></h3>
            <p class="wp-single__text"><?php the_content(); ?>  </p>
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
    ?>
</div>
        <div class="more">
        <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/archive.png" alt=""></a>
    </div>
  </div>
      </div>
    </section>


<?php get_footer(); ?>