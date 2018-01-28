<?php
/**
 * advocatus Theme Customizer
 *
 * @package advocatus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function advocatus_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'advocatus_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'advocatus_customize_partial_blogdescription',
		) );
	}
    $wp_customize->add_section(
        'header_titles',
        array(
            'title' => 'Header_Title',
        )
    );
    $wp_customize->add_setting(
        'Title',
        array('default' => 'Title')
    );
    $wp_customize->add_control(
        'Title',
        array(
            'label' => 'Title',
            'section' => 'header_titles',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'SubTitle',
        array('default' => 'SubTitle')
    );
    $wp_customize->add_control(
        'SubTitle',
        array(
            'label' => 'SubTitle',
            'section' => 'header_titles',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'LinkContactMe',
        array('default' => 'Contact Me')
    );
    $wp_customize->add_control(
        'LinkContactMe',
        array(
            'label' => 'Link',
            'section' => 'header_titles',
            'type' => 'text',
        )
    );
}
add_action( 'customize_register', 'advocatus_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function advocatus_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function advocatus_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function advocatus_customize_preview_js() {
	wp_enqueue_script( 'advocatus-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'advocatus_customize_preview_js' );
