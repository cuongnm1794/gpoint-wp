<?php
/**
 * Customizer Settings for GPoint Business Theme
 * 
 * Replaces ACF fields with WordPress Customizer API
 *
 * @package GPoint_Business
 * @since GPoint Business 1.0.0
 */

/**
 * Register customizer settings for all sections
 */
function gpoint_business_customize_register( $wp_customize ) {
	
	// Hero Section
	$wp_customize->add_section( 'gpoint_hero_section', array(
		'title'    => __( 'Hero Section', 'gpoint-business' ),
		'priority' => 10,
	) );
	
	$wp_customize->add_setting( 'hero_title', array(
		'default'           => 'Một CHẠM đến mọi điểm tiếp thị',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'hero_title', array(
		'label'   => __( 'Title', 'gpoint-business' ),
		'section' => 'gpoint_hero_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'hero_description', array(
		'default'           => 'Hệ sinh thái quản lý nghiệp vụ toàn diện các hoạt động khuyến mãi bán hàng tại điểm bán từ OFFLINE đến ONLINE',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'hero_description', array(
		'label'   => __( 'Description', 'gpoint-business' ),
		'section' => 'gpoint_hero_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'hero_button1_text', array(
		'default'           => 'VỀ CHÚNG TÔI',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'hero_button1_text', array(
		'label'   => __( 'Button 1 Text', 'gpoint-business' ),
		'section' => 'gpoint_hero_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'hero_button1_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'hero_button1_link', array(
		'label'   => __( 'Button 1 Link', 'gpoint-business' ),
		'section' => 'gpoint_hero_section',
		'type'    => 'url',
	) );
	
	$wp_customize->add_setting( 'hero_button2_text', array(
		'default'           => 'LIÊN HỆ',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'hero_button2_text', array(
		'label'   => __( 'Button 2 Text', 'gpoint-business' ),
		'section' => 'gpoint_hero_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'hero_button2_link', array(
		'default'           => 'https://www.youtube.com/watch?v=r44RKWyfcFw',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'hero_button2_link', array(
		'label'   => __( 'Button 2 Link', 'gpoint-business' ),
		'section' => 'gpoint_hero_section',
		'type'    => 'url',
	) );
	
	// Services Section
	$wp_customize->add_section( 'gpoint_services_section', array(
		'title'    => __( 'Services Section', 'gpoint-business' ),
		'priority' => 20,
	) );
	
	$wp_customize->add_setting( 'services_subtitle', array(
		'default'           => 'Tính năng',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'services_subtitle', array(
		'label'   => __( 'Section Subtitle', 'gpoint-business' ),
		'section' => 'gpoint_services_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'services_title', array(
		'default'           => 'Tính năng nổi bật',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'services_title', array(
		'label'   => __( 'Section Title', 'gpoint-business' ),
		'section' => 'gpoint_services_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'services_description', array(
		'default'           => 'G-Point giúp doanh nghiệp kiểm soát, tối ưu và nâng cao hiệu quả mọi hoạt động khuyến mãi O2O',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'services_description', array(
		'label'   => __( 'Section Description', 'gpoint-business' ),
		'section' => 'gpoint_services_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'services_list', array(
		'default'           => '[{"icon_class":"lni lni-dashboard","title":"Giám Sát Realtime","description":"Theo dõi hoạt động của PG/Sup trực tiếp tại điểm bán với dữ liệu thời gian thực – giúp kiểm soát và điều chỉnh chiến dịch tức thì."},{"icon_class":"lni lni-checkmark-circle","title":"Minh Bạch Dữ Liệu","description":"Mọi hoạt động đều có bằng chứng xác thực (ảnh, GPS, thời gian check-in/out) – loại bỏ báo cáo sai lệch và tăng độ tin cậy."},{"icon_class":"lni lni-layers","title":"Nền Tảng Kết Nối Thống Nhất","description":"PG, Supervisor và Client được đồng bộ trên một hệ thống duy nhất – giảm phân mảnh và tăng hiệu quả phối hợp."},{"icon_class":"lni lni-bolt","title":"Hiệu Quả Kích Hoạt Cao","description":"Toàn bộ dữ liệu từ phát quà, tham gia, đến phản hồi người dùng đều được ghi nhận tự động – giúp đo lường ROI chính xác."},{"icon_class":"lni lni-money-protection","title":"Tối Ưu Chi Phí Quản Lý","description":"Báo cáo realtime giúp thương hiệu giảm nhu cầu giám sát trực tiếp, cắt giảm chi phí vận hành và thất thoát ngân sách."},{"icon_class":"lni lni-database","title":"Dữ Liệu Tập Trung – Phân Tích Dễ Dàng","description":"Tất cả dữ liệu khách hàng, hình ảnh, giao dịch được lưu trên một nền tảng – dễ dàng tích hợp CRM và hỗ trợ hoạch định chiến lược dài hạn."}]',
		'sanitize_callback' => 'gpoint_business_sanitize_json',
	) );
	
	$wp_customize->add_control( 'services_list', array(
		'label'       => __( 'Services List (JSON)', 'gpoint-business' ),
		'description' => __( 'Enter services as JSON array. Example: [{"icon_class":"lni lni-capsule","title":"Service Title","description":"Service description"}]', 'gpoint-business' ),
		'section'     => 'gpoint_services_section',
		'type'        => 'textarea',
	) );
	
	// Pricing Section
	$wp_customize->add_section( 'gpoint_pricing_section', array(
		'title'    => __( 'Pricing Section', 'gpoint-business' ),
		'priority' => 30,
	) );
	
	$wp_customize->add_setting( 'pricing_subtitle', array(
		'default'           => 'Bảng Giá',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'pricing_subtitle', array(
		'label'   => __( 'Section Subtitle', 'gpoint-business' ),
		'section' => 'gpoint_pricing_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'pricing_title', array(
		'default'           => 'GÓI GIÁ PHẦN MỀM DỊCH VỤ G-POINT',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'pricing_title', array(
		'label'   => __( 'Section Title', 'gpoint-business' ),
		'section' => 'gpoint_pricing_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'pricing_description', array(
		'default'           => 'Trải nghiệm miễn phí 15 ngày với đầy đủ tính năng của hệ thống G-Point — giúp bạn đánh giá hiệu quả trước khi triển khai thực tế.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'pricing_description', array(
		'label'   => __( 'Section Description', 'gpoint-business' ),
		'section' => 'gpoint_pricing_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'pricing_plans', array(
		'default'           => '[{"name":"Gói Cơ Bản","price":"1.900.000 VND / tháng","description":"Giải pháp phù hợp cho doanh nghiệp vừa, giúp quản lý và giám sát hoạt động khuyến mãi hiệu quả trên nhiều điểm bán.","features":[{"text":"✅ 10 tài khoản User (PG/Sup)"},{"text":"✅ 10 điểm bán hàng"},{"text":"✅ 5.000 khách hàng"},{"text":"✅ 10.000 hóa đơn"},{"text":"✅ Dung lượng lưu trữ 10 GB"}],"button_text":"ĐĂNG KÝ NGAY","button_link":"#","featured":false},{"name":"Gói Tiêu Chuẩn","price":"3.900.000 VND / tháng","description":"Gói toàn diện với đầy đủ tính năng quản trị, phù hợp cho thương hiệu triển khai chiến dịch O2O quy mô lớn.","features":[{"text":"✅ 25 tài khoản User (PG/Sup)"},{"text":"✅ 30 điểm bán hàng"},{"text":"✅ 20.000 khách hàng"},{"text":"✅ 100.000 hóa đơn"},{"text":"✅ Dung lượng lưu trữ 20 GB"}],"button_text":"ĐĂNG KÝ NGAY","button_link":"#","featured":true},{"name":"Gói Cao Cấp","price":"6.900.000 VND / tháng","description":"Gói cao cấp dành cho doanh nghiệp lớn, tích hợp hệ thống giám sát và báo cáo nâng cao.","features":[{"text":"✅ 100 tài khoản User (PG/Sup)"},{"text":"✅ 100 điểm bán hàng"},{"text":"✅ 100.000 khách hàng"},{"text":"✅ 1.000.000 hóa đơn"},{"text":"✅ Dung lượng lưu trữ: 100GB"}],"button_text":"ĐĂNG KÝ NGAY","button_link":"#","featured":false}]',
		'sanitize_callback' => 'gpoint_business_sanitize_json',
	) );
	
	$wp_customize->add_control( 'pricing_plans', array(
		'label'       => __( 'Pricing Plans (JSON)', 'gpoint-business' ),
		'description' => __( 'Enter pricing plans as JSON array. Example: [{"name":"Starter","price":"$0/mo","description":"Plan description","features":[{"text":"Feature 1"}],"button_text":"Start trial","button_link":"#","featured":false}]', 'gpoint-business' ),
		'section'     => 'gpoint_pricing_section',
		'type'        => 'textarea',
	) );
	
	// About Section
	$wp_customize->add_section( 'gpoint_about_section', array(
		'title'    => __( 'About Section', 'gpoint-business' ),
		'priority' => 40,
	) );
	
	$wp_customize->add_setting( 'about_subtitle', array(
		'default'           => 'VỀ CHÚNG TÔI',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'about_subtitle', array(
		'label'   => __( 'Section Subtitle', 'gpoint-business' ),
		'section' => 'gpoint_about_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'about_title', array(
		'default'           => 'HỆ THỐNG QUẢN LÝ VẬN HÀNH TOÀN DIỆN HOẠT ĐỘNG TẠI ĐIỂM BÁN O2O',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'about_title', array(
		'label'   => __( 'Section Title', 'gpoint-business' ),
		'section' => 'gpoint_about_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'who_we_are', array(
		'default'           => '<h4>Giải Pháp O2O Toàn Diện Cho Doanh Nghiệp</h4><p>Nền tảng số hóa và giám sát realtime giúp doanh nghiệp minh bạch hóa và tối ưu mọi hoạt động khuyến mãi.</p><ul><li><strong>Công nghệ chuyên biệt:</strong> Module riêng cho Client, Sup, PG – xử lý triệt để quy trình Activation/Promotion.</li><li><strong>Kiểm soát O2O toàn diện:</strong> Quản lý khuyến mãi từ Offline (sampling, trao thưởng) đến Online (minigame, quay số), kết nối dữ liệu xuyên kênh.</li><li><strong>Dịch vụ kép:</strong> Cung cấp đồng thời hệ thống & dịch vụ vận hành, giúp thương hiệu triển khai nhanh và hiệu quả.</li></ul><p>GAPIT – Đồng hành cùng doanh nghiệp trong chuyển đổi số hoạt động khuyến mãi, tối ưu chi phí và gia tăng tương tác khách hàng.</p>',
		'sanitize_callback' => 'wp_kses_post',
	) );
	
	$wp_customize->add_control( 'who_we_are', array(
		'label'   => __( 'Who We Are Content', 'gpoint-business' ),
		'section' => 'gpoint_about_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'vision', array(
		'default'           => '<h4>Sứ mệnh</h4><p>Giúp doanh nghiệp xóa nhòa khoảng cách với khách hàng thông qua các dịch vụ tiếp thị số</p>',
		'sanitize_callback' => 'wp_kses_post',
	) );
	
	$wp_customize->add_control( 'vision', array(
		'label'   => __( 'Our Vision Content', 'gpoint-business' ),
		'section' => 'gpoint_about_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'history', array(
		'default'           => '<h4>Tầm nhìn</h4><p>Trở thành công ty truyền thông hàng đậu tại Đông Nam Á cung cấp dịch vụ quản trị thực thi hoạt động Marketing đa kênh trên nền tảng thông minh</p>',
		'sanitize_callback' => 'wp_kses_post',
	) );
	
	$wp_customize->add_control( 'history', array(
		'label'   => __( 'Our History Content', 'gpoint-business' ),
		'section' => 'gpoint_about_section',
		'type'    => 'textarea',
	) );
	
	// Contact Section
	$wp_customize->add_section( 'gpoint_contact_section', array(
		'title'    => __( 'Contact Section', 'gpoint-business' ),
		'priority' => 50,
	) );
	
	$wp_customize->add_setting( 'contact_phone', array(
		'default'           => '024 3512 1928',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'contact_phone', array(
		'label'   => __( 'Phone', 'gpoint-business' ),
		'section' => 'gpoint_contact_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'contact_email', array(
		'default'           => 'info@gapit.com.vn',
		'sanitize_callback' => 'sanitize_email',
	) );
	
	$wp_customize->add_control( 'contact_email', array(
		'label'   => __( 'Email', 'gpoint-business' ),
		'section' => 'gpoint_contact_section',
		'type'    => 'email',
	) );
	
	$wp_customize->add_setting( 'contact_address', array(
		'default'           => 'Văn phòng Hà Nội:\nPhòng 2106, Tầng 21, Số 459C Bạch Mai, Phường Bạch Mai, Thành phố Hà Nội\n\nVăn phòng TP. Hồ Chí Minh:\nTầng 2, Tòa nhà Sông Đà, 14B Kỳ Đồng, Phường Nhiêu Lộc, Thành phố Hồ Chí Minh\n\nVăn phòng Myanmar:\nSố 9, Tầng 2, Đường Shwe Taung Tan, Yangon, Myanmar',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'contact_address', array(
		'label'       => __( 'Address', 'gpoint-business' ),
		'description' => __( 'Use \n for line breaks', 'gpoint-business' ),
		'section'     => 'gpoint_contact_section',
		'type'        => 'textarea',
	) );
	
	$wp_customize->add_setting( 'contact_schedule', array(
		'default'           => '24 Giờ / 7 ngày mở\nVăn Phòng : 8 AM - 5:30 PM',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'contact_schedule', array(
		'label'       => __( 'Schedule', 'gpoint-business' ),
		'description' => __( 'Use \n for line breaks', 'gpoint-business' ),
		'section'     => 'gpoint_contact_section',
		'type'        => 'textarea',
	) );
	
	$wp_customize->add_setting( 'contact_form_title', array(
		'default'           => 'Sẵn sàng để bắt đầu',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'contact_form_title', array(
		'label'   => __( 'Form Title', 'gpoint-business' ),
		'section' => 'gpoint_contact_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'contact_form_description', array(
		'default'           => 'Hãy để lại thông tin, đội ngũ GAPIT sẽ phản hồi trong 24 giờ.\nTặng demo & dùng thử miễn phí 15 ngày.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'contact_form_description', array(
		'label'   => __( 'Form Description', 'gpoint-business' ),
		'section' => 'gpoint_contact_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'contact_form_7_shortcode', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'contact_form_7_shortcode', array(
		'label'       => __( 'Contact Form 7 Shortcode', 'gpoint-business' ),
		'description' => __( 'Nhập shortcode của Contact Form 7 (ví dụ: [contact-form-7 id="123" title="Contact form"]). Để trống nếu muốn dùng form HTML mặc định.', 'gpoint-business' ),
		'section'     => 'gpoint_contact_section',
		'type'        => 'text',
	) );
	
	// CTA Section
	$wp_customize->add_section( 'gpoint_cta_section', array(
		'title'    => __( 'CTA Section', 'gpoint-business' ),
		'priority' => 60,
	) );
	
	$wp_customize->add_setting( 'cta_title', array(
		'default'           => 'Chúng tôi mang đến giải pháp công nghệ giúp doanh nghiệp tối ưu mọi hoạt động khuyến mãi',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'cta_title', array(
		'label'       => __( 'Title', 'gpoint-business' ),
		'description' => __( 'Use \n for line breaks', 'gpoint-business' ),
		'section'     => 'gpoint_cta_section',
		'type'        => 'text',
	) );
	
	$wp_customize->add_setting( 'cta_description', array(
		'default'           => 'Từ quản lý PG/Sup đến giám sát realtime và kết nối dữ liệu giữa các kênh, G-Point giúp thương hiệu triển khai chiến dịch hiệu quả, minh bạch và dễ dàng hơn bao giờ hết.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'cta_description', array(
		'label'   => __( 'Description', 'gpoint-business' ),
		'section' => 'gpoint_cta_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'cta_button_text', array(
		'default'           => 'ĐĂNG KÝ NGAY',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'cta_button_text', array(
		'label'   => __( 'Button Text', 'gpoint-business' ),
		'section' => 'gpoint_cta_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'cta_button_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'cta_button_link', array(
		'label'   => __( 'Button Link', 'gpoint-business' ),
		'section' => 'gpoint_cta_section',
		'type'    => 'url',
	) );
	
	// Blog Section
	$wp_customize->add_section( 'gpoint_blog_section', array(
		'title'    => __( 'Blog Section', 'gpoint-business' ),
		'priority' => 70,
	) );
	
	$wp_customize->add_setting( 'blog_subtitle', array(
		'default'           => 'Tin tức',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'blog_subtitle', array(
		'label'   => __( 'Section Subtitle', 'gpoint-business' ),
		'section' => 'gpoint_blog_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'blog_title', array(
		'default'           => 'Bản tin & Blog mới',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'blog_title', array(
		'label'   => __( 'Section Title', 'gpoint-business' ),
		'section' => 'gpoint_blog_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'blog_description', array(
		'default'           => 'Luôn cập nhật xu hướng tiếp thị và công nghệ mới nhất giúp doanh nghiệp tối ưu hoạt động khuyến mãi O2O.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'blog_description', array(
		'label'   => __( 'Section Description', 'gpoint-business' ),
		'section' => 'gpoint_blog_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'blog_posts', array(
		'default'           => '[{"title":"Lợi ích không thể bỏ qua của chiến lược phân phát mẫu thử","author":"BY GAPIT","excerpt":"Theo báo cáo gần đây của Sampling Effectiveness Advisors: 73% người tiêu dùng nói rằng họ có thể mua hàng sau khi trải nghiệm thử sản phẩm và chỉ 25% người tiêu dùng cho rằng quyết định mua của họ bị ảnh hưởng bởi quảng cáo truyền hình. Khi bạn khích lệ được nhiều...","image":"","link":"#"},{"title":"Hành trình 2 năm - Học bổng thắp sáng ước mơ","author":"BY GAPIT","excerpt":"Khi ước mơ được gieo mầm từ những điều nhỏ bé. Từ năm 2016, chương trình Học bổng Colgate ra đời với mong muốn tất cả mọi trẻ em Việt đều xứng đáng sở hữu nụ cười thật tươi trước một tương lai tươi sáng hơn. Để hiện thực hóa điều này, trong hai năm qua, Colgate đã nỗ...","image":"","link":"#"},{"title":"MCKINSEY Gợi ý 4 bước kích hoạt dữ liệu để tối ưu tiếp thị","author":"BY GAPIT","excerpt":"Theo nghiên cứu của McKinsey, kích hoạt dữ liệu (data activation) có thể thúc đẩy doanh số bán hàng của doanh nghiệp tăng lên 15-20%, doanh số của kênh kỹ thuật số thậm chí còn tăng nhiều hơn, đồng thời cải thiện đáng kể ROI cho mỗi kênh tiếp thị. Jane là một bà nội...","image":"","link":"#"}]',
		'sanitize_callback' => 'gpoint_business_sanitize_json',
	) );
	
	$wp_customize->add_control( 'blog_posts', array(
		'label'       => __( 'Blog Posts (JSON)', 'gpoint-business' ),
		'description' => __( 'Enter blog posts as JSON array. Example: [{"title":"Post Title","author":"BY TIM NORTON","excerpt":"Post excerpt","image":"url","link":"url"}]', 'gpoint-business' ),
		'section'     => 'gpoint_blog_section',
		'type'        => 'textarea',
	) );
	
	// Clients Section
	$wp_customize->add_section( 'gpoint_clients_section', array(
		'title'    => __( 'Clients Section', 'gpoint-business' ),
		'priority' => 80,
	) );
	
	$wp_customize->add_setting( 'clients_subtitle', array(
		'default'           => 'G-Point',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'clients_subtitle', array(
		'label'   => __( 'Section Subtitle', 'gpoint-business' ),
		'section' => 'gpoint_clients_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'clients_title', array(
		'default'           => 'G-point đã phục vụ',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'clients_title', array(
		'label'   => __( 'Section Title', 'gpoint-business' ),
		'section' => 'gpoint_clients_section',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'clients_description', array(
		'default'           => 'Hơn 500 doanh nghiệp tin dùng trên toàn quốc',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'clients_description', array(
		'label'   => __( 'Section Description', 'gpoint-business' ),
		'section' => 'gpoint_clients_section',
		'type'    => 'textarea',
	) );
	
	$wp_customize->add_setting( 'clients_list', array(
		'default'           => '',
		'sanitize_callback' => 'gpoint_business_sanitize_json',
	) );
	
	$wp_customize->add_control( 'clients_list', array(
		'label'       => __( 'Clients List (JSON)', 'gpoint-business' ),
		'description' => __( 'Enter client logos as JSON array. Example: [{"logo":"url"}]', 'gpoint-business' ),
		'section'     => 'gpoint_clients_section',
		'type'        => 'textarea',
	) );
}
add_action( 'customize_register', 'gpoint_business_customize_register' );

/**
 * Sanitize JSON input
 */
function gpoint_business_sanitize_json( $input ) {
	$decoded = json_decode( $input, true );
	if ( json_last_error() === JSON_ERROR_NONE ) {
		return $input;
	}
	return '';
}

/**
 * Helper function to get theme mod with default value
 */
function gpoint_business_get_theme_mod( $setting, $default = '' ) {
	return get_theme_mod( $setting, $default );
}

/**
 * Helper function to get JSON setting as array
 */
function gpoint_business_get_json_setting( $setting, $default = array() ) {
	$value = get_theme_mod( $setting, '' );
	if ( empty( $value ) ) {
		return $default;
	}
	$decoded = json_decode( $value, true );
	if ( json_last_error() === JSON_ERROR_NONE && is_array( $decoded ) ) {
		return $decoded;
	}
	return $default;
}

