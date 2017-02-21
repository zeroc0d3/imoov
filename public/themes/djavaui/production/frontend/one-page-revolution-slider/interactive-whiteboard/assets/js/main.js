var BlankonSliderRevolutionInteractiveWhiteboard = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionInteractiveWhiteboard.handlePreloader();
            BlankonSliderRevolutionInteractiveWhiteboard.handleScrollNav();
            BlankonSliderRevolutionInteractiveWhiteboard.handleAnimateElement();
            BlankonSliderRevolutionInteractiveWhiteboard.handleTestimonials();
            BlankonSliderRevolutionInteractiveWhiteboard.handleBackToTop();
        },

        // =========================================================================
        // SET UP BASE URL
        // =========================================================================
        handleBaseURL: function () {
            var getUrl = window.location,
                baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            return baseUrl;
        },

        // =========================================================================
        // PRELOADER TRIGGER
        // =========================================================================
        handlePreloader: function () {
            setTimeout(function(){
                $('body').addClass('loaded');

                // Call banner with slider
                BlankonSliderRevolutionInteractiveWhiteboard.handleBanner();
            }, 3000);
        },

        // =========================================================================
        // NAVIGATION SCROLL
        // =========================================================================
        handleScrollNav: function () {
            //jQuery to collapse the navbar on scroll
            $(window).scroll(function() {
                if ($(".navbar").offset().top > 50) {
                    $(".navbar-fixed-top").addClass("top-nav-collapse");
                } else {
                    $(".navbar-fixed-top").removeClass("top-nav-collapse");
                }
            });

            //jQuery for page scrolling feature - requires jQuery Easing plugin
            $(function() {
                $('.page-scroll').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top-80
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });

        },

        // =========================================================================
        // ANIMATION ELEMENT
        // =========================================================================
        handleAnimateElement: function () {
            new WOW().init();
        },

        // =========================================================================
        // BANNER SLIDER
        // =========================================================================
        handleBanner: function () {
            var tpj=jQuery;

            var revapi416;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_416_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_416_1");
                }else{
                    revapi416 = tpj("#rev_slider_416_1").show().revolution({
                        sliderType:"standard",
                        jsFileLocation: BlankonSliderRevolutionInteractiveWhiteboard.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:9000,
                        whiteboard:{
                            movehand: {
                                src:BlankonSliderRevolutionInteractiveWhiteboard.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution-addons/whiteboard/assets/images/hand_point_right.png",
                                width:400,
                                height:1000,
                                handtype:"right",
                                transform:{
                                    transformX:186,
                                    transformY:66
                                },
                                jittering:{
                                    distance:"80",
                                    distance_horizontal:"100",
                                    repeat:"5",
                                    offset:"10",
                                    offset_horizontal:"0"
                                },
                                rotation:{
                                    angle:"10",
                                    repeat:"3"
                                }
                            },
                            writehand: {
                                src:BlankonSliderRevolutionInteractiveWhiteboard.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution-addons/whiteboard/assets/images/write_right_angle.png",
                                width:572,
                                height:691,
                                handtype:"right",
                                transform:{
                                    transformX:49,
                                    transformY:50
                                },
                                jittering:{
                                    distance:"80",
                                    distance_horizontal:"100",
                                    repeat:"5",
                                    offset:"10",
                                    offset_horizontal:"0"
                                },
                                rotation:{
                                    angle:"10",
                                    repeat:"5"
                                }
                            }
                        },
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            mouseScrollReverse:"default",
                            onHoverStop:"off",
                            bullets: {
                                enable:true,
                                hide_onmobile:true,
                                hide_under:767,
                                style:"hermes",
                                hide_onleave:false,
                                direction:"vertical",
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0,
                                space:5,
                                tmp:''
                            }
                        },
                        responsiveLevels:[1240,1024,778,480],
                        visibilityLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[868,768,960,720],
                        lazyType:"none",
                        shadow:0,
                        spinner:"off",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
                        fullScreenAutoWidth:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "60px",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
                }
                tpj("#rev_slider_416_1").rsWhiteBoard();
            });	/*ready*/
        },

        // =========================================================================
        // TESTIMONIALS
        // =========================================================================
        handleTestimonials: function () {
            (function($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-testimonials').cubeportfolio({
                    layoutMode: 'slider',
                    drag: true,
                    auto: false,
                    autoTimeout: 5000,
                    autoPauseOnHover: true,
                    showNavigation: false,
                    showPagination: true,
                    rewindNav: false,
                    scrollByPage: false,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                        width: 1,
                        cols: 1
                    }],
                    gapHorizontal: 0,
                    gapVertical: 0,
                    caption: '',
                    displayType: 'default',
                });
            })(jQuery, window, document);
        },

        // =========================================================================
        // BACK TOP
        // =========================================================================
        handleBackToTop: function () {
            $('#back-top').hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        }

    };

}();

// Call main app init
BlankonSliderRevolutionInteractiveWhiteboard.init();