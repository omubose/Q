<?php get_header(); ?>
<div class="fv">
      <img src="<?php echo get_template_directory_uri(); ?>/img/fv-logo.png" alt="" />
      <div class="fluid"></div>
      <div class="fluid-blue"></div>
      <div class="fluid-green"></div>
    </div>


    <section id="news" class="news">
      <div class="inner">
        <h2 class="section-title">NEWS</h2>
        <ul class="news__list">
        <?php
        $args = array(
          'posts_per_page' => 10
        );
      ?> 
            <?php $posts = get_posts($args); ?>
      <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>

  
          <li class="news__item">
            <p class="news__date"><a href="<?php the_permalink(); ?>"><?php the_time('Y/m/d'); ?></a></p>
            <p class="news__text">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </p>
          </li>
          <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
        </ul>
      
      </div>
    </section>

    <section id="about" class="about">
      <div class="wave">
        <h2 class="section-title">ABOUT</h2>
        <canvas id="waveCanvas"></canvas>
      </div>

      <div class="inner">
        <div class="about__container">
          <p class="about__text">
            音楽フェスティバル「（架空）バルデラマ（VALDERRAMA）」は、<br />
            南米の音楽と文化を主体としたイベントで、
            南米の多様な音楽ジャンルと豊かな文化を祝う場です。<br />南米の音楽と文化を広めることを目的として
            毎年異なる南米の都市で開催されてきましたが、<br />今回は特別に日本で開催されることになりました。
          </p>
          <p class="about__text">
            バルデラマでは、サルサ、メレンゲ、クンビア、
            サンバ、ボサノヴァ、タンゴ、レゲトンなど、<br />南米の多様な音楽ジャンルが楽しめます。<br />参加者はこれらの音楽を通じて、
            南米音楽の豊かさと多様性を体感することができます。<br />
            さらに、音楽だけでなく、
            各国の伝統的なダンスや衣装、料理なども紹介され、<br />地元のアーティストや職人によるワークショップや展示も行われ、文化交流の場となります。
          </p>

          <p class="about__text">
            今回の日本開催では、南米各地からのアーティストだけでなく、<br />
            日本の音楽アーティストとの共演も大きな見どころです。<br />
            南米のリズムと日本の音楽スタイルが融合することで、
            独自のパフォーマンスが生まれ、<br />
            観客に新しい音楽体験を提供します。<br />
            この共演は、音楽を通じた国際的な交流と理解を深めるだけでなく、<br />
            両地域の音楽シーンに新しい風を吹き込みます。
          </p>
        </div>
      </div>
      <div class="wave2">
        <canvas id="waveCanvas2"></canvas>
      </div>
    </section>

    <section id="live-act" class="live-act">
      <div class="inner">
        <h2 class="section-title">LIVE ACT</h2>
        <span class="live-act__place"></span>
        <div class="live-act__flex-date">
          <div class="live-act__btn"><a href="#day1">2.30 [SAT]</a></div>
          <div class="live-act__btn"><a href="#day2">2.31 [SUN]</a></div>
        </div>
        <h3 id="day1" class="live-act__date">2.30 [SAT]</h3>
        <div class="live-act__cards live-act__cards1 flex delayScroll">
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a3.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a4.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a5.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a6.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a7.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a8.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a9.jpg" alt="" /><span>XXXXXXX</span>
          </div>
        </div>
        <h3 id="day2" class="live-act__date">2.31 [SUN]</h3>
        <div class="live-act__cards flex delayScroll">
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a10.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a11.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a12.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a13.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a14.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a15.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a16.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a17.jpg" alt="" /><span>XXXXXXX</span>
          </div>
          <div class="live-act__card box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a18.jpg" alt="" /><span>XXXXXXX</span>
          </div>
        </div>
      </div>
    </section>

    <section id="tickets" class="tickets">
      <div class="inner">
        <h2 class="section-title">TICKETS</h2>
        <span class="tickets__span1">一般発売</span>
        <span class="tickets__span2"> 2023年11月30日(木)　11:36~</span>
        <div class="tickets__btns">
          <div class="tickets__flex">
            <a class="tickets__btn btn btn-flat c1"><span>チケットXXX</span></a>
            <a class="tickets__btn btn btn-flat c2"><span>チケットXXX</span></a>
            <a class="tickets__btn btn btn-flat c3"><span>チケットXXX</span></a>
            <a class="tickets__btn btn btn-flat c4"><span>チケットXXX</span></a>
          </div>
        </div>
      </div>
    </section>

    <section id="access" class="access">
      <div class="inner">
        <h2 class="section-title">ACCESS</h2>
        <div class="access__map">
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
      </div>
    </section>

    <section class="sponsored">
      <div class="inner">
        <ul class="sponsored__list">
          <li class="sponsored__item">
            <span class="sponsored__span1">主催</span>
            <span class="sponsored__span2">◯◯◯株式会社</span>
          </li>
          <li class="sponsored__item">
            <span class="sponsored__span1">協賛</span>
            <span class="sponsored__span2"
              >◯◯◯株式会社/◯◯◯株式会社/◯◯◯株式会社/<br />◯◯◯株式会社/◯◯◯株式会社/◯◯◯株式会社/◯◯◯株式会社/<br />◯◯◯株式会社/◯◯◯株式会社/◯◯◯株式会社/</span
            >
          </li>
          <li class="sponsored__item">
            <span class="sponsored__span1">運営</span>
            <span class="sponsored__span2">◯◯◯株式会社</span>
          </li>
          <li class="sponsored__item">
            <span class="sponsored__span1">お問い合わせ</span>
            <span class="sponsored__span2">◯◯◯株式会社</span>
            <span class="sponsored__span3">TEL:◯◯-◯◯◯◯-◯◯◯◯</span>
          </li>
        </ul>
      </div>
      <div class="sponsored__top "><a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt=""></a></div>
      <div class="sponsored__roll-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/roll.png" alt=""></a></div>
    </section>

<?php get_footer(); ?>