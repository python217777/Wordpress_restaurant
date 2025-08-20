<?php
	$id = ($data['id']) ? ' id="'.$data['id'].'"': '';
	if($data['short_code']):
?>
		<section<?php echo $id; ?> class="box contactbox">
			<div class="wrap">
				<?php if($data['read']): ?><p class="read"><?php echo $data['read']; ?></p><?php endif; ?>
				<?php echo do_shortcode($data['short_code']); ?>
			</div>
		</section>
<?php endif; ?>