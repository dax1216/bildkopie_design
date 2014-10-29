<?php	require_once 'includes/Template.php'; ?>
<?php get_header(); ?>
	<?php get_sidebar(); ?>
	
	<div class="main-content">
		
	<?php get_template_part('toolbar'); ?>

<script type="text/javascript">
jQuery(document).ready(function($) 
{
	// Sample Toastr Notification
	setTimeout(function()
	{			
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
			"toastClass": "black",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};

		toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
	}, 3000);
	
	
	// Sparkline Charts
	$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
	$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
	$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
	$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
	$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
	$('.linechart').sparkline();
	$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
	$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
	
	
	$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
		type: 'bar',
		barColor: '#485671',
		height: '80px',
		barWidth: 10,
		barSpacing: 2
	});	
	
	
	// JVector Maps
	var map = $("#map");
	
	map.vectorMap({
		map: 'europe_merc_en',
		zoomMin: '3',
		backgroundColor: '#383f47',
		focusOn: { x: 0.5, y: 0.8, scale: 3 }
	});		
	
			
	
	// Revenu Charts
	var revenu_chart_demo = $("#revenu-chart-demo");
	
	revenu_chart_demo.parent().show();
	var revenu_chart = Morris.Line({
		element: 'revenu-chart-demo',
		data: [
			{ y: '2006', a: 20, b: 15 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 25,  b: 15 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['October 2013', 'November 2013'],
		redraw: true
	});
	
	revenu_chart_demo.parent().attr('style', '');

	// orders Charts
	var orders_chart_demo = $("#orders-chart-demo");

	orders_chart_demo.parent().show();	
	var orders_chart = Morris.Line({
		element: 'orders-chart-demo',
		data: [
			{ y: '2006', a: 50, b: 90 },
			{ y: '2007', a: 45,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['October 2013', 'November 2013'],
		redraw: true
	});
	
	orders_chart_demo.parent().attr('style', '');

	// pageview Charts
	var pageview_chart_demo = $("#pageview-chart-demo");

	pageview_chart_demo.parent().show();
	var pageview_chart = Morris.Line({
		element: 'pageview-chart-demo',
		data: [
			{ y: '2006', a: 30, b: 90 },
			{ y: '2007', a: 25,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['October 2013', 'November 2013'],
		redraw: true
	});
	
	pageview_chart_demo.parent().attr('style', '');


	// visitors Charts
	var visitors_chart_demo = $("#visitors-chart-demo");
	
	visitors_chart_demo.parent().show();
	var visitors_chart = Morris.Line({
		element: 'visitors-chart-demo',
		data: [
			{ y: '2006', a: 100, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 70, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['October 2013', 'November 2013'],
		redraw: true
	});
	
	visitors_chart_demo.parent().attr('style', '');
	
});


function getRandomInt(min, max) 
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>


<div class="row">
	<div class="col-sm-3">
	
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-upload"></i></div>
			<div class="num">3</div>
			
			<h3>Uploads erfoderlich</h3>
			<p>Lorem ipsum dolor sit amet.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num">8</div>
			
			<h3>Neue Bestellungen</h3>
			<p>Lorem ipsum dolor sit amet.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-credit-card"></i></div>
			<div class="num">€ 456,96</div>
			
			<h3>Ihr Kontostand</h3>
			<p>Sie haben</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-floppy"></i></div>
			<div class="num">13%</div>			
			<h3>Speicher verbraucht</h3>
			<p>Sie haben noc 4,6 GB von 50 GB</p>
		</div>
		
	</div>
</div>

<br />

<div class="row">
	<div class="col-sm-4">
		<div class="pad-20 bg-gray package">
			<div class="row clearfix">
				<div class="col-sm-7 widget-title">
					<h1>Premium Paket</h1>
					<small>50 GB Datenvolumen</small>
				</div>
				<div class="col-sm-5 status ">
					<h3>nicht aktiv <i class="entypo-cancel"></i></h3>
				</div>	
				<div class="clearfix"></div>
				<div class="col-sm-12">
					<div class="notice">
						Pellentesque eu urna tristique, laoreet magna a, hendrerit dolor. Donec imperdiet scelerisque velit. Vivamus efficitur, dolor eu vestibulum hendrerit, lacus orci dapibus magna, quis suscipit mi justo sit amet metus.
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-sm-12 button-group">
					<button type="button" class="btn btn-red btn-icon btn-lg">
						Shopdetails
						<i class="entypo-cancel"></i>
					</button>
					<button type="button" class="btn btn-red btn-icon btn-lg">
						Firmendaten
						<i class="entypo-cancel"></i>
					</button>
					<button type="button" class="btn btn-green btn-icon btn-lg">
						Abrechnungseinstellungen
						<i class="entypo-check"></i>
					</button>
				</div>
			</div>
			<div class="row package-footer">
				<div class="used-holder">
					<div class="used" style="width:13%;">&nbsp;</div>
				</div>
				<p class="align-right"><strong>13% verbraucht</strong><br/>
				<small>Sie haben noch 4,58 GB von GB frei</small></p>
			</div>
		</div>
	</div>
	<div class="col-sm-8">	
		<div class="panel panel-primary" id="charts_env">		
			<div class="panel-heading">
				<div class="panel-date-picker">
					<div class="daterange daterange-inline add-ranges" data-format="MMMM D, YYYY" data-start-date="March 18, 2014" data-end-date="April 3, 2014">
						<i class="entypo-calendar"></i>
						<span>March 18, 2014 - April 3, 2014</span>
					</div>
				</div>
				
				<div class="panel-options">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#revenu-chart" data-toggle="tab">Umsats</a></li>
						<li class=""><a href="#orders-chart" data-toggle="tab">Bestelungen</a></li>
						<li class=""><a href="#pageview-chart" data-toggle="tab">Pageviews</a></li>
						<li class=""><a href="#visitors-chart" data-toggle="tab">Unique Visitors</a></li>
					</ul>
				</div>
			</div>
	
			<div class="panel-body">
			
				<div class="tab-content">
				
					<div class="tab-pane active" id="revenu-chart">							
						<div id="revenu-chart-demo" class="morrischart" style="height: 300px"></div>
					</div>
					
					<div class="tab-pane " id="orders-chart">
						<div id="orders-chart-demo" class="morrischart" style="height: 300px"></div>
					</div>
					
					<div class="tab-pane" id="pageview-chart">
						<div id="pageview-chart-demo" class="morrischart" style="height: 300px;"></div>
					</div>

					<div class="tab-pane" id="visitors-chart">
						<div id="visitors-chart-demo" class="morrischart" style="height: 300px;"></div>
					</div>
					
				</div>
				
			</div>

			<table class="table table-bordered table-responsive">

				<thead>
					<tr>
						<th width="50%" class="col-padding-1">
							<div class="pull-left">
								<div class="h4 no-margin"><strong>Pageviews</strong></div>
								<small>54,127</small>
							</div>
							<span class="pull-right pageviews">4,3,5,4,5,6,5</span>
							
						</th>
						<th width="50%" class="col-padding-1">
							<div class="pull-left">
								<div class="h4 no-margin"><strong>Unique Visitors</strong></div>
								<small>25,127</small>
							</div>
							<span class="pull-right uniquevisitors">2,3,5,4,3,4,5</span>
						</th>
					</tr>
				</thead>
				
			</table>
			
		</div>	

	</div>

	
</div>




<br />





</div>
<!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	
</div>
<?php get_footer(); ?>