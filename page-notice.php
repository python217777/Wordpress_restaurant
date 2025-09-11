<?php
	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
  get_header();
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$blog_category_id = get_query_var('blog_category_id') ? get_query_var('blog_category_id') : "100";
?>
  <!-- タイトル部分 -->
    <div
      class="text-[50px] md:text-[106px] leading-[35px] md:leading-[165px] flex justify-center mt-[153px] my-[123px]"
    >
      お知らせ
    </div>

    <div class="w-[70vw] mx-auto" id="NoticeBoard">
      <div class="border-t w-full md:my-[50px] my-[40px]"></div>

      <?php
      // --- 現在のページ番号を取得 ---
      $current_page = max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page'));

      // --- クエリを構築 ---
      $args = [
        'post_type'      => 'blog',
        'post_status'    => 'publish',
        'paged'          => $current_page, // 実際のページ番号を使用
        'posts_per_page' => 5,
        'orderby'        => 'post_date',
        'order'          => 'DESC',
      ];

      // --- カテゴリー指定がある場合のみ絞り込み ---
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

          // --- 投稿本文（フィルター適用済み） ---
          $text  = apply_filters('the_content', get_post_field('post_content', get_the_ID()));
        ?>
          <!-- 各お知らせカード（アニメーション付） -->
          <div class="w-full grid grid-cols-7 transform transition duration-500 hover:scale-[1.02] hover:bg-gray-50 p-2 rounded-xl">
            <div class="text-[15px] leading-[40px] max-md:col-span-2 max-[425px]:col-span-3">
              <?php the_time('Y.m.d'); ?>
            </div>

            <div class="text-[13px] mt-[5px] max-md:col-span-2">
              <?php if ( ! is_wp_error($cat) && ! empty($cat) ) : ?>
                <div class="py-[4px] px-[4px] w-fit border-smooth-gray border-[0.4px] rounded-md bg-white hover:bg-gray-100 transition">
                  <?php echo esc_html($cat[0]->name); ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="hidden md:block md:col-span-5 text-[20px] leading-[40px]">
              <?php echo esc_html($title); ?>
              <div class="hidden md:block text-[15px] leading-[30px] mt-[20px]">
                <?php echo $text; ?>
              </div>
            </div>
          </div>

          <!-- スマホ用 -->
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
      // --- ページネーション処理 ---
      $max_pages = (int) $custom_query->max_num_pages;

      if ( $max_pages >= 1 ) :
        // スライド式ページ範囲（最大5つ）
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

      <!-- ページネーション部分（アニメーション付） -->
      <div class="flex justify-center mt-[70px] space-x-[5px]" id="PageButton">
        <!-- 最初のページへ -->
        <?php if ( $current_page >= 1 ): ?>
          <a href="<?php echo esc_url( get_pagenum_link(1) ); ?>"
            class="w-[30px] h-[30px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[12px] rounded-md mx-[2px] hover:bg-[#665B09]/20 hover:scale-110 transform transition duration-300">&laquo;</a>
        <?php endif; ?>

        <!-- 前へ -->
        <?php if ( $current_page > 1 ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($current_page - 1) ); ?>"
            class="w-[30px] h-[30px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[12px] rounded-md mx-[2px] hover:bg-[#665B09]/20 hover:scale-110 transform transition duration-300">&lsaquo;</a>
        <?php endif; ?>

        <!-- 省略記号 -->
        <?php if ( $flag > 1 && $max_pages > 5 ): ?>
          <span class="w-[30px] h-[30px] flex justify-center items-center text-[12px] mx-[2px]">…</span>
        <?php endif; ?>

        <!-- ページ番号 -->
        <?php for ( $i = $left_limit; $i <= $right_limit; $i++ ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($i) ); ?>"
            class="w-[30px] h-[30px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[12px] mx-[2px] rounded-md transform transition duration-300 hover:scale-110
            <?php echo ( $i === (int)$current_page ) ? 'bg-[#665B09] text-white hover:bg-[#665B09]/80' : 'hover:bg-[#665B09]/20'; ?>">
            <?php echo esc_html($i); ?>
          </a>
        <?php endfor; ?>

        <!-- 省略記号 -->
        <?php if ( $flag < 3 && $max_pages > 5 ): ?>
          <span class="w-[30px] h-[30px] flex justify-center items-center text-[12px] mx-[2px]">…</span>
        <?php endif; ?>

        <!-- 次へ -->
        <?php if ( $current_page < $max_pages ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($current_page + 1) ); ?>"
            class="w-[30px] h-[30px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[12px] rounded-md mx-[2px] hover:bg-[#665B09]/20 hover:scale-110 transform transition duration-300">&rsaquo;</a>
        <?php endif; ?>

        <!-- 最後のページへ -->
        <?php if ( $current_page <= $max_pages ): ?>
          <a href="<?php echo esc_url( get_pagenum_link($max_pages) ); ?>"
            class="w-[30px] h-[30px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[12px] rounded-md mx-[2px] hover:bg-[#665B09]/20 hover:scale-110 transform transition duration-300">&raquo;</a>
        <?php endif; ?>
      </div>

      <?php endif; // $max_pages > 1 ?>
    </div>

	<?php get_footer(); ?>
