<?php	require_once 'includes/Template.php'; ?>
<?php get_header(); ?>
	<?php get_sidebar(); ?>
	<div class="main-content">
		<?php get_template_part('toolbar'); ?>	
		<?php get_template_part('EmailView'); ?>	
		  <?php get_template_part('copyright') ?>
	</div>
</div>
<?php  get_footer('user'); ?>