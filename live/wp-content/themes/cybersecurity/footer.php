<!-- Enquire now starts -->
<?php if(get_option('enquire_now')){ ?>
<div class="enquire-now">
    <div class="container">
        <h3><span><?php if(get_option('enquire_now')) echo get_option('enquire_now'); ?></span><a href="<?php if(get_option('enquire_now_url')) echo get_option('enquire_now_url'); else echo '#';  ?>"
                class="btn gray">Enquire Today</a>
        </h3>
    </div>
</div>
<?php } ?>
<!--footer starts-->

<footer>

    <div class="top-content">
        <div class="container">
            <div class="allBox">
                <div class="box big">
                    <h3>Our Courses</h3>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer1',
                            'items_wrap' => '<ul>%3$s</ul>'
                        ));
                        ?>
                </div>

                <div class="box">
                    <h3>Contact Us</h3>
                    <?php echo get_option('address1'); ?>
                   <div class="social-icons">
                        <span>Follow us</span>
                        <ul class="social-icon">
                            <li><a href="<?php if(get_option('facebookid')) echo get_option('facebookid'); else echo "#"; ?>"
                                    target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="<?php if(get_option('twitterid')) echo get_option('twitterid'); else echo "#"; ?>"
                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php if(get_option('instagramid')) echo get_option('instagramid'); else echo "#"; ?>"
                                    target="_blank"><i class="fab fa-instagram"></i></a></li>                                    
  <li><a href="<?php if(get_option('linkedinid')) echo get_option('linkedinid'); else echo "#"; ?>"
                                    target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="box right"> <a href="<?php bloginfo('url');?>"><img
                            src="<?php echo get_option('footer_logo'); ?>" alt=""> </a>

                    
                     <img src="https://technoedgelearning.ca/wp-content/themes/cybersecurity/img/ashtoncollege-logo.png" alt="Ashton Education Network">
                   
                </div>
            </div>
               <p class="text-center" style="border-top:1px solid rgba(255,255,255,.1); padding-top:15px">© <?php echo date('Y'); ?> TechnoEdge Learning All rights reserved.</p>
        </div>
    </div>
</footer>

<i class="scrollup"><i class="fal fa-angle-up"></i></i>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script>
var $j = jQuery;

$j(document).ready(function() {
    //set initial state of checkbox to unchecked
    setTimeout(function(){ 
        $j("#billing_country").removeClass('select2-hidden-accessible');
        $j("#billing_state").removeClass('select2-hidden-accessible');
        $j("#billing_email_field").hide();
        
     }, 3000);

   
    $j("#duplicate-billing-address").change(function() {
        if ($j(this).is(":checked")) {
            //if checked then copy all values
          
            $j("#billing_first_name").val($j('#fname_ft').val());
            $j("#billing_last_name").val($j('#lname_ft').val());
            $j("#billing_company").val($j('#cname_ft').val());
            $j("#billing_address_1").val($j('#addr_ft').val());
            $j("#billing_city").val($j('#city_ft').val());
            $j("#billing_email").val($j('#email_ft').val());
            $j("#billing_postcode").val($j('#zip_ft').val());
            $j("#billing_phone").val($j('#phone_ft').val());
            
            $j("#select2-billing_state-container").text($j('#prov_ft').val());
            $j("#billing_state").val($j('#prov_ft').val());

            $j("#select2-billing_country-container").text($j('#country_ft').val());
            $j("#billing_country").val($j('#country_ft').val());
            $j(".woocommerce-billing-fields__field-wrapper").addClass('hide');
            $j("#billing_state_field .select2-container").hide();
            $j("#billing_country_field .select2-container").hide();
        } else {
            //Clear values when unchecked

            $j(".woocommerce-billing-fields__field-wrapper").removeClass('hide');
            $j("#billing_first_name").val('');
            $j("#billing_last_name").val('');
            $j("#billing_company").val('');
            $j("#billing_address_1").val('');
            $j("#billing_city").val('');
            $j("#billing_email").val('');
            $j("#billing_postcode").val('');
            $j("#billing_phone").val('');
            $j("#billing_state").val('');
            $j("#billing_country").val('');

        }
    });

    



});
</script>
<?php wp_footer(); ?>
</body>
</html>