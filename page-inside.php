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
        店内案内
      </div>

      <div
        class="mb-[60px] border-b w-[70vw] mx-auto"
      ></div>

      <section
        class="mt-[60px] mx-[25vw] overflow-hidden aspect-[17/15] my-auto"
      >
        <img
          src="<?php echo T_DIRE_URI; ?>/assets/TempImage/店内案内.png"
          alt="foodimage1"
          class="w-full h-full object-cover"
        />
      </section>

	<?php get_footer(); ?>