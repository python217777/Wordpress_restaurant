<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
	if($data['editer']):
?>
		<section<?php echo $id; ?> class="box centerbox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<div class="entry clearfix">
					<?php echo $data['editer']; ?>
				</div>
			</div>
		</section>
<?php endif; ?>