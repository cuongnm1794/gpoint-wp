# Hướng dẫn cập nhật nội dung từ PDF

File PDF "Website G.Point - Price.pdf" cần được đọc và cập nhật nội dung vào các ACF fields trong WordPress.

## Các section cần cập nhật:

### 1. Hero Section
- **Field**: `hero_title` - Tiêu đề chính
- **Field**: `hero_description` - Mô tả
- **Field**: `hero_button1_text` - Text nút 1
- **Field**: `hero_button1_link` - Link nút 1
- **Field**: `hero_button2_text` - Text nút 2
- **Field**: `hero_button2_link` - Link nút 2

### 2. Services Section
- **Field**: `services_title` - Tiêu đề section
- **Field**: `services_subtitle` - Phụ đề
- **Field**: `services_description` - Mô tả
- **Repeater**: `services_list` - Danh sách services
  - `icon` - Icon/ảnh service
  - `title` - Tiêu đề service
  - `description` - Mô tả service

### 3. Pricing Section
- **Field**: `pricing_title` - Tiêu đề section
- **Field**: `pricing_subtitle` - Phụ đề
- **Field**: `pricing_description` - Mô tả
- **Repeater**: `pricing_plans` - Danh sách gói giá
  - `name` - Tên gói
  - `price` - Giá
  - `description` - Mô tả
  - `features` - Danh sách tính năng (repeater)
  - `button_text` - Text nút
  - `button_link` - Link nút
  - `featured` - Gói nổi bật (true/false)

### 4. About Section (OUR STORY)
- **Field**: `our_story_title` - Tiêu đề
- **Field**: `our_story_subtitle` - Phụ đề
- **Field**: `who_we_are` - Nội dung "Who We Are"
- **Field**: `vision` - Nội dung "Vision"
- **Field**: `history` - Nội dung "History"

### 5. Contact Section
- **Field**: `contact_phone` - Số điện thoại
- **Field**: `contact_email` - Email
- **Field**: `contact_address` - Địa chỉ
- **Field**: `contact_schedule` - Lịch làm việc
- **Field**: `contact_form_title` - Tiêu đề form
- **Field**: `contact_form_description` - Mô tả form

### 6. CTA Section
- **Field**: `cta_title` - Tiêu đề
- **Field**: `cta_description` - Mô tả
- **Field**: `cta_button_text` - Text nút
- **Field**: `cta_button_link` - Link nút

### 7. Blog Section
- **Field**: `blog_subtitle` - Phụ đề
- **Field**: `blog_title` - Tiêu đề
- **Field**: `blog_description` - Mô tả
- **Repeater**: `blog_posts` - Danh sách bài viết
  - `image` - Ảnh đại diện
  - `title` - Tiêu đề
  - `author` - Tác giả
  - `excerpt` - Tóm tắt
  - `link` - Link bài viết

### 8. Clients Section
- **Field**: `clients_subtitle` - Phụ đề
- **Field**: `clients_title` - Tiêu đề
- **Field**: `clients_description` - Mô tả
- **Repeater**: `clients_list` - Danh sách logo khách hàng
  - `logo` - Logo khách hàng

## Cách cập nhật:

1. Mở file PDF "Website G.Point - Price.pdf"
2. Đọc nội dung từng section
3. Vào WordPress Admin > Pages > Chọn page cần cập nhật
4. Scroll xuống các ACF field groups tương ứng
5. Cập nhật nội dung từ PDF vào các fields
6. Lưu page

## Lưu ý:
- Các repeater fields cho phép thêm/xóa items
- Image fields có thể upload ảnh trực tiếp
- WYSIWYG fields hỗ trợ định dạng rich text

