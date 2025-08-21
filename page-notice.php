<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
  get_header();
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$blog_category_id = get_query_var('blog_category_id') ? get_query_var('blog_category_id') : "100";
?>
  <!--title-->
    <div
      class="text-[50px] md:text-[106px] leading-[35px] md:leading-[165px] flex justify-center mt-[153px] my-[123px]"
    >
      お知らせ
    </div>

    <div class="w-[70vw] mx-auto" id="NoticeBoard">
      <div class="border-t w-full md:my-[50px] my-[40px]"></div>

      <?php
      // --- current page (works for /page/2/ and ?paged=2 and static front page) ---
      $current_page = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));

      // --- build query ---
      $args = [
        'post_type'      => 'blog',
        'post_status'    => 'publish',
        'paged'          => $current_page, // FIXED: use the real current page
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
        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post();
          $cat   = get_the_terms(get_the_ID(), 'blog_category');
          $title = mb_strimwidth(strip_tags(get_the_title()), 0, 90, '…', 'UTF-8');

          // Preserve line breaks / formatting like the editor (paragraphs, <br>)
          // Use raw post_content then run through the_content filters.
          $text  = apply_filters('the_content', get_post_field('post_content', get_the_ID()));
        ?>
          <div class="w-full grid grid-cols-7">
            <div class="text-[15px] leading-[40px] max-md:col-span-2 max-[425px]:col-span-3">
              <?php the_time('Y.m.d'); ?>
            </div>

            <div class="text-[13px] mt-[5px] max-md:col-span-2">
              <?php if ( ! is_wp_error($cat) && ! empty($cat) ) : ?>
                <div class="py-[4px] px-[4px] w-fit border-smooth-gray border-[0.4px]">
                  <?php echo esc_html($cat[0]->name); ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="hidden md:block md:col-span-5 text-[20px] leading-[40px]">
              <?php echo esc_html($title); ?>
              <div class="hidden md:block text-[15px] leading-[30px] mt-[20px]">
                <?php echo $text; // already filtered by the_content ?>
              </div>
            </div>
          </div>

          <div class="md:hidden text-[20px] leading-[40px] mt-[10px]">
            <?php echo esc_html($title); ?>
            <div class="md:hidden text-[15px] leading-[30px] mt-[20px]">
              <?php echo $text; ?>
            </div>
          </div>

          <div class="border-t w-full md:my-[50px] my-[40px]"></div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php
      // --- pagination numbers ---
      $max_pages = (int) $custom_query->max_num_pages;

      if ( $max_pages > 1 ) :
        // sliding window (width = 5)
        if ( $current_page <= 3 ) {
          $left_limit  = 1;
          $right_limit = min(5, $max_pages);
          $flag        = 1;
        } elseif ( $current_page < $max_pages - 2 ) {
          $left_limit  = max(1, $current_page - 2);
          $right_limit = min($current_page + 2, $max_pages);
          $flag        = 2;
        } else {
          $left_limit  = max(1, $max_pages - 4);
          $right_limit = $max_pages;
          $flag        = 3;
        }
      ?>

      <div class="flex justify-center mt-[70px]" id="PageButton">
        <!-- First: show only if not on page 1 -->
        <?php if ( $current_page > 1 ): ?>
          <a href="<?php echo esc_url( get_pagenum_link(1) ); ?>"
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&laquo;</a>
        <?php endif; ?>

        <!-- Prev -->
        <?php if ( $current_page > 1 ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($current_page - 1) ); ?>"
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&lsaquo;</a>
        <?php endif; ?>

        <!-- leading ellipsis -->
        <?php if ( $flag > 1 && $max_pages > 5 ): ?>
          <span class="w-[25px] h-[25px] flex justify-center items-center text-[10px] mx-[3px]">…</span>
        <?php endif; ?>

        <!-- Numbered pages -->
        <?php for ( $i = $left_limit; $i <= $right_limit; $i++ ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($i) ); ?>"
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px]
            <?php echo ( $i === (int)$current_page ) ? 'bg-[#665B09] text-white hover:bg-[#665B09]/80' : 'hover:bg-[#665B09]/20'; ?> transition-colors duration-300">
            <?php echo esc_html($i); ?>
          </a>
        <?php endfor; ?>

        <!-- trailing ellipsis -->
        <?php if ( $flag < 3 && $max_pages > 5 ): ?>
          <span class="w-[25px] h-[25px] flex justify-center items-center text-[10px] mx-[3px]">…</span>
        <?php endif; ?>

        <!-- Next -->
        <?php if ( $current_page < $max_pages ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($current_page + 1) ); ?>"
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&rsaquo;</a>
        <?php endif; ?>

        <!-- Last: show only if not on last page -->
        <?php if ( $current_page < $max_pages ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($max_pages) ); ?>"
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&raquo;</a>
        <?php endif; ?>
      </div>

      <?php endif; // $max_pages > 1 ?>
    </div>

	<?php get_footer(); ?>