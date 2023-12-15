<?php
/**
 * My Custom Theme
 * https://github.com/Yorick-Level-Level/my-custom-theme
 */

use Timber\Timber;

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates' ];
