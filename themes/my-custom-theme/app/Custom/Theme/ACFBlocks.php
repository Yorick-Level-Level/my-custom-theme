<?php 
namespace Custom\Theme;

use Custom\Theme\ACFBlocks\Quote;

class ACFBlocks {
    protected const ACF_BLOCKS = array(
        Quote::class
    );

    public function register_hooks(): void {
		$this->register_acf_blocks();
	}

    public function register_acf_blocks(): void {
		foreach ( self::ACF_BLOCKS as $field ) {
			( new $field() )->register_hooks();
		}
	}
}