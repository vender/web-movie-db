<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie DB</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

	<header id="site-header">
	</header><!-- #site-header -->

	<main id="site-content" role="main">
		<div id="file-list">
			<?php
				$dir    = 'files';
				$files = array_diff(scandir($dir), array('..', '.'));;
				$i = 0;
				foreach($files as $file){
					echo '<a href="#"><div class="atvImg item '.$i.'" title="'.$file.'">';
					echo '<img src="/images/video_thumb.jpg">';
					echo '<div class="atvImg-layer" data-img=""></div>';
					echo '</div></a>';
					$i++;
				}
			?>
		</div>
		
		
	</main><!-- #site-content -->

	<footer id="site-footer" role="contentinfo">
	</footer><!-- #site-footer -->

	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="assets/js/atvImg-min.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>