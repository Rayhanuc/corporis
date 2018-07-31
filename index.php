<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Corporis
 */

/*
variable sore for codestar framwork apply start 
breadcrumb content
*/

$breadcrumb_title = cs_get_option('breadcrumb_title');
$breadcrumb_title_home = cs_get_option('breadcrumb_title_home');
$breadcrumb_img = cs_get_option('breadcrumb_img');
$breadcrumb_img_array = wp_get_attachment_image_src( cs_get_option('breadcrumb_img'), 'large' );
if(!empty($breadcrumb_img)) {
	$breadcrumb_img = $breadcrumb_img_array[0];
} else {
 	$breadcrumb_img = ''.get_template_directory_uri().'/assets/imgs/bn-1.jpg';
 }



/*
variable sore for codestar framwork apply start
*/






get_header(); ?>


	<!-- breadcrumb area markup start -->
	<section class="ImageBackground ImageBackground--overlay v-align-parent u-height450 js-Parallax" data-overlay="6" style="margin-top: 80px;">
        <div class="ImageBackground__holder" style="background-image: url(&quot;assets/imgs/bn-1.jpg&quot;); background-position: 50% 32px;">
			

            <img src="<?php echo $breadcrumb_img ;?>" alt="...">
        </div>
        <div class="v-align-child">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-8 col-xs-12 text-white ">
                        <h1 class="u-Margin0 u-Weight700"><?php echo $breadcrumb_title;?></h1>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <ol class="breadcrumb text-white u-MarginTop10 u-MarginBottom0 pull-right">
                            <li><a href="#"><?php echo $breadcrumb_title_home;?></a></li>
                            <li class="active"><span><?php echo $breadcrumb_title;?></span></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
	<!-- breadcrumb area markup end -->




	<div class="container u-MarginTop100 u-xs-MarginTop30">
        <div class="row">
		<main id="main" class="site-main <?php echo esc_attr( corporis_blog_class($col='main') )?>">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	<?php	get_sidebar(); ?>
	</div><!-- #primary -->
</div><!-- container end -->

<?php

get_footer();
