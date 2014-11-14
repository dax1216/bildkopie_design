<?php	require_once 'includes/Template.php'; ?>
<?php get_header(); ?>	
	<?php get_sidebar(); ?>
	<div class="main-content">
	<?php get_template_part('toolbar'); ?>	

<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-2">
			
			<a href="#" class="profile-picture">
				<img src="assets/images/profile-picture.png" class="img-responsive img-circle" />
			</a>
			
		</div>
		
		<div class="col-sm-12">
			
			<ul class="profile-info-sections">
				<li>
					<div class="profile-name">
						<strong>
							<a href="#">Max Mustermann</a>
							<a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
							<!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
						<span><a href="#">Fotostudio</a></span>
					</div>
				</li>
				
				<li>
					<div class="profile-stat">
						<h3><i class="fa fa-euro"></i> 480,50</h3>
						<span><a href="#">Kotostand</a></span>
					</div>
				</li>
				
				<li>
					<div class="profile-stat">
						<h3>1,96 GB</h3>
						<span><a href="#">Datenvolumen</a></span>

					</div>
				</li>
				<li>
					<div class="profile-stat">
						<h3>Premium Paket</h3>
						<span><a href="#">nicht aktiv x</a></span>
						
					</div>
				</li>
			</ul>
			
		</div>
		
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="col-sm-offset-2 col-sm-10">
				
				
				
			<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
				<li class="active">
					<a href="#account" data-toggle="tab">
						<span class="visible-xs"><i class="entypo-user"></i></span>
						<span class="hidden-xs">Kontodetails</span>
					</a>
				</li>
				<li>
					<a href="#package" data-toggle="tab">
						<span class="visible-xs"><i class="entypo-box"></i></span>
						<span class="hidden-xs">Ihr Paket</span>
					</a>
				</li>
				<li >
					<a href="#billing" data-toggle="tab">
						<span class="visible-xs"><i class="entypo-cog"></i></span>
						<span class="hidden-xs">Abrechnung</span>
					</a>
				</li>
				<li>
					<a href="#billing-preferences" data-toggle="tab">
						<span class="visible-xs"><i class="fa fa-euro"></i></span>
						<span class="hidden-xs">Abrechnungseinstellungen</span>
					</a>
				</li>
				<li>
					<a href="#settings" data-toggle="tab">
						<span class="visible-xs"><i class="entypo-cog"></i></span>
						<span class="hidden-xs">Zugangsdaten</span>	
					</a>
				</li>
			</ul>


			
				
			</div>
			
		</div>
		
	</section>
	<div class="tab-content">
			<div class="tab-pane active" id="account">
				<?php get_template_part('KontodetailsAccount'); ?>								
			</div>
			<div class="tab-pane " id="package">		
				<?php get_template_part('KontodetailsPackage'); ?>		
			</div>
			<div class="tab-pane " id="billing">
				<?php get_template_part('KontodetailsBilling'); ?>
			</div>
			
			<div class="tab-pane" id="billing-preferences">
				<?php get_template_part('KontodetailsBillingPreferences'); ?>
			</div>
			<div class="tab-pane" id="settings">
				<?php get_template_part('KontodetailsSettings'); ?>					
			</div>
		</div>
	
</div>

<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialize()
{
	var $ = jQuery,
		map_canvas = $("#sample-checkin");
	
	var location = new google.maps.LatLng(36.738888, -119.783013),
		map = new google.maps.Map(map_canvas[0], {
		center: location,
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	});
	
	var marker = new google.maps.Marker({
		position: location,
		map: map
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script><!-- Footer -->
<footer class="main">
	
		

	
</footer>	</div>
	
	



	</div>


<?php get_footer('user'); ?>