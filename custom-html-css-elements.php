<?php	require_once 'includes/Template.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Bildkopie | Dashboard</title>
	
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/neon-core.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/neon-theme.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/neon-forms.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/font-icons/font-awesome/css/font-awesome.min.css">
	<script src="<?php siteInfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/custom.css">
    
	<!--[if lt IE 9]><script src="<?php siteInfo('template_url'); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body " data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	<?php get_sidebar(); ?>
	<div class="main-content">
		<?php get_template_part('toolbar'); ?>	

        <div class="row">
			
            <div class="col-md-3">
				<div id="toc"></div>
			</div>
	
			<div class="col-md-9 tocify-content">
				
                
                <h2>Buttons</h2>
                <div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">Buttons Groups &amp; Icons</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a>
						</div>
					</div>
			
					<div class="panel-body">
                        <p><strong>Fullwith Dropdown </strong></p>
                        <p class="bs-example">
                           <div class="btn-group btn-fullwidth">
                                <button onclick="jQuery('#modal-image-upload1').modal('show');" type="button" class="btn btn-red"><i class="entypo-upload"></i> 2 Uploads erforderlich</button>
                                
                                <button type="button" class="btn btn-red dropdown-toggle" data-toggle="dropdown">
                                    <i class="entypo-down"></i>
                                </button>
                                
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><i class="entypo-upload"></i> 2 Uploads erfoderlich</a></li>
                                    <li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
                                    <li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
                                    <li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
                                    <li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
                                </ul>
                            </div>
                        </p>
                        <p><strong>Fullwith Icon </strong></p>
                        <p class="bs-example">
                            <button type="button" class="btn btn-red btn-fullwidth btn-icon icon-left">
								Upload erforderlich
								<i class="entypo-upload"></i>
							</button>
                        </p>
			
					</div>
				</div>
               </br>
        		
                <h2>Panels</h2>
                
                <h3>Panel with Text</h3>
                <div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Header</div>						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						</div>
					</div>	
					<!-- panel body -->
					<div class="panel-body">		
						<div class="row">
							<div class="col-sm-12">

								<div class="form-horizontal form-groups ">
									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>ID</strong></label>						
										<div class="col-sm-7">
											<span class="form-control form-control-text">001377</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Status</strong></label>						
										<div class="col-sm-7">
                                            
                                            <div class="btn-group btn-fullwidth">
                                                <button onclick="jQuery('#modal-image-upload1').modal('show');" type="button" class="btn btn-red"><i class="entypo-upload"></i> 2 Uploads erforderlich</button>
                                                
                                                <button type="button" class="btn btn-red dropdown-toggle" data-toggle="dropdown">
                                                    <i class="entypo-down"></i>
                                                </button>
                                                
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#"><i class="entypo-upload"></i> 2 Uploads erfoderlich</a></li>
                                                    <li><a href="#"><i class="entypo-clock"></i> In Bearbeitung</a></li>
                                                    <li><a href="#"><i class="entypo-upload"></i> Zur Abholung bereit</a></li>
                                                    <li><a href="#"><i class="entypo-direction"></i> Versendet</a></li>
                                                    <li><a href="#"><i class="entypo-check"></i> Abgeschloben</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="entypo-block"></i> Storniert</a></li>
                                                </ul>
                                            </div>
                                            
										</div>
									</div>
                                     
									<hr>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Kunden Komentar</strong></label>						
										<div class="col-sm-7">
											<span class="form-control form-control-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
                </br>
                
                <h3>Panel with description</h3>
                <div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Header</div>						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            <a href="#" data-rel="reload"><i class="entypo-info"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						</div>
					</div>	
					<!-- panel body -->
					<div class="panel-body">		
						<div class="row">
							<div class="col-sm-6">

								<div class="form-horizontal form-groups ">
									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Label 1</strong></label>						
										<div class="col-sm-7">
											<input type="text" class="form-control" id="field-1" placeholder="Placeholder" kl_vkbd_parsed="true">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-5 control-label"><strong>Label 2</strong></label>						
										<div class="col-sm-7">
											<input type="text" class="form-control" id="field-1" placeholder="Placeholder" kl_vkbd_parsed="true">
										</div>
									</div>
                                    
                                    <hr>
                                    
                                    <div class="form-group">
										<label class="col-sm-5 control-label"><strong>Label 3</strong></label>						
										<div class="col-sm-7">
											<input type="text" class="form-control" id="field-1" placeholder="Placeholder" kl_vkbd_parsed="true">
										</div>
									</div>
                                    
                                </div>
                            </div>	
                            <div class="col-sm-6">	
                                <div class="alert alert-description alert-dismissible fade in">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h3>Ihre Stammdaten</h3>
                                    <p>Wir benötigen Ihre <strong>Kontodaten</strong> für den Ausgleich Ihres Bildkopie-Kontos. Wir nutzen diese Kontodaten sowohl für den Einzug der monatlichen Grundgebühr als auch für Ihre Auszahlung, wenn Sie durch Fotobestellungen auf Ihrer Seite ein positives Guthaben bei uns besitzen. Bitte geben Sie entweder eine deutsche oder eine europäische Bankverbindung an.</p>
                                </div>
                            </div>				
                        </div>
                    </div>
        		</div>
                </br>
                
				<h2>Alerts</h2>
                <h3>Alert width Title</h3>
                <div class="alert alert-danger">
                    <h3>Bestätigungscode</h3>
                    <p>Um Ihre Bankdaten zu bestätigen haben wir Ihnen enen minimalen Cent Betrag auf fongendes Konto Überwiesen.</p>
                    <ul>
                        <li>Max Mustermann</li>
                        <li>AT6119043002****</li>
                        <li>NABA***</li>
                    </ul>
                    <p>Als Verwendugszweck haben wir Ihnen einen 6 stelligen Code mitgesendet. Bitte geben Sie den Code nun in dieses feld ein und besteätigen Sie diesen.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="input-group has-error">
                                    <input type="text" class="form-control" kl_vkbd_parsed="true">
                                    <span class="input-group-btn">
                                        <button class="btn btn-red" type="button"><i class="entypo-check"></i>Code bestätigen</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</br>            
            
            <h3>Alert for description</h3>
            <div class="alert alert-description">
                <h3>Ihre Stammdaten</h3>
                <p>Wir benötigen Ihre <strong>Kontodaten</strong> für den Ausgleich Ihres Bildkopie-Kontos. Wir nutzen diese Kontodaten sowohl für den Einzug der monatlichen Grundgebühr als auch für Ihre Auszahlung, wenn Sie durch Fotobestellungen auf Ihrer Seite ein positives Guthaben bei uns besitzen. Bitte geben Sie entweder eine deutsche oder eine europäische Bankverbindung an.</p>
            </div>
			</br>
           
            <h3>Alert width checkbox</h3>
            <div class="alert alert-success">
                <div class="checkbox checkbox-replace color-green">
                    <input type="checkbox" id="chk-23">
                    <label>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </label>
                </div>
            </div>
			</br>     
                     
			</div>
		</div>
     </div>
</div>
<?php get_footer('user'); ?>