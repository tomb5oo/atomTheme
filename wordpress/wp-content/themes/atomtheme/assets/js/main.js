$(function() {

	//Cache the window object
	var $window = $(window);

	//Parallax background effect
	$('section[data-type="background"]').each(function() {

		var $bgobj = $(this); // assinging the object

		$(window).scroll(function() {

			// scroll the background at var speed
			// the yPos is a negative value because we're scrolling up

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			//Put together our final backgound position

			var coords = '50% ' + yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords });

		}); // end window scroll
	});
});

/////////////////Login form JS////////////////////////
$(document).ready(function(){

    // Variables
    var clickedTab = $(".tabs > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);

    $(".tabs > li").on("click", function() {

        // Remove class from active tab
        $(".tabs > li").removeClass("active");

        // Add class active to clicked tab
        $(this).addClass("active");

        // Update clickedTab variable
        clickedTab = $(".tabs .active");

        // fade out active tab
        activeTab.fadeOut(250, function() {

            // Remove active class all tabs
            $(".tab__content > li").removeClass("active");

            // Get index of clicked tab
            var clickedTabIndex = clickedTab.index();

            // Add class active to corresponding tab
            $(".tab__content > li").eq(clickedTabIndex).addClass("active");

            // update new active tab
            activeTab = $(".tab__content > .active");

            // Update variable
            activeTabHeight = activeTab.outerHeight();

            // Animate height of wrapper to new tab height
            tabWrapper.stop().delay(50).animate({
                height: activeTabHeight
            }, 500, function() {

                // Fade in active tab
                activeTab.delay(50).fadeIn(250);

            });
        });
    });
});

///////////////////////////////////////////////////////////////////////////////////////
