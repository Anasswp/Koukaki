<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img class="banner_background" src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            <video class="banner_video" width="1440" autoplay="autoplay" muted="" loop="infinite">
                <source src=<?php echo get_theme_file_uri() . '/assets/video/Studio_Koukaki.mp4'; ?> type="video/mp4">
            </video>
            <img class="banner_logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        </section>

        <section id="story" class="story fadeInUp">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!-- 'Characters' déplacé dans parts\characters-slide.php -->
             <?php get_template_part ( 'parts/characters' , 'slide' ); ?>

            <article id="place" class="fadeInUp">
                <!-- Ajout des lignes pour mettre en place l'animation des nuages -->
                <img class="big_cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Gros nuage">
                <img class="little_cloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Petit nuage">
                
                <div>
                    <h3 class="place_title">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>


        <section id="studio" class="animated fadeInUp">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        
        <!-- 'Nomination oscars' déplacé dans parts\oscar_section.php -->
        <?php get_template_part('parts/oscar_section'); ?>
    </main><!-- #main -->

<?php get_footer();?>


