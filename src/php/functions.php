<?php

/**
 * Mesh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mesh
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mesh_themplate_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mesh, use a find and replace
		* to change 'mesh-themplate' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('mesh-themplate', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'mesh-themplate'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mesh_themplate_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for editor styles.
	add_theme_support('editor-styles');

	// Enqueue editor styles.
	add_editor_style('/css/style-editor.css');

	// create default theme colors----------
	// primary
	// secondary
	// tertiary
	// quaternary
	// success
	// info
	// warning
	// danger
	add_theme_support('editor-color-palette', array(
		array(
			"name" => "cyan",
			"slug" => "slug",
			"color" => "var(--cyan)"
		),
		array(
			"name" => "primary",
			"slug" => "slug",
			"color" => "var(--primary)"
		),
		array(
			"name" => "secondary",
			"slug" => "slug",
			"color" => "var(--secondary)"
		),
		array(
			"name" => "tertiary",
			"slug" => "slug",
			"color" => "var(--tertiary)"
		),
		array(
			"name" => "quaternary",
			"slug" => "slug",
			"color" => "var(--quaternary)"
		),
		// notifications
		array(
			"name" => "success",
			"slug" => "slug",
			"color" => "var(--success)"
		),
		array(
			"name" => "info",
			"slug" => "slug",
			"color" => "var(--info)"
		),
		array(
			"name" => "warning",
			"slug" => "slug",
			"color" => "var(--warning)"
		),
		array(
			"name" => "danger",
			"slug" => "slug",
			"color" => "var(--danger)"
		),
	));

	// create default theme colors------------
	// add_theme_support('editor-font-sizes', array(
	// 	array(
	// 		'name' => esc_attr__('Small', 'themeLangDomain'),
	// 		'size' => 12,
	// 		'slug' => 'small'
	// 	),
	// 	array(
	// 		'name' => esc_attr__('Regular', 'themeLangDomain'),
	// 		'size' => 16,
	// 		'slug' => 'regular'
	// 	),
	// 	array(
	// 		'name' => esc_attr__('Large', 'themeLangDomain'),
	// 		'size' => 36,
	// 		'slug' => 'large'
	// 	),
	// 	array(
	// 		'name' => esc_attr__('Huge', 'themeLangDomain'),
	// 		'size' => 50,
	// 		'slug' => 'huge'
	// 	)
	// ));

}
add_action('after_setup_theme', 'mesh_themplate_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mesh_themplate_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mesh_themplate_content_width', 640);
}
add_action('after_setup_theme', 'mesh_themplate_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mesh_themplate_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mesh-themplate'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mesh-themplate'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mesh_themplate_widgets_init');

/******************************************************************
 * Enqueue scripts and styles.
 */
function mesh_themplate_scripts()
{
	wp_enqueue_style(
		'mesh-themplate-style',
		get_stylesheet_directory_uri() . "/css/main.css",
		array(),
		_S_VERSION
	);
	// wp_enqueue_style('mesh-themplate-style', get_stylesheet_uri() . "/main.css", array(), _S_VERSION);
	wp_style_add_data('mesh-themplate-style', 'rtl', 'replace');

	wp_enqueue_script(
		'mesh-themplate-navigation',
		get_template_directory_uri() . '/js/app.js',
		array(),
		_S_VERSION,
		true
	);

	wp_localize_script("mesh-themplate-navigation", "ajax_url",  array(
		'ajax_url' => admin_url('admin-ajax.php'),
		"mynamespace" => array(
			'rootapiurl' => esc_url_raw(rest_url()),
			'nonce' => wp_create_nonce('wp_rest')
		)
	));

	// if (is_singular() && comments_open() && get_option('thread_comments')) {
	// 	wp_enqueue_script('comment-reply');
	// }
}
// add_action('wp_enqueue_scripts', 'mesh_themplate_scripts');

// ------------------------Font awesome -------------------------------
// https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css
function my_theme_styles()
{
	wp_register_style('FontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	wp_enqueue_style('FontAwesome');
	// wp_enqueue_style('FontAwesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css");
}

add_action('wp_enqueue_scripts', 'my_theme_styles');

// ------------------------custome styles css -------------------------------
function mesh_template_css($file_path, $name = 'mesh-themplate-style')
{
	if (isset($file_path)) {
		wp_register_style($name, get_stylesheet_directory_uri() . "/css" . $file_path, array(), _S_VERSION);

		wp_enqueue_style($name);



		// wp_enqueue_style($name, get_stylesheet_directory_uri() . "/css" . $file_path, array(), _S_VERSION);
	}
	// locate_template("template-parts/before-footer.php", true);
}

add_action("mesh_template_styles",  "mesh_template_css", 99, 2);

// ------------------------custome JS  -------------------------------

function mesh_template_js($file_path, $name = 'mesh-themplate-script')
{
	if (isset($file_path)) {
		// google maps---------------
		// wp_enqueue_script(
		// 	"googleMap",
		// 	"//maps.googleapis.com/maps/api/js?key=[apikey]",
		// 	NULL,
		// 	"1.0",
		// 	true
		// );
		// ----
		wp_register_script(
			$name,
			get_template_directory_uri() . "/js" . $file_path,
			// ["jquery"],
			[],
			_S_VERSION,
			true
		);

		wp_enqueue_script($name);
		// wp_enqueue_script(
		// 	$name,
		// 	get_template_directory_uri() . "/js" . $file_path,
		// 	["jquery"],
		// 	_S_VERSION,
		// 	true
		// );
		// ----
		wp_localize_script($name, "ajax_url",  array(
			'ajax_url' => admin_url('admin-ajax.php'),
			"mynamespace" => array(
				'rootapiurl' => esc_url_raw(rest_url()),
				'nonce' => wp_create_nonce('wp_rest')
			)
		));
		wp_enqueue_script('qs', 'https://unpkg.com/qs/dist/qs.js');
	}
}

add_action("mesh_template_scripts",  "mesh_template_js", 10, 2);


// ------------------------

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// -----------------
// add_action('wp_head', 'so_9405896_show_template', 999);

// function so_9405896_show_template()
// {
// 	global $template;
// 	echo ' TEMPLATE = ' . basename($template) . '';
// }

add_filter('the_content', 'so_9405896_show_template', 20, 1);

function so_9405896_show_template($content)
{
	if (is_admin() || !current_user_can('administrator'))
		return $content;

	global $template;
	$the_templ =  '<p class="p bg-gray-light">TEMPLATE: '
		. basename($template) . '</p>';

	$content = sprintf($the_templ . '%s', $content);

	return $content;
}



// -----------------
add_filter('walker_nav_menu_start_el', 'add_arrow', 10, 4);
function add_arrow($output, $item, $depth, $args)
{

	//Only add class to 'top level' items on the 'primary' menu.
	// if ('primary' == $args->theme_location && $depth === 0) {
	if (in_array("menu-item-has-children", $item->classes)) {
		$output .= '<i class="menu-dropdown-icon btn fa-solid fa-angle-down"></i>';
	}
	// }
	return $output;
}
// <i class="fa-solid fa-angle-down"></i>

// add_filter('walker_nav_menu_start_el', 'dcms_agregar_descripcion', 10, 4);

// function dcms_agregar_descripcion($item_output, $item, $depth, $args)
// {
// 	return str_replace('</a>', '<br/><small>xxxxx</small></a>', $item_output);

// return $item_output;
// }




// add the ajax fetch js API -----------------------------------------------------//
function addToArgs($field, $compare = "=", $type = "numeric")
{
	$value = intval(sanitize_text_field($_GET[$field]));
	return array(
		"key" => $field,
		"compare" => $compare,
		"value" => $value,
		'type'    => $type,

	);
}

// type: ‘NUMERIC’, ‘BINARY’, ‘CHAR’, ‘DATE’, ‘DATETIME’, ‘DECIMAL’, ‘SIGNED’, ‘TIME’, ‘UNSIGNED’. Default value is ‘CHAR’.



function property_search_callback()
{
	// set JSON form response
	header("Content-Type: application/json");


	// echo json_encode($_GET);
	// wp_die();

	// post_type
	$args = array(
		"post_type" => "propiedad",
		'orderby'   => 'meta_value_num',
		'meta_key'   => 'precio', // order by
		"posts_per_page" => -1
	);

	// custom_flieds ---------------
	// &precio=200000
	if (isset($_GET["precio"]))
		$args["meta_query"][] = addToArgs("precio", ">=");
	// array_push($pila, addToArgs("precio", ">="));

	if (isset($_GET["cuartos"]))
		$args["meta_query"][] = addToArgs("cuartos", ">=");

	if (isset($_GET["direccion"]))
		$args["meta_query"][] = addToArgs("direccion", "LIKE", "CHAR");


	// WP_Query ---------------
	$propiedades = new WP_Query($args);


	$result = array();
	while ($propiedades->have_posts()) {
		$propiedades->the_post();

		$result[] = array(
			"id" => get_the_ID(),
			"title" => get_the_title(),
			"permalink" => get_the_permalink(),
			"precio" => number_format(get_field("precio"), 0, ",", "."),
			// "cuartos" => get_field("cuartos"),
		);

		// echo "<li>" . get_the_title() . "</li>";
	}



	// convert to JSON
	echo json_encode($result);

	// ----
	wp_die();
	// print_r($propiedades);
}

add_action('wp_ajax_property_search', 'property_search_callback');
add_action('wp_ajax_nopriv_property_search', 'property_search_callback');



// http://localhost/wordpress/mesh/wp-admin/admin-ajax.php?action=property_search


// api key map -----------------------------

// add_filter("acf/fields/google_map/api", "add_api_key");

function add_api_key($api)
{
	$api["key"] = "APIKEY";
	// $api["key"] = "";
	return $api;
}


// wp_nav_menu--------------------------------
// function add_last_nav_item($items)
// {
// 	return $items .= '<li id="%1$s" class="%2$s"><a href="#myModal" role="button" data-toggle="modal">Contact</a></li>';
// }
// add_filter('wp_nav_menu_items', 'add_last_nav_item');


function add_search_form($items, $args)
{
	if ($args->theme_location == 'menu-1') {
		$items .= '<li class="menu-item menu-item-has-children">'
			. '<i class="fa-solid fa-person-walking-with-cane btn"></i>'
			. '<a>accessibility </a>'
			. '<i class="menu-dropdown-icon btn fa-solid fa-angle-down"></i>'
			. '<ul class="sub-menu">
				<li class="menu-item btn-block"id="dark-theme" >
					<i class="far fa-moon " ></i>
					<span>Toggle Dark theme</span>
				</li>
				<li class="menu-item " id="">
					<i class="fas fa-text-height pl-2"></i>
					<span>Font size</span>
					<button id="font-increase" class="bold">+</button>
					<button id="font-deincrease" class="bold">-</button>
				</li>
			</ul>'
			. '</li>';
	}
	return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);;


// contact form 7 
// add_filter('wpcf7_form_elements', function ($content) {
// 	$dom = new DOMDocument();
// 	$dom->preserveWhiteSpace = false;
// 	$dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

// 	$xpath = new DomXPath($dom);
// 	$spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]");

// 	foreach ($spans as $span) :
// 		$children = $span->firstChild;
// 		$span->parentNode->replaceChild($children, $span);
// 	endforeach;

// 	return $dom->saveHTML();
// });



function wp_hook_draft_mode_styles()
{
	global $post;
	if (!$post) return;
	// if ("draft" === $post->post_status) {
	wp_enqueue_style("wphooks-admin-css", get_stylesheet_directory_uri() . "/css/gutenberg-styles.css", [], time(), "all");
	// }
	// add_editor_style("css/main.css");
}

// add_action("admin_enqueue_scripts", "wp_hook_draft_mode_styles");


// Add backend styles for Gutenberg. ----------------------------
function gutenberg_editor_assets()
{
	global $post;
	if (!$post) return;

	// wp_enqueue_style('my-gutenberg-editor-styles', get_theme_file_uri("/css/gutenberg-styles.css"), FALSE);
	// wp_enqueue_script('my-gutenberg-editor-scripts', get_theme_file_uri("/js/gutenberg.js"), true);
	// ------
	wp_enqueue_style("wphooks-admin-css", get_stylesheet_directory_uri() . "/css/gutenberg-styles.css", [], _S_VERSION, "all");
	wp_enqueue_script("wphooks-admin-css", get_stylesheet_directory_uri() . "/js/gutenberg.js", [], _S_VERSION, "all");
}

add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets', 99);





// https://daily-seven.vercel.app/
// https://quiet-inlet-72311.herokuapp.com/
// https://dashboard-rose-iota.vercel.app/

// 57 3045809737


// custom block ----------------------------
function alecadd_futenberg_blocks()
{
	wp_register_script(
		"custom-cta-js",
		get_template_directory_uri() . "/js/block.js",
		array("wp-blocks", 'wp-editor', "wp-i18n", "wp-components"),

	);

	register_block_type("alecadd/custom-cta", array(
		"editor_script" => "custom-cta-js"
	));
}

// add_action("enqueue_block_editor_assets", "alecadd_futenberg_blocks");



// disable styles 
// function mesh_template_dequeue_style($styles_arr)
// {
// 	if (isset($styles_arr)) {
// 		foreach ($styles_arr as &$style) {
// 			echo "<h1>$style</h1>";
// 			wp_dequeue_style($style);
// 		}
// 	}
// }

// add_action("mesh_template_dequeue",  "mesh_template_dequeue_style", 10, 1);

// do_action("mesh_template_dequeue", [
// 	'wc-blocks-style',
// 	'wc-blocks-vendors-style',
// 	'contact-form-7',
// 	'wp-block-library',
// 	'wp-block-library-theme'
// ]);

// disable gutenberg frontend styles @ https://m0n.co/15 ----------
// //  368 - 674 css kb
function disable_gutenberg_scripts()
{

	wp_dequeue_style('wc-blocks-style');
	wp_dequeue_style('wc-blocks-vendors-style');
	wp_dequeue_style('contact-form-7');
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');

	// // disable woocommerce frontend block styles
	// wp_dequeue_style('wc-block-style'); 
	// // disable storefront frontend block styles
	// wp_dequeue_style('storefront-gutenberg-blocks'); 

}


// add_filter('wp_enqueue_scripts', 'disable_gutenberg_scripts', 100);
// add_action('mesh_template_dequeue', 'disable_gutenberg_scripts', 100);



add_action('mesh_template_dequeue', function () {
	add_filter('wp_enqueue_scripts', 'disable_gutenberg_scripts', 100);
});


// disable gutenberg frontend styles @ https://m0n.co/15 ----------
// //  368 - 674 css kb
function mesh_disable_scripts()
{
	wp_dequeue_script("regenerator-runtime");
	wp_dequeue_script("wp-polyfill");
	wp_dequeue_script("contact-form-7");
	wp_dequeue_script("jquery-blockui");
	wp_dequeue_script("wc-add-to-cart-extra");
	wp_dequeue_script("wc-add-to-cart");
	wp_dequeue_script("js-cookie");
	wp_dequeue_script("woocommerce");
	wp_dequeue_script("wc-cart-fragments");
	wp_dequeue_script("wc-cart-fragments-extra");
	wp_dequeue_script("qs");
}


// add_filter('wp_enqueue_scripts', 'mesh_disable_scripts', 100);
// add_action('mesh_template_dequeue', 'mesh_disable_scripts', 100);


// add_action('mesh_template_dequeue_scripts', function () {
// add_filter('wp_enqueue_scripts', 'mesh_disable_scripts', 100);
// });


// "regenerator-runtime-js"
// "wp-polyfill-js"
// "contact-form-7-js"
// "jquery-blockui-js"
// "wc-add-to-cart-js-extra"
// "wc-add-to-cart-js"
// "js-cookie-js"
// "woocommerce-js"
// "wc-cart-fragments-js"
// "wc-cart-fragments-js-extra"
// "qs-js"
