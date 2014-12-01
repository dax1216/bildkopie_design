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
		<?php get_template_part('BestellungenFile'); ?>
        <?php get_template_part('copyright') ?>
	</div>
</div>
<?php get_template_part('ModalImageUpload'); ?>
<?php get_footer('user'); ?>