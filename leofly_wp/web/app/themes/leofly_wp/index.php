<?php


/* Template Name: firstpage */


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
    
    <img class="patrouille_chasseur" src="app/uploads/2022/01/Groupe-de-masques-5.png" alt="patrouille de chasseur français dans les airs">
    
    <section class="premiere_description">

        <img class="membre_superman" src="app/uploads/2022/01/LF_Bureau_50.png" alt="membres de léofly faisant la pose">
        <img class="decoration_site" src="app/uploads/2022/01/Ligne-51.png" alt="décoration verticale pour le site">
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

    <section class="timer_homepage">


    
    </section>

    <section class="deuxième_description">

        <div class="text_projet_homepage">

                <div class="box_homepage1_part2">
            <p>Nos<p>
                </div>
                <div class="box_homepage2_part2">
            <h1>Projets</h1>
                </div>
                <div class="box_homepage3_part2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quas deserunt facilis perferendis odit tenetur id iure animi inventore ipsam maxime, quibusdam, itaque accusamus enim saepe esse impedit, culpa quo!</p>
                </div>

                <div class="bouton_voirplus_homepage">
                <p class="text_bouton_voirplus_homepage">Voir plus</p>
                </div>
        </div>

        <img src="app/uploads/2022/01/Ligne-51.png" alt="décoration verticale pour le site" >

        <div class="image_projet_homepage">
        <img class="image_projet_homepage_taille" src="app/uploads/2022/01/Groupe-de-masques-23.png" alt="photo de description de projet">
        <img class="image_projet_homepage_taille" src="app/uploads/2022/01/Groupe-de-masques-24.png" alt="photo de description de projet">
        <img class="image_projet_homepage_taille" src="app/uploads/2022/01/MicrosoftTeams-image.png" alt="photo de description de projet">
        </div>
    </section>

    <div class="box_homepage1_part2">
            <p>Principaux<p>
                </div>
                <div class="box_homepage2_part2">
            <h1>Membres</h1>
                </div>
    </div>

    <section class="membres_principaux_homepage">
    <img class="images_membres_principaux_homepage" src="app/uploads/2022/01/Groupe_de_masques_2.png" alt="photo des principaux membres de l'association">
    <img class="images_membres_principaux_homepage" src="app/uploads/2022/01/Groupe-de-masques-1.png" alt="photo des principaux membres de l'association">
    <img class="images_membres_principaux_homepage" src="app/uploads/2022/01/Groupe_de_masques_1.png" alt="photo des principaux membres de l'association">
    </section>

    <section class="noms_membres_principaux_homepage">

    <div class="bande_noms_membres_principaux_homepage">
    <p class="titre_noms_membres_principaux_homepage2">Président</p>
    </div>

    <div class="bande_noms_membres_principaux_homepage">
    <p class="titre_noms_membres_principaux_homepage">Vice - President</p>
    </div>

    <div class="bande_noms_membres_principaux_homepage">
    <p class="titre_noms_membres_principaux_homepage">Respo - Comm</p>
    </div>


    </section>

</body>
</html>

	

<?php

get_footer();

?>
