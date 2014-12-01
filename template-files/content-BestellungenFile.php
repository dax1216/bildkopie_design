<div class="btn-bar bs-example row">

<div class="col-xs-4 clearfix left-bar">
    <button type="button" class="btn btn-white"><i class="entypo-reply"></i></button>
</div>

<div class="col-xs-8 clearfix right-bar">
	
    <button type="button" class="btn btn-white pull-right">Rechnung zeigen</button>
        
    <div class="btn-group btn-select pull-right">
        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
            Aktion wählen <i class="entypo-down-open"></i>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#"> Rechnung öffnen</a></li>
            <li><a href="#"> Lieferschein öffnen</a></li>
        </ul>
    </div>

</div>    
   
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Bestellinformationen</div>						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						</div>
					</div>	
					<!-- panel body -->
					<div class="panel-body">		
						<div class="row">
							<div class="col-sm-12">

								<div class="form-horizontal form-groups ">
									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>ID</strong></label>						
										<div class="col-sm-7">
											<span  class="form-control form-control-text">001377</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Bestelldatum</strong></label>						
										<div class="col-sm-7">
											<span  class="form-control form-control-text">30.07.2014</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Status</strong></label>						
										<div class="col-sm-7">
                                            
                                            <div class="btn-group btn-fullwidth">
                                                <button onclick="jQuery('#modal-image-upload').modal('show');"  type="button" class="btn btn-red"><i class="entypo-upload"></i> 2 Uploads erforderlich</button>
                                                
                                                <button type="button" class="btn btn-red dropdown-toggle" data-toggle="dropdown">
                                                    <i class="entypo-down"></i>
                                                </button>
                                                
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#"><i class="entypo-upload"></i> 2 Uploads erfoderlich</a></li>
                                                    <li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
                                                    <li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
                                                    <li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
                                                    <li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
                                                </ul>
                                            </div>
                                            
										</div>
									</div>
                                     
									<hr/>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Preis</strong></label>						
										<div class="col-sm-7">
											<span class="form-control form-control-text">€ 66,80</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Ihr erlös</strong></label>						
										<div class="col-sm-7">
											<span class="form-control form-control-text">€ 46,80</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Versandart</strong></label>						
										<div class="col-sm-7">
											<span class="form-control form-control-text">Abholung</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Zahlungsart</strong></label>						
										<div class="col-sm-7">
											<span  class="form-control form-control-text">Barzahlung bei Abholung</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Laborversand</strong></label>						
										<div class="col-sm-7">
											<span  class="form-control form-control-text">Weiterversand durch den Fotografen</span>
										</div>
									</div>

									<hr/>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Kunden Komentar</strong></label>						
										<div class="col-sm-7">
											<span class="form-control form-control-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
										</div>
									</div>
								</div>
							</div>
						</div>						
						
					</div>
					
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default" data-collapsed="1"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Interne Notiz</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						</div>
					</div>	
					<!-- panel body -->
					<div class="panel-body">		
						<div class="row">
							<div class="col-sm-12">
								<form role="form" method="post">
									<div class="form-group">
										<textarea class="form-control wysihtml5" data-stylesheet-url="<?php siteInfo('template_url'); ?>/css/wysihtml5-color.css" name="sample_wysiwyg" id="sample_wysiwyg"></textarea>
									</div>	
									<button type="button" class="btn btn-green btn-icon icon-left">
										Notiz speichem
										<i class="entypo-check"></i>
									</button>									
								</form>
							</div>
						</div>						
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
							<!-- panel head -->
							<div class="panel-heading">
								<div class="panel-title">Kundendaten</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								</div>
							</div>	
							<!-- panel body -->
							<div class="panel-body">		
								<div class="row">
									<div class="col-sm-12">
										<div class="form-horizontal form-groups ">
											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>Name</strong></label>						
												<div class="col-sm-7">
													<span  class="form-control form-control-text">Frau Klaudia Musil</span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>Adresse</strong></label>						
												<div class="col-sm-7">
													<span class="form-control form-control-text">Traunstraße 28 <br/>2120 Wolkersdorf <br/>Österreich</span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>Rufnummer</strong></label>						
												<div class="col-sm-7">
													<span  class="form-control form-control-text">069911145395</span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>E-Mail</strong></label>						
												<div class="col-sm-7">
													<span  class="form-control form-control-text">karin.hiebenner@fotosemrad.at</span>
												</div>
											</div>

											<hr/>

											<div class="form-group">
												<label class="col-sm-5 control-label"></label>						
												<div class="col-sm-7">
                                                    <button type="button" onclick="jQuery('#modal-kunden-bearbeiten-Lieferadresse').modal('show');" class="btn btn-blue btn-icon icon-left">
                                                        Kundendaden bearbeiten
                                                        <i class="entypo-pencil"></i>
                                                    </button>
												</div>
											</div>
										</div>
									</div>
								</div>						
								
							</div>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
							<!-- panel head -->
							<div class="panel-heading">
								<div class="panel-title">Lieferadresse</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								</div>
							</div>	
							<!-- panel body -->
							<div class="panel-body">		
								<div class="row">
									<div class="col-sm-12">
										<div class="form-horizontal form-groups ">
											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>Name</strong></label>						
												<div class="col-sm-7">
													<span  class="form-control form-control-text">Frau Klaudia Musil</span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>Adresse</strong></label>						
												<div class="col-sm-7">
													<span class="form-control form-control-text">Traunstraße 28 <br/>2120 Wolkersdorf <br/>Österreich</span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-5 control-label"><strong>Rufnummer</strong></label>						
												<div class="col-sm-7">
													<span  class="form-control form-control-text">069911145395</span>
												</div>
											</div>

										
											<hr/>

											<div class="form-group">
												<label class="col-sm-5 control-label"></label>						
												<div class="col-sm-7">
                                                    <button type="button" onclick="jQuery('#modal-kunden-bearbeiten-Lieferadresse').modal('show');" class="btn btn-blue btn-icon icon-left">
                                                        Lieferadresse bearbeiten
                                                        <i class="entypo-pencil"></i>
                                                    </button>
												</div>
											</div>
										</div>
									</div>
								</div>						
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="btn-bar bs-example row">

<div class="col-xs-4 clearfix left-bar">

</div>

<div class="col-xs-8 clearfix right-bar">
	<div class="btn-group btn-select pull-right">
        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
            Bilder herunterladen<i class="entypo-down-open"></i>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#"> Ausgewählte Bilder</a></li>
            <li><a href="#"> Nur Downloads </a></li>
            <li><a href="#"> Das ganze Album </a></li>
        </ul>
    </div>
    
</div>    
   
</div>

<div class="row">
	<div class="col-sm-12">
		
        <div class="dataTables_wrapper form-inline" role="grid">
             
			<table class="table table-bordered datatable display" id="table-2" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</th>
						<th>Bild</th>
						<th>Bildnummer</th>
						<th>Porduktart</th>
						<th>Check / Größe</th>
						<th>Labor</th>
						<th>Stück</th>
						<th>Ihr Erlös</th>
						<th>Preis</th>
						<th>Aktion</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>
							<div class="cropped">
								<a href="#" class="thumb">
									<img src="assets/images/img-thumb.jpg" />
									<div class="overlay left" style="width:28%;"></div>
									<div class="overlay right" style="width:34%;"></div>
								</a>
							</div>
						</td>
						<td>
							se4090.jpg<br/>
							<small class="text-primary"><i class="entypo-download"></i> 12 Downloads</small><br/>
							<small class="text-primary"><i class="entypo-clock"></i> 30.04.2014</small>
						</td>
						<td>
							Abzug<br/>
							<small class="text-primary">Lambda-Abzug auf Fuji Crystal DP II Glanz</small>
						</td>
						<td>
							<i class="entypo-cancel "></i>  20 x 10 cm<br/>
							<small class="text-primary">203 x 105, 300 dpi</small>
						</td>
						<td class="lab-status">
							Fotolabor<br/>
							<span class="badge badge-danger tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Warte auf Upload">Warte auf Upload</span>
						</td>
						<td>1 Stk</td>
						<td>€ 19,00</td>
						<td>€ 19,90</td>
						<td >
							<button type="button" class="btn btn-red btn-fullwidth btn-icon icon-left">
								Upload erforderlich
								<i class="entypo-upload"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>
							<div class="cropped">
								<a href="#" class="thumb">
									<img src="assets/images/img-thumb.jpg" />
									<div class="overlay left" style="width:15%;"></div>
									<div class="overlay right" style="width:15%;"></div>
								</a>
							</div>
						</td>
						<td>
							se4090.jpg<br/>
							<small class="text-primary"><i class="entypo-download"></i> Download</small>
						</td>
						<td>
							Abzug<br/>
							<small class="text-primary">Lambda-Abzug auf Fuji Crystal DP II Glanz</small>
						</td>
						<td>
							<i class="fa fa-warning c-yellow"></i>  20 x 10 cm<br/>
							<small class="text-primary">203 x 105, 300 dpi</small>
						</td>
						<td class="lab-status">
							Fotolabor<br/>
							<span class="badge badge-danger tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Warte auf Upload">Warte auf Upload</span>
						</td>
						<td>1 Stk</td>
						<td>€ 19,00</td>
						<td>€ 19,90</td>
						<td >
							<button type="button" class="btn btn-red btn-fullwidth btn-icon icon-left">
								Upload erforderlich
								<i class="entypo-upload"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>
							<div class="cropped">
								<a href="#" class="thumb">
									<img src="assets/images/img-thumb.jpg" />
								</a>
							</div>
						</td>
						<td>
							se4090.jpg<br/>
							<small class="text-primary"><i class="entypo-download"></i> Download</small>
						</td>
						<td>
							Abzug<br/>
							<small class="text-primary">Lambda-Abzug auf Fuji Crystal DP II Glanz</small>
						</td>
						<td>
							<i class="entypo-check c-green"></i> 2000 px<br/>
							<small class="text-primary">2000px, 72 dpi</small>
						</td>
						<td>
							Fotolabor<br/>
							<span class="badge badge-danger tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Warte auf Upload">Warte auf Upload</span>
						</td>
						<td>1 Stk</td>
						<td>€ 19,00</td>
						<td>€ 19,90</td>
						<td>
							<button type="button" class="btn btn-default btn-fullwidth btn-icon icon-left">
								Upload wiederholen
								<i class="entypo-upload"></i>
							</button>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="8" class="text-right"><strong>Versandkosten</strong></td>
						<td colspan="4"><strong>€ 6,90</strong></td>
					</tr>
					<tr>
						<td colspan="8" class="text-right"><strong>Summe inkl. 20% MwSt</strong></td>
						<td colspan="4"><strong>€ 66,80</strong></td>
					</tr>
				</tfoot>
			</table>
            
            
			<script type="text/javascript">
            jQuery(window).load(function()
            {
                var $ = jQuery;
				
                $("#table-2").dataTable({
                    "sPaginationType": "bootstrap",
					"bPaginate": false,
					"bInfo": false,
                    "sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
                    "bStateSave": false,
                    "iDisplayLength": 8,
                    "aoColumns": [
                        { "bSortable": false, "sWidth": "35px", "sClass": "col-checkbox text-center" },
                        { "sClass": "col-image", "sWidth": "78px" },
                        { "sClass": "col-image-number" },
                        { "sClass": "col-produkt" },
						{ "sClass": "col-check text-nowrap" },
						{ "sClass": "col-lab" },
                        { "sClass": "col-piece text-nowrap" },
                        { "sClass": "col-profit text-nowrap" },
						{ "sClass": "col-price text-nowrap" },
						{ "sClass": "col-action", "sWidth": "185px", }
                    ],
                });
                
                $(".dataTables_wrapper select").select2({
                    minimumResultsForSearch: -1
                });
                
                // Highlighted rows
                $("#table-2 tbody input[type=checkbox]").each(function(i, el)
                {
                    var $this = $(el),
                        $p = $this.closest('tr');
                    
                    $(el).on('change', function()
                    {
                        var is_checked = $this.is(':checked');
                        
                        $p[is_checked ? 'addClass' : 'removeClass']('highlight');
                    });
                });
                
                // Replace Checboxes
                $(".pagination a").click(function(ev)
                {
                    replaceCheckboxes();
                });
			
            });
                
            // Sample Function to add new row
            var giCount = 1;
            
            function fnClickAddRow() 
            {
                $('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
                
                replaceCheckboxes(); // because there is checkbox, replace it
                
                giCount++;
            }
            </script>
            
		</div>
	</div>
</div>





