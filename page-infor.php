<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>
  
    <!--title-->
      <div
        class="text-[50px] md:text-[106px] leading-[35px] md:leading-[165px] flex justify-center my-[123px]"
      >
        店舗情報
      </div>

      <div
        class="mb-[60px] border-b w-[70vw] mx-auto"
      ></div>

      <section class="mx-[6vw] grid grid-cols-10">
        <div></div>
        <div class="col-span-8 text-[17px] leading-[40px] tracking-[-0.5px]">
          森のビュッフェ SUNでは、薄味で優しい味つけを心がけています。野菜料理は丁寧に店内で手作りし、お肉はたっぷりと使用。どの世代にも満足いただける内容を、安心価格（大人1,500円）でご提供。ご家族やご友人と、くつろぎの時間をお楽しみください。インターネットでのご予約も可能です。
        </div>
        <div></div>
      </section>
      <div
        class="my-[60px] border-b w-[70vw] mx-auto"
      ></div>

      <section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1">
        <div class="md:hidden overflow-hidden">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店舗情報-2.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto"
          />
          <div
            class="responsible-boder-b max-[768px]:w-[71.73vw] mx-auto my-[60px] md:my-[0px]"
          ></div>
        </div>
        <div class="hidden md:block responsible-boder-r">
          <div class="grid grid-cols-10 mt-[21px]">
            <div class="lg:col-span-2 md:col-span-1"></div>
            <div class="col-span-2 text-[17px] leading-[40px] text-right">
              住所
            </div>
            <div></div>
            <div
              class="col-span-5 text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              〒880-0834 宮崎県宮崎市 <br />
              新別府町前浜１４０１−２２４
            </div>
          </div>

          <div class="grid grid-cols-10 mt-[5px]">
            <div class="lg:col-span-2 md:col-span-1"></div>
            <div
              class="col-span-2 text-[17px] leading-[40px] text-right whitespace-nowrap tracking-tight"
            >
              電話番号
            </div>
            <div></div>
            <div
              class="col-span-5 text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              0745-23-4567
            </div>
          </div>

          <div class="grid grid-cols-10 mt-[5px]">
            <div class="lg:col-span-2 md:col-span-1"></div>
            <div
              class="col-span-2 text-[17px] leading-[40px] text-right whitespace-nowrap tracking-tight"
            >
              最寄りバス停
            </div>
            <div></div>
            <div
              class="col-span-5 text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              一ッ葉神社前バス停より <br />
              徒歩約2分（約120m）
            </div>
          </div>

          <div class="grid grid-cols-10 mt-[5px]">
            <div class="lg:col-span-2 md:col-span-1"></div>
            <div class="col-span-2 text-[17px] leading-[40px] text-right whitespace-nowrap tracking-tight">
              最寄駅
            </div>
            <div></div>
            <div
              class="col-span-5 text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              〒880宮崎駅（JR日豊本線）<br />
              より約2.8〜3.0km <br />
              徒歩約35〜40分 <br />
              車で約5〜10分
            </div>
          </div>

          <div class="grid grid-cols-10 mt-[5px]">
            <div class="lg:col-span-2 md:col-span-1"></div>
            <div class="col-span-2 text-[17px] leading-[40px] text-right whitespace-nowrap tracking-tight">
              駐車場
            </div>
            <div></div>
            <div
              class="col-span-5 text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              〒敷地内に駐車場<br />
              10台分ございます
            </div>
          </div>
        </div>
        <div class="md:hidden grid grid-cols-8">
          <div></div>
          <div class="col-span-6">
            <div class="text-[18px] leading-[40px]">住所</div>
            <div class="text-[15px] leading-[40px]">
              〒880-0834 宮崎県宮崎市<br />
              新別府町前浜１４０１−２２４
            </div>

            <div class="text-[18px] leading-[40px] mt-[30px]">電話番号</div>
            <div class="text-[15px] leading-[40px]">0745-23-4567</div>

            <div class="text-[18px] leading-[40px] mt-[30px]">最寄りバス停</div>
            <div class="text-[15px] leading-[40px]">
              一ッ葉神社前バス停より<br />
              徒歩約2分（約120m）
            </div>
            <div class="text-[18px] leading-[40px] mt-[30px]">最寄駅</div>
            <div
              class="text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              宮崎駅（JR日豊本線）より約2.8〜3.0km<br />
              （徒歩約35〜40分／車で約5〜10分）
            </div>
            <div class="text-[18px] leading-[40px] mt-[30px]">駐車場</div>
            <div
              class="text-[15px] leading-[40px] whitespace-nowrap tracking-tight"
            >
              敷地内に駐車場10台分ございます
            </div>
          </div>
        </div>
        <div class="max-md:hidden overflow-hidden">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店舗情報-2.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto"
          />
        </div>
      </section>

      <div class="my-[60px] border-b"></div>

      <section class="w-[75vw] mx-auto h-[500px]">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.2582141369034!2d131.463399315482!3d31.9293886812411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3538b7634d3d4ff7%3A0xb3a9f8dd95a835a!2z44CSODgwLTA4MzQg5a6u5Z-O55yM5a6u5Z-O5biC5paw5r2f55S677yR77yU77yX77yR77yS!5e0!3m2!1sja!2sjp!4v1700000000000"
          class="w-full h-full"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
      </section>

	<?php get_footer(); ?>