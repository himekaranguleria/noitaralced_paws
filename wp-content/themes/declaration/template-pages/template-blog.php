<?php
/* Template Name: Blog */

get_header();
?>
<?php
// the query
$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
?>
<div class="fist-section-about blog-event-section">
    <div class="container">
        <div class="row">


            <?php if ($wpb_all_query->have_posts()) : ?>

                <!-- the loop -->
                <?php
                $i = 1;
                while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();
                    $category = get_the_category();
                    if ($i == 1) {
                        ?>
                        <div class="col-lg-6 col-md-6 image-section align-self-top"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a></div>
                        <div class="col-lg-6 col-md-6 about-content align-self-center">
                            <div class="top-row">
                                <h5>  <?php
                                    foreach ($category as $key => $val) {
                                        echo $val->name;
                                    }
                                    ?> </h5>
                                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                <hr class="small">
                                <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                                <div class="cater-btn">
                                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="row post-item-section">
                        <?php
                    } else {
                        ?><div class="col-lg-6 col-md-6 postitem">
                            <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="post-content">
                            <h5>  <?php
                                $k = 0;
                                $endkey = end(array_keys($category));
                                foreach ($category as $key => $val) {
                                    if ($endkey == $k) {
                                        echo $val->name;
                                    } else {
                                        echo $val->name . ", ";
                                    }
                                    $k++;
                                }
                                ?> </h5>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                            <div class="cater-btn">
                            <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Read More</a></div>
                            </div>
                        </div><?php
                    }
                    $i++;
                endwhile;
                ?>
                <!-- end of the loop -->

                <div class="load-more-about text-center col-md-12">
                   
                        <div class="more_list_item">
                            <a href="javascript:void(0)" id="ViewMoreListItem">Load More</a>
                        </div>
                    
                </div>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
    <?php get_footer(); ?>