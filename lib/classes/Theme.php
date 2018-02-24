<?php
namespace LauraWienk;

final class Theme
{
    public function init()
    {
        $this->setSupport();
        $this->setupHooks();
    }

    private function setSupport()
    {
        add_theme_support('title-tag');
        add_theme_support('html5', ['gallery', 'caption']);
    }

    private function setupHooks()
    {
        new Admin\Editor();
        new Assets();
        new CleanUp();
        new ImageQuality();
        new Gallery();
        new Media();
        new Menus();
        new PostTypes();
        new Plugins\Timber\Context();
        new Plugins\Acf\JsonHandler();
        new Plugins\Acf\Options();
    }
}
