<?php

/**
* Better Pre-submission Confirmation
* http://gravitywiz.com/2012/08/04/better-pre-submission-confirmation/
*/
 
add_action('after_setup_theme', 'woocommerce_support');

function woocommerce_support() {
    add_theme_support('woocommerce');
    add_image_size( 'csc-blog', 370, 342, true );
    add_image_size( 'csc-blog-page', 330, 302, true );
    add_image_size( 'csc-blog-full', 806, 376, true );
	/**
	 * Add new ACF options pages
	 */ 
 	if(function_exists("register_options_page"))
	{
		//register_options_page('Contact');
		//register_options_page('Header');
		//register_options_page('Footer');
        //register_options_page('Sidebar');
        //register_options_page('Footer Above Content');
	}
}



/* Logos */
function my_custom_login_logo() {
	echo '<style type="text/css">
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/img/email-logo.jpg) !important;
			   width:200px!important; background-size: auto !important; }
	</style>
	   <script type="text/javascript">window.onload = function(){document.getElementById("login").getElementsByTagName("a")[0].href = "'. site_url() . '";document.getElementById("login").getElementsByTagName("a")[0].title = "Go to site";}</script>';
}
add_action('login_head', 'my_custom_login_logo');


 /**
 * Enqueue scripts and styles
 */

function child_scripts() {

	wp_dequeue_style( 'styles' );
	wp_deregister_style( 'styles' );	
    wp_dequeue_style('googlefonts');
   
}
add_action( 'wp_enqueue_scripts', 'child_scripts' , 20);

/**
 * Custom template tags for this theme.
 */



// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'forge_saas' ),
	'footer' => __( 'Footer Menu', 'forge_saas'),
    'footer1' => 'Footer Menu 1',
    'footer2' => 'Footer Menu 2',
    'footer3' => 'Footer Menu 3',
    'footer4' => 'Footer Menu 4'
) );

//register footer sidebar for adding PTIB Logos
add_action( 'widgets_init', 'ashton_widgets_init' );
function ashton_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Job Postings', 'forge_saas' ),
		'id'            => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'forge_saas' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Page Sidebar', 'forge_saas' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home Page Sidebar Row', 'forge_saas' ),
		'id'            => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s large-4 columns"><div class="panel">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'forge_saas' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Subject Sidebar', 'forge_saas' ),
		'id'            => 'subject',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	
    register_sidebar( array(
        'name' => __( 'footer-partner', 'ashton' ),
        'id' => 'footer-partner-1',
        'description' => __( 'Widgets in this area will be shown in footer area.', 'ashton' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

//Widgets for Home Page featered courses

    register_sidebar( array(
        'name' => __( 'featured-course-1', 'ashton' ),
        'id' => 'featured-course-1',
        'description' => __( 'Widgets in this area will be shown in home page above blogs section.', 'ashton' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'featured-course-2', 'ashton' ),
        'id' => 'featured-course-2',
        'description' => __( 'Widgets in this area will be shown in footer area.', 'ashton' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'featured-course-3', 'ashton' ),
        'id' => 'featured-course-3',
        'description' => __( 'Widgets in this area will be shown in footer area.', 'ashton' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>',
    ) );
    
    
     register_sidebar( array(
        'name' => __( 'Shop search form', 'ashton' ),
        'id' => 'shop_search_form',
        'description' => __( 'Search products by category and title.', 'ashton' ),
        'before_widget' => '',
  'after_widget'  => '',
  'before_title'  => '',
  'after_title'   => '',
    ) );



function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).' &#91; &hellip; &#93; ';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}





function search_filter($query) {
  if ( is_tax('department-types') ) {
    if ($query->is_tax() && $query->is_main_query()) {

      $query->set('post_type', 'programs');
    }
  }
}

add_action('pre_get_posts','search_filter');

/* Social Media Links */
add_action('admin_menu', 'social_links_menu');

function social_links_menu() {
    add_menu_page('Get Connected', 'Get Connected', 'manage_options', 'social-links', 'social_link_page');
}

function social_link_page() {

       wp_enqueue_media();

?>
<div class="wrap">
    <h2>Contact details and Social Media Links</h2>
    <form method="post" action="options.php">
        <?php wp_nonce_field('update-options') ?>

        <p><strong>Phone No.:</strong><br />
            <input type="text" name="phoneno" size="45" value="<?php echo get_option('phoneno'); ?>" />
        </p>
        <p><strong>Fax:</strong><br />
            <input type="text" name="fax" size="45" value="<?php echo get_option('fax'); ?>" />
        </p>
        <p><strong>Email ID:</strong><br />
            <input type="text" name="emailid" size="45" value="<?php echo get_option('emailid'); ?>" />
        </p>
        <p><strong>Facebook ID:</strong><br />
            <input type="text" name="facebookid" size="45" value="<?php echo get_option('facebookid'); ?>" />
        </p>
        <p><strong>Twitter ID:</strong><br />
            <input type="text" name="twitterid" size="45" value="<?php echo get_option('twitterid'); ?>" />
        </p>
        <p><strong>You tube ID:</strong><br />
            <input type="text" name="youtubeid" size="45" value="<?php echo get_option('youtubeid'); ?>" />
        </p>
        <p><strong>Linkedin ID:</strong><br />
            <input type="text" name="linkedinid" size="45" value="<?php echo get_option('linkedinid'); ?>" />
        </p>
        <p><strong>Instagram ID:</strong><br />
            <input type="text" name="instagramid" size="45" value="<?php echo get_option('instagramid'); ?>" />
        </p>

        <p><strong>Header Logo:</strong><br />
            <input type="text" name="header_logo" id="header_logo" size="45"
                value="<?php echo get_option('header_logo'); ?>" />
            <button type="button" class="add-input-header">Upload</button>
        </p>
        <p><strong>Footer Logo:</strong><br />
            <input type="text" name="footer_logo" id="footer_logo" size="45"
                value="<?php echo get_option('footer_logo'); ?>" />
            <button type="button" class="add-input-footer">Upload</button>
        </p>
        <p><strong>Footer Url:</strong><br />
            <input type="text" name="footer_url" id="footer_url" size="45"
                value="<?php echo get_option('footer_url'); ?>" />

        </p>
        <p><strong>Address1:</strong><br />
            <textarea name="address1" rows="6" cols="80"><?php echo get_option('address1'); ?></textarea>
        </p>
        <p><strong>Address2:</strong><br />
            <textarea name="address2" rows="6" cols="80"><?php echo get_option('address2'); ?></textarea>
        </p>
        <p><strong>Address3:</strong><br />
            <textarea name="address3" rows="6" cols="80"><?php echo get_option('address3'); ?></textarea>
        </p>
        <p><strong>Enquire Today text:</strong><br />
            <input type="text" name="enquire_today"  size="45" value="<?php echo get_option('enquire_today'); ?>" />            
        </p>
        <p><strong>Enquire Today url:</strong><br />
            <input type="text" name="enquire_today_url"  size="45" value="<?php echo get_option('enquire_today_url'); ?>" />            
        </p>
        <p>
            <input class="button-primary" type="submit" name="Submit" value="Save" />
        </p>
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options"
            value="enquire_today,enquire_today_url,address1,address2,address3,phoneno,fax,emailid,facebookid,twitterid,youtubeid,linkedinid, instagramid,header_logo, footer_logo,footer_url" />
    </form>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(document).on("click", ".add-input-header", function(e) {
            e.preventDefault();
            var meta_image_frame;
            if (meta_image_frame) {
                wp.media.editor.open();
                return;
            }
            meta_image_frame = wp.media.frames.file_frame = wp.media({
                title: 'Upper Image Selection Window',
                button: {
                    text: 'Add Image'
                },
                library: {
                    type: 'file'
                }
            });

            meta_image_frame.on('select', function() {
                var media_attachment = meta_image_frame.state().get('selection').first()
                    .toJSON();
                console.log(media_attachment);
                var url = '';
                jQuery('#header_logo').val(media_attachment.url);
            });

            meta_image_frame.open();
        });
        jQuery(document).on("click", ".add-input-footer", function(e) {
            e.preventDefault();
            var meta_image_frame;
            if (meta_image_frame) {
                wp.media.editor.open();
                return;
            }
            meta_image_frame = wp.media.frames.file_frame = wp.media({
                title: 'Upper Image Selection Window',
                button: {
                    text: 'Add Image'
                },
                library: {
                    type: 'file'
                }
            });

            meta_image_frame.on('select', function() {
                var media_attachment = meta_image_frame.state().get('selection').first()
                    .toJSON();
                console.log(media_attachment);
                var url = '';
                jQuery('#footer_logo').val(media_attachment.url);
            });
            meta_image_frame.open();
        });
    });
    </script>
</div>
<?php
}






function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


 


function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
    }
     
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


add_filter( 'nav_menu_css_class', 'add_custom_class', 10, 2 );
function add_custom_class( $classes = array(), $menu_item = false ) {

    //Check if already have the class
    if (! in_array( 'current-menu-item', $classes ) ) {
      
        //Check if it's a category
        if ( 'category' == $menu_item->object ) {

            //Check if the post is in the category
            if ( in_category( $menu_item->ID ) ) {

                $classes[] = 'current-menu-item';
            }
        }
    }
    return $classes;
}

add_action( 'init', 'create_tax_testimonials' );

function create_tax_testimonials() {
    register_taxonomy(
		'testimonials_cat',
		'testimonials',
		array(
			'label' => __( 'Department Types' ),
			'rewrite' => array( 'slug' => 'testimonials_cat' ),
			'hierarchical' => true,
		)
	);
}

/*
Start woocommerce code
 *  */ 


function unhook_appthemes_notices() {
    $class_needing_removal = 'woocommmerce_loyal_rewards';
    remove_anonymous_object_filter('woocommerce_after_add_to_cart_button', $class_needing_removal, 'show_product_rewards');
}

// * Remove an anonymous object filter.
// * @param  string $tag    Hook name.
// * @param  string $class  Class name
// * @param  string $method Method name
// * @return void


function remove_anonymous_object_filter($tag, $class, $method) {
    $filters = false;
    if (isset($GLOBALS['wp_filter'][$tag])) {
        $filters = $GLOBALS['wp_filter'][$tag];
    }
    if ($filters) {
        foreach ($filters as $priority => $filter) {
            foreach ($filter as $identifier => $function) {
                if (!is_array($function))
                    continue;
                if (!$function['function'][0] instanceof $class)
                    continue;
                if ($method == $function['function'][1]) {
                    remove_filter($tag, array($function['function'][0], $method), $priority);
                }
            }
        }
    }
}





/**
 * 	Save custom attributes as post's meta data as well so that we can use in sorting and searching
 */
add_action('save_post', 'save_woocommerce_attr_to_meta');

function save_woocommerce_attr_to_meta($post_id) {
    // Get the attribute_names .. For each element get the index and the name of the attribute
    // Then use the index to get the corresponding submitted value from the attribute_values array.
    if (isset($_REQUEST['attribute_names'])) {
        foreach ($_REQUEST['attribute_names'] as $index => $value) {
            update_post_meta($post_id, $value, $_REQUEST['attribute_values'][$index]);
        }
    }
}

//add dates to child products in the group of products no longer works in 2.2
//add_action( 'woocommerce_grouped_product_list_before_price', 'woocommerce_grouped_product_dates' );
function woocommerce_grouped_product_dates($product) {
    $terms = get_the_terms($product->get_id(), 'pa_dates');
    if ($terms) {
        foreach ($terms as $term) {
            echo "<b>Date: " . $term->name . "</b>";
        }
    }
}

// Remove coupons case-insensitive filter (for the Rewards page as well)
remove_filter('woocommerce_coupon_code', 'strtolower');

// Custom Function to Include
add_action('wp_head', 'favicon_link');

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}


// woocommerce customization start
add_filter('woocommerce_show_page_title', '__return_false');
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_before_shop_loop_item', 10);
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);


remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);


remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

add_filter('woocommerce_after_shop_loop_item_title', 'csm_template_loop_product_price');

function csm_template_loop_product_price() {

global $product;
if(has_post_thumbnail()){?>
        <div class="icon"><?php 
        $attachment_ids = $product->get_gallery_attachment_ids();
       
        $image_url = wp_get_attachment_image_src($attachment_ids[0], 'large');
        if($image_url[0]){?>
        <img src="<?php echo $image_url[0];?>" class="over" alt="<?php the_title()?>"/>
        <?php } ?>
        </div>
<?php } ?>
<div class="details">
<h3><?php the_title();?></h3>
<?php the_excerpt();?>
<p><a class="read-more" href="<?php the_permalink(); ?>">Read more <i class="far fa-chevron-right"></i></a></p>
</div>
<?php
}

remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_after_shop_loop_item', 10);
// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );


remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs) {
    unset($tabs['description']); // Remove the description tab
    unset($tabs['reviews']); // Remove the reviews tab
    unset($tabs['additional_information']); // Remove the additional information tab
    return $tabs;
}



//REPLACE “OUT OF STOCK�? BY other text
add_filter('woocommerce_get_availability', 'availability_filter_func');

function availability_filter_func($availability) {
    $availability['availability'] = str_ireplace('Out of stock', 'Dates to be announced', $availability['availability']);
    return $availability;
}



add_action('show_user_profile', 'my_show_extra_profile_fields');
add_action('edit_user_profile', 'my_show_extra_profile_fields');

function my_show_extra_profile_fields($user) {
    ?>
<h3>Elite Loyalty Member Information</h3>
<table class="form-table">
    <tr>
        <th><label for="eliteid">Elite Loyalty ID</label></th>
        <td>
            <input type="text" name="eliteid" id="eliteid"
                value="<?php echo esc_attr(get_the_author_meta('eliteid', $user->ID)); ?>" class="regular-text" /><br />
            <span class="description">Please enter your Elite Loyalty ID card number.</span>
        </td>
    </tr>

</table>
<?php
}

add_action('personal_options_update', 'my_save_extra_profile_fields');
add_action('edit_user_profile_update', 'my_save_extra_profile_fields');

function my_save_extra_profile_fields($user_id) {
    if (!current_user_can('edit_user', $user_id))
        return false;
    /* Copy and paste this line for additional fields. Make sure to change 'eliteid' to the field ID. */
    update_usermeta($user_id, 'eliteid', $_POST['eliteid']);
}



// WooCommerce Checkout Fields Hook. Change order comments placeholder and label.
//add_filter('woocommerce_checkout_fields', 'custom_wc_checkout_fields');

function custom_wc_checkout_fields($fields) {
    $fields['order']['order_comments']['placeholder'] = 'Please enter any comments here.';
    $fields['order']['order_comments']['label'] = 'Comments';
    return $fields;
}



// Override theme default specification for product # per row
//add_filter('loop_shop_columns', 'loop_columns', 999);
function loop_columns() {
    return 4; // 5 products per row
}





/* Change order total text in emails */

add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
    $translated = str_ireplace('Order Total', 'Total', $translated);
    return $translated;
}

add_filter('woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text');    // 2.1 +

function woo_archive_custom_cart_button_text() {
   
 
    return __('APPLY NOW', 'woocommerce');
}

/**
 * Change text strings for "View Cart"
 *
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/gettext
 */
function my_text_strings($translated_text, $text, $domain) {
    switch ($translated_text) {
        case 'View Cart' :
            $translated_text = __('Continue', 'woocommerce');
            break;
    }
    return $translated_text;
}

add_filter('gettext', 'my_text_strings', 20, 3);



/*
 * WooCommerce customizations
 *
 * @author Baljeet
 */

// change buttons text
add_filter('gettext', 'change_my_woo_btn_text');
add_filter('ngettext', 'change_my_woo_btn_text');

function change_my_woo_btn_text($btn) {
    $btn = str_ireplace('View Cart', 'Continue', $btn);
    $btn = str_ireplace('Place Order', 'Submit', $btn);
    return $btn;
}





remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);


remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

add_filter('woocommerce_single_product_summary', 'product_description', 20);

function product_description(){    
    the_content();
}

//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);

//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);


//remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );




// Replace WP autop formatting
if ( ! function_exists( 'woo_remove_wpautop' ) ) {
	function woo_remove_wpautop( $content ) {
		$content = do_shortcode( shortcode_unautop( $content ) );
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		return $content;
	} // End woo_remove_wpautop()
}

add_filter('wc_add_to_cart_message_html','remove_continue_shoppping_button',10,2);

function remove_continue_shoppping_button($message, $products) {
    if (strpos($message, 'Continue shopping') !== false) {
        return preg_replace('/<a.*<\/a>/m','', $message);
    } else {
        return $message;
    }
}



/*
end woocommerce code
 *  */ 
 
add_filter( 'wp_mail_from', 'my_mail_from' );
function my_mail_from( $email ) {
     return "info@technoedgelearning.ca";
}


add_filter('wp_mail_from_name', 'new_mail_from_name');
function new_mail_from_name($old) {
    return 'TechnoEdge Learning';
}

function html_set_content_type(){
    return "text/html";
}
//add_filter( 'wp_mail_content_type','html_set_content_type' );

// hideInner class in body class
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page( 'my-account' ) || is_page( 'cart' ) || is_page( 'checkout' )) {
        $classes[] = 'hideInner';
    }
    return $classes;
}


function global_js() {
    wp_enqueue_script( 'global_script', get_template_directory_uri() . '/js/global.js', array('jquery'), null,true );
    wp_localize_script( 'global_script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'global_js' );



/**
 * Get value by onchange on the product details page start
 */

function woocommerce_apply_country_callback_function() {
    global $wpdb;
    if ($_POST['action']==='woocommerce_apply_country') {       
        $countries_obj   = new WC_Countries();       
        $country_code=$_POST['country'];
        $default_county_states = $countries_obj->get_states($country_code);
        $county_states = '<option value="">--Select--</option>';
        foreach( $default_county_states as $key=>$val){
            $county_states .= '<option value="'.$key.'">'.$val.'</option>';
        } 
        print_r($county_states);
       
      }
      

}
add_action( 'wp_ajax_woocommerce_apply_country', 'woocommerce_apply_country_callback_function' );    // If called from admin panel
add_action( 'wp_ajax_nopriv_woocommerce_apply_country', 'woocommerce_apply_country_callback_function' );



// remove Order Notes from checkout field in Woocommerce
add_filter( 'woocommerce_checkout_fields' , 'alter_woocommerce_checkout_fields',1 );
function alter_woocommerce_checkout_fields( $fields ) {


    $fields['billing']['billing_first_name']['placeholder'] = 'Full name'; 
    $fields['billing']['billing_postcode']['label'] = 'Postal Code/Zip'; 
    $fields['billing']['billing_state']['label'] = 'State/Province/Region'; 


     unset($fields['order']['order_comments']);          
     unset($fields['billing']['billing_last_name']);
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_phone']);     
     unset($fields['order']['order_comments']);


    
    

     return $fields;
}




add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields2' );
function custom_override_default_address_fields2( $address_fields ) {
    $address_fields['state']['label'] = 'State/Province/Region';   
    $address_fields['postcode']['label'] = 'Postal Code/Zip';
    $address_fields['city']['label'] = 'City';

    $address_fields['address_1']['label'] = 'Address line 1';
    $address_fields['address_2']['label'] = 'Address line 2';
    $address_fields['address_1']['placeholder'] = 'Street address, P.O. box, company name, c/o';
    $address_fields['address_2']['placeholder'] = 'Apartment, suite, unit, building, floor, etc.';    
    return $address_fields;
    
}

/**
 * Add the field to the checkout
 * */

add_filter( 'default_checkout_country', 'change_default_checkout_country' );
add_filter( 'default_checkout_state', 'change_default_checkout_state' );

function change_default_checkout_country() {
  return 'CA'; // country code
}

function change_default_checkout_state() {
  return 'BC'; // state code
}

add_action( 'woocommerce_checkout_billing', 'my_custom_checkout_field' );
function my_custom_checkout_field($checkout) {

   

    //Book is in cart so show additional fields for Full time courses

        echo '<div id="my_custom_checkout_field"><h3>' . __('Student Information') . '</h3>';

         

        woocommerce_form_field('fname_ft', array(
            'type' => 'text',
            'class' => array('fname-text form-row form-row-wid'),
            'label' => __('Full Name'),
            'required' => true,
                ));

      

        woocommerce_form_field('addr_ft', array(
            'type' => 'text',
            'class' => array('addr-text form-row form-row-wid'),
            'label' => __('Address line 1'),
            'placeholder' => __('Street address, P.O. box, company name, c/o'),
            'required' => true,
                ));


        woocommerce_form_field('addr_ft2', array(
            'type' => 'text',
            'class' => array('addr-text form-row form-row-wid'),
            'label' => __('Address line 2'),
            'placeholder' => __('Apartment, suite, unit, building, floor, etc.'),
            'required' => false,
                ));

        $countries_obj   = new WC_Countries();
        $countries   = $countries_obj->__get('countries'); 

        woocommerce_form_field('country_ft', array(
            'type' => 'select',
            'class' => array('form-row form-row-wid'),            
            'label' => __('Country'),
            'required' => true,
            'default'     => 'CA',
            'options'   => $countries         
        ));

        $countries_obj   = new WC_Countries();
        $countries   = $countries_obj->__get('countries');
        $default_country = $countries_obj->get_base_country();
        $default_county_states = $countries_obj->get_states( $default_country );
            
        
        woocommerce_form_field('prov_ft', array(
            'type' => 'select',
            'class' => array('form-row form-row-wid'),            
            'label' => __('State/Province/Region'),
            'required' => true,
            'default'     => 'BC',
            'options'   => $default_county_states        
             ));


        woocommerce_form_field('zip_ft', array(
            'type' => 'text',
            'class' => array('form-row form-row-wid'),
            'label' => __('Postal Code/ZIP'),
             'required' => true,
                ));

       
        woocommerce_form_field('city_ft', array(
            'type' => 'text',
            'class' => array('form-row form-row-wid'),
            'label' => __('City'),
                'required' => true,
                ));    
        
        woocommerce_form_field('phone_ft', array(
            'type' => 'text',
            'class' => array('phone-text form-row-first'),
            'label' => __('Phone'),
                'required' => true,
                ));        
       
        

        woocommerce_form_field('email_ft', array(
            'type' => 'text',
            'class' => array('form-row form-row-wid'),
            'label' => __('E-mail address'),
             'required' => true,
                ));



        

        woocommerce_form_field('dob_ft', array(
            'type' => 'text',
            'placeholder'=>'mm/dd/yyyy',
            'class' => array('form-row form-row-wid'),
            'label' => __('Date of Birth'),
             'required' => true,
                ));


        


           


        echo '</div>';

}

add_action( 'woocommerce_before_checkout_billing_form', 'billing_form_checkout_field' );
function billing_form_checkout_field($checkout) {
    woocommerce_form_field('duplicate-billing-address', array(
        'type' => 'checkbox',
        'class' => array(''),
        'id'    => 'duplicate-billing-address',
        'label' => __('Same as above'),
            ));       
       

}

add_filter('woocommerce_checkout_get_value','__return_empty_string', 1, 1);
add_action('woocommerce_checkout_process', 'ast_check_if_selected');

function ast_check_if_selected() {

	// you can add any custom validations here
	

        if ( empty( $_POST['fname_ft'] ) )
            wc_add_notice( 'Please enter Legal First Name.', 'error' );

       

        if ( empty( $_POST['addr_ft'] ) )
            wc_add_notice( 'Please enter Address.', 'error' );

        if ( empty( $_POST['city_ft'] ) )
            wc_add_notice( 'Please enter City Name.', 'error' );

        if ( empty( $_POST['prov_ft'] ) )
            wc_add_notice( 'Please enter Province.', 'error' );

        if ( empty( $_POST['zip_ft'] ) )
            wc_add_notice( 'Please enter Postal code.', 'error' );

        if ( empty( $_POST['country_ft'] ) )
            wc_add_notice( 'Please enter Country.', 'error' );

        if ( empty( $_POST['prov_ft'] ) )
            wc_add_notice( 'Please enter Province.', 'error' );

        if ( empty( $_POST['phone_ft'] ) )
            wc_add_notice( 'Please enter Cell Phone.', 'error' );

        if ( empty( $_POST['email_ft'] ) )
            wc_add_notice( 'Please enter Email.', 'error' );       

        if ( empty( $_POST['dob_ft'] ) )
            wc_add_notice( 'Please enter DOB.', 'error' );




}

/**
 * Update the order meta with field value
 **/
add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');

function my_custom_checkout_field_update_order_meta( $order_id ) {

   

    if ($_POST['fname_ft']) update_post_meta( $order_id, 'fname_ft', esc_attr($_POST['fname_ft']));

    

   

    if ($_POST['addr_ft']) update_post_meta( $order_id, 'addr_ft', esc_attr($_POST['addr_ft']));

    if ($_POST['city_ft']) update_post_meta( $order_id, 'city_ft', esc_attr($_POST['city_ft']));

    if ($_POST['prov_ft']) update_post_meta( $order_id, 'prov_ft', esc_attr($_POST['prov_ft']));

    if ($_POST['zip_ft']) update_post_meta( $order_id, 'zip_ft', esc_attr($_POST['zip_ft']));

	if ($_POST['country_ft']) update_post_meta( $order_id, 'country_ft', esc_attr($_POST['country_ft']));


    if ($_POST['phone_ft']) update_post_meta( $order_id, 'phone_ft', esc_attr($_POST['phone_ft']));
    

    if ($_POST['email_ft']) update_post_meta( $order_id, 'email_ft', esc_attr($_POST['email_ft']));

   

    if ($_POST['dob_ft']) update_post_meta( $order_id, 'dob_ft', esc_attr($_POST['dob_ft']));

    if ($_POST['pen_ft']) update_post_meta( $order_id, 'pen_ft', esc_attr($_POST['pen_ft']));
    

   
   
}


add_action( 'add_meta_boxes_shop_order', 'add_meta_boxes_card', 10, 2);

function add_meta_boxes_card($post) {

    add_meta_box(
            'cd_wcpdf-data-input-box',
            __( 'Student Information', 'card_details' ),
            'card_data_input_box_content',
            'shop_order',
            'normal',
            'default'
    );
}

function card_data_input_box_content() {
    global $post;
    $order_id = $post->ID;

            ?>
<div class="card_info">
    <fieldset>
        <h3>Student Information</h3>

       

        <p class="form-row form-row-wid fname-text"><label for="fname_ft" class="">Full Name&nbsp;:
                <?php echo get_post_meta($order_id, 'fname_ft', true);?></label></p>

       
        <p class="form-row addr-text form-row-last " id="addr_ft_field" data-priority=""><label for="addr_ft"
                class="">Address line 1&nbsp;: <?php echo get_post_meta($order_id, 'addr_ft', true);?></label></p>

        <p class="form-row addr-text form-row-last " id="addr_ft_field2" data-priority=""><label for="addr_ft2"
                class="">Address line 2 &nbsp;: <?php echo get_post_meta($order_id, 'addr_ft2', true);?></label></p>       

        <p class="form-row city-text form-row-first " id="city_ft_field" data-priority=""><label for="city_ft"
                class="">Town / City&nbsp;: <?php echo get_post_meta($order_id, 'city_ft', true);?></label></p>

        <p class="form-row prov-text form-row-last " id="prov_ft_field" data-priority=""><label for="prov_ft"
                class="">Province&nbsp;: <?php echo get_post_meta($order_id, 'prov_ft', true);?></label></p>

        <p class="form-row form-row-first " id="zip_ft_field" data-priority=""><label for="zip_ft" class="">Postal
                code&nbsp;: <?php echo get_post_meta($order_id, 'zip_ft', true);?></label></p>

        <p class="form-row form-row-last " id="country_ft_field" data-priority=""><label for="country_ft"
                class="">Country&nbsp;: <?php echo get_post_meta($order_id, 'country_ft', true);?></label></p>

        <p class="form-row phone-text form-row-first " id="phone_ft_field" data-priority=""><label for="phone_ft"
                class="">Phone&nbsp;: <?php echo get_post_meta($order_id, 'phone_ft', true);?></label></p>
       

        <p class="form-row form-row-first " id="email_ft_field" data-priority=""><label for="email_ft" class="">E-mail
                address&nbsp;: <?php echo get_post_meta($order_id, 'email_ft', true);?></label></p>    


        <p class="form-row phone-text form-row-first"><label for="dob_ft" class="">Date of Birth&nbsp;:
                <?php echo get_post_meta($order_id, 'dob_ft', true);?></label></p>
        


    </fieldset>
</div>
<?php
}

// remove query string
function _remove_script_version($src) {
    $parts = explode('?ver', $src);
    return $parts[0];
}
add_filter('script_loader_src', '_remove_script_version', 15, 1);

add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );

        // Also works with other attributes...
        $buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );       

        return $buffer;
    });
});