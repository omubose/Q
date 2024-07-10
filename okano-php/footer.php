<footer class="footer">
        <div class="inner">
          <nav class="footer__nav">
            <ul class="footer__list">
              <li class="footer__item footer__title">
                <a href="<?php echo esc_url( home_url() ); ?>">CHINESE RESTAURANT　OKANO</a>
              </li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/mission">OUR MISSION</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/service">SERVICE</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/category/news">NEWS</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/category/blog">BLOG</a></li>
              <li class="footer__item"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
            </ul>
          </nav>
          <div class="footer__copyright"><small>&copy; OKANO</small></div>
        </div>
      </footer>

      <!-- wrap -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
