<?php get_header(); ?>
      <section class="wp-single">
        <div class="inner wp-single__inner">
          <h1 class="wp-contact__title">              <span class="slide-in_inner leftAnimeInner"><?php
       // カテゴリーを取得して表示する
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<span class="cat-links">';
                    foreach ( $categories as $category ) {
                        echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a> ';
                    }
                    echo '</span>';
                }
                ?></span></h1>
          <ul class="wp-single__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <li class="wp-single__item">
               <span class="bgextend bgLRextendTrigger"
                  ><span class="bgappearTrigger"
                    ><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></span
                ></span>
                <div class="wp-single__card">
                  <time class="wp-single__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                  <h3 class="wp-single__content"><?php the_title(); ?></h3>
                  <p class="wp-single__text"><?php the_content(); ?></p>
                </div>
              
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>          
          </ul>
          <div class="wp-single__page-nation" ><?php 
    if ( get_previous_post(true) ) {
        previous_post_link('%link', '<<', true, '', 'category');
    }
    ?>
    <?php 
    if ( get_next_post(true) ) {
        next_post_link('%link', '>>', true, '', 'category');
    }
    ?></div>
          <div class="btn-container archive">
            <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>" class="btn bgleft"><span>Archive</span></a>
          </div>
          <div class="btn-container">
            <a href="<?php echo esc_url( home_url() ); ?>" class="btn bgleft"><span>Home</span></a>
          </div>
        </div>
      </section>


    
<?php get_footer(); ?>