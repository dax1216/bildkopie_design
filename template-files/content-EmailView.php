<button type="button" class="btn btn-default"><i class="entypo-reply"></i></button>
<h2 class="page-title">Nachrichten - Claudia Musil </h2>
<div class="mail-env">
	<!-- compose new email button -->
	<div class="mail-sidebar-row visible-xs">
		<a href="#" class="btn btn-success btn-icon btn-block">
			Neue Nachricht schrelben
			<i class="entypo-pencil"></i>
		</a>
	</div>
	
	<!-- Mail Body -->
	<?php get_template_part('EmailViewMessage'); ?>
	
	<!-- Sidebar -->
	<?php get_template_part('EmailSidebar'); ?>
	
</div>