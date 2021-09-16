<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<style>

  header {
    background: white;
  }
  
 .single__header {
   background: white;
   border-radius: 15px;
   width: 50%;
   padding: 50px 0;
   margin-top: 50px;
 }

 .single__img {
   width: 100%;
   height: auto;
   border-radius: 15px;
 }

 .single-title {
   padding-left: 20px;
   font-size: 26px;
   font-weight: bold;
   color: #808080;
 }

 .single-date {
   padding-left: 20px;
   color: #808080;
 }

 .cat-name {
   padding: 0 20px 20px 20px;
 }

 .single__item-cat {
  background: #b31566;
  color: #fff;
  border-radius: 15px;
  padding: 5px 20px;
  font-size: 18px;
 }

 .single__content {
  color: #808080;
  padding: 0 10px;
 }

 li {
   list-style: none;
 }

 a {
   text-decoration: none;
 }

</style>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
 
  <?php 
      $img = get_eyecatch_with_default(); 
      $category = get_the_category();
      $cat_name = $category[0]->cat_name;

      $tag = get_the_tags();
      $tag_name = $tag[0]->name;

    ?>
  
  <header class="masthead container single__header" id="single__header">
  <div class="cat-name">
  <span class="single__item-cat">
    <?php
      $category = get_the_category();
      if ( $category[0] ) {
      echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
        }
    ?>
  </span>
  </div>

  <h1 class="single-title">
          <?php the_title(); ?>
  </h1>
  <p class="single-date"><?php the_date('Y.m.d'); ?></p>
  <div class="eyecatch">
    <div class="single-eyecatch page-eyecatch">
      <img class="single__img" src="<?php echo $img[0]; ?>" alt="">
    </div>
    <div class="single__content">
    <?php the_content(); ?>
    </div>
    
  </div>
  </header>

  <?php endwhile; ?>
  <?php endif; ?>

<?php get_template_part('includes/footer'); ?>

  
<?php get_footer(); ?>
</body>

</html>