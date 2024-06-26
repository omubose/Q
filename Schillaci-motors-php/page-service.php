<?php get_header(); ?>
      <section class="wp-about">
        <div class="inner">
          <div class="wp-logo-b"><img src="<?php echo get_template_directory_uri() ?>/img/logo-b.png" alt="" /></div>
          <div class="wp-about__container">
            <h2 class="wp-title">
              <span class="wp-title-en">Service</span>
              <span class="wp-title-ja">サービス</span>
            </h2>

            <ul class="wp-about__list">
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">1. 定期メンテナンスと <span class="wp-inline-b">点検</span></h3>
                <p class="wp-about__item-text">
                  オイル交換、フィルター交換、ブレーキチェックなど、車両の定期的な点検とメンテナンスを行い、車のパフォーマンスを最適化します。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">2. 高度な診断と修理</h3>
                <p class="wp-about__item-text">
                  最新の診断ツールを使用して車の問題を正確に特定し、迅速かつ効果的に修理を行います。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">
                  3. エンジンおよび <span  class="wp-inline-b">トランスミッションの</span> <span  class="wp-inline-b">サービス</span>
                </h3>
                <p class="wp-about__item-text">
                  エンジンの調整、トランスミッションの修理・交換など、車両の心臓部であるエンジンとトランスミッションに関する専門的なサービスを提供します。
                </p>
              </li>
              <li class="wp-about__item">
                <h3 class="wp-about__item-title">
                  4. ブレーキおよび <span  class="wp-inline-b">サスペンションの修理</span>
                </h3>
                <p class="wp-about__item-text">
                  ブレーキパッドやローターの交換、サスペンションの修理など、安全運転に欠かせない部品のメンテナンスと修理を行います。
                </p>
              </li>

              <li class="wp-about__item">
                <h3 class="wp-about__item-title">
                  5. タイヤサービスおよび <span class=" class="wp-inline-b>アライメント</span> 
                </h3>
                <p class="wp-about__item-text">
                  タイヤの交換、バランス調整、ホイールアライメントなど、タイヤに関する総合的なサービスを提供し、安全な走行をサポートします。
                </p>
              </li>
            </ul>
            <p class="wp-about__end-text">
              これらのサービスを通じて、お客様の車両が常に最高の状態で運転できるようサポートしています。
            </p>
            <div class="wp-home">
              <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/home.png" alt="" /></a>
            </div>
          </div>
        </div>
      </section>
      



<?php get_footer(); ?>