<?php get_header(); ?>




      <section class="wp-page-contact">
        <div class="inner wp-page-contact-inner">
          <div class="wp-page-contact__container">
            <div>
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
              <h1 class="wp-section-title">コンタクト</h1>
              <p class="wp-page-contact__text">  <?php the_content(); ?></p>
              <?php endwhile;endif; ?>
          </div>
          <div class="wp-page-contact__home"><a href="<?php echo esc_url( home_url() ); ?>">home</a></div>
        </div>
      </section>

     

<?php get_footer(); ?>