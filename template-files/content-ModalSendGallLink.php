<!-- new-category -->
<div class="modal fade custom-width mail-modal" id="send-gallery-link">
	<div class="modal-dialog" style="width: 50%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><strong>Album Link kopieren / versenden</strong></h4>
			</div>
			
			<div class="modal-body">
				<form role="form" class="form-horizontal form-groups">
					<div class="row">
						<div class="mail-env mail-modal">
							<div class="mail-body">	
								<div class="mail-compose">
									<div class="col-sm-12">

										<div class="form-group">						
											
												<div class="input-group">
													<input type="text" class="form-control link-input" value="http://fotoraf.bildkopie.com/124545fs5d4f54f5ds4545wwere15">										
													<div class="input-group-addon btn-info">
														<i class="fa fa-copy"></i> Link kopieren
													</div>
												</div>
											
										</div>								
										<div class="form-group">						
											
												<label for="to">E-Mailt:</label>
												<input type="text" class="form-control" id="to" tabindex="1" />
											
										</div>
										<div class="form-group">						
											
												<label for="subject">Betreff:</label>
												<input type="text" class="form-control" id="subject" tabindex="1" />
											
										</div>
										<div class="form-group last">											
												<div class="compose-message-editor">
													<textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="sample_wysiwyg" id="sample_wysiwyg"></textarea>
												</div>
											
										</div>

									</div>
								</div>
							</div>
						</div>


						
					</div>
				</form>
				
			</div>
			
			<div class="modal-footer">
				<button type="button"  data-dismiss="modal" class="btn btn-red">
					Abbrechen
				</button>
				<button type="button" class="btn btn-success btn-icon icon-left">
					<i class="entypo-mail"></i>
					Nachricht abschicken
				</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">	
	jQuery(document).ready(function($)
	{
		
		$(".send-gallery-link").on("click", function(ev)
		{
			ev.preventDefault();
			$("#send-gallery-link").modal('show');
		});
	});
</script>