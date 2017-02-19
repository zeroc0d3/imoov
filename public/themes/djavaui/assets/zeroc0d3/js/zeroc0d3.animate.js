var ZeroC0D3Animate = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            ZeroC0D3Animate.animate();
        },

        // =========================================================================
        // ANIMATE TRIGGER
        // =========================================================================
        animate: function () {
            $('#animate-action button').click(function(e){
                e.preventDefault();
                $('#animation-sample').removeClass().addClass($(this).data('animate') + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                    $(this).removeClass();
                });
            });
        }

    };

}();

// Call main app init
ZeroC0D3Animate.init();
