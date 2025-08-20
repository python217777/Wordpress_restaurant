<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header('subpage');
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$blog_category_id = get_query_var('blog_category_id') ? get_query_var('blog_category_id') : "100";
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
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
	<section class="p-single">
		<div class="container">
			<div class="single-meta wow fadeInUp">
				<div class="wrap">
					<time class="date"><?php the_time("Y.m.d"); ?></time>
					<h3 class="title"><?php the_title(); ?></h3>
					<?php $blog_cats = get_the_terms(get_the_ID(), 'blog_category');
						$color = get_field('color', 'blog_category' . '_' . $blog_cats[0]->term_id);
					?>
					<?php if( $blog_cats ) : ?>
						<div class="label"><?php echo $blog_cats[0]->name; ?></div>
					<?php endif; ?>
				</div>
			</div>
			<?php $thumbs = get_field('thumbs'); ?>
			<?php if( $thumbs ) : ?>
				<div class="single-swiper">
					<div class="swiper swiper-main wow fadeInUp">
						<div class="swiper-wrapper">
							<?php foreach ($thumbs as $thumb) : ?>
								<div class="swiper-slide">
									<figure class="thumb">
										<img src="<?php echo esc_url($thumb['sizes']['medium']); ?>" alt="<?php echo esc_html($thumb['title']); ?>">
									</figure>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="swiper swiper-thumbs wow fadeInUp">
						<div class="swiper-wrapper">
							<?php foreach ($thumbs as $thumb) : ?>
								<div class="swiper-slide">
									<figure class="thumb">
										<img src="<?php echo esc_url($thumb['sizes']['thumb']); ?>" alt="<?php echo esc_html($thumb['title']); ?>">
									</figure>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="single-content wow fadeInUp"><?php the_content(); ?></div>
			<div class="single-control wow fadeInUp">
				<a href="<?php echo HOME . 'blog/' ?>" class="link-btn btn-main">
					<span>BACK</span><span class="arrow"> &#8250;</span>
				</a>
			</div>
		</div>
	</section>
	<section id="p-related-article" class="p-related-article wow fadeInUp">
		<div class="container">
			<h3 class="related-ttl">
				その他の記事
			</h3>
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
		</div>
	</section>

	<?php get_template_part('template', 'parts/contacts'); ?>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
