<div class="dataTables_wrapper form-inline" role="grid">
	<table id="table-6" class="table table-bordered datatable display" >
		<thead>
			<tr>
				<th width="54">Status</th>
				<th>Titel</th>
				<th width="122">Aktion</th>
			</tr>
		</thead>			
		<tbody>
			<tr>
				<td class="middle-align"><span class="label label-success"> <i class="entypo-check"></i> </span> </td>
				<td class="middle-align">Events 2014 <span class="badge badge-info">23 Alben zugewiesen</span></td>
				<td class="middle-align">
					<div class="btn-group btn-select pull-right">
				        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
				        <ul class="dropdown-menu" role="menu">
				            <li><a href="#" class="edit-category"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
				        </ul>
				    </div>	
				</td>
			</tr>
			<tr>
				<td class="middle-align"><span class="label  label-danger"> <i class="entypo-cancel-circled"></i></span></td>
				<td class="middle-align">Events 2014 <span class="badge badge-info">23 Alben zugewiesen</span></td>
				<td class="middle-align">
					<div class="btn-group btn-select pull-right">
				        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
				        <ul class="dropdown-menu" role="menu">
				            <li><a href="#" class="edit-category"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
				        </ul>
				    </div>	
				</td>
			</tr>
			<tr>
				<td class="middle-align"><span class="label label-success"> <i class="entypo-check"></i> </span> </td>
				<td class="middle-align">Events 2014 <span class="badge badge-info">23 Alben zugewiesen</span></td>
				<td class="middle-align">
					<div class="btn-group btn-select pull-right">
				        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
				            Aktion wählen <i class="entypo-down-open"></i>
				        </button>
				        <ul class="dropdown-menu" role="menu">
				            <li><a href="#" class="edit-category"><i class="entypo-pencil"></i> Bearbeiten</a></li>
							<li><a href="#"><i class="entypo-trash"></i> Löschen</a></li>
				        </ul>
				    </div>	
				</td>
			</tr>
		</tbody>
	</table>
</div>
	


<script type="text/javascript">
var responsiveHelper;
var breakpointDefinition = {
    tablet: 1024,
    phone : 480
};
var tableContainer;

	jQuery(document).ready(function($)
	{
		tableContainer = $("#table-6");

		tableContainer.dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true,		
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



