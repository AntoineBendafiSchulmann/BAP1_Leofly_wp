<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leofly_wp
 */


get_header();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>home page</title>
    <link rel="stylesheet" href="https://use.typekit.net/bah6hrm.css">
</head>
<body>
    
    <img class="patrouille_chasseur" src="app/themes/leofly_wp/img/patrouille_de_chasseur_français.png" alt="patrouille de chasseur français dans les airs">
    
    <section class="premiere_description">

        <img class="membre_superman" src="app/themes/leofly_wp/img/LF_Bureau_50.png" alt="membres de léofly faisant la pose">
        <img class="decoration_site" src="app/themes/leofly_wp/img/Groupe_28.png" alt="décoration verticale pour le site">
        <div class="text_homepage">
            <div class="homepage_box1">
        <p class="text_homepage_2">L'assocation</p>
            </div>      
            <div class="homepage_box2">
        <h1 class="titre_homepage">Leo'Fly</h1>
            </div>    
            <div class="homepage_box3">
        <p class="text_homepage_3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis similique repudiandae soluta maxime omnis dolore, nostrum cum, magnam suscipit nisi quo ducimus obcaecati quos eum, ea ipsum ad eveniet ipsa.</p>
            </div>
        <div class="notre_histoire">
            <p class="bouton_homepage"> Notre Histoire </p>
        </div>
        </div>
    </section>

    <section class="timer_homepage"></section>

</body>
</html>

	

<?php

get_footer();

?>
