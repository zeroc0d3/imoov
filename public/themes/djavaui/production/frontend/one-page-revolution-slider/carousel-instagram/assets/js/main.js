var BlankonSliderRevolutionCarouselInstagram = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionCarouselInstagram.handlePreloader();
            BlankonSliderRevolutionCarouselInstagram.handleScrollNav();
            BlankonSliderRevolutionCarouselInstagram.handleAnimateElement();
            BlankonSliderRevolutionCarouselInstagram.handleTestimonials();
            BlankonSliderRevolutionCarouselInstagram.handleBackToTop();
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
                BlankonSliderRevolutionCarouselInstagram.handleBanner();
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
            var revapi22;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_22_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_22_1");
                }else{
                    revapi22 = tpj("#rev_slider_22_1").show().revolution({
                        sliderType:"carousel",
                        jsFileLocation: BlankonSliderRevolutionCarouselInstagram.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"auto",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            onHoverStop:"off",
                            arrows: {
                                style:"hesperiden",
                                enable:true,
                                hide_onmobile:true,
                                hide_under:778,
                                hide_onleave:true,
                                hide_delay:200,
                                hide_delay_mobile:1200,
                                tmp:'',
                                left: {
                                    h_align:"left",
                                    v_align:"center",
                                    h_offset:20,
                                    v_offset:0
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"center",
                                    h_offset:20,
                                    v_offset:0
                                }
                            }
                            ,
                            thumbnails: {
                                style:"gyges",
                                enable:true,
                                width:80,
                                height:80,
                                min_width:80,
                                wrapper_padding:20,
                                wrapper_color:"#222222",
                                wrapper_opacity:"1",
                                tmp:'<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
                                visibleAmount:10,
                                hide_onmobile:false,
                                hide_onleave:false,
                                direction:"vertical",
                                span:true,
                                position:"outer-left",
                                space:10,
                                h_align:"left",
                                v_align:"top",
                                h_offset:0,
                                v_offset:0
                            }
                        },
                        carousel: {
                            border_radius: "20px",
                            padding_top: "50",
                            padding_bottom: "50",
                            maxRotation: 35,
                            vary_rotation: "on",
                            minScale: 25,
                            vary_scale: "on",
                            horizontal_align: "center",
                            vertical_align: "center",
                            fadeout: "on",
                            vary_fade: "on",
                            maxVisibleItems: 7,
                            infinity: "on",
                            space: 30,
                            stretch: "off"
                        },
                        responsiveLevels:[1240,1240,778,480],
                        gridwidth:[640,640,480,320],
                        gridheight:[640,640,480,320],
                        lazyType:"smart",
                        shadow:0,
                        spinner:"spinner3",
                        stopLoop:"on",
                        stopAfterLoops:0,
                        stopAtSlide:1,
                        shuffle:"off",
                        autoHeight:"off",
                        disableProgressBar:"on",
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
BlankonSliderRevolutionCarouselInstagram.init();