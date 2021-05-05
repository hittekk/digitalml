(function($,window) {
    'use strict';

    var stage,
        actualScaleX,
        scale,
        offsetX,
        offsetY;
    var hexActualWidthX = 481;

    function getHexParameters() {
        actualScaleX = parseInt($('#home-hero-icon').css('width'), 10);
        scale = actualScaleX / hexActualWidthX;
        offsetX = parseInt($('#home-hero-icon').css('margin-left'), 10);
        offsetY = parseInt($('#home-hero-icon').css('margin-top'), 10);
    }
    function initPathFollow() {
        getHexParameters();
        stage.svgPathFollow({ originOffsetX: offsetX, originOffsetY: offsetY, scale: scale, speedAttenuation: 1.25, debug: false });
    }
    function updatePathFollow() {
        getHexParameters();
        stage.svgPathFollow('setting', 'originOffsetX', offsetX);
        stage.svgPathFollow('setting', 'originOffsetY', offsetY);
        stage.svgPathFollow('setting', 'scale', scale);
    }

    $(window).resize(function() {
        //console.log ('resize detected!');
        //setTimeout( function() {
        //$('.media-grid').slick('resize');
        //updatePathFollow();
        //}, 250);
    });

    function initHeroAnimation() {
    	stage = $('#svg-stage');

        // attach svgPathPollow module
        if(window.attachEvent) {
            window.attachEvent('onload', initPathFollow);
        } else {
            if(window.onload) {
                var curronload = window.onload;
                var newonload = function(evt) {
                    curronload(evt);
                    initPathFollow(evt);
                };
                window.onload = newonload;
            } else {
                window.onload = initPathFollow;
            }
        }
    }

    window.initVerticalNav = function() {
        var $body = $('body');
        var bodyClass = $body.attr('class');
        $('.navsection-waypoint').each(function (i) {
            var $el = $(this),
                currentWaypointClass = $el.attr('id'),
                prevWaypointClass = currentWaypointClass.split('-')[0],
                classIndex = parseInt(currentWaypointClass.split('-')[1]),
                prevIndex = classIndex - 1;
            prevWaypointClass += '-' + prevIndex;

            $el.waypoint(function (direction) {
                if (direction === 'down') {
                    $body.attr('class', bodyClass + ' ' + currentWaypointClass);
                } else {
                    $body.attr('class', bodyClass + ' ' + prevWaypointClass);
                }
            }, {offset: '60%'});
        });

        $('.section-dots div').each(function (i) {
            var $el = $(this);

            $el.on('click', function (e) {
                var gotoClass = $(this).attr('data-navsection');
                //console.log('el:' + $(this).attr('id') + ', gotoClass:' + gotoClass);
                $('html, body').animate({
                    scrollTop: $("#" + gotoClass).offset().top
                }, 500);
            });
        });

        $('.scroll-hint').on('click', function (e) {
            var gotoClass = $('#dot-2').attr('data-navsection');
            $('html, body').animate({
                scrollTop: $("#" + gotoClass).offset().top
            }, 500);
        });
    };

    /**
  		 * animate an element via CSS
  		 * @param options
  		 * - el: the selector of the element to animate
  		 * - down: the animation function to apply on the way down (triggered by waypoint)
  		 * - up: the animation function to apply on the way down (triggered by waypoint)
  		 * - waypointEl: the selector to trigger waypoint
  		 * - waypointOffset: the percentage at when to trigger the waypoint
  		 * - doneClass: class to apply when down animation is complete
  		 * @param cb: callback to fire when down animation is complete
  		 */
    window.animateElementCSS = function(options, cb) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        if (!options.hasOwnProperty('waypointOffset')) options.waypointOffset = '100%';

        $(options.el).removeClass(options.doneClass);

        $(options.waypointEl).waypoint(function (direction) {
            if (direction === 'down') {
                $(options.el).removeClass(options.up);
                $(options.el).addClass(options.down);
                $(options.el).fadeTo( 0, 1.0 );
            } else {
                $(options.el).removeClass(options.down);
                $(options.el).addClass(options.up);
                $(options.el).removeClass(options.doneClass);
                // end invisible
                $(options.el).fadeTo( 0, 0.0 );
            }
        }, {offset: options.waypointOffset});

        // fire callback when complete
        if (cb) $(options.el).on(animationEnd, function () {
            cb()
        });
    }

    $(document).on('ready', function() {
  		//initHeroAnimation();
  		//initVerticalNav();
    });
})(jQuery, window);
