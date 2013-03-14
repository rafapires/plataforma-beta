<?php

//habilita menu dinamico
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menus(
        array(
            'topmenu' => 'Menu no topo da pagina',
            'footermenu' => 'Menu no rodapé'
        )
    );
}

add_theme_support( 'post-thumbnails' ); 

?>
