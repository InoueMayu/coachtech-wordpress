<style>

.sidebar {
  width: 30%;
}
.banner img {
  border-radius: 15px;
}

.contributor__icon {
  width: 150px;
  height: 150px;
  background: #b31566;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

.contributor, 
.category {
  padding: 30px 20px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0 3px 6px #f5f5f5;
  margin-top: 30px;
}

.contributor p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    color: #707070;
}

.contributor h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    text-align: center;
    color: #707070;
}

.category__ttl {
  font-size: 22px;
  margin-bottom: 20px;
  color: #707070;
}

.category__link {
  display: block;
  padding: 10px 0;
  border-bottom: 1px solid #f5f5f5;
  position: relative;
}

a {
    color: #707070;
    text-decoration: none;
    margin: 0;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

li {
    list-style: none;
}

.category__link::before {
    position: absolute;
    top: 15px;
    right: 10px;
    content: "";
    width: 20px;
    height: 20px;
    background:url(<?php echo get_template_directory_uri(); ?>/img/arrow.svg) no-repeat;
    background-size: cover;
}

@media screen and (max-width: 768px){
  .sidebar {
    width: 100%;
    margin-top: 100px;
    border-top: 1px solid #707070;
    padding-top: 100px;
  }
}
</style>

<aside class="sidebar container">
  <div class="banner">
    <a href="https://coachtech.site/">
      <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="">
    </a>
  </div>
  
  <div class="contributor">
    <div class="contributor__icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
    </div>
    <h2>エストラ編集部</h2>
    <p>プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。</p>
  </div>

  <div class="category">
    <h2 class="category__ttl">Category</h2>
    <ul>
      <li><a class="category__link" href="<?php echo get_category_link( 7 ); ?>">HTML</a></li>
      <li><a class="category__link" href="<?php echo get_category_link( 6 ); ?>">CSS</a></li>
      <li><a class="category__link" href="<?php echo get_category_link( 5 ); ?>">JavaScript</a></li>
      <li><a class="category__link" href="<?php echo get_category_link( 4 ); ?>">PHP</a></li>
      <li><a class="category__link" href="<?php echo get_category_link( 3 ); ?>">MySQL</a></li>
    </ul>
  </div>
</aside>
