<?php get_header(); ?>

      <section class="wp-about">
        <div class="inner">
          <div class="wp-logo-b"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-b.png" alt="" /></div>
          <div class="wp-about__container">
            <h2 class="wp-title">
              <span class="wp-title-en">Reason</span>
              <span class="wp-title-ja">選ばれる理由</span>
            </h2>

            <ul class="wp-about__list">
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">1. 専門知識と経験</h3>
                <p class="wp-about__item-text">
                  私たちの技術者は高度なスキルを持ち、常に最新の自動車技術を学び続けています。これにより、どんな車種でも適切に対応し、最高のサービスを提供できます。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">2. 高品質なサービス</h3>
                <p class="wp-about__item-text">
                  私たちは高品質な部品と最新の設備を使用しています。これにより、すべての修理やメンテナンスが信頼できるものとなり、お客様の車の性能を最大限に引き出します。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">3. 透明性と誠実さ</h3>
                <p class="wp-about__item-text">
                  私たちはお客様との信頼関係を大切にしています。サービス内容や費用について、常に透明で誠実な対応を心掛け、お客様に安心していただけるよう努めています。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">4. カスタマーケア</h3>
                <p class="wp-about__item-text">
                  お客様一人ひとりのニーズに合わせたサービスを提供します。迅速で丁寧な対応で、お客様の満足を第一に考えています。
                </p>
              </li>

              <li class="wp-about__item">
                <h3 class="wp-about__item-title">5. 快適な施設</h3>
                <p class="wp-about__item-text">
                  私たちのモダンな施設は、最新の診断ツールと設備を備えており、快適にご利用いただけます。お待ちの間もリラックスしていただけるよう、様々な設備を整えています。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">6. 緊急対応</h3>
                <p class="wp-about__item-text">
                  予期しないトラブルにも迅速に対応します。緊急時のサポート体制が整っており、お客様の安全を最優先に考えています。
                </p>
              </li>
            </ul>
            <p class="wp-about__end-text">
              これらの理由から、多くのお客様にご信頼いただき、選ばれ続けています。
            </p>
            <div class="wp-home">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home.png" alt="" /></a>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>