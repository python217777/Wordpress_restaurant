<?php
	$base_color   = get_base_data('base_color');
	$button_color = get_base_data('button_color');
	$border_color = get_base_data('border_color');
	$font_color   = get_base_data('font_color');
	$bgcolor      = get_base_data('bgcolor');
	$head_color   = get_base_data('head_color');
	$head_bgcolor = get_base_data('head_bgcolor');
	$foot_color   = get_base_data('foot_color');
	$foot_bgcolor = get_base_data('foot_bgcolor');
	$carousel     = get_base_data('carousel');
	$carousel_a   = get_base_data('carousel_active');
	$arrow        = get_base_data('arrow');
	ob_start();
?>
<style>
	body {
		<?php if($font_color): ?>color: <?php echo $font_color; ?>;<?php endif; ?>
		<?php if($bgcolor): ?>background-color: <?php echo $bgcolor; ?>;<?php endif; ?>
	}
	header {
		<?php if($head_color): ?>color: <?php echo $head_color; ?>;<?php endif; ?>
		<?php if($head_bgcolor): ?>background-color: <?php echo $head_bgcolor; ?>;<?php endif; ?>
	}
	header a {
		<?php if($head_color): ?>color: <?php echo $head_color; ?>;<?php endif; ?>
	}
	header a:visited {
		<?php if($head_color): ?>color: <?php echo $head_color; ?>;<?php endif; ?>
	}
	footer {
		<?php if($foot_color): ?>color: <?php echo $foot_color; ?>;<?php endif; ?>
		<?php if($foot_bgcolor): ?>background-color: <?php echo $foot_bgcolor; ?>;<?php endif; ?>
	}
	footer a {
		<?php if($foot_color): ?>color: <?php echo $foot_color; ?>;<?php endif; ?>
	}
	footer .end {
		<?php if($bgcolor): ?>background-color: <?php echo $bgcolor; ?>;<?php endif; ?>
	}
	footer .end, footer .end a {
		<?php if($font_color): ?>color: <?php echo $font_color; ?>;<?php endif; ?>
	}
	header .menu span, article .box .more a, article .templatebox h3, #products .detail h2 {
		<?php if($base_color): ?>background-color: <?php echo $base_color; ?>;<?php endif; ?>
	}
	article .box .more a, article .templatebox h3, article .bannerbox .items .item .textbox, #products .detail h2 {
		<?php if($button_color): ?>color: <?php echo $button_color; ?>;<?php endif; ?>
	}
	.wp-pagenavi a, .wp-pagenavi .current, .wp-pagenavi span, article .box .catch, article .centerbox h2, article .templatebox h4, #products .detail .cat, #products .detail .data h3, #products .detail .free h3 {
		<?php if($base_color): ?>color: <?php echo $base_color; ?>;<?php endif; ?>
	}
	.pan, .pan a {
		<?php if($button_color): ?>color: <?php echo $button_color; ?>;<?php endif; ?>
	}
	article .productsbox .items .item:after {
		<?php if($base_color): ?>
		border-right: 6px solid <?php echo $base_color; ?>;
		border-bottom: 6px solid <?php echo $base_color; ?>;
		<?php endif; ?>
	}
	#topSlider .marker li.current {
		<?php if($carousel_a): ?>background-color: <?php echo $carousel_a; ?>;<?php endif; ?>
	}
	#topSlider .marker li {
		<?php if($carousel): ?>background-color: <?php echo $carousel; ?>;<?php endif; ?>
	}
	article .box .catlist li, #products .catnav li, #news .catnav li {
		<?php if($border_color): ?>border-left: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	article .box .catlist li:last-child, #products .catnav li:last-child, #news .catnav li:last-child {
		<?php if($border_color): ?>border-right: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	article .newsbox .list {
		<?php if($border_color): ?>border-top: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	article .newsbox .list li {
		<?php if($border_color): ?>border-bottom: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	article .productsbox .items .item {
		<?php if($border_color): ?>border: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	footer .fnavi > ul .sub-menu a, article .newsbox .list li a {
		<?php if($arrow): ?>background-image: url(<?php echo $arrow; ?>);<?php endif; ?>
	}
	@media (max-width: 1060px) {
		header #gnavi {
			<?php if($head_bgcolor): ?>background-color: <?php echo $head_bgcolor; ?>;<?php endif; ?>
		}
		header #gnavi li a, header #gnavi .addr, footer .fnavi > ul > li > a, footer address {
			<?php if($base_color): ?>background-color: <?php echo $base_color; ?>;<?php endif; ?>
			<?php if($button_color): ?>color: <?php echo $button_color; ?>;<?php endif; ?>
		}
		#topSlider .marker {
			<?php if($bgcolor): ?>background-color: <?php echo $bgcolor; ?>;<?php endif; ?>
		}
		article .productsbox .items .item:after {
			<?php if($base_color): ?>
			border-right: 12px solid <?php echo $base_color; ?>;
			border-bottom: 12px solid <?php echo $base_color; ?>;
			<?php endif; ?>
		}
		header #gnavi li ul.sub-menu li a, header .logo p {
			<?php if($foot_bgcolor): ?>background-color: <?php echo $foot_bgcolor; ?>;<?php endif; ?>
		}
		header #gnavi li ul.sub-menu li a, article .newsbox .list li a .ptitle {
			<?php if($arrow): ?>background-image: url(<?php echo $arrow; ?>);<?php endif; ?>
		}
	}

	#sitemaps .list, #products .detail .data table th, #products .detail .data table td {
		<?php if($border_color): ?>border-bottom: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	#sitemaps .list > li, #products .detail .data table {
		<?php if($border_color): ?>border-top: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	#sitemaps .list ul.children {
		<?php if($border_color): ?>border-top: 1px dotted <?php echo $border_color; ?>;<?php endif; ?>
	}

	#privacy .detail dt {
		<?php if($border_color): ?>border-bottom: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}

	.contactbox .send input, .contactbox .home input {
		<?php if($base_color): ?>background-color: <?php echo $base_color; ?>;<?php endif; ?>
		<?php if($button_color): ?>color: <?php echo $button_color; ?>;<?php endif; ?>
	}

	#news .list .items .item h3 {
		<?php if($base_color): ?>color: <?php echo $base_color; ?>;<?php endif; ?>
	}
	#news .list .items .item .more a {
		<?php if($base_color): ?>background-color: <?php echo $base_color; ?>;<?php endif; ?>
		<?php if($button_color): ?>color: <?php echo $button_color; ?>;<?php endif; ?>
	}
	#news .detail h2, #news .detail .cat .date {
		<?php if($base_color): ?>color: <?php echo $base_color; ?>;<?php endif; ?>
	}

	article .tablebox table {
		<?php if($border_color): ?>border-top: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	article .tablebox table th, article .tablebox table td {
		<?php if($border_color): ?>border-bottom: 1px solid <?php echo $border_color; ?>;<?php endif; ?>
	}
	article .carouselbox .next a:before {
		<?php if($base_color): ?>border-top: 5px solid <?php echo $base_color; ?>;<?php endif; ?>
		<?php if($base_color): ?>border-right: 5px solid <?php echo $base_color; ?>;<?php endif; ?>
	}
	article .carouselbox .prev a:before {
		<?php if($base_color): ?>border-left: 5px solid <?php echo $base_color; ?>;<?php endif; ?>
		<?php if($base_color): ?>border-bottom: 5px solid <?php echo $base_color; ?>;<?php endif; ?>
	}
	article .carouselbox .marker li.current {
		<?php if($carousel_a): ?>background-color: <?php echo $carousel_a; ?>;<?php endif; ?>
	}
	article .carouselbox .marker li {
		<?php if($carousel): ?>background-color: <?php echo $carousel; ?>;<?php endif; ?>
	}
</style>
<?php
	$compress = ob_get_clean();
	$compress = str_replace("\t", '', $compress);
	$compress = str_replace("\r", '', $compress);
	$compress = str_replace("\n", '', $compress);
	$compress = preg_replace('/<!--[\s\S]*?-->/', '', $compress);
    echo $compress;
?>