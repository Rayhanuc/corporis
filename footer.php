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

?>

    <!--footer start-->
    <footer class="bg-darker u-PaddingTop55">
        <div class="container text-sm">
            <div class="row">
                <div class="col-md-3 u-xs-MarginBottom30">
                    <div class="logo u-MarginBottom25">
                        <h3 class="u-Weight700 u-MarginTop0">
                            <!--<img src="assets/imgs/logo-light.png" alt="">-->
                            <?php echo cs_get_option('footer-title');?><!-- codestar framework option -->
                        </h3>
                    </div>
                    <p>Corporis is  fully responsible, performance oriented and SEO optimized, retina ready HTML template.</p>
                    <h5 class="u-Weight700">Corporis LLC</h5>
                    <p>Street nr 100, 4536534, Chicago, US</p>

                    <p>T (212) 555 55 00 <br>
                        Email: sales@yourwebsite.com
                    </p>
                </div>
                <div class="col-md-3 u-xs-MarginBottom30">
                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Follow Us</h5>
                    <ul class="light-gray-link border-bottom-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>About Us</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Career</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Terms &amp; Condition</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Privacy Policy</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 u-xs-MarginBottom30">
                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Recent Post</h5>
                    <ul class="light-gray-link list-unstyled u-MarginBottom0">
                        <li class="u-MarginBottom15">
                            <a class="" href="#">
                                The ultimate guide to freelancing as a creative...
                            </a>
                            <p class="">24 February 2017</p>
                        </li>
                        <li class="u-MarginBottom15">
                            <a class="" href="#">
                                Searching for the best UX: search forms and boxes in web design
                            </a>
                            <p>19 January 2017</p>
                        </li>
                        <li class="u-MarginBottom15">
                            <a class="" href="#">
                                Top 10 free tools for frontend web development
                            </a>
                            <p>2 January 2017</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Subscribe</h5>

                    <form action="">
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </form>

                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop50">We are Social</h5>
                    <div class="social-links sl-default gray-border-links border-link circle-link colored-hover">
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="g-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#" class="dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center u-MarginTop30">
            <div class="footer-separator"></div>
            <p class="u-MarginBottom0 u-PaddingTop30 u-PaddingBottom30 small">Copyright 2017 @ Corporis. All Rights Reserved.</p>
        </div>
    </footer>
    <!--footer end-->

    

	<?php wp_footer();?>
</body>
</html>