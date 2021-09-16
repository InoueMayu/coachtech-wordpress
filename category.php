<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php get_header(); ?>
  </head>

  <style>
    .single-category__ttl {
      display: block;
      background: #b31566;
      text-align: center;
      color: white;
      padding: 50px 0;
      font-family: "Indie Flower", cursive;
      font-size: 70px;
      margin-bottom: 50px;
    }

    li {
      list-style: none;
    }
  </style>

  <body>
    <?php get_template_part('includes/header'); ?>
    
    <div class ="single-category__ttl">
      <?php single_cat_title() ?>
    </div>
    <div class="flex__item blog-wrap container">
      <div class="row">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <dl class="">
        <a href="<?php the_permalink(); ?>" class="blog-wrap__item text-decoration-none col-lg-4 col-md-4 col-sm-12 mt-3">
        <?php
                    $img = get_eyecatch_with_default();

                    $category = get_the_category();
                    $cat_name = $category[0]->cat_name;

                    $tag = get_the_tags();
                    $tag_name = $tag[0]->name;

                    ?>
        <img src="<?php echo $img[0]; ?>" alt="" class="blog-wrap__item-eyecatch">
        <div class="blog-wrap__item-content">
           <h3 class="blog-wrap__item-content-ttl"><?php the_title(); ?></h3>
            <ul class="blog_flex__item">
                <li class="blog-wrap__item-content-tag"><?php the_time('Y-m-d'); ?></li>
            </ul>
        </div>
        </a>
      </dl>
    <?php endwhile;?>
    <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>

    <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>
</html>