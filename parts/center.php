<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
?>
		<section<?php echo $id; ?> class="box centerbox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap clearfix">
				<div class="textbox">
					<?php if($data['title']): ?><h2 class="title"><?php echo $data['title']; ?></h2><?php endif; ?>
					<?php if(get_img_tag('img', $data) && $data['position'] != "bottom"): ?><figure class="<?php echo $data['position']; ?>"><?php echo get_img_tag('img', $data); ?></figure><?php endif; ?>
					<?php if($data['text']): ?><p class="text"><?php echo $data['text']; ?></p><?php endif; ?>
					<?php if(get_img_tag('img', $data) && $data['position'] == "bottom"): ?><figure class="<?php echo $data['position']; ?>"><?php echo get_img_tag('img', $data); ?></figure><?php endif; ?>
				</div>
				<?php if($data['url'] && $data['name']): ?><p class="more"><a href="<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a></p><?php endif; ?>
			</div>
		</section>