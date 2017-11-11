// Preloader 
jQuery(function (jQuery) {
    //Preloader
    var preloader = jQuery('.preloader');
    jQuery(window).load(function () {
        preloader.remove();
    });
});
// Wow 
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: false, // default
    live: true // default
})
wow.init();
// Bootstrap Slider 
jQuery('.carousel').carousel({
    interval: 20000
});
/**** Custom Scroll *****/
(function ($) {
    $(window).on("load", function () {
        $(".capability_scroll, .home_abt_lft,.about_sec_cntnt,.history_scroll").mCustomScrollbar({
            theme: "minimal-dark"
        });
    });
})(jQuery);


//******************** ADD SITE URL INTO CONTACT FORM********************//
jQuery(".post-cmt-btn,.guideline-btn").click(function () 
{
	var url = jQuery('.container').find('.cls_site_url').val();
	
	jQuery("input[name='site-url']").val(url);
	
	 setTimeout(function(){ jQuery('.wpcf7-validation-errors').fadeOut('slow'); }, 9000);
	 setTimeout(function(){ jQuery('.wpcf7-mail-sent-ok').fadeOut('slow'); }, 9000);
});
/**** Remove extra p tag ****/
jQuery(document).ready(function(){
jQuery('p').each(function() {
var $this = jQuery(this);
if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
$this.remove();
});
});

//************************MAP**************************//

(function ($) {
	/*
	 *  render_map
	 *
	 *  This function will render a Google Map onto the selected jQuery element
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$el (jQuery element)
	 *  @return	n/a
	 */
	function render_map($el) {
		// var
		var $markers = $el.find('.marker');
		// vars
		var args = {
			zoom: 30,
			center: new google.maps.LatLng(0, 0),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		// create map	        	
		var map = new google.maps.Map($el[0], args);
		// add a markers reference
		map.markers = [];
		// add markers
		$markers.each(function () {
			add_marker($(this), map);
		});
		// center map
		center_map(map);
	}
	/*
	 *  add_marker
	 *
	 *  This function will add a marker to the selected Google Map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$marker (jQuery element)
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */
	function add_marker($marker, map) {
		// var
		var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
		// create marker
		var marker = new google.maps.Marker({
			position: latlng,
			map: map
		});
		// add to array
		map.markers.push(marker);
		// if marker contains HTML, add it to an infoWindow
		if ($marker.html()) {
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content: $marker.html()
			});
			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function () {
				infowindow.open(map, marker);
			});
		}
	}
	/*
	 *  center_map
	 *
	 *  This function will center the map, showing all markers attached to this map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */
	function center_map(map) {
		// vars
		var bounds = new google.maps.LatLngBounds();
		// loop through all markers and create bounds
		$.each(map.markers, function (i, marker) {
			var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
			bounds.extend(latlng);
		});
		// only 1 marker?
		if (map.markers.length == 1) {
			// set center of map
			map.setCenter(bounds.getCenter());
			map.setZoom(10);
		} else {
			// fit to bounds
			map.fitBounds(bounds);
		}
	}
	/*
	 *  document ready
	 *
	 *  This function will render each map when the document is ready (page has loaded)
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	5.0.0
	 *
	 *  @param	n/a
	 *  @return	n/a
	 */
	$(document).ready(function () {
		$('.acf-map').each(function () {
			render_map($(this));
		});
	});
})(jQuery);



jQuery(document).ready(function () {
	
	var url = window.location.href;

	var result= url.split('/');
	var param = result[result.length-3];
	//alert(param);
	var screenWidth = jQuery(window).width();
	if(screenWidth < 991) 
	{
		if(param=='project')
		{
			jQuery('li#responsive-menu-item-21').addClass('current-menu-item');
		}
		else if(param=='service') 
		{
			jQuery('li#responsive-menu-item-22').addClass('current-menu-item');
		}
	}; 

	
});



//************************MAP**************************//



//************************************ START SCRIPT USE FOR ENTER ALPHABETS ONLY IN (NAME) TEXT BOX********************//

jQuery(document).ready(function(){
jQuery.noConflict();
   jQuery("input[name='your-name'],input[name='FirstName'],input[name='LastName']").keypress(function(event){

       var inputValue = event.which;
       // allow letters and whitespaces only.
       if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)
&& (inputValue != 32)){
           event.preventDefault();
       }
   });
});

//************************************ END OF SCRIPT USE FOR ENTER ALPHABETS ONLY IN (NAME) TEXT BOX********************//



//**************************** START SCRIPT USE FOR ENTER NUMBER ONLY IN (PHONENUMBER) TEXT BOX ********************//

jQuery(document).ready(function() {
  jQuery("input[name='phone']").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
           // Allow: Ctrl+A, Command+A
          (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
           // Allow: home, end, left, right, down, up
          (e.keyCode >= 35 && e.keyCode <= 40)) {
               // let it happen, don't do anything
               return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
  });
});


//**************************** END OF SCRIPT USE FOR ENTER NUMBER ONLY IN (PHONENUMBER) TEXT BOX ********************//