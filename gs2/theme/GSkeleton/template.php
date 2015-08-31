<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		GSkeleton Boilerplate for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php get_page_clean_title(); ?> &mdash; <?php get_site_name(); ?></title>
	
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php get_theme_url(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_theme_url(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php get_theme_url(); ?>/images/apple-touch-icon-114x114.png">
	
	<?php get_header(); ?>
</head>

<body id="<?php get_page_slug(); ?>" >

	<!-- Primary Page Layout
	================================================== -->

	

	<div id="container" class="container add-bottom">
		
		<nav class="sixteen columns">
			<ul><?php get_navigation(return_page_slug()); ?></ul>
		</nav>
		
			
		<header class="sixteen columns">
			<h1 class="remove-bottom"><a href="<?php get_site_url(); ?>" style="text-decoration:none;"><?php get_site_name(); ?></a></h1>
				<h5><?php get_component('tagline');	?></h5>
			<hr />
		</header>
		
		<section class="two-thirds column">
			<h3><?php get_page_title(); ?></h3>
			<?php get_page_content(); ?>
		</section>
		<aside class="one-third column">
			<?php get_component('sidebar');	?>
		</aside>
		<hr />
		
		<footer>
			<div class ="eight columns" >
				<?php get_site_name(); ?> &copy; <?php echo date('Y'); ?>
			</div>
			<div class ="eight columns" >
				<?php get_site_credits(); ?>
			</div>
			<?php get_footer(); ?>
		</footer>
		
	</div><!-- close container -->


<!-- End Document
================================================== -->
</body>
</html>