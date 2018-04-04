<?php
/* Template Name: Catering */
get_header();
?>
<div class="menus-banner-section">
    <?php the_post_thumbnail(); ?>
</div>
<div class="catering-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2><?php the_field('catering_title'); ?></h2>
                <div class="catering-content">
                    <?php the_field('catering_content'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="catering-menu-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 form-left">
                <h3><?php the_field('form_title'); ?></h3>
                <?php echo do_shortcode('[contact-form-7 id="195" title="Catering Menu"]'); ?>
            </div>
            <div class="col-lg-6 col-md-6 form-right d-none d-md-block">
                <h2><?php the_field('private_event_title'); ?></h2>
                <?php the_field('private_party'); ?>
                <div class="cater-btn">
                    <a href="<?php the_field('private_party_button_link'); ?>"><?php the_field('private_party_button'); ?></a>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
