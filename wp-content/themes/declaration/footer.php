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
<div class="footer-top-reserv">
    <div class="container">
        <div class="bottom-section-btns">
            <div class="row header-text">
                <?php $pageid = 6; ?>
                <?php the_field('partner_content', $pageid); ?>
            </div>
            <div class="row btn-box">
                <div class="col-md-4 col-sm-4 order-1 order-md-3">
                    <a href="<?php the_field('contact_us_button_link', $pageid); ?>"><?php the_field('contact_us_button', $pageid); ?></a>
                </div>
                <div class="col-md-4 col-sm-4 order-2">
                    <a id="reserveTable1" href="<?php the_field('make_a_reservation_button_link', $pageid); ?>"><?php the_field('make_a_reservation_button', $pageid); ?></a>
                </div>
                <div class="col-md-4 col-sm-4 order-3 order-md-1">
                    <a href="<?php the_field('pizza_delivery_button_link', $pageid); ?>"><?php the_field('pizza_delivery_button', $pageid); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- #content -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                online ordering coming soon
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>	
        </div>
        <p class="float-right"><a href="javascript:;" class="back-to-top-arrow">Back to top</a></p>
    </div>
</footer>
</div><!-- .site-content-contain --> 
</div><!-- #page -->
<script>
    jQuery(document).ready(function ($) {
        var wid = $(window).width();
        if (wid > 1024) {
            skrollr.init({
                forceHeight: true,
                easing: {
                    vibrate: function (p) {
                        return Math.sin(p * 10 * Math.PI);
                    }
                }
            });
        }
        $(window).resize(function () {
            var wid = $(window).width();
            if (wid > 1024) {
                skrollr.init({
                    forceHeight: true,
                    easing: {
                        vibrate: function (p) {
                            return Math.sin(p * 10 * Math.PI);
                        }
                    }
                });
            }
        });
//        console.log($(window).width());
        $('.es_textbox, .es_button').wrapAll('<div class="main-form" />');
    });
    (function ($) {
        $(".postitem,.menu-items-details,.menu-week-sec,.titlePannel").css("display", "none");
        $(".postitem").slice(0, 4).show();
        if ($(".postitem").length < 3) {
            $(".load-more-about").fadeOut('slow');
        }
        $("#ViewMoreListItem").on('click', function (e) {
            e.preventDefault();
            $(".postitem:hidden").slice(0, 4).slideDown();
            if ($(".postitem:hidden").length === 0) {
                $(".load-more-about").fadeOut('slow');
            }
        });
        $("#reserveTable").click(function () {
            $('html, body').animate({
                scrollTop: $(".reservation-today").offset().top
            }, 2000);
        });
        $("#reserveTable1").click(function () {
            $('html, body').animate({
                scrollTop: $(".reservation-today").offset().top
            }, 2000);
        });
        $(".location").click(function () {
            var id = $(this).attr("id");
            console.log(id);
            $(".location").removeClass("locationSelected");
            $(this).addClass("locationSelected");
            $(".menu-items-section,.menu-items-section,.titlePannel").hide();
            $(".menu-week-sec").show();
            $(".day").removeClass("daySelected");
        });
        $(".day").click(function () {
            $(".titlePannel").show();
            $(".menu-items-details").hide();
            $(".day").removeClass("daySelected");
            $(this).addClass("daySelected");
            console.log("day");
            $(".menu-left-week,.menu-items-section").show();
            var day_id = $(this).attr("id");
            var location_id = $(".locationSelected").attr("id");
            console.log(day_id);
            console.log(location_id);
            $("." + day_id + "." + location_id).show();
        });
    }(jQuery));
    jQuery(document).ready(function ($) {
        jQuery(".menu-kitchen").click(function () {
            var wid = $(window).width();
            if (wid <= 991) {
                jQuery(".menu-north").toggle(1000);
                jQuery(".menu-nats").toggle(1000);
            }
        });
        jQuery(".menu-nats").click(function () {
            var wid = $(window).width();
            if (wid <= 991) {
                jQuery(".menu-nats-menu").toggle(1000);
            }
        });
        jQuery(".menu-north").click(function () {
            var wid = $(window).width();
            if (wid <= 991) {
                jQuery(".menu-north-menu").toggle(1000);
            }
        });
        jQuery(".ven-menu").click(function () {
            var wid = $(window).width();
            if (wid <= 991) {
                jQuery(".menu").toggle(1000);
            }
        });
        jQuery(".menu-location").click(function () {
            var wid = $(window).width();
            if (wid <= 991) {
                jQuery(".loca").toggle(1000);
            }
        });
//                    
//         $(window).resize(function () {
//            var wid = $(window).width();
//            if (wid <= 991) {
//                jQuery( ".menu-kitchen" ).click(function() {
//                        jQuery( ".menu-north" ).toggle(1000);
//                        jQuery( ".menu-nats" ).toggle(1000);
//                 });
//                 jQuery( ".menu-nats" ).click(function(){
//                     jQuery( ".menu-nats-menu").toggle(1000);
//                 });
//                 jQuery( ".menu-north" ).click(function(){
//                    jQuery( ".menu-north-menu").toggle(1000);
//                 });
//
//                 jQuery( ".ven-menu" ).click(function() {
//                     jQuery( ".menu" ).toggle(1000);
//
//                 });
//                 jQuery( ".menu-location" ).click(function() {
//                     jQuery( ".loca" ).toggle(1000);
//
//                 });
//    
//                    }
//                });
    });
    jQuery(function ($) {
        $('.privacy-policy').click(function () {
            $("input[type='checkbox']:checked").change(function () {
                $('.cater-btn-location.column-2').show();
            });
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
