<?php
namespace LauraWienk;

use Timber\Timber;

$timber = new Timber();
Timber::$dirname = ['templates/base', 'templates'];

$theme = new Theme();
$theme->init();
