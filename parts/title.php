<?php
	$base_color   = get_base_data('base_color');
	$button_color = get_base_data('button_color');
	if(is_page()) {
		$eyecath = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		$title   = $post->post_title;
	} elseif(top_slug() == "news") {
		$post    = get_post(8);
		$eyecath = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		$title   = $post->post_title;
	} elseif(top_slug() == "products") {
		$eyecath = get_base_data('product_img');
		$title   = get_base_data('product_name');
	}
?>
		<section id="pageTitle"<?php if($eyecath): ?> class="imgTitle"<?php endif; ?> style="background-color: <?php echo $base_color; ?>; color: <?php echo $button_color; ?>;<?php if($eyecath): ?> background-image: url(<?php echo $eyecath; ?>);<?php endif; ?>">
			<div class="wrap">
				<h1><?php echo $title; ?></h1>
			</div>
		</section>