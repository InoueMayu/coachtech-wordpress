<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php get_header(); ?>
  </head>

  <body>
    <?php get_template_part('includes/header'); ?>
    
    <main>
      <div class="firstview">
        <div class="firstview__content">
          <h1>Commit to the growth<br>
            for everyone</h1>
        </div>
      </div>

      <div id="blog">
        <div class="container">
          <p class="common__sub-ttl">New Post</p>
          <h2 class="common__ttl">新着記事</h2>
 
          <div class="flex__item blog-wrap container">
           <div class="row">
              <?php if (have_posts()) : ?>
                <?php query_posts('posts_per_page=6'); ?>
                <?php while (have_posts()) : the_post(); ?>
                  <a href="<?php the_permalink(); ?>" class="blog-wrap__item text-decoration-none col-lg-4 col-md-4 col-sm-12 mt-3">

                    <?php
                    $img = get_eyecatch_with_default();

                    $category = get_the_category();
                    $cat_name = $category[0]->cat_name;

                    $tag = get_the_tags();
                    $tag_name = $tag[0]->name;

                    ?>
                   <img src="<?php echo $img[0]; ?>" alt="" class="blog-wrap__item-eyecatch">
                    <span class="blog-wrap__item-cat"><?php echo $cat_name; ?></span>
                    <div class="blog-wrap__item-content">
                      <h3 class="blog-wrap__item-content-ttl"><?php the_title(); ?></h3>
                      <ul class="blog_flex__item">
                        <li class="blog-wrap__item-content-tag"><?php the_time('Y-m-d'); ?></li>
                      </ul>
                    </div>
                 </a>
                <?php endwhile; ?>
                <?php else : ?>
                <p>記事が見つかりませんでした</p>
              <?php endif; ?>
 
            </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
          
    </main>
    
  <?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>

   
</body>
</html>