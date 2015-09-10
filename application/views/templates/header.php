<html>
<head>
<title><?php echo $title; ?></title>
<?php
$siteroot = asset_url ();
echo '<link rel="stylesheet" href="' . $siteroot . 'css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="' . $siteroot . 'css/theme-bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="' . $siteroot . 'css/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="' . $siteroot . 'css/base.css" type="text/css" />';
echo '<script src="' . $siteroot . 'js/jquery-2.1.3.min.js"></script>
<script src="' . $siteroot . 'js/bootstrap.min.js"></script>
<script src="' . $siteroot . 'js/jquery-ui.min.js"></script>';
?>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="http://usebootstrap.com/" class="navbar-brand">Number System</a>
				<button class="navbar-toggle" type="button" data-toggle="collapse"
					data-target="#navbar-main">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-main">

				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#" id="themes">Menu <span
							class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="themes">
							<li><a href="#">Example 1</a></li>
							<li class="divider"></li>
							<li><a href="#">Example 2</a></li>
							<li><a href="#">Example 3</a></li>
							<li><a href="#">Example 4</a></li>
						</ul></li>
					<li><a href="#">Themes</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://usebootstrap.com/" target="_blank">Use
							Bootstrap</a></li>
					<li><a href="http://usebootstrap.com/" target="_blank">Bootstrap
							Themes</a></li>
				</ul>

			</div>
		</div>
	</div>

	<div class="container">

		<div class="page-header" id="banner">
			<div class="row">
				<div class="col-lg-6">
					<h1><?php echo $title ?></h1>
					<p class="lead">Become fluent in the Nashville Number System.</p>
				</div>
			</div>
		</div>

		<!-- Header
      ================================================== -->
		