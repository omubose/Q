
<footer class="footer" id="footer">
        <div class="footer__inner">
          <div class="footer__flex">
            <ul class="footer__list">
              <li class="footer__item footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt=""></li>
              <li class="footer__item">〒000-0000</li>
              <li class="footer__item">◯◯県◯◯市◯◯ 0-0-00</li>
              <li class="footer__item">TEL 000-000-0000</li>
            </ul>
            <ul class="footer__nav-list">
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/info">企業情報</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
            </ul>
          </div>
          <div class="footer__ccopyright"><small>&copy; Silva</small></div>

        </div>
            
      
      </footer>

      <!-- wrap -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollgress/2.0.0/scrollgress.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>