<?php get_header(); ?>

    
        <ul class="wp-mv__list">
          <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull1.png" alt="" /></li>
          <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull2.png" alt="" /></li>
          <li class="wp-mv__item skull3"><img src="<?php echo get_template_directory_uri(); ?>/img/skull3.png" alt="" /></li>
          <li class="wp-mv__item skull4"><img src="<?php echo get_template_directory_uri(); ?>/img/skull4.png" alt="" /></li>
        </ul>


      <section class="wp-about wp-contact">
        <div class="inner wp-about__inner">
          <div class="wp-about__flex">
            <div class="wp-about__flex-left">
              <h2 class="wp-about__title">
                <span class="wp-about__title-en"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/contact-logo.png" alt=""
                /></span>
                <span class="wp-about__title-ja">お問い合わせ</span>
              </h2>
              <p class="wp-about__text">準備中</p>

            
              <div class="more">
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home-logo.png" alt="" /></a>
              </div>
            </div>

        </div>
      </section>
    
   <?php get_footer(); ?>