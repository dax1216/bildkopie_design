<!-- new-category -->
<div class="modal fade custom-width" id="new-category">
	<div class="modal-dialog" style="width: 50%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Neue Kategorie: <strong>Album</strong></h4>
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
								<label class="col-sm-5 control-label">Bermerkung</label>
								<div class="col-sm-7">
									<textarea class="form-control" rows="4" style="height:auto;"></textarea>
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

						</div>
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-5 control-label">Status</label>						
								<div class="col-sm-7">											
									<select name="" class="selectboxit select-success" data-first-option="false">								
										<option value="1" selected>Auswahlen</option>								
										<option value="2">Osterreich</option>								
									</select>
								</div>
							</div>
							<br/>
							<br/>
							<br/>
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
								<label class="col-sm-5 control-label">Zugewiesenen Alben</label>	
								<div class="col-sm-7">
									<input type="text" value="-" class="form-control" id="field-1" placeholder="" name="" disabled>
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
					Speichern
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