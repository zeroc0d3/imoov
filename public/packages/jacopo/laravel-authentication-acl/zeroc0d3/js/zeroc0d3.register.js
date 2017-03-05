var ZeroC0D3Register = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            ZeroC0D3Register.signBaseURL();
            ZeroC0D3Register.signIE();
            ZeroC0D3Register.signSound();
            ZeroC0D3Register.signValidation();
            ZeroC0D3Register.signSettingHeight();
            ZeroC0D3Register.signInputSound();
        },

        // =========================================================================
        // SET UP BASE URL
        // =========================================================================
        signBaseURL: function () {
            var getUrl = window.location,
                baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            return baseUrl;
        },

        // =========================================================================
        // IE SUPPORT
        // =========================================================================
        signIE: function () {
            // IE mode
            var isIE8 = false;
            var isIE9 = false;
            var isIE10 = false;

            // initializes main settings for IE
            isIE8 = !! navigator.userAgent.match(/MSIE 8.0/);
            isIE9 = !! navigator.userAgent.match(/MSIE 9.0/);
            isIE10 = !! navigator.userAgent.match(/MSIE 10.0/);

            if (isIE10) {
                $('html').addClass('ie10'); // detect IE10 version
            }

            if (isIE10 || isIE9 || isIE8) {
                $('html').addClass('ie'); // detect IE8, IE9, IE10 version
            }

            // Fix input placeholder issue for IE8 and IE9
            if (isIE8 || isIE9) { // ie8 & ie9
                // this is html5 placeholder fix for inputs, inputs with placeholder-no-fix class will be skipped(e.g: we need this for password fields)
                $('input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)').each(function () {
                    var input = $(this);

                    if (input.val() == '' && input.attr("placeholder") != '') {
                        input.addClass("placeholder").val(input.attr('placeholder'));
                    }

                    input.focus(function () {
                        if (input.val() == input.attr('placeholder')) {
                            input.val('');
                        }
                    });

                    input.blur(function () {
                        if (input.val() == '' || input.val() == input.attr('placeholder')) {
                            input.val(input.attr('placeholder'));
                        }
                    });
                });
            }
        },

        // =========================================================================
        // SOUNDS
        // =========================================================================
        signSound: function () {
            if($('.page-sound').length){
                ion.sound({
                    sounds: [
                        {name: "light_bulb_breaking", volume: 0.6},
                        {name: "tap", volume: 0.6},
                        {name: "button_tiny", volume: 0.6},
                        {name: "cd_tray", volume: 0.6}
                    ],
                    path: ZeroC0D3Register.signBaseURL()+'/assets/global/plugins/bower_components/ionsound/sounds/',
                    preload: true
                });
            }
        },

        // =========================================================================
        // FORM VALIDATION
        // =========================================================================
        signValidation: function () {
            // Just demo form validation on desktop view width screen large then 1024px, not available on tablet and mobile view.
            if($('.sign-in').length && $(window).width() >= 1024){

                $('.sign-in').validate(
                    {
                        invalidHandler:
                            function() {
                                // Add effect animation css
                                $('#sign-wrapper').addClass('animated shake');
                                setTimeout(function(){$('#sign-wrapper').removeClass('animated shake')}, 1500);

                                // Add effect sound
                                if($('.page-sound').length){
                                    ion.sound.play("light_bulb_breaking");
                                }
                            },
                        rules:{
                            first_name: {
                                required: true
                            },
                            last_name: {
                                required: true
                            },
                            email: {
                                required: true
                            },
                            password: {
                                required: true
                            },
                            password_confirmation: {
                                required: true
                            },
                            captcha_text: {
                                required: true
                            }
                        },
                        messages: {
                            first_name: {
                                required: "Please provide first name"
                            },
                            last_name: {
                                required: "Please provide last name"
                            },
                            email: {
                                required: "Just fill anything an email"
                            },
                            password: {
                                required: "Please provide a password"
                            },
                            password_confirmation: {
                                required: "Please retype your password"
                            }, 
                            captcha_text: {
                                required: "Please fill in the text image"
                            }
                        },
                        highlight:function(element) {
                            $(element).parents('.form-group').addClass('has-error has-feedback');
                        },
                        unhighlight: function(element) {
                            $(element).parents('.form-group').removeClass('has-error');
                        },
                        submitHandler: function(form){
                            var btn = $('#register-btn');
                            btn.html('Please wait ...');
                            // Add sounds
                            if($('.page-sound').length){
                                ion.sound.play("cd_tray");
                            }
                            btn.attr('disabled', 'disabled');
                            setTimeout(function() {
                                btn.text('Verification...');
                            }, 2000);
                            btn.removeAttr('disabled');
                            setTimeout(function () {
                                form.submit();
                            }, 2500);
                        }
                    }
                );
            }
        },

        // =========================================================================
        // SETTING HEIGHT
        // =========================================================================
        signSettingHeight: function () {
            $('#sign-wrapper').css('min-height',$(window).outerHeight());
        },

        // =========================================================================
        // INPUT SOUNDS
        // =========================================================================
        signInputSound: function () {
            // Add sounds
            if($('.page-sound').length){
                $('input').on('input', function(){
                    ion.sound.play("tap");
                });
                $('input[type=checkbox]').on('click', function(){
                    ion.sound.play("button_tiny");
                });
            }
        }

    };

}();

// Call main app init
ZeroC0D3Register.init();