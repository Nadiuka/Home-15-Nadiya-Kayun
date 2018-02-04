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
    $wp_customize->add_section(
        'about_us',
        array(
            'title' => 'Section_AboutUs',
        )
    );
    $wp_customize->add_setting(
        'SecondHeader',
        array('default' => 'SecondHeader')
    );
    $wp_customize->add_control(
        'SecondHeader',
        array(
            'label' => 'SecondHeader',
            'section' => 'about_us',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'TextAbout',
        array('default' => 'Text_About')
    );
    $wp_customize->add_control(
        'TextAbout',
        array(
            'label' => 'Text_About',
            'section' => 'about_us',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'HeaderHistory',
        array('default' => 'Header_History')
    );
    $wp_customize->add_control(
        'HeaderHistory',
        array(
            'label' => 'Header_History',
            'section' => 'about_us',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'HeaderExpertise',
        array('default' => 'Header_Expertise')
    );
    $wp_customize->add_control(
        'HeaderExpertise',
        array(
            'label' => 'Header_Expertise',
            'section' => 'about_us',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'TextExpertise',
        array('default' => 'Text_Expertise')
    );
    $wp_customize->add_control(
        'TextExpertise',
        array(
            'label' => 'Text_Expertise',
            'section' => 'about_us',
            'type' => 'text',
        )
    );
    $wp_customize->add_section(
        'practis_area',
        array(
            'title' => 'Section_Practis_Area',
        )
    );
    $wp_customize->add_setting(
        'HeaderPractis',
        array('default' => 'HeaderPractis')
    );
    $wp_customize->add_control(
        'HeaderPractis',
        array(
            'label' => 'HeaderPractis',
            'section' => 'practis_area',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'TextPractis',
        array('default' => 'TextPractis')
    );
    $wp_customize->add_control(
        'TextPractis',
        array(
            'label' => 'TextPractis',
            'section' => 'practis_area',
            'type' => 'text',
        )
    );
    $wp_customize->add_section(
        'attorney',
        array(
            'title' => 'Section_Attorney',
        )
    );
    $wp_customize->add_setting(
        'HeaderAttorney',
        array('default' => 'HeaderAttorney')
    );
    $wp_customize->add_control(
        'HeaderAttorney',
        array(
            'label' => 'HeaderAttorney',
            'section' => 'attorney',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'TextAttorney',
        array('default' => 'TextAttorney')
    );
    $wp_customize->add_control(
        'TextAttorney',
        array(
            'label' => 'TextAttorney',
            'section' => 'attorney',
            'type' => 'text',
        )
    );
    $wp_customize->add_section(
        'clients',
        array(
            'title' => 'Section_Clients',
        )
    );
    $wp_customize->add_setting(
        'HeaderClients',
        array('default' => 'HeaderClients')
    );
    $wp_customize->add_control(
        'HeaderClients',
        array(
            'label' => 'HeaderClients',
            'section' => 'clients',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'TextClients',
        array('default' => 'TextClients')
    );
    $wp_customize->add_control(
        'TextClients',
        array(
            'label' => 'TextClients',
            'section' => 'clients',
            'type' => 'text',
        )
    );
    $wp_customize->add_section(
        'publications',
        array(
            'title' => 'Section_Publications',
        )
    );
    $wp_customize->add_setting(
        'HeaderPublications',
        array('default' => 'HeaderPublications')
    );
    $wp_customize->add_control(
        'HeaderPublications',
        array(
            'label' => 'HeaderPublications',
            'section' => 'publications',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'TextPublications',
        array('default' => 'TextPublications')
    );
    $wp_customize->add_control(
        'TextPublications',
        array(
            'label' => 'TextPublications',
            'section' => 'publications',
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
