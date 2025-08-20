<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header('subpage');
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

		<?php the_content(); ?>

		<?php get_template_part('template', 'parts/contacts'); ?>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
