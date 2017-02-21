var BlankonSliderRevolutionSliderNews = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionSliderNews.handlePreloader();
            BlankonSliderRevolutionSliderNews.handleScrollNav();
            BlankonSliderRevolutionSliderNews.handleAnimateElement();
            BlankonSliderRevolutionSliderNews.handleTestimonials();
            BlankonSliderRevolutionSliderNews.handleBackToTop();
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
                BlankonSliderRevolutionSliderNews.handleBanner();
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
            var revapi34;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_34_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_34_1");
                }else{
                    revapi34 = tpj("#rev_slider_34_1").show().revolution({
                        sliderType:"standard",
                        jsFileLocation: BlankonSliderRevolutionSliderNews.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"fullwidth",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            onHoverStop:"on",
                            touch:{
                                touchenabled:"on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                            ,
                            arrows: {
                                style:"gyges",
                                enable:true,
                                hide_onmobile:false,
                                hide_over:778,
                                hide_onleave:false,
                                tmp:'',
                                left: {
                                    h_align:"right",
                                    v_align:"bottom",
                                    h_offset:40,
                                    v_offset:0
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"bottom",
                                    h_offset:0,
                                    v_offset:0
                                }
                            }
                            ,
                            tabs: {
                                style:"erinyen",
                                enable:true,
                                width:250,
                                height:100,
                                min_width:250,
                                wrapper_padding:0,
                                wrapper_color:"transparent",
                                wrapper_opacity:"0",
                                tmp:'<div class="tp-tab-title">{{title}}</div><div class="tp-tab-desc">{{description}}</div>',
                                visibleAmount: 3,
                                hide_onmobile: true,
                                hide_under:778,
                                hide_onleave:false,
                                hide_delay:200,
                                direction:"vertical",
                                span:false,
                                position:"inner",
                                space:10,
                                h_align:"right",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            }
                        },
                        viewPort: {
                            enable:true,
                            outof:"pause",
                            visible_area:"80%"
                        },
                        responsiveLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[500,450,400,350],
                        lazyType:"none",
                        parallax: {
                            type:"scroll",
                            origo:"enterpoint",
                            speed:400,
                            levels:[5,10,15,20,25,30,35,40,45,50],
                        },
                        shadow:0,
                        spinner:"off",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
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
BlankonSliderRevolutionSliderNews.init();