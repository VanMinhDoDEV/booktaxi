<?php 


function vm_setup_theme(){
  add_theme_support('post-thumbnails');
  add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
  add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
  add_filter('use_block_editor_for_post', '__return_false');
  // Đăng ký sidebar
  if (function_exists('register_sidebar')){
    register_sidebar(array(
      'name'=> __( 'Sidebar', 'minweb' ),
      'id' => 'sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  => "</div>",
      'before_title'  => '<h3 class="title">',
      'after_title'   => "</h3>",
    ));
  }
  // Đăng ký menu
  register_nav_menus(
    array(
      'main_nav' => __( 'Menu chính', 'minweb' ),
      'menu_footer1' => __( 'Menu footer 1', 'minweb' ),
      'menu_footer2' => __( 'Menu footer 2', 'minweb' ),
      'menu_footer' => __( 'Menu footer 3', 'minweb' )

    )
  );
}
add_action('init','vm_setup_theme');

function init_css_js(){
    // link css
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0' );
    wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0' );
    wp_enqueue_style( 'fontawesome-min', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '1.0' );
    wp_enqueue_style( 'line-awesome', get_template_directory_uri() . '/assets/css/line-awesome.min.css', array(), '1.0' );
    wp_enqueue_style( 'keyframe-animation', get_template_directory_uri() . '/assets/css/keyframe-animation.css', array(), '1.0' );
    wp_enqueue_style( 'datetimepicker-min', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css', array(), '1.0' );
    wp_enqueue_style( 'venobox-min', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0' );
    wp_enqueue_style( 'swiper-min', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0' );
    wp_enqueue_style( 'elements', get_template_directory_uri() . '/assets/css/elements.css"', array(), '1.0' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.0' );
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/slider.css', array(), '1.0' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.0' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );

    
      // link js
    wp_enqueue_script( 'jquary-3.6.0-min', get_template_directory_uri() . '/assets/js/vendor/jquary-3.6.0.min.js', array(), '1.0', true );
    wp_enqueue_script( 'modernizr-2.8.3-respond', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), '1.0', true );
    wp_enqueue_script( 'jquery-ajaxchimp-min', get_template_directory_uri() . '/assets/js/vendor/jquery.ajaxchimp.min.js', array(), '1.0', true );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), '1.0', true );
    wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), '1.0', true );
    wp_enqueue_script( 'swiper-min', get_template_directory_uri() . '/assets/js/vendor/swiper.min.js', array(), '1.0', true );
    wp_enqueue_script( 'jquery-datetimepicker-full', get_template_directory_uri() . '/assets/js/vendor/jquery.datetimepicker.full.js', array(), '1.0', true );
    wp_enqueue_script( 'jquery-nice-select-min', get_template_directory_uri() . '/assets/js/vendor/jquery.nice-select.min.js', array(), '1.0', true );
    wp_enqueue_script( 'venobox-min', get_template_directory_uri() . '/assets/js/vendor/venobox.min.js', array(), '1.0', true );
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/vendor/smooth-scroll.js', array(), '1.0', true );
    wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', array(), '1.0', true );
    // wp_enqueue_script( 'book-ride', get_template_directory_uri() . '/assets/js/book-ride.js', array(), '1.0', true );
    wp_enqueue_script( 'book', get_template_directory_uri() . '/assets/js/book.js', array(), '1.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
  add_action( 'wp_enqueue_scripts', 'init_css_js' );

  function dd($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
  }

  function create_vehicle_post_type() {
    $labels = array(
      'name' => 'Xe',
      'singular_name' => 'Xe',
      'add_new' => 'Thêm Xe',
      'add_new_item' => 'Thêm Xe Mới',
      'edit_item' => 'Chỉnh Sửa Xe',
      'new_item' => 'Xe Mới',
      'view_item' => 'Xem Xe',
      'search_items' => 'Tìm kiếm Xe',
      'not_found' => 'Không tìm thấy Xe',
      'not_found_in_trash' => 'Không tìm thấy Xe trong thùng rác',
      'parent_item_colon' => 'Xe cha:',
      'menu_name' => 'Xe',
    );
  
    $args = array(
      'labels' => $labels,
      'hierarchical' => false,
      'description' => 'Các loại xe',
      'supports' => array( 'title', 'thumbnail' ),
      'public' => true,
      'show_ui' => true,
      'menu_icon' => 'dashicons-car',
      'show_in_menu' => true,
      'menu_position' => 5,
      'show_in_nav_menus' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'xe' ),
      'capability_type' => 'post',
    );
  
    register_post_type( 'vehicle', $args );
  }
  add_action( 'init', 'create_vehicle_post_type' );
  
  // Hàm callback để tạo custom taxonomy "loai_xe"
function create_vehicle_taxonomy() {
  $labels = array(
    'name'                       => 'Loại xe',
    'singular_name'              => 'Loại xe',
    'menu_name'                  => 'Loại xe'
  );

  $args = array(
    'labels'            => $labels,
    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'loai-xe' ),
  );

  register_taxonomy( 'loai_xe', 'vehicle', $args );
}
add_action( 'init', 'create_vehicle_taxonomy', 0 );



// Hàm callback để lưu giá trị của các trường khi lưu post
function save_vehicle_metabox_data( $post_id ) {
  // Kiểm tra trạng thái lưu
  if ( ! isset( $_POST['vehicle_metabox_nonce'] ) || ! wp_verify_nonce( $_POST['vehicle_metabox_nonce'], 'vehicle_metabox' ) ) {
    return;
  }

  // Kiểm tra quyền truy cập
  if ( ! current_user_can( 'edit_post', $post_id ) ) {
    return;
  }

  // Lưu giá trị của các trường
  if ( isset( $_POST['vehicle_title'] ) ) {
    update_post_meta( $post_id, 'vehicle_title', sanitize_text_field( $_POST['vehicle_title'] ) );
  }
  if ( isset( $_POST['vehicle_price_one_way'] ) ) {
    update_post_meta( $post_id, 'vehicle_price_one_way', sanitize_text_field( $_POST['vehicle_price_one_way'] ) );
  }
  if ( isset( $_POST['vehicle_price_round_trip'] ) ) {
    update_post_meta( $post_id, 'vehicle_price_round_trip', sanitize_text_field( $_POST['vehicle_price_round_trip'] ) );
  }
  if ( isset( $_POST['vehicle_num_stops'] ) ) {
    update_post_meta( $post_id, 'vehicle_num_stops', sanitize_text_field( $_POST['vehicle_num_stops'] ) );
  }
  if ( isset( $_POST['vehicle_num_passengers'] ) ) {
    update_post_meta( $post_id, 'vehicle_num_passengers', sanitize_text_field( $_POST['vehicle_num_passengers'] ) );
  }
}

// Hàm callback để thêm metabox vào trang chỉnh sửa bài viết của custom post type "vehicle"
function add_vehicle_metabox() {
  add_meta_box(
    'vehicle_metabox',
    'Thông tin Xe',
    'vehicle_metabox_callback',
    'vehicle',
    'normal',
    'high'
  );
}
add_action( 'add_meta_boxes_vehicle', 'add_vehicle_metabox' );

// Hàm callback để hiển thị nội dung của metabox
function vehicle_metabox_callback( $post ) {
  // Tạo nonce field để bảo vệ
  wp_nonce_field( 'vehicle_metabox', 'vehicle_metabox_nonce' );

  // Lấy giá trị hiện tại của các trường nếu có
  $vehicle_title = get_post_meta( $post->ID, 'vehicle_title', true );
  $vehicle_price_one_way = get_post_meta( $post->ID, 'vehicle_price_one_way', true );
  $vehicle_price_round_trip = get_post_meta( $post->ID, 'vehicle_price_round_trip', true );
  $vehicle_num_stops = get_post_meta( $post->ID, 'vehicle_num_stops', true );
  $vehicle_num_passengers = get_post_meta( $post->ID, 'vehicle_num_passengers', true );
  ?>

  <!-- <label for="vehicle_title">Tiêu đề Xe</label>
  <input type="text" id="vehicle_title" name="vehicle_title" value="<?php echo esc_attr( $vehicle_title ); ?>"> -->

  <label for="vehicle_price_one_way">Giá lượt đi</label>
  <input type="text" id="vehicle_price_one_way" name="vehicle_price_one_way" value="<?php echo esc_attr( $vehicle_price_one_way ); ?>">
  <label for="vehicle_price_round_trip">Giá lượt về</label>
  <input type="text" id="vehicle_price_round_trip" name="vehicle_price_round_trip" value="<?php echo esc_attr( $vehicle_price_round_trip ); ?>">
  <label for="vehicle_num_stops">Số Vali</label>
  <input type="text" id="vehicle_num_stops" name="vehicle_num_stops" value="<?php echo esc_attr( $vehicle_num_stops ); ?>">
  <label for="vehicle_num_passengers">Số hành khách</label>
  <input type="text" id="vehicle_num_passengers" name="vehicle_num_passengers" value="<?php echo esc_attr( $vehicle_num_passengers ); ?>">
  <?php
}
add_action( 'save_post_vehicle', 'save_vehicle_metabox_data' );

function create_reviews_post_type() {
  $labels = array(
    'name' => 'đánh giá',
    'singular_name' => 'đánh giá',
    'add_new' => 'Thêm đánh giá',
    'add_new_item' => 'Thêm đánh giá Mới',
    'edit_item' => 'Chỉnh Sửa đánh giá',
    'new_item' => 'đánh giá Mới',
    'view_item' => 'đánh giám đánh giá',
    'search_items' => 'Tìm kiếm đánh giá',
    'not_found' => 'Không tìm thấy đánh giá',
    'not_found_in_trash' => 'Không tìm thấy đánh giá trong thùng rác',
    'parent_item_colon' => 'đánh giá cha:',
    'menu_name' => 'đánh giá',
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'description' => 'Đánh giá của khách hàng',
    'supports' => array( 'title', 'excerpt', 'thumbnail' ),
    'public' => true,
    'show_ui' => true,
    'menu_icon' => 'dashicons-businessperson',
    'show_in_menu' => true,
    'menu_position' => 6,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'rewrite' => array( 'slug' => 'review' ),
    'capability_type' => 'post',
  );

  register_post_type( 'review', $args );
}
add_action( 'init', 'create_reviews_post_type' );

function add_customer_address_metabox() {
  add_meta_box(
      'customer_address_metabox',
      'Địa chỉ khách hàng',
      'render_customer_address_metabox',
      'review',
      'normal',
      'default'
  );
}

function render_customer_address_metabox($post) {
  // Hiển thị trường nhập địa chỉ khách hàng
  echo '<label for="customer_address">Địa chỉ:</label>';
  echo '<input type="text" id="customer_address" name="customer_address" value="' . esc_attr(get_post_meta($post->ID, 'customer_address', true)) . '" />';
}

function save_customer_address($post_id) {
  // Kiểm tra quyền truy cập và xác thực
  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  // Lưu giá trị của trường địa chỉ khách hàng
  if (isset($_POST['customer_address'])) {
      update_post_meta($post_id, 'customer_address', sanitize_text_field($_POST['customer_address']));
  }
}

add_action('add_meta_boxes_review', 'add_customer_address_metabox');
add_action('save_post_review', 'save_customer_address');



// Tạo trang tùy chỉnh trong trang quản lý admin
function custom_theme_options_page() {
  add_menu_page(
      'Tùy chỉnh Theme',
      'Tùy chỉnh Theme',
      'manage_options',
      'custom-theme-options',
      'render_custom_theme_options'
  );
}
add_action('admin_menu', 'custom_theme_options_page');

// Tạo và hiển thị các metabox trường trên trang tùy chỉnh
function render_custom_theme_options() {
  ?>
  <div class="wrap">
      <h1>Tùy chỉnh Theme</h1>
      <form method="post" action="options.php">
          <?php
          settings_fields('custom-theme-options');
          do_settings_sections('custom-theme-options');
          submit_button();
          ?>
      </form>
  </div>
  <?php
}



function custom_enqueue_scripts() {
  wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'custom_enqueue_scripts');

// Đăng ký các trường metabox và các cài đặt
function register_custom_theme_options() {
  // Đăng ký các trường cho thời gian làm việc
  add_settings_section(
      'work_time_section',
      'Thời gian làm việc',
      'render_work_time_section',
      'custom-theme-options'
  );
  add_settings_field(
      'start_time',
      'Thời gian bắt đầu',
      'render_start_time_field',
      'custom-theme-options',
      'work_time_section'
  );
  add_settings_field(
      'end_time',
      'Thời gian kết thúc',
      'render_end_time_field',
      'custom-theme-options',
      'work_time_section'
  );

  // Đăng ký các trường cho địa chỉ liên hệ
  add_settings_section(
      'contact_section',
      'Địa chỉ liên hệ',
      'render_contact_section',
      'custom-theme-options'
  );
  add_settings_field(
      'address',
      'Địa chỉ',
      'render_address_field',
      'custom-theme-options',
      'contact_section'
  );
  add_settings_field(
      'email',
      'Email',
      'render_email_field',
      'custom-theme-options',
      'contact_section'
  );
  add_settings_field(
      'phone',
      'Số điện thoại',
      'render_phone_field',
      'custom-theme-options',
      'contact_section'
  );

  // Đăng ký các trường cho chèn logo
  add_settings_section(
      'logo_section',
      'Chèn logo',
      'render_logo_section',
      'custom-theme-options'
  );
  add_settings_field(
      'logo',
      'Logo',
      'render_logo_field',
      'custom-theme-options',
      'logo_section'
  );

  // Đăng ký các cài đặt
  register_setting(
      'custom-theme-options',
      'start_time'
  );
  register_setting(
      'custom-theme-options',
      'end_time'
  );
  register_setting(
      'custom-theme-options',
      'address'
  );
  register_setting(
      'custom-theme-options',
      'email'
  );
  register_setting(
      'custom-theme-options',
      'phone'
  );
  register_setting(
      'custom-theme-options',
      'logo'
  );
}
add_action('admin_init', 'register_custom_theme_options');

// Render các trường cho thời gian làm việc
function render_work_time_section() {
  echo '<p>Nhập thời gian làm việc:</p>';
}

function render_start_time_field() {
  $start_time = get_option('start_time');
  echo '<input type="time" name="start_time" value="' . esc_attr($start_time) . '" />';
}

function render_end_time_field() {
  $end_time = get_option('end_time');
  echo '<input type="time" name="end_time" value="' . esc_attr($end_time) . '" />';
}

// Render các trường cho địa chỉ liên hệ
function render_contact_section() {
  echo '<p>Nhập địa chỉ liên hệ:</p>';
}

function render_address_field() {
  $address = get_option('address');
  echo '<input type="text" name="address" value="' . esc_attr($address) . '" />';
}

function render_email_field() {
  $email = get_option('email');
  echo '<input type="email" name="email" value="' . esc_attr($email) . '" />';
}

function render_phone_field() {
  $phone = get_option('phone');
  echo '<input type="text" name="phone" value="' . esc_attr($phone) . '" />';
}

// Render các trường cho chèn logo
function render_logo_section() {
  echo '<p>Chèn logo:</p>';
}

function render_logo_field() {
  $logo = get_option('logo');
  $image_url = wp_get_attachment_url($logo); // Lấy URL của hình ảnh
  ?>
  <input type="hidden" name="logo" id="logo" value="<?php echo esc_attr($logo); ?>" />
  <img src="<?php echo esc_url($image_url); ?>" width="100" height="100" alt="Logo" id="logo-preview" style="display: <?php echo ($logo) ? 'inline-block' : 'none'; ?>;">
  <button type="button" class="button" id="logo-upload-button"><?php echo ($logo) ? 'Thay đổi' : 'Tải lên'; ?></button>
  <button type="button" class="button" id="logo-remove-button" style="display: <?php echo ($logo) ? 'inline-block' : 'none'; ?>;"><?php echo ($logo) ? 'Xóa' : 'Ẩn'; ?></button>
  <script>
      jQuery(document).ready(function($){
          // Xử lý sự kiện click vào nút tải lên
          $('#logo-upload-button').click(function(e) {
              e.preventDefault();
              var customUploader = wp.media({
                  title: 'Chọn hình ảnh',
                  button: {
                      text: 'Chọn'
                  },
                  multiple: false
              });
              // Khi hình ảnh được chọn
              customUploader.on('select', function() {
                  var attachment = customUploader.state().get('selection').first().toJSON();
                  $('#logo').val(attachment.id); // Lưu ID của hình ảnh
                  $('#logo-preview').attr('src', attachment.url); // Hiển thị hình ảnh
                  $('#logo-preview').show();
                  $('#logo-upload-button').text('Thay đổi');
                  $('#logo-remove-button').show();
              });
              customUploader.open();
          });

          // Xử lý sự kiện click vào nút xóa
          $('#logo-remove-button').click(function(e) {
              e.preventDefault();
              $('#logo').val(''); // Xóa ID của hình ảnh
              $('#logo-preview').attr('src', '').hide(); // Xóa hình ảnh và ẩn
              $('#logo-upload-button').text('Tải lên');
              $('#logo-remove-button').hide();
          });
      });
  </script>
  <?php
}
