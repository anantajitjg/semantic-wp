jQuery(function ($) {
    // Activate dropdown for navigation menu
    $('.ui.dropdown.item').dropdown({
        on: 'hover',
        transition: 'drop',
        onShow: function() {
            // to fix issues with semantic dropdown
            $(this).find(".item").mouseleave(function() {
                $(".menu.hidden .visible").removeClass("visible").addClass("hidden");
            });
        }
    });
    // Activate Sidebar for Primary Menu
    $("#semanticwp-sidebar-menu").sidebar('attach events', '.menubtn');
    // Add disabled class for current page in posts pagination
    $(".pagination .nav-links").find(".current .ui.button").addClass("disabled");
});