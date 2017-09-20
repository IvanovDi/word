<!DOCTYPE html>
<html> 
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
		<link type="text/css" rel="StyleSheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); // API Hook ?>
	</head>
	<body>
	<div class="wrapper">
		<div class="header"> Шапка сайта
		<?php 	
			wp_nav_menu(  ); ?>
		</div>