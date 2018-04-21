<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Corporis
 */

$footer_column = cs_get_option('footer_widget_columns');
$display_footer = false;
?>

    <!--footer start-->
    <footer class="bg-darker u-PaddingTop55" style="background-color:<?php echo cs_get_option('footer-bg-color');?>; 

                    font-family:<?php
                         $fonts=cs_get_option('font-family');
                         foreach ($fonts as $key => $value) {
                            echo $value." ";
                            var_dump($value);
                         }
                    ?>

                    ">
        <div class="container text-sm">

            <div class="row">

                <?php for($i = 1; $i<=$footer_column; $i++){?>

                <div class="col-md-<?php echo esc_attr(12/$footer_column);?> u-xs-MarginBottom30">

                    <?php dynamic_sidebar("footer-{$i}");?>

                </div>

                <?php }?>

            </div>
        </div>
        <div class="text-center u-MarginTop30">
            <div class="footer-separator"></div>
            <p class="u-MarginBottom0 u-PaddingTop30 u-PaddingBottom30 small" style="background-color:<?php echo cs_get_option('copyright-bg-color');?>">
                <?php

                $copyright = cs_get_option( 'footer-copyright' );

                echo $copyright;

                ?>
                
            </p>
        </div>
    </footer>
    <!--footer end-->

    

    <?php wp_footer();?>
</body>
</html>