<?php 
    /***********************************
     * Ajout des styles et des scripts 
     * ********************************/
    function lpwd_add_styles_and_scripts() {
        wp_enqueue_style( 'main', get_template_directory_uri() .'/src/css/main.css' ); 
        wp_enqueue_style( 'sign-in', get_template_directory_uri() .'/signin.css' ); 

        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' );

        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );

        wp_enqueue_style( 'wpb-google-fonts-2', 'https://fonts.googleapis.com/css2?family=Esteban&display=swap', false );

        wp_register_script('jquery', 'http://code.jquery.com/jquery-3.1.1.min.js', false, null); 
       
        wp_enqueue_script( 'menu', get_template_directory_uri() . '/src/js/menu.js', array('jquery'), '2.0', true);
    }

    /** @link https://developer.wordpress.org/plugins/hooks/ */
    /** @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/ */
    add_action( 'wp_enqueue_scripts', 'lpwd_add_styles_and_scripts' );

?>