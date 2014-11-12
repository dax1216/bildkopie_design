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


<h2 class="page-title">Alben</h2> 



<?php get_template_part('GalleryToolbarHeader') ?>
<?php get_template_part('GalleryGrid') ?>
<?php get_template_part('GalleryToolbarFooter') ?>
</div>

<?php get_template_part('ModalNewAlbum') ?>
<?php get_template_part('ModalEditAlbum') ?>

<?php get_footer('user'); ?>