<!-- new-category -->
<div class="modal fade custom-width" id="new-album">
	<div class="modal-dialog" style="width: 50%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Neue Album erstellen</h4>
			</div>
			
			<div class="modal-body">
				<form role="form" class="form-horizontal form-groups">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-5 control-label">Titel <span class="required">*</span></label>
								<div class="col-sm-7">
									<input type="text" value="Safari Reibe von 2014 mi Willi" class="form-control" id="field-1" placeholder="" name="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Album Kategorie <span class="required">*</span></label>						
								<div class="col-sm-7">											
									<select name="" class="selectboxit" data-first-option="false">								
										<option value="1" selected>Events 2014</option>								
										<option value="2">Events 2013</option>								
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Foto Laborfertig</label>
								<div class="col-sm-7">									
									<div class="make-switch" data-on="success"  data-on-label="<i class='entypo-check'></i>" data-off-label="<i class='entypo-cancel'></i>">
										<input type="checkbox"  />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Gratis Download</label>
								<div class="col-sm-7">									
									<div class="make-switch" data-on="success"  data-on-label="<i class='entypo-check'></i>" data-off-label="<i class='entypo-cancel'></i>">
										<input type="checkbox"  />
									</div>

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Ausschnitt Wahlabar</label>
								<div class="col-sm-7">									
									<div class="make-switch" data-on="success"  data-on-label="<i class='entypo-check'></i>" data-off-label="<i class='entypo-cancel'></i>">
										<input type="checkbox"  checked />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Preisliste</label>						
								<div class="col-sm-7">											
									<select name="" class="selectboxit" data-first-option="false">								
										<option value="1" selected>Auswahlen</option>								
										<option value="2">Osterreich</option>								
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Bermerkung</label>
								<div class="col-sm-7">
									<textarea class="form-control" rows="7" style="height:auto;"></textarea>
								</div>
							</div>

						</div>
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-5 control-label">Status</label>						
								<div class="col-sm-7">											
									<select name="" class="selectboxit select-default " data-first-option="false">								
										<option value="1" selected>Privat</option>								
										<option value="2">Public</option>								
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Passort</label>								
								<div class="col-sm-7">								
									<div class="input-group">
										<input type="text" value="Xldf_56fdR" class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-info" type="button"><i class="entypo-lock"></i></button>
										</span>	
									</div>	
								</div>
							</div>

							<br/>
							<br/>
							<br/>
							<div class="form-group">
								<label class="col-sm-5 control-label">Album Start</label>								
								<div class="col-sm-7">
									<div class="input-group">
										<input type="text" class="form-control" value="01.07.2014" >										
										<div class="input-group-addon btn-info">
											<i class="entypo-calendar"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label">Album Ende</label>								
								<div class="col-sm-7">
									<div class="input-group">
										<input type="text" class="form-control" value="-" >										
										<div class="input-group-addon btn-info">
											<i class="entypo-calendar"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label">Erstellt am</label>
								<div class="col-sm-7">
									<input type="text" value="10.07.2014" class="form-control" id="field-1" placeholder="" name="" disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Verandert am</label>
								<div class="col-sm-7">
									<input type="text" value="-" class="form-control" id="field-1" placeholder="" name="" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-5 control-label">Autor</label>								
								<div class="col-sm-7">								
									<div class="input-group">
										<input type="text" value="Fotoraf Mustermann" class="form-control" disabled>
										<span class="input-group-btn">
											<button class="btn btn-info" type="button"><i class="entypo-user"></i></button>
										</span>	
									</div>	
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-sm-5 control-label">ID</label>
								<div class="col-sm-7">
									<input type="text" value="6" class="form-control" id="field-1" placeholder="" name="" disabled>
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
					<i class="entypo-check"></i>
					Speichern &amp; zum Album
				</button>
				<button type="button" class="btn btn-default">
					<i class="entypo-check"></i> Speichern &amp; Schlieben
				</button>
				<button type="button" class="btn btn-default">
					<i class="entypo-plus-circled"></i> Speichern &amp; Neu
				</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">	
	jQuery(document).ready(function($)
	{
		$(".new-album").on("click", function(ev)
		{
			ev.preventDefault();
			$("#new-album").modal('show');
		});
		
	});
</script>