<?php
namespace LauraWienk\Admin;

final class Editor
{
    public function __construct()
    {
        add_action('init', [$this, 'loadStyles']);
        add_action('tiny_mce_before_init', [$this, 'styles']);
        add_filter('tiny_mce_before_init', [$this, 'buttons'], 1);
    }

    public function loadStyles()
    {
        add_editor_style('styles/dist/editor.css');
    }

    public function styles($settings)
    {
        $style_formats = [
            [
                'title'    => 'Button',
                'selector' => 'a',
                'classes'  => 'button',
            ],
            [
                'title'    => 'Intro',
                'selector' => 'p',
                'classes'  => 'intro',
            ]
        ];

        $settings['style_formats'] = json_encode($style_formats);

        return $settings;
    }

    public function buttons($settings)
    {
        $dfw_fs = (0 < strpos($settings['toolbar1'], 'dfw')) ? 'dfw' : 'fullscreen';

        $settings['toolbar1'] = 'formatselect, bold, italic, bullist, numlist, link, unlink, wp_more, ' . $dfw_fs;
        $settings['toolbar2'] = 'styleselect, undo, redo, charmap, blockquote, pastetext, removeformat';

        $settings['wordpress_adv_hidden'] = false;

        return $settings;
    }
}
