<?php /* Template Name: Template Archive */ ?>

<?php get_header();?>

<div
    style="height: 400px; width: 100%; background-attachment : fixed;
background-image: linear-gradient(
    rgba(0, 0, 0, 0.6), 
    rgba(0, 0, 0, 0.6)
  ), url('<?php echo get_template_directory_uri(); ?>/src/img/7.jpg'); background-position: bottom; background-repeat: no-repeat; background-size: cover; z-index: 0">
    <div class="cover__text">
        <h1 class="cover__h1">Nos cours par thèmes</h1>
        <h2 class="cover__h2">Retrouvez tous nos conseils sur l'usage des outils en ligne </h2>
    </div>
</div>


<div class="contenu__white">
    <div class="contenu__menu">
        <p class="contenu__menu_p active" data-class="all">Tout</p>
        <p class="contenu__menu_p" data-class="rs">&ensp;Réseaux sociaux</p>
        <p class="contenu__menu_p" data-class="fakenews">&ensp;Fausses informations</p>
    </div>

    <div class="contenu__white_articles_section">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php 

            $args = array(
                'posts_per_page' => -1
            );
   
            $recent_postsbis = get_posts($args); 
            for ($i = 0; $i < count($recent_postsbis); $i++) { ?>

            <div class="col all <?php echo get_field("classe", $recent_postsbis[$i]->ID ); ?>">
                <div class="card shadow-sm">
                    <div class="contenu_w_img"
                        style="height:225px; width:100%;
                        background-image: url('<?php echo get_field("background-image", $recent_postsbis[$i]->ID )['url']; ?>'); background-position: bottom; background-repeat: no-repeat; background-size: cover; ">
                    </div>

                    <div class="card-body">
                        <a class="a-none" href="<?php echo get_permalink($recent_postsbis[$i]->ID); ?>">
                            <h2 class="card-text-h2"><?php echo get_field("titre", $recent_postsbis[$i]->ID ); ?></h2>
                        </a>
                        <p class="card-text"><?php echo get_field("description", $recent_postsbis[$i]->ID ); ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Voir plus</button>
                            </div>
                            <small
                                class="text-muted"><?php echo get_field("date", $recent_postsbis[$i]->ID ); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php }   ?>
        </div>

    </div>

</div>

<?php get_footer();?>