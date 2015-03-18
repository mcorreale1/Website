<?php require_once('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo BASEURL;?>dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo BASEURL;?>dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL;?>css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $pageTitle; ?></title>

</head>
<body>
	<div class="header">
		<div class="container-fluid">
			<h1 class="title">
				<a href="<?php echo BASEURL; ?>index.php">Michael<br> Correale</a>
			</h1>
			
			<ul class="nav nav-pills">
  				<li role="presentation" class="<?php if($section=='index')echo'active'; ?> ">
  					<a href="<?php echo BASEURL;?>index.php">Home</a></li>
  				<li role="presentation" class="<?php if($section=='projects')echo'active'; ?> ">
  					<a href="<?php echo BASEURL;?>projects.php">Projects</a></li>
  				<li role="presentation" class="<?php if($section=='contact')echo'active'; ?> contact">
  					<a href="<?php echo BASEURL;?>contact.php">Contact</a></li>
			</ul>

			<!--<ul class="nv">
				<li><a href="#">Home</a></li>
 				<li><a href="#">Projects</a></li>
 				<li><a href="#">Contact</a></li>
			</ul>-->
		

		</div>
	</div>