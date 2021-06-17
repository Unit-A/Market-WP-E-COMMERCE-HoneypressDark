jQuery(document).ready(function() {

	/* Tabs in welcome page */
		function honeypress_dark_welcome_page_tabs(event) {
			jQuery(event).parent().addClass("active");
		   jQuery(event).parent().siblings().removeClass("active");
		   var tab = jQuery(event).attr("href");
		   jQuery(".honeypress_dark-tab-pane").not(tab).css("display", "none");
		   jQuery(tab).fadeIn();
		}

        jQuery(".honeypress_dark-nav-tabs li").slice(0,1).addClass("active");

	    jQuery(".honeypress_dark-nav-tabs a").click(function(event) {
		   event.preventDefault();
			honeypress_dark_welcome_page_tabs(this);
	    });

		/* Tab Content height matches admin menu height for scrolling purpouses */
		$tab = jQuery('.honeypress_dark-tab-content > div');
		$admin_menu_height = jQuery('#adminmenu').height();
		if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') )
		{
		    $newheight = $admin_menu_height - 180;
		    $tab.css('min-height',$newheight);
		}

		jQuery(".honeypress_dark-custom-class").click(function(event){
		   event.preventDefault();
		   jQuery('.honeypress_dark-nav-tabs li a[href="#changelog"]').click();
		});

});
