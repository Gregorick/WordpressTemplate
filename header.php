<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta title="<?php bloginfo('title') ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="profile" href="http://gmpg.org/xfn/11">
     <?php if(is_singular() && pings_open( get_queried_object() )); ?>
     <link rel="pingback" href="<?php bloginfo( 'pingback' ) ?>">
    <title><?php bloginfo( 'title' ) ?></title>
     <?php wp_head() ?>
</head>
<body body_class()>
 <div class="contenedor">