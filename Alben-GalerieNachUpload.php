<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	
	<div class="main-content">		
		<?php get_template_part('toolbar'); ?>	
		<div class="btn-bar bs-example row">
			<div class="col-xs-4 clearfix left-bar">
				<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
			</div>
			<div class="col-xs-8 clearfix right-bar">
				<button type="button" class="btn btn-red btn-icon icon-left pull-right">
					Album loscen
					<i class="entypo-cancel"></i>
				</button>
				<button type="button" class="btn btn-default btn-icon icon-left pull-right edit-album " >
					Album bearbeiten
					<i class="entypo-pencil"></i>
				</button>
			</div>
		</div>		
		<div class="gallery-env">			
			<?php get_template_part('GalleryToolbarHeaderGN') ?>
			<?php get_template_part('GalleryGridNachUpload') ?>
			<?php get_template_part('GalleryToolbarFooter') ?>
			<?php get_template_part('GalleryUpload') ?>
		</div>
		
		<?php get_template_part('copyright') ?>
	</div>
<?php get_template_part('ModalSendGallLink') ?>
<?php  get_template_part('ModalEditAlbum');?>
<?php get_footer('user'); ?>