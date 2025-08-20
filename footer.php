      <div class="my-[60px] border-b w-full"></div>

      <!-- Footer -->
      <footer class="mx-[6vw] grid md:grid-cols-3 grid-cols-1">
        <div class="responsible-boder-r">
          <img src="<?php echo T_DIRE_URI; ?>/assets/logo.png" alt="Logo" class="w-full h-[265px]" />

          <div class="grid grid-cols-8 mt-[60px]">
            <div class="col-span-2"></div>
            <div
              class="flex justify-center cursor-pointer hover:scale-125 duration-300"
            >
              <a href="https://x.com/yourhandle" target="_blank" aria-label="X">
                <img src="<?php echo T_DIRE_URI; ?>/assets/canvas/SNS/X.png" alt="facebook">

              </a>
            </div>
            <div
              class="flex justify-center cursor-pointer hover:scale-125 duration-300"
            >
              <a
                href="https://facebook.com"
                target="_blank"
                aria-label="instagram"
              >
              <img src="<?php echo T_DIRE_URI; ?>/assets/canvas/SNS/Instagram.png" alt="instagram">
              </a>
            </div>
            <div
              class="flex justify-center cursor-pointer hover:scale-125 duration-300"
            >
              <a
                href="https://facebook.com"
                target="_blank"
                aria-label="YouTube"
              >
                <img src="<?php echo T_DIRE_URI; ?>/assets/canvas/SNS/Youtube.png" alt="Youtube">
              </a>
            </div>
            <div
              class="flex justify-center cursor-pointer hover:scale-125 duration-300"
            >
              <a
                href="https://facebook.com"
                target="_blank"
                aria-label="facebook"
              >
                <img src="<?php echo T_DIRE_URI; ?>/assets/canvas/SNS/Facebook.png" alt="Facebook">
              </a>
            </div>
            <div class="col-span-2"></div>
          </div>
          <div
            class="border-b md:hidden my-[30px]"
          ></div>
        </div>

        <div class="grid grid-cols-8 responsible-boder-r">
          <div></div>
          <div class="col-span-7 text-[15px] leading-[40px] md:mt-[50px]">
            <p class="text-[17px] leading-[30px]">森のビュッフェSUN</p>
            <div class="ml-[1.5vw] mt-[20px]">
              <div class="flex">
                <p>住所</p>
                <p class="ml-[9px]">:</p>
                <p class="ml-[10px]">
                  〒880-0834<br />
                  宮崎県宮崎市<span
                    class="leading-[0px] text-[0px] min-[375px]:hidden md:block min-[1120px]:hidden"
                    ><br /></span
                  >新別府町前浜<br />
                  1401-224
                </p>
              </div>
              <div class="flex">
                <p>電話</p>
                <p class="ml-[9px]">:</p>
                <p class="ml-[10px]">0745-23-4567</p>
              </div>
              <div class="flex">
                <p>メール</p>
                <p class="">:</p>
                <p class="ml-[5px]">example@test.com</p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="border-b md:hidden my-[30px]"
        ></div>
        <div class="grid grid-cols-8">
          <div></div>
          <div class="col-span-7 text-[15px] leading-[40px] md:mt-[50px]">
            <p class="text-[17px] leading-[30px]">トップページ</p>
            <div class="ml-[1.5vw] mt-[20px]">
            <div>
              <a href="<?php echo esc_url(home_url('/')); ?>notice" class="footer-button">
                  お知らせ
              </a>
            </div>
            <div>
              <a href="https://toreta.in" class="footer-button">
                ご予約
              </a>
            </div> 
            <div> 
              <a href="<?php echo esc_url(home_url('/')); ?>menu" class="footer-button">
                メニュー
              </a>
            </div> 
            <div> 
              <a href="<?php echo esc_url(home_url('/')); ?>infor" class="footer-button">
                店舗情報
              </a>
            </div> 
            <div> 
              <a href="<?php echo esc_url(home_url('/')); ?>inside" class="footer-button">
                店内案内
              </a>
            </div> 
            <div> 
              <a href="<?php echo esc_url(home_url('/')); ?>contact" class="footer-button">
                お問い合わせ
              </a>
            </div> 
            </div>
          </div>
        </div>
      </footer>
      <div class="border-b w-full my-[60px]"></div>
      <div class="mt-[20px] relative w-full justify-center flex">
        <img src="<?php echo T_DIRE_URI; ?>/assets/lift.png" alt="lift" class="absolute bottom-0" />
      </div>
      <section class="flex justify-center mb-[60px] text-[15px] leading-[25px]">
        2025森のビュッフェSUN.all rights reserved.
      </section>

      <!-- Scroll to Top Button -->
      <button
        id="scrollToTop"
        class="fixed bottom-8 right-5 text-white p-3 rounded-full opacity-0 transition-opacity duration-300 hover:bg-gray-300"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="40"
          height="40"
          viewBox="-40 0 180 100"
        >
          <polyline
            points="-40,100 50,0 140,100"
            fill="none"
            stroke="#666633"
            stroke-width="4"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
    
    <script src="<?php echo T_DIRE_URI; ?>/assets/js/script.js">
      
    </script>
    <?php wp_footer(); ?>
  </body>
  
</html>
