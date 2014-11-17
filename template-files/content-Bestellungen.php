<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
<h2 class="page-title">Bestellungen</h2>
<div class="panel panel-primary">
	<div class="panel-heading paddup">		
		<div class="row  refined">
			<div class="col-lg-6 col-sm-6">							
				<form class="form-horizontal form-groups-bordered">
					<div class="row refined">																				
						<div class="col-sm-4 col-lg-3 max-sm">
							<select name="test" class="selectboxit">	
								<option value="10">10</option>						
								<option value="20">20</option>						
								<option value="30">30</option>				
							</select>
						</div>
						<label for="field-1" class="col-sm-5 control-label align-left">records per page</label>												
					</div>
				</form>			
			</div>	
			<div class="col-lg-6 col-sm-6">	
				<form class="form-horizontal form-groups-bordered">
					<div class="row  refined">
						<div class="col-sm-6">
							<div class="row refined">
								<label for="field-1" class="col-sm-3 control-label">Search:</label>								
								<div class="col-sm-9">
									<input type="text" class="form-control" id="field-1" >
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<select name="test" class="selectboxit">							
								<optgroup label="Status wahlen">
									<option value="10">Status wahlen</option>						
									<option value="20">20</option>						
									<option value="30">30</option>	
								</optgroup>					
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		
	<table class="table orders table-condensed table-bordered table-hover table-striped table-responsive nowrap">
		<thead>
			<tr>
				<th class="id visible-lg">ID</th>
				<th class="date">Datum</th>
				<th class="name">Name</th>
				<th class="printing-company">Labor</th>
				<th class="your-profit">hr Erlös</th>
				<th class="price">Preis</th>
				<th class="status">Status</th>
				<th class="action visible-lg">Aktion</th>
			</tr>
		</thead>			
		<tbody>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-danger" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"><span class="visible-ib-lg">Warte auf Upload</span></span></td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon ">
						<button type="button" class="btn btn-red btn-sm btn-parallel">	<i class="entypo-upload"></i> 2 Uploads erforderlich</button>
						
						<button type="button" class="btn btn-red btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>

										
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>

			</tr>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-warning" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"><span class="visible-ib-lg">Warte auf Upload</span></span> </td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon">
						<button type="button" class="btn btn-black btn-sm btn-parallel"><i class="entypo-block"></i> 2 Uploads erforderlich</button>
						
						<button type="button" class="btn btn-black btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>
			</tr>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-danger" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"><span class="visible-ib-lg">Warte auf Upload</span></span></td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon">
						<button type="button" class="btn btn-default btn-sm btn-parallel"><i class="entypo-flag"></i> Status wahlen</button>
						
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>					
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>
			</tr>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-danger" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"><span class="visible-ib-lg">Warte auf Upload</span></span></td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon">
						<button type="button" class="btn btn-gold btn-sm btn-parallel"><i class="entypo-clock"></i> Status wahlen</button>
						
						<button type="button" class="btn btn-gold btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>
			</tr>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-danger" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"><span class="visible-ib-lg">Warte auf Upload</span></span></td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon">
						<button type="button" class="btn btn-blue btn-sm btn-parallel"><i class="entypo-home"></i> Status wahlen</button>
						
						<button type="button" class="btn btn-blue btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>
			</tr>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-blue" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"><span class="visible-ib-lg">Warte auf Upload</span></span></td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon">
						<button type="button" class="btn btn-blue btn-sm btn-parallel"><i class="entypo-direction"></i> Status wahlen</button>
						
						<button type="button" class="btn btn-blue btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>
			</tr>
			<tr>
				<td class="id visible-lg">546</td>
				<td>29.07.2014 15:21</td>
				<td>Claudia Musil <span class="label label-info visible-ib-lg">3 Produkte</span></td>
				<td>Fotolabor <span class="label label-success" data-toggle="tooltip" data-original-title="Warte auf Upload" data-placement="top"> <span class="visible-ib-lg">Warte auf Upload</span></span></td>
				<td>€ 46,80</td>
				<td>€ 66,80</td>
				<td>
					<div class="btn-group both-icon">
						<button type="button" class="btn btn-green btn-sm btn-parallel"><i class="entypo-check"></i> Status wahlen</button>
						
						<button type="button" class="btn btn-green btn-sm dropdown-toggle" data-toggle="dropdown">
							<i class="entypo-down"></i>
						</button>
						
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><i class="entypo-upload"></i> 3 Uploads erfoderlich</a></li>
							<li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
							<li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
							<li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
							<li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
						</ul>
					</div>
				</td>
				<td class="action visible-lg">
					<a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste-file.php" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-search"></i>
						Ubersicht
					</a>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="panel-footer with-paginate">
		<div class="row">
			<div class="col-xs-6 col-left">
				<div class="dataTables_info" id="table-4_info">Showing 1 to 10 of 57 entries</div>
			</div>
			<div class="col-xs-6 col-right">
				<div class="dataTables_paginate paging_bootstrap">
					<ul class="pagination pagination-sm">
						<li class="prev disabled"><a href="#"><i class="entypo-left-open"></i></a></li>
						<li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#"><i class="entypo-right-open"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
