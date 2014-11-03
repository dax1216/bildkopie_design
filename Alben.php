<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	

	<div class="main-content">
		
	<?php get_template_part('toolbar'); ?>	
	

<button type="button" class="btn btn-green btn-icon icon-left pull-right new-album">
	Neues Album
	<i class="entypo-plus"></i>
</button> 

<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>


<h2 class="page-title">Alben  <span class="btn btn-info send-gallery-link"> Send Gallery Link Temporary Trigger </span></h2> 



<?php get_template_part('GalleryToolbarHeader') ?>
<?php get_template_part('GalleryGrid') ?>
<?php get_template_part('GalleryToolbarFooter') ?>
</div>

<?php get_template_part('ModalSendGallLink') ?>
<?php get_template_part('ModalNewAlbum') ?>
<?php get_template_part('ModalEditAlbum') ?>

<script type="text/javascript">	
	jQuery(document).ready(function($)
	{
		// Handle the Change Cover
		$(".new-album").on("click", function(ev)
		{
			ev.preventDefault();
			// Sample Modal
			$("#new-album").modal('show');
		});

		// Handle the Change Cover
		$(".edit-album").on("click", function(ev)
		{
			ev.preventDefault();
			// Sample Modal
			$("#edit-album").modal('show');
		});

		// Handle the Change Cover
		$(".send-gallery-link").on("click", function(ev)
		{
			ev.preventDefault();
			// Sample Modal
			$("#send-gallery-link").modal('show');
		});
	});
</script>

<?php get_footer('user'); ?>