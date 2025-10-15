<?php

function mycustomtheme_enqueue_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_scripts');
require_once get_template_directory() . '/core/Config/theme-config.php';
require_once get_template_directory() . '/core/constants/theme-constants.php';
require_once get_template_directory() . '/core/functions/helpers.php';

//Templates
add_filter('theme_page_templates', function ($post_templates, $theme, $post, $post_type) {
    $template_dir = get_template_directory() . '/templates/pages/';

    if (is_dir($template_dir)) {
        $files = glob($template_dir . '*.php');
        foreach ($files as $file) {
            $basename = basename($file);
            $template_name = ucwords(str_replace(['-', '_', '.php'], [' ', ' ', ''], $basename));
            $post_templates['templates/pages/' . $basename] = $template_name;
        }
    }

    return $post_templates;
}, 10, 4);


add_filter('template_include', function ($template) {
    $page_template = get_page_template_slug();

    if ($page_template && strpos($page_template, 'templates/pages/') === 0) {
        $custom_template = get_template_directory() . '/' . $page_template;
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }

    return $template;
});
