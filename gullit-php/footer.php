<footer class="footer">
        <div class="inner">
          <div class="footer__flex">
            <h3 class="footer-title">Gullit</h3>
            <nav class="footer__nav">
              <ul class="footer__list">
                <li class="footer__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                <?php if (is_home() || is_front_page()) : ?>
                <li class="footer__item"><a href="#business">事業紹介</a></li>
                <?php else : ?>
                <li class="footer__item"><a href="<?php echo esc_url(home_url('/#business')); ?>">事業紹介</a></li>
                <?php endif; ?>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/category/actual">実績紹介</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/company">企業情報</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/category/column">コラム</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
              </ul>
            </nav>
          </div>
          <div class="footer__copyright"><small>&copy; Gullit</small></div>
        </div>
      </footer>

      <!-- wrap -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/shuffle-text@0.3.0/build/shuffle-text.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
