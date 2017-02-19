var ZeroC0D3FormValidation = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            ZeroC0D3FormValidation.jqueryValidation();
        },

        // =========================================================================
        // JQUERY VALIDATION
        // =========================================================================
        jqueryValidation: function () {

            if($('#group-validation').length){

                $("#group-validation").validate({
                    rules: {
                        name: "required",
                    },
                    messages: {
                        name: "Enter your group name",
                    },
                    highlight:function(element) {
                        $(element).parents('.form-group').addClass('has-error has-feedback');
                    },
                    unhighlight: function(element) {
                        $(element).parents('.form-group').removeClass('has-error');
                    }
                });
            }

            if($('#permission-validation').length){

                $("#permission-validation").validate({
                    rules: {
                        description: "required",
                        permission: "required",
                    },
                    messages: {
                        description: "Enter your description permission",
                        permission: "Enter your permission title"
                    },
                    highlight:function(element) {
                        $(element).parents('.form-group').addClass('has-error has-feedback');
                    },
                    unhighlight: function(element) {
                        $(element).parents('.form-group').removeClass('has-error');
                    }
                });
            }

        }

    };

}();

// Call main app init
ZeroC0D3FormValidation.init();
