<?php get_header();?>
<div class="fil-ariane">
        <a class="a-riane" href="index.html">
            <p class="fil">Accueil ></p>
        </a><a class="a-riane" href="actualites.html">
            <p class="fil">&nbsp;Actualités ></p>
        </a>
        <p class="fil-2"> &nbsp;<?php echo get_field("titre", get_the_ID() ); ?></p>
    </div>

    <?php var_dump(get_field("image", get_the_ID() )); ?>

    <?php echo "toto"; ?>

    <div class="single-actu-aff">
        <a href="actualites.html" class="a-none">
            <p class="retour">
                < Retour aux actualités</p> </a> <div class="single-actu-h3">
                    <h2 class="single-h2"><?php echo get_field("titre", get_the_ID() ); ?></h2>
                    <h3 class="single-actu-date"><?php echo get_field("date", get_the_ID() ); ?></h3>
    </div>


    <div class="single-actu">
        <img class="single-img" src="">
        <p class="single-txt"><?php echo get_field("contenu", get_the_ID() ); ?></p>
    </div>

    <div class="single-share">
        <div class="single-bar"></div>
        <h3 class="share">Partager cet article</h3>
        <img class="share-img" src="src/img/facebook-blue.png">
        <img class="share-img share-img-2" src="src/img/twitter-blue.png">
    </div>

    <div class="single-news">
        <div class="single-news-1">
            <form method="post">
                <div class="c-form__elements">
                    <label for="name">email</label>
                    <input class="blue-input" type="text" id="name" name="user_name">
                </div>
            </form>
        </div>
        <div class="single-news-2">
            <a href="" class="a-none">
                <p>S'inscrire à la Newsletter</p>
            </a>
        </div>
    </div>
    </div>

    <?php /** @link https://developer.wordpress.org/reference/functions/get_template_part/ */ ?>
    <?php get_template_part( 'template-parts/section-fonctions' ); ?>

    <?php get_footer();?>