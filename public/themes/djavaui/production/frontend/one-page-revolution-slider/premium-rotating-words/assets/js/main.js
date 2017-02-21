var BlankonSliderRevolutionPremiumRotatingWords = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSliderRevolutionPremiumRotatingWords.handlePreloader();
            BlankonSliderRevolutionPremiumRotatingWords.handleScrollNav();
            BlankonSliderRevolutionPremiumRotatingWords.handleAnimateElement();
            BlankonSliderRevolutionPremiumRotatingWords.handleTestimonials();
            BlankonSliderRevolutionPremiumRotatingWords.handleBackToTop();
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
                BlankonSliderRevolutionPremiumRotatingWords.handleBanner();
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
            var revapi110;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_110_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_110_1");
                }else{
                    revapi110 = tpj("#rev_slider_110_1").show().revolution({
                        sliderType:"hero",
                        jsFileLocation: BlankonSliderRevolutionPremiumRotatingWords.handleBaseURL()+"/assets/commercial/plugins/slider-revolution/revolution/js/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:20000,
                        navigation: {
                        },
                        responsiveLevels:[1240,1024,778,778],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[600,500,400,300],
                        lazyType:"none",
                        parallax: {
                            type:"mouse",
                            origo:"slidercenter",
                            speed:2000,
                            levels:[2,3,4,5,6,7,12,16,10,50],
                        },
                        shadow:0,
                        spinner:"off",
                        autoHeight:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "60px",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            disableFocusListener:false,
                        }
                    });


                    // CHANGE THE API REFERENCE, AND THE ELEMENTS YOU WISH TO BLUR / UNBLUR
                    // SET START BLUR FACTOR, END BLUR FACTOR AND

                    var api = revapi110,
                        ElementsToBlur = api.find('.toblur.tp-caption'),
                        ElementsToUnBlur = api.find('.tounblur.tp-caption'),
                        UnBlurFactor = 2,
                        UnBlurStart = 3,
                        UnBlurEnd = 0,
                        BlurStart = 0,
                        BlurEnd = 5,
                        BlurFactor = 2,
                        blurCall = new Object();


                    // SOME CODE FOR BLUR AND UNBLUR ELEMENTS
                    // EXTEND THE REVOLUTION SLIDER FUNCTION
                    // CHANGE ONLY IF YOU KNOW WHAT YOU DO

                    blurCall.inmodule = "parallax";
                    blurCall.atposition = "start";
                    blurCall.callback = function() {
                        var proc = api.revgetparallaxproc(),
                            blur = UnBlurStart+(proc*UnBlurStart*UnBlurFactor)+UnBlurEnd,
                            nblur = Math.abs(proc*BlurEnd*BlurFactor)+BlurStart;

                        blur = blur<UnBlurEnd?UnBlurEnd:blur;
                        nblur = nblur>BlurEnd?BlurEnd:nblur;

                        ElementsToUnBlur = jQuery(ElementsToUnBlur.selector);
                        punchgs.TweenLite.set(ElementsToUnBlur,{'-webkit-filter':'blur('+(blur)+'px)', 'filter':'blur('+(blur)+'px)'});
                        punchgs.TweenLite.set(ElementsToBlur,{'-webkit-filter':'blur('+(nblur)+'px)', 'filter':'blur('+(nblur)+'px)'});
                    }

                    api.bind("revolution.slide.layeraction",function (e) {
                        blurCall.callback();
                    });

                    api.bind("revolution.slide.onloaded",function (e) {
                        revapi109.revaddcallback(blurCall);
                    });				}
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
BlankonSliderRevolutionPremiumRotatingWords.init();