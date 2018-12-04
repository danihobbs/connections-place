<?php 
/*--------------------------------------------------
	   Functions For Custom Post
---------------------------------------------------*/
function custom_post_types() {

    	register_post_type( 'info_facts',
				array(
					'labels' => array(
						'name' => __( 'Infographic Facts' ),
						'singular_name' => __( 'Infographic Fact' ),
						'add_new' => __( 'Add New' ),
						'add_new_item' => __( 'Add New Infographic Fact' ),
						'edit_item' => __( 'Edit Infographic Fact' ),
						'new_item' => __( 'New Infographic Fact' ),
						'view_item' => __( 'View Infographic Fact' ),
						'not_found' => __( 'Sorry, we couldn\'t find the Infographic Fact you are looking for.' )
					),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
	//			'menu_icon' => get_template_directory_uri() . '/img/icons/en.gif',
	//			'show_in_menu' => false,
				'menu_position' => 14,
				'has_archive' => true,
				'hierarchical' => true, 
				'capability_type' => 'post',
				'rewrite' => array( 'slug' => 'fact' ),
				'supports' => array( 'title', 'editor', 'thumbnail')
				)
			);
    	    	register_post_type( 'team_members',
				array(
					'labels' => array(
						'name' => __( 'Team Members' ),
						'singular_name' => __( 'Team Member' ),
						'add_new' => __( 'Add New' ),
						'add_new_item' => __( 'Add New Team Member' ),
						'edit_item' => __( 'Edit Team Member' ),
						'new_item' => __( 'New Team Member' ),
						'view_item' => __( 'View Team Member' ),
						'not_found' => __( 'Sorry, we couldn\'t find the Team Member you are looking for.' )
					),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
	//			'menu_icon' => get_template_directory_uri() . '/img/icons/en.gif',
	//			'show_in_menu' => false,
				'menu_position' => 14,
				'has_archive' => true,
				'hierarchical' => true, 
				'capability_type' => 'post',
				'rewrite' => array( 'slug' => 'fact' ),
				'supports' => array( 'title', 'editor', 'thumbnail')
				)
			);

    
} 
add_action('init', 'custom_post_types');



/*--------------------------------------------------
	Team Members Taxonomy
---------------------------------------------------*/

	function team_taxonomy() {
		register_taxonomy(
			'team-category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
			'team_members',                  //post type name
				array(
					'hierarchical' => true,
					'show_admin_column' => true, // showing post tag, category in admin column.
					'label'        => 'Team Member Type',  //Display name
					'query_var'    => true,
					'rewrite'      => array(
						'slug'     => 'team-category', // This controls the base slug that will display before each term
						'with_front'    => true // Don't display the category base before
						)
					)
		);
	}
	add_action( 'init', 'team_taxonomy');  
?>