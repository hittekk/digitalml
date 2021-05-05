(function($) {
    'use strict';

    $(document).on('ready', function() {
        function initCarousels() {
            /*
             $("#section-6 .media-grid").slick({
             mobileFirst: true,
             dots: true,
             slidesToShow: 1,
             slidesToScroll: 1,
             infinite: false,
             responsive: [
             {
             breakpoint: 768,
             settings: "unslick"
             },
             {
             breakpoint: 280,
             dots: true,
             slidesToShow: 1,
             slidesToScroll: 1,
             infinite: false
             }
             ]
             });*/

            $("#section-7 .slider").slick({
                mobileFirst: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 300,
                        settings: {
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false,
                            slide: '.slide-xs'/*,
                            autoplay: true*/
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            initialSlide: 0,
                            centerMode: true,
                            centerPadding: $('.slick').find('.solution-card').outerWidth() / 2,
//						centerPadding: 0,
                            infinite: true,
                            slide: '.slide-sm'/*,
                            autoplay: true*/
                        }
                    }
                ]
            });


            // populate inudstries slide detail text
            var slideText = [
                {
                    title: "Retail Solutions",
                    text: "Deliver API products like Buy Online & Pick-up In-Store, Scan & Send and Location Based Loyalty Offers quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Inventory, Order, Customer, Location - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch.",
                    brief: "Deliver API products like Buy Online",
                    expanded: " & Pick-up In-Store, Scan & Send and Location Based Loyalty Offers quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Inventory, Order, Customer, Location - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch."
                },
                {
                    title: "Banking Solutions",
                    text: "Deliver API products like Mobile Deposit, Pay with Points, Report Fraud, Split a Bill quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Account, Card, Payment, Product - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch.",
                    brief: "Deliver API products like Mobile Deposit",
                    expanded: ", Pay with Points, Report Fraud, Split a Bill quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Account, Card, Payment, Product - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch."
                },
                {
                    title: "Insurance Solutions",
                    text: "Deliver API products like Add a Car & Add a Driver, Get a Quote, Submit a Claim quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Policy, Claim, Party, Billing - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch.",
                    brief: "Deliver API products like Add a Car",
                    expanded: " & Add a Driver, Get a Quote, Submit a Claim quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Policy, Claim, Party, Billing - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch."
                },
                {
                    title: "Healthcare Solutions",
                    text: "Deliver API products like Know Your Deductible, Find a Provider, Prescription Self-Service, Lifestyle Tracking quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Member, Provider, Claim, Product - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch.",
                    brief: "Deliver API products like Know Your Deductible",
                    expanded: ", Find a Provider, Prescription Self-Service, Lifestyle Tracking quickly by giving your team the core building blocks to innovate with.  Ready to use business capability APIs supporting functions like Member, Provider, Claim, Product - aligned to the business, properly built, and ready to be supplied to your development teams to quickly plug into and launch."
                }
            ];
            // end industries slide detail text

            // Update Industry Slide Text
            $('#section-7 .slider').on('afterChange', function (event, slick, currentSlide) {
                var $currentSlideElement = $(slick.$slides[currentSlide]);
                var dataIndex = $currentSlideElement.attr('data-slideindex');
                var $leadInElement = $(this).parent().children('.lead-in');

                if (!$leadInElement) return;

                var $leadInTitle = $leadInElement.find('.title');
                var $leadInText = $leadInElement.find('.text');

                $leadInTitle.html(slideText[dataIndex].title);
                $leadInText.html(slideText[dataIndex].text);
            });

            // Slide to clicked slide
            $('#section-7 .slider .slick-slide').on('click', function (event) {
                var maxSlideIndex = 3;
                var $currentSlideElement = $(this);
                var dataIndex = $currentSlideElement.attr('data-slideindex');
                //console.log( 'clicked on slide ' + dataIndex);
                var nextSlideIndex = parseInt(dataIndex) + 1;
                if (nextSlideIndex > maxSlideIndex) nextSlideIndex = 0;
                //console.log( 'going to slide ' + nextSlideIndex);

                $('#section-7 .slider').slick('slickGoTo', nextSlideIndex, false);
            });

            // only autoplay when in focus
            $('#section-7').waypoint(function (direction) {
                if (direction === 'down') {
                    $("#section-7 .slider").slick('slickPlay');
                } else {
                    $("#section-7 .slider").slick('slickPause');
                }
            }, {offset: '60%'});


            /** this will require some action buttons and width adjustments */
            $("#section-8 .logofarm").slick({
                mobileFirst: true,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 300,
                        settings: {
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: false
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            dots: true,
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            infinite: true/*,
                            autoplay: true*/
                        }
                    }

                ]
            });

            // only autoplay when in focus
            $('#section-8').waypoint(function (direction) {
                if (direction === 'down') {
                    $("#section-8 .logofarm").slick('slickPlay');
                } else {
                    $("#section-8 .logofarm").slick('slickPause');
                }
            }, {offset: '60%'});

            $('#forrester-slick').slick({
                mobileFirst: true,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 300,
                        settings: {
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: false
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            dots: true,
                            slidesToShow:1,
                            slidesToScroll: 1,
                            infinite: true/*,
                            autoplay: true*/
                        }
                    }

                ]
            });
        }
        initCarousels();

        $('.scroll-hint').on('click', function (e) {
            var gotoClass = 'section-2';
            $('html, body').animate({
                scrollTop: $("#" + gotoClass).offset().top
            }, 500);
        });

    });
})(jQuery);
