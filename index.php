<?php	require_once 'includes/Template.php'; ?>
<?php get_header(); ?>
	<?php get_sidebar(); ?>		
	<div class="main-content">        
		<?php get_template_part('toolbar'); ?>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				
								
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


		<div class="row stats">
			<div class="col-sm-3 ">			
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-upload"></i></div>
					<div class="num" data-start="0" data-end="3" data-postfix="" data-duration="1500" data-delay="0">0</div>
					<h3>Uploads erfoderlich</h3>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
				
			</div>
			
			<div class="col-sm-3">
			
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="8" data-postfix="" data-duration="1500" data-delay="600">0</div>
					
					<h3>Neue Bestellungen</h3>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
				
			</div>
			
			<div class="col-sm-3">
			
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-credit-card"></i></div>
					<div class="num" data-start="0" data-end="45696" data-prefix="€ "  data-duration="1500" data-delay="1200">0</div>			
					<h3>Ihr Kontostand</h3>
					<p>Sie haben</p>
				</div>
				
			</div>
			
			<div class="col-sm-3">
			
				<div class="tile-stats tile-purple">
					<div class="icon"><i class="entypo-floppy"></i></div>
					
					<div class="num" data-start="0" data-end="13" data-postfix="%"  data-duration="1500" data-delay="2800">0</div>		
					<h3>Speicher verbraucht</h3>
					<p>Sie haben noc 4,6 GB von 50 GB</p>
				</div>
				
			</div>
		</div>

		<br/>
		<div class="row">
			<div class="col-sm-4">
				<div class="tile-progress tile-gray has-body">
			
					<div class="tile-header">
						<h3>Premium Paket</h3>
						<span>50 GB Datenvolumen</span>
					</div>					
					<div class="tile-body">
						<div class="alert alert-danger">
							<p>Pellentesque eu urna tristique, laoreet magna a, hendrerit dolor. Donec imperdiet scelerisque velit. Vivamus efficitur, dolor eu vestibulum hendrerit, lacus orci dapibus magna, quis suscipit mi justo sit amet metus.</p>
						</div>
						<button type="button" class="btn btn-block btn-red btn-icon btn-lg">
							Shopdetails
							<i class="entypo-cancel"></i>
						</button>
						<button type="button" class="btn btn-block btn-red btn-icon btn-lg">
							Firmendaten
							<i class="entypo-cancel"></i>
						</button>
						<button type="button" class="btn btn-block btn-green btn-icon btn-lg">
							Abrechnungseinstellungen
							<i class="entypo-check"></i>
						</button>
					</div>
					<div class="tile-progressbar">
						<span data-fill="13.5%"></span>
					</div>
					
					<div class="tile-footer">
						<h4>
							<span class="pct-counter">0</span>% increase
						</h4>
						
						<span>so far in our blog and our website</span>
					</div>
				</div>
			</div>
			<div class="col-sm-8">	
				<?php get_template_part('Indexchart') ?>
			</div>
		</div>

		<?php get_template_part('copyright') ?>



	</div>
<?php get_footer(); ?>