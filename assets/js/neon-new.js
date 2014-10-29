jQuery(document).ready(function($)
{
	$('input.icheck').iCheck({
		checkboxClass: 'icheckbox_minimal',
		radioClass: 'iradio_minimal'
	});
	
	$('input.icheck-2').iCheck({
		checkboxClass: 'icheckbox_minimal-green',
		radioClass: 'iradio_minimal-blue'
	});
});


jQuery(document).ready(function($)
{
	var icheck_skins = $(".icheck-skins a");
	
	icheck_skins.click(function(ev)
	{
		ev.preventDefault();
		
		icheck_skins.removeClass('current');
		$(this).addClass('current');
		
		updateiCheckSkinandStyle();
	});
	
	$("#icheck-style").change(updateiCheckSkinandStyle);
});
	
function updateiCheckSkinandStyle()
{
	var skin = $(".icheck-skins a.current").data('color-class'),
		style = $("#icheck-style").val();
	
	var cb_class = 'icheckbox_' + style + (skin.length ? ("-" + skin) : ''),
		rd_class = 'iradio_' + style + (skin.length ? ("-" + skin) : '');
	
	if(style == 'futurico' || style == 'polaris')
	{
		cb_class = cb_class.replace('-' + skin, '');
		rd_class = rd_class.replace('-' + skin, '');
	}
	
	$('input.icheck-2').iCheck('destroy');
	$('input.icheck-2').iCheck({
		checkboxClass: cb_class,
		radioClass: rd_class
	});
}