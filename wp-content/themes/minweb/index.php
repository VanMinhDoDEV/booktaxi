<?php $urlTheme = get_bloginfo ( 'stylesheet_directory' ); ?>
<?php get_header(); ?>

<div id="sidebox-overlay"></div>
<div class="slider-section">
        <div class="main-slider-2">
                <div class="swiper-wrapper">
                        <div class="swiper-slide">
                                <div class="slider-img"><img src="<?php  echo $urlTheme ?>/assets/img/slider-bg.jpg" alt="img"
                                                class="kenburns" style="animation-duration: 12000ms; "></div>
                                <div class="slider-content-wrap d-flex align-items-center text-left">
                                        <div class="container">
                                                <div class="slider-content text-center pb-60">
                                                        <div class="slider-caption medium">
                                                                <div class="inner-layer">
                                                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Dịch vụ taxi </div>
                                                                </div>
                                                        </div>
                                                        <div class="slider-caption big">
                                                                <div class="inner-layer">
                                                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Dịch vụ đặt xe taxi giá rẻ, chất lượng <br>Chúng tôi có liên kết hàng chục ngàn xe taxi.</div>
                                                                </div>
                                                        </div>
                                                        <div class="slider-caption small">
                                                                <div class="inner-layer">
                                                                        <div data-animation="fade-in-bottom"
                                                                                data-delay="0.7s"
                                                                                data-duration="1s">Khám phá dịch vụ đặt taxi chuyên nghiệp - hành trình tiện lợi và an toàn! <br>Đội xe đa dạng, tài xế chuyên nghiệp. Đặt taxi ngay và trải nghiệm chất lượng hàng đầu!</div>
                                                                </div>
                                                        </div>
                                                        <div class="slider-btn">
                                                                <a href="#" class="default-btn"
                                                                        data-animation="fade-in-bottom"
                                                                        data-delay="0.9s">Đặt taxi ngay</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="slider-img"><img src="<?php  echo $urlTheme ?>/assets/img/slider-bg.jpg" alt="img"
                                                class="kenburns" style="animation-duration: 12000ms; "></div>
                                <div class="slider-content-wrap d-flex align-items-center text-left">
                                        <div class="container">
                                                <div class="slider-content text-center pb-60">
                                                        <div class="slider-caption medium">
                                                                <div class="inner-layer">
                                                                        <div data-animation="fade-in-bottom"
                                                                                data-delay="0.3s">Trải nghiệm dịch vụ taxi chất lượng!</div>
                                                                </div>
                                                        </div>
                                                        <div class="slider-caption big">
                                                                <div class="inner-layer">
                                                                        <div data-animation="fade-in-bottom"
                                                                                data-delay="0.5s">Trải nghiệm xe sang trọng<br>Sẵn sàng mọi lúc!</div>
                                                                </div>
                                                        </div>
                                                        <div class="slider-caption small">
                                                                <div class="inner-layer">
                                                                        <div data-animation="fade-in-bottom"
                                                                                data-delay="0.7s"
                                                                                data-duration="1s">Hãy bỏ qua lo lắng về giao thông và tìm kiếm đỗ xe, chúng tôi sẵn sàng đưa bạn đến mọi đích<br>Đặt taxi ngay để tận hưởng sự thuận tiện và thoải mái trên con đường của bạn!</div>
                                                                </div>
                                                        </div>
                                                        <div class="slider-btn">
                                                                <a href="#" class="default-btn"
                                                                        data-animation="fade-in-bottom"
                                                                        data-delay="0.9s">Đặt taxi ngay</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
        </div>
</div>

<section class="booking-section-2" id = "booking-section">
        <div class="container">
                <div class="row booking-form-2 g-0">
                        <div class="col-md-4 d-none d-lg-block">
                                <div class="booking-car-wrap">
                                        <div class="booking-car wow fade-in-left" data-wow-delay="200ms"></div>
                                </div>
                        </div>
                        <div class="col-lg-8">
                                <div class="section-heading mb-30">
                                        <h4><span></span>Đặt xe online</h4>
                                        <h2 class="white">Đặt taxi bạn cần</h2>
                                </div>
                                        <div class="booking-form">
                                                <?php echo do_shortcode( '[contact-form-7 id="37" title="Book taxi"]' ); ?>
                                        </div>
                                        
                                        <div id="form-messages" class="alert alert-danger" role="alert"></div>
                        </div>
                </div>
        </div>
</section>

<section class="pricing-section bg-grey bd-bottom padding">
        <div class="container">
                <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                        <h4><span></span>Hãy đi cùng chúng tôi!</h4>
                        <h2>Chọn taxi phù hợp với bạn!</h2>
                        <p>Chúng tôi cung cấp dịch vụ taxi giá rẻ, chất lượng
                        </p>
                </div>

                <ul class="nav pricing-tab-menu" id="pricing-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="hybrid-taxi" data-bs-toggle="tab"
                                        data-bs-target="#hybrid-taxi-content" type="button" role="tab"
                                        aria-controls="hybrid-taxi-content" aria-selected="true">Xe taxi Nội Bài</button>
                        </li>
                        <li class="nav-item" role="presentation">
                                <button class="nav-link" id="town-taxt" data-bs-toggle="tab"
                                        data-bs-target="#town-taxi-content" type="button" role="tab"
                                        aria-controls="town-taxi-content" aria-selected="false">Xe taxi liên tỉnh</button>
                        </li>
                        <li class="nav-item" role="presentation">
                                <button class="nav-link" id="limousine-taxi" data-bs-toggle="tab"
                                        data-bs-target="#limousine-taxi-content" type="button" role="tab"
                                        aria-controls="limousine-taxi-content" aria-selected="false">Xe taxi ghép</button>
                        </li>
                </ul>

                <div class="tab-content" id="pricing-tab-content">
                        <div class="tab-pane fade show active" id="hybrid-taxi-content" role="tabpanel"
                                aria-labelledby="hybrid-taxi">
                                <div class="row">
                                        <?php $args = array(
                                                'post_type'         => 'vehicle',
                                                'posts_per_page'    => 3,
                                                'tax_query'         => array(
                                                        array(
                                                        'taxonomy'  => 'loai_xe',
                                                        'field'     => 'term_id',
                                                        'terms'     => 5,
                                                        'operator'  => 'IN'
                                                        ),
                                                )
                                                ); ?>
                                        <?php $getposts = new WP_query( $args);?>
                                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                <div class="col-lg-4 col-md-6 sm-padding">
                                                        <div class="pricing-item">
                                                                <div class="pricing-head-wrap">
                                                                        <div class="pricing-car">
                                                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"
                                                                                        alt="car">
                                                                                <div class="price"><?php echo get_post_meta( $post->ID, 'vehicle_price_one_way')[0]; ?></div>
                                                                        </div>
                                                                </div>
                                                                <div class="pricing-head">
                                                                        <h3><a href="#booking-section"><?php the_title(); ?></a>
                                                                        </h3>
                                                                        <span class="location">Hà Nội</span>
                                                                </div>
                                                                <ul class="pricing-list">
                                                                        <li>Giá ra sân bay: <span><?php echo get_post_meta( $post->ID, 'vehicle_price_one_way')[0]; ?></span></li>
                                                                        <li>Từ sân bay về: <span><?php echo get_post_meta( $post->ID, 'vehicle_price_round_trip')[0]; ?></span></li>
                                                                        <li>Vali tối đa: <span><?php echo get_post_meta( $post->ID, 'vehicle_num_stops')[0]; ?></span></li>
                                                                        <li>Số hành khách: <span><?php echo get_post_meta( $post->ID, 'vehicle_num_passengers')[0]; ?></span></li>
                                                                        <li><a href="#booking-section"
                                                                                        class="default-btn">Đặt taxi ngay</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        <?php endwhile; wp_reset_postdata(); ?>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="town-taxi-content" role="tabpanel"
                                aria-labelledby="town-taxi-content">
                                <div class="row">
                                        <?php $args = array(
                                                'post_type'         => 'vehicle',
                                                'posts_per_page'    => 3,
                                                'tax_query'         => array(
                                                        array(
                                                        'taxonomy'  => 'loai_xe',
                                                        'field'     => 'term_id',
                                                        'terms'     => 5,
                                                        'operator'  => 'IN'
                                                        ),
                                                )
                                                ); ?>
                                        <?php $getposts = new WP_query( $args);?>
                                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                <div class="col-lg-4 col-md-6 sm-padding">
                                                        <div class="pricing-item">
                                                                <div class="pricing-head-wrap">
                                                                        <div class="pricing-car">
                                                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"
                                                                                        alt="car">
                                                                                <div class="price"><?php echo get_post_meta( $post->ID, 'vehicle_price_one_way')[0]; ?>/KM</div>
                                                                        </div>
                                                                </div>
                                                                <div class="pricing-head">
                                                                        <h3><a href="#booking-section"><?php the_title(); ?></a>
                                                                        </h3>
                                                                        <span class="location">Hà Nội</span>
                                                                </div>
                                                                <ul class="pricing-list">
                                                                        <li>Giá lượt đi: <span><?php echo get_post_meta( $post->ID, 'vehicle_price_one_way')[0]; ?>/KM</span></li>
                                                                        <li>Giá lượt về (nếu có): <span><?php echo get_post_meta( $post->ID, 'vehicle_price_round_trip')[0]; ?>/KM</span></li>
                                                                        <li>Vali tối đa: <span><?php echo get_post_meta( $post->ID, 'vehicle_num_stops')[0]; ?></span></li>
                                                                        <li>Số hành khách: <span><?php echo get_post_meta( $post->ID, 'vehicle_num_passengers')[0]; ?></span></li>
                                                                        <li><a href="#booking-section"
                                                                                        class="default-btn">Đặt taxi ngay</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        <?php endwhile; wp_reset_postdata(); ?>
                                        
                                </div>
                        </div>
                        <div class="tab-pane fade" id="limousine-taxi-content" role="tabpanel"
                                aria-labelledby="limousine-taxi">
                                <div class="row">
                                <?php $args = array(
                                        'post_type'         => 'vehicle',
                                        'posts_per_page'    => 3,
                                        'tax_query'         => array(
                                                array(
                                                'taxonomy'  => 'loai_xe',
                                                'field'     => 'term_id',
                                                'terms'     => 5,
                                                'operator'  => 'IN'
                                                ),
                                        ),
                                        'post__not_in'      => array( 5)
                                        ); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <div class="col-lg-4 col-md-6 sm-padding">
                                                <div class="pricing-item">
                                                        <div class="pricing-head-wrap">
                                                                <div class="pricing-car">
                                                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"
                                                                                alt="car">
                                                                        <div class="price"><?php echo get_post_meta( $post->ID, 'vehicle_price_one_way')[0]; ?>/KM</div>
                                                                </div>
                                                        </div>
                                                        <div class="pricing-head">
                                                                <h3><a href="#booking-section"><?php the_title(); ?></a>
                                                                </h3>
                                                                <span class="location">Hà Nội</span>
                                                        </div>
                                                        <ul class="pricing-list">
                                                                <li>Giá lượt đi: <span><?php echo get_post_meta( $post->ID, 'vehicle_price_one_way')[0]; ?>/KM</span></li>
                                                                <li>Giá lượt về (nếu có): <span><?php echo get_post_meta( $post->ID, 'vehicle_price_round_trip')[0]; ?>/KM</span></li>
                                                                <li>Vali tối đa: <span><?php echo get_post_meta( $post->ID, 'vehicle_num_stops')[0]; ?></span></li>
                                                                <li>Số hành khách: <span><?php echo get_post_meta( $post->ID, 'vehicle_num_passengers')[0]; ?></span></li>
                                                                <li><a href="#booking-section"
                                                                                class="default-btn">Đặt taxi ngay</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                                </div>
                        </div>
                </div>
        </div>
</section>

<section class="testimonial-section bd-bottom bg-grey">
        <div class="container">
                <div class="row align-items-center">
                        <div class="col-lg-6">
                                <div class="section-heading mb-10">
                                        <h4><span></span>Chứng thực của khách hàng</h4>
                                        <h2>Khách hàng đánh giá về chúng tôi...</h2>
                                        <p>Sự hài lòng của các bạn chính là mục tiêu cốt lõi của chúng tôi, Chúng tôi nỗ lực nhận và cải thiện dịch vụ từ phản hồi của các bạn.</p>
                                </div>
                                <div class="swiper-outside testi-pagination">
                                        <div class="testimonial-carousel">
                                                <div class="swiper-wrapper">
                                                        <?php $args = array( 'post_type' => 'review', 'posts_per_page' => 10, 'post_status' => 'publish'); ?>
                                                        <?php $getposts = new WP_query( $args);?>
                                                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                                <div class="swiper-slide">
                                                                        <div class="testi-item">
                                                                                <div class="quote-icon"><i
                                                                                                class="las la-quote-right"></i>
                                                                                </div>
                                                                                <p><?php the_excerpt(); ?></p>
                                                                                <div class="testi-author">
                                                                                        <div class="author-thumb"><img
                                                                                                        src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>"
                                                                                                        alt="author">
                                                                                        </div>
                                                                                        <div class="author-info">
                                                                                                <h3><?php the_title(); ?>
                                                                                                        <span><?php echo get_post_meta($post->ID, 'customer_address')[0]; ?></span>
                                                                                                </h3>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        <?php endwhile; wp_reset_postdata(); ?>
                                                </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="feature-wrap">
                                        <div class="section-heading mb-30 wow fade-in-right"
                                                data-wow-delay="200ms">
                                                <h4 class="white"><span></span>Tại sao bạn chọn chúng tôi!</h4>
                                                <h2 class="white">Đặt xe taxi bạn được gì?</h2>
                                                <p class="white">Chúng tôi trực tiếp giúp bạn kết nối với tài xế taxi, giúp các tài xế và bạn tiết kiệm 20-30% hoa hồng.</p>
                                        </div>

                                        <ul class="ridek-features">
                                                <li class="wow fade-in-right" data-wow-delay="300ms">
                                                        <div class="feature-icon">
                                                                <i class="las la-gem"></i>
                                                        </div>
                                                        <div class="feature-content">
                                                                <h3>Trọn gói và Tiết kiệm</h3>
                                                                <p>Từ việc không phải trả hoa hồng quá cao đến 50% từ đó giảm các chi phí </p>
                                                        </div>
                                                </li>
                                                <li class="wow fade-in-right" data-wow-delay="400ms">
                                                        <div class="feature-icon">
                                                                <i class="las la-taxi"></i>
                                                        </div>
                                                        <div class="feature-content">
                                                                <h3>Xe chất lượng</h3>
                                                                <p>Chúng tôi lựa chọn những xe tốt nhất có thể cùng tham gia dịch vụ của chúng tôi</p>
                                                        </div>
                                                </li>
                                                <li class="wow fade-in-right" data-wow-delay="500ms">
                                                        <div class="feature-icon">
                                                                <i class="las la-tachometer-alt"></i>
                                                        </div>
                                                        <div class="feature-content">
                                                                <h3>Nhanh chóng linh hoạt</h3>
                                                                <p>Chúng tôi có đội ngũ đông đảo trực điện thoại và box chat giúp các bạn nhanh chóng liên kết với các tài xế</p>
                                                        </div>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
</section>

<section class="blog-section bg-grey padding">
        <div class="container">
                <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                        <h4><span></span>Bài viết mới!</h4>
                        <h2>Tin tức</h2>
                        <p>Chúng tôi luôn cố gắng và lỗ lực đưa ra những giải pháp thu thập thông tin đến các bạn.</p>
                </div>

                <div class="row grid-post">
                        <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'post_status' => 'publish'); ?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <div class="col-lg-4 col-md-6 padding-15">
                                        <div class="post-card">
                                                <div class="post-thumb">
                                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>">
                                                        <a href="<?php the_permalink(); ?>" class="post-category"><?php echo get_the_category()[0]->name; ?></a>
                                                </div>
                                                <div class="post-content-wrap">
                                                        <ul class="post-meta">
                                                                <li><i class="las la-calendar"></i><?php echo get_the_date(); ?></li>
                                                                <li><i class="las la-user"></i><?php the_author(); ?></li>
                                                        </ul>
                                                        <div class="post-content">
                                                                <h3>
                                                                        <a href="<?php the_permalink(); ?>" class="hover"><?php the_title(); ?></a>
                                                                </h3>
                                                                <p><?php the_excerpt(); ?></p>
                                                                <a href="<?php the_permalink(); ?>" class="read-more">Xem thêm...</a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
        </div>
</section>
<?php get_footer(); ?>