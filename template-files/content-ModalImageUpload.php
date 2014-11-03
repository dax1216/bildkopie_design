<!-- modal-package (Custom Width)-->
<div class="modal fade custom-width" id="modal-image-upload">
	<div class="modal-dialog" style="width: 70%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Bilder Upload: Caludia Musil</h4>
			</div>			
			<div class="modal-body">			
				<table width="100%" class="table table-bordered table-striped datatable vlign-top">
					<thead>
						<tr>
							<th width="15%">Vorschaubild</th>
							<th width="15%">Ihr Upload</th>
							<th width="15%">Erforderliche Auflosung</th>
							<th width="15%">Ihr Upload</th>
							<th width="5%">Check</th>
							<th width="15%">Aktion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="cropped cropped-modal">
									<a href="#" class="thumb">
										<img src="assets/images/12-full.jpg">
										<div class="overlay left" style="width:52%;"></div>
										<div class="overlay right" style="width:13%;"></div>
									</a>
								</div>
							</td>
							<td>
								<div class="cropped cropped-modal cropped-image">
									<a href="#" class="thumb">
										<img src="assets/images/12-full-cropped.jpg">
									</a>
								</div>								
							</td>
							<td>
								203 x 105 mm <br/>
								opt. 300 dpi, min. 200 dpi
								<br/><br/>
								<p class="description">
									<strong>Vorschaudbild</strong> <br/>
									0,23 Mbyte <br/>
									se4090.jpg <br/>
									16.05.2015 08:00
								</p>
							</td>
							<td>
								203 x 105 mm <br/>
								300 dpi
								<br/><br/>
								<p class="description">
									<strong>Uploadbild</strong> <br/>
									1,05 Mbyte <br/>
									se4090.jpg <br/>
									16.05.2015 08:00
								</p>
							</td>
							<td><i class="entypo-check"></i></td>
							<td>
								<p><button type="button" class="btn btn-default btn-icon icon-left">
									Upload wiederholen
									<i class="entypo-upload"></i>
								</button></p> 
								<p><button type="button" class="btn btn-default btn-icon icon-left">
									Upload loschen
									<i class="entypo-trash"></i>
								</button></p> 
								
								
								
								<p class="bg-red infotext "> Auflosung nicht<br/> ausreichend!</p>
							</td>
							<tr>
								<td>
									<div class="cropped cropped-modal">
										<a href="#" class="thumb">
											<img src="assets/images/12-full.jpg">
											<div class="overlay left" style="width:52%;"></div>
											<div class="overlay right" style="width:13%;"></div>
										</a>
									</div>
								</td>
								<td>
									<form action="<?php siteInfo();?>/bildkopie/data/upload-file.php" class="dropzone" id="dropzone_example">
										<div class="fallback">
											<input name="file" type="file" multiple />
										</div>
									</form>
										
								</td>
								<td>
									203 x 105 mm <br/>
									300 dpi
									<br/><br/>
									<p class="description">
										<strong>Uploadbild</strong> <br/>
										1,05 Mbyte <br/>
										se4090.jpg <br/>
										16.05.2015 08:00
									</p>
								</td>
								<td>
									-<br/>
									-
									<br/><br/>
									<p class="description">
										<strong>Uploadbild</strong> <br/>
										-<br/>
										-<br/>
										-
									</p>
								</td>
								<td><i class="entypo-cancel"></i></td>
								<td>
									<p><button type="button" class="btn btn-red btn-icon icon-left">
										Upload erforderlich
										<i class="entypo-upload"></i>
									</button></p> 
								</td>
							</tr>
						</tr>

					</tbody>
				</table>
			</div>			
			<div class="modal-footer">
				<button type="button" class="btn btn-red" data-dismiss="modal">Abbrechen</button>
				<button type="button" class="btn btn-green btn-icon icon-left">
					Speichern
					<i class="entypo-check"></i>
				</button>
			</div>
		</div>
	</div>
</div>
