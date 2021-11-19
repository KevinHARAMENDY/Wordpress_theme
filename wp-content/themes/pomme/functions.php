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
      register_nav_menu('topnav',('topnav'));
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

    //AJOUTER LES WIDGETS
    function my_widget_init() {
      register_sidebar([
        'id'=>'right-sidebar',
        'name'=>'Colonne de droite',
        'description'=>'Glisser les widgets ici ...',
        'before_widget'=>'<div style=\'display:inline-block\'>',
        'after_widget'  =>'</div>'
      ]);
    }

    //CUSTOM POSTS SERIES
    function wpm_custom_post_series() {
      $labels = array(
        'name'                => 'Séries',
        'singular_name'       => 'Série',
        'menu_name'           => 'Séries',
        'all_items'           => 'Toutes les séries',
        'view_item'           => 'Voir les séries',
        'add_new_item'        => 'Ajouter une nouvelle série',
        'add_new'             => 'Ajouter',
        'edit_item'           => 'Editer la série',
        'update_item'         => 'Modifier la série',
        'search_items'        => 'Rechercher une série',
        'not_found'           => 'Non trouvée',
        'not_found_in_trash'  => 'Non trouvée dans la corbeille',
      );
      
      $args = array(
        'label'               => 'Séries',
        'description'         => 'Tous sur séries TV',
        'labels'              => $labels,
        'supports'            => array('title','editor','excerpt','author','thumbnail','comments','revisions','custom-fields'),
        'show_in_rest'        => true,
        'menu_icon'           =>'dashicons-format-video',
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'series'),
      );
      
      register_post_type('series',$args);
      register_taxonomy('categorie', 'series', ['hierarchical' => true ]);
      register_taxonomy('etiquette', 'series', ['hierarchical' => false ]);  
    }

    // HOOKS
    add_action('init','register_my_menu');
    add_action('widgets_init','my_widget_init');
    add_action('after_setup_theme','enable_thumbnails');
    add_action('after_setup_theme','enable_menus');
    add_action('init', 'wpm_custom_post_series');
    add_filter('wp_nav_menu','add_menuclass');
    add_filter('nav_menu_link_attributes','my_filter_a');
?>