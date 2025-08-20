<?php
	$bgcolor = ($data['bg']) ? 'background-color: '.$data['bg'].';': '';
	$bgimg   = ($data['bgimg']) ? 'background-image: url('.$data['bgimg'].');': '';
	$id      = ($data['id']) ? ' id="'.$data['id'].'"': '';
?>
		<section<?php echo $id; ?> class="box tablebox" style="<?php echo $bgcolor; ?><?php echo $bgimg; ?>">
			<div class="wrap">
				<div class="head">
					<?php if($data['title']): ?><h2 class="title"><?php if($img = get_img_tag('icon', $data)): ?><span class="icon"><?php echo $img; ?></span><?php endif; ?><?php echo $data['title']; ?></h2><?php endif; ?>
					<?php if($data['catch']): ?><p class="catch"><?php echo $data['catch']; ?></p><?php endif; ?>
				</div>
				<?php if($data['read']): ?><p class="read"><?php echo $data['read']; ?></p><?php endif; ?>
				<?php if($data['table'] && count($data['table']) > 0): ?>
				<table>
					<tbody>
						<?php
							foreach($data['table'] as $val):
								if($val['label'] && $val['text']):
						?>
						<tr>
							<th scope="row"><?php echo $val['label']; ?></th>
							<td><?php echo $val['text']; ?></td>
						</tr>
						<?php
								endif;
							endforeach;
						?>
					</tbody>
				</table>
				<?php endif; ?>
			</div>
		</section>
