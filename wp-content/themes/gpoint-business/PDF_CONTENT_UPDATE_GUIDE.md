# Hướng dẫn cập nhật nội dung từ PDF

File PDF "Website G.Point - Price.pdf" cần được đọc và cập nhật nội dung vào các Customizer settings trong WordPress.

## Cách truy cập Customizer

1. Đăng nhập vào WordPress Admin
2. Vào **Appearance > Customize** (hoặc **Giao diện > Tùy chỉnh**)
3. Tìm các section tương ứng trong sidebar bên trái

## Các section cần cập nhật:

### 1. Hero Section
- **Setting**: `hero_title` - Tiêu đề chính
- **Setting**: `hero_description` - Mô tả
- **Setting**: `hero_button1_text` - Text nút 1
- **Setting**: `hero_button1_link` - Link nút 1
- **Setting**: `hero_button2_text` - Text nút 2
- **Setting**: `hero_button2_link` - Link nút 2

### 2. Services Section
- **Setting**: `services_subtitle` - Phụ đề
- **Setting**: `services_title` - Tiêu đề section
- **Setting**: `services_description` - Mô tả
- **Setting**: `services_list` - Danh sách services (JSON format)
  - Format JSON: `[{"icon_class":"lni lni-capsule","title":"Service Title","description":"Service description"}]`
  - Icon class sử dụng LineIcons (ví dụ: lni lni-capsule)

### 3. Pricing Section
- **Setting**: `pricing_subtitle` - Phụ đề
- **Setting**: `pricing_title` - Tiêu đề section
- **Setting**: `pricing_description` - Mô tả
- **Setting**: `pricing_plans` - Danh sách gói giá (JSON format)
  - Format JSON: `[{"name":"Starter","price":"$99/mo","description":"Plan description","features":[{"text":"Feature 1"}],"button_text":"Start trial","button_link":"#","featured":false}]`
  - `featured`: true/false để đánh dấu gói nổi bật

### 4. About Section
- **Setting**: `about_subtitle` - Phụ đề
- **Setting**: `about_title` - Tiêu đề
- **Setting**: `who_we_are` - Nội dung "Who We Are" (HTML được phép)
- **Setting**: `vision` - Nội dung "Vision" (HTML được phép)
- **Setting**: `history` - Nội dung "History" (HTML được phép)

### 5. Contact Section
- **Setting**: `contact_phone` - Số điện thoại
- **Setting**: `contact_email` - Email
- **Setting**: `contact_address` - Địa chỉ (dùng \n để xuống dòng)
- **Setting**: `contact_schedule` - Lịch làm việc (dùng \n để xuống dòng)
- **Setting**: `contact_form_title` - Tiêu đề form
- **Setting**: `contact_form_description` - Mô tả form

### 6. CTA Section
- **Setting**: `cta_title` - Tiêu đề (dùng \n để xuống dòng)
- **Setting**: `cta_description` - Mô tả
- **Setting**: `cta_button_text` - Text nút
- **Setting**: `cta_button_link` - Link nút

### 7. Blog Section
- **Setting**: `blog_subtitle` - Phụ đề
- **Setting**: `blog_title` - Tiêu đề
- **Setting**: `blog_description` - Mô tả
- **Setting**: `blog_posts` - Danh sách bài viết (JSON format)
  - Format JSON: `[{"title":"Post Title","author":"BY TIM NORTON","excerpt":"Post excerpt","image":"url","link":"url"}]`

### 8. Clients Section
- **Setting**: `clients_subtitle` - Phụ đề
- **Setting**: `clients_title` - Tiêu đề
- **Setting**: `clients_description` - Mô tả
- **Setting**: `clients_list` - Danh sách logo khách hàng (JSON format)
  - Format JSON: `[{"logo":"url"}]`

## Cách cập nhật:

1. Mở file PDF "Website G.Point - Price.pdf"
2. Đọc nội dung từng section
3. Vào WordPress Admin > Appearance > Customize
4. Tìm section tương ứng trong sidebar
5. Cập nhật nội dung từ PDF vào các settings
6. Click "Publish" để lưu thay đổi

## Lưu ý:

- **JSON Format**: Các trường như `services_list`, `pricing_plans`, `blog_posts`, `clients_list` sử dụng định dạng JSON
- **Line Breaks**: Sử dụng `\n` để xuống dòng trong các trường text
- **HTML**: Các trường About section (`who_we_are`, `vision`, `history`) hỗ trợ HTML
- **Icon Classes**: Sử dụng LineIcons (ví dụ: `lni lni-capsule`)
- **Image URLs**: Có thể sử dụng URL đầy đủ hoặc URL tương đối từ theme

## Ví dụ JSON:

### Services List:
```json
[
  {
    "icon_class": "lni lni-capsule",
    "title": "Refreshing Design",
    "description": "Lorem ipsum dolor sit amet..."
  },
  {
    "icon_class": "lni lni-bootstrap",
    "title": "Solid Bootstrap 5",
    "description": "Lorem ipsum dolor sit amet..."
  }
]
```

### Pricing Plans:
```json
[
  {
    "name": "Starter",
    "price": "$0/mo",
    "description": "Perfect for beginners",
    "features": [
      {"text": "Feature 1"},
      {"text": "Feature 2"}
    ],
    "button_text": "Start free trial",
    "button_link": "#",
    "featured": false
  }
]
```
