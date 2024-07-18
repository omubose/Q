<?php get_header(); ?>

    
        <ul class="wp-mv__list">
          <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull1.png" alt="" /></li>
          <li class="wp-mv__item"><img src="<?php echo get_template_directory_uri(); ?>/img/skull2.png" alt="" /></li>
          <li class="wp-mv__item skull3"><img src="<?php echo get_template_directory_uri(); ?>/img/skull3.png" alt="" /></li>
          <li class="wp-mv__item skull4"><img src="<?php echo get_template_directory_uri(); ?>/img/skull4.png" alt="" /></li>
        </ul>


      <section class="wp-about">
        <div class="inner wp-about__inner">
          <div class="wp-about__flex">
            <div class="wp-about__flex-left">
              <h2 class="wp-about__title">
                <span class="wp-about__title-en"
                  ><img src="<?php echo get_template_directory_uri(); ?>/img/about-logo.png" alt=""
                /></span>
                <span class="wp-about__title-ja">私たちについて</span>
              </h2>
              <p class="wp-about__text">メキシコの情熱を味わう</p>

              <p class="wp-about__content">
                Camposカンポスは、メキシコの豊かな食文化をお届けすることを使命としています。<br> 私たちの製品は全て厳選された高品質なメキシコ産食材で、地元の農家や生産者と密接に協力し、新鮮で本格的な味をお届けします。<br> チリ、タコス、トルティーヤなど、多彩なメキシコ料理の材料を取り揃え、家庭で簡単に美味しい料理を楽しむことができます。<br> 私たちの目標は、お客様にメキシコの文化と伝統を味わっていただくことです。<br> Camposカンポスで、メキシコの情熱と風味を体験してください。
              </p>
              <div class="more">
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home-logo.png" alt="" /></a>
              </div>
            </div>

        </div>
      </section>

    
   <?php get_footer(); ?>