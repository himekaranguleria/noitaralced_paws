<?php
/* Template Name: About US */
get_header();
?>

<div class="fist-section-about">
    <div class="container">
        <div class="row">
            <div class="d-md-none d-sm-block top-section about-content">
                <?php the_field('about_title'); ?>
                <hr class="small">
            </div>
            <div class="col-lg-6 col-md-6 image-section"><img src="<?php the_field('about_first_image'); ?>" alt=""></div>
            <div class="col-lg-6 col-md-6 about-content">
                <div class="top-row">
                    <div class="d-md-block d-sm-none d-none top-section">
                        <?php the_field('about_title'); ?>
                        <hr class="small">
                    </div>
                    <?php the_field('about_right_content'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 left-content">
                <?php the_field('about_left_content'); ?>
            </div>
            <div class="col-lg-6 col-md-6 image-right-section">
                <img src="<?php the_field('about_second_image'); ?>" alt="">
            </div>
        </div>
    </div>
</div>
<?php if (get_field('hide_bio')) { ?>
    <div class="team-about-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 about-content">
                    <?php the_field('about_team'); ?>
                    <hr class="small">
                </div>
            </div>
            <div class="row team-section">


                <?php
                $args = array('post_type' => 'team-members', 'posts_per_page' => 2);
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-6 col-md-6 team-box">
                            <div class="team-photo"><?php the_post_thumbnail(); ?></div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?> 
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
<?php } ?>

<div id="myCarousel" class="carousel slide d-none d-md-block" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active"> <img class="first-slide" src="<?php the_field('slide_first_image'); ?>" alt="First slide">
        </div>
        <div class="carousel-item"> <img class="second-slide" src="<?php the_field('slide_second_image'); ?>" alt="Second slide">
        </div>
        <div class="carousel-item"> <img class="third-slide" src="<?php the_field('slide_third_image'); ?>" alt="Third slide">
        </div>
    </div>
</div>


<?php get_footer(); ?>
