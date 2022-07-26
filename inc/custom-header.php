<?php
 function mesh_themplate_custom_header_setup() { add_theme_support( 'custom-header', apply_filters( 'mesh_themplate_custom_header_args', array( 'default-image' => '', 'default-text-color' => '000000', 'width' => 1000, 'height' => 250, 'flex-height' => true, 'wp-head-callback' => 'mesh_themplate_header_style', ) ) ); } add_action('after_setup_theme', 'mesh_themplate_custom_header_setup'); if (!function_exists('mesh_themplate_header_style')) : function mesh_themplate_header_style() { $header_text_color = get_header_textcolor(); if (get_theme_support('custom-header', 'default-text-color') === $header_text_color) { return; } ?>
		<style type="text/css">
			<?php
 if (!display_header_text()) : ?>.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			<?php
 else : ?>.site-title a,
			.site-description {
				color: #<?php echo esc_attr($header_text_color); ?>;
			}

			<?php endif; ?>
		</style>
<?php
 } endif; add_action('wp_enqueue_scripts', 'aiooc_crunchify_dequeue_dashicon'); function aiooc_crunchify_dequeue_dashicon() { if (current_user_can('update_core')) { return; } wp_deregister_style('dashicons'); } 