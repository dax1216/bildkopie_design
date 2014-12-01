<table class="table table-bordered datatable" id="table-3">
	<thead>
		<tr>
			<th>Datum</th>
			<th>Beschreibung</th>
			<th>Bestellsumme</th>
			<th>Produktionskosten</th>
			<th>Servicegebühr</th>
			<th>Auszahlungsbetrag</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>15.08.2014</td>
			<td>Bestellungen aus Ihrem Shop <span class="badge badge-info visible-ib-lg">1 Bestellung</span></td>
			<td>99,00</td>
			<td>€ -15,33</td>
			<td> -15,33</td>
			<td>€ 15,33</td>
		</tr>
		<tr>
			<td>11.08.2014</td>
			<td>Bestellungen aus Ihrem Shop <span class="badge badge-info visible-ib-lg">3 Bestellung</span></td>
			<td>99,00</td>
			<td>€ -15,33</td>
			<td> -15,33</td>
			<td>€ 15,33</td>
		</tr>
		<tr>
			<td>09.08.2014</td>
			<td>Bestellungen aus Ihrem Shop <span class="badge badge-info visible-ib-lg">9 Bestellung</span></td>
			<td>99,00</td>
			<td>€ -15,33</td>
			<td> -15,33</td>
			<td>€ 15,33</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2"></td>
			<td>€ 760,00</td>
			<td>€ -350,80</td>
			<td>€ -66,00</td>
			<td>€ 460,00</td>
		</tr>
		<tr>
			<td colspan="4"></td>
			<td>Ihr Auszahlungbetrag</td>
			<td>€ 480,00</td>
		</tr>
	</tfoot>
</table>

<br/>
<h3 class="section-title">Ihre Rechnungen von Bildkopie</h3>
<table class="table table-bordered datatable" id="table-2">
	<thead>
		<tr>
			<th>Datum</th>
			<th>Beschreibung</th>
			<th>Aktion</th>
		</tr>
	</thead>		
	<tbody>
		<tr>
			<td>15.08.2014</td>
			<td>Rechnung #123545</td>
			<td>
				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-search"></i>
					Vorschau
				</a>				
				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-print"></i>
					Druken
				</a>				
				<a href="#" class="btn btn-blue btn-sm btn-icon icon-left">
					<i class="entypo-download"></i>
					Download
				</a>
			</td>
		</tr>
		<tr>
			<td>15.08.2014</td>
			<td>Rechnung #123545</td>
			<td>
				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-search"></i>
					Vorschau
				</a>				
				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-print"></i>
					Druken
				</a>				
				<a href="#" class="btn btn-blue btn-sm btn-icon icon-left">
					<i class="entypo-download"></i>
					Download
				</a>
			</td>
		</tr>
		<tr>
			<td>15.08.2014</td>
			<td>Rechnung #123545</td>
			<td>
				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-search"></i>
					Vorschau
				</a>				
				<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-print"></i>
					Druken
				</a>				
				<a href="#" class="btn btn-blue btn-sm btn-icon icon-left">
					<i class="entypo-download"></i>
					Download
				</a>
			</td>
		</tr>				
</table>

<script type="text/javascript">
	
jQuery(document).ready(function($)
{
	var table = $("#table-3").dataTable({
		"sPaginationType": "bootstrap",
		//"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
		"sDom": " <'row' <'col-xs-6 col-left'<'monthpicker dataTables_length'and'>' '> <'col-xs-6 col-right'<'export-data'T>f>r> t <'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p> > ",
		"bAutoWidth":false,
		"oTableTools": {
			"aButtons": [
				"xls",
				"print",
			]
		},
		"aoColumns":[
		{"sWidth": "106px"},
		{"sWidth": "605px"},
			{},
			{},
			{},
			{}
		]
	});
	
	$("#table-3_wrapper div.monthpicker").html('<label><div class="daterange daterange-inline" data-format="MMMM D, YYYY" data-start-date="March 13, 2014" data-end-date="March 27, 2014"><i class="entypo-calendar"></i><span>March 13, 2014 - March 27, 2014</span></div></label>');	

	// Add event listeners to the two range filtering inputs
	$('#min').keyup( function() { table.draw(); } );
	$('#max').keyup( function() { table.draw(); } );

	$("#table-2").dataTable({
		"sPaginationType": "bootstrap",
		//"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
		"sDom": " <'row' <'col-xs-6 col-left'<'monthpicker dataTables_length'and'>' '> <'col-xs-6 col-right'<'export-data'T>f>r> t <'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p> > ",
		"bLengthChange": false,
		"bAutoWidth":false,
		"oTableTools": {
			"aButtons": [
				"xls",
				"print",
			]
		},
		"aoColumns":[
			{"sWidth": "106px"},
			{},
			{"sWidth": "321px"}
		]
		
		});
		
	$("#table-2_wrapper div.monthpicker").html('<label><div class="daterange daterange-inline" data-format="MMMM D, YYYY" data-start-date="March 13, 2014" data-end-date="March 27, 2014"><i class="entypo-calendar"></i><span>March 13, 2014 - March 27, 2014</span></div></label>');	
		
	
	// Replace Checboxes
	$(".pagination a").click(function(ev) {
		replaceCheckboxes();
	});

	$(".dataTables_wrapper select").select2({
		minimumResultsForSearch: -1
	});
});
		
</script>