<?php

class Corporis_Sidebars {
	public function __construct() {
		add_action( 'widgets_init', array($this, 'register') );
	}


	public function register() {
		//footer column 1 start
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer First Column', 'corporis' ),
			'id'			=> 'footer-1',
			'description'	=> esc_html__( 'Add widgets here for footer first column', 'corporis' ),
			'before_widget'	=> '<div class="u-xs-MarginBottom30">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<div class="logo u-MarginBottom25">
								<h3 class="u-Weight700 u-MarginTop0">',
			'after_title'	=> '</div>
								</h3>'
		));
		//footer column 1 end

		//footer column 2 start
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer Second Column', 'corporis' ),
			'id'			=> 'footer-2',
			'description'	=> esc_html__( 'Add widgets here for footer second column', 'corporis' ),
			'before_widget'	=> '<div class="u-xs-MarginBottom30">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">',
			'after_title'	=> '</h5>'
		));
		//footer column 2 end

		//footer column 3 start
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer Third Column', 'corporis' ),
			'id'			=> 'footer-3',
			'description'	=> esc_html__( 'Add widgets here for footer third column', 'corporis' ),
			'before_widget'	=> '<div class="u-xs-MarginBottom30">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">',
			'after_title'	=> '</h5>'
		));
		//footer column 3 end

		//footer column 4 start
		register_sidebar( array(
			'name'			=> esc_html__( 'Footer Fourth Column', 'corporis' ),
			'id'			=> 'footer-4',
			'description'	=> esc_html__( 'Add widgets here for footer fourth column', 'corporis' ),
			'before_widget'	=> '<div>',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">',
			'after_title'	=> '</h5>'
		));
		//footer column 4 end
	}

}


new Corporis_Sidebars;

?>