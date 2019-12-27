<?php

/* Template Name: Contact us*/

get_header();

//get_template_part('inner', 'banner');
?>

<!--home banner ends-->
<div class="cont-heading margin-top">
    <div class="container">
        <h1><?php the_title();?></h1>
    </div>
</div>
<!--common-content starts-->
<?php while(have_posts()): the_post();?>
<section class="common-content ">
    <div class="container">

        <address class="address-info">
            <?php if(get_option('address2')){?>
            <div class="box">
                <i class="fal fa-map-marker-alt"></i>
                <h4>Address</h4>
                <?php echo get_option('address2'); ?>
            </div>
            <?php
            }
              $phone = str_replace("-", "", get_option('phoneno'));
              $phone = str_replace(" ", "", $phone);
              $phone = str_replace("(", "", $phone);
              $phone = str_replace(")", "", $phone);
              $phone = str_replace("+1", "", $phone);
            if(get_option('phoneno')){
            ?>
            <div class="box">
                <i class="fal fa-phone"></i>
                <h4>Phone</h4>
                <p><a href="tel:<?php echo $phone; ?>"><?php echo get_option('phoneno'); ?></a></p>
            </div>
            <?php }

            if(get_option('emailid')){
            ?>
            <div class="box">
                <i class="fal fa-envelope"></i>
                <h4>Email</h4>
                <p><a href="mailto:<?php echo get_option('emailid'); ?>"><?php echo get_option('emailid'); ?></a></p>
            </div>
            <?php }?>
        </address>

        <div class="contact-form-box">
            <h3>Contact form <span>Required fields are marked with (*) </span></h3>
            <div class="row">
                <?php echo do_shortcode('[formidable id=1]');?>
            </div>
        </div>
        <div class="location-map">
           <?php the_content();?>
        </div>


    </div>
</section>
<?php endwhile;?>
<!--common-content ends-->
<?php get_footer(); ?>