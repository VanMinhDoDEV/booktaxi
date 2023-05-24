<?php get_header(); ?>
<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4><?php echo get_the_category()[0]->name; ?></h4>
            <h2>Nơi cập nhật thông tin thú vị về</br><span>Dịch vụ taxi</span></h2>
            <p>Chúng tôi luôn lỗ lực tăng cường chất lượng dịch vụ</br>truyền đạt những thông tin thú vị và chất lượng thông qua các bài viết</p>
        </div>
    </div>
</section>
<section class="blog-section blog-page bg-grey padding">
<div class="container">
    <div class="row">
        <div class="col-lg-8 sm-padding">
            <div class="row grid-post">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 padding-15">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>">
                                <a href="<?php the_permalink(); ?>" class="post-category"><?php echo get_the_category()[0]->name; ?></a>
                            </div>
                            <div class="post-content-wrap">
                                <ul class="post-meta">
                                <li><i class="las la-calendar"></i><?php echo get_the_date(); ?></li>
                                <li><i class="las la-user"></i><?php echo get_the_author(); ?></li>
                                </ul>
                                <div class="post-content">
                                <h3><a href="<?php the_permalink(); ?>" class="hover"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                 <p>Không có bài viết nào!</p>
                <?php endif; ?>
            </div>
            <?php
            $big = 999999999; // need an unlikely integer

            $pages = paginate_links( array(
                'base'					=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'				=> '?paged=%#%',
                'current'				=> max( 1, get_query_var('paged') ),
                'total' 				=> $wp_query->max_num_pages,
                'prev_text'				=> '<i class="las la-arrow-left"></i>',
                'next_text'				=> '<i class="las la-arrow-right"></i>',
                'type'  				=> 'array',
                'before_page_number' 	=> '<span>',
                'after_page_number'  	=> '</span>',
            ) );

            if( is_array( $pages ) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged'); ?>
                <!-- pagination -->
                <div class="pagination-wrap text-left mt-30">
                    <ul><?php
                        if ( $wp_query->max_num_pages > 1 && $paged === 1 ) { ?>
                            <li></li><?php
                        }

                        foreach ( $pages as $page ) {
                            echo "<li>$page</li>";
                        }

                        if ( $wp_query->max_num_pages == max( 1, get_query_var('paged') ) ) { ?>
                            <li></li><?php
                        } ?>
                    </ul>
                </div>
            <!-- /.pagination -->
            <?php } ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
</section>
<?php get_footer(); ?>