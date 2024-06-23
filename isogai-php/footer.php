<footer class="footer">
        <div class="inner">
          <ul class="footer__list">
            <li class="footer__item footer__name">居酒屋　いそがい</li>
            <li class="footer__item">〒0000-000</li>
            <li class="footer__item">◯◯県◯◯市◯◯◯0-00 ◯◯ビル3F</li>
            <li class="footer__item">TEL：000-000-0000</li>
            <li class="footer__item footer__info">
              <span>営業案内</span><img class="footer__img1" src="<?php echo get_template_directory_uri(); ?>/img/calendar-w.png" alt="ロゴ" />
              <?php if (is_home() || is_front_page()) : ?>
                <a href="#news"
                ><img class="footer__img2" src="<?php echo get_template_directory_uri(); ?>/img/double-arrow-w.png" alt="ロゴ" /><span>お知らせ参照</span></a>
                <?php else : ?>
                  <a href="<?php echo esc_url(home_url('/#news')); ?>"
                ><img class="footer__img2" src="<?php echo get_template_directory_uri(); ?>/img/double-arrow-w.png" alt="ロゴ" /><span>お知らせ参照</span></a>
                <?php endif; ?>
            </li>
            <li class="footer__item footer__sns-flex">
              <a href="https://twitter.com/"
              target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/x-white.png" alt="" /></a>
              <a href="https://www.facebook.com/"
              target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-w.png" alt="" /></a>
              <a href="https://www.instagram.com/"
              target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Instagram-w.png" alt="" /></a>
            </li>
          </ul>
          <div class="footer__copyright">
            <small>&copy; 居酒屋いそがい</small>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
