<?php 

/* REGISTRAR MENUS */

register_nav_menu( 'principal', 'Menu Principal' );
register_nav_menu( 'segundo-principal', 'Segundo Principal' );


/*  REGISTRAR HEADER BACKGROUND  */

add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );

/* REGISTRAR IMAGENES EN LAS ENTRADAS */ 

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 350, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-general', 1200, 350 ); //300 pixels wide (and unlimited height)
    add_image_size( 'principal-banner', 760, 450 ); //300 pixels wide (and unlimited height)
    add_image_size( 'principal-right', 100, 75 ); //300 pixels wide (and unlimited height)
    add_image_size( 'carousel-blog', 253, 142 ); //300 pixels wide (and unlimited height)
    add_image_size( 'portada-noticias', 340, 191 ); //300 pixels wide (and unlimited height)
    add_image_size( 'noticias-home', 94, 44 ); //300 pixels wide (and unlimited height)
    add_image_size( 'category-sidebar', 350 ); //300 pixels wide (and unlimited height)

}

// ACTIVANDO SIDEBAR

$args = array(
    'name'          => __( 'Columna Derecha', 'cderecha' ),
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
$cderechablog = array(
    'name'          => __( 'Columna Derecha Blog', 'cderechablog' ),
    'id'            => 'cderechablog',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $cderechablog );


/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$cderechasingle = array(
    'name'          => __( 'Columna Derecha Category', 'cderechasingle' ),
    'id'            => 'cderechasingle',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $cderechasingle );


/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$footeruno = array(
    'name'          => __( 'Primera Colunna Footer ', 'footeruno' ),
    'id'            => 'footeruno',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $footeruno );

/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$footerdos = array(
    'name'          => __( 'Segunda Colunna Footer ', 'footerdos' ),
    'id'            => 'footerdos',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $footerdos );

/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$footertres = array(
    'name'          => __( 'Tercera Colunna Footer ', 'footertres' ),
    'id'            => 'footertres',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $footertres);


/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$videosidebar = array(
    'name'          => __( 'Videos Sidebar ', 'videosidebar' ),
    'id'            => 'videosidebar',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1" class="widget %2">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
);

register_sidebar( $videosidebar);


/* EXTRATOS DE TEXTOS Y LEER MAS */

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length1', 10 );

function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 30 );


//  function wpdocs_excerpt_more( $more ) {
//      return sprintf( '<br><br><a class="read-more small hvr-bounce-to-right" href="%1$s">%2$s</a>',
//          get_permalink( get_the_ID() ),
//          __( 'Leer Más', 'textdomain' )
//      );
//  }
// add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// LIMITE DE PALABRAS EN LOS TITULOS

function custom_trim_my_title( $title ) {
    if ( strlen( $title ) >= 35 && ! is_singular() ) {
        $title = substr( $title, 0, 75 ) . '';
        return $title;
    }
    return $title;
}
add_filter( 'the_title', 'custom_trim_my_title' );

//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

 ?>