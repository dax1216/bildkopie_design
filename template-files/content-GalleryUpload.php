<h3>
	<strong>Bilder uploaden</strong>
	<br />
	<small>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. </small>
</h3>
<br />
	
<form action="data/upload-file.php" class="dropzone gallery" id="dropzone_example">
	<div class="fallback">
		<input name="file" type="file" multiple />
	</div>
</form>

<div id="dze_info" class="hidden">	
	<br />
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="panel-title">Dropzone Uploaded Files Info</div>
		</div>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="40%">File name</th>
					<th width="15%">Size</th>
					<th width="15%">Type</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" align="right"></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>