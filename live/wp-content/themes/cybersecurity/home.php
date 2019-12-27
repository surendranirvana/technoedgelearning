<?php

/* Template Name: Home Page*/

get_header();

?>
<!--home banner starts-->
<?php if(have_rows('slider_loop')): ?>
<section class="home-banner flexslider margin-top">
    <ul class="slides">
        <?php while (have_rows('slider_loop') ) : the_row(); ?>
        <li>
            <div class="slide-img"> <img src="<?php echo get_sub_field('image'); ?>"
                    alt="<?php the_sub_field('title'); ?>" /> </div>
            <div class="caption">
                <div class="container">
                    <div class="max-width">
                        <?php if(get_sub_field('title')){?>
                        <h1 class="heading"><?php the_sub_field('title'); ?></h1>
                        <?php } if(get_sub_field('description')){?>
                        <?php the_sub_field('description'); ?>
                        <?php } ?>
                        <div class="btn-row"><a href="<?php the_sub_field('course_url'); ?>" class="btn gray">See
                                Courses</a> </div>
                    </div>
                </div>
            </div>
        </li>
        <?php 
        endwhile;
        ?>
    </ul>
</section>
<?php endif; ?>
<!--home banner ends-->

<!-- our-services starts -->
<div class="welcome-learning">
    <div class="container">
        <div class="top-content">
            <?php the_content();?>
        </div>
        <?php if(have_rows('course_section')): ?>
        <div class="allBox">
            <?php while (have_rows('course_section') ) : the_row(); ?>
            <div class="box">
                <?php if(get_sub_field('image')): ?>
                <div class="icon"><img src="<?php echo get_sub_field('image'); ?>"
                        alt="<?php echo get_sub_field('title'); ?>" /> </div>
                <?php endif;?>
                <p><?php echo get_sub_field('title'); ?></p>
            </div>
            <?php 
          endwhile;
           ?>
        </div>
        <?php endif; ?>
    </div>
</div>
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

<!-- Perfect Courses starts -->
<div class="perfect-courses">
    <div class="container">
        <?php if(get_field('course_offered')){?>
        <div class="top-content">
            <?php the_field('course_offered'); ?>
        </div>
        <?php }?>

        <div class="allBox owl-carousel col-6-slider">
            <?php 
            $args = array('post_type'=>'product','posts_per_page' =>-1, 'order'=>'ID');
            $products = new WP_Query($args); 	
            while($products->have_posts()) : $products->the_post();
            global $product;
            ?>
            <div class="box">
                <?php if(has_post_thumbnail()){ ?>
                <div class="icon">
                    <?php

                    $attachment_ids = $product->get_gallery_attachment_ids();                  
                    $image_url = wp_get_attachment_image_src($attachment_ids[0], 'large');
                    if($image_url[0]){?>
                    <img src="<?php echo $image_url[0];?>" alt="<?php the_title()?>" />
                    <?php } ?>
                </div>
                <?php }
                $title = explode("-",get_the_title());	?>

                <h3><?php echo $title[0];?></h3>
                <p><?php echo $title[1];?></p>
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
        <div class="btn-row"> <a href="<?php bloginfo('url');?>/courses/" class="btn">view all Courses</a> </div>
    </div>
</div>

<!-- fresh-blog starts -->
<?php 
$args = array('post_type'=>'post','posts_per_page' =>-1, 'order'=>'ASC');
$blog = new WP_Query($args); 	
 if($blog->have_posts()): ?>
<div class="fresh-blog">
    <div class="container">
        <div class="top-content">
            <h2><span>Blog Updates</span>Fresh from the Blog</h2>
        </div>
        <div class="allBox owl-carousel col-3-slider">
            <?php 
            $args = array('post_type'=>'post','posts_per_page' =>-1, 'order'=>'ASC');
            $blog = new WP_Query($args); 	
            while($blog->have_posts()) : $blog->the_post();?>
            <div class="box"> <a href="<?php the_permalink()?>">
                    <?php if(has_post_thumbnail()){ ?>
                    <div class="photo"> <img src="<?php the_post_thumbnail_url('csc-blog'); ?>"
                            alt="<?php the_title();?>" /> </div>
                    <?php }?>
                    <p> <span><?php the_date('F j, Y')?></span><?php the_title();?></p>
                </a> </div>
            <?php endwhile; wp_reset_query();?>
        </div>
    </div>
</div>
<!-- certification-partners starts -->
<?php endif;

 if(have_rows('partners', get_the_ID())): ?>
<div class="certification-partners">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="top-content">
                    <?php if(get_field('partners_title')){?>
                    <h2><?php the_field('partners_title');?></h2>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="allBox">
                    <?php while (have_rows('partners') ) : the_row(); ?>
                    <div class="box">
                        <div class="photo">
                            <img src="<?php echo get_sub_field('image'); ?>"
                                alt="<?php echo get_sub_field('title'); ?>" />
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif;?>
<!--common-content ends-->
<?php get_footer(); ?>