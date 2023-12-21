<?php 
namespace Custom\Theme;

use Custom\Theme\PostTypes\Project;

class PostTypes {
    public const POST_TYPE = array(
        Project::class,
    );

    public function register_hooks():void {
        foreach (self::POST_TYPE as $post_type) {
            ( new $post_type() )->register_hooks();
        }
    }
}
