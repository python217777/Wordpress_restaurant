<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
?>
		<section<?php echo $id; ?> class="box templatebox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<?php if($data['title']): ?><h2 class="title"><?php if($img = get_img_tag('icon', $data)): ?><span class="icon"><?php echo $img; ?></span><?php endif; ?><?php echo $data['title']; ?></h2><?php endif; ?>
				<?php
					if($data['block'] && count($data['block']) > 0):
						foreach($data['block'] as $items):
				?>
					<?php if($items['label']): ?><h3><?php echo $items['label']; ?></h3><?php endif; ?>
					<?php
						if($items['contents'] && count($items['contents']) > 0):
							foreach($items['contents'] as $item):
					?>
					<div class="textbox clearfix">
						<?php if(get_img_tag('img', $item) && $item['position'] != "bottom"): ?><figure class="<?php echo $item['position']; ?>"><?php echo get_img_tag('img', $item); ?></figure><?php endif; ?>
						<?php if($item['handle']): ?><h4><?php echo $item['handle']; ?></h4><?php endif; ?>
						<?php if($item['text']): ?><p class="text"><?php echo $item['text']; ?></p><?php endif; ?>
						<?php if(get_img_tag('img', $item) && $item['position'] == "bottom"): ?><figure class="<?php echo $item['position']; ?>"><?php echo get_img_tag('img', $item); ?></figure><?php endif; ?>
					</div>
					<?php
							endforeach;
						endif;
					?>
					<?php if($items['url'] && $items['name']): ?><p class="more"><a href="<?php echo $items['url']; ?>"><?php echo $items['name']; ?></a></p><?php endif; ?>
				<?php
						endforeach;
					endif;
				?>
			</div>
		</section>