<?php

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header('subpage');
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$blog_category_id = get_query_var('blog_category_id') ? get_query_var('blog_category_id') : "100";
?>
	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="<?php echo HOME; ?>">トップ</a></li>
				<li>お知らせ</li>
			</ol>
		</div>
	</section>
	<section class="pageindex works wow fadeInUp">
		<div class="container">
			<div class="section-title">
				<p class="sub">お知らせ</p>
				<h3 class="lead">News</h3>
				
			</div>
		</div>
	</section>
	<section class="p-archive wow fadeInUp">
		<div class="container">
			<div class="blog-card-category">
				<a href="<?php echo esc_url(home_url('/')); ?>blog" class="all <?php if($blog_category_id == 100): echo 'active'; endif; ?>"><span>すべて</span></a>
				<div class="category-btn-group">
					<?php
						$args = array(
							'post_type' => 'blog',
							'orderby' => 'post_date',
							'order'   => 'DESC',
							'taxonomy' => 'blog_category',
						);

						$cats = get_categories($args);
						foreach($cats as $cat):?>
						<?php $color = get_field('color', 'blog_category' . '_' . $cat->term_id); ?>
							<a href="<?php echo esc_url(home_url('/')); ?>blog?blog_category_id=<?php echo $cat->cat_ID; ?>" class="category-btn<?php if($blog_category_id == $cat->cat_ID): echo 'active'; endif; ?>"><span><?php echo $cat->name; ?></span></a>
						<?php
					endforeach;
					?>
				</div>
			</div>

			<?php
				$args = [
					'post_type' => 'blog',
					'post_status' => 'publish',
					'paged' => 1,
					'posts_per_page' => 9,
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
				<ul class="blog-card-list">
					<?php while ( $custom_query->have_posts() ) : $custom_query->the_post();
						$cat = get_the_terms(get_the_ID(), 'blog_category');
						$title = mb_strimwidth(strip_tags($post->post_title), 0, 90, "…", "UTF-8");
                        $text = mb_strimwidth(strip_tags($post->post_content), 0, 80, "…", "UTF-8");
						$color = get_field('color', 'blog_category' . '_' . $cat[0]->term_id);
					?>
						<li>
							<div class="news-item">
								<div class="wrap">
									<time class="date"><?php the_time("Y.m.d"); ?></time>
									<?php if( $cat ) : ?>
										<div class="label"><?php echo $cat[0]->name; ?></div>
									<?php endif; ?>
								</div>
								<h4 class="title">
									<a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
								</h4>
								<a href="<?php the_permalink(); ?>" class="arrow">&#8250;</a>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<div class="wp-pagination works">
				<?php if(function_exists('wp_pagenavi')) : ?>
					<?php wp_pagenavi(array('query' => $custom_query)); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template', 'parts/contacts'); ?>
	<?php
		add_action('wp_footer', 'custom_script_wp_footer', 1000, 8);
		function custom_script_wp_footer() {
		  ?>
		  <script>
			$(function() {
			  let pageCount = 2;
			  let maxPagination = false;

			  $(window).scroll(function(){
				if( !maxPagination && $('#more_posts').length ) {
				  if( $(window).scrollTop() == $(document).height() - $(window).height() ) {
					loadArticle( pageCount );
					pageCount++;
				  }
				}
			  });

			  $(document).on("click", "#more_posts", function(e) {
				e.preventDefault();
				if( !$(this).hasClass('done') ) {
				  loadArticle( pageCount );
				  pageCount++;
				}
			  });

			  function loadArticle( count ) {
				$('#more_posts').addClass('active');
				$.ajax({
				  url: themeAjaxUrl,
				  type: 'POST',
				  dataType: 'json',
				  data: {
					action: 'load_more_ajax',
					paged: count
				  },
				  success: function (res) {
					console.log('Ajax:', res.ajax);
					if(count >= res.max) {
					  $('#more_posts').css('display', 'none');
					  maxPagination = true;
					}
					$('.blog-card-list').append(res.html);
				  }
				});

			  };
			});
		  </script>
		  <?php
		}
	?>

<?php get_footer();?>
