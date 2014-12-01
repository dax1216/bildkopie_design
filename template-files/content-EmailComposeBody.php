<div class="mail-body">
		
		<div class="mail-header">
			<!-- title -->
			<div class="mail-title">
				Neue Nachricht schreiben <i class="entypo-pencil"></i>
			</div>
			
			<!-- links -->
			<div class="mail-links">
			
				<a href="<?php siteInfo('url');?>/backend_photographer/Kunden-Nachricht-Liste" class="btn btn-default">
					<i class="entypo-cancel"></i>
				</a>
				
				<a class="btn btn-success btn-icon">
					Nachrincht sendan
					<i class="entypo-mail"></i>
				</a>
				
			</div>
		</div>
		
		<div class="mail-compose">
		
			<form method="post" role="form">
				
				<div class="compose-message-editor">
					<textarea class="form-control wysihtml5" data-stylesheet-url="<?php siteInfo('template_url');?>css/wysihtml5-color.css" name="sample_wysiwyg" id="sample_wysiwyg"></textarea>
				</div>
				<br/>
				<p class="browse-file"><input type="file" class="form-control file2 inline btn btn-primary" multiple data-label="<i class='entypo-up-circled'></i> &nbsp;Browse Files" /> 5 files</p>
				
			</form>
		
		</div>
		
	</div>