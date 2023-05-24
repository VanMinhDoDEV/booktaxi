<aside class="col-lg-4 sm-padding">
    <div class="sidebar-widget">
        <form action = "<?php bloginfo( 'url' ); ?>" class="search-form" method="get">
            <input type="text" class="form-control" value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" name="s"  placeholder="Nhập từ khóa..." >
            <button class="search-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="sidebar-widget">
        <div class="widget-title">
            <h3>Danh mục</h3>
        </div>
    <ul class="category-list">
        <?php 
          $args = array( 
            'hide_empty' => 0,
            'taxonomy' => 'loai_xe',
            'exclude' => array( 16 ),
            'orderby' => 'id',
            'parent' => 0
          ); 
          $cates = get_categories( $args ); 
          foreach ( $cates as $cate ) { ?>
            <li><a href="<?php get_term_link($cate->slug, 'loai_xe') ?>"><?php echo $cate->name ?></a><span><?php echo $cate->count; ?></span></li>
          <?php }
        ?>
    </ul>
    </div>
    <!-- <div class="sidebar-widget">
        <div class="widget-title">
            <h3>Recent Articles</h3>
        </div>
        <ul class="thumb-post">
            <li>
                <div class="thumb">
                    <img src="assets/img/post-thumb-1.jpg" alt="thumb">
                </div>
                <div class="thumb-post-info">
                    <h3><a href="blog-details.html">How To Go About Initiating An Startup In Few Days.</a></h3>
                    <a href="#" class="date">Jan 01 2022</a>
                </div>
            </li>
            <li>
                <div class="thumb">
                    <img src="assets/img/post-thumb-2.jpg" alt="thumb">
                </div>
                <div class="thumb-post-info">
                    <h3><a href="blog-details.html">Financial Experts Support Help You To Find Out.</a></h3>
                    <a href="#" class="date">Jan 01 2022</a>
                </div>
            </li>
            <li>
                <div class="thumb">
                    <img src="assets/img/post-thumb-3.jpg" alt="thumb">
                </div>
                <div class="thumb-post-info">
                    <h3><a href="blog-details.html">Innovative Helping Business All Over The World.</a></h3>
                    <a href="#" class="date">Jan 01 2022</a>
                </div>
            </li>
        </ul>
    </div> -->
    <div class="sidebar-widget">
        <div class="widget-title">
            <h3>Từ khóa</h3>
        </div>
        <ul class="tags">
            <?php 
              $args = array( 
                'hide_empty' => 0,
                'taxonomy' => 'post_tag',
                'exclude' => array( 16 ),
                'orderby' => 'id',
                'parent' => 0
              ); 
              $cates = get_categories( $args ); 
              foreach ( $cates as $cate ) { ?>
                <li><a href="<?php get_term_link($cate->slug, 'post_tag') ?>"><?php echo $cate->name ?></a></li>
              <?php }
            ?>
        </ul>
    </div>
</aside>