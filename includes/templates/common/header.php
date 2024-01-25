<!doctype html>
<html lang="en">
	
	<head>

		<meta charset="UTF-8">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<meta name="viewport" content="width=device-width">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes"> 
		<meta name="msvalidate.01" content="">
		<meta name="google-site-verification" content="">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800;900&display=swap" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/includes/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/includes/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/includes/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/includes/favicons/site.webmanifest">
		
		<?php 
		
		//WP HEAD
		wp_head(); 
		
		//SITE INFO
		$site_url = get_bloginfo('url');
		$theme_url = get_bloginfo('template_url');
		$theme_images_url = $theme_url.'/includes/images/';
		$current_date = date('U');
		$timestamp = time();
		
		?>
	
	</head>

	<body class="<?php if(is_page('landing')) echo 'core-body'?>" style="overflow-x:hidden" data-spy="scroll" data-target="#scrollspy-nav">
		
		<?php if(!empty($_GET['video']) && $_GET['video'] == 'true') { ?>
		<!-- VIDEO -->
		<div id="video" class="lity-hide">
			<div class="lity-inner">
				<a class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close="" data-cursor="-md" data-cursor-stick="#video" id="lity-close-video"></a>
				<div class="transition-video">
					<video muted playsinline preload="auto" id="core-video">
						<source src="<?php echo $site_url ?>/video/TDF-Core-Logo-Transition-v2.mp4" type="video/mp4">
					</video>
				</div>
				<div class="close-video" aria-label="Close (Press escape to close)" data-lity-close="" data-cursor-stick="#video">CLOSE</div>
			</div>
			<script>
				var screenWidth = jQuery(window).width();
				var video = document.getElementById("core-video");
				if (screenWidth > 991) {
					video.oncanplaythrough = (event) => {
						video.play();
					};
				} else {
					video.setAttribute("autoplay","autoplay")
					video.play();
				}
			</script>
		</div>
		
		<div class="video-loader active"></div>
		<!-- END VIDEO -->
		<?php } ?>