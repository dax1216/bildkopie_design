	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/select2/select2.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/icheck/skins/polaris/polaris.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/dropzone/dropzone.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/wysihtml5/bootstrap-wysihtml5.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/jcrop/jquery.Jcrop.min.css">
	
	<!-- Bottom Scripts -->
	<script src="<?php siteInfo('template_url'); ?>/js/gsap/main-gsap.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/joinable.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/resizeable.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-api.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap-switch.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/jquery.dataTables.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/datatables/TableTools.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/dataTables.bootstrap.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/datatables/lodash.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/datatables/responsive/js/datatables.responsive.js"></script>
    <script src="<?php siteInfo('template_url'); ?>/js/datatables/jquery.dataTables.rowReordering.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/wysihtml5/wysihtml5-0.4.0pre.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/wysihtml5/bootstrap-wysihtml5.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/select2/select2.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap-tagsinput.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/typeahead.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/daterangepicker/moment.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/daterangepicker/daterangepicker.js"></script>
    <script src="<?php siteInfo('template_url'); ?>/js/tocify/jquery.tocify.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/jquery.multi-select.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/icheck/icheck.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/toastr.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-custom.js"></script>
    <script src="<?php siteInfo('template_url'); ?>/js/bootstrap-tabdrop.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-demo.js"></script>

	<?php  get_template_part('ModalKundenBearbeiten'); ?>

	<!--  Scripts Drop Files -->
	<script src="<?php siteInfo('template_url'); ?>/js/joinable.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/fileinput.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/dropzone/dropzone.js"></script>

	
	<script>
		
    </script>
    
	<script type="text/javascript">
		
		jQuery(function(){
			// dropdown tab - responsive
			$('.nav-pills, .nav-tabs').tabdrop()
			// TEST TEST TEST remove the checkbox class
			$( ".checkbox > label" ).click(function() {
				$( ".alert" ).removeClass( "alert-danger" ).addClass( "alert-success" );		 
				$( ".alert > .checkbox" ).removeClass( "color-red" ).addClass( "color-green" );
			});
		});
    </script>
	
	<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			$('input.icheck').iCheck({
				checkboxClass: 'icheckbox_minimal',
				radioClass: 'iradio_minimal'
			});	

		});
	</script>

	<script type="text/javascript">
	jQuery(document).ready(function($)
		{
			if(isMyStuffScrolling()){
				jQuery('body').addClass('scroll');
			  }else{
				jQuery('body').addClass('no-scroll');
			}
		});

		function isMyStuffScrolling() {
		  var docHeight = $(document).height();
		  var scroll    = $(window).height() ;//+ $(window).scrollTop();
		  if(docHeight > scroll) return true;
		  else return false;
		}
	</script>


	<script type="text/javascript">
		jQuery(function(){
			var h = jQuery(window).height() - 195;
			jQuery('.modal .modal-body.resize').css('height',h+'px');
		})

		jQuery(window).resize(function() {
			var h = jQuery(window).height() - 195;
			jQuery('.modal .modal-body.resize').css('height',h+'px');
		});
	</script>
    
	<!-- Bottom Scripts -->
	<script src="<?php siteInfo('template_url'); ?>/js/jcrop/jquery.Jcrop.min.js"></script>

</body>
</html>

