<?php get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="page-header">
   <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h2><?php the_title(); ?><h2>
        </div>
    </div>
   </div>
</section>
<section class="blog-section blog-page bg-grey padding">
    <div class="container">
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php endwhile; else : ?>
 <p>Không có bài viết nào!</p>
<?php endif; ?>

<?php get_footer(); ?>
