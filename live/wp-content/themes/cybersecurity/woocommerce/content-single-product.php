<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<!--Inner Banner Starts-->
<section class="inner-banner details margin-top">
    <?php   if(get_field('banner_image')) {?>
    <img src="<?php the_field('banner_image')?>" alt="<?php the_title();?>" />
    <?php   } else { ?>
    <img src="<?php bloginfo('template_directory')?>/img/details-page-banner.jpg" alt="<?php the_title();?>" />
    <?php   }?>

    <div class="caption">
        <div class="container">
            <div class="max-width">
                <h1 class="heading">
                    <?php $title = explode("-",get_the_title());
				if($title[0])  echo $title[0].'<br>'.$title[1]; else the_title();?></h1>

                <?php 				
				if(have_rows('banner_section')): ?>
                <div class="hacking-course">
                    <div class="allBox">
                        <?php while (have_rows('banner_section') ) : the_row(); ?>
                        <div class="box">
                            <p><strong><?php echo get_sub_field('title'); ?>:</strong>
                                <?php echo get_sub_field('description'); ?></p>
                        </div>
                        <?php 
							endwhile;
							wp_reset_postdata(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <p class="btn-row"><a href="<?php  $add_to_cart = do_shortcode('[add_to_cart_url id="'.$product->ID.'"]');
                echo $add_to_cart;?>" class="btn">Register now</a></p>
            </div>
        </div>
    </div>
</section>

<section class="common-content p-t0">
    <?php 
		$count=2;
		if(have_rows('extra_fields')): ?>
    <div class="course-tab">
        <div class="container">
            <ul>
                <li class="active"><a href="#tab_1">Program Overview</a></li>
                <?php while (have_rows('extra_fields') ) : the_row(); ?>
                <li>
                    <a href="#tab_<?php echo $count++;?>">
                        <?php echo get_sub_field('title'); ?></a></li>
                <?php 
				endwhile;
			wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <div class="container  p-b4 sp-t2 sp-b2">
        <div class="two-col-aside">
            <article class="big-col">
                <div id="tab_1" class="hacking-course-info course-details">
                    <?php the_content();?>
                </div>
                <?php 
			$count=2;
			if(have_rows('extra_fields')): ?>
                <?php while (have_rows('extra_fields') ) : the_row(); ?>
                <div id="tab_<?php echo $count++;?>" class="hacking-course-info course-details">
                    <h3><?php echo get_sub_field('title'); ?></h3>
                    <?php echo get_sub_field('description'); ?>
                </div>
                <?php 
						endwhile;
					wp_reset_postdata(); ?>
                <?php endif; ?>
            </article>
            <div class="aside">
                <div class="course-aside">
                    <div class="course">
                        <div class="course-price">
                            <form class="cart"
                                action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>"
                                method="post" enctype='multipart/form-data'>
                                <?php //do_action( 'woocommerce_before_add_to_cart_button' ); ?>
                                <p><span>Price</span>
                                    <?php
		if($product->get_regular_price()) echo '<strong>$'.$product->get_regular_price()."</strong> ".get_woocommerce_currency(); ?>
                                </p>
                                <br />

                                <button type="submit" name="add-to-cart"
                                    value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn">Register
                                    Now</button>

                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                            </form>

                        </div>
                        <?php if(get_field('pdf_download_link')){?>
                        <div class="download">
                            <a href="<?php the_field('pdf_download_link');?>" target="_blank">
                                <img src="<?php bloginfo('template_directory')?>/img/pdf-icon.png" alt="" />
                                <p>Download Course<br /> Details <img
                                        src="<?php bloginfo('template_directory')?>/img/download-btn.png" alt="" /></p>
                            </a>
                        </div>
                        <?php }?>

                        <div class="course_partner">                            
                            <h2>Accreditation</h2> 
                            <?php if(has_post_thumbnail()){ ?>
                            <div class="allBox">
                                <div class="box">
                                    <div class="photo">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>"
                                            alt="<?php the_title();?>" />
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>
</section>



<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		//do_action( 'woocommerce_before_single_product_summary' );
	?>



<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
		//	do_action( 'woocommerce_single_product_summary' );
		?>



<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
	//	do_action( 'woocommerce_after_single_product_summary' );
	?>


<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	// do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<?php do_action( 'woocommerce_after_single_product' ); ?>