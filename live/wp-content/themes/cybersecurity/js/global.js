jQuery(document).ready(function () {    
   

    jQuery("#country_ft").on('change', function () {   
        var country = jQuery('#country_ft').val();    
       
        var data = {
            action: 'woocommerce_apply_country',           
            country: country,            
        };

        if(country){ 
        jQuery.ajax({
            type: 'POST', 
            url: my_ajax_object.ajax_url,  
            data: data,  
            success: function (response) {
                if(response) {                   
                    jQuery('#prov_ft').html(response);  
                    jQuery('#billing_state').html(response);           
                } 
        
            }
        });
        }  
        
    });

});
