<?php
/* Template Name: Dinner Menus */
get_header();
?>
<?php $pageid = 167; ?>
<div class="menus-banner-section banner-section">
    <?php the_post_thumbnail(); ?>
    <?php
    $obj = get_queried_object();
//    print_r($obj->name);
    $img = do_shortcode('[wp_custom_image_category onlysrc="false" size="full" term_id="' . $obj->term_id . '" alt="alt :)"]');
    ?><img src="<?php echo $img; ?>">
</div>
<div class="menu-main">
    <div class="menus-location-sec">
        <div class="container">
            <h2>
                <?php the_field('choose_location', $pageid); ?></h2>
            <div class="row">
                <a href="javascript:;"  id="location1"class="location col-lg-6 col-md-6 left-location">
                    <div style="background-image: url('<?php the_field('first_location_image', $pageid); ?>');">
                        <h4><?php the_field('first_location', $pageid); ?></h4>
                    </div>
                </a>
                <a href="javascript:;" id="location2" class="location col-lg-6 col-md-6 right-location">
                    <div style="background-image: url('<?php the_field('second_image_location', $pageid); ?>');">
                        <h4><?php the_field('second_location', $pageid); ?></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="menu-week-sec">
        <div class="container">
            <div class="row daysPannel">
                <div class="col-lg-7 col-md-7 menu-left-week">
                    <a href="javascript:;" id="day1" class="day"><p><?php the_field('first_week', $pageid); ?></p></a>
                    <a href="javascript:;" id="day2" class="day"><p><?php the_field('second_week', $pageid); ?></p></a>
                </div>
            </div>
            <div class="row titlePannel">
                <div class="col-lg-7 col-md-7 menu-left-week">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-lg-5 col-md-5 menu-right-week">
                    <div class="main-kind">
                        <span class="kind"> V </span> 
                        <span class="kind-text"> <?php the_field('vegetarian_text', $pageid); ?> </span></div>
                    <div class="main-kind">
                        <span class="kind"> VG </span>
                        <span class="kind-text"> <?php the_field('vegan_text', $pageid); ?></span>
                    </div>
                    <div class="main-kind">
                        <span class="kind"> VG </span>
                        <span class="kind-text"> <?php the_field('gluten_free_text', $pageid); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        global $post;
        $myposts = get_posts(array(
            'post_type' => 'menus',
            'posts_per_page' => 9,
            'tax_query' => array(
                array(
                    'taxonomy' => 'Menus_categories',
                    'field' => 'slug',
                    'terms' => 'dinner-menu'
                )
            )
        ));
        if ($myposts) {
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>
                <div class="menu-items-section" >
                    <div class="container">
                        <!--<div class="row">-->
                        <?php // if (have_posts()) : ?>
                        <?php
//                    while (have_posts()) : the_post();
                        $class = '';
                        foreach (get_field("m_i_location") as $k => $v) {
                            if ($v == "North Snow") {
                                $class .= " location1";
                            }
                            if ($v == "Nats Park") {
                                $class .= " location2";
                            }
                        }
                        foreach (get_field("m_i_days") as $k => $v) {
                            if ($v == "MONDAY – WEDNESDAY") {
                                $class .= " day1";
                            }
                            if ($v == "THURSDAY – SUNDAY") {
                                $class .= " day2";
                            }
                        }
                        ?>
                        <div class="menu-items-details row <?php echo $class; ?>">
                            <div class="menu-left-section col-md-7 col-lg-7">
                                <h1><?php the_title(); ?></h1>
                                <p class="upper-text"><?php the_field("m_i_description"); ?></p>
                                <?php if (have_rows('m_i_subitems')) { ?>
                                    <?php
                                    while (have_rows('m_i_subitems')): the_row();
                                        $title = get_sub_field('m_s_i_title');
                                        $quantity = get_sub_field('m_s_i_quantity');
                                        $description = get_sub_field('m_s_i_description');
                                        $kind_of_food = get_sub_field('m_s_i_kind_of_food');
                                        if ($kind_of_food == "Vegetarian") {
                                            $kind = "V";
                                        } elseif ($kind_of_food == "Vegan") {
                                            $kind = "VG";
                                        } elseif ($kind_of_food == "Gluten Free") {
                                            $kind = "GF";
                                        } else {
                                            $kind = "";
                                        }
                                        ?>
                                        <div class="list-details">
                                            <?php if (@$kind) {
                                                ?><span class="kind"> <?php echo $kind; ?></span>   
                                            <?php }
                                            ?>
                                            <div class="list-content">
                                                <h4><?php echo $title; ?><span><?php echo $quantity; ?></span></h4>
                                                <p><?php echo $description; ?></p>
                                            </div></div>
                                        <?php
                                    endwhile;
                                }
                                ?>
                            </div>
                            <?php if (@get_field("m_i_has_toppings")) { ?>
                                <div class="menu-right-section col-md-5 col-lg-5 text-center">
                                    <h4>Toppings</h4>
                                    <?php if (have_rows('m_i_toppings')): ?>
                                        <?php
                                        while (have_rows('m_i_toppings')): the_row();
                                            $title = get_sub_field('m_i_t_title');
                                            $description = get_sub_field('m_i_t_description');
                                            ?>
                                            <h4><?php echo $title; ?></h4>
                                            <?php echo $description; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            <?php } ?>
                        </div>
                        <?php
//                    endwhile;
//                endif;
                        ?>
                        <!--</div>-->
                    </div>
                </div>

                <?php
            }
        }
        ?>
    </div>
</div> <?php
get_footer();
