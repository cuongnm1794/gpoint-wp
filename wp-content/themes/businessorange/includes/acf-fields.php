<?php
/**
 * ACF Field Groups Registration for BusinessOrange Theme
 * 
 * Registers ACF field groups for Services, Pricing, and OUR STORY sections
 *
 * @package BusinessOrange
 * @since BusinessOrange 1.0.0
 */

/**
 * Register Services Section ACF Fields
 */
function businessorange_register_services_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_services_section',
		'title' => 'Services Section',
		'fields' => array(
			array(
				'key' => 'field_services_title',
				'label' => 'Section Title',
				'name' => 'services_title',
				'type' => 'text',
				'default_value' => 'Our Best Services',
				'placeholder' => 'Our Best Services',
			),
			array(
				'key' => 'field_services_subtitle',
				'label' => 'Section Subtitle',
				'name' => 'services_subtitle',
				'type' => 'text',
				'default_value' => 'Services',
				'placeholder' => 'Services',
			),
			array(
				'key' => 'field_services_description',
				'label' => 'Section Description',
				'name' => 'services_description',
				'type' => 'textarea',
				'default_value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
			),
			array(
				'key' => 'field_services_list',
				'label' => 'Services List',
				'name' => 'services_list',
				'type' => 'repeater',
				'min' => 1,
				'max' => 12,
				'layout' => 'table',
				'button_label' => 'Add Service',
				'sub_fields' => array(
					array(
						'key' => 'field_service_icon',
						'label' => 'Icon',
						'name' => 'icon',
						'type' => 'image',
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
					),
					array(
						'key' => 'field_service_title',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'required' => 1,
					),
					array(
						'key' => 'field_service_description',
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
						'rows' => 3,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_services_fields' );

/**
 * Register Pricing Section ACF Fields
 */
function businessorange_register_pricing_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_pricing_section',
		'title' => 'Pricing Section',
		'fields' => array(
			array(
				'key' => 'field_pricing_title',
				'label' => 'Section Title',
				'name' => 'pricing_title',
				'type' => 'text',
				'default_value' => 'Pricing & Plans',
				'placeholder' => 'Pricing & Plans',
			),
			array(
				'key' => 'field_pricing_subtitle',
				'label' => 'Section Subtitle',
				'name' => 'pricing_subtitle',
				'type' => 'text',
				'default_value' => 'Pricing',
				'placeholder' => 'Pricing',
			),
			array(
				'key' => 'field_pricing_description',
				'label' => 'Section Description',
				'name' => 'pricing_description',
				'type' => 'textarea',
				'default_value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
			),
			array(
				'key' => 'field_pricing_plans',
				'label' => 'Pricing Plans',
				'name' => 'pricing_plans',
				'type' => 'repeater',
				'min' => 1,
				'max' => 6,
				'layout' => 'block',
				'button_label' => 'Add Pricing Plan',
				'sub_fields' => array(
					array(
						'key' => 'field_plan_name',
						'label' => 'Plan Name',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'placeholder' => 'e.g., Starter, Exclusive, Premium',
					),
					array(
						'key' => 'field_plan_price',
						'label' => 'Price',
						'name' => 'price',
						'type' => 'text',
						'required' => 1,
						'placeholder' => '$0/mo',
						'instructions' => 'Enter price with format like $99/mo or $150/month',
					),
					array(
						'key' => 'field_plan_description',
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
						'rows' => 2,
						'placeholder' => 'Short description of the plan',
					),
					array(
						'key' => 'field_plan_features',
						'label' => 'Features',
						'name' => 'features',
						'type' => 'repeater',
						'min' => 0,
						'layout' => 'table',
						'button_label' => 'Add Feature',
						'sub_fields' => array(
							array(
								'key' => 'field_feature_text',
								'label' => 'Feature',
								'name' => 'text',
								'type' => 'text',
								'required' => 1,
							),
						),
					),
					array(
						'key' => 'field_plan_button_text',
						'label' => 'Button Text',
						'name' => 'button_text',
						'type' => 'text',
						'default_value' => 'Start free trial',
						'placeholder' => 'Start free trial',
					),
					array(
						'key' => 'field_plan_button_link',
						'label' => 'Button Link',
						'name' => 'button_link',
						'type' => 'url',
						'placeholder' => 'https://example.com',
					),
					array(
						'key' => 'field_plan_featured',
						'label' => 'Featured Plan',
						'name' => 'featured',
						'type' => 'true_false',
						'default_value' => 0,
						'instructions' => 'Check this if this plan should be highlighted',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_pricing_fields' );

/**
 * Register OUR STORY Section ACF Fields
 */
function businessorange_register_our_story_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_our_story_section',
		'title' => 'OUR STORY Section',
		'fields' => array(
			array(
				'key' => 'field_our_story_title',
				'label' => 'Section Title',
				'name' => 'our_story_title',
				'type' => 'text',
				'default_value' => 'Our team comes with the experience and knowledge',
				'placeholder' => 'Our team comes with the experience and knowledge',
			),
			array(
				'key' => 'field_our_story_subtitle',
				'label' => 'Section Subtitle',
				'name' => 'our_story_subtitle',
				'type' => 'text',
				'default_value' => 'OUR STORY',
				'placeholder' => 'OUR STORY',
			),
			array(
				'key' => 'field_who_we_are',
				'label' => 'Who We Are Content',
				'name' => 'who_we_are',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'default_value' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>',
			),
			array(
				'key' => 'field_vision',
				'label' => 'Our Vision Content',
				'name' => 'vision',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'default_value' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>',
			),
			array(
				'key' => 'field_history',
				'label' => 'Our History Content',
				'name' => 'history',
				'type' => 'wysiwyg',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'default_value' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.</p>',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 2,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_our_story_fields' );

/**
 * Register Clients Section ACF Fields
 */
function businessorange_register_clients_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_clients_section',
		'title' => 'Clients Section',
		'fields' => array(
			array(
				'key' => 'field_clients_subtitle',
				'label' => 'Section Subtitle',
				'name' => 'clients_subtitle',
				'type' => 'text',
				'default_value' => 'Meet our Clients',
				'placeholder' => 'Meet our Clients',
			),
			array(
				'key' => 'field_clients_title',
				'label' => 'Section Title',
				'name' => 'clients_title',
				'type' => 'text',
				'default_value' => 'Our Awesome Clients',
				'placeholder' => 'Our Awesome Clients',
			),
			array(
				'key' => 'field_clients_description',
				'label' => 'Section Description',
				'name' => 'clients_description',
				'type' => 'textarea',
				'default_value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
			),
			array(
				'key' => 'field_clients_list',
				'label' => 'Clients List',
				'name' => 'clients_list',
				'type' => 'repeater',
				'min' => 1,
				'max' => 20,
				'layout' => 'table',
				'button_label' => 'Add Client Logo',
				'sub_fields' => array(
					array(
						'key' => 'field_client_logo',
						'label' => 'Logo',
						'name' => 'logo',
						'type' => 'image',
						'return_format' => 'url',
						'preview_size' => 'medium',
						'required' => 1,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 3,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_clients_fields' );

/**
 * Register Blog Section ACF Fields
 */
function businessorange_register_blog_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_blog_section',
		'title' => 'Blog Section',
		'fields' => array(
			array(
				'key' => 'field_blog_subtitle',
				'label' => 'Section Subtitle',
				'name' => 'blog_subtitle',
				'type' => 'text',
				'default_value' => 'latest news',
				'placeholder' => 'latest news',
			),
			array(
				'key' => 'field_blog_title',
				'label' => 'Section Title',
				'name' => 'blog_title',
				'type' => 'text',
				'default_value' => 'Latest News & Blog',
				'placeholder' => 'Latest News & Blog',
			),
			array(
				'key' => 'field_blog_description',
				'label' => 'Section Description',
				'name' => 'blog_description',
				'type' => 'textarea',
				'default_value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
			),
			array(
				'key' => 'field_blog_posts',
				'label' => 'Blog Posts',
				'name' => 'blog_posts',
				'type' => 'repeater',
				'min' => 1,
				'max' => 10,
				'layout' => 'block',
				'button_label' => 'Add Blog Post',
				'sub_fields' => array(
					array(
						'key' => 'field_blog_post_image',
						'label' => 'Featured Image',
						'name' => 'image',
						'type' => 'image',
						'return_format' => 'url',
						'preview_size' => 'medium',
					),
					array(
						'key' => 'field_blog_post_title',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'required' => 1,
					),
					array(
						'key' => 'field_blog_post_author',
						'label' => 'Author',
						'name' => 'author',
						'type' => 'text',
						'default_value' => 'Author BY TIM NORTON',
						'placeholder' => 'Author BY TIM NORTON',
					),
					array(
						'key' => 'field_blog_post_excerpt',
						'label' => 'Excerpt',
						'name' => 'excerpt',
						'type' => 'textarea',
						'rows' => 3,
					),
					array(
						'key' => 'field_blog_post_link',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'url',
						'placeholder' => 'https://example.com',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 4,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_blog_fields' );

/**
 * Register Contact Section ACF Fields
 */
function businessorange_register_contact_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_contact_section',
		'title' => 'Contact Section',
		'fields' => array(
			array(
				'key' => 'field_contact_phone',
				'label' => 'Phone',
				'name' => 'contact_phone',
				'type' => 'text',
				'default_value' => '0984537278623',
				'placeholder' => '0984537278623',
			),
			array(
				'key' => 'field_contact_email',
				'label' => 'Email',
				'name' => 'contact_email',
				'type' => 'email',
				'default_value' => 'yourmail@gmail.com',
				'placeholder' => 'yourmail@gmail.com',
			),
			array(
				'key' => 'field_contact_address',
				'label' => 'Address',
				'name' => 'contact_address',
				'type' => 'textarea',
				'rows' => 3,
				'default_value' => '175 5th Ave, New York, NY 10010\nUnited States',
			),
			array(
				'key' => 'field_contact_schedule',
				'label' => 'Schedule',
				'name' => 'contact_schedule',
				'type' => 'textarea',
				'rows' => 2,
				'default_value' => '24 Hours / 7 Days Open\nOffice time: 10 AM - 5:30 PM',
			),
			array(
				'key' => 'field_contact_form_title',
				'label' => 'Form Title',
				'name' => 'contact_form_title',
				'type' => 'text',
				'default_value' => 'Ready to Get Started',
				'placeholder' => 'Ready to Get Started',
			),
			array(
				'key' => 'field_contact_form_description',
				'label' => 'Form Description',
				'name' => 'contact_form_description',
				'type' => 'textarea',
				'rows' => 2,
				'default_value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 5,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_contact_fields' );

/**
 * Register Hero Section ACF Fields
 */
function businessorange_register_hero_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_hero_section',
		'title' => 'Hero Section',
		'fields' => array(
			array(
				'key' => 'field_hero_title',
				'label' => 'Title',
				'name' => 'hero_title',
				'type' => 'text',
				'default_value' => 'Corporate & Business Site Template by BusinessOrange.',
				'placeholder' => 'Corporate & Business Site Template by BusinessOrange.',
			),
			array(
				'key' => 'field_hero_description',
				'label' => 'Description',
				'name' => 'hero_description',
				'type' => 'textarea',
				'rows' => 3,
				'default_value' => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.',
			),
			array(
				'key' => 'field_hero_button1_text',
				'label' => 'Button 1 Text',
				'name' => 'hero_button1_text',
				'type' => 'text',
				'default_value' => 'Get Started',
				'placeholder' => 'Get Started',
			),
			array(
				'key' => 'field_hero_button1_link',
				'label' => 'Button 1 Link',
				'name' => 'hero_button1_link',
				'type' => 'url',
				'placeholder' => 'https://example.com',
			),
			array(
				'key' => 'field_hero_button2_text',
				'label' => 'Button 2 Text',
				'name' => 'hero_button2_text',
				'type' => 'text',
				'default_value' => 'Watch Intro',
				'placeholder' => 'Watch Intro',
			),
			array(
				'key' => 'field_hero_button2_link',
				'label' => 'Button 2 Link',
				'name' => 'hero_button2_link',
				'type' => 'url',
				'placeholder' => 'https://example.com',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 6,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_hero_fields' );

/**
 * Register CTA Section ACF Fields
 */
function businessorange_register_cta_fields() {
	// Check if ACF is active
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	
	acf_add_local_field_group( array(
		'key' => 'group_cta_section',
		'title' => 'CTA Section',
		'fields' => array(
			array(
				'key' => 'field_cta_title',
				'label' => 'Title',
				'name' => 'cta_title',
				'type' => 'text',
				'default_value' => 'We love to make perfect\nsolutions for your business',
				'placeholder' => 'We love to make perfect\nsolutions for your business',
			),
			array(
				'key' => 'field_cta_description',
				'label' => 'Description',
				'name' => 'cta_description',
				'type' => 'textarea',
				'rows' => 3,
				'default_value' => 'Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut.',
			),
			array(
				'key' => 'field_cta_button_text',
				'label' => 'Button Text',
				'name' => 'cta_button_text',
				'type' => 'text',
				'default_value' => 'Get Started',
				'placeholder' => 'Get Started',
			),
			array(
				'key' => 'field_cta_button_link',
				'label' => 'Button Link',
				'name' => 'cta_button_link',
				'type' => 'url',
				'placeholder' => 'https://example.com',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
		),
		'menu_order' => 7,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
	));
}
add_action( 'acf/init', 'businessorange_register_cta_fields' );

