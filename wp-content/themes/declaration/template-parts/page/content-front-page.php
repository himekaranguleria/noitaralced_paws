<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<div class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 top-row col-10">
                <h5><?php the_field('declaration_first_type'); ?></h5>
                <h1> <?php the_field('title_tag_line'); ?></h1>
                <h5><?php the_field('dc'); ?></h5>
                <hr class="small">
            </div>
            <div class="col-md-6 section-image">

                <img src="<?php the_field('pizza_image'); ?>" data-0="transform:rotate(0deg);transform-origin:center;" data-end="transform:rotate(360deg);">
            </div>
            <div class="col-md-6 section-blank d-md-block d-sm-none d-none">
                &nbsp;
            </div>
            <div class="col-lg-6 col-md-6 section-content justify-content-end">
                <div class="bottom-rowsec col-10 col-md-12 float-right float-md-none">
                    <?php the_field('declaration_second_type'); ?>
                    <div class="buttons-bx">
                          <div class="button-box"><a id="reserveTable1" href="<?php echo get_theme_mod('reserve_link'); ?>"><?php echo get_theme_mod('reserve'); ?></a></div>                              
                          <div class="button-box"><a  href="<?php echo get_theme_mod('order_link'); ?>"> <?php echo get_theme_mod('order'); ?></a></div>
                       </div>
                   </div>
            </div>
        </div>
    </div>

</div>


<!--<div class="local-austin-sec">
    <div class="first-row-local">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-10">
                    <?php //the_field('declaration_thirdtype'); ?>
                </div>
                <div class="col-lg-7 col-md-7 d-md-block d-sm-none d-none">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 d-md-block d-sm-none d-none">&nbsp;
                </div>
                <div class="col-lg-7 col-md-7 right-section-image">
                    <img src="<?php //the_field('dish_image'); ?>" data-800="right:-100%;" data-1400="right:10%;">
                </div>
            </div>
        </div>
    </div>

    <div class="second-row-austin">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 left-text col-10">
                    <?php //the_field('declartion_forth_type'); ?>
                </div>
                <div class="col-lg-7 col-md-7 d-md-block d-sm-none d-none">&nbsp;</div>
            </div>
        </div>
    </div>


</div>-->

<div id="myCarousel" class="carousel slide slide-sec" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php
        $args = array('post_type' => 'home-slider', 'posts_per_page' => 3);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="carousel-item">
                    <?php the_post_thumbnail(); ?>
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <?php the_content(); ?> 
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<div class="pizza-delivery-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <?php the_field('pizza_delivery_content'); ?>

            </div>
            <div class="col-lg-4 col-md-4">
                <ul>
                    <li><img src="<?php the_field('first_logo'); ?>"></li>
                    <li><img src="<?php the_field('second_logo'); ?>"></li>
                    <li><img src="<?php the_field('third_logo'); ?>"></li>
                    <li><img src="<?php the_field('forth_logo'); ?>"></li>
                </ul>
            </div>
            <div class="btn-box col-lg-12 col-md-12 ml-0 pt-3 text-center text-md-left"><a href="<?php the_field('order_online_button_link'); ?>" class="btn"><?php the_field('order_online_button'); ?></a></div>
        </div>
    </div>

</div>


<div class="reservation-today">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2><?php the_field('reservation_form_title'); ?></h2>
                <!--// Open table--> 
                <link href="http://www.opentable.com/ism/feed_horizontal_alt.css" rel="stylesheet" type="text/css" />
                <div id="OT_searchWrapperAll">
                    <script type="text/javascript" src="http://www.opentable.com/ism/?rid=187579|Declaration - Shaw,995539|Declaration - Nats Park"></script>
                    <noscript id="OT_noscript">
                    <a href="http://www.opentable.com/single.aspx?rid=1234&restref=187579&rtype=ism">Reserve Now for Declaration - Shaw on OpenTable.com</a>
                    <a href="http://www.opentable.com/single.aspx?rid=1107&restref=995539&rtype=ism">Reserve Now for Declaration - Nats Park on OpenTable.com</a>
                    </noscript>
                    <!--                    <div id="OT_logo">
                                            <a href="http://www.opentable.com/home.aspx?rtype=ism" title="Powered By OpenTable">
                                                <img src="http://www.opentable.com/img/buttons/Otlogo.gif" id="OT_imglogo" alt="Restaurant Management Software" /></a>
                                        </div>-->
                </div> 
                <!--// Open table--> 
                <?php // echo do_shortcode(' [contact-form-7 id="4" title="Reservation Form"]'); ?>
            </div>
        </div>
    </div>
</div>


<div class="footer-top-reserv">
    <div class="container">
        <div class="top-section-crsl">
            <?php $page_title = get_field('blog_and_events_title'); ?>


            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
               
                <div class="carousel-inner">
                    <?php
                    $args = array(
                        'post_type' => 'post', 'posts_per_page' => 3
                    );

                    $the_pages = new WP_Query($args);
                    if ($the_pages->have_posts()) {
                        while ($the_pages->have_posts()) {
                            $the_pages->the_post();
                            ?>   
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 blog-images">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="col-lg-5 col-md-5 blog-events">
                                        <h4 class="top-section-crsl"><?php echo $page_title; ?></h4>
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo wp_trim_words(get_the_content(), 50, '...'); ?></p>
                                        <?php // the_content();  ?>
                                        <div class="read-more"><a href="<?php echo get_post_permalink(); ?>"> Read More</a></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>

                </div>
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>


</div>

<script>
   
    
</script>
