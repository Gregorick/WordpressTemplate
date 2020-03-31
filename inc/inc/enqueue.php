<?php 
/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function theme_name_scripts() {
	wp_enqueue_style( 'estilos', get_template_directory_uri() . '/sass/estilos.css', array(), '1.0.0', 'all' );	
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900');
    wp_enqueue_style( 'swiperslider', get_template_directory_uri() . '/css/swiper.min.css', array(), '4.0.0', 'all' );
		wp_enqueue_script( 'swipersliderjs', get_template_directory_uri() .  '/js/swiper.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_script( 'generales', get_template_directory_uri() . '/js/generales.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'fontAwesome', 'https://kit.fontawesome.com/cba5a97b01.js');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );