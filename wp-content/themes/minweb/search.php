<?php  get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php endwhile; else : ?>
    <section class="page-header error">
    <div class="container">
        <div class="page-header-info text-center mt-40">
            <h4>Rất tiếc</h4>
                <h2><span>Nội dung không tồn tại!</span></h2>
                <p>Rất xin lỗi chúng tôi không tìm thấy trang này <br>Phiền bạn quay lại trang chủ tìm kiếm nội dung khác.</p>
                <a href="<?php echo get_site_url(); ?>" class="default-btn mt-30">Quay lại trang chủ</a>
            </div>
        </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>