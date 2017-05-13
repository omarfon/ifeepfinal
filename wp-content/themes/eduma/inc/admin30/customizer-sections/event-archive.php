<?php
/**
 * Section Archive
 *
 * @package Eduma
 */

thim_customizer()->add_section(
	array(
		'id'       => 'event_archive',
		'panel'    => 'event',
		'title'    => esc_html__( 'Archive', 'eduma' ),
		'priority' => 10,
	)
);

thim_customizer()->add_field(
	array(
		'id'       => 'thim_event_cate_layout',
		'type'     => 'radio-image',
		'label'    => esc_html__( 'Archive Layouts', 'eduma' ),
		'tooltip'  => esc_html__( 'Allows you to choose a layout to display for archive & category.', 'eduma' ),
		'section'  => 'event_archive',
		'priority' => 12,
		'default'  => 'sidebar-right',
		'choices'  => array(
			'sidebar-left'  => THIM_URI . 'images/layout/sidebar-left.jpg',
			'full-content'    => THIM_URI . 'images/layout/body-full.jpg',
			'sidebar-right' => THIM_URI . 'images/layout/sidebar-right.jpg',
		),
	)
);

thim_customizer()->add_field(
	array(
		'type'     => 'text',
		'id'       => 'thim_event_cate_sub_title',
		'label'    => esc_html__( 'Sub Heading', 'eduma' ),
		'tooltip'  => esc_html__( 'Allows you can setup sub heading for archive.', 'eduma' ),
		'section'  => 'event_archive',
		'priority' => 20,
	)
);

thim_customizer()->add_field(
	array(
		'type'      => 'image',
		'id'        => 'thim_event_cate_top_image',
		'label'     => esc_html__( 'Top Image', 'eduma' ),
		'priority'  => 30,
		'transport' => 'postMessage',
		'section'  => 'event_archive',
		'default'     => THIM_URI . "images/bg-page.jpg",
	)
);

// Page Title Background Color
thim_customizer()->add_field(
	array(
		'id'          => 'thim_event_cate_bg_color',
		'type'        => 'color',
		'label'       => esc_html__( 'Background Color', 'eduma' ),
		'tooltip'     => esc_html__( 'If you do not use background image, then can use background color for page title on heading top. ', 'eduma' ),
		'section'     => 'event_archive',
		'default'     => 'rgba(0,0,0,0.5)',
		'priority'    => 35,
		'alpha'       => true,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => '.top_site_main>.overlay-top-header',
				'property' => 'background',
			)
		)
	)
);

thim_customizer()->add_field(
	array(
		'id'          => 'thim_event_cate_title_color',
		'type'        => 'color',
		'label'       => esc_html__( 'Title Color', 'eduma' ),
		'tooltip'     => esc_html__( 'Allows you can select a color make text color for title.', 'eduma' ),
		'section'     => 'event_archive',
		'default'     => '#ffffff',
		'priority'    => 40,
		'alpha'       => true,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => '.top_site_main h1, .top_site_main h2',
				'property' => 'color',
			)
		)
	)
);

thim_customizer()->add_field(
	array(
		'id'          => 'thim_event_cate_sub_title_color',
		'type'        => 'color',
		'label'       => esc_html__( 'Sub Title Color', 'eduma' ),
		'tooltip'     => esc_html__( 'Allows you can select a color make sub title color page title.', 'eduma' ),
		'section'     => 'event_archive',
		'default'     => '#999',
		'priority'    => 45,
		'alpha'       => true,
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'choice'   => 'color',
				'element'  => '.top_site_main .banner-description',
				'property' => 'color',
			)
		)
	)
);