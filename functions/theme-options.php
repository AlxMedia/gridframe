<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'gridframe', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'gridframe' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'gridframe' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'gridframe' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'gridframe' ),
	'button_url'  => 'https://wordpress.org/support/theme/gridframe/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'gridframe' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'gridframe' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'gridframe' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'gridframe' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'gridframe' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'gridframe' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'gridframe' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'gridframe' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'gridframe' ),
	'description'	=> esc_html__( 'Your blog heading', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'gridframe' ),
	'description'	=> esc_html__( 'Your blog subheading', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Item Excerpt Length', 'gridframe' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Item Comment Count', 'gridframe' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Titles
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'item-titles',
	'label'			=> esc_html__( 'Item Titles', 'gridframe' ),
	'description'	=> esc_html__( 'Show titles on items', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Category
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'item-category',
	'label'			=> esc_html__( 'Item Categories', 'gridframe' ),
	'description'	=> esc_html__( 'Show categories below each item', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Format
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-format',
	'label'			=> esc_html__( 'Single - Post Format', 'gridframe' ),
	'description'	=> esc_html__( 'Shows post format content instead of featured image', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'gridframe' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'gridframe' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'gridframe' ),
		'categories'=> esc_html__( 'Related by categories', 'gridframe' ),
		'tags'		=> esc_html__( 'Related by tags', 'gridframe' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'gridframe' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'gridframe' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'gridframe' ),
		'content'	=> esc_html__( 'Below content', 'gridframe' ),
	),
) );
// Header: Search
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'gridframe' ),
	'description'	=> esc_html__( 'Header search button', 'gridframe' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'gridframe' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'gridframe' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'gridframe' ),
	'description'	=> esc_html__( 'Works best with square size', 'gridframe' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Title', 'gridframe' ),
	'description'	=> esc_html__( 'The large text', 'gridframe' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'gridframe' ),
	'description'	=> esc_html__( 'The smaller text below the title', 'gridframe' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'gridframe' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'gridframe' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'gridframe' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'gridframe' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'gridframe' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'gridframe' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'gridframe' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'gridframe' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'gridframe' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'gridframe' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'gridframe' ),
	'description'	=> esc_html__( 'Footer credit text', 'gridframe' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'gridframe' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'col-1c',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'gridframe' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'gridframe' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'gridframe' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'gridframe' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'gridframe' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'gridframe' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'gridframe' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'gridframe' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function gridframe_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'gridframe' ),
		'description'	=> esc_html__( '(is_home) Primary', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'gridframe' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'gridframe' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'gridframe' ),
		'description'	=> esc_html__( '(is_category) Primary', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'gridframe' ),
		'description'	=> esc_html__( '(is_search) Primary', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'gridframe' ),
		'description'	=> esc_html__( '(is_404) Primary', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	Kirki::add_field( 'gridframe_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'gridframe' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'gridframe' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridframe' ),
	) );
	
 } 
add_action( 'init', 'gridframe_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'gridframe' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'gridframe' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'gridframe' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'gridframe' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'gridframe' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'gridframe' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'gridframe' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'gridframe' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'gridframe' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'gridframe' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'gridframe' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'gridframe' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'gridframe' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'gridframe' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'gridframe' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'gridframe' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'gridframe' ),
	'description'	=> esc_html__( 'Select font for the theme', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'gridframe' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'gridframe' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'gridframe' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'gridframe' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'gridframe' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'gridframe' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'gridframe' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'gridframe' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'gridframe' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'gridframe' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'gridframe' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'gridframe' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'gridframe' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'gridframe' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'gridframe' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'gridframe' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'gridframe' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'gridframe' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'gridframe' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'gridframe' ),
		'arial'					=> esc_html__( 'Arial', 'gridframe' ),
		'georgia'				=> esc_html__( 'Georgia', 'gridframe' ),
		'verdana'				=> esc_html__( 'Verdana', 'gridframe' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'gridframe' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'gridframe' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'gridframe' ),
	'description'	=> esc_html__( 'Max-width of the container. Set to default for full width.', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> '1080',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Post Format Width
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'post-format-width',
	'label'			=> esc_html__( 'Post Format Max-width', 'gridframe' ),
	'description'	=> esc_html__( 'Max-width of the post formats, shown at the top of articles', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> '940',
	'choices'     => array(
		'min'	=> '320',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'gridframe' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> '640',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Background
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'color',
	'settings'		=> 'header-background',
	'label'			=> esc_html__( 'Header Background', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Item Border
Kirki::add_field( 'gridframe_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'item-frame',
	'label'			=> esc_html__( 'Item Frame', 'gridframe' ),
	'description'	=> esc_html__( 'The frame around each item', 'gridframe' ),
	'section'		=> 'styling',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '50',
		'step'	=> '1',
	),
) );