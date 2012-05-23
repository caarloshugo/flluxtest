<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		<link type="text/css" rel="stylesheet" media="all" href="<?php print $this->themePath; ?>/css/style.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php print $this->themePath; ?>/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php print $this->themePath; ?>/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="<?php print $this->themePath; ?>/js/functions.js"></script>
		<script type="text/javascript" src="<?php print $this->themePath; ?>/js/lightbox.js"></script> 
		<link type="text/css" href="<?php print $this->themePath; ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
		<link type="text/css" rel="stylesheet" media="all" href="<?php print $this->themePath; ?>/css/lightbox.css"/>
	</head>

	<body>
		<div id="container">
		<div id="content-image">
			<div id="header">
				<a href="<?php print path("contacto");?>" title="Contancto" class="feedback">Contancto</a>
				<a href="http://www.twitter.com" title="Facebook" class="facebook">Facebook</a>
				<a href="http://www.facebook.com" title="Twitter" class="twitter">Twitter</a>
			</div>
			
			<div id="content">
