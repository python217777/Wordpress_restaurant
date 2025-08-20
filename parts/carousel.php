<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
?>
		<section<?php echo $id; ?> class="box carouselbox" style="<?php echo $bgcolor; ?>">
			<div class="wrap">
				<?php
					foreach($data['carousel'] as $val):
						$open = ($val['open']) ? ' target="_blank"': '';
				?>
				<div class="item">
					<?php if($val['url']): ?><a href="<?php echo $val['url']; ?>"<?php echo $open ?>><?php endif; ?>
						<img src="/lib/script/tim/thumb.php?h=600&w=1000&src=<?php echo $val['img']; ?>"<?php if($val['sp']): ?> class="pc"<?php endif; ?> alt="">
						<?php if($val['sp']): ?><img src="/lib/script/tim/thumb.php?w=580&h=350&src=<?php echo $val['sp']; ?>" class="sp" alt=""><?php endif; ?>
					<?php if($val['url']): ?></a><?php endif; ?>
				</div>
				<?php endforeach; ?>
				<ul class="marker"></ul>
				<p class="prev"><a href="#"></a></p>
				<p class="next"><a href="#"></a></p>
			</div>
		</section>