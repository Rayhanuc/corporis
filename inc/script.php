<?php

class Corporis_Script{
	public function __construct(){
		add_action('wp_enqueue_scripts', array($this,'enqueue'));
	}
	public function enqueue(){
		wp_enqueue_script( 'bootstrap', CORPORIS_VENDOR_ASSETS_URI.'bootstrap/js/bootstrap.min.js', array('jquery'),'3.3.6', true );
		wp_enqueue_script( 'bootsnav', CORPORIS_VENDOR_ASSETS_URI.'bootsnav/js/bootsnav.js', array('jquery'),'CORPORIS_VERSION', true );
		wp_enqueue_script( 'countTo', CORPORIS_VENDOR_ASSETS_URI.'jquery.countTo/jquery.countTo.min.js', array('jquery'),'1.2.0', true );
		wp_enqueue_script( 'owl.carousel', CORPORIS_VENDOR_ASSETS_URI.'owl.carousel2/owl.carousel.min.js', array('jquery'),'2.2.0', true );
		wp_enqueue_script( 'appear', CORPORIS_VENDOR_ASSETS_URI.'jquery.appear/jquery.appear.js', array('jquery'),'CORPORIS_VERSION', true );
		wp_enqueue_script( 'isotope', CORPORIS_VENDOR_ASSETS_URI.'isotope/isotope.pkgd.min.js', array('jquery'),'3.0.1', true );
		wp_enqueue_script( 'imagesloaded', CORPORIS_VENDOR_ASSETS_URI.'imagesloaded/imagesloaded.js', array('jquery'),'CORPORIS_VERSION', true );
		wp_enqueue_script( 'magnific-popup', CORPORIS_VENDOR_ASSETS_URI.'magnific-popup/jquery.magnific-popup.min.js', array('jquery'),'CORPORIS_VERSION', true );
		wp_enqueue_script( 'countdown', CORPORIS_VENDOR_ASSETS_URI.'jquery.countdown.min.js', array('jquery'),'2.2.0', true );
		wp_enqueue_script( 'swiper', CORPORIS_VENDOR_ASSETS_URI.'swiper/js/swiper.min.js', array('jquery'),'3.3.1', true );
		wp_enqueue_script( 'main', CORPORIS_JS_URI.'main.js', array('jquery'),'CORPORIS_VERSION', true );
	}
}


new Corporis_Script;


?>