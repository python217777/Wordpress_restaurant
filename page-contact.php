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
    <!-- 名前 -->
    <div class="mt-[60px]">
      <label class="flex mb-[10px]">
        <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">
          必須
        </div>
        <div class="text-[17px] leading-[25px] ml-[10px]">お名前</div>
      </label>
      <input
        id="name"
        type="text"
        placeholder="例）商工 太郎 "
        class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
      />
      <p id="nameError" class="text-red-600 text-[13px] mt-1 hidden"></p>
    </div>

    <!-- 電話番号 -->
    <div class="mt-[60px]">
      <label class="flex mb-[10px]">
        <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">
          必須
        </div>
        <div class="text-[17px] leading-[25px] ml-[10px]">電話番号</div>
      </label>
      <input
        id="phone"
        type="text"
        placeholder="例）000-0000-0000 "
        class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
      />
      <p id="phoneError" class="text-red-600 text-[13px] mt-1 hidden"></p>
    </div>

    <!-- メールアドレス -->
    <div class="mt-[60px]">
      <label class="flex mb-[10px]">
        <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">
          必須
        </div>
        <div class="text-[17px] leading-[25px] ml-[10px]">メールアドレス</div>
      </label>
      <input
        id="email"
        type="text"
        placeholder="例）example@gmail.com "
        class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
      />
      <p id="emailError" class="text-red-600 text-[13px] mt-1 hidden"></p>
    </div>

    <!-- 注意書き -->
    <div class="text-[12px] leading-[25px] flex mt-[15px]">
      ※
      <p class="ml-[10px]">
        メールアドレスの誤入力などにより、当クラブからご返信ができないケースや、ご返信できた場合でも迷惑メールフォルダに振り分けられているケースが発生しております。
        お送りいただく際や受信の際は、ご確認いただけますようお願いいたします。
      </p>
    </div>

    <!-- お問い合わせ内容 -->
    <div class="mt-[60px]">
      <label class="flex mb-[10px]">
        <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">
          必須
        </div>
        <div class="text-[17px] leading-[25px] ml-[10px]">お問い合わせ内容</div>
      </label>
      <textarea
        id="message"
        class="mt-[5px] w-full h-[250px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300 resize-none overflow-y-auto overflow-x-hidden"
      ></textarea>
      <p id="messageError" class="text-red-600 text-[13px] mt-1 hidden"></p>
    </div>
  </div>
  <div></div>
</section>

<!-- ボタン -->
<button
  onclick="validateForm()"
  class="w-[300px] h-[50px] text-white text-[15px] leading-[25px] flex justify-center items-center bg-[#665B09] mx-auto mt-[60px] transition-opacity duration-500 hover:opacity-70"
>
  入力内容を確認する
</button>

<script>
  function validateForm() {
    let isValid = true;

    // 名前
    const name = document.getElementById("name").value.trim();
    const nameError = document.getElementById("nameError");
    if (name.length < 2) {
      nameError.textContent = "お名前を正しく入力してください。";
      nameError.classList.remove("hidden");
      isValid = false;
    } else {
      nameError.classList.add("hidden");
    }

    // 電話番号
    const phone = document.getElementById("phone").value.trim();
    const phoneError = document.getElementById("phoneError");
    const phoneRegex = /^0\d{1,4}-\d{1,4}-\d{3,4}$/;
    if (!phoneRegex.test(phone)) {
      phoneError.textContent = "電話番号の形式が正しくありません。例: 090-1234-5678";
      phoneError.classList.remove("hidden");
      isValid = false;
    } else {
      phoneError.classList.add("hidden");
    }

    // メール
    const email = document.getElementById("email").value.trim();
    const emailError = document.getElementById("emailError");
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!emailRegex.test(email)) {
      emailError.textContent = "有効なメールアドレスを入力してください。";
      emailError.classList.remove("hidden");
      isValid = false;
    } else {
      emailError.classList.add("hidden");
    }

    // メッセージ
    const message = document.getElementById("message").value.trim();
    const messageError = document.getElementById("messageError");
    if (message.length < 10) {
      messageError.textContent = "お問い合わせ内容を10文字以上で入力してください。";
      messageError.classList.remove("hidden");
      isValid = false;
    } else {
      messageError.classList.add("hidden");
    }

    if (isValid) {
      alert("✅ 入力内容に問題ありません。送信を続行できます。");
    }
  }
</script>

	<?php get_footer(); ?>