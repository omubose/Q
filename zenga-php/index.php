<?php get_header(); ?>

      <section id="concept" class="concept">
        <div class="concept__inner">
          <div class="concept__flex">
            <div class="concept__container1">
              <ul class="slider">
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s1.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s2.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s3.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s4.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s5.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s6.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s7.jpg" alt="" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/s8.jpg" alt="" /></li>
                <!--/slider-->
              </ul>
            </div>
            <div class="concept__container2">
              <div class="fluid"></div>
              <h2 class="concept__title">
                <span class="concept__title-en"
                  >"Vestiti per Vivere, <br class="br-xxl" />
                  Creati per Incantare"</span
                >
                <span class="concept__title-ja"
                  >生きるために着て<br class="br-xxl" />
                  魅了するために創られた</span
                >
              </h2>
              <div class="concept__news">
                <h3 class="section-title-news">News</h3>
                <ul class="concept__list">
                <?php
          $args = array(
            'posts_per_page' => 3,
            'category_name' => 'news'
          );
        ?>
           <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post): ?>
          <?php setup_postdata($post); ?>
                  <li class="concept__item">
                    <a href="<?php the_permalink(); ?>"
                      ><time><?php the_time('Y/m/d'); ?></time
                      ><span><?php the_title(); ?></span></a
                    >
                  </li>
                  <?php endforeach; ?>
         <?php wp_reset_postdata(); ?>
               
                </ul>
                <div class="more"><a href="<?php echo home_url(); ?>/category/news">more</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="about" class="about">
        <!-- <div class="inner"> -->
        <div class="about__flex">
          <div class="about__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/dis.jpg" alt="会議をしている" />
          </div>
          <div class="about__container">
            <div class="about__desc">
              <h2 class="section-title">About</h2>
              <p class="about__text1">
                Zenga Styles (ゼンガ・スタイルズ)は <br />
                イタリアの伝統とモダンなデザインが <br class="br-sm" />
                融合した <br />
                プレミアムアパレルブランドです。<br />
                私たちの使命は、時代を超えて愛される <br />
                エレガンスとクラフトマンシップを <br class="br-xl" />
                提供することです。
              </p>
              <p class="about__text2">
                イタリアのファッションは <br />
                世界中でその洗練されたデザインと <br class="br-xl" />
                高い品質で知られています。<br />
                Zenga Stylesでは、<br class="br-xl" />
                これらの特性を最大限に生かし <br />
                一つ一つのアイテムに情熱と細部への <br class="br-xl" />
                こだわりを込めています。<br />
                私たちの製品は <br />
                イタリア国内の熟練した<br class="br-sm" />職人たちによって
                <br />
                手作業で作られその結果 <br />
                卓越した品質と独自のスタイルを <br class="br-sm" />
                誇ります。
              </p>
              <div class="more"><a href="<?php echo home_url(); ?>/about">more</a></div>
            </div>
          </div>
          <!-- </div> -->
          <div class="about__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="ロゴ" />
          </div>
        </div>
      </section>

      <section id="service" class="service">
        <div class="fluid2"></div>
        <div class="fluid3"></div>
        <div class="fluid4"></div>
        <div class="fluid5"></div>
        <span class="service__s1">High-Quality Apparel</span>
        <span class="service__s2">高品質服飾製造</span>
        <span class="service__s3">Custom Tailoring</span>
        <span class="service__s4">オーダーメイド</span>
        <span class="service__s5">Global Market Expansion</span>
        <span class="service__s6">世界市場展開</span>
        <div class="inner">
          <h2 class="section-title">Service</h2>
          <p class="service__text">
            Zenga Stylesは <br />
            イタリアの伝統を融合した <br class="br-sm" />
            高品質アパレル <br />
            オーダーメイドサービス、 <br class="br-sm" />
            グローバル展開を通じて <br />
            世界中のお客様に唯一無二のスタイルと <br class="br-sm" />
            品質を提供します。
          </p>
          <div class="more more-service"><a href="<?php echo home_url(); ?>/service">more</a></div>
        </div>
      </section>

      <section id="shop" class="shop">
        <div class="fluid6"></div>
        <div class="inner">
          <h2 class="section-title">Shop</h2>
          <ul class="slider2 gallery-list">
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m1.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m1s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m2.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m2s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m3.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m3s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m4.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m4s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m5.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m5s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m6.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m6s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>
            <li>
              <a href="<?php echo get_template_directory_uri(); ?>/img/m7.jpg" class="gallery"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/m7s.jpg" alt="" /><span>◯◯◯◯◯店</span></a
              >
            </li>

            <!--/slider-->
          </ul>
        </div>
      </section>

<?php get_footer(); ?>