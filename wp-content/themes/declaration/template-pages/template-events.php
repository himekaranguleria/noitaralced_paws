<?php
/* Template Name: Events */

get_header();
?>

<div class="menus-banner-section">
    <img src="<?php the_field('banner_image_for_desktop'); ?>" class="banner-for-desk">
    <img src="<?php the_field('banner_image_for_mobile'); ?>" class="banner-for-mob" style="display: none">
</div>

<div class="event-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6"><h1><?php the_field('e_title'); ?></h1></div>
            <div class="col-lg-6 col-md-6 subtle text-right"><h3><?php the_field('e_subtitle'); ?></h3></div>

        </div>

        <?php
        $args = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'cat' => '5',
            'paged' => get_query_var('paged'),
            'post_parent' => $parent
        );
        $q = new WP_Query($args);
        $events = array();
        $j = 1;
        if ($q->have_posts()) {
            while ($q->have_posts()) {
                $q->the_post();
                if (@get_field('b_s_p_event_date')) {
                    $k = str_replace("-", "", get_field('b_s_p_event_date')) . $j;
                    $events[$k]["title"] = get_the_title();
                    $events[$k]["permalink"] = get_the_permalink();
                    $events[$k]["img"] = get_the_post_thumbnail_url();
                    $events[$k]["content"] = get_the_content();
                    $events[$k]["date"] = get_field('b_s_p_event_date');
                    $events[$k]["time"] = get_field('b_s_p_event_timing');
                    $j++;
                }
            }
        }
        wp_reset_postdata();
        krsort($events);
        foreach ($events as $k => $v) {
            $v['date'];
            ?>
            <div class="row postitem">
                <div class="col-lg-5 col-md-5 event-image align-self-center"><img src="<?php echo $v['img']; ?>"></div>
                <div class="col-lg-7 col-md-7 event-content align-self-center">
                    <a href="<?php echo $v['permalink']; ?>" alt="<?php echo $v['title']; ?>"><h2><?php echo $v['title']; ?></h2></a>
                    <span class="date-event"><?php echo date("M d Y", strtotime($v['date'])); ?></span>
                    <span class="time-event"><?php echo $v['time']; ?></span>
                    <p><?php echo wp_trim_words($v['content'], 40, '...'); ?></p>
                    <div class="cater-btn">
                        <a href="<?php echo $v['permalink']; ?>" alt="<?php echo $v['title']; ?>">Read More</a>
                    </div>
                </div>
            </div>  <?php }
        ?>
        <div class="load-more-about text-center col-md-12">

            <div class="more_list_item">
                <a href="javascript:void(0)" id="ViewMoreListItem">Load More</a>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>