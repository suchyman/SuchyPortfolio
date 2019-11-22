<?php
/**
 * SuPort functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SuPort
 */

if ( ! function_exists( 'suport_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function suport_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SuPort, use a find and replace
		 * to change 'suport' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'suport', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'suport' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'suport_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


		
	}
endif;
add_action( 'after_setup_theme', 'suport_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function suport_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'suport_content_width', 640 );
}
add_action( 'after_setup_theme', 'suport_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function suport_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'suport' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'suport' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'suport_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function suport_scripts() {
	wp_enqueue_style( 'suport-style', get_stylesheet_uri() );

	wp_enqueue_script( 'suport-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'suport-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'suport_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//////////////////////////////////////////////////////////////////////////////////////////

function sitepoint_customize_register($wp_customize) 
{
	$wp_customize->add_section( 'cd_start_text' , array(
		'title'      => 'Treści na stronie',
		'priority'   => 20,
	) );
  
	$wp_customize->add_setting( 'cd_start_text_display' , array(
		'default'     => true,
		'transport'   => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	) );
  
// 	$wp_customize->add_control( 'cd_start_text_display', array(
// 	'label' => 'Button Display',
// 	'section' => 'cd_start_text',
// 	'settings' => 'cd_start_text_display',
// 	'type' => 'radio',
// 	'choices' => array(
// 	  'show' => 'Show Button',
// 	  'hide' => 'Hide Button',
// 	),
//   ) );

  	$wp_customize->add_setting( 'cd_start_text_text' , array(
    'default'     => 'Przykładowa treść',
    'transport'   => 'postMessage',
) );

	$wp_customize->add_control( 'cd_start_text_text', array(
    'label' => 'Treść w Start (<p class="lead ">)',
	'section'	=> 'cd_start_text',
	'type'	 => 'textarea',
) );

$wp_customize->add_setting( 'cd_start_text_text_adres' , array(
    'default'     => 'Przykładowa treść',
    'transport'   => 'postMessage',
) );
$wp_customize->add_control( 'cd_start_text_text_adres', array(
    'label' => 'Adres',
	'section'	=> 'cd_start_text',
	'type'	 => 'textarea',
) );

$wp_customize->add_setting( 'cd_start_text_text_mail' , array(
    'default'     => 'Przykładowa treść',
    'transport'   => 'postMessage',
) );
$wp_customize->add_control( 'cd_start_text_text_mail', array(
    'label' => 'E-mail',
	'section'	=> 'cd_start_text',
	'type'	 => 'textarea',
) );

}

add_action("customize_register","sitepoint_customize_register");


// Register Custom Post Type
function experience_cpt() {
	$labels = array(
	'name'                  => _x( 'experience', 'Post Type General Name', 'experience' ),
	'singular_name'         => _x( 'experience', 'Post Type Singular Name', 'experience' ),
	'menu_name'             => __( 'Experience posts', 'experience' ),
	'name_admin_bar'        => __( 'Add New Exp', 'experience' ),
	'archives'              => __( 'Item Archives', 'experience' ),
	'parent_item_colon'     => __( 'Parent Item', 'experience' ),
	'all_items'             => __( 'All Exps', 'experience' ),
	'add_new_item'          => __( 'Add New experience', 'experience' ),
	'add_new'               => __( 'Add new experience', 'experience' ),
	'new_item'              => __( 'Not Found', 'experience' ),
	'edit_item'             => __( 'Edit Item', 'experience' ),
	'update_item'           => __( 'Update Item', 'experience' ),
	'view_item'             => __( 'View Item', 'experience' ),
	'search_items'          => __( 'Search Item', 'experience' ),
	'not_found'             => __( 'Not Found', 'experience' ),
	'not_found_in_trash'    => __( 'Not Found In Trash', 'experience' ),
	'featured_image'        => __( 'Featured Image', 'experience' ),
	'set_featured_image'    => __( 'Set Featured Image', 'experience' ),
	'remove_featured_image' => __( 'Remove Featured Image', 'experience' ),
	'use_featured_image'    => __( 'Use As Featured Image', 'experience' ),
	'insert_into_item'      => __( 'Post Types', 'experience' ),
	'uploaded_to_this_item' => __( 'Uploaded To This Item', 'experience' ),
	'items_list'            => __( 'Items List', 'experience' ),
	'items_list_navigation' => __( 'Items List Navigation', 'experience' ),
	'filter_items_list'     => __( 'Filter Items List', 'experience' ),
	);
	$args = array(
	'label'                 => __( 'Post Type', 'experience' ),
	'description'           => __( 'experience_description', 'experience' ),
	'labels'                => $labels,
	'supports'              => array('title' , 'editor' , 'content' , 'custom_fields'),
	'taxonomies'            => array( ''),
	'hierarchical'          => false,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_position'         => 5,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => true,
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'page',
	'menu_icon' => 'dashicons-align-left',
	);
	register_post_type( 'exp_cpt', $args );
	}
	add_action( 'init', 'experience_cpt', 0 );


	/////////////////


	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array (
			'key' => 'group_1',
			'title' => 'My Group',
			'fields' => array (
				array (
					'key' => 'stanowisko',
					'label' => 'Stanowisko',
					'name' => 'stanowisko',
					'type' => 'text',
					'prefix' => '',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'data_start',
					'label' => 'Data od',
					'name' => 'date_start',
					'type' => 'date_picker',
					'disabled' => 0,
				),
				array (
					'key' => 'data_end',
					'label' => 'Data do',
					'name' => 'date_end',
					'type' => 'date_picker',
					'disabled' => 0,
				)
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'exp_cpt',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
		));
		
		endif;
		add_action( 'init', 'acf_add_local_field_group', 0 );


		