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
          $args = [
            'post_type' => 'blog',
            'post_status' => 'publish',
            'paged' => 1,
            'posts_per_page' => 1,
            'orderby' => 'post_date',
            'order' => "DESC"
          ];

          if( !empty($blog_category_id) && ($blog_category_id != 100) ) {
            $args['tax_query'] = [[
              'taxonomy' => 'blog_category',
              'field' => 'term_id',
              'terms' => $blog_category_id
            ]];
          }
          $custom_query = new WP_Query( $args );
        ?>
        <?php if( $custom_query->have_posts() ) : ?>
					<?php while ( $custom_query->have_posts() ) : $custom_query->the_post();
						$cat = get_the_terms(get_the_ID(), 'blog_category');
						$title = mb_strimwidth(strip_tags($post->post_title), 0, 90, "…", "UTF-8");
            $text = mb_strimwidth(strip_tags($post->post_content), 0, 80, "…", "UTF-8");
						$color = get_field('color', 'blog_category' . '_' . $cat[0]->term_id);
					?>
          <div class="w-full grid grid-cols-7">
            <div
              class="text-[15px] leading-[40px] max-md:col-span-2 max-[425px]:col-span-3"
            >
              <?php the_time("Y.m.d"); ?>
            </div>
            <div class="text-[13px] mt-[5px] max-md:col-span-2">
              <?php if( $cat ) : ?>
                <div
                  class="py-[4px] px-[4px] w-fit border-smooth-gray border-[0.4px]"
                >
                  <?php echo $cat[0]->name; ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="hidden md:block md:col-span-5 text-[17px] leading-[40px]">
              <?php echo $title; ?>
              <div class="hidden md:block text-[15px] leading-[30px] mt-[5px]">
                <?php echo $text; ?>
              </div>
            </div>
            <div class="md:hidden text-[17px] leading-[40px] mt-[10px]">
              <?php echo $title; ?>
              <div class="hidden md:block text-[15px] leading-[30px] mt-[5px]">
                <?php echo $text; ?>
              </div>
            </div>
          </div>
          <div
          class="border-t w-full md:my-[50px] my-[40px]"
          >
          </div>
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        
       
        <?php
          $count_posts = wp_count_posts('blog');
          $total_posts = $count_posts->publish;
          echo '<div class="text-center my-5">全' . $total_posts . '件のお知らせ</div>';
          ?>
          <?php
          $total_posts   = $custom_query->found_posts;
          $max_pages     = $custom_query->max_num_pages;
          $current_page  = max(1, get_query_var('paged'));

          if ($max_pages > 1) :
          ?>
            <div class="flex justify-center mt-[70px]" id="PageButton">
              <!-- First -->
              <?php if ($current_page > 1): ?>
                <a href="<?php echo get_pagenum_link(1); ?>"
                  class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300">&lt;&lt;</a>
              <?php endif; ?>

              <!-- Prev -->
              <?php if ($current_page > 1): ?>
                <a href="<?php echo get_pagenum_link($current_page - 1); ?>"
                  class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300">&lt;</a>
              <?php endif; ?>

              <!-- Page Numbers -->
              <?php for ($i = 1; $i <= $max_pages; $i++): ?>
                <a href="<?php echo get_pagenum_link($i); ?>"
                  class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px]
                    <?php echo ($i == $current_page) ? 'bg-[#665B09] text-white hover:bg-[#665B09]/80' : 'hover:bg-[#665B09]/20'; ?> transition-colors duration-300">
                  <?php echo $i; ?>
                </a>
              <?php endfor; ?>

              <!-- Next -->
              <?php if ($current_page < $max_pages): ?>
                <a href="<?php echo get_pagenum_link($current_page + 1); ?>"
                  class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300">&gt;</a>
              <?php endif; ?>

              <!-- Last -->
              <?php if ($current_page < $max_pages): ?>
                <a href="<?php echo get_pagenum_link($max_pages); ?>"
                  class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300">&gt;&gt;</a>
              <?php endif; ?>
            </div>
        <?php endif; ?>



        <div class="flex justify-center mt-[70px]" id="PageButton">
          <button
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300"
          >
            &lt;&lt;
          </button>
          <button
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300"
          >
            &lt;
          </button>
          <button
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] bg-[#665B09] text-white hover:bg-[#665B09]/80 transition-colors duration-300"
          >
            1
          </button>
          <button
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300"
          >
            &gt;
          </button>
          <button
            class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[7px] hover:bg-[#665B09]/20 transition-colors duration-300"
          >
            &gt;&gt;
          </button>
        </div>
      </div>


	<?php get_footer(); ?>