<?php
function parent_css_theme_style() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'parent_css_theme_style' );

function childtwentytwelve_widgets_init(){
	register_sidebar( array(
		'name' => __( 'Top Widget Area', 'twentytwelve' ),
		'id' => 'top',
		'description' => __( 'Top position near the title', 'childtwentytwelve' ),
		'before_widget' => '<div id="%1$s" class="top widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'childtwentytwelve_widgets_init' );