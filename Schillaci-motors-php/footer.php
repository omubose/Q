<footer class="footer">
        <div class="inner">
          <div class="footer__flex">
            <ul class="footer__list">
              <li class="footer__item footer__title">Schillaci motors</li>
              <li class="footer__item">〒000-0000</li>
              <li class="footer__item">◯◯県◯◯市◯◯◯00-0-0</li>
              <li class="footer__item">TEL 000-000-0000</li>
            </ul>
            <ul class="footer__nav-list">
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/about">About us</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/reason">Reason</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/service">Service</a></li>
              <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/news">News</a></li>
            </ul>
          </div>
          <div class="footer__copyright">
            <small>&copy; Schillaci motors</small>
          </div>
        </div>
        <?php if (is_home() || is_front_page()) : ?>
        <div class="footer__top">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top1.png" alt="" /></a>
        </div>
        <div class="footer__top">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top2.png" alt="" /></a>
        </div>
        <div class="footer__top">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top3.png" alt="" /></a>
        </div>
        <?php else : ?>



<?php endif; ?>


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
        { src: '<?php echo get_template_directory_uri(); ?>/img/mv1s.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv2s.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv3s.jpg'}
			];
		}

//Vegas全体の設定

$('#slider').vegas({
		overlay:false,//画像の上に網線やドットのオーバーレイパターン画像を指定。
		transition: 'blur',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burn、burn2、blur、blur2、flash、flash2が設定可能。
		transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
		delay: 10000,//スライド間の遅延をミリ秒単位で。
		animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
		animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
		slides: responsiveImage,//画像設定を読む
		//timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
	});

    </script>
    <?php wp_footer(); ?>
  </body>
</html>
