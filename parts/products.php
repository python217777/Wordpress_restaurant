<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
	$dummy   = get_base_data('dummy');
	$posts   = get_posts("numberposts=3&post_type=products");
	if($posts):
?>
		<section<?php echo $id; ?> class="box productsbox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<div class="head">
					<?php if($data['title']): ?><h2 class="title"><?php if($img = get_img_tag('icon', $data)): ?><span class="icon"><?php echo $img; ?></span><?php endif; ?><?php echo $data['title']; ?></h2><?php endif; ?>
					<?php if($data['catch']): ?><p class="catch"><?php echo $data['catch']; ?></p><?php endif; ?>
				</div>
				<?php if($data['read']): ?><p class="read"><?php echo $data['read']; ?></p><?php endif; ?>
				<div class="items clearfix">
					<?php
						foreach($posts as $val):
							$title = mb_strimwidth($val->post_title, 0, 122, "…", "UTF-8");
							$eyecath = wp_get_attachment_url(get_post_thumbnail_id($val->ID));
							if(!$eyecath) $eyecath = $dummy;
					?>
					<div class="item linkbox">
						<figure>
							<a href="<?php echo get_permalink($val->ID) ?>"><img src="/lib/script/tim/thumb.php?w=600&h=510&src=<?php echo $eyecath; ?>" alt=""></a>
						</figure>
						<p class="name"><a href="<?php echo get_permalink($val->ID) ?>"><?php echo $title; ?></a></p>
					</div>
					<?php endforeach; ?>
				</div>
				<?php if($data['url'] && $data['name']): ?><p class="more"><a href="<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a></p><?php endif; ?>
			</div>
		</section>
<?php
	endif;
?>