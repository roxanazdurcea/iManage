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


    <nav role="navigation">
        <div id="menuToggle">
            <!--            <div class="circle"></div>-->
            <!--            <input type="checkbox"/>-->
            <!--            <span></span>-->
            <!--            <span></span>-->
            <!--            <span></span>-->
            <img class="menu-icon" style="position: absolute;"
                 src="wp-content/themes/iManage/images/banner-top/menu-icon.png">
            <ul id="menu">
                <img class="menu-icon-close" style="position: absolute; width: 4%; top: 50px; left: 48%;"
                     src="wp-content/themes/iManage/images/banner-top/menu-icon-close.png">
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
        <div style="background-color: #0a0101; height: 700px; position: relative;"></div>
        <div class="wrap" style="position: absolute; height: 800px; top:0; left:0;">
            <img src="wp-content/themes/iManage/images/banner-top/imanage-logo.png">
            <div class="row">
                <div class="col-sm-6">
                    <img src="wp-content/themes/iManage/images/banner-top/pic-02.jpg">
                </div>
                <div class="col-sm-6">
                    <img src="wp-content/themes/iManage/images/banner-top/pic-01.jpg">
                </div>
            </div>
            <h1 style="text-align: center; width: 60%; color: #fff; font-size: 2.5rem; line-height: 2.7rem; font-weight: 400; font-family: 'Bree Serif',serif;">Managing with details!</h1>
        </div>
    </div>

<!--    <div>-->
<!--        <div style="background-color: #0a0101;">-->
<!--            <div class="wrap" style="position: relative; height: 800px;">-->
<!---->
<!--                <img style="position: absolute; left:2%; top:2%;"-->
<!--                     src="wp-content/themes/iManage/images/banner-top/imanage-logo.png">-->
<!--                <img class="wow bounceInUp" style="position: absolute; left:2%; top:17%; width:48%; "-->
<!--                     src="wp-content/themes/iManage/images/banner-top/pic-02.jpg">-->
<!--                <img style="position: absolute; right:2%; top:25%; width:48%; "-->
<!--                     src="wp-content/themes/iManage/images/banner-top/pic-01.jpg">-->
<!--                <h1 style="position: absolute; left: 20%; top: 40%; text-align: center; width: 60%; color: #fff; font-size: 2.5rem; line-height: 2.7rem; font-weight: 400; font-family: 'Bree Serif',serif;">-->
<!--                    Managing with details!</h1>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->

    <!--	<div class="custom-header-media">-->
    <!--		--><?php //the_custom_header_markup(); ?>
    <!--	</div>-->
    <!--	--><?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->


<style>
    #menu li {
        padding: 10px 0;
        color: #fff;
        font-size: 2.5rem;
        line-height: 2.7rem;
        font-weight: 400;
        font-family: 'Bree Serif', serif;
    }

    #menu a {
        text-align: center;
        text-decoration: none;
        color: #fff;
        transition: color 0.3s ease;
    }

    #menu a:hover {
        text-decoration: none;
        color: #fff;
    }

    /*.circle {*/
    /*border: 3px solid #fff;*/
    /*height: 50px;*/
    /*border-radius: 50%;*/
    /*-moz-border-radius: 50%;*/
    /*-webkit-border-radius: 50%;*/
    /*width: 50px;*/
    /*top: -12px;*/
    /*left: -9px;*/
    /*position: absolute;*/
    /*}*/

    #menuToggle {
        display: block;
        position: relative;
        top: 50px;
        left: 50%;
        z-index: 1;
        -webkit-user-select: none;
        user-select: none;
    }

    /*#menuToggle input {*/
    /*display: block;*/
    /*width: 40px;*/
    /*height: 32px;*/
    /*position: absolute;*/
    /*top: -7px;*/
    /*left: -5px;*/
    /*cursor: pointer;*/
    /*opacity: 0; !* hide this *!*/
    /*z-index: 2; !* and place it over the hamburger *!*/
    /*-webkit-touch-callout: none;*/
    /*}*/

    /*  hamburger icon*/
    /*#menuToggle span {*/
    /*display: block;*/
    /*width: 33px;*/
    /*height: 4px;*/
    /*margin-bottom: 5px;*/
    /*position: relative;*/
    /*background: #fff;*/
    /*border-radius: 3px;*/
    /*z-index: 1;*/
    /*transform-origin: 4px 0px;*/
    /*transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),*/
    /*background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),*/
    /*opacity 0.55s ease;*/
    /*}*/

    /*#menuToggle span:first-child {*/
    /*transform-origin: 0% 0%;*/
    /*}*/

    /*#menuToggle span:nth-last-child(2) {*/
    /*transform-origin: 0% 100%;*/
    /*}*/
    /* Transform all the slices of hamburger into a cross. */
    /*#menuToggle input:checked ~ span {*/
    /*opacity: 1;*/
    /*transform: rotate(45deg) translate(-2px, -1px);*/
    /*background: #fff;*/
    /*}*/
    /*  hide the middle one. */
    /*#menuToggle input:checked ~ span:nth-last-child(3) {*/
    /*opacity: 0;*/
    /*transform: rotate(0deg) scale(0.2, 0.2);*/
    /*}*/
    /* the last one goes in the other direction */
    /*#menuToggle input:checked ~ span:nth-last-child(2) {*/
    /*opacity: 1;*/
    /*transform: rotate(-45deg) translate(0, -1px);*/
    /*}*/
    /*  Make this absolute positioned at the left of the screen  */
    #menu {
        position: absolute;
        width: 100%;
        margin: -80px 0 0 -50%;
        padding: 50px;
        padding-top: 125px;
        background: rgba(26, 26, 26, 1);
        list-style-type: none;
        -webkit-font-smoothing: antialiased;
        transform-origin: 0% 0%;
        transform: translate(-100%, 0);
        transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
        height: 100vh;
    }

    /* fade it in from the left  */
    /*#menuToggle input:checked ~ ul {*/
    /*transform: scale(1.0, 1.0);*/
    /*opacity: 1;*/
    /*}*/

</style>

<script>

    new WOW().init();

    //    jQuery("input").click(function () {
    //        jQuery(document.body).css('overflow', 'hidden');
    //
    //    });
    //    jQuery(".menu-active").click(function () {
    //        jQuery(document.body).css('overflow', 'auto');
    //        jQuery("#menuToggle input:checked ~ ul").hide();
    //    });
    jQuery(".menu-icon").click(function () {
        jQuery("#menu").css({
            "transform": "scale(1.0, 1.0)",
            "opacity": "1"
        });
        jQuery(document.body).css('overflow', 'hidden');

    });
    jQuery(".menu-active").click(function () {
        jQuery(document.body).css('overflow', 'auto');
        jQuery("#menu").css({
            "transform": "scale(0, 0)",
            "opacity": "0"
        });
    });
    jQuery(".menu-icon-close").click(function () {
        jQuery(document.body).css('overflow', 'auto');
        jQuery("#menu").css({
            "transform": "scale(0, 0)",
            "opacity": "0"
        });
    });
</script>