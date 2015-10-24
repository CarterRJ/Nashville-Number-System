<html>
<head>
<title><?php echo $title; ?></title>
<?php
$asset_url = asset_url ();
echo '<link rel="stylesheet" href="' . $asset_url . 'css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="' . $asset_url . 'css/theme-bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="' . $asset_url . 'css/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="' . $asset_url . 'css/base.css" type="text/css" />';
echo '<script src="' . $asset_url . 'js/jquery-2.1.3.min.js"></script>
<script src="' . $asset_url . 'js/bootstrap.min.js"></script>
<script src="' . $asset_url . 'js/jquery-ui.min.js"></script>';
echo'<!-- polyfill -->
	<script src="' . $asset_url . 'inc/shim/Base64.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'inc/shim/Base64binary.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'inc/shim/WebAudioAPI.js" type="text/javascript"></script>
	<!-- midi.js package -->
	<script src="' . $asset_url . 'js/midi/audioDetect.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'js/midi/gm.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'js/midi/loader.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'js/midi/plugin.audiotag.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'js/midi/plugin.webaudio.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'js/midi/plugin.webmidi.js" type="text/javascript"></script>
	<!-- utils -->
	<script src="' . $asset_url . 'js/util/dom_request_xhr.js" type="text/javascript"></script>
	<script src="' . $asset_url . 'js/util/dom_request_script.js" type="text/javascript"></script>
		'
?>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo base_url()?>" class="navbar-brand">Number System</a>
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
		