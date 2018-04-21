<?php
function page_title_section(){
	$pagemeta = get_post_meta( get_the_ID(), '_page_metabox', true );
	$enable_page_title_section = isset ($pagemeta['enable_title']) ? $pagemeta['enable_title'] : array();
	$title_image = isset ($pagemeta['title_image']) ? $pagemeta['title_image'] : array();
	$title_color = isset ($pagemeta['title_color']) ? $pagemeta['title_color'] : array();

	if($enable_page_title_section == 'yes') :
	
	?>
	<section class="ImageBackground ImageBackground--overlay v-align-parent u-height450 js-Parallax" data-overlay="6" style="background-color: <?php echo $title_color?>;">
		<?php if(!empty($title_image)): ?>
        <div class="ImageBackground__holder">

        	<?php $image = wp_get_attachment_image_url( $title_image, 'full') ?>


            <img src="<?php echo $image;?>" alt="...">
        </div>
    	<?php endif;?>
        <div class="v-align-child">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-8 col-xs-12 text-white ">
                        <h1 class="u-Margin0 u-Weight700"><?php single_post_title();?></h1>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <ol class="breadcrumb text-white u-MarginTop10 u-MarginBottom0 pull-right">
                            <li><a href="<?php echo home_url('/');?>">Home</a></li>
                            <li class="active"><span><?php single_post_title();?></span></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; }



?>