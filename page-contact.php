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
        お問い合わせ
      </div>

      <div
        class="mb-[60px] border-b-[0.4px] border-smooth-gray w-[70vw] mx-auto"
      ></div>

      <div class="text-[15px] leading-[40px] text-center mx-auto w-[62vw]">
        以下のフォームの項目を入力し、よろしければ「送信する」ボタンをクリックしてください。
      </div>

      <div
        class="mt-[60px] border-b w-[70vw] mx-auto"
      ></div>

      <section class="mx-[6vw] grid grid-cols-8">
        <div></div>
        <div class="col-span-6">
          <div class="mt-[60px]">
            <label class="flex mb-[10px]">
              <div
                class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border"
              >
                必須
              </div>
              <div class="text-[17px] leading-[25px] ml-[10px]">お名前</div>
            </label>
            <input
              type="text"
              placeholder="例）商工 太郎 "
              class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
            />
          </div>
          <div class="mt-[60px]">
            <label class="flex mb-[10px]">
              <div
                class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border"
              >
                必須
              </div>
              <div class="text-[17px] leading-[25px] ml-[10px]">電話番号</div>
            </label>
            <input
              type="text"
              placeholder="例）0000-00-0000 "
              class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
            />
          </div>
          <div class="mt-[60px]">
            <label class="flex mb-[10px]">
              <div
                class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border"
              >
                必須
              </div>
              <div class="text-[17px] leading-[25px] ml-[10px]">
                メールアドレス
              </div>
            </label>
            <input
              type="text"
              placeholder="例）商工 太郎 "
              class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
            />
          </div>
          <div class="text-[12px] leading-[25px] flex mt-[15px]">
            ※
            <p class="ml-[10px]">
              メールアドレスの誤入力などにより、当クラブからご返信ができないケースや、ご返信できた場合でも迷惑メールフォルダに振り分けられているケースが発
              生しております。お送りいただく際や受信の際は、ご確認いただけますようお願いいたします。
            </p>
          </div>
          <div class="mt-[60px]">
            <label class="flex mb-[10px]">
              <div
                class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border"
              >
                必須
              </div>
              <div class="text-[17px] leading-[25px] ml-[10px]">
                お問い合わせ内容
              </div>
            </label>
            <textarea
              type="text"
              class="mt-[5px] w-full h-[250px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300 resize-none overflow-y-auto overflow-x-hidden"
            ></textarea>
          </div>
        </div>
        <div></div>
      </section>

      <button
        class="w-[300px] h-[50px] text-white text-[15px] leading-[25px] flex justify-center items-center bg-[#665B09] mx-auto mt-[60px] transition-opacity duration-500 hover:opacity-70"
      >
        入力内容を確認する
      </button>

	<?php get_footer(); ?>