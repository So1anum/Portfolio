<?php
function create_portfolio_cpt() {
    $labels = array(
        'name'               => 'Portfolios',
        'singular_name'      => 'Portfolio',
        'menu_name'          => 'Portfolio',
        'name_admin_bar'     => 'Portfolio',
        'add_new'            => 'Ajouter une réalisation',
        'add_new_item'       => 'Ajouter une nouvelle réalisation',
        'new_item'           => 'Nouvelle réalisation',
        'edit_item'          => 'Modifier la réalisation',
        'view_item'          => 'Voir la réalisation',
        'all_items'          => 'Toutes les réalisations',
        'search_items'       => 'Rechercher une réalisation',
        'not_found'          => 'Aucune réalisation trouvée.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'taxonomies'         => array('category_portfolio'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt');

function create_portfolio_category() {
    $labels = array(
        'name'              => 'Catégories de portfolio',
        'singular_name'     => 'Catégorie de portfolio',
        'search_items'      => 'Rechercher une catégorie',
        'all_items'         => 'Toutes les catégories',
        'edit_item'         => 'Modifier la catégorie',
        'update_item'       => 'Mettre à jour la catégorie',
        'add_new_item'      => 'Ajouter une nouvelle catégorie',
        'new_item_name'     => 'Nouvelle catégorie',
        'menu_name'         => 'Catégories Portfolio',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,  // True pour un comportement de type "Catégorie", false pour un comportement "Tag"
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'categorie-portfolio'),
    );

    register_taxonomy('category_portfolio', array('portfolio'), $args);
}
add_action('init', 'create_portfolio_category');
