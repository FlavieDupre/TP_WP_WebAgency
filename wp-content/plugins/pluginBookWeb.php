<?php
/*
Plugin Name: BookWeb
Description: Plugin qui permet l'insertion de nos réalisations. Un plugin hyper bien !
Author: Flavie Dupré
*/
add_action('init','BookWeb_init');
function BookWeb_init(){
	register_post_type(
		'BookWeb',
		array(
			'label' => 'BookWeb',
			'labels' => array(
				'name' => 'BookWeb',
				'singular_name' => 'BookWeb',
				'all_items' => 'Tous les BookWeb',
				'add_new_item' => 'Ajouter un BookWeb',
				'edit_item' => 'Éditer le BookWeb',
				'new_item' => 'Nouveau BookWeb',
				'view_item' => 'Voir le BookWeb',
				'search_items' => 'Rechercher parmis les BookWeb',
				'not_found' => 'Pas de BookWeb trouvé',
				'not_found_in_trash' => 'Pas de BookWeb dans la corbeille'
			),
			'public' => true,
			'capability_type' => 'post',
			'supports' => array(
				'title',
				'thumbnail'
			),
			'has_archive' => true,
			'menu_icon' => 'dashicons-images-alt',
		)
	);
}

?>