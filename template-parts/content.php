<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Corporis
 */

?>
<!-- Content area start -->
<div class="blog-post">
    <div class="b-title">
        <span class="default-color">
        	<a  href="<?php the_permalink()?>"><?php the_tags('');?></a>
        </span>
        <h1 class="u-MarginTop10 u-MarginBottom10">
        	<a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h1>
        <p class="u-MarginBottom30">By <a href="<?php the_author_link();?>"><?php the_author();?></a>   |   <a href="#"><?php the_time('d M Y');?></a></p>
    </div>
    <div class="b-thumb u-MarginBottom30">
        <?php the_post_thumbnail();?>
    </div>
    <div class="b-txt">
        <p class="u-LineHeight2"><?php echo wp_trim_words( get_the_content(), 45, false );?></p>
        <p class="u-MarginTop35 u-MarginBottom0">
            <span class="default-color">
            	<a class="btn-go default-color" href="<?php the_permalink();?>" role="button">Continue Reading <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </span>
        </p>
    </div>
</div>
<!-- Content area end -->
<div class="u-MarginTop100 u-xs-MarginTop30 u-MarginBottom100 u-xs-MarginBottom30">
    <hr>
</div>
