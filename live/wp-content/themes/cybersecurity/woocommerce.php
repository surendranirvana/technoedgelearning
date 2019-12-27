<?php

get_header();

?>

<?php if (is_shop()) { ?>
<section class="inner-banner flexslider margin-top">    
            <img src="<?php bloginfo('template_directory');?>/img/cyber-security-courses-banner.jpg" width="1349" height="566"
                alt="<?php if(get_field('title',6)) the_field('title',6); else the_title() ?>"/>         
    <div class="caption">
        <div class="container">
            <div class="max-width">
                <div class="heading"> <?php if(get_field('title',6)) the_field('title',6); else the_title() ?></div>
                <?php if(get_field('title_description',6)) echo '<p>'.get_field('title_description',6).'</p>';?>
            </div>
        </div>
    </div>
</section>   
<section class="common-content p-b0">
    <div class="cyber-security-courses">
        <div class="container">            
            <?php if (have_posts()) : ?>
            <?php  woocommerce_content();?>
            <?php else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    </div>
</section>
<?php } else if (is_product_category()) {    
 get_template_part('inner', 'banner');  
    ?>

<section class="common-content margin-top">
    <div class="container">
        <section class="breadcrumbs">

            <div class="container-fluid">

                <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

            </div>

        </section>


        <?php if (have_posts()) : ?>

        <?php

				woocommerce_content();

				?>

        <?php else: ?>

        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

        <?php endif; ?>

    </div>

</section>



<?php } if (is_product()) { ?>
   
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <?php wc_get_template_part('content', 'single-product'); ?>
    <?php endwhile; // end of the loop.     ?>

<?php } ?>

<?php if (is_account_page()) { ?>

<!--Content Starts-->

<section class="cartMyAccount">

    <div class="container-fluid">

        <h1>Customers login</h1>

        <?php

            while (have_posts()) : the_post();

                the_content();

            endwhile; // End of the loop.

            ?>

    </div>

</section>

<?php } ?>

<?php

get_footer();