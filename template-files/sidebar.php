	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="<?php siteInfo('url'); ?>/backend_photographer/index.php">
					<img src="assets/images/logo.png" width="142" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon "><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
				
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
		
			<li class="active active">
				<a href="<?php siteInfo('url'); ?>/backend_photographer/index.php">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="layout-api.html">
					<i class="entypo-basket"></i>
					<span>Bestellungen</span>		
					<span class="badge badge-success tooltip-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Neue Bestellungen">8</span>
					<span class="badge badge-secondary tooltip-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Erforderliche Uploads">3</span>
				</a>
				<ul>
					<li>
                    <a href="<?php siteInfo('url');?>/backend_photographer/Bestellungen-Liste.php">Bestellungen
					<span class="badge badge-success tooltip-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Neue Bestellungen">8</span>
                    <span class="badge badge-secondary tooltip-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Erforderliche Uploads">3</span>
                    </a>
                    </li>
					<li><a href="#">Rechnungen</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php siteInfo('url');?>/backend_photographer/Kunden-Liste.php">
					<i class="entypo-users"></i>
					<span>Kunden</span>
				</a>
			</li>
			<li>
				<a href="ui-panels.html">
					<i class="entypo-picture"></i>
					<span>Galerien</span>
				</a>
				<ul>	
					<li><a href="<?php siteInfo('url');?>/backend_photographer/Alben.php">Alben</a></li>
					<li><a href="<?php siteInfo('url');?>/backend_photographer/Alben-KategorieTabelle.php">Kategorien</a></li>
					<li><a href="<?php siteInfo('url');?>/backend_photographer/Alben-Wasserzeichen.php">Wasserzeinchen</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="entypo-list"></i>
					<span>Preislisten &amp; Produkte</span>
				</a>
				<ul>
					<li><a href="#">Preislisten</a></li>					
					<li><a href="#">Eigene Produkte</a></li>					
					<li><a href="#">Labore</a></li>					
					<li><a href="#">Versanziele</a></li>					
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="entypo-home"></i>
					<span>OnlineShop</span>
					<i class="entypo-popup pull-right hide-on-sidebar-collapsed tooltip-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Onlineshop öffnen"></i>
				</a>
				<ul>
					<li><a href="#"><span>Shopdetails</span></a></li>					
					<li><a href="#"><span>Design</span></a></li>					
					<li><a href="#"><span>Seiten</span></a></li>					
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="entypo-window"></i>
					<span>Hilfe &amp; Support</span>
				</a>
				<ul>
					<li><a href="#"><span>Hilfe</span></a></li>			
					<li><a href="#"><span>Support Tickets</span></a></li>			
				</ul>
			</li>
			<li>
				<a href="<?php siteInfo('url');?>/backend_photographer/login.php">
					<i class="entypo-user"></i>
					<span>Login</span>
				</a>
				
			</li>
			<li>
				<a href="<?php siteInfo('url');?>/backend_photographer/register.php">
					<i class="entypo-user"></i>
					<span>Register</span>
				</a>
			</li>
            <li>
				<a href="<?php siteInfo('url');?>/backend_photographer/custom-html-css-elements.php">
					<i class="entypo-code"></i>
					<span>Custom HTML/CSS elements</span>
				</a>
			</li>
		</ul>
				
	</div>	