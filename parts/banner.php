<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
	$bg      = get_base_data('base_color');
?>
		<section<?php echo $id; ?> class="box bannerbox column<?php echo $data['column']; ?>" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<div class="head">
					<?php if($data['title']): ?><h2 class="title"><?php if($img = get_img_tag('icon', $data)): ?><span class="icon"><?php echo $img; ?></span><?php endif; ?><?php echo $data['title']; ?></h2><?php endif; ?>
					<?php if($data['catch']): ?><p class="catch"><?php echo $data['catch']; ?></p><?php endif; ?>
				</div>
				<?php if($data['read']): ?><p class="read"><?php echo $data['read']; ?></p><?php endif; ?>
				<?php if($data['items'] && count($data['items']) > 0): ?>
				<div class="items clearfix">
					<?php
						foreach($data['items'] as $bn):
							$open = ($bn['open']) ? ' target="_blank"': '';
							if($bn['img']):
					?>
					<div class="item linkbox">
						<figure>
							<?php if($bn['url']): ?><a href="<?php echo $bn['url']; ?>"<?php echo $open; ?>><?php endif; ?>
								<?php echo get_img_tag('img', $bn); ?>
							<?php if($bn['url']): ?></a><?php endif; ?>
						</figure>
						<?php if($bn['title'] || $bn['text']): ?>
						<div class="textbox"<?php if($bg): ?> style="background-color: <?php echo $bg; ?>;"<?php endif; ?>>
							<?php if($bn['title']): ?><h3><?php echo $bn['title']; ?></h3><?php endif; ?>
							<?php if($bn['text']): ?><p><?php echo $bn['text']; ?></p><?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
					<?php
							endif;
						endforeach;
					?>
				</div>
				<?php endif; ?>
				<?php if($data['url'] && $data['name']): ?><p class="more"><a href="<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a></p><?php endif; ?>
			</div>
		</section>