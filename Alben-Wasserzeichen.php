<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	

	<div class="main-content">
		
	<?php get_template_part('toolbar'); ?>	

		
<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
<h2 class="page-title">Wasserzeichen</h2>
<?php get_template_part('Wasserzeichen'); ?>	
</div>	
<?php get_footer('user'); ?>