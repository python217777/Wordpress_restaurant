<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
?>
		<section<?php echo $id; ?> class="box mapbox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<div class="head">
					<?php if($data['title']): ?><h2 class="title"><?php if($img = get_img_tag('icon', $data)): ?><span class="icon"><?php echo $img; ?></span><?php endif; ?><?php echo $data['title']; ?></h2><?php endif; ?>
					<?php if($data['catch']): ?><p class="catch"><?php echo $data['catch']; ?></p><?php endif; ?>
				</div>
				<?php if($data['read']): ?><p class="read"><?php echo $data['read']; ?></p><?php endif; ?>
				<div class="mapframe"><?php echo $data['google_map']; ?></div>
				<?php if($data['address']): ?><p class="addr"><?php echo $data['address']; ?></p><?php endif; ?>
			</div>
		</section>
