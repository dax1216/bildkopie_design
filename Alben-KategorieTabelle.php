<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	

	<div class="main-content">
		
	<?php get_template_part('toolbar'); ?>	

<button type="button" class="btn btn-success btn-icon icon-left pull-right new-category">
	Neues Album
	<i class="entypo-plus"></i>
</button>


<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
<h2 class="page-title">Kategorien: Alben</h2>

<?php get_template_part('GalleryCategory') ?>

</div>
<?php get_template_part('ModalNewCategory') ?>
<?php get_template_part('ModalEditCategory') ?>

<script type="text/javascript">	
	jQuery(document).ready(function($)
	{
		// Handle the Change Cover
		$(".new-category").on("click", function(ev)
		{
			ev.preventDefault();
			// Sample Modal
			$("#new-category").modal('show');
		});

		// Handle the Change Cover
		$(".edit-category").on("click", function(ev)
		{
			ev.preventDefault();
			// Sample Modal
			$("#edit-category").modal('show');
		});
	});
</script>

<?php get_footer('user'); ?>