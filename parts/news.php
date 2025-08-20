<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
	$posts   = get_posts("numberposts=5");
	if($posts):
?>
		<section<?php echo $id; ?> class="box newsbox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<div class="head">
					<?php if($data['title']): ?><h2 class="title"><?php if($img = get_img_tag('icon', $data)): ?><span class="icon"><?php echo $img; ?></span><?php endif; ?><?php echo $data['title']; ?></h2><?php endif; ?>
					<?php echo get_list_cat('category', 'catlist'); ?>
				</div>
				<?php if($data['read']): ?><p class="read"><?php echo $data['read']; ?></p><?php endif; ?>
				<ul class="list">
					<?php
						foreach($posts as $val):
							$cat   = wp_get_object_terms( $val->ID, 'category');
							$cat   = $cat[0];
							$title = mb_strimwidth($val->post_title, 0, 96, "…", "UTF-8");
							$color = get_field("color", "category_".$cat->term_id);
					?>
					<li><a href="<?php echo get_permalink($val->ID) ?>"><span class="cat" style="background: <?php echo $color; ?>;"><?php echo $cat->name; ?></span><span class="ptitle"><?php echo $title; ?></span><span class="date"><?php echo date('Y.m.d', strtotime($val->post_date)); ?></span></a></li>
					<?php endforeach; ?>
				</ul>
				<?php if($data['url'] && $data['name']): ?><p class="more"><a href="<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a></p><?php endif; ?>
			</div>
		</section>
<?php
	endif;
?>