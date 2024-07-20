<footer class="footer">
      <div class="inner">
        <div class="footer__flex">
          <div class="footer__left">
            <h2 class="footer__title">Osim</h2>
            <span>〒000-0000</span>
            <span>◯◯県◯◯市◯◯ 0-0-0</span>
            <span>TEL 000-000-0000</span>
          </div>
          <nav class="footer_nav">
            <ul class="footer__list">
              <li class="footer__item"><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/works">WORKS</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
            </ul>
          </nav>
        </div>
        <div class="footer__copyright"><small>&copy; osim</small></div>
      </div>
    </footer>

          <!-- wrap -->
          </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
