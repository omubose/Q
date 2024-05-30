$(function() {
  $('#slider').vegas({
      slides: [
          { src: '<?php echo get_template_directory_uri(); ?>/img/terrace.jpg' },
          { src: '<?php echo get_template_directory_uri(); ?>/img/town.jpg' },
          { src: '<?php echo get_template_directory_uri(); ?>/img/lake.jpg' },
         
      ],
      overlay: '<?php echo get_template_directory_uri(); ?>/js/overlays/02.png', //フォルダ『overlays』の中からオーバーレイのパターン画像を選択
      transition: 'fade', //スライドを遷移させる際のアニメーション
      transitionDuration: 4000, //スライドの遷移アニメーションの時間
      delay: 10000, //スライド切り替え時の遅延時間
      animation: 'random', //スライド表示中のアニメーション
      animationDuration: 20000, //スライド表示中のアニメーションの時間
      timer:false,
  });
});