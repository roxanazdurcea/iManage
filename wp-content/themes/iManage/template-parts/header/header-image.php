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

    <nav role="navigation" class="navbar-fixed-top" style="background-color: #0a0101; height: 120px;">
        <div id="menuToggle">
            <div class="row wrap">
                <div class="col-xs-9 col-sm-4"><img style="position: absolute; left:2%; top:2%; z-index: 1;"
                                                    src="wp-content/themes/iManage/images/banner-top/imanage-logo.png">
                </div>
                <div class="col-xs-2 col-sm-4" style="padding-left: 0px; padding-right: 0px;"><img
                        class="menu-icon img-responsive center-block"
                        src="wp-content/themes/iManage/images/banner-top/menu-icon.png"></div>
                <div class="col-xs-1 col-sm-4"></div>
            </div>

            <ul id="menu">
                <div class="row">
                    <div class="col-xs-5"></div>
                    <div class="col-xs-2" style="padding-left: 0px; padding-right: 0px;"><img
                            class="menu-icon-close img-responsive center-block"
                            src="wp-content/themes/iManage/images/banner-top/menu-icon-close.png"></div>
                    <div class="col-xs-5"></div>
                </div>
                <a class="menu-active" href="#AboutUs">
                    <li>ABOUT</li>
                </a>
                <a class="menu-active" href="#People">
                    <li>PEOPLE</li>
                </a>
                <a class="menu-active" href="#Services">
                    <li>SERVICES</li>
                </a>
                <a class="menu-active" href="#Clients">
                    <li>CLIENTS</li>
                </a>
                <a class="menu-active" href="#Testimonials">
                    <li>TESTIMONIALS</li>
                </a>
                <a class="menu-active" href="#Contact">
                    <li>CONTACT</li>
                </a>
            </ul>
        </div>
    </nav>

    <div>
        <div style="background-color: #0a0101; margin-bottom: 10%;">
            <div class="wrap header-stuff">
                <img class="wow fadeInLeft img1" src="wp-content/themes/iManage/images/banner-top/pic-02.jpg">
                <img class="wow fadeInRight img2" src="wp-content/themes/iManage/images/banner-top/pic-01.jpg">
                <h1>Managing with details!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4"><a href="#AboutUs"><img class="wow bounceIn img-responsive center-block"
                                                          data-wow-duration="2s"
                                                          src="wp-content/themes/iManage/images/banner-top/scroll-icon.png"></a>
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>


    <!--	<div class="custom-header-media">-->
    <!--		--><?php //the_custom_header_markup(); ?>
    <!--	</div>-->
    <!--	--><?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
