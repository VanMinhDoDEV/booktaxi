<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="page-header blog-details">
   <div class="container">
      <div class="page-header-info text-center">
         <h4><?php echo get_the_category()[0]->name; ?></h4>
         <h2><?php the_title(); ?></h2>
         <ul class="post-meta">
            <li><i class="las la-user"></i><?php the_author(); ?></li>
            <li><i class="las la-calendar"></i><?php echo get_the_date(); ?></li>
            <li><i class="las la-comments"></i><?php echo get_comments_number( $post->ID ); ?></li>
         </ul>
      </div>
   </div>
</section>
<section class="blog-section blog-page bg-grey padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="post-details">
               <div class="post-thumb"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>"></div>
               <?php the_content(); ?>
               <?php
                    $related_posts_args = array(
                        'posts_per_page' => 2, // Số lượng bài viết liên quan hiển thị (2 bài viết: Previous và Next)
                        'post__not_in' => array(get_the_ID()), // Loại bỏ bài viết hiện tại khỏi danh sách
                        'orderby' => 'rand', // Sắp xếp ngẫu nhiên
                        'category__in' => wp_get_post_categories(get_the_ID()), // Các danh mục chung với bài viết hiện tại
                    );

                    $related_posts = get_posts($related_posts_args); // Lấy danh sách các bài viết liên quan

                    if ($related_posts && count($related_posts) === 2) {
                        echo '<ul class="post-navigation">';

                        // Bài viết Previous
                        $previous_post = $related_posts[0];
                        setup_postdata($previous_post);
                        echo '<li><a href="' . get_permalink($previous_post) . '"><span><i class="las la-angle-left"></i>Trước</span>' . get_the_title($previous_post) . '</a></li>';

                        // Bài viết Next
                        $next_post = $related_posts[1];
                        setup_postdata($next_post);
                        echo '<li><a href="' . get_permalink($next_post) . '"><span>Sau<i class="las la-angle-right"></i></span>' . get_the_title($next_post) . '</a></li>';

                        echo '</ul>';
                        wp_reset_postdata();
                    } else {
                        echo 'Không có bài viết liên quan.';
                    }
                ?>
               <div class="author-box">
                  <div class="author-thumb">
                     <img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" alt="img">
                  </div>
                  <div class="author-info">
                     <h3><?php echo get_the_author(); ?></h3>
                     <p><?php echo get_the_author_meta('description', get_the_author_meta('ID')); ?></p>
                     <ul class="social-icon">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-behance"></i></a></li>
                     </ul>
                  </div>
               </div>
               <?php
                // Kiểm tra xem có hỗ trợ comment trong theme không
                if (comments_open() || get_comments_number()) {
                    // Hiển thị phần comment
                    comments_template();
                }
                ?>
               <!-- <h3 class="comment-title">Post Comments</h3>

               <ul class="comments-box">
                  <li class="comment">
                     <div class="comment-inner">
                        <div class="comment-thumb"><img src="assets/img/comment-1.png" alt="img"></div>
                        <div class="comment-wrap">
                           <div class="comments-meta">
                              <h4>Ashton Porter <span>Jan 01, 2022 at 8:00</span></h4>
                           </div>
                           <div class="comment-area">
                              <p>You guys have put so much work, effort, and time while designing this awesome theme I can see that passion when I incorporated it into my website.</p>
                              <a href="#" class="reply">Reply</a>
                           </div>
                        </div>
                     </div>
                     <ul class="children">
                        <li class="comment">
                           <div class="comment-inner">
                              <div class="comment-thumb"><img src="assets/img/comment-2.png" alt="img"></div>
                              <div class="comment-wrap">
                                 <div class="comments-meta">
                                    <h4>Melania Trump <span>Jan 01, 2022 at 8:00</span></h4>
                                 </div>
                                 <div class="comment-area">
                                    <p>The only thing I LOVE more than this theme and it’s incredible options is the support team! They are freaking amazable!</p>
                                    <a href="#" class="reply">Reply</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <li class="comment">
                     <div class="comment-inner">
                        <div class="comment-thumb"><img src="assets/img/comment-3.png" alt="img"></div>
                        <div class="comment-wrap">
                           <div class="comments-meta">
                              <h4>Elliot Alderson <span>Jan 01, 2022 at 8:00</span></h4>
                           </div>
                           <div class="comment-area">
                              <p>Outstanding quality in this theme, brilliant Effects and perfect crafted Code. We absolutely love it and can highly recommend DynamicLayers!</p>
                              <a href="#" class="reply">Reply</a>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <h3 class="comment-title">Leave a Comment</h3>
               <form action="#" method="post" class="comment-form form-horizontal">
                  <div class="form-group row">
                     <div class="col-sm-6 padding-15">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name*" required>
                     </div>
                     <div class="col-sm-6 padding-15">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email*" required>
                     </div>
                     <div class="col-md-12 padding-15">
                        <textarea id="comment" name="comment" cols="30" rows="5" class="form-control comment" placeholder="Your Comment*" required></textarea>
                     </div>
                     <div class="col-md-12 padding-15">
                        <button id="submit" class="default-btn" type="submit">Submit Comment<span></span></button>
                        <div id="form-messages" class="alert" role="alert"></div>
                     </div>
                  </div>
               </form> -->
            </div>
         </div>
      </div>
   </div>
</section>
<?php endwhile; else : ?>
 <p>Không có bài viết nào!</p>
<?php endif; ?>
<?php get_footer(); ?>