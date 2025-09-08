<?php
/*
Template Name: FrontPage
*/
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$blog_category_id = get_query_var('blog_category_id') ? get_query_var('blog_category_id') : "100";
?>

<!-- Include AOS (Animate On Scroll) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
    });
  });
</script>

<div class="absolute w-full z-10 grid grid-cols-16">
  <div></div>
  <div class="col-span-14 text-center" data-aos="fade-down">
    <div class="text-center text-[15px] lg:text-[20px] leading-[80px] lg:leading-[100px]">🌿</div>
    <div class="text-center text-[25px] sm:text-[40px] sm:leading-[60px] lg:text-[50px] lg:leading-[100px] leading-[50px] tracking-[20px] md:tracking-[30px] lg:tracking-[50px]">
      WLECOME
    </div>
    <div class="text-center text-[42px] leading-[80px] sm:text-[80px] sm:leading-[106px] lg:text-[106px] lg:leading-[150px]" data-aos="fade-up">
      森のビュッフェ<br />
      <p class="tracking-[40px] sm:tracking-[30px]">SUN</p>
    </div>
  </div>
  <div></div>
</div>

<section class="lg:mt-[378px] relative mt-[204px] md:mt-[300px]" data-aos="zoom-in">
  <div class="overflow-hidden flex justify-center">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/2.jpg"
      alt="heroIMG"
      class="w-[225px] h-[371px] min-[450px]:w-[380px] min-[450px]:h-[500px] lg:h-[580px] lg:w-[470px] object-cover rounded-t-full transform transition duration-700 hover:scale-105"
    />
  </div>

  <div class="absolute top-0 mt-[200px] lg:mt-[301px] z-10 w-full grid grid-cols-2 hidden md:grid" data-aos="fade-up">
    <div class="lg:ml-[10vw] md:ml-[6vw] xl:ml-[16.8vw]">
      <div class="text-[18px] leading-[28px]">お知らせ</div>
      <div class="text-[15px] leading-[40px]">
        <?php
          $current_page = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));
          $args = [
            'post_type'      => 'blog',
            'post_status'    => 'publish',
            'paged'          => $current_page,
            'posts_per_page' => 10,
            'orderby'        => 'post_date',
            'order'          => 'DESC',
          ];
          if ( ! empty( $blog_category_id ) && (int)$blog_category_id !== 100 ) {
            $args['tax_query'] = [[
              'taxonomy' => 'blog_category',
              'field'    => 'term_id',
              'terms'    => (int)$blog_category_id,
            ]];
          }
          $custom_query = new WP_Query($args);
        ?>
        <?php if ( $custom_query->have_posts() ) : ?>
          <?php $count = 0; ?>
          <?php while ( $custom_query->have_posts() ) : $custom_query->the_post();
            $count++;
            if($count >= 3)break;
            $title = mb_strimwidth(strip_tags(get_the_title()), 0, 10, '…', 'UTF-8');
          ?>
            <div><?php the_time('Y.m.d'); ?></div>
            <div><?php echo esc_html($title); ?></div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>notice" class="text-[13px] leading-[25px]">
        <p class="nav-button h-[30px] w-[120px] flex items-center transform transition duration-300 hover:scale-105">
          もっと見る →
        </p>
      </a>
    </div>

    <div class="right-0 text-right lg:mr-[10vw] md:mr-[6vw] xl:mr-[16.8vw]" data-aos="fade-left">
      <div class="text-[18px] leading-[28px]">営業時間</div>
      <div class="text-[15px] leading-[40px]">平日 11:00 – 14:30 <br />（L.O.14時）</div>
      <div class="text-[18px] leading-[28px] mt-[50px]">定休日</div>
      <div class="text-[15px] leading-[40px]">月曜定休</div>
    </div>
  </div>
</section>

<div class="my-[60px] border-b"></div>

<section class="mx-[6vw] grid grid-cols-10" data-aos="fade-up">
  <div></div>
  <div class="col-span-8 text-[17px] leading-40px">
    森のビュッフェ SUNでは、薄味で優しい味つけを心がけています。野菜料理は丁寧に店内で手作りし、お肉はたっぷりと使用。どの世代にも満足いただける内容を、安心価格（大人1,500円）でご提供。ご家族やご友人と、くつろぎの時間をお楽しみください。インターネットでのご予約も可能です。
  </div>
  <div></div>
</section>

<div class="my-[60px] border-b"></div>

<!-- Reservation Section -->
<section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1" data-aos="fade-right">
  <div class="overflow-hidden responsible-boder-r">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/ご予約.jpg"
      alt="ReservationImage"
      class="w-[298px] h-[470px] object-cover rounded-t-full mx-auto transform transition duration-700 hover:scale-105"
    />
    <div class="responsible-boder-b max-[768px]:w-[71.73vw] mx-auto my-[30px] md:my-0"></div>
  </div>
  <div class="max-md:w-[70vw] max-md:mx-auto md:mt-[130px] md:ml-[4.51vw]" data-aos="fade-left">
    <div class="text-[15px] leading-[20px]">RESERVATION</div>
    <div class="md:text-[85px] text-[50px] leading-[90px] md:mt-[30px] mt-[20px]">ご予約</div>
    <div class="text-[17px] leading-[25px] md:mt-[60px] mt-[40px]">24時間TORETAでご予約いただけます。</div>
    <div class="nav-button h-[47px] w-[120px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
      <a href="https://toreta.in">予約する →</a>
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
                href="<?php echo T_DIRE_URI; ?>/assets/TempImage/メニュー.jpg"
                
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
<section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1" data-aos="fade-up">
  <div class="md:hidden overflow-hidden">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店舗情報.jpg"
      alt="StoreImage"
      class="w-[298px] h-[470px] object-cover rounded-t-full mx-auto transform transition duration-700 hover:scale-105"
    />
  </div>
  <div class="max-md:w-[70vw] max-md:mx-auto md:ml-[4.51vw] responsible-boder-r">
    <div class="md:mt-[130px] text-[15px] leading-[20px]">ABOUT US</div>
    <div class="min-[880px]:text-[85px] md:text-[60px] text-[50px] leading-[95px] md:mt-[30px] mt-[20px]">店舗情報</div>
    <div class="flex mt-[9px] text-[17px] leading-[40px]">
      <p class="whitespace-nowrap tracking-tight">住所</p>
      <p class="ml-4">:</p>
      <p class="ml-2">〒880-0834 <br />宮崎県宮崎市新別府町前浜 <span>1401-224</span></p>
    </div>
    <div class="flex mt-[9px] text-[17px] leading-[40px]">
      <div>座席数</div>
      <div>:</div>
      <div class="ml-2">約50席</div>
    </div>
    <div class="nav-button h-[47px] w-[132px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
      <a href="<?php echo esc_url(home_url('/')); ?>infor">もっと見る →</a>
    </div>
  </div>
  <div class="max-md:hidden overflow-hidden">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店舗情報.jpg"
      alt="StoreImage"
      class="w-[298px] h-[470px] object-cover rounded-t-full mx-auto transform transition duration-700 hover:scale-105"
    />
  </div>
</section>

<div class="my-[60px] border-b"></div>

<!-- Inside Store Section -->
<section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1" data-aos="fade-up">
  <div class="overflow-hidden responsible-boder-r">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店内案内.png"
      alt="InsideStoreImage"
      class="w-[298px] h-[470px] object-cover rounded-t-full mx-auto transform transition duration-700 hover:scale-105"
    />
  </div>
  <div class="max-md:w-[70vw] max-md:mx-auto md:mt-[130px] md:ml-[4.51vw]">
    <div class="text-[15px] leading-[20px]">INSIDE</div>
    <div class="min-[880px]:text-[85px] md:text-[60px] text-[50px] leading-[95px] md:mt-[30px] mt-[20px]">店内案内</div>
    <div class="text-[17px] leading-[25px] md:mt-[60px] mt-[40px]">白と木目が織り成す、自然のぬくもりに包まれた落ち着きの空間</div>
    <div class="nav-button h-[47px] w-[132px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
      <a href="<?php echo esc_url(home_url('/')); ?>inside">もっと見る →</a>
    </div>
  </div>
</section>

<div class="my-[60px] border-b"></div>

<!-- Contact Section -->
<section class="mx-[6vw] grid md:grid-cols-2 grid-cols-1" data-aos="fade-up">
  <div class="md:hidden overflow-hidden">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/お問い合わせ.webp"
      alt="ContactImage"
      class="w-[298px] h-[470px] object-cover rounded-t-full mx-auto transform transition duration-700 hover:scale-105"
    />
  </div>
  <div class="max-md:w-[70vw] max-md:mx-auto md:ml-[4.51vw] responsible-boder-r">
    <div class="md:mt-[130px] text-[15px] leading-[20px]">CONTACT</div>
    <div class="text-[55px] leading-[65px] md:mt-[30px] mt-[20px] whitespace-nowrap tracking-tight">お問い合わせ</div>
    <div class="flex mt-[9px] text-[17px] leading-[40px]"><p>電 話</p><p class="ml-3">:</p><p class="ml-2">0745-23-4567</p></div>
    <div class="flex mt-[9px] text-[17px] leading-[40px]"><div>メール</div><div class="ml-3">:</div><div class="ml-2">example@test.com</div></div>
    <button class="nav-button h-[47px] w-[130px] text-[15px] leading-[25px] md:mt-[60px] mt-[40px] flex items-center whitespace-nowrap tracking-tight transform transition duration-300 hover:scale-105 hover:shadow-lg">
      <a href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ →</a>
    </button>
  </div>
  <div class="max-md:hidden overflow-hidden">
    <img
      src="<?php echo T_DIRE_URI; ?>/assets/TempImage/お問い合わせ.jpg"
      alt="ContactImage"
      class="w-[298px] h-[470px] object-cover rounded-t-full mx-auto transform transition duration-700 hover:scale-105"
    />
  </div>
</section>

<?php get_footer(); ?>
