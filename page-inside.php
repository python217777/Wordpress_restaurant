<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>
  
    <!--タイトル部分-->
    <div
      class="text-[50px] md:text-[106px] leading-[35px] md:leading-[165px] flex justify-center my-[123px]"
    >
      店内案内
    </div>

    <div
      class="mb-[60px] border-b w-[70vw] mx-auto"
    ></div>

    <!--店内案内セクション-->
    <section
      class="mt-[60px] mx-[25vw] overflow-hidden aspect-[17/15] my-auto group relative"
    >
      <!-- アニメーション付き画像 -->
      <img
        src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店内案内.png"
        alt="foodimage1"
        class="w-full h-full object-cover scale-100 opacity-0 translate-y-5 transition-all duration-1000 ease-out group-hover:scale-105 group-hover:opacity-100 animate-fadein"
      />
    </section>

    <!-- カスタムアニメーションのスタイル -->
    <style>
      /* 日本語コメント: フェードイン＋スライドアップのアニメーション */
      @keyframes fadeInUp {
        0% {
          opacity: 0;
          transform: translateY(20px) scale(1.05);
        }
        100% {
          opacity: 1;
          transform: translateY(0) scale(1);
        }
      }
      .animate-fadein {
        animation: fadeInUp 1.2s ease-out forwards;
      }
    </style>

<?php get_footer(); ?>
