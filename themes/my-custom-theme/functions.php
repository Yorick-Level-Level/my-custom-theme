<?php
/**
 * My Custom Theme
 * https://github.com/Yorick-Level-Level/my-custom-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

use Timber\Timber;

Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates' ];

( new \Custom\Theme\ACFBlocks() )->register_hooks();
( new \Custom\Theme\PostTypes() )->register_hooks();