<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	

	<div class="main-content gallery">
		
	<?php get_template_part('toolbar'); ?>	

	
<button type="button" class="btn btn-red btn-icon icon-left pull-right" style="margin-left:10px">
	Album loscen
	<i class="entypo-cancel"></i>
</button>
<button type="button" class="btn btn-default btn-icon icon-left pull-right" >
	Album bearbeiten
	<i class="entypo-pencil"></i>
</button>

<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
<h2 class="page-title">Safari Reßie von 2014 mit Willi </h2>

<?php get_template_part('GalleryToolbarHeaderGN') ?>
<?php get_template_part('GalleryUpload') ?>

</div>


<?php get_footer('user'); ?>