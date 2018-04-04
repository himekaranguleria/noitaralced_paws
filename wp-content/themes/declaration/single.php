<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>
<div class="location-sec single-post">
    <div class="container">
        <div class="row">
            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();
                ?>
                 <div class="top-row postitem d-md-none d-block col-12 mobile-heading"> <h5>  <?php
                            $k = 0;
                            $category = get_the_category();
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
                        <h2><?php the_title(); ?></h2>
                       
                    </div>
                <div class="col-lg-6 col-md-6 image-section">
                    <?php
                    the_post_thumbnail();
                    ?><?php if (@get_field('b_s_p_image')) { ?>
                        <img src="<?php the_field("b_s_p_image"); ?>">
                        
                    <?php } ?>
                         
                        <div id="myCarousel" class="carousel slide slide-sec" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>   
                            </ol>
                            <div class="carousel-inner">
                           <?php $images = get_field('image_gallery');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)

                            if( $images ): ?>                               
                                    <?php foreach( $images as $image ): ?>
                                
                                <div class="carousel-item">
                                        <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                 </div>
                                  <?php endforeach; ?>
                            <?php endif; ?>
                            
                            </div>
                        </div>
                        
                </div>
               
                    
                <div class="col-lg-6 col-md-6 single-content">
                    <div class="top-row postitem"> <h5>  <?php
                            $k = 0;
                            $category = get_the_category();
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
                        <h2><?php the_title(); ?></h2>
                        <?php echo the_content(); ?>
                    </div>
                </div>
                <?php
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
