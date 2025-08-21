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
            'posts_per_page' => 10,
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
            // $text = mb_strimwidth(strip_tags($post->post_content), 0, 80, "…", "UTF-8");
            // $text = $text = get_the_excerpt();
            $text = apply_filters('the_content', $post->post_content);

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
        $total_posts   = $custom_query->found_posts;
        $max_pages     = $custom_query->max_num_pages;
        $current_page  = max(1, get_query_var('paged'));
      ?>
        <div class="flex justify-center mt-[70px]" id="PageButton">
          <!-- First -->
          <?php if ($current_page >= 1): ?>
            <a href="<?php echo get_pagenum_link(1); ?>"
              class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&lt;&lt;</a>
          <?php endif; ?>

          <!-- Prev -->
          <?php if ($current_page > 1): ?>
            <a href="<?php echo get_pagenum_link($current_page - 1); ?>"
              class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&lt;</a>
          <?php endif; ?>
          <?php
            if ($current_page <= 3){
              $left_limit = 1; $right_limit=min(5,$max_pages);
              $flag=1;
            }
            else if($current_page < $max_pages-2){
              $left_limit = max(1,$current_page-2);
              $right_limit=min($current_page+2,$max_pages);
              $flag=2;
            }
            else{
              $left_limit = max(1,$max_pages-4);
              $right_limit=$max_pages;
              $flag=3;
            }
          ?>
          
          <?php if($flag > 1 && $max_pages > 5):?>
            <p class="w-[25px] h-[25px] flex justify-center items-center text-[10px] mx-[3px]">
              ...    
            </p>
          <?php endif; ?>

          <?php for ($i = $left_limit; $i <=  $right_limit; $i++): ?>
            <a href="<?php echo get_pagenum_link($i); ?>"
              class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px]
                <?php echo ($i == $current_page) ? 'bg-[#665B09] text-white hover:bg-[#665B09]/80' : 'hover:bg-[#665B09]/20'; ?> transition-colors duration-300">
              <?php echo $i; ?>
            </a>
          <?php endfor; ?>

          <?php if($flag < 3 && $max_pages > 5):?>
            <p class="w-[25px] h-[25px] flex justify-center items-center text-[10px] mx-[3px]">
              ...    
            </p>
          <?php endif; ?>

          <!-- Next -->
          <?php if ($current_page < $max_pages): ?>
            <a href="<?php echo get_pagenum_link($current_page + 1); ?>"
              class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&gt;</a>
          <?php endif; ?>

          <!-- Last -->
          <?php if ($current_page <= $max_pages): ?>
            <a href="<?php echo get_pagenum_link($max_pages); ?>"
              class="w-[25px] h-[25px] border-[0.4px] border-[#665B09] flex justify-center items-center text-[10px] mx-[3px] hover:bg-[#665B09]/20 transition-colors duration-300">&gt;&gt;</a>
          <?php endif; ?>
        </div>
      
    </div>
	<?php get_footer(); ?>