<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

	    <div class="absolute w-full z-10 grid grid-cols-16">
        <div></div>
        <div class="col-span-14 text-center">
          <div
            class="text-center text-[15px] lg:text-[20px] leading-[80px] lg:leading-[100px]"
          >
            🌿
          </div>

          <div
            class="text-center text-[25px] sm:text-[40px] sm:leading-[60px] lg:text-[50px] lg:leading-[100px] leading-[50px] tracking-[20px] md:tracking-[30px] lg:tracking-[50px]"
          >
            WLECOME
          </div>

          <div
            class="text-center text-[42px] leading-[80px] sm:text-[80px] sm:leading-[106px] lg:text-[106px] lg:leading-[150px]"
          >
            森のビュッフェ<br />
            <p class="tracking-[40px] sm:tracking-[30px]">SUN</p>
          </div>
        </div>
        <div></div>
      </div>

      <!-- Hero Section -->

      <section class="lg:mt-[378px] relative mt-[204px] md:mt-[300px]">
        <div class="overflow-hidden flex justify-center">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/2.jpg"
            alt="heroIMG"
            class="w-[225px] h-[371px] min-[450px]:w-[380px] min-[450px]:h-[500px] lg:h-[580px] lg:w-[470px] object-cover rounded-t-full"
          />
        </div>
        <div
          class="absolute top-0 mt-[200px] lg:mt-[301px] z-10 w-full grid grid-cols-2 hidden md:grid"
        >
          <div class="lg:ml-[10vw] md:ml-[6vw] xl:ml-[16.8vw]">
            <div class="text-[18px] leading-[28px]">お知らせ</div>
            <div class="text-[15px] leading-[40px]" id="hero_notice">
              <div id="notice1">
                <div id="hero_title1">2025.9.10</div>
                <div id="hero_content1">新規料理サービス開始 ...</div>
              </div>
              <div id="notice2">
                <div id="hero_title2">2025.8.5</div>
                <div id="hero_content2">新規料理サービス開始 ...</div>
              </div>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>notice" class="text-[13px] leading-[25px]">
              <p class="nav-button h-[30px] w-[120px] flex items-center">
                もっと見る →
              </p>
            </a>
          </div>

          <div
            class="right-0 text-right lg:mr-[10vw] md:mr-[6vw] xl:mr-[16.8vw]"
          >
            <div class="text-[18px] leading-[28px]">営業時間</div>
            <div class="text-[15px] leading-[40px]">
              平日 11:00 – 14:30 <br />（L.O.14時）
            </div>
            <div class="text-[18px] leading-[28px] mt-[50px]">定休日</div>
            <div class="text-[15px] leading-[40px]">月曜定休</div>
          </div>
        </div>
        <div class="md:hidden w-[85vw] min-[375px]:w-[71.73vw] mx-auto">
          <div
            class="border-b w-[71.73vw] mx-auto my-[30px]"
          ></div>

          <div class="flex">
            <div class="text-[18px] leading-[28px]">お知らせ</div>
            <div class="ml-4">
              <div class="text-[15px] leading-[40px]" id="hero_notice">
                <div id="notice1">
                  <div id="hero_title1">2025.9.10</div>
                  <div id="hero_content1">新規料理サービス開始 ...</div>
                </div>
                <div id="notice2">
                  <div id="hero_title2">2025.8.5</div>
                  <div id="hero_content2">新規料理サービス開始 ...</div>
                </div>
              </div>
              <a href="<?php echo esc_url(home_url('/')); ?>notice" class="text-[13px] leading-[25px] mt-[8px]">
                もっと見る →
              </a>
            </div>
          </div>

          <div class="flex mt-[9px]">
            <div class="text-[18px] leading-[28px] mt-[10px]">営業時間</div>
            <div class="text-[15px] leading-[40px] ml-4">
              平日 11:00 – 14:30 <br />（L.O.14時）
            </div>
          </div>
          <div class="flex mt-[9px]">
            <div class="text-[18px] leading-[28px]">定休日</div>
            <div class="text-[15px] leading-[40px] ml-9">月曜定休</div>
          </div>
        </div>
      </section>

      <div class="my-[60px] border-b"></div>

      <section class="mx-[6vw] grid grid-cols-10">
        <div></div>
        <div class="col-span-8 text-[17px] leading-40px">
          森のビュッフェでは、すべての料理を店内で手作りし、薄味で身体にやさしい味付けを心がけています。野菜は丁寧に、お肉はたっぷり。どの世代にも満足いただける内容を、安心価格（大人1,500円）でご提供。ご家族やご友人と、くつろぎの時間をお楽しみください。TORETAでのご予約も可能です。
        </div>
        <div></div>
      </section>

      <div class="my-[60px] border-b"></div>
      <!-- Reservation Section -->
      <section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1">
        <div class="overflow-hidden responsible-boder-r">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/5.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto animate-scale"
          />
          <div
            class="responsible-boder-b max-[768px]:w-[71.73vw] mx-auto my-[30px] md:my-0"
          ></div>
        </div>

        <div
          class="max-md:w-[70vw] max-md:mx-auto md:mt-[130px] md:ml-[4.51vw] [@media(min-width:768px)_and_(max-width:1023px)]:mt-[80px]"
        >
          <div class="text-[15px] leading-[20px]">RESERVATION</div>
          <div
            class="md:text-[85px] text-[50px] leading-[90px] md:mt-[30px] mt-[20px]"
          >
            ご予約
          </div>
          <div class="text-[17px] leading-[25px] md:mt-[60px] mt-[40px]">
            24時間TORETAでご予約いただけます。
          </div>
          <div class="nav-button h-[47px] w-[120px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center">
            <a href="https://toreta.in">
              予約する →
            </a>
          </div>
        </div>
      </section>

      <div class="my-[60px] border-b"></div>

      <!-- Menu Section -->
      <section>
        <div class=" w-full relative">
          <a href="<?php echo esc_url(home_url('/')); ?>menu" class="flex justify-center items-center">
          <svg
            class="cursor-pointer w-[800px] h-[800px] max-2xl:w-[600px] max-2xl:h-[620px] max-lg:w-[400px] max-lg:h-[420px] max-[500px]:w-[280px] max-[500px]:h-[300px] group"
            viewBox="0 0 600 600"
            onclick="window.location.href='Component/Menu.html'"
          >
            
            <defs>
              <clipPath id="circleClip">
                <!-- Image circle radius = 250px -->
                <circle cx="300" cy="300" r="250" />
              </clipPath>
            </defs>

            
            <g clip-path="url(#circleClip)">
              <image
                href="<?php echo T_DIRE_URI; ?>/assets/TempImage/6.jpg"
                width="1000"
                height="800"
                class="object-cover transition-transform duration-700 ease-in-out group-hover:scale-125"
                transform-origin="300 300"
                x="-50"
                y="-40"
              />
            </g>

            
            <defs>
              <path
                id="circlePath"
                d="M 300, 300
                 m -260, 0
                 a 260,260 0 1,1 520,0
                 a 260,260 0 1,1 -520,0"
              />
            </defs>

            
            <g
              transform="rotate(170,280,280)"
              class="animate-spin-slow origin-center"
            >
              <text
                class="text-[35px] max-lg:text-[30px] max-[500px]:text-[25px]"
                fill="#665B09"
              >
                <textPath
                  href="#circlePath"
                  startOffset="0"
                  class="tracking-[1.25px] max-lg:tracking-[6.25px]"
                >
                  香ばしさに満ち、やわらかな味わいかな食く温と感しか懐かこ甘いしさやど、る残りに心がさわい。
                </textPath>
              </text>
            </g>
          </svg>
          <div
            class="absolute z-1 top-1/2 -translate-y-1/2 mt-[-1vw] text-center"
          >
            <div class="text-[30px]">MENU</div>
            <div class="text-[40px]">メニュー</div>
          </div>
          </a>
        </div>
        
      </section>

      <div class="my-[60px] border-b"></div>

      <!-- Store Information Section -->

      <section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1">
        <div class="md:hidden overflow-hidden">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/5.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto animate-scale"
          />
          <div
            class="responsible-boder-b max-[768px]:w-[71.73vw] mx-auto my-[30px] md:my-0"
          ></div>
        </div>
        <div
          class="max-md:w-[70vw] max-md:mx-auto md:ml-[4.51vw] responsible-boder-r"
        >
          <div
            class="md:mt-[130px] text-[15px] leading-[20px] [@media(min-width:768px)_and_(max-width:1023px)]:mt-[80px]"
          >
            ABOUT US
          </div>
          <div
            class="min-[880px]:text-[85px] md:text-[60px] text-[50px] leading-[95px] md:mt-[30px] mt-[20px]"
          >
            店舗情報
          </div>
          <div
            class="flex max-[400px]:text-[15px] mt-[9px] text-[17px] md:text-[15px] min-[810px]:text-[17px] leading-[40px]"
          >
            <p class="whitespace-nowrap tracking-tight">住所</p>
            <p class="ml-4">:</p>
            <p class="ml-2">
              〒880-0834
              <br />宮崎県宮崎市新別府町前浜
              <span>1401-224</span>
            </p>
          </div>
          <div
            class="flex max-[370px]:text-[15px] mt-[9px] text-[17px] leading-[40px]"
          >
            <div class="">座席数</div>
            <div class="">:</div>
            <div class="ml-2">約50席</div>
          </div>
          <div
            class="nav-button h-[47px] w-[132px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center"
          >
            <a href="<?php echo esc_url(home_url('/')); ?>infor">もっと見る →</a>
              
          </div>
        </div>
        <div class="max-md:hidden overflow-hidden">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/2.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto animate-scale"
          />
        </div>
      </section>

      <div class="my-[60px] border-b"></div>

      <!-- Inside Store Section -->
      <section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1">
        <div class="overflow-hidden responsible-boder-r">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/10.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto animate-scale"
          />
          <div
            class="responsible-boder-b max-[768px]:w-[71.73vw] mx-auto my-[30px] md:my-0"
          ></div>
        </div>

        <div
          class="max-md:w-[70vw] max-md:mx-auto md:mt-[130px] md:ml-[4.51vw] [@media(min-width:768px)_and_(max-width:1023px)]:mt-[80px]"
        >
          <div class="text-[15px] leading-[20px]">INSIDE</div>
          <div
            class="min-[880px]:text-[85px] md:text-[60px] text-[50px] leading-[95px] md:mt-[30px] mt-[20px]"
          >
            店内案内
          </div>
          <div class="text-[17px] leading-[25px] md:mt-[60px] mt-[40px]">
            白と木目が織り成す、自然のぬくもりに包まれた落ち着きの空間
          </div>
          <div
            class="nav-button h-[47px] w-[132px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>inside">もっと見る →</a>
          </div>
        </div>
      </section>

      <div class="my-[60px] border-b"></div>

      <!-- Contact Section -->
      <section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1">
        <div class="md:hidden overflow-hidden">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/11.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto animate-scale"
          />
          <div
            class="responsible-boder-b max-[768px]:w-[71.73vw] mx-auto my-[30px] md:my-0"
          ></div>
        </div>
        <div
          class="max-md:w-[70vw] max-md:mx-auto md:ml-[4.51vw] responsible-boder-r"
        >
          <div
            class="md:mt-[130px] text-[15px] leading-[20px] [@media(min-width:768px)_and_(max-width:1023px)]:mt-[80px]"
          >
            CONTACT
          </div>
          <div
            class="text-[55px] max-[450px]:text-[40px] leading-[65px] md:mt-[30px] mt-[20px] whitespace-nowrap tracking-tight"
          >
            お問い合わせ
          </div>  
          <div
            class="flex max-[400px]:text-[15px] mt-[9px] text-[17px] md:text-[15px] min-[810px]:text-[17px] leading-[40px]"
          >
            <p class="">電 話</p>
            <p class="ml-3">:</p>
            <p class="ml-2">0745-23-4567</p>
          </div>
          <div
            class="flex max-[370px]:text-[15px] mt-[9px] text-[17px] leading-[40px]"
          >
            <div class="">メール</div>

            <div class="">:</div>
            <div class="ml-2">example@test.com</div>
          </div>
          <button
            class="nav-button h-[47px] w-[130px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center whitespace-nowrap tracking-tight">
            <a href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ →</a>
          </button>
        </div>
        <div class="max-md:hidden overflow-hidden">
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/TempImage/11.jpg"
            alt="ReservatonImage"
            class="w-[298px] h-[470px] max-[400px]:w-[60vw] max-[400px]:h-[371px] object-cover rounded-t-full mx-auto animate-scale"
          />
        </div>
      </section>

	   
<?php get_footer(); ?>
