<!-- modal-package (Custom Width)-->
<div class="modal fade" id="modal-image-upload">
	<div class="modal-dialog" style="width: 80%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Bilder Upload: Caludia Musil</h4>
			</div>			
			<div class="modal-body resize">			
				<div class="dataTables_wrapper form-inline">
					<table width="100%" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th id="preview">Vorschaubild</th>
							<th id="your-upload">Ihr Upload</th>
							<th>Erforderliche Auflosung</th>
							<th>Ihr Upload</th>
							<th>Check</th>
							<th>Aktion</th>
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
								<div class="cropped cropped-modal your-upload">
									<a href="#" class="thumb">
										<img src="assets/images/12-full-cropped.jpg">
									</a>
								</div>								
							</td>
							<td>
								203 x 105 mm <br/>
								opt. 300 dpi, min. 200 dpi
								<br/><br/>
								<p class="text-muted">
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
								<p class="text-muted">
									<strong>Uploadbild</strong> <br/>
									1,05 Mbyte <br/>
									se4090.jpg <br/>
									16.05.2015 08:00
								</p>
							</td>
							<td><i class="entypo-check text-success strong"></i></td>
							<td>
								<p><button type="button" class="btn btn-default btn-icon btn-sm icon-left">
									Upload wiederholen
									<i class="entypo-upload"></i>
								</button></p> 
								<p><button type="button" class="btn btn-default btn-icon btn-sm icon-left">
									Upload loschen
									<i class="entypo-trash"></i>
								</button></p> 
								<div class="alert alert-danger"><p>Auflosung nicht<br/> ausreichend!</p></div>
							</td>
						</tr>
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
								<div class="cropped cropped-modal your-upload">
									<a href="#" class="thumb">
										<img src="assets/images/12-full-cropped.jpg">
									</a>
								</div>								
							</td>
							<td>
								203 x 105 mm <br/>
								opt. 300 dpi, min. 200 dpi
								<br/><br/>
								<p class="text-muted">
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
								<p class="text-muted">
									<strong>Uploadbild</strong> <br/>
									1,05 Mbyte <br/>
									se4090.jpg <br/>
									16.05.2015 08:00
								</p>
							</td>
							<td><i class="entypo-cancel text-danger strong"></i> </td>
							<td>
								<p><button type="button" class="btn btn-default btn-icon btn-sm icon-left">
									Upload wiederholen
									<i class="entypo-upload"></i>
								</button></p> 
								<p><button type="button" class="btn btn-default btn-icon btn-sm icon-left">
									Upload loschen
									<i class="entypo-trash"></i>
								</button></p> 								
								<div class="alert alert-danger"><p>Auflosung nicht<br/> ausreichend!</p></div>
							</td>
						</tr>
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
									<p class="text-muted">
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
									<p class="text-muted">
										<strong>Uploadbild</strong> <br/>
										-<br/>
										-<br/>
										-
									</p>
								</td>
								<td><i class="entypo-cancel text-danger strong"></i></td>
								<td>
									<p><button type="button" class="btn btn-red btn-icon btn-sm icon-left">
										Upload erforderlich
										<i class="entypo-upload"></i>
									</button></p> 
								</td>
						</tr>

					</tbody>
				</table>
				</div>
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

