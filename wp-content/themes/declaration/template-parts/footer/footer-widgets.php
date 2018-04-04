<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<div class="col-lg-4 logo-col">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>  
</div>
<div class="col-lg-3 time-col">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
    <div class="menu-desk"> <?php dynamic_sidebar( 'footer-menu' ); ?> </div>
</div>
<div class="col-lg-2 menu-col">
 <?php dynamic_sidebar( 'nats_park' ); ?>
  <div class="mobile-view-detail-menu d-md-none d-block"><?php dynamic_sidebar( 'footer-menu' ); ?></div>  
    <?php dynamic_sidebar( 'pizza-delivery' ); ?>
</div>
<div class="col-lg-3 location-col">
   <?php dynamic_sidebar( 'contact' ); ?>
    <?php dynamic_sidebar('location'); ?>
    <?php dynamic_sidebar('news_letter'); ?>
</div>
 <div class="logos-box col-lg-4">
                <?php dynamic_sidebar('footer-imgs'); ?>
            </div>
