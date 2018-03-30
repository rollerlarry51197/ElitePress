jQuery(document).ready(function() {

	/* If there are required actions, add an icon with the number of required actions in the About elitepress page -> Actions required tab */
    var elitepress_nr_actions_required = elitepressLiteWelcomeScreenObject.nr_actions_required;

    if ( (typeof elitepress_nr_actions_required !== 'undefined') && (elitepress_nr_actions_required != '0') ) {
        jQuery('li.elitepress-w-red-tab a').append('<span class="elitepress-actions-count">' + elitepress_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".elitepress-dismiss-required-action").click(function(){

        var id= jQuery(this).attr('id');
        console.log(id);
        jQuery.ajax({
            type       : "GET",
            data       : { action: 'elitepress_dismiss_required_action',dismiss_id : id },
            dataType   : "html",
            url        : elitepressLiteWelcomeScreenObject.ajaxurl,
            beforeSend : function(data,settings){
				jQuery('.elitepress-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + elitepressLiteWelcomeScreenObject.template_directory + '/inc/elitepress-info/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery("#temp_load").remove(); /* Remove loading gif */
                jQuery('#'+ data).parent().remove(); /* Remove required action box */

                var elitepress_lite_actions_count = jQuery('.elitepress-actions-count').text(); /* Decrease or remove the counter for required actions */
                if( typeof elitepress_lite_actions_count !== 'undefined' ) {
                    if( elitepress_lite_actions_count == '1' ) {
                        jQuery('.elitepress-actions-count').remove();
                        jQuery('.elitepress-tab-pane#actions_required').append('<p>' + elitepressLiteWelcomeScreenObject.no_required_actions_text + '</p>');
                    }
                    else {
                        jQuery('.elitepress-actions-count').text(parseInt(elitepress_lite_actions_count) - 1);
                    }
                }
            },
            error     : function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });

	/* Tabs in welcome page */
	function elitepress_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".elitepress-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}

	var elitepress_actions_anchor = location.hash;

	if( (typeof elitepress_actions_anchor !== 'undefined') && (elitepress_actions_anchor != '') ) {
		elitepress_welcome_page_tabs('a[href="'+ elitepress_actions_anchor +'"]');
	}

    jQuery(".elitepress-nav-tabs a").click(function(event) {
        event.preventDefault();
		elitepress_welcome_page_tabs(this);
    });

		/* Tab Content height matches admin menu height for scrolling purpouses */
	 $tab = jQuery('.elitepress-tab-content > div');
	 $admin_menu_height = jQuery('#adminmenu').height();
	 if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') )
	 {
		 $newheight = $admin_menu_height - 180;
		 $tab.css('min-height',$newheight);
	 }

});
