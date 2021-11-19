<?php
    // ACTIVER LES IMAGES MISES EN AVANT
    function enable_thumbnails(){
        add_theme_support('post-thumbnails');
    }

    //ACTIVER LES MENUS
    function enable_menus() {
        register_nav_menus([
          'topnav'=>'Menu dans la navbar'
        ]);
    }

    //REGISTER NAV
    function register_my_menu() {
      register_nav_menu('topnav',__('topnav'));
    }

    //AJOUTER UNE CLASSE PERSONNALISÉE SUR LA NAV
    function my_filter_a($attributes){
      $attributes["class"] = "nav-link";
      if ($attributes["aria-current"]){
        $attributes["class"] = "nav-link active";
      }
      return $attributes;
    }

    function add_menuclass($ulclass) {
      return preg_replace('/<a /','<a class="nav-link"',$ulclass);
    }

    // HOOKS
    add_action('init','register_my_menu');
    add_action('after_setup_theme','enable_thumbnails');
    add_action('after_setup_theme','enable_menus');
    add_filter('wp_nav_menu','add_menuclass');
    add_filter('nav_menu_link_attributes','my_filter_a');
?>