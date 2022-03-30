<?php get_header();?>

<div
    style="height: 400px; width: 100%; background-attachment : fixed;
background-image: linear-gradient(
    rgba(0, 0, 0, 0.6), 
    rgba(0, 0, 0, 0.6)
  ), url('<?php echo get_field("background-image", get_the_ID() )["url"]; ?>'); background-position: bottom; background-repeat: no-repeat; background-size: cover; z-index: 0">
    <div class="cover__text">
        <h1 class="cover__h1"><?php echo get_field("titre", get_the_ID() ); ?></h1>
        <h2 class="cover__h2"><?php echo get_field("description", get_the_ID() ); ?></h2>
    </div>
</div>

<div class="contenu__white">
    <div class="contenu__white_text">

        <h2 class="contenu_h2 intro-article"><i><?php echo get_field("accroche", get_the_ID() ); ?></i></h2>

        <p class="contenu_p"><?php echo get_field("texte", get_the_ID() ); ?></p>
    </div>
    <div class="contenu__white_img">
        <img class="contenu_w_img" src="<?php echo get_field("image", get_the_ID() )["url"]; ?>" alt="">
    </div>
    <div>
        <h2 class="contenu_h2 inner-title"><?php echo get_field("titre_secondaire", get_the_ID() ); ?></h2>
        <p class="contenu_p"><?php echo get_field("texte_secondaire", get_the_ID() ); ?></p>


        <h2 class="contenu_h2 inner-title">Nos conseils :</h2>
        <p class="contenu_p"><?php echo get_field("conseils", get_the_ID() ); ?>
        </p>
        <h2 class="contenu_h2 inner-title">Testez vos connaissances</h2>

        <?php
        $idQuizz = get_field("shortcode_quiz", get_the_ID() );
        $shortcode = '[streamquiz id="' . $idQuizz . '"]';
        echo do_shortcode($shortcode);
        ?>
        
        <div>
            <p class="contenu_p">Thème du cours : <span
                    class="p_blue"><?php echo get_field("theme_du_cours", get_the_ID() ); ?></span></p>
            <p class="contenu_p">Publié le : <span class="p_blue"><?php echo get_field("date", get_the_ID() ); ?></span>
            </p>
            <p class="contenu_p">Cours destiné aux : <span class="p_blue">
                    <?php 
                        $tableau = get_field("cours_pour", get_the_ID() );

                        for($i = 0; $i < count($tableau); $i++){
                            echo $tableau[$i];
                          }
                        ?>
                </span></p>
            <p class="contenu_p">Partager ce cours sur : <span class="p_blue">Facebook, Twitter,
                    Instagram</span></p>
        </div>
    </div>
</div>


<?php get_footer();?>