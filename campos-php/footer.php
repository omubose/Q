
<footer class="footer">
        <div class="inner">
          <div class="footer__flex">
            <div class="footer__flex-left">
              <h2 class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" alt="" /></h2>
              <span class="footer__span1">〒000-0000</span>
              <span class="footer__span2"
                >東京都◯◯区◯◯◯町０−０−０ <span class="br-inline">◯◯ビル0階</span>
                         </span
              >
            </div>
            <nav class="footer__flex-right">
              <ul class="footer__list gnavi-w">
              <?php if (is_home() || is_front_page()) : ?>
                <li class="footer__item"><a href="#">Home</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="footer__item"><a href="#news">News</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/business">Business</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
                <?php else : ?>
                  <li class="footer__item"><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
                <li class="footer__item"><a href="<?php echo esc_url(home_url('/#news')); ?>">News</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/business">Business</a></li>
                <li class="footer__item"><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
                <?php endif; ?>

              </ul>
            </nav>
          </div>
          <div class="footer__copyright"><small>&copy; campos</small></div>
        </div>
      </footer>

      <!-- wrap -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script>
      //画像の設定

var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
		if (windowwidth > 768){
			var responsiveImage = [//PC用の画像
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv1.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv2.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv3.jpg'}
			
			];
		} else {
			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv1.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv2.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv3s.jpg'}
			];
		}

//Vegas全体の設定

$('#slider').vegas({
		overlay: false,//画像の上に網線やドットのオーバーレイパターン画像を指定。
		transition: 'blur',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burn、burn2、blur、blur2、flash、flash2が設定可能。
		transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
		delay: 10000,//スライド間の遅延をミリ秒単位で。
		animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
		animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
		slides: responsiveImage,//画像設定を読む
		timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
	});

    </script>
    <?php wp_footer(); ?>
  </body>
</html>
