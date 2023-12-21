<?php
namespace Custom\Theme;

use Custom\Theme\Taxonomies\Client;

class Taxonomies {
    public const TAXONOMY = array(
        Client::class,
    );

    public function register_hooks():void {
        foreach (self::TAXONOMY as $taxonomy) {
            ( new $taxonomy() )->register_hooks();
        }
    }
}