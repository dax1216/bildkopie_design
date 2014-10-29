<!-- modal-package (Custom Width)-->
<div class="modal fade custom-width" id="modal-kunden-bearbeiten">
	<div class="modal-dialog" style="width: 60%;">
		<div class="modal-content">			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Kunden bearbeiten: Claudia Musil</h4>
			</div>			
			<div class="modal-body">			
				<div class="row">
					<form role="form" class="form-horizontal form-groups">						
						<div class="col-sm-6">
							<ul class="nav nav-tabs right-aligned"><!-- available classes "bordered", "right-aligned" -->
								<li class="active">
									<a href="#tab1" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-user"></i></span>
										<span class="hidden-xs">Kundendaten</span>
									</a>
								</li>
								<li>
									<a href="#tab2" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-box"></i></span>
										<span class="hidden-xs">Lieferadresse</span>
									</a>
								</li>
								<li>
									<a href="#tab3" data-toggle="tab">
										<span class="visible-xs"><i class="entypo-cog"></i></span>
										<span class="hidden-xs">Interne Notiz</span>
									</a>
								</li>
								
							</ul>

							<div class="tab-content">
								<div class="tab-pane active" id="tab1">

									<div class="form-group">
										<label class="col-sm-4 control-label">Anrede</label>						
										<div class="col-sm-8">											
											<select name="" class="selectboxit" data-first-option="false">								
												<option value="1" selected>Auswhlen</option>								
												<option value="2">Auswhlen</option>								
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label">Titel</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="field-1" placeholder="" name="">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label">Vorname</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="Claudia" id="field-1" placeholder="" name="">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-4 control-label">Nachname</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="Musil" id="field-1" placeholder="" name="">
										</div>
									</div>	

									<div class="form-group">
										<label class="col-sm-4 control-label">Strabe</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="Schlogasse 10" id="field-1" placeholder="" name="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Ort</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="Bockflieb" id="field-1" placeholder="" name="">
										</div>
									</div>	
									<div class="form-group">
										<label class="col-sm-4 control-label">Land</label>						
										<div class="col-sm-8">											
											<select name="" class="selectboxit" data-first-option="false">								
												<option value="1" selected>Osterreich</option>								
												<option value="2">Osterreich</option>								
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Telefon</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="0664-5308695" id="field-1" placeholder="" name="">
										</div>
									</div>

								</div>
								<div class="tab-pane " id="tab2">		
									<div class="form-group">
										<label class="col-sm-4 control-label">Abweichend</label>
										<div class="col-sm-8 fg-label">
											<div class="form-control">
												<input tabindex="6" type="checkbox" class="icheck" id="minimal-checkbox-2">
											</div>
										</div>
									</div>	
								</div>
								<div class="tab-pane" id="tab3">
									<div class="form-group">
										<label class="col-sm-4 control-label">Notiz</label>
										<div class="col-sm-8">
											<div class="">
												<textarea class="form-control"  rows="10" style="height:auto;"></textarea>
											</div>
										</div>
									</div>
								</div>
								
								
							</div>

						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-4 control-label">E-Mail</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" value="" id="field-1" placeholder="" name="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Password</label>						
								<div class="col-sm-8">									
									<button type="button" class="btn btn-blue btn-icon icon-left">
										Passwort emeut senden
										<i class="entypo-lock"></i>
									</button>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Newsletter</label>
								<div class="col-sm-8 fg-label">
									<div class="form-control">
										<input tabindex="6" type="checkbox" class="icheck" id="minimal-checkbox-2" checked>
									</div>
								</div>
							</div>
							<br/>
							<br/>
							<div class="form-group">
								<label class="col-sm-4 control-label">Erstellt am</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" value="01.07.2014" id="field-1" placeholder="" name="" disabled="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Verandert am</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" value="-" id="field-1" placeholder="" name="" disabled="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Bestellungen</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" value="3" id="field-1" placeholder="" name="" disabled="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Umsatz</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" value="€  560" id="field-1" placeholder="" name="" disabled="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">ID</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" value="6" id="field-1" placeholder="" name="" disabled="">
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>			
			<div class="modal-footer both-icon">

				<button type="button" class="btn btn-red btn-icon icon-left pull-left">
					Kunden Ioschen
					<i class="entypo-trash"></i>
				</button>

				<button type="button" class="btn btn-red" data-dismiss="modal">Abbrechen</button>
				<button type="button" onclick="jQuery('#modal-package').modal('show');"  class="btn btn-green btn-icon">
					Speichem
					<i class="entypo-check"></i>
				</button>

			</div>
		</div>
	</div>
</div>
