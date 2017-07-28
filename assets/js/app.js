$(document).foundation();

//menu JavaScript Document
var $ = jQuery.noConflict();

jQuery(document).ready(function() {
    //$('input,textarea').placeholder();
    $('.enumenu_ul').responsiveMenu({
        'menuIcon_text': '',
        onMenuopen: function() {}
    });

});


/* progress js */

        $(function(){
        var $ppc = $('.progress-pie-chart.web-design-pie-chart'),
        percent = parseInt($ppc.data('percent')),
        deg = 360*percent/100;
            
        var $ppc1 = $('.progress-pie-chart.html-css-pie-chart'),
        percent1 = parseInt($ppc1.data('percent')),
        deg1 = 360*percent1/100;
            
        var $ppc2 = $('.progress-pie-chart.graphics-design-pie-chart'),
        percent2 = parseInt($ppc2.data('percent')),
        deg2 = 360*percent2/100;
            
        var $ppc3 = $('.progress-pie-chart.ui-ux-pie-chart'),
        percent3 = parseInt($ppc3.data('percent')),
        deg3 = 360*percent3/100;
            
          if (percent > 85) {
              $ppc.addClass('gt-85');
              $('.web-design-pie-chart .ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
              $('.web-design-pie-chart .ppc-percents span').html(percent+'%');
          } 
            
          if (percent1 > 70) {
              $ppc1.addClass('gt-70');
              $('.html-css-pie-chart .ppc-progress-fill').css('transform','rotate('+ deg1 +'deg)');
              $('.html-css-pie-chart .ppc-percents span').html(percent1+'%');
          }
            
            if (percent2 > 60) {
              $ppc2.addClass('gt-60');
              $('.graphics-design-pie-chart .ppc-progress-fill').css('transform','rotate('+ deg2 +'deg)');
              $('.graphics-design-pie-chart .ppc-percents span').html(percent2+'%');
          }
            
            if (percent3 > 80) {
              $ppc3.addClass('gt-80');
              $('.ui-ux-pie-chart .ppc-progress-fill').css('transform','rotate('+ deg3 +'deg)');
              $('.ui-ux-pie-chart .ppc-percents span').html(percent3+'%');
          }
    });
 

/* filter js start */
$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						//$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						//$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						//$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						//$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});

/*  menu scroll js */

$(document).ready(function() {
			$('#nav').onePageNav();
		});




