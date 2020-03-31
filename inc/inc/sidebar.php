<?php 

/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$args = array(
	'name'          => __( 'Columna Dercha', 'cderecha' ),
	'id'            => 'cderecha',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1" class="widget %2">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
);

register_sidebar( $args );


/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$cderecha = array(
	'name'          => __( 'Columna Derecha Blog', 'cderechablog' ),
	'id'            => 'cderechablog',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1" class="widget %2">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
);

register_sidebar( $cderecha );
