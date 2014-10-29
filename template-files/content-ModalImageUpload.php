<!-- modal-package (Custom Width)-->
<div class="modal fade custom-width" id="modal-image-upload">
	<div class="modal-dialog" style="width: 70%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Bilder Upload: Caludia Music</h4>
			</div>			
			<div class="modal-body">			
				<table width="100%" class="table table-bordered table-striped datatable">
					<thead>
						<tr>
							<th>Vorschaubild</th>
							<th>Ihr Upload</th>
							<th>Erforderliche Auflosung</th>
							<th>Ihr Upload</th>
							<th>Check</th>
							<th>Aktion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="cropped">
									<a href="#" class="thumb">
										<img src="http://localhost/bildkopie/assets/images/img-thumb.jpg">
										<div class="overlay left" style="width:28%;"></div>
										<div class="overlay right" style="width:34%;"></div>
									</a>
								</div>
							</td>
							<td>
								<div class="cropped">
									<a href="#" class="thumb">
										<img src="<?php imgUrl('img-thumb.jpg'); ?>" />
									</a>
								</div>								
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								<div class="cropped">
								<a href="#" class="thumb">
									<img src="<?php imgUrl('img-thumb.jpg'); ?>" />
								</a>
							</div>
							</td>
							<td colspan="5">
								<form action="<?php siteInfo();?>/bildkopie/data/upload-file.php" class="dropzone" id="dropzone_example">
									<div class="fallback">
										<input name="file" type="file" multiple />
									</div>
								</form>
								<div id="dze_info" class="hidden">
									
									<br />
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">Dropzone Uploaded Files Info</div>
										</div>
										
										<table class="table table-bordered">
											<thead>
												<tr>
													<th width="40%">File name</th>
													<th width="15%">Size</th>
													<th width="15%">Type</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="4"></td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>	
							</td>
						</tr>
					</tbody>
				</table>
			</div>			
			<div class="modal-footer">
				<button type="button" class="btn btn-red" data-dismiss="modal">Abbrechen</button>
				<button type="button" onclick="jQuery('#modal-package').modal('show');"  class="btn btn-green btn-icon icon-left">
					Paket jetzt wechesln
					<i class="entypo-check"></i>
				</button>
			</div>
		</div>
	</div>
</div>
