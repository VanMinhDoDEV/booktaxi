<?php $urlTheme = get_bloginfo ( 'stylesheet_directory' ); ?>
<footer class="footer-section">
                <div class="footer-top-wrap">
                        <div class="container">
                                <div class="footer-top">
                                        <div class="row align-items-end">
                                                <div class="col-lg-8">
                                                        <div class="brand">
                                                                <a class="footer-logo" href="index.html"><img
                                                                                src="<?php  echo $urlTheme ?>/assets/img/logo-light.png"
                                                                                alt="logo"></a>
                                                                <p>Chúng tôi là người với lỗ lực được giúp đỡ kết nối bạn và tài xế taxi .</p>
                                                        </div>
                                                </div>
                                                <div class="col-lg-4">
                                                        <div class="footer-call">
                                                                <i class="las la-phone-volume"></i>
                                                                <p><span>Gọi taxi</span><a
                                                                                href="tel:<?php echo get_option( 'phone'); ?>"><?php echo get_option( 'phone'); ?></a>
                                                                </p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>

                <div class="footer-mid-wrap">
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-3 col-md-6 sm-padding">
                                                <div class="footer-item">
                                                        <div class="widget-title">
                                                                <h3>Thời gian làm việc</h3>
                                                        </div>
                                                        <ul class="footer-contact">
                                                                <li><span>Thứ 2 - Thứ 6:</span><?php echo get_option( 'start_time' ); ?> Đến <?php echo get_option( 'end_time' ); ?></li>
                                                                <li><span>Thứ 7:</span><?php echo get_option( 'start_time' ); ?> Đến <?php echo get_option( 'end_time' ); ?></li>
                                                                <li><span>Chủ nhật:</span><?php echo get_option( 'start_time' ); ?> Đến <?php echo get_option( 'end_time' ); ?></li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sm-padding">
                                                <div class="footer-item footer-list">
                                                        <div class="widget-title">
                                                                <h3>Giới thiệu</h3>
                                                        </div>
                                                        <?php wp_nav_menu( array( 
                                                                'theme_location' => 'menu_footer1', 
                                                                'container' => 'false', 
                                                                'menu_id' => 'footer-links', 
                                                                'menu_class' => 'footer-links'
                                                                ) ); ?>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sm-padding">
                                                <div class="footer-item">
                                                        <div class="widget-title">
                                                                <h3>Liên hệ</h3>
                                                        </div>
                                                        <ul class="footer-contact">
                                                                <li><span>Địa chỉ:</span><?php echo get_option( 'address' ); ?></li>
                                                                <li><span>Email:</span><?php echo get_option( 'email' ); ?></li>
                                                                <li><span>Số điện thoại:</span><?php echo get_option( 'phone' ); ?></li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 sm-padding">
                                                <div class="footer-item subscribe-wrap">
                                                        <div class="widget-title">
                                                                <h3>Đăng ký nhận thư</h3>
                                                        </div>
                                                        <div class="subscribe-form">
                                                                <?php echo do_shortcode( '[contact-form-7 id="78" title="Đăng ký nhận tin"]' ); ?>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="running-taxi">
                                <div class="taxi"></div>
                                <div class="taxi-2"></div>
                                <div class="taxi-3"></div>
                        </div>
                </div>

                <div class="copyright-wrap">
                        <div class="container">
                                <p>Copyright© <span id="currentYear"></span> by Minh Tàu.</p>
                        </div>
                </div>

        </footer>

        <div id="scrollup">
                <button id="scroll-top" class="scroll-to-top">
                        <i class="las la-arrow-up"></i>
                </button>
        </div>

        <div class="dl-cursor">
                <div class="cursor-icon-holder"><i class="las la-times"></i></div>
        </div>
        <div class="float-contact">
                <div class="chat-zalo">
                         <a href="https://zalo.me/<?php get_option( 'phone' ); ?>" target="_blank"><img title="Chat Zalo" src="<?php echo $urlTheme ?>./assets/img/zalo-icon.png" alt="zalo-icon" width="40" height="40" /></a>
                </div>
                <div class="chat-facebook">
                        <a href="https://m.me/vanminh.do.395" target="_blank"><img title="Chat Facebook" src="<?php echo $urlTheme ?>./assets/img/facebook-icon.png" alt="facebook-icon" width="40" height="40" /></a>
                </div>
                <div class="call-hotline">
                        <a href="tel:<?php echo get_option( 'phone' ); ?>"><img title="Call Hotline" src="<?php echo $urlTheme ?>./assets/img/phone-icon.png" alt="phone-icon" width="40" height="40" /></a>
                </div>
        </div>
<?php wp_footer(); ?>
</body>

</html>