<?php

/**
Template Name: About us
 */


get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

        get_template_part('inner', 'banner');

        ?>

<!--Common Content-->
<section class="common-content p-b0">
    <div class="about-us">
        <div class="container">
            <div class="about-content">
                <?php the_content();?>
            </div>
        </div>
    </div>

    <!--
    <div class="client-says">
        <div class="container">
            <p><i class="fa fa-quote-right"></i> </p>
            <?php the_field('about_the_author'); ?>
        </div>
    </div>
    <div class="about-us-img">
        <div class="details">
            <div class="box">
                <?php the_field('about_left_section'); ?>
            </div>
        </div>
        <?php if(get_field('about_right_section')) {
            $about_img = get_field('about_right_section');?>
        <div class="img-box"> <img src="<?php echo $about_img['url']; ?>" width="674" height="554" alt="<?php echo $about_img['alt']; ?>">
        </div>
        <?php }?>
    </div>
    </div>
    -->
    <!-- ethical hacking course starts -->


    <?php
if(have_rows('hacking_course',get_the_ID())): ?>
    <div class="courses-slider owl-carousel col-1-slider">
        <?php while (have_rows('hacking_course',get_the_ID())) : the_row(); ?>
        <div class="ethical-hacking-course"
            style="background:#000 url(<?php the_sub_field('hacking_course_image',get_the_ID()); ?>) center 0 no-repeat">
            <div class="container">
                <div class="top-content">
                    <h2><?php the_sub_field('hacking_course_title',get_the_ID()); ?></h2>
                    <?php the_sub_field('hacking_course_content',get_the_ID()); ?>
                    <div class="btn-row">
                        <?php
                if(get_sub_field('hacking_course_url',get_the_ID())){
                $slug = explode('/course/',get_sub_field('hacking_course_url',get_the_ID()));
                $product_obj = get_page_by_path( $slug[1], OBJECT, 'product' );
                if($slug[1]){?>
                        <a href="<?php  $add_to_cart = do_shortcode('[add_to_cart_url id="'.$product_obj->ID.'"]');
                echo $add_to_cart;?>" class="btn">Register Today</a>
                        <?php }}?>
                        <a href="<?php the_sub_field('hacking_course_url',get_the_ID()); ?>" class="link">Read more <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
          endwhile;
        ?>
    </div>
    <?php endif;?>


    <?php if(have_rows('author_list')): ?>
    <div class="team-wrap">
        <div class="container">
            <div class="top-content">
                <h2><?php the_field('author_list_title'); ?></h2>
            </div>
            <div class="team-slider owl-carousel">
                <?php while (have_rows('author_list') ) : the_row(); ?>
                <div class="team-box">
                    <?php if(get_sub_field('image')): 
                        $team_image = get_sub_field('image');                       
                        if($team_image['alt'])
                            $alt = $team_image['alt'];
                        else
                            $alt = get_sub_field('name');
                        ?>
                    <div class="lazy-image"> <img src="<?php echo $team_image['url']; ?>" width="280" height="252"
                            alt="<?php echo $alt; ?>"> </div>
                    <?php endif;?>
                    <div class="details">
                        <h3><?php echo get_sub_field('name'); ?></h3>
                        <p><?php echo get_sub_field('description'); ?></p>
                    </div>
                </div>
                <?php 

                endwhile;

                wp_reset_postdata(); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--Common Content End-->
<?php endwhile; endif; 
 get_footer(); ?>