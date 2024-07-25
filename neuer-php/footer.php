<footer class="footer">
        <div class="inner">
          <div class="footer__flex">
            <div class="footer__flex-left">
              <h2 class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" /></h2>
              <span>〒000-0000</span>
              <span>◯◯県◯◯市◯◯ 0-0-0</span>
              <span>TEL 000-000-0000</span>
            </div>
            <nav class="footer__nav gnavi3">
              <ul class="footer__list">
                <li class="footer__item"><a href="<?php echo esc_url( home_url() ); ?>">home</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/lessons">one-on-one lessons</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/coaching">coaching</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/jobs">coaching Jobs</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/category/voice">voice</a></li>
              </ul>
            </nav>
          </div>
          <div class="footer__copyright"><small>&copy; neuer</small></div>
        </div>
      </footer>

      <!-- wrap -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
