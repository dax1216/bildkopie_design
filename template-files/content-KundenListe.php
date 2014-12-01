<div class="btn-bar bs-example row">
	<div class="col-xs-4 clearfix left-bar">
	    <button type="button" class="btn btn-white"><i class="entypo-reply"></i></button>
	</div>       
</div>

	<table class="table table-bordered datatable" id="table-2">
		<thead>
			<tr>
				<th>Name</th>
				<th>Straße</th>
				<th>Ort</th>
				<th>Land</th>
				<th>Telefon</th>
				<th>Aktion</th>
			</tr>
		</thead>			
		<tbody>
			<tr>
				<td>Frau Claudia Musil</td>
				<td>Schlossgasse 10</td>
				<td>2213 Bockfließ</td>
				<td>Österreich</td>
				<td>0664-5308695</td>
				<td>
					<div class="btn-group btn-select pull-right">
						<button type="button" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" onclick="jQuery('#modal-kunden-bearbeiten').modal('show');"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Bestellungen-Liste.php"><i class="entypo-basket"></i> Bestellungen</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Kunden-Nachricht-Liste.php"><i class="entypo-mail"></i> Nachrichten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
						</ul>
					</div>	
				</td>
			</tr>
			<tr>
				<td>Frau Karin Hiebener</td>
				<td>Traunstr.28</td>
				<td>2120 Wolkersdorf</td>
				<td>Österreich</td>
				<td>0699_11145395</td>
				<td>
					<div class="btn-group btn-select pull-right">
						<button type="button" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" onclick="jQuery('#modal-kunden-bearbeiten').modal('show');"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Bestellungen-Liste.php"><i class="entypo-basket"></i> Bestellungen</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Kunden-Nachricht-Liste.php"><i class="entypo-mail"></i> Nachrichten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
						</ul>
					</div>	
				</td>
			</tr>
			<tr>
				<td>Herr Andrea Kellner</td>
				<td>Schillerstraße 34</td>
				<td>2263 Dürnkrut</td>
				<td>Österreich</td>
				<td>0699 16050109</td>
				<td>
					<div class="btn-group btn-select pull-right">
						<button type="button" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" onclick="jQuery('#modal-kunden-bearbeiten').modal('show');"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Bestellungen-Liste.php"><i class="entypo-basket"></i> Bestellungen</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Kunden-Nachricht-Liste.php"><i class="entypo-mail"></i> Nachrichten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
						</ul>
					</div>	
				</td>
			</tr>
			<tr>
				<td>Herr Dr. Karl Ennsfellner</td>
				<td>In Kirchbergen 16</td>
				<td>2120 Wolkersdorf</td>
				<td>Österreich</td>
				<td>0699 16050109</td>
				<td>
					<div class="btn-group btn-select pull-right">
						<button type="button" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" onclick="jQuery('#modal-kunden-bearbeiten').modal('show');"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Bestellungen-Liste.php"><i class="entypo-basket"></i> Bestellungen</a></li>
							<li><a href="<?php siteInfo('url'); ?>/backend_photographer/Kunden-Nachricht-Liste.php"><i class="entypo-mail"></i> Nachrichten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
						</ul>
					</div>	
				</td>
			</tr>
		</tbody> 
	</table>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		var table = $("#table-2").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
            	"aButtons": [
	                "xls",
	                "print"
	            ]
	        },
	        'bAutoWidth':false,
	        "aoColumns":[
	        {},
	        {},
	        {},
	        {},
	        {},
	        {"sWidth": "131px"}
	        ]
			
		});

		// Replace Checboxes
		$(".pagination a").click(function(ev)
		{
			replaceCheckboxes();
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>