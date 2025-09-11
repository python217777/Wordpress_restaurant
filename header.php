<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/assets/logo-small.png" sizes="32x32" />
    <title>森のビュッフェ SUN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              Mincho: ["DFHSMincho-W5", "Ms mincho"],
            },
            colors: {
              "forest-green": "#4A7C59",
              "warm-gold": "#D4AF37",
              "soft-gray": "#6B7280",
              "light-gray": "#E5E7EB",
              "dark-brown": "#5D4037",
              "smooth-gray": "#969494",
              "nature-color": "#665B09",
            },
            gridTemplateColumns: {
              20: "repeat(20, minmax(0, 1fr))",
            },
          },
        },
      };
    </script>
    <style>
      @keyframes spin-slow {
        0% {
          transform: rotate(170deg);
        }
        100% {
          transform: rotate(530deg);
        }
      }
      .animate-spin-slow {
        animation: spin-slow 40s linear infinite;
      }

      @keyframes scalePulse {
        0%,
        100% {
          transform: scale(1);
        }
        50% {
          transform: scale(1.1);
        }
      }
      .animate-scale {
        animation: scalePulse 3s infinite ease-in-out;
      }
      /* Navigation button hover effects */
      .nav-button {
        transition: all 0.3s ease;
        cursor: pointer;

        border: transparent;
        background: transparent;
        padding: 8px 16px;
        border-radius: 4px;
      }

      .nav-button:hover {
        border: 1px solid #665b09;
      }

      .footer-button {
        transition: all 0.3s ease;
        cursor: pointer;
        border: transparent;
        padding: 4px 8px;
        border-radius: 4px;
        text-align: left;
        width: 100%;
      }

      

      .border-b {
        border-bottom: 0.4px solid #969494
      }
      .border-l {
        border-left: 0.4px solid #969494
      }
      .border-r {
        border-right: 1px solid #969494
      }
      .border-t {
        border-top: 0.4px solid #969494
      }

      @media (min-width: 768px){
        .responsible-boder-r{
          border-right: 0.4px solid #969494
        }
        
      }
      @media (max-width: 768px){
        
        .responsible-boder-b{
          border-bottom: 0.4px solid #969494
        }
      }
      .aspect43{
        aspect-ratio: 4/3;
      }
      .need-border{
        border: 0.5px solid #DA1C1C

      }
      body {
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
      }

@keyframes fadeIn {
  from { opacity: 0; }
  to   { opacity: 1; }
}

    </style>
    <?php wp_head(); ?>
    
  </head>
  <body class="bg-[#f1f1f1] text-nature-color font-Mincho">

      <div class="absolute z-51 top-0 h-full sticky ">
        <div
          class="hidden md:block absolute z-51 ml-[6vw] h-screen border-r"
        ></div>
        <div
          class="hidden md:block right-0 absolute z-51 mr-[6vw] h-screen border-l"
        ></div>
      </div>
      <!-- Main Navigation -->
      <nav
        id="navbar1"
        class="max-md:hidden md:block bg-[#f1f1f1] border-b sticky top-0 z-50 transition-opacity duration-500 bg-[#f1f1f1]"
      >
      
        <div>
          <div
            class="hidden md:block absolute z-51 ml-[6vw] top-0 h-full border-r"
          ></div>
          <div
            class="hidden md:block right-0 absolute z-51 mr-[6vw] top-0 h-full border-l"
          ></div>
          <div
            class="md:hidden absolute h-full z-51 ml-[25vw] border-r"
          ></div>
          <div
            class="md:hidden absolute right-0 h-full z-51 mr-[25vw] border-r"
          ></div>
        </div>

        <div
          class="ml-[7vw] grid grid-cols-8 mr-[7vw] py-[22px] text-[12px] leading-[20px] lg:text-[16px]"
        >
        
        <a href="<?php echo esc_url(home_url('/')); ?>notice" class="flex justify-center items-center">
            <p class="m-[3px] whitespace-nowrap tracking-tight nav-button w-fit">
              お知らせ
            </p>
        </a>
        
        <a href="https://toreta.in" target="_blank" class="flex justify-center items-center">
            <p class="m-[3px] whitespace-nowrap tracking-tight nav-button w-fit">
              ご予約
            </p>
        </a>
        
        <a href="<?php echo esc_url(home_url('/')); ?>menu" class="flex justify-center items-center">
            <p class="m-[3px] whitespace-nowrap tracking-tight nav-button w-fit">
              メニュー
            </p>
        </a>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex justify-center items-center col-span-2 hover: cursor-pointer">
          <!-- <p class="text-[20px] leading-[30px] text-center lg:text-[26px] lg:leading-[36px]">
            森のビュッフェ <br />
            <span class="tracking-[20px]">SUN</span>
          </p> -->
          <img src="<?php echo T_DIRE_URI; ?>/assets/logo.png" alt="logo" class="w-1/4" />
        </a>
        
        <a href="<?php echo esc_url(home_url('/')); ?>infor" class="flex justify-center items-center">
            <p class="m-[3px] whitespace-nowrap tracking-tight nav-button w-fit">
              店舗情報
            </p>
        </a>

        <a href="<?php echo esc_url(home_url('/')); ?>inside" class="flex justify-center items-center">
            <p class="m-[3px] whitespace-nowrap tracking-tight nav-button w-fit">
              店内案内
            </p>
        </a>

        <a href="<?php echo esc_url(home_url('/')); ?>contact" class="flex justify-center items-center">
            <p class="m-[3px] whitespace-nowrap tracking-tight nav-button w-fit">
              お問い合わせ
            </p>
        </a>
        </div>
      </nav>
      <nav
        class="md:hidden bg-[#f1f1f1] border-b sticky top-0 z-50 grid grid-cols-4 relative transition-opacity duration-500"
        id="navbar2"
      >
        <!-- Left -->
        <div
          class="flex items-center justify-center border-r"
        >
          <a href="https://toreta.in" target="_blank" class="nav-button text-[12px]">
            <p class="p-[3px] flex justify-center items-center">
              ご予約
            </p>
          </a>
        </div>

        <!-- Center -->
        <div
          class="flex justify-center items-center col-span-2 py-[15px] cursor-pointer"
        >
          <a href="<?php echo esc_url(home_url('/')); ?>" class="text-[12px] leading-[20px] text-center">
            森のビュッフェ <br />
            <span class="tracking-[9px]">SUN</span>
          </a>
        </div>

        <!-- Right Hamburger -->
        <div
          class="flex justify-center items-center border-l border-smooth-gray"
        >
          <button
            id="menu-btn"
            class="relative w-20 h-12 flex flex-col justify-center items-center group"
          >
            <span
              class="block w-[44px] h-[1px] bg-gray-800 mb-[4px] transition-transform duration-300 origin-center group-[.open]:rotate-45 group-[.open]:translate-y-[3.2px] group-[.open]:skew-x-5"
            ></span>

            <span
              class="block w-[44px] h-[1px] bg-gray-800 transition-transform duration-300 origin-center group-[.open]:-rotate-45 group-[.open]:-translate-y-[3.2px] group-[.open]:-skew-x-5"
            ></span>
          </button>
        </div>

        <!-- Dropdown -->
        <div
          id="dropdown"
          class="hidden absolute right-0 text-[15px] mt-[71px] z-50 w-1/2 bg-gray-200 overflow-hidden max-h-0 transition-all duration-500 ease-in-out"
        >
          <div
            class="p-[3px] flex justify-center items-center h-[50px] mt-[10px]"
          >
            <a href="<?php echo esc_url(home_url('/')); ?>notice" class="nav-button">
                お知らせ
            </a>
          </div>
          <div
            class="p-[3px] flex justify-center items-center h-[50px] mt-[10px]"
          >
            <a href="<?php echo esc_url(home_url('/')); ?>menu" class="nav-button flex justify-center items-center">
              メニュー
            </a>
          </div>
          <div
            class="p-[3px] flex justify-center items-center h-[50px] mt-[10px]"
          >
            <a href="<?php echo esc_url(home_url('/')); ?>infor" class="nav-button flex justify-center items-center">
              店舗情報
            </a>
          </div>
          <div
            class="p-[3px] flex justify-center items-center h-[50px] mt-[10px]"
          >
            <a href="<?php echo esc_url(home_url('/')); ?>inside" class="nav-button flex justify-center items-center">
              店内案内
            </a>
          </div>
          <div
            class="p-[3px] flex justify-center items-center h-[50px] my-[10px]"
          >
            <a href="<?php echo esc_url(home_url('/')); ?>contact" class="nav-button flex justify-center items-center">
              お問い合わせ
            </a>
          </div>
        </div>
      </nav>
