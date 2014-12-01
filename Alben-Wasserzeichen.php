<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	
	<div class="main-content">
		<?php get_template_part('toolbar'); ?>	
		<div class="btn-bar bs-example row">
			<div class="col-xs-4 clearfix left-bar">
				<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
			</div>
		</div>
		<?php get_template_part('Wasserzeichen'); ?>
		<?php get_template_part('copyright') ?>	
	</div>	
<?php get_footer('user'); ?>