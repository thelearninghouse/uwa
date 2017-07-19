/*
 * Put all your regular jQuery in here.
*/
import $ from 'jquery'
window.$ = window.jQuery = $
jQuery(document).ready(function($) {
  alert('hi');
    $('.accordion .accord').on("click", function(){
        if($(this).hasClass('active')){
           $(this).removeClass('active');
        }else{
            $('.accordion .accord').removeClass('active');
            $(this).addClass("active");
        }
    });

    // Pullquote functionality so the content is not repeated
   $(function() {
      $('span.pullquote').each(function() {
        var $parentParagraph = $(this).parent('p');
        $parentParagraph.css('position', 'relative');
        $(this).clone()
          .addClass('pulledquote')
          .prependTo($parentParagraph);
      });
    });

    // Making social share links pop up in new window
    function windowPopup(url, width, height) {
      // Calculate the position of the popup so it’s centered on the screen.
      var left = (screen.width / 2) - (width / 2),
          top = (screen.height / 2) - (height / 2);

      window.open(
        url,
        "",
        "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
      );
    }

    $(".social-link").on("click", function(e) {
      e.preventDefault();

      windowPopup($(this).attr("href"), 500, 300);
    });

    // Remove Select menu error classs on load
    $(window).load(function() {
        $('.requestinfo select').removeClass('error');
    });

    // Mobile Nav Trigger
    // $('.js__menu-trigger').on('click', function(e) {
		// 		e.preventDefault();
    //
    //     $('.header__nav').toggleClass('visible');
    // });

		// Modal Stuff
		// $('.js-modal').on('click', function(e) {
		// 	var modalWindow = $(this).data( "modal" ); // get target modal
    //
		// 	e.preventDefault();
		// 	$('#'+modalWindow).toggleClass( 'open' ).attr("aria-hidden","false"); // toggle class
		// 	$('body').toggleClass("no-scroll"); // set body to no scroll
		// 	$(".container").attr("tabindex","-1"); // change tab index of main content
		// 	// var modalHeading = $('.modal.open h3').text();
    //   var modalHeading = $('.modal.open h3');
    //   modalHeading = modalHeading[0];
		// 	// modalHeading.focus();
    //
    //
		//  });
    //
		// $('.js-modal__close').on('click', function(e) {
		// 	e.preventDefault();
		// 	$('.modal.open').removeClass('open');
		// 	$('body').toggleClass("no-scroll");
		// });


		// Smooth Scroll Links
		$(function() {
			$('a[href*="#"]:not([href="#"]).scroll').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});


    // COURSE DETAILS ACCORDION
    (function () {
      var buttons = $('.accord-header button');

      buttons.on('click', function() {
        var content = $(this).parent().next();
        var state = $(this).attr('aria-expanded') === 'false' ? true : false;
        $(this).attr('aria-expanded', state);
        content.attr('aria-hidden', !state);
      });
    })();

    // FAQ PAGE
    if ( $('.answers').length ) {
        // grab the initial top offset of the navheaderigation
        var stickyElementOffsetTop = $('.answers').offset().top - 130;
        // the function that decides weather the navigation bar should have "fixed" css position or not
        var makeStickyElementOnScroll = function(stickyOffset) {


            var scroll_top = $(window).scrollTop(); // the current vertical position from the top
            // console.log(scroll_top);

            // if user scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
            if (scroll_top > stickyOffset) {
                $('.answers').addClass('fixed');
                // $('#header').css("margin-top", $('.answers').height());
            } else {
                $('.answers').removeClass('fixed');
                // $('#header').css("margin-top", 0);
            }
        };
l
        // run the function on load
        makeStickyElementOnScroll(stickyElementOffsetTop);

        // and run it again every time you scroll
        $(window).on('scroll', function() {
            makeStickyElementOnScroll(stickyElementOffsetTop);
        });

        $(window).on('resize', function() {
            console.log('FIRED!!!');
            if ( $('.answers').hasClass('fixed') ) {
                $('.answers').removeClass('fixed');
            }
            stickyElementOffsetTop = $('.answers').offset().top - 130;
            makeStickyElementOnScroll(stickyElementOffsetTop);
        });
    }

}); /* end of as page load scripts */
