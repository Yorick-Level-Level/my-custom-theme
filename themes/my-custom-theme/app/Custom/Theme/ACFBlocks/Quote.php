<?php 
namespace Custom\Theme\ACFBlocks;

use Timber\Timber;

class Quote {
    public function register_hooks(): void {
        add_action('acf/init', array($this, 'register'));
    }

    public function register(): void {
        // Bail out if function doesn’t exist.
        if (!function_exists('acf_register_block')) {
            return;
        }
        
        // Register a new block.
        acf_register_block([
            'name' => 'quote_block',
            'title' => __('Quote Block', 'my-custom-theme'),
            'description' => __('Gives a quote with author', 'my-custom-theme'),
            'render_callback' => array($this, 'quote_block_render_callback'),
            'category' => 'formatting',
            'icon' => 'format-quote',
            'keywords' => ['quote', 'author'],
        ]);
    }

    public function quote_block_render_callback($block, $is_preview = false)
    {
        $context = Timber::context([
            // Store block values.
            'block' => $block,
            // Store field values.
            'fields' => get_fields(),
            // Store $is_preview value.
            'is_preview' => $is_preview,
            // Store block class values
            'block_class' => $this,
        ]);

        // Render the block.
        Timber::render('blocks/block-quote.twig', $context);
    }

    public function get_timber_post() {
        $fields = get_fields();

        if($fields['post']) {
            return Timber::get_post($fields['post']->ID);
        }
    }
}
