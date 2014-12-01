<?php require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	

	<div class="main-content">
		
		<?php get_template_part('toolbar'); ?>	
		
		<div class="btn-bar bs-example row">
			<div class="col-xs-4 clearfix left-bar">
				<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
			</div>
			<div class="col-xs-8 clearfix right-bar">
				<button type="button" class="btn btn-success btn-icon icon-left pull-right new-category">
					Neue Kategorie
					<i class="entypo-plus"></i>
				</button>
			</div>
		</div>
		<?php get_template_part('GalleryCategory') ?>
		<?php get_template_part('copyright') ?>

	</div>
	<?php get_template_part('ModalNewCategory') ?>
	<?php get_template_part('ModalEditCategory') ?>

	<script type="text/javascript">	
		jQuery(document).ready(function($)
		{
			$(".new-category").on("click", function(ev)
			{
				ev.preventDefault();
				$("#new-category").modal('show');
			});

			$(".edit-category").on("click", function(ev)
			{
				ev.preventDefault();
				$("#edit-category").modal('show');
			});
		});
	</script>
<?php get_footer('user'); ?>