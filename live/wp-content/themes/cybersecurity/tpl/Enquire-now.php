<?php
/**
Template Name: Enquire Now
 */
get_header(); ?>
<!--home banner ends-->
<div class="cont-heading margin-top">
    <div class="container">
        <h1><?php the_title();?></h1>
    </div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<!--Common Content-->
<section class="common-content">
    <div class="container">
        <?php the_content(); ?>
    </div><!-- #primary -->
</section>
<!--Common Content End-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>