<?php

class corporis_styles{
	public function __construct(){
		add_action('wp_enqueue_scripts', array($this,'enqueue'));
	}

	public function enqueue(){
		
		wp_enqueue_style( 'bootstrap', CORPORIS_VENDOR_ASSETS_URI.'bootstrap/css/bootstrap.min.css', array(),'3.3.6', 'all');
		wp_enqueue_style( 'bootsnav', CORPORIS_VENDOR_ASSETS_URI.'bootsnav/css/bootsnav.css', array(),'1.0', 'all');
		wp_enqueue_style( 'font-awesome', CORPORIS_VENDOR_ASSETS_URI.'font-awesome/css/font-awesome.min.css', array(),'4.7.0', 'all');
		wp_enqueue_style( 'style', CORPORIS_VENDOR_ASSETS_URI.'custom-icon/css/style.css', array(),'1.0', 'all');
		wp_enqueue_style( 'owl.carousel', CORPORIS_VENDOR_ASSETS_URI.'owl.carousel2/owl.carousel.min.css', array(),'2.2.0', 'all');
		wp_enqueue_style( 'magnific-popup', CORPORIS_VENDOR_ASSETS_URI.'magnific-popup/magnific-popup.css', array(),'1.0', 'all');
		wp_enqueue_style( 'animate', CORPORIS_VENDOR_ASSETS_URI.'animate.css/animate.min.css', array(),'3.5.1', 'all');
		wp_enqueue_style( 'swiper', CORPORIS_VENDOR_ASSETS_URI.'swiper/css/swiper.min.css', array(),'3.3.1', 'all');
		wp_enqueue_style( 'main', CORPORIS_CSS_URI.'main.css', array(),'1.0.0', 'all');
		wp_enqueue_style( 'main', CORPORIS_CSS_URI.'theme-color.css', array(),'1.0.0', 'all');
	}
}

new corporis_styles;

?>
