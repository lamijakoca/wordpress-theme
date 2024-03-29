<?php
    function lucky_load_stylesheets(){
        wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
        wp_enqueue_style( 'font-style','http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css');
        wp_enqueue_style( 'font-second-style','https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700');
    }

    add_action('wp_enqueue_scripts', 'lucky_load_stylesheets');

    function lucky_menus(){
        
        $locations = array(
            'primary' => "Lucky Primary Menu",
            'footer' => "Footer Menu Items"
        );

        register_nav_menus($locations);
    }

    add_action('init','lucky_menus');

    function lucky_register_scripts(){
        wp_enqueue_script('lucky-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
        wp_enqueue_script('lucky-nav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), false, true);
        wp_enqueue_script('lucky-count', get_template_directory_uri() . '/js/jquery.countTo.min.js', array('jquery'), false, true);
        wp_enqueue_script('lucky-shuffle', get_template_directory_uri() . '/js/jquery.shuffle.min.js', array('jquery'), false, true);
        wp_enqueue_script('lucky-main', get_template_directory_uri() . '/js/script.js', array(), false, true);
        wp_enqueue_script('lucky-ajax','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
    }
    
    add_action('wp_enqueue_scripts', 'lucky_register_scripts');

    function search_form_text($text){
        $text = str_replace('value="Претражи"', 'value="Search"', $text);
        return $text;
    }

    add_filter('get_search_form', 'search_form_text');
?>