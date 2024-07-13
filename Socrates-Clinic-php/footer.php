<footer class="footer">
        <div class="inner">
          <div class="footer__flex">
            <div class="footer__flex-left">
              <ul class="footer__list">
                <li class="footer__item footer__logo">
                <?php if (is_home() || is_front_page()) : ?>
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
                  <?php else : ?>
                    <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" /></a>
                    <?php endif; ?>
                </li>
                <li class="footer__item footer__genre">
                  <ul class="genre-list">
                    <li class="genre-item">内科</li>
                    <li class="genre-item">外科</li>
                    <li class="genre-item">小児科</li>
                    <li class="genre-item">婦人科</li>
                  </ul>
                </li>
                <li class="footer__item footer__tel">
                  <span class="footer__tel-span1">TEL</span
                  ><span class="footer__tel-span2">000-000-0000</span>
                </li>
                <li class="footer__item footer__hours">
                  電話受付時間 09:00-12:00 / 14:30-18:00
                </li>
                <li class="footer__item">〒000-0000</li>
                <li class="footer__item">◯◯県◯◯市◯◯0-0-0</li>
              </ul>
              <div class="footer__table-card">
                <div class="footer__table">
                  <table
                    class="footer__table-01"
                    border="0"
                    cellpadding="0"
                    cellspacing="0"
                  >
                    <tbody>
                      <tr class="footer__table-tr1">
                        <th>
                          診療<span class="br-inline">受付</span
                          ><span class="br-inline">時間</span>
                        </th>
                        <td>月</td>
                        <td>火</td>
                        <td>水</td>
                        <td>木</td>
                        <td>金</td>
                        <td>土</td>
                        <td class="">日･祝</td>
                      </tr>
                      <tr class="footer__table-tr1">
                        <th>09:00 - 12:00</th>
                        <td>〇</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>－</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>－</td>
                      </tr>
                      <tr class="footer__table-tr1">
                        <th>14:30 - 17:30</th>
                        <td>〇</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>－</td>
                        <td>〇</td>
                        <td>－</td>
                        <td>－</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="footer__table-off">
                    <strong>休診日</strong>：木曜・土曜午後・日曜・祝日
                  </div>
                </div>
              </div>

            
            </div>

            <div class="footer__flex-right">
              <nav class="footer__nav">
                <ul class="footer__nav-list">
                <?php if (is_home() || is_front_page()) : ?>
                  <li class="footer__nav-item"><a href="#">ホーム</a></li>
                  <li class="footer__nav-item">
                    <a href="#about">当院について</a>
                  </li>
                  <li class="footer__nav-item">
                    <a href="#treatment">診療内容</a>
                  </li>
                  <li class="footer__nav-item">
                    <a href="#doctor">医師紹介</a>
                  </li>
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>


                  <?php else : ?>
                  <li class="footer__nav-item"><a href="<?php echo esc_url( home_url() ); ?>">ホーム</a></li>
                  <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#about')); ?>">当院について</a>
                  </li>
                  <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#treatment')); ?>">診療内容</a>
                  </li>
                  <li class="footer__nav-item">
                    <a href="<?php echo esc_url(home_url('/#doctor')); ?>">医師紹介</a>
                  </li>
                  <li class="footer__nav-item"><a href="<?php echo home_url(); ?>/category/news">お知らせ</a></li>
                  <?php endif; ?>


                </ul>
              </nav>
            </div>
          </div>
          <div class="footer__copyright">
            <small>&copy; Socrates Clinic</small>
          </div>
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
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv3.jpg'},


			];
		} else {
			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
        { src: '<?php echo get_template_directory_uri(); ?>/img/mv1.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv2s.jpg'},
				{ src: '<?php echo get_template_directory_uri(); ?>/img/mv3s.jpg'},

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