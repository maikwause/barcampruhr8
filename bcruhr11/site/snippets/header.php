<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	<?php echo css('assets/css/bootstrap.min.css') ?>
	<?php echo css('assets/css/style.css') ?>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<?php echo js('https://code.jquery.com/jquery.js'); ?>
	<?php echo js('assets/js/bootstrap.min.js');?>
	<!--[if lt IE 9]>
	<?php echo js('https://html5shim.googlecode.com/svn/trunk/html5.js');?>
	<?php echo js('assets/js/respond.min.js');?>
	<?php echo js('assets/js/PIE.min.js');?>
	<![endif]-->
	<?php echo js('assets/js/inc.js');?>
</head>

<body>
	<header id="header">
		<div class="center">
			<?php snippet('menu') ?>            
			<img src="<?php echo url('assets/images/bcr11-logo.png');?>" alt="barcamp logo">
			<h3><span>Sex & Tweets & Rock'n'Roll</span><br><span>UNPERFEKTHAUS ESSEN; 24./25. März 2018<br>&nbsp; #bcruhr11 &nbsp;</span></h3>
			<a href="#signup" class="btn btn-primary btn-red btn-red-small">Für Newsletter anmelden</a>
		</div>  
	</header>
	<main id="main" role="main">

