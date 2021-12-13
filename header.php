<?php

function _header($title)
{

?>
	<!DOCTYPE html>
	<html lang="en">

	<!-- Mirrored from duruthemes.com/demo/html/bauen/multipage-dark/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 23:25:11 GMT -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<title>B A U E N | <?php echo $title ?></title>
		<link rel="shortcut icon" href="img/favicon.png" />
		<link rel="stylesheet" href="css/plugins.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'UA-144098545-1');
		</script>
	</head>

	<body>
		<!-- Preloader -->
		<div id="preloader"></div>
		<!-- Progress scroll totop -->
		<div class="progress-wrap cursor-pointer">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>
	<?php
}
	?>