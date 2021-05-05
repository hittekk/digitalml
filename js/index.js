(function($) {
    'use strict';

    // Populate gated content iframe with proper src
    // For Resources White Papers
    $('#myGatedContent').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var src = $(e.relatedTarget).data('iframe-src');

        //populate the iframe src
        $(e.currentTarget).find('iframe').attr('src', src);
    });
})(jQuery);

// CAREER SIDEBAR
jQuery("#stickysidebar").stick_in_parent();

// IGNITE NAV
jQuery(".ignite-nav").stick_in_parent();

jQuery(".plan-btn").hover(function(){
	'use strict';
    jQuery(".plan-description").show();
    }, function(){
	'use strict';
    jQuery(".plan-description").hide();
});
jQuery(".design-btn").hover(function(){
	'use strict';
    jQuery(".design-description").show();
    }, function(){
	'use strict';
    jQuery(".design-description").hide();
});
jQuery(".build-btn").hover(function(){
    'use strict';
	jQuery(".build-description").show();
    }, function(){
	'use strict';
    jQuery(".build-description").hide();
});
jQuery(".run-btn").hover(function(){
    'use strict';
	jQuery(".run-description").show();
    }, function(){
	'use strict';
    jQuery(".run-description").hide();
});


// MIXITUP
/* jQuery(function(){
  jQuery('.resource-items').mixItUp({
	load: {
	  sort: 'all:asc'
	}
  });
}); */

// video popup
/*jQuery(document).ready(function(){
	var infographic = jQuery('.video');
	jQuery('.lity-close').click(function() {
		infographic.get(0).pause();
	});

	jQuery('.infographic-btn').click(function(){
		setTimeout(function(){
			infographic.get(0).play();
		},1000)
	})
  });*/