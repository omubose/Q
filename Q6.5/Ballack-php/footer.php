<footer class="footer">
      <nav class="footer__nav">
        <ul class="footer__list">
          <li class="footer__item"><a href="#about">バラックについて</a></li>
          <li class="footer__item"><a href="#news">お知らせ</a></li>
          <li class="footer__item"><a href="#blog">ブログ</a></li>
          <li class="footer__item"><a href="<?php echo home_url(); ?>/contact">コンタクト</a></li>
          <li class="footer__item"><a href="#access">アクセス</a></li>
        </ul>
      </nav>
      <div class="footer__logo-card">
        <div class="footer__camp-logo">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/camp-logo.png" alt="" /></a>
        </div>
        <div class="footer__logo">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
        </div>
      </div>
      <div class="footer__sns-nav">
        <div class="footer__sns">
          <a  href="https://www.facebook.com/"
          target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" /></a>
        </div>
        <div class="footer__sns">
          <a href="https://www.instagram.com/"
          target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="" /></a>
        </div>
        <div class="footer__sns">
          <a href="https://twitter.com/"
          target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="" /></a>
        </div>
      </div>
      <div class="footer__copyright">
        <small>&copy; ballack</small>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <!-- <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
