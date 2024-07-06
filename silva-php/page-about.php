<?php get_header(); ?>



      <section class="wp-about">
        <div class="wp-about__slider">
          <ul class="slider4">
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg" alt="" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg" alt="" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/a3.jpg" alt="" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/a4.jpg" alt="" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/a5.jpg" alt="" /></li>
            <!--/slider-->
          </ul>
        </div>

        <div class="wp-about__left">
          <h2 class="about__title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="" />
          </h2>

          <h2 class="wp-about__title">
            <img src="img/wp-about-us.png" alt="" />
          </h2>
          <ul class="wp-about__list">
            <li
              class="wp-about__item wp-about__item-title bgextend bgTBextendTrigger"
            >
              <span class="bgappearTrigger"> 自然と共に育む</span>
            </li>
            <li class="wp-about__item wp-about__item-text">
              持続可能な農業を通じて<br />
              新鮮で安全な食材を<br />提供します。<br />自然環境を守りながら<br />
              未来の世代へ豊かな恵みを<br />届けることを<br />目指しています。
            </li>
          </ul>
          <div class="wp-about__text-container">
            <div class="wp-about-text-inner">
              <p>
                そして、Silva
                Agricultureは地域社会と連携し、持続可能な農業技術の普及にも取り組んでいます。
              </p>
              <p>
                私たちの農場では、環境に優しい方法で作物を育てるだけでなく、農業に関する教育や研修プログラムを提供しています。
              </p>
              <p>
                これにより、地域の農業者がより効果的に自然を保護しながら生産性を向上させる手助けをしています。
              </p>
              <p>
                私たちは、持続可能な未来を築くために努力し、消費者が安心して選べる食材を提供し続けます。
              </p>
            </div>
          </div>
          <div class="btn-container">
            <a href="<?php echo esc_url( home_url() ); ?>" class="btn bgleft"><span>Home</span></a>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
