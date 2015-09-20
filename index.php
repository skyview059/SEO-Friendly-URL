<?php

$rules = array( 
                'category'  => "/category/(?'cat_name'[\w\-]+)([^/]+)",			// 3 '/category/category-slug'
                'details'  => "/details/(?'details'[^/]+)",					// 2 '/detals/album-slug'		
                'search'  => "/search/(?'key'[^/]+)([^/]+)",					// 2 '/detals/album-slug'
                'page'  => "/(?'page'[\w\-]+)([^/]+)", 						// 1 'page.html'	
                'home'  => "/"   
        );

$uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
$uri = '/' . trim( str_replace( $uri, '', $_SERVER['REQUEST_URI'] ), '/' );

foreach ( $rules as $get_url_pram=>$rule ) {

    if ( preg_match( '~^'.$rule.'$~i', $uri, $params ) ) {

            echo $get_url_pram;

      // Now page 

    }
}
