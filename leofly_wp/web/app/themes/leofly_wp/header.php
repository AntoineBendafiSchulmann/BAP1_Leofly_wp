<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leofly_wp
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'leofly_wp' ); ?></a>

	<header id="masthead" class="site-header">
		

		<nav class="navbar_menu">

		<img  class="logonav" src="/app/uploads/2022/01/LeoFly-blanc-fond-transparent.png" alt="imginst">

		<ul class="nav_menus">

		<li>
		<a class="navlinks" href="#"><p class="linknav leftspace">Accueil</p></a>
		<li>


    	<a class="navlinks " href="#"><p class="linknav">Nos travaux</p></a>
			<ul  class="sous">
					<li class="undermenu"><a href="#">Projets</a></li>
					<li class="undermenu"><a href="#">Événements</a></li>
					<li class="undermenu"><a href="#">Articles</a></li>
			</ul>
		</li>

		<li>
    	<a class="navlinks" href="#"><p class="linknav">L'équipe</p></a>
			<ul  class="sous">
					<li class="undermenu"><a href="#">Membres du bureau</a></li>
					<li class="undermenu"><a href="#">Membres d'honneur</a></li>
					<li class="undermenu"><a href="#">Membres</a></li>
			</ul>
		</li>

		<li>
		<a class="navlinks" href="#"><p class="linknav">Nous contacter</p></a>
		</li>

		<li>
		<a class="navlinks" href="#"><p class="linknav">Partenaires</p></a>
		</li>
		
		</ul>

		<div >

		<a class="joinlink" href="#"><p class="orangetxt">Nous rejoindre</p></a>

		</div>


		<div class="languagediv">

		<img  class="langchange" src="/app/uploads/2022/01/Icon-ionic-ios-arrow-down.png" alt="imginst">
		<img  class="flaglang" src="/app/uploads/2022/01/france.png" alt="imginst">
		</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
