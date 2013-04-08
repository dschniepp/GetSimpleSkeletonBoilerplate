<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		GetSimpleSkeletonBoilerplate theme for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/base.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/layout.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
	<div class="container">
		<header id="header" class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px"><?php get_site_name(); ?></h1>
			<h5><?php get_component('tagline'); ?></h5>
		</header>
		<nav id="nav" class="sixteen columns">
			<ul>
				<?php get_navigation(return_page_slug()); ?>
			</ul>
		</nav>
		<hr />		
		<div class="twelve columns">
			<h2><?php get_page_title(); ?></h2>
			<p><?php get_page_content(); ?></p>		
			<span style="small"><?php get_page_date('F jS, Y'); ?></span>
		</div>
		<div class="four columns sidebar">
			<?php get_component('sidebar'); ?>		
		</div>
		<hr>
		<footer id="footer" class="sixteen columns">
			&copy; <?php date("Y", time()) ?> <?php get_site_name(); ?> <span class="pull-right"><?php get_site_credits(); ?></span>
		</footer>
	</div>
	<div class="clear"></div>
	<?php get_footer(); ?>
</body>
</html>