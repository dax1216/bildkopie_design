<?php	require_once 'includes/Template.php'; ?>
	<?php get_header(); ?>	
	<?php get_sidebar(); ?>	

	<div class="main-content">
		
	<?php get_template_part('toolbar'); ?>	

			
<script type="text/javascript">	
jQuery(document).ready(function($)
{
	// Handle the Change Cover
	$(".gallery-env").on("click", ".album header .album-options", function(ev)
	{
		ev.preventDefault();
		
		// Sample Modal
		$("#album-cover-options").modal('show');
		
		// Sample Crop Instance
		var image_to_crop = $("#album-cover-options .croppable-image img"),
			img_load = new Image();
		
		img_load.src = image_to_crop.attr('src');
		img_load.onload = function()
		{
			if(image_to_crop.data('loaded'))
				return false;
				
			image_to_crop.data('loaded', true);
			
			image_to_crop.Jcrop({
				boxWidth: 410,
				boxHeight: 265,
				onSelect: function(cords)
				{
					// you can use these vars to save cropping of the image coordinates
					var h = cords.h,
						w = cords.w,
						
						x1 = cords.x,
						x2 = cords.x2,
						
						y1 = cords.w,
						y2 = cords.y2;
					
				}
			}, function()
			{
				var jcrop = this;
				
				jcrop.animateTo([800, 600, 150, 50]);
			});
		}
	});
});
</script>
<button type="button" class="btn btn-green btn-icon icon-left pull-right">
	Neues Album
	<i class="entypo-plus"></i>
</button>
<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
<h2 class="page-title">Alben</h2>
<div class="toolbar header">
	<div class="row">
		<div class="col-sm-6">
			<i class="entypo-picture"></i> 6 Ablen
			<i class="entypo-drive"></i> Gesamt: 7,78 GB
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-4">
					<div class="btn-group both-icon white">
						<button type="button" class="btn btn-default btn-sm btn-parallel"> Aktion wählen </button>
						
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down-open"></i>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" onclick="jQuery('#modal-kunden-bearbeiten').modal('show');"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="#"><i class="entypo-basket"></i> Bestellungen</a></li>
							<li><a href="#"><i class="entypo-mail"></i> Nachrichten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<select name="test" class="selectboxit">	
						<option value="10">10</option>						
						<option value="20">20</option>						
						<option value="30">30</option>				
					</select>
				</div>
				<div class="col-sm-4">
					<select name="test" class="selectboxit">	
						<option value="10">10</option>						
						<option value="20">20</option>						
						<option value="30">30</option>				
					</select>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('GalleryGrid') ?>


<!-- Footer -->	
</div>



	
<!-- Album Cover Settings Modal -->
<div class="modal fade custom-width" id="album-cover-options">
	<div class="modal-dialog" style="width: 65%;">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit: <strong>Album Title</strong></h4>
			</div>
			
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-6">
										
						<div class="row">
							<div class="col-md-12">
								
								<h4 class="margin-top-none">Crop Image</h4>
								
								<div class="croppable-image">
									<img src="assets/images/12-full.jpg" class="img-responsive" />
								</div>
								
							</div>
						</div>
						
					</div>
					
					<div class="col-sm-6">
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Title</label>
									
									<input type="text" class="form-control" id="field-1" placeholder="Enter album title">
								</div>	
								
							</div>
						</div>
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Tags</label>
									
									<input type="text" class="form-control" id="field-3" placeholder="Tags">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Description</label>
									
									<textarea class="form-control autogrow" id="field-2" placeholder="Enter album description" style="min-height: 120px;"></textarea>
								</div>	
								
							</div>
						</div>
						
					</div>
				</div>
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Apply Changes
				</button>
			</div>
		</div>
	</div>
</div>


<!-- Album Image Settings Modal -->
<div class="modal fade" id="album-image-options">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="gallery-image-edit-env">
				<img src="assets/images/sample-crop-2.png" class="img-responsive" />
				
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			
			<div class="modal-body">
			
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Title</label>
									
									<input type="text" class="form-control" id="field-1" placeholder="Enter image title">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Description</label>
									
									<textarea class="form-control autogrow" id="field-2" placeholder="Enter image description" style="min-height: 80px;"></textarea>
								</div>	
								
							</div>
						</div>
						
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Apply Changes
				</button>
			</div>
		</div>
	</div>
</div>
<?php get_footer('user'); ?>