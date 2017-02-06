<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

</div><!-- #content -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>



<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrap">
<!--    <div class="container-fluid">-->
        <?php
        get_template_part('template-parts/footer/footer', 'widgets');

        if (has_nav_menu('social')) : ?>
            <nav class="social-navigation" role="navigation"
                 aria-label="<?php _e('Footer Social Links Menu', 'twentyseventeen'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'social',
                    'menu_class' => 'social-links-menu',
                    'depth' => 1,
                    'link_before' => '<span class="screen-reader-text">',
                    'link_after' => '</span>' . twentyseventeen_get_svg(array('icon' => 'chain')),
                ));
                ?>
            </nav><!-- .social-navigation -->
        <?php endif;

        get_template_part('template-parts/footer/site', 'info');
        ?>
    </div><!-- .wrap -->

    <script>

        (function ($) {
            //her heiness roxana's JS
            jQuery(document).ready(function () {

                jQuery('.insert-page > p:last').hide();

                function jumpTo(ele) {
                    jQuery('html, body').animate({
                        scrollTop: jQuery('#' + ele + '').offset().top - 150
                    }, 2000);
                }

                jumpTo('TopOfPage');

//                setTimeout(function () {
//                    window.scrollTo(0, 0);
//                }, 1000);


                //WOW
                new WOW().init();


                $(".menu-icon").click(function () {
                    $("#menu").css({
                        "transform": "scale(1.0, 1.0)",
                        "opacity": "1"
                    });
                    $(document.body).css('overflow', 'hidden');
                });

                $(".menu-active").click(function () {
                    $(document.body).css('overflow', 'auto');
                    $("#menu").css({
                        "transform": "scale(0, 0)",
                        "opacity": "0"
                    });
                });

                $(".menu-icon-close").click(function () {
                    $(document.body).css('overflow', 'auto');
                    $("#menu").css({
                        "transform": "scale(0, 0)",
                        "opacity": "0"
                    });
                });

                //People listeners
                $('.peopleStyle').on('hover', function () {
                    $(this).addClass('panel-people').removeClass('panel-people-fade');
                    $('.peopleStyle').not(this).addClass('panel-people-fade').removeClass('panel-people');
                });
                $('.peopleStyle').on('mouseout', function () {
                    $('.peopleStyle').addClass('panel-people').removeClass('panel-people-fade');
                });
                $('.peopleStyle').on('click', function () {
                    $('.bio-info-container').show();
                    var id = $(this).attr('id');
                    $.ajax({
                        type: "POST",
                        url: "wp-content/themes/iManage/assets/json/bio.json",
                        dataType: "json"
                    }).done(function (response) {
                        //replace bio div elements
                        $('#bio-name').html(response[id]['name']);
                        $('#bio-title').html(response[id]['title']);
                        $('#bio-description').html(response[id]['description']);
                        $('#bio-img img').attr('src', response[id]['image']);
                        //Scroll to bio div
                        jumpTo('bioContainer');
                    });
                });


                // boxes height
                var boxesHeight = function () {
                    $('.black-block').css('height', $('.dark-grey-block').height());
//                    $('.other-grey-block').css('height', $('.biggest-grey-block').height());
                }
                boxesHeight();
                $(window).resize(function () {
                    boxesHeight();
                });
                // boxes height

                //services json
                function ListServices() {
                    $.ajax({
                        type: "post",
                        url: "wp-content/themes/iManage/assets/json/services.json",
                        dataType: "json"
                    }).done(function (response) {

                        $.each(response, function (idx, obj) {
                            var x = (idx - 1 * (idx % 4 - idx) / 4);
                            var srvclass = (x % 2 === 0) ? "light-grey-block" : "medium-grey-block";
                            var html = '';
                            html += '<div id="srv_' + eval(idx + 1) + '" class="col-sm-6 col-md-3 ' + srvclass + ' service-grey-block">';
                            html += '<div style="padding: 5%;">';
                            html += '<div class="row">';
                            html += '<div class="col-xs-4"></div>';
                            html += '<div class="col-xs-4"><img class="img-responsive center-block" style="margin-top: 15px;" title="" src ="' + obj.icon + '" alt = "" /></div>';
                            html += '<div class="col-xs-4"></div>';
                            html += '</div>';
                            html += '<p class="grey-small-text">' + obj.number + '</p>';
                            html += '<h3>' + obj.title + '</h3>';
                            html += '<p>' + obj.short_description + '</p>';
                            html += '<div style="width: 20%; margin: 0 auto;"><a class="readMoreButton">Read more</a></div>';
                            html += '</div>';
                            html += '</div>';
                            $('#Services div:first').append(html);
                        });
                    });
                }

                ListServices();


                $(document).on('click', '.readMoreButton', function () {
                    $('.ServicesContainer').show();
                    var idx = $(this).closest('div.service-grey-block').attr('id').replace('srv_', '') - 1;
                    $.ajax({
                        type: "POST",
                        url: "wp-content/themes/iManage/assets/json/services.json",
                        dataType: "json"
                    }).done(function (response) {
                        $('.fadeInUp *').remove();
                        var obj = response[idx];
                        var html = '';

                        html += '<div class="row">';
                        html += '<div class="col-sm-12" style="padding: 2%; background-color: #f6f6f6;">';
                        html += '<div class="pull-right" id="removeService"><img style="zoom: 30%; cursor: pointer;" src="wp-content/themes/iManage/images/banner-top/icon-close.png" /></div>';
                        html += '<div class="generalStyle">';
                        html += '<h3 id="serviceTitle">' + htmlEntities(obj.title) + '</h3>';
                        html += '<br /">';
                        html += '<div class="row">';
                        html += '<div class="col-sm-5" style="padding-left: 0px;">';
                        html += '<h4 id="serviceObjective">OBJECTIVE</h4>';
                        html += '<p>' + obj.long_description.objective + '</p>';
                        html += '<h4 id="serviceScope">SCOPE</h4>';
                        html += '<p>' + obj.long_description.scope + '</p>';
                        html += '</div>';
                        html += '<div class="col-sm-7">';
                        html += '<h4 id="serviceMethodology">METHODOLOGY</h4>';
                        html += '<p>' + obj.long_description.methodology + '</p>';
                        html += '<h4 id="serviceDeliverables">DELIVERABLES</h4>';
                        html += '<p>' + obj.long_description.deliverables + '</p>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';

                        $('.fadeInUp').html(html);
                        if(!obj.long_description.objective) $('#serviceObjective').hide();
                        if(!obj.long_description.scope) $('#serviceScope').hide();
                        if(!obj.long_description.methodology) $('#serviceMethodology').hide();
                        if(!obj.long_description.deliverables) $('#serviceDeliverables').hide();

                        jumpTo('removeService');
                    });
                });

                $(document).on('click','#removeService', function() {
                    $('.fadeInUp *').remove();
                    ListServices();
                });

                // scroll top arrow image
                $(document).scroll(function () {
                    var y = $(this).scrollTop();
                    if (y > 1200) {
                        $('.scroll-top-icon').fadeIn();
                    } else {
                        $('.scroll-top-icon').fadeOut();
                    }
                });

                function htmlEntities(str) {
                    return String(str).replace('<br />',' ').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
                }


            });
        })(jQuery);
    </script>


</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>


