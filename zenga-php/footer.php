<?php if (is_home() || is_front_page()) : ?>

<footer id="footer" class="footer">
        <div class="fluid7"></div>
        <div class="inner">
          <div class="footer__flex">
            <div class="flex__left">
              <div class="footer__logo-blue">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-blue.png" alt="" /></a>
              </div>
              <ul class="footer__item">
                <li class="footer__list">〒000-0000</li>
                <li class="footer__list">東京都〇〇区〇〇町0-00 〇〇〇ビル</li>
                <li class="footer__list">
                  TEL 00-0000-0000 <br class="br-md"> 受付時間 10:00～17:00）
                </li>
              </ul>
            </div>
            <div class="flex__right">
              <div class="footer__nav">
                <ul class="footer__nav-list">
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/about">About</a></li>
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/service">Service</a></li>
                  <li class="footer__nav-item"><a href="#shop">Shop</a></li>
                  <li class="footer__nav-item"><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer__copyright"><small>&copy; zenga styles</small></div>
        </div>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
<?php else : ?>

  <footer id="footer" class="footer">
        <div class="fluid7"></div>
        <div class="inner">
          <div class="footer__flex">
            <div class="flex__left">
              <div class="footer__logo-blue">
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-blue.png" alt="" /></a>
              </div>
              <ul class="footer__item">
                <li class="footer__list">〒000-0000</li>
                <li class="footer__list">東京都〇〇区〇〇町0-00 〇〇〇ビル</li>
                <li class="footer__list">
                  TEL 00-0000-0000 <br class="br-md"> 受付時間 10:00～17:00）
                </li>
              </ul>
            </div>
            <div class="flex__right">
              <div class="footer__nav">
                <ul class="footer__nav-list">
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/about">About</a></li>
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/service">Service</a></li>
                  <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/#shop')); ?>">Shop</a></li>
                  <li class="footer__nav-item"><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer__copyright"><small>&copy; zenga styles</small></div>
        </div>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>

<?php endif; ?>