<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<div class="custom-header">

    <nav role="navigation" class="navbar-fixed-top">
        <div id="menuToggle">
            <div class="wrap row">
                <div style="width: 95%; margin: 0 auto;">
                    <div class="col-xs-6 col-sm-6 col-md-5"><img class="logo-imanage"
                                                                 src="wp-content/themes/iManage/images/banner-top/imanage-logo.png"
                                                                 onclick="window.scrollTo(0, 0);">
                    </div>
                    <div class="col-xs-2 col-sm-2 col-sm-push-4 col-xs-push-4 col-md-2 col-md-push-0"
                         style="padding-left: 0px; padding-right: 0px; cursor: pointer;"><img
                            class="menu-icon img-responsive center-block"
                            src="wp-content/themes/iManage/images/banner-top/menu-icon.png"></div>
                    <div class="col-md-5"></div>
                </div>
            </div>

            <ul id="menu">
                <div class="row">
                    <div class="col-xs-5"></div>
                    <div class="col-xs-2" style="padding-left: 0px; padding-right: 0px; cursor: pointer;"><img
                            class="menu-icon-close img-responsive center-block"
                            src="wp-content/themes/iManage/images/banner-top/menu-icon-close.png"></div>
                    <div class="col-xs-5"></div>
                </div>
                <a class="menu-active" onclick="jumpTo('AboutUs')">
                    <li>ABOUT</li>
                </a>
                <a class="menu-active" onclick="jumpTo('People')">
                    <li>PEOPLE</li>
                </a>
                <a class="menu-active" onclick="jumpTo('Services')">
                    <li>SERVICES</li>
                </a>
                <a class="menu-active" onclick="jumpTo('Clients')">
                    <li>CLIENTS</li>
                </a>
                <a class="menu-active" onclick="jumpTo('Testimonials')">
                    <li>TESTIMONIALS</li>
                </a>
                <a class="menu-active" onclick="jumpTo('Contact')">
                    <li>CONTACT</li>
                </a>
            </ul>
        </div>
    </nav>

    <div>
        <div id="TopOfPage">
            <div class="wrap header-stuff" style="width: 95%; margin: 0 auto;">
                <img class="wow fadeInLeft img0" src="wp-content/themes/iManage/images/banner-top/header-background.png">
                <div class="twoIMG">
                    <img class="wow fadeInLeft img1" src="wp-content/themes/iManage/images/banner-top/pic-02.jpg">
                    <img class="wow fadeInRight img2" src="wp-content/themes/iManage/images/banner-top/pic-01.jpg">
                    <h1>Managing with details!</h1>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4"><img onclick="jumpTo('AboutUs')" style="cursor: pointer;"
                                       class="wow bounceIn img-responsive center-block scrollIconDown"
                                       data-wow-duration="2s"
                                       src="wp-content/themes/iManage/images/banner-top/scroll-icon.png">
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>


    <div class="scroll-top-icon"><img onclick="jumpTo('TopOfPage')"
                                      src="wp-content/themes/iManage/images/banner-top/scroll-top-icon.png"></div>

    <!--	<div class="custom-header-media">-->
    <!--		--><?php //the_custom_header_markup(); ?>
    <!--	</div>-->
    <!--	--><?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
<script>


    function jumpTo(ele) {
        jQuery('html, body').animate({
            scrollTop: jQuery('#' + ele + '').offset().top - 150
        }, 2000);
    }


</script>