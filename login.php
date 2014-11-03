
<?php  require_once 'includes/Template.php'; ?>
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
<body class="page-body login-page login-form-fall " data-url="http://neon.dev">


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
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
			
			<form method="post" role="form" id="form_login">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
				
				<!-- Implemented in v1.1.4 -->				
				<!--div class="form-group">
					<em>- or -</em>
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
						Login with Facebook
						<i class="entypo-facebook"></i>
					</button>
					
				</div-->
				
				<!-- 
				
				You can also use other social network buttons
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left twitter-button">
						Login with Twitter
						<i class="entypo-twitter"></i>
					</button>
					
				</div>
				
				<div class="form-group">
				
					<button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
						Login with Google+
						<i class="entypo-gplus"></i>
					</button>
					
				</div> -->				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-forgot-password.html" class="link">Forgot your password?</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
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