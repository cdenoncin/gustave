<!DOCTYPE html>
<?php /** @link https://developer.wordpress.org/reference/functions/language_attributes/ */ ?>
<html <?php language_attributes(); ?>>

<head>
    <?php /** @link https://developer.wordpress.org/reference/functions/bloginfo/ */ ?>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php /** @link https://developer.wordpress.org/reference/functions/the_title/ */?>
    <title> <?php bloginfo("name"); ?> | <?php the_title(); ?></title>

    <?php /** @link https://developer.wordpress.org/reference/functions/wp_head/ */ ?>
    <?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php lpwd_add_styles_and_scripts("style") ?>
    <?php lpwd_add_styles_and_scripts("menu") ?>
    <?php lpwd_add_styles_and_scripts("bootstrap") ?>
    <?php lpwd_add_styles_and_scripts("bootstrap-js") ?>
    <?php lpwd_add_styles_and_scripts("wpb-google-fonts") ?>
    <?php lpwd_add_styles_and_scripts("wpb-google-fonts-2") ?>


</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/webresponsable">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webresponsable/theme">Thèmes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webresponsable/session">Rejoindre une session</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webresponsable/mon-compte">Mon compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webresponsable/a-propos">À propos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

<div class="ecart"></div>