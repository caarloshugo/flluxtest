<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/header.php";
	} else {
?>
<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php print $this->getTitle(); ?></title>
		
		<link href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" rel="stylesheet">
		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet">
		<?php print $this->getCSS(); ?>
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
		<div class="topbar">
			<div class="fill">
				<div class="container">
					<a class="brand" href="#">fllux.com</a>
					
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<?php print (SESSION("ZanUser")) ? '<li><a href="' . path("logout"). '">Logout</a></li>' : NULL; ?>
					</ul>
					
					<?php if(!SESSION("ZanUser")) { ?>
						<form action="<?php print path("admin");?>" class="pull-right" method="post" >
							<input class="input-small" type="text" name="username" placeholder="Username">
							<input class="input-small" type="password" name="password" placeholder="Password">
							<button class="btn" value="connect" name="connect" type="submit">Sign in</button>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="content">
				<div class="page-header">
					<h1>ZanPHP <small>PHP5 Framework</small></h1>
				</div>
				
				<div class="row">
<?php } ?>
