<?php /* Template Name: Template Connexion */ ?>

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
    <?php lpwd_add_styles_and_scripts("sign-in") ?>
    <?php lpwd_add_styles_and_scripts("menu") ?>
    <?php lpwd_add_styles_and_scripts("bootstrap") ?>
    <?php lpwd_add_styles_and_scripts("bootstrap-js") ?>
    <?php lpwd_add_styles_and_scripts("wpb-google-fonts") ?>
    <?php lpwd_add_styles_and_scripts("wpb-google-fonts-2") ?>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body class="text-center body">

    <main class="form-signin">
        <form>
            <a href="http://localhost/webresponsable"><img class="mb-4 logo_user" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt=""></a>
            <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>
            <label for="inputEmail" class="visually-hidden">Adresse mail</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
            <label for="inputPassword" class="visually-hidden">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
            <p class="mt-5 mb-3 text-muted">&copy; WebResponsable - 2021</p>
        </form>
    </main>

    </body>

</html>