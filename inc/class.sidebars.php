<?php

class Corporis_Sidebars {
	public function __construct() {
		add_action( 'widgets_init', array($this, 'register') );
	}


	public function register() {
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer First Column', 'corporis' ),
			'id'			=> 'footer-1',
			'description'	=> esc_html__( 'Add widgets here for footer first column', 'corporis' ),
			'before_widget'	=> '</section id = "%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>',
			'before_title'	=> '<h4 class="u-weight700">',
			'after_title'	=> '</h4>'
		));
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer Second Column', 'corporis' ),
			'id'			=> 'footer-2',
			'description'	=> esc_html__( 'Add widgets here for footer second column', 'corporis' ),
			'before_widget'	=> '</section id = "%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>',
			'before_title'	=> '<h4 class="u-weight700">',
			'after_title'	=> '</h4>'
		));
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer Third Column', 'corporis' ),
			'id'			=> 'footer-3',
			'description'	=> esc_html__( 'Add widgets here for footer third column', 'corporis' ),
			'before_widget'	=> '</section id = "%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>',
			'before_title'	=> '<h4 class="u-weight700">',
			'after_title'	=> '</h4>'
		));
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer Fourth Column', 'corporis' ),
			'id'			=> 'footer-4',
			'description'	=> esc_html__( 'Add widgets here for footer fourth column', 'corporis' ),
			'before_widget'	=> '</section id = "%1$s" class="widget %2$s">',
			'after_widget'	=> '</section>',
			'before_title'	=> '<h4 class="u-weight700">',
			'after_title'	=> '</h4>'
		));
	}

}


new Corporis_Sidebars;

?>