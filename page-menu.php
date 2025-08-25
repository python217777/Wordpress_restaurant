<?php
/*
Template Name: FrontPage
*/
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<!-- Title -->
<div class="text-[50px] md:text-[106px] leading-[35px] md:leading-[165px] flex justify-center my-[123px]">
  メニュー
</div>

<div class="mb-[60px] border-b w-[70vw] mx-auto"></div>

<!-- Price Section -->
<section>
  <div class="hidden md:grid w-[70vw] mx-auto grid-cols-8">
    <div class="text-[18px] leading-[28px] max-lg:col-span-2">参考価格</div>
    <div class="text-[15px] leading-[28px] max-lg:col-span-6 lg:col-span-7">
      大人 1,500円、 小学生 1,000円、 3歳～小学生未満 500円、 3歳未満 無料（税込）
    </div>
  </div>
  <div class="md:hidden max-[425px]:w-[80vw] max-[375px]:w-[90vw] w-[70vw] mx-auto grid grid-cols-8 max-[450px]:grid-cols-12">
    <div class="text-[18px] leading-[28px] col-span-2 max-[450px]:col-span-3">参考価格</div>
    <div class="min-[450px]:hidden"></div>
    <div class="text-[15px] leading-[28px] col-span-6 max-[450px]:col-span-8">
      大人 <span class="ml-[87px]">1,500円<br /></span>
      小学生 <span class="ml-[72px]">1,000円<br /></span>
      3歳～小学生未満 <span class="ml-[5px]">500円<br /></span>
      3歳未満 <span class="ml-[65px]">無料<br /></span>
    </div>
  </div>
</section>

<div class="my-[60px] border-b w-[70vw] mx-auto"></div>

<!-- Menu Section -->
<section class="md:mx-[6vw] space-y-[60px]">

  <!-- 1. ミートローフ -->
  <div class="w-[65vw] mx-auto md:w-full md:grid md:grid-cols-2 group">
    <div class="md:ml-[6vw] overflow-hidden aspect43 my-auto max-w-[548px] mx-auto rounded-xl shadow-lg transition-transform duration-700 ease-in-out group-hover:scale-105">
      <img src="<?php echo T_DIRE_URI; ?>/assets/TempImage/ミートローフ.jpg"
           alt="foodimage1"
           class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"/>
    </div>
    <div class="max-lg:mt-[60px] lg:mt-[94px] grid grid-cols-7 min-[1080px]:grid-cols-6">
      <div class="hidden md:block"></div>
      <div class="md:col-span-5 min-[1080px]:col-span-4 col-span-7 
                  opacity-80 group-hover:opacity-100
                  translate-y-2 group-hover:translate-y-0
                  transition-all duration-700 ease-in-out">
        <div class="lg:text-[35px] lg:leading-[40px] max-lg:text-[25px] max-lg:leading-[35px]">
          自家製ミートローフ
        </div>
        <div class="lg:text-[25px] max-xl:leading-[45px] xl:leading-[60px] 
                    lg:mt-[86px] max-lg:text-[17px] max-lg:leading-[40px] max-lg:mt-[30px]">
          お肉の旨味がぎゅっと詰まった手作りミートローフ。ジューシーで食べ応え抜群の一品です。
        </div>
      </div>
    </div>
  </div>

  <div class="my-[60px] border-b w-[70vw] mx-auto"></div>

  <!-- 2. グラタン -->
  <div class="w-[65vw] mx-auto md:w-full md:grid md:grid-cols-2 group">
    <div class="md:hidden overflow-hidden aspect43 my-auto max-w-[548px] mx-auto rounded-xl shadow-lg transition-transform duration-700 ease-in-out group-hover:scale-105">
      <img src="<?php echo T_DIRE_URI; ?>/assets/TempImage/グラタン-.jpg"
           alt="foodimage2"
           class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"/>
    </div>
    <div class="max-lg:mt-[60px] lg:mt-[94px] grid grid-cols-7 min-[1080px]:grid-cols-6">
      <div class="hidden md:block"></div>
      <div class="md:col-span-5 min-[1080px]:col-span-4 col-span-7 
                  opacity-80 group-hover:opacity-100
                  translate-y-2 group-hover:translate-y-0
                  transition-all duration-700 ease-in-out">
        <div class="lg:text-[35px] lg:leading-[40px] max-lg:text-[25px] max-lg:leading-[35px]">
          熱々グラタン
        </div>
        <div class="lg:text-[25px] max-xl:leading-[45px] xl:leading-[60px] 
                    lg:mt-[86px] max-lg:text-[17px] max-lg:leading-[40px] max-lg:mt-[30px]">
          クリーミーなホワイトソースととろけるチーズの絶妙なハーモニー。熱々の状態でご提供します。
        </div>
      </div>
    </div>
    <div class="hidden md:block md:mr-[6vw] overflow-hidden aspect43 my-auto max-w-[548px] mx-auto rounded-xl shadow-lg transition-transform duration-700 ease-in-out group-hover:scale-105">
      <img src="<?php echo T_DIRE_URI; ?>/assets/TempImage/グラタン-.jpg"
           alt="foodimage2"
           class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"/>
    </div>
  </div>

  <div class="my-[60px] border-b w-[70vw] mx-auto"></div>

  <!-- 3. パウンドケーキ -->
  <div class="w-[65vw] mx-auto md:w-full md:grid md:grid-cols-2 group">
    <div class="md:ml-[6vw] overflow-hidden aspect43 my-auto max-w-[548px] mx-auto rounded-xl shadow-lg transition-transform duration-700 ease-in-out group-hover:scale-105">
      <img src="<?php echo T_DIRE_URI; ?>/assets/TempImage/パウンドケーキ.jpg"
           alt="foodimage3"
           class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110"/>
    </div>
    <div class="max-lg:mt-[60px] lg:mt-[94px] grid grid-cols-7 min-[1080px]:grid-cols-6">
      <div class="hidden md:block"></div>
      <div class="md:col-span-5 min-[1080px]:col-span-4 col-span-7 
                  opacity-80 group-hover:opacity-100
                  translate-y-2 group-hover:translate-y-0
                  transition-all duration-700 ease-in-out">
        <div class="lg:text-[35px] lg:leading-[40px] max-lg:text-[25px] max-lg:leading-[35px]">
          <p class="whitespace-nowrap tracking-tight">手作りパウンドケーキ</p>
        </div>
        <div class="lg:text-[25px] max-xl:leading-[45px] xl:leading-[60px] 
                    lg:mt-[86px] max-lg:text-[17px] max-lg:leading-[40px] max-lg:mt-[30px]">
          しっとりと優しい甘さの手作りパウンドケーキ。お食事の後のデザートとしてもお楽しみください。
        </div>
      </div>
    </div>
  </div>

</section>
<!-- End Menu Section -->

<?php get_footer(); ?>
