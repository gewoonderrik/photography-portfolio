<?php
namespace LauraWienk\Plugins\Acf;

final class Options
{
    public function __construct()
    {
        add_action('init', array($this, 'addAcfOptions'));
        add_filter('timber_context', array($this, 'acfOptionsContext'), 100);
    }

    public function addAcfOptions()
    {
        if (function_exists('acf_add_options_page'))
        {
            acf_add_options_page();
        }
    }

    public function acfOptionsContext($context)
    {
        $context['options'] = get_fields('option');

        return $context;
    }
}
