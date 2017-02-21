var BlankonSliderRevolutionGalleryDark = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionGalleryDark.handlePreloader();
            BlankonSliderRevolutionGalleryDark.handleScrollNav();
            BlankonSliderRevolutionGalleryDark.handleAnimateElement();
            BlankonSliderRevolutionGalleryDark.handleTestimonials();
            BlankonSliderRevolutionGalleryDark.handleBackToTop();
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
                BlankonSliderRevolutionGalleryDark.handleBanner();
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
            var revapi8;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_8_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_8_1");
                }else{
                    revapi8 = tpj("#rev_slider_8_1").show().revolution({
                        sliderType:"standard",
                        jsFileLocation: BlankonSliderRevolutionGalleryDark.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"auto",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            onHoverStop:"off",
                            touch:{
                                touchenabled:"on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                            ,
                            arrows: {
                                style:"hesperiden",
                                enable:true,
                                hide_onmobile:true,
                                hide_under:778,
                                hide_onleave:true,
                                hide_delay:200,
                                hide_delay_mobile:200,
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
                                width:60,
                                height:60,
                                min_width:60,
                                wrapper_padding:5,
                                wrapper_color:"#222222",
                                wrapper_opacity:"1",
                                tmp:'<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
                                visibleAmount:5,
                                hide_onmobile:false,
                                hide_over:777,
                                hide_onleave:false,
                                direction:"vertical",
                                span:true,
                                position:"outer-left",
                                space:5,
                                h_align:"left",
                                v_align:"top",
                                h_offset:0,
                                v_offset:0
                            }
                            ,
                            tabs: {
                                style:"gyges",
                                enable:true,
                                width:300,
                                height:80,
                                min_width:300,
                                wrapper_padding:30,
                                wrapper_color:"#222222",
                                wrapper_opacity:"1",
                                tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
                                visibleAmount: 10,
                                hide_onmobile: true,
                                hide_under:778,
                                hide_onleave:false,
                                hide_delay:200,
                                direction:"vertical",
                                span:true,
                                position:"outer-left",
                                space:0,
                                h_align:"left",
                                v_align:"top",
                                h_offset:0,
                                v_offset:0
                            }
                        },
                        gridwidth:800,
                        gridheight:640,
                        lazyType:"single",
                        shadow:0,
                        spinner:"off",
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
BlankonSliderRevolutionGalleryDark.init();