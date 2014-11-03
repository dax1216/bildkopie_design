<?php 
	require_once 'includes/Template.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Bildkopie | Login</title>
	

	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/neon-core.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/neon-theme.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/neon-forms.css">
	<link rel="stylesheet" href="<?php siteInfo('template_url'); ?>/css/custom.css">

	<script src="<?php siteInfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="<?php siteInfo('template_url'); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body login-page login-form-fall rcdev" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">
	<div class="row ui-toolbar">
		<div class="col-sm-6 col-sm-offset-6 col-sm-6 clearfix hidden-xs">
	
			<ul class="list-inline links-list pull-right">
				
				<!-- Language Selector -->			
				<li class="dropdown language-selector">
					
					Language: &nbsp;
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
						<img src="assets/images/flag-uk.png" />
					</a>
					
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="#">
								<img src="assets/images/flag-de.png" />
								<span>Deutsch</span>
							</a>
						</li>
						<li class="active">
							<a href="#">
								<img src="assets/images/flag-uk.png" />
								<span>English</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="assets/images/flag-fr.png" />
								<span>François</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="assets/images/flag-al.png" />
								<span>Shqip</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="assets/images/flag-es.png" />
								<span>Español</span>
							</a>
						</li>
					</ul>
					
				</li>
			</ul>
			
		</div>		
	</div>
	<div class="login-header login-caret">
		
		<div class="login-content">

			<a  href="<?php siteInfo('url'); ?>" class="logo">
				BILD<span>KOPIE</span>
			</a>		
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		<p class="description">Die Registrierung auf bildkopie.com ist kostenlos. Sie bezahlen nur dann wenn  auch bwirklich ein Verkauf üder bildkopie stattfindet.</p>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_register">
				
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>You have been successfully registered.</h3>
					<p>We have emailed you the confirmation link for your account.</p>
				</div>
				
				<div class="form-steps">
					
					<div class="step current" id="step-1">

						<div class="form-group">
							<div class="input-group user-url">
								<div class="input-group-addon">
									<i class="entypo-globe"></i>
								</div>								
								<input type="text" class="form-control" name="name" id="name" placeholder="" autocomplete="off" />
								<span class="site-url">.bildkopie.com</span>
								<i class="entypo-check ui-validate accepted"></i>
								<!-- <i class="entypo-cancel ui-validate invalid"></i> -->
							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="fname" id="name" placeholder="Name" autocomplete="off" />
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="lname" id="name" placeholder="Lastname" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>								
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" data-mask="phone" autocomplete="off" />
							</div>
						</div>
						
						
						<div class="form-group">
							<button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Nächster Schritt
							</button>
						</div>
						
						<div class="form-group register-steps">
							Schritt 1 von 2
						</div>
					
					</div>
					
					<div class="step" id="step-2">					
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-mail"></i>
								</div>
								
								<input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="password" id="password" placeholder="Passwort" autocomplete="off" />
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="password" id="password" placeholder="Passwort wiederholen" autocomplete="off" />
							</div>
						</div>

						

						<div class="form-group pad-20">
							<div class="row">
								<div class="checkbox checkbox-replace">
									<div class="col-sm-1"><input type="checkbox" id="chk-23"></div>
									<div class="col-sm-10 terms-acceptance">Ich habe <a href="#">Nutzungsbedingen</a> gelesen und akzeptiere diese.</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Complete Registration
							</button>
						</div>
						
						<div class="form-group register-steps">
							Schritt 2 von 2
						</div>
						
					</div>
					
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-login.html" class="link">
					<i class="entypo-lock"></i>
					<strong>Return to Login Page</strong>
				</a>
				
				<br />
				
				<div class="tos"> <a href="#" class="">ToS</a>  - <a href="#">Privacy Policy</a></div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

	<!-- Bottom Scripts -->
	<script src="<?php siteInfo('template_url'); ?>/js/gsap/main-gsap.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/bootstrap.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/joinable.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/resizeable.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-api.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/jquery.validate.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-register.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-custom.js"></script>
	<script src="<?php siteInfo('template_url'); ?>/js/neon-demo.js"></script>

</body>
</html>