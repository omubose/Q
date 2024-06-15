<?php if (is_home() || is_front_page()) : ?>
<footer class="footer">
      <div class="inner">
        <div class="footer__flex">
          <div class="footer__flex-left">
            <div class="footer__logo">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" /></a>
            </div>
            <div class="footer__mag"><img src="<?php echo get_template_directory_uri(); ?>/img/mag-w.png" alt="" /></div>
  
            <ul class="footer__list">
              <li class="footer__item">〒000-0000</li>
              <li class="footer__item">◯◯県◯◯◯町◯◯◯000-0</li>
              <li class="footer__item">TEL 000-000-0000</li>
              <li class="footer__item">営業時間/0:00〜0:00</li>
              <li class="footer__item">定休日/火</li>
            </ul>
          </div>
          <div class="footer__flex-right">
            <ul class="footer__flex-right__list">
              <li class="footer__flex-right__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
              <li class="footer__flex-right__item"><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
              <li class="footer__flex-right__item"><a href="#menu">Menu</a></li>
              <li class="footer__flex-right__item"><a href="#info">Info</a></li>
            </ul>
          </div>
        </div>
        <div class="footer__copyright"><small>&copy; Deschamps</small></div>

      </div>
          
      
    </footer>

    <?php else : ?>
      <footer class="footer">
      <div class="inner">
        <div class="footer__flex">
          <div class="footer__flex-left">
            <div class="footer__logo">
              <a href="  <?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" /></a>
            </div>
            <div class="footer__mag"><img src="<?php echo get_template_directory_uri(); ?>/img/mag-w.png" alt="" /></div>
  
            <ul class="footer__list">
              <li class="footer__item">〒000-0000</li>
              <li class="footer__item">◯◯県◯◯◯町◯◯◯000-0</li>
              <li class="footer__item">TEL 000-000-0000</li>
              <li class="footer__item">営業時間/0:00〜0:00</li>
              <li class="footer__item">定休日/火</li>
            </ul>
          </div>
          <div class="footer__flex-right">
            <ul class="footer__flex-right__list">
              <li class="footer__flex-right__item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
              <li class="footer__flex-right__item"><a href="<?php echo home_url(); ?>/category/blog">Blog</a></li>
              <li class="footer__flex-right__item"><a href="<?php echo esc_url(home_url('/#menu')); ?>">Menu</a></li>
              <li class="footer__flex-right__item"><a href="<?php echo esc_url(home_url('/#info')); ?>">Info</a></li>
            </ul>
          </div>
        </div>
        <div class="footer__copyright"><small>&copy; Deschamps</small></div>

      </div>
          
      
    </footer>
    <?php endif; ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
   <?php wp_footer(); ?>
  </body>
</html>


