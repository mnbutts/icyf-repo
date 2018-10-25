jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.main-navigation ul').slideToggle(50);

        e.preventDefault();
    });

});
