<?php get_header(); ?>

      <section class="wp-single">
        <div class="inner wp-single__inner">
        <h1 class="wp-single__section-title">News</h1>
        <ul class="wp-single__list">
        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
          <li class="wp-single__item">
            <a href=""
              >
              <div class="wp-single__img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
              <time class="wp-single__time"><?php the_time('Y/m/d'); ?></time
              ><h2 class="wp-single__title"><?php the_title(); ?></h2>
              <p class="wp-single__text"><?php the_content(); ?></p>
            </a>
          </li>
          <?php endwhile; ?>
        <?php endif; ?>

        </ul>
        <div class="wp-single__page-nation">        <?php 
if (get_previous_post()) {
	previous_post_link('%link', '<<');
}
?>
<?php 
if (get_next_post()) {
	next_post_link('%link', '>>');
}
?></div>
        <div class="wp-single__home"><a href="<?php echo home_url(); ?>/category/news">Archive</a></div>
      </div>
      </section>

 <?php get_footer(); ?>