<?php 

// Register Custom Post Type para proyectos

function custom_post_type_Proyectos() {

	$labels = array(
		'name'                  => _x( 'Proyecto', 'Post Type General Name', 'proyectos' ),
		'singular_name'         => _x( 'Proyectos', 'Post Type Singular Name', 'proyectos' ),
		'menu_name'             => __( 'Proyectos', 'proyectos' ),
		'name_admin_bar'        => __( 'Proyectos', 'proyectos' ),
		'archives'              => __( 'Lista de proyectos', 'proyectos' ),
		'attributes'            => __( 'Atributos', 'proyectos' ),
		'parent_item_colon'     => __( 'Categorias', 'proyectos' ),
		'all_items'             => __( 'Todos los proyectos', 'proyectos' ),
		'add_new_item'          => __( 'Agregar nuevo proyectos', 'proyectos' ),
		'add_new'               => __( 'Agregar nuevo proyectos', 'proyectos' ),
		'new_item'              => __( 'Agregar nuevo proyectos', 'proyectos' ),
		'edit_item'             => __( 'Agregar nuevo proyectos', 'proyectos' ),
		'update_item'           => __( 'Actualiza los proyectos', 'proyectos' ),
		'view_item'             => __( 'Agregar nueva categoria', 'proyectos' ),
		'view_items'            => __( 'Ver proyecto', 'proyectos' ),
		'search_items'          => __( 'Ver proyecto', 'proyectos' ),
		'not_found'             => __( 'Proyecto no encontrado', 'proyectos' ),
		'not_found_in_trash'    => __( 'No hay proyectos en la basura', 'proyectos' ),
		'featured_image'        => __( 'Imagen destacada', 'proyectos' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'proyectos' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'proyectos' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'proyectos' ),
		'insert_into_item'      => __( 'Insertar dentro del proyecto', 'proyectos' ),
		'uploaded_to_this_item' => __( 'Actualizar a este proyectos', 'proyectos' ),
		'items_list'            => __( 'Lista de Galerias', 'proyectos' ),
		'items_list_navigation' => __( 'Items list navigation', 'proyectos' ),
		'filter_items_list'     => __( 'Filtrar galeria en lista', 'proyectos' ),
	);

	$args = array(
		'label'                 => __( 'Proyecto', 'proyectos' ),
		'description'           => __( 'Detalles de los proyectos', 'proyectos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'has_archive'           => true,       
		'publicly_queryable'    => true,
		'query_var'             => 'galerias',
		'rewrite'               => array('slug', 'proyectos'),
		'capability_type'       => 'post',
	);


	register_post_type( 'proyectos', $args );

}
add_action( 'init', 'custom_post_type_Proyectos', 0 );


// Categoría

function registrar_taxonomia_Proyectos() { 

//para las categorias

$labels = array ( 

'name' => 'Tipos de Proyectos',
'singular_name' => 'Tipo',
'search_items' => 'search_item',
'all_items' => 'Todos los Proyectos',
'parent_item' => 'Parent Item',
'parent_item_colon' => 'Parent Type:',
'edit_item' => 'Editar Categoría',
'update_item' => 'Actualizar Categoría',
'add_new_item' => 'Agregar nueva categoría',
'new_item_name' => 'Nombre de la nueva categoría',
'menu_name' => 'Tipo de Proyecto'
);	

$args = array ( 

'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array ( 'slug' => 'tipos-proyectos')

	);

register_taxonomy( 'tipoproyectos', array( 'proyectos' ), $args );

}

add_action( 'init', 'registrar_taxonomia_Proyectos' );



// Register Custom Post Type para Servicios

function custom_post_type_Servicios() {

	$labels = array(
		'name'                  => _x( 'Servicio', 'Post Type General Name', 'servicios' ),
		'singular_name'         => _x( 'Servicios', 'Post Type Singular Name', 'proyectos' ),
		'menu_name'             => __( 'Servicios', 'servicios' ),
		'name_admin_bar'        => __( 'Servicios', 'servicios' ),
		'archives'              => __( 'Lista de servicios', 'servicios' ),
		'attributes'            => __( 'Atributos', 'servicios' ),
		'parent_item_colon'     => __( 'Categorias', 'servicios' ),
		'all_items'             => __( 'Todos los servicios', 'servicios' ),
		'add_new_item'          => __( 'Agregar nuevo servicios', 'servicios' ),
		'add_new'               => __( 'Agregar nuevo servicios', 'servicios' ),
		'new_item'              => __( 'Agregar nuevo servicios', 'servicios' ),
		'edit_item'             => __( 'Agregar nuevo servicios', 'servicios' ),
		'update_item'           => __( 'Actualiza los servicios', 'servicios' ),
		'view_item'             => __( 'Agregar nueva categoria', 'servicios' ),
		'view_items'            => __( 'Ver servicio', 'servicios' ),
		'search_items'          => __( 'Ver servicio', 'servicios' ),
		'not_found'             => __( 'Proyecto no encontrado', 'servicios' ),
		'not_found_in_trash'    => __( 'No hay servicios en la basura', 'servicios' ),
		'featured_image'        => __( 'Imagen destacada', 'servicios' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'servicios' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'servicios' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'servicios' ),
		'insert_into_item'      => __( 'Insertar dentro del servicio', 'servicios' ),
		'uploaded_to_this_item' => __( 'Actualizar a este servicios', 'servicios' ),
		'items_list'            => __( 'Lista de servicios', 'servicios' ),
		'items_list_navigation' => __( 'Items list navigation', 'servicios' ),
		'filter_items_list'     => __( 'Filtrar galeria en lista', 'servicios' ),
	);

	$args = array(
		'label'                 => __( 'Servicio', 'servicios' ),
		'description'           => __( 'Detalles de los proyectos', 'servicios' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'has_archive'           => true,       
		'publicly_queryable'    => true,
		'query_var'             => 'servicios',
		'rewrite'               => array('slug', 'servicios'),
		'capability_type'       => 'post',
	);


	register_post_type( 'servicios', $args );

}
add_action( 'init', 'custom_post_type_Servicios', 0 );


// Categoría

function registrar_taxonomia_Servicios() { 

//para las categorias

$labels = array ( 

'name' => 'Tipos de Serivicios',
'singular_name' => 'Tipo',
'search_items' => 'search_item',
'all_items' => 'Todos los servicios',
'parent_item' => 'Parent Item',
'parent_item_colon' => 'Parent Type:',
'edit_item' => 'Editar Categoría',
'update_item' => 'Actualizar Categoría',
'add_new_item' => 'Agregar nueva categoría',
'new_item_name' => 'Nombre de la nueva categoría',
'menu_name' => 'Tipo de Servicio'
);	

$args = array ( 

'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array ( 'slug' => 'tipos-servicios')

	);

register_taxonomy( 'tiposervicios', array( 'servicios' ), $args );

}

add_action( 'init', 'registrar_taxonomia_Servicios' );


// Junta Directiva

function custom_post_type_Directiva() {

	$labels = array(
		'name'                  => _x( 'Junta Directiva', 'Post Type General Name', 'directiva' ),
		'singular_name'         => _x( 'Junta Directiva', 'Post Type Singular Name', 'directiva' ),
		'menu_name'             => __( 'Junta Directiva', 'directiva' ),
		'name_admin_bar'        => __( 'Junta Directiva', 'directiva' ),
		'archives'              => __( 'Lista de servicios', 'directiva' ),
		'attributes'            => __( 'Atributos', 'directiva' ),
		'parent_item_colon'     => __( 'Categorias', 'directiva' ),
		'all_items'             => __( 'Todos los directivos', 'directiva' ),
		'add_new_item'          => __( 'Agregar nuevo directivo', 'directiva' ),
		'add_new'               => __( 'Agregar nuevo directivo', 'directiva' ),
		'new_item'              => __( 'Agregar nuevo directivo', 'directiva' ),
		'edit_item'             => __( 'Agregar nuevo directivo', 'directiva' ),
		'update_item'           => __( 'Actualiza los servicios', 'directiva' ),
		'view_item'             => __( 'Agregar nuevo directivo', 'directiva' ),
		'view_items'            => __( 'Ver directivo', 'directiva' ),
		'search_items'          => __( 'Ver directivo', 'directiva' ),
		'not_found'             => __( 'Directivo no encontrado', 'directiva' ),
		'not_found_in_trash'    => __( 'No hay directivo en la basura', 'directiva' ),
		'featured_image'        => __( 'Imagen destacada', 'directiva' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'directiva' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'directiva' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'directiva' ),
		'insert_into_item'      => __( 'Insertar dentro del directivo', 'directiva' ),
		'uploaded_to_this_item' => __( 'Actualizar a este directivo', 'directiva' ),
		'items_list'            => __( 'Lista de directivo', 'directiva' ),
		'items_list_navigation' => __( 'Items list navigation', 'directiva' ),
		'filter_items_list'     => __( 'Filtrar directivo en lista', 'directiva' ),
	);

	$args = array(
		'label'                 => __( 'Directio', 'directiva' ),
		'description'           => __( 'Detalles de los directivos', 'directiva' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'has_archive'           => true,       
		'publicly_queryable'    => true,
		'query_var'             => 'directiva',
		'rewrite'               => array('slug', 'directiva'),
		'capability_type'       => 'post',
	);


	register_post_type( 'directiva', $args );

}
add_action( 'init', 'custom_post_type_Directiva', 0 );

 ?>