/*****
 * svg-follow.js
 *  - manage an array of travelling icons on a snap canvas following specified paths
 *
 * dependencies:
 *  jquery
 *  snap.svg
 *  user-defined path-data
 */
var P1 = 0; // 12:00
var P2 = 1; // 2:00
var P3 = 2; // 4:00
var P4 = 3; // 6:00
var P5 = 4; // 8:00
var P6 = 5; // 10:00
var C0 = 6; // center
var I1 = 7; // 11:00
var I2 = 8; // 1:00
var I3 = 9; // 12:00
var I4 = 10; // 3:00 inner
var I5 = 11; // 3:00 outer
var I6 = 12; // 8:00
var I7 = 13; // 4:00
var I8 = 14; // 5:00
var I9 = 15; // 7:00

var DEFAULT_FLIGHT_PATH = 0;
var ALTERNATE_FLIGHT_PATH = 1;

+function($) {
    "use strict";

    var moduleName = "svgPathFollow";
    var moduleDefaults = {
        originOffsetX:              100,                /* X offset to 0,0 of path relative to the svg element (recommended: reset on window resize) */
        originOffsetY:              100,                /* Y offset to 0,0 of path relative to the svg element (recommended: reset on window resize) */
        scale:                      1.0,                /* scale coordinates by this amount (recommended: reset on window resize) */
        speedAttenuation:           1.25,               /* 1.0 = unscaled speed, affects duration so 1/x proportion ie 1.25=80% slower */
        smallSynapseSelector:       '#synapse-small',   /* selector for traveling object svg element */
        largeSynapseSelector:       '#synapse-large',   /* selector for traveling object svg element */
        cometTxOriginFactorX:       1.046,              /* hack the bounding box */
        debug:                      true
    };

    var module = function(element, options) {
        var settings = $.extend({}, moduleDefaults, options);
        var _this = Object.create({});
        var snapCanvasElement = element;      /* the svg stage element */

        var isWindowActive = true;
        var isPaused = false;

        var followerCount = 1;

        // an array of objects to follow a path
        var followersArray = [];

        // an array of flight paths that an object can follow
        var flightPathsArray = [];

        // an array of points from which a path can be generated
        var hexPointsArray = [];

        // svg-snap master parent element container object
        var snapContainerObject;


        // private methods

        /**
         * setup the snapcanvas and sprites for animation
         */
        var init = function() {
            debug("init");

            snapContainerObject = Snap(snapCanvasElement);

            initHexShape();

            // CREATE SOME PATHS todo: move externally to calling page
            //initHexPaths();

            // path1 = start above 12:00, loop around primary vertices
            var hexPath1 = new Path();
            var hexStart1 = new PathPoint(258,-100);
            hexPath1.setStartPoint(hexStart1);
            hexPath1.addPoint(hexPointsArray[P1]);
            hexPath1.addPoint(hexPointsArray[P6]);
            hexPath1.addPoint(hexPointsArray[C0]);
            hexPath1.addPoint(hexPointsArray[P4]);
            hexPath1.addPoint(hexPointsArray[P3]);
            var duration1 = settings.speedAttenuation * 1000;

            // path2 = reverse path 1
            var duration2 = settings.speedAttenuation * 500;

            // path3 = start at 10:00 vertice and follow thru interior to end at 2:00 vertice
            var hexPath3 = new Path();
            hexPath3.addPoint(hexPointsArray[P6]);
            hexPath3.addPoint(hexPointsArray[I1]);
            hexPath3.addPoint(hexPointsArray[I4]);
            hexPath3.addPoint(hexPointsArray[I5]);
            hexPath3.addPoint(hexPointsArray[P2]);
            //var hexEnd3 = new PathPoint(485,-100);
            //hexPath3.setEndPoint(hexEnd3);
            var duration3 = settings.speedAttenuation * 1500;

            // path 4 = yo you between 2 interior vertices like knight rider
            var hexPath4 = new Path();
            var hexStart4 = hexPointsArray[I6];
            hexPath4.setStartPoint(hexStart4);
            var hexEnd4 = hexPointsArray[I4];
            hexPath4.setEndPoint(hexEnd4);
            var duration4 = settings.speedAttenuation * 600;


            // CREATE SOME OBJECTS TO FOLLOW THE PATHS todo: move externally to calling page
            // start with original svg object(s), clone additional copies to animate

            // synapse0 = large original svg following path1
            var svgSynapse0 = settings.largeSynapseSelector;
            snapContainerObject.select(svgSynapse0).attr({opacity: 0});   // start invisible
            var follower0 = addFollower(svgSynapse0, duration1, hexPath1.renderPathString(), "easeout");
            followersArray.push(follower0);

            // synapse1 clone of large svg following path2
            var svgSynapse1 = new cloneSvgObject(settings.largeSynapseSelector);
            snapContainerObject.select(svgSynapse1.getSelector()).attr({opacity: 0});   // start invisible
            var follower1 = addFollower(svgSynapse1.getSelector(), duration2, hexPath1.renderPathReverseString(), "easeout");
            followersArray.push(follower1);

            // synapse2 = small original svg following path3
            var svgSynapse2 = settings.smallSynapseSelector;
            snapContainerObject.select(svgSynapse2).attr({opacity: 0});   // start invisible
            var follower2 = addFollower(svgSynapse2, duration3, hexPath3.renderPathString(), "easeinout");
            followersArray.push(follower2);

            // synapse3 clone of small svg following path4
            var svgSynapse3 = new cloneSvgObject(settings.smallSynapseSelector);
            snapContainerObject.select(svgSynapse3.getSelector()).attr({opacity: 0});   // start invisible
            var follower3 = addFollower(svgSynapse3.getSelector(), duration4, hexPath4.renderPathString(), "easeinout");
            // also attach path4-reverse
            follower3.setAlternateFlightPath(hexPath4.renderPathReverseString());
            followersArray.push(follower3);


            // TRIGGER some daisy-chain animation todo: move externally to calling page

            // activate follower1, trigger follower0 on complete
            var triggerCallback1 = function() {
                snapContainerObject.select(followersArray[0].getSelector()).animate({opacity:0},100);   // fade out s0
                snapContainerObject.select(followersArray[1].getSelector()).animate({opacity:1},1000);   // fade in s1
                follower1.follow(function () {
                    if(isWindowActive) {
                        triggerCallback2();
                    }
                });
            };

            // activate follower0, trigger follower1 on complete
            var triggerCallback2 = function() {
                snapContainerObject.select(followersArray[1].getSelector()).animate({opacity:0},100);   // fade out s1
                snapContainerObject.select(followersArray[0].getSelector()).animate({opacity:1},1000);   // fade in s0
                follower0.follow( function() {
                    if(isWindowActive) {
                        triggerCallback1();
                    }
                });
            };

            // activate follower2, trigger follower3 1s after complete
            var triggerCallback3 = function() {
                snapContainerObject.select(followersArray[2].getSelector()).animate({opacity:0},100);   // fade out s2
                setTimeout( function() {
                    snapContainerObject.select(followersArray[2].getSelector()).animate({opacity:1},1000);   // fade in s2
                    follower2.follow(function () {
                        if(isWindowActive) {
                            triggerCallback3();
                        }
                    });
                }, 1000);
            };

            // activate follower3, trigger follower3's (self) alternate path on complete (yo-yo style)
            var triggerCallback4 = function() {
                snapContainerObject.select(followersArray[3].getSelector()).animate({opacity:1},100);   // fade in s3
                follower3.setActiveFlightPath(1 - follower3.getActiveFlightPath());   // toggle path
                follower3.follow(function () {
                    if(isWindowActive) {
                        triggerCallback4();
                    }
                });
            };

            // START animation  todo: move externally to calling page
            triggerCallback2();
            triggerCallback3();
            snapContainerObject.select(followersArray[3].getSelector()).animate({opacity:1},100);   // fade in s3 (only 1st time)
            triggerCallback4();


            // PAUSE AND RESTART ANIMATION WHEN WINDOW LOSES/REGAINS FOCUS
            window.addEventListener('focus', function() {
                isWindowActive = true;
                triggerCallback2();
                triggerCallback3();
                triggerCallback4();
            },false);

            window.addEventListener('blur', function() {
                isWindowActive = false;
            },false);

            return _this;
        };

        /**
         * addFollower
         *  - create an instance of a FollowObject with the supplied svg-sprite-selector to follow the supplied path at supplied duration
         *
         * @param svgElement (svg-element selector)
         * @param duration   (total time to complete path)
         * @param path       (instance of PathObject)
         * @returns {FollowObject}
         */
        var addFollower = function(svgElement, duration, path) {
            debug("[initFollower] - offset(" + settings.originOffsetX + "," + settings.originOffsetY + ") with path:" + path);

            var follower = new FollowObject(svgElement, duration, path);
            follower.init();

            return follower;
        };

        /**
         * initHexShape
         *  - abstract the points of the Hex shape that can more easily be reused to manage paths
         */
        var initHexShape = function() {
            var xleft = 26,
                xmid = 262,     // was 257,260
                xright = 481;
            var ytop = 10,
                ymid = 274,     // was 274
                ybot = 550;     // was 548

            // PRIMARY VERTICES                 // (approx. clock position)
            var p1 = new PathPoint(xmid,8);      // 12:00
            hexPointsArray.push(p1);
            var p2 = new PathPoint(488,147);    //  2:00
            hexPointsArray.push(p2);
            var p3 = new PathPoint(485,415);    //  4:00
            hexPointsArray.push(p3);
            var p4 = new PathPoint(xmid,ybot);    //  6:00
            hexPointsArray.push(p4);
            var p5 = new PathPoint(xleft,415);     //  8:00
            hexPointsArray.push(p5);
            var p6 = new PathPoint(xleft,143);     // 10:00
            hexPointsArray.push(p6);

            var c1 = new PathPoint(xmid,ymid);    // center
            hexPointsArray.push(c1);

            // INTERIOR VERTICES
            var i1 = new PathPoint(190,121);      // 11:00
            hexPointsArray.push(i1);
            var i2 = new PathPoint(330,126);      //  1:00
            hexPointsArray.push(i2);
            var i3 = new PathPoint(251,203);      // 12:00
            hexPointsArray.push(i3);
            var i4 = new PathPoint(325,281);      //  3:00 inner
            hexPointsArray.push(i4);
            var i5 = new PathPoint(420,276);      //  3:00 outer
            hexPointsArray.push(i5);
            var i6 = new PathPoint(146,349);      //  8:00
            hexPointsArray.push(i6);
            var i7 = new PathPoint(439,359);      //  4:00
            hexPointsArray.push(i7);
            var i8 = new PathPoint(292,429);      //  5:00
            hexPointsArray.push(i8);
            var i9 = new PathPoint(219,450);      //  7:00
            hexPointsArray.push(i9);
        };

        /**
         * todo: move all logic here to clean up init()
         */
        var initHexPaths = function() {

        };

        /**
         * CLONE SVG OBJECT (follower object sprite)
         *  - creates and appends an actual clone of the supplied src element
         *
         * @param srcElement (svg-element selector)
         */
        var cloneSvgObject = function(srcElement) {
            var _this = this;
            var selector = "";

            var $g0 = snapContainerObject.select(srcElement);
            var $g = $g0.clone();

            var selector = srcElement + followerCount++;
            $g.attr("id", selector.substring(1));

            this.getSelector = function() {
                return selector;
            };
        };

        /**
         * FOLLOW OBJECT
         *  - definition of an animated object that follows a defined path
         *      includes management of its svg element and up to 2 paths to follow (1 at a time)
         *
         * @param svgElement
         * @param speed
         * @param flightPath
         * @constructor
         */
        var FollowObject = function(el, speed, path, easing) {
            var _this = this;

            var svgElement = el;
            var pathDuration = speed,
                easingFunction;
            var flightPathString = path,
                flightSnapPath,
                flightPathLength;
            var snapObject,
                boundingBox,
                // experimental
                transformOriginFactorX = settings.cometTxOriginFactorX, // these 4 to hack the transform origin
                transformOriginFactorY = 2,
                bbOriginX,
                bbOriginY,
                bbOriginXFactor,    // these 2 to save on computation every frame
                bbOriginYFactor,
                bbMidpointX,    // these 2 to save on computation every frame
                bbMidpointY;
            var alternateFlightPath,
                alternateFlightPathLength,
                activeFlightPath = DEFAULT_FLIGHT_PATH;

            this.init = function() {
                snapObject = snapContainerObject.select(svgElement);

                // get the boundingbox info once to save computation during animation loop.  extra factors attempt to compensate for
                //  - the synapse's uncentered transform origin, as the 'tail' is currently part of the svg graphic element not generated
                boundingBox = snapObject.getBBox();
                bbOriginXFactor = boundingBox.width/transformOriginFactorX;
                bbOriginYFactor = boundingBox.height/transformOriginFactorY;
                bbOriginX = 79; //boundingBox.x2; // 68; //
                bbOriginY = 3.49; // boundingBox.cy; // 3; //
                bbMidpointX = 100; // settings.originOffsetX; // 100; //
                bbMidpointY = 3; // boundingBox.cy; // 3; //
                debug('[FollowObject::init - boundingbox[' + boundingBox.width + ',' + boundingBox.height + '], x(' + boundingBox.x + ',' + boundingBox.x2 + '), y(' + boundingBox.y + ',' + boundingBox.y2 + ')');
                debug('[FollowObject::init - c(' + bbOriginX + ',' + bbOriginY + ')');

                flightSnapPath = snapContainerObject.path(flightPathString).attr({ 'fill': 'none', 'stroke': 'none'});
                flightPathLength = Snap.path.getTotalLength(flightSnapPath);
            };

            this.follow = function( cb ) {
                debug("[follow]");

                var len, path;
                switch( activeFlightPath ) {
                    case DEFAULT_FLIGHT_PATH:
                        len = flightPathLength;
                        path = flightSnapPath;
                        break;
                    case ALTERNATE_FLIGHT_PATH:
                        len = alternateFlightPathLength;
                        path = alternateFlightPath;
                        break;
                }

                // the actual drawing engine, once per step, updates the transform matrix of the animated object, and fires the supplied callback on complete
                Snap.animate(0, len, function( step ) {
                    var moveToPoint = Snap.path.getPointAtLength( path, step );
                    var x = settings.scale * (moveToPoint.x - bbMidpointX) + settings.originOffsetX;
                    var y = settings.scale * (moveToPoint.y - bbMidpointY) + settings.originOffsetY;
                    var rotateString = 'rotate('+ (moveToPoint.alpha - 180)+', '+settings.scale * bbOriginX+', '+settings.scale * bbOriginY+') ';
                    if( step == len ) {
                        rotateString = "";
                        snapObject.attr({"opacity":0});
                    }
                    snapObject.transform('translate(' + x + ',' + y + ') ' + rotateString + 'scale('+settings.scale+')');
                },pathDuration, mina[easingFunction] ,function(){
                    cb();
                });
            };

            this.getSelector = function() {
                return svgElement;
            };

            this.setAlternateFlightPath = function(path) {
                snapObject = snapContainerObject.select(svgElement);
                alternateFlightPath = snapContainerObject.path(path).attr({ 'fill': 'none', 'stroke': 'none'});
                alternateFlightPathLength = Snap.path.getTotalLength(alternateFlightPath);
            };

            this.setActiveFlightPath = function(flag) {
                activeFlightPath = flag;
            };

            this.getActiveFlightPath = function() {
                return activeFlightPath;
            };
        };
        /*********** END FOLLOW OBJECT **********/

        /**
         * PATH OBJECT
         *  - abstract container for an SVG path defined by start-point (optional), a sequential list of points, and end-point (optional)
         *
         * @constructor
         */
        var Path = function() {
            var _this = this;

            var points = [],
                startPoint,
                endPoint,
                pathAsSVGString = "",
                reversePathAsSVGString = "";

            /**
             * concatenate all points into a snap-ready svg path, ex. 'M0,0 L10,143 L257,274 L257,548 L485,410 L770,610'
             * NOTE: must add some points before calling
             *
             * @returns {string}
             */
            this.renderPathString = function() {
                var numPoints = points.length;

                if( numPoints < 1 && (startPoint && !endPoint) ) endPoint = startPoint;

                pathAsSVGString = "M";  // start with an absolute Move to action

                if( startPoint ) {
                    pathAsSVGString += startPoint.getX() + "," + startPoint.getY();
                    if( numPoints > 0 ) pathAsSVGString += " L";   // setup next point
                }

                // loop thru points, in order
                for( var p=0; p<numPoints; p++ ) {
                    pathAsSVGString += points[p].getX() + "," + points[p].getY();
                    if( p<(numPoints-1)) pathAsSVGString += " L";   // setup next point
                }

                if( endPoint ) {
                    pathAsSVGString += " L";   // setup next point
                    pathAsSVGString += endPoint.getX() + "," + endPoint.getY();
                }

                return pathAsSVGString;
            };

            /**
             * concatenate all points in reverse into a snap-ready svg path, ex. 'M0,0 L10,143 L257,274 L257,548 L485,410 L770,610'
             * NOTE: must add some points before calling
             *
             * @returns {string}
             */
            this.renderPathReverseString = function() {
                var numPoints = points.length;

                if( numPoints < 1 && (startPoint && !endPoint) ) endPoint = startPoint;
                reversePathAsSVGString = "M";  // start with an absolute Move to action

                if( endPoint ) {
                    reversePathAsSVGString += endPoint.getX() + "," + endPoint.getY();
                    if( numPoints > 0 ) reversePathAsSVGString += " L";   // setup next point
                }

                // loop thru points, in reverse order
                for( var p=numPoints-1; p>=0; p-- ) {
                    reversePathAsSVGString += points[p].getX() + "," + points[p].getY();
                    if( p>0 ) reversePathAsSVGString += " L";   // setup next point
                }

                if( startPoint ) {
                    reversePathAsSVGString += " L";   // setup next point
                    reversePathAsSVGString += startPoint.getX() + "," + startPoint.getY();
                }

                return reversePathAsSVGString;
            };

            this.addPoint = function(p) {
                debug('[Path::addPoint] - (' + p.getX() + ',' + p.getY() + ')', p );
                points.push(p);
            };

            this.setStartPoint = function(p) {
                startPoint = p;
            };

            this.setEndPoint = function(p) {
                endPoint = p;
            };

            return _this;
        };


        /**
         * PATHPOINT OBJECT
         *  - abstract of an x,y coordinate for easier path creation with reusable waypoints
         *
         * @param x
         * @param y
         * @constructor
         */
        var PathPoint = function(x, y) {
            var x = x,
                y = y;

            this.getX = function() {
                return x;
            }

            this.getY = function() {
                return y;
            }
        };

        /**
         * Get/set a plugin option.
         * Get usage: $('#el').svgFollow('option', 'key');
         * Set usage: $('#el').svgFollow('option', 'key', value);
         */
        function setting(key, val) {

            debug("[setting] updating module option " + key + " to " + val);
            if(arguments.length > 1) {
                settings[key] = val;
            } else {
                return settings[key];
            }
        }

        /**
         * console log wrapper
         *
         * @param msg
         * @param obj
         */
        var debug = function(msg, obj) {
            if( !settings.debug ) return;
            var prefix = "["+moduleName+".js] - ";
            if( window.console && typeof console.log != "undefined" ) {
                if( obj ) {
                    console.log(prefix+msg);
                    console.log('> ', obj);
                } else {
                    console.log(prefix+msg);
                }
            }
        };

        // do it
        init();

        // add privileged methods
        _this.setting = setting;

        // return _this for chaining
        return _this;
    };

    // attach module to jquery
    $.fn[moduleName] = function(options) {
        if (typeof arguments[0] === 'string') {
            var methodName = arguments[0];
            var args = Array.prototype.slice.call(arguments, 1);
            var returnVal;

            this.each(function() {
                // Check that the element has a plugin instance, and that the requested public method exists.
                if( $.data(this, moduleName) && typeof $.data(this, moduleName)[methodName] === 'function') {
                    // Call the method of the Plugin instance, and Pass it the supplied arguments.
                    returnVal = $.data(this, moduleName)[methodName].apply(this, args);
                } else {
                    throw new Error('Method ' +  methodName + ' does not exist on jQuery.' + moduleName);
                }
            });
            if (returnVal !== undefined){
              // If the method returned a value, return the value.
              return returnVal;
            } else {
              // Otherwise, returning 'this' preserves chainability.
              return this;
            }
        // If the first parameter is an object (options), or was omitted,
        // instantiate a new instance of the plugin.
        } else if (typeof options === "object" || !options) {

            return this.each(function () {
                var $elm = $(this);
                if (!$elm.data(moduleName)) {
                    var myModule = module(this, options);
                    $elm.data(moduleName, myModule);
                }
            });
        }
    };

    $.fn[moduleName].defaults = moduleDefaults;

}(window.jQuery);

