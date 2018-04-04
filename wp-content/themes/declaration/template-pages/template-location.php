<?php
/* Template Name: Location */
get_header();
?>
<div class="menus-banner-section">
    <?php the_post_thumbnail(); ?>
</div>
<div class="location-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 form-left">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_field('l_location_name_1'); ?></h3>
                <?php the_field('l_location_address_1'); ?>
                <p class="l_c_parking"><a href="<?php the_field('l_parking_link_1'); ?>" target="_blank">FIND PARKING</a></p>
                <h3><?php the_field('l_location_name_2'); ?></h3>
                <?php the_field('l_location_address_2'); ?>
                <p class="l_c_parking"><a href="<?php the_field('l_parking_link_2'); ?>" target="_blank">FIND PARKING</a></p>
                <p class="l_c_email"><a href="mailto:<?php the_field('l_email'); ?>"><?php the_field('l_email'); ?></a></p>

            </div>
            <div class="col-lg-6 col-md-6 form-right">
                <?php the_field('l_map'); ?>
            </div>
        </div>
    </div>
</div>
<div class="contactus-sec">
    <div class="container">
        <h3><?php the_field('l_c_title'); ?></h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 form-left">
                <?php the_field('l_c_content'); ?>
            </div>
            <div class="col-lg-8 col-md-8 form-right">

                <?php echo do_shortcode(get_field('l_c_contact_form')); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>