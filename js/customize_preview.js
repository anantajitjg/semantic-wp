(function($) {
    function customizer_change_text(setting_id, selector, title_attr) {
        var title_attr = title_attr || false;
        wp.customize(setting_id, function(setting) {
            setting.bind(function(val) {
                $(selector).text(val);
                if(title_attr) {
                    $(selector).prop('title', val);
                }
            });
        });
    }
    customizer_change_text('blogname', '.site-title a', true);
    customizer_change_text('blogdescription', '.site-description');
    // Featured Content
    customizer_change_text('featured_title', '.featured .featured-title');
    customizer_change_text('featured_subtitle', '.featured .featured-subtitle');
    customizer_change_text('featured_button_text', '.featured .featured-button');
    wp.customize('featured_button_url', function(setting) {
        setting.bind(function(val) {
            $('.featured .featured-button').prop('href', val);
        });
    });
})(jQuery);