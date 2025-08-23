<?php
/*
Template Name: FrontPage
*/
if (!defined('ABSPATH')) exit;
get_header();
?>

<!--title-->
<div class="text-[50px] md:text-[106px] leading-[35px] md:leading-[165px] flex justify-center my-[123px]">
    お問い合わせ
</div>

<div class="mb-[60px] border-b-[0.4px] border-smooth-gray w-[70vw] mx-auto"></div>

<div class="text-[15px] leading-[40px] text-center mx-auto w-[62vw]">
    以下のフォームの項目を入力し、よろしければ「送信する」ボタンをクリックしてください。
</div>

<div class="mt-[60px] border-b w-[70vw] mx-auto"></div>

<form id="contactForm" class="mx-[6vw] grid grid-cols-8 mt-[40px]">
    <input type="hidden" name="action" value="contact_form_submit">
    <div></div>
    <div class="col-span-6">
        <!-- Name -->
        <div class="mt-[40px]">
            <label class="flex mb-[10px]">
                <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">必須</div>
                <div class="text-[17px] leading-[25px] ml-[10px]">お名前</div>
            </label>
            <input
                id="name"
                name="name"
                type="text"
                placeholder="例）商工 太郎"
                class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
            />
            <p id="nameError" class="text-red-600 text-[13px] mt-1 hidden"></p>
        </div>

        <!-- Phone -->
        <div class="mt-[40px]">
            <label class="flex mb-[10px]">
                <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">必須</div>
                <div class="text-[17px] leading-[25px] ml-[10px]">電話番号</div>
            </label>
            <input
                id="phone"
                name="phone"
                type="text"
                placeholder="例）090-1234-5678"
                class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
            />
            <p id="phoneError" class="text-red-600 text-[13px] mt-1 hidden"></p>
        </div>

        <!-- Email -->
        <div class="mt-[40px]">
            <label class="flex mb-[10px]">
                <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">必須</div>
                <div class="text-[17px] leading-[25px] ml-[10px]">メールアドレス</div>
            </label>
            <input
                id="email"
                name="email"
                type="text"
                placeholder="例）example@gmail.com"
                class="placeholder-[#665B09]/50 mt-[5px] w-full h-[60px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300"
            />
            <p id="emailError" class="text-red-600 text-[13px] mt-1 hidden"></p>
        </div>

        <!-- Notice -->
        <div class="text-[12px] leading-[25px] flex mt-[15px]">
            ※
            <p class="ml-[10px]">
                メールアドレスの誤入力などにより、当クラブからご返信ができないケースや、ご返信できた場合でも迷惑メールフォルダに振り分けられているケースが発生しております。
                お送りいただく際や受信の際は、ご確認いただけますようお願いいたします。
            </p>
        </div>

        <!-- Message -->
        <div class="mt-[40px]">
            <label class="flex mb-[10px]">
                <div class="text-[10px] leading-[20px] p-[3px] text-[#DA1C1C] need-border">必須</div>
                <div class="text-[17px] leading-[25px] ml-[10px]">お問い合わせ内容</div>
            </label>
            <textarea
                id="message"
                name="message"
                class="mt-[5px] w-full h-[250px] text-[15px] py-[10px] px-[20px] border border-[#665B09]/50 focus:border-blue-500 focus:outline-none transition-colors duration-300 resize-none overflow-y-auto overflow-x-hidden"
            ></textarea>
            <p id="messageError" class="text-red-600 text-[13px] mt-1 hidden"></p>
        </div>
    </div>
    <div></div>

    <!-- Button centered -->
    <div class="col-span-8 flex justify-center mt-[60px]">
        <button
            type="submit"
            id="submitBtn"
            class="w-[300px] h-[50px] text-white text-[15px] leading-[25px] flex justify-center items-center bg-[#665B09] transition-opacity duration-500 hover:opacity-70 rounded-lg relative overflow-hidden"
        >
            送信する
        </button>
    </div>
</form>

<!-- Message display -->
<div id="formMessage" class="text-center text-[15px] my-[20px] text-red-500"></div>

<style>
/* Loader animation */
.loader {
  border: 3px solid #fff;
  border-top: 3px solid transparent;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  animation: spin 1s linear infinite;
}
@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
</style>

<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Stop page refresh

    let isValid = true;

    // Validation
    const name = document.getElementById("name").value.trim();
    const nameError = document.getElementById("nameError");
    if (name.length < 2) {
        nameError.textContent = "お名前を正しく入力してください。";
        nameError.classList.remove("hidden");
        isValid = false;
    } else nameError.classList.add("hidden");

    const phone = document.getElementById("phone").value.trim();
    const phoneError = document.getElementById("phoneError");
    const phoneRegex = /^0\d{1,4}-\d{1,4}-\d{3,4}$/;
    if (!phoneRegex.test(phone)) {
        phoneError.textContent = "電話番号の形式が正しくありません。例: 090-1234-5678";
        phoneError.classList.remove("hidden");
        isValid = false;
    } else phoneError.classList.add("hidden");

    const email = document.getElementById("email").value.trim();
    const emailError = document.getElementById("emailError");
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!emailRegex.test(email)) {
        emailError.textContent = "有効なメールアドレスを入力してください。";
        emailError.classList.remove("hidden");
        isValid = false;
    } else emailError.classList.add("hidden");

    const message = document.getElementById("message").value.trim();
    const messageError = document.getElementById("messageError");
    if (message.length < 10) {
        messageError.textContent = "お問い合わせ内容を10文字以上で入力してください。";
        messageError.classList.remove("hidden");
        isValid = false;
    } else messageError.classList.add("hidden");

    if (!isValid) return;

    // Button animation
    const btn = document.getElementById("submitBtn");
    btn.disabled = true;
    btn.innerHTML = '<div class="loader"></div>'; // show loader

    // AJAX send
    const formData = new FormData(e.target);
    fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        const msgDiv = document.getElementById("formMessage");
        if (data.success) {
            msgDiv.innerHTML = data.data.message;
            msgDiv.className = "text-green-600 text-[15px] my-[20px] text-center";
            e.target.reset();
        } else {
            msgDiv.innerHTML = data.data.errors.join("<br>");
            msgDiv.className = "text-red-600 text-[15px] my-[20px] text-center";
        }
    })
    .catch(() => {
        document.getElementById("formMessage").innerHTML = "❌ 通信エラーが発生しました。";
    })
    .finally(() => {
        btn.disabled = false;
        btn.innerHTML = "送信する"; // reset button
    });
});
</script>

<?php get_footer(); ?>
