<?php get_header(); ?>

    <section id="news" class="news">
      <div class="inner">
        <h2 class="section-title"><img src="<?php echo get_template_directory_uri(); ?>/img/news.png" alt="" /></h2>
        <ul class="news__list">
        <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <li class="news__item">
            <time class="news__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="news__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </li>
          <?php endforeach; ?>
         <?php wp_reset_postdata(); ?>

        </ul>
        <div class="more">
          <a href="<?php echo home_url(); ?>/category/news"><img src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="" /></a>
        </div>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="inner">
        <h2 class="section-title"><img src="<?php echo get_template_directory_uri(); ?>/img/blog.png" alt="" /></h2>
        <ul class="blog__list">
        <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'blog'
          );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <li class="blog__item">
            <div class="blog__img">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
            </div>
            <time class="blog__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
          <?php endforeach; ?>
         <?php wp_reset_postdata(); ?>
        </ul>
        <div class="more">
          <a href="<?php echo home_url(); ?>/category/blog"><img src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="" /></a>
        </div>
      </div>
    </section>

    <section id="menu" class="menu">
      <div class="inner">
        <h2 class="section-title"><img src="<?php echo get_template_directory_uri(); ?>/img/menu.png" alt="" /></h2>

        <ul class="menu__list gallery-list">
          <li class="menu__item1">
            <a href="<?php echo get_template_directory_uri(); ?>/img/m1.jpg" class="gallery"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/m1.jpg" alt=""
            /></a>
          </li>

          <li class="menu__item2">
            <a href="<?php echo get_template_directory_uri(); ?>/img/m2.jpg" class="gallery"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/m2.jpg" alt=""
            /></a>
          </li>

          <li class="menu__item3">
            <a href="<?php echo get_template_directory_uri(); ?>/img/m3.jpg" class="gallery"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/m3.jpg" alt=""
            /></a>
          </li>

          <li class="menu__item4">
            <a href="<?php echo get_template_directory_uri(); ?>/img/m4.jpg" class="gallery"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/m4.jpg" alt=""
            /></a>
          </li>

          <li class="menu__item5">
            <a href="<?php echo get_template_directory_uri(); ?>/img/m5.jpg" class="gallery"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/m5.jpg" alt=""
            /></a>
          </li>

          <li class="menu__item6">
            <a href="<?php echo get_template_directory_uri(); ?>/img/m6.jpg" class="gallery"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/m6.jpg" alt=""
            /></a>
          </li>
        </ul>
      </div>
    </section>

    <section id="info" class="info">
      <div class="inner">
        <h2 class="section-title"><img src="<?php echo get_template_directory_uri(); ?>/img/info.png" alt="" /></h2>
        <div class="info__img"><img src="<?php echo get_template_directory_uri(); ?>/img/info-pic.png" alt="" /></div>
      </div>

      <div class="info__map">
        <iframe
          class="map__iframe"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3482.356996790753!2d-73.96864922020313!3d40.78227014597579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2z44K744Oz44OI44Op44Or44O744OR44O844Kv!5e0!3m2!1sja!2sjp!4v1716497350516!5m2!1sja!2sjp"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

<?php get_footer(); ?>