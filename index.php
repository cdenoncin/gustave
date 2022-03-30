<?php get_header(); ?>

<div class="cover">
    <div class="cover__text">
        <h1 class="cover__h1">WebResponsable</h1>
        <h2 class="cover__h2">La plateforme pour vous sensibiliser au web</h2>
    </div>
</div>

<body>

    <?php
        $args = array( 
            'numberposts' => '3', 
          );
        $recent_posts = wp_get_recent_posts( $args ); 
        ?>

    <div class="contenu__white">
        <div class="contenu__white_text">
            <h2 class="contenu_h2">Apprendre et s'informer</h2>
            <p class="contenu_p">Nous vous proposons différents cours pour apprendre à utiliser les outils en ligne.</p>
            <p class="contenu_p">Vous pouvez également retrouver des articles de sensibilisation sur les dangers du web,
                ainsi que des conseils pour sécuriser votre navigation !</p>
        </div>
        <div class="contenu__white_img">
            <img class="contenu_w_img" src="<?php echo get_template_directory_uri(); ?>/dist/img/home.png">
        </div>
    </div>

    <div class="contenu__white">
        <h2 class="contenu_h2 contenu_h2_2">Nos 3 derniers cours</h2>


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="contenu_w_img"
                        style="height:225px; width:100%;
                    background-image: url('<?php echo get_field("background-image", $recent_posts[0]['ID'])['url']; ?>'); background-position: bottom; background-repeat: no-repeat; background-size: cover; ">
                    </div>

                    <div class="card-body">
                        <a class="a-none" href="<?php echo get_permalink($recent_posts[0]['ID'] ); ?>">
                            <h2 class="card-text-h2"><?php echo get_field("titre", $recent_posts[0]['ID'] ); ?></h2>
                        </a>
                        <p class="card-text"><?php echo get_field("description", $recent_posts[0]['ID'] ); ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                            </div>
                            <small class="text-muted"><?php echo get_field("date", $recent_posts[0]['ID'] ); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="contenu_w_img"
                        style="height:225px; width:100%;
                    background-image: url('<?php echo get_field("background-image", $recent_posts[1]['ID'])['url']; ?>'); background-position: bottom; background-repeat: no-repeat; background-size: cover; ">
                    </div>


                    <div class="card-body">
                        <a class="a-none" href="<?php echo get_permalink($recent_posts[1]['ID'] ); ?>">
                            <h2 class="card-text-h2"><?php echo get_field("titre", $recent_posts[1]['ID'] ); ?></h2>
                        </a>
                        <p class="card-text"><?php echo get_field("description", $recent_posts[1]['ID'] ); ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                            </div>
                            <small class="text-muted"><?php echo get_field("date", $recent_posts[1]['ID'] ); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="contenu_w_img"
                        style="height:225px; width:100%;
                    background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/3.jpg'); background-position: bottom; background-repeat: no-repeat; background-size: cover; ">
                    </div>


                    <div class="card-body">
                        <a class="a-none" href="<?php echo get_permalink($recent_posts[2]['ID'] ); ?>">
                            <h2 class="card-text-h2"><?php echo get_field("titre", $recent_posts[2]['ID'] ); ?></h2>
                        </a>
                        <p class="card-text"><?php echo get_field("description", $recent_posts[2]['ID'] ); ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                            </div>
                            <small class="text-muted"><?php echo get_field("date", $recent_posts[2]['ID'] ); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="a-none" href="http://localhost/webresponsable/theme">
            <p class="contenu_2_p">Découvrez tous les cours par thème</p>
        </a>

    </div>

</body>

<?php get_footer(); ?>