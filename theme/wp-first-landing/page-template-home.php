<?php
/*
Template Name: Для главной
*/
?>
<?php get_header() ?>

<div class="topSlider">
  <div class="slider">
    <?php foreach(wpland_get_new_posts('advertisement', -1) as $article):?>
      <div class="slider__sale">
          <div class="slider__slogan-1"><?php echo $article['title']?></div>
          <div class="slider__slogan-2"><?php echo $article['content']?></div>
          <div class="slider__blogButtons">
              <div class="btn btn-green">Buy now!</div>
              <div class="btn btn--white">Learn more</div>
          </div>
      </div>
      <?php endforeach;?>
  </div>
</div>
<section class="represent">
  <div class="wrapper">
      <h2 class="blogTitle">Present your site in the most beautiful way</h2>
      <div class="repItem__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem
          ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
      </div>
     
      <div class="repItems">
          <?php foreach(wpland_get_new_posts('presents') as $article):?>
          <div class="repItem">
              <img src="<?php echo $article['img']?>" alt="" class="repItem__img">
              <div class="repItem__title"><?php echo $article['title']?></div>
              <div class="repItem__text"><?php echo $article['content']?></div>
          </div>
          <?php endforeach;?>
      </div>
  </div>
</section>
<div class="features">
  <div class="wrapper">
      <div class="ftItems">
      <?php foreach(wpland_get_new_posts('features', -1) as $article):?>
          <div class="ftItem">
              <div class="ftItem__img">
                <img class="ftItem__icon" src="<?php echo $article['img']?>" alt="res">
              </div>
              <div class="ftItem__box">
                  <div class="ftItem__title"><?php echo $article['title']?></div>
                  <div class="ftItem__text"><?php echo $article['content']?></div>
                  <div class="ftItem__meta">
                    <a class="ftItem__link-more" href="<?php echo get_permalink($article['id']); ?>">Read more<i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                  </div>
              </div>
          </div>
          <?php endforeach;?>
      </div>
  </div>
</div>
<section class="discover">
  <div class="wrapper">
      <div class="disItems">
          <div class="disItemL"><img src="<?echo WPLAND_DIR_IMG?>adv-4.png" alt="labore" class="disItemL__img"></div>
          <div class="disItemR">
              <h2 class="blogTitle blogTitle--left blogTitle--center">Discover the advantages</h2>
              <div class="disItemR__text">Lorem ipsum dolor sit amet conse ctetur adiisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</div>
              <div class="disItemR__box">
              <?php foreach(wpland_get_new_posts('discover', -1) as $article):?>
                  <div class="disItemR__list">
                      <div class="disItemR__imgCircle">
                        <img src="<?php echo $article['img']?>" alt="adv" class="disItemR__icon">
                      </div>
                      <span class="disItemR__listText"><?php echo $article['title']?></span>
                   </div>
              <?php endforeach;?>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="advantages">
  <div class="advItems">
    <?php foreach(wpland_get_new_posts('advantages') as $article):?>
      <div class="advItem advItem-left">
          <div class="advItem__box">
              <img src="<?php echo $article['img']?>" alt="" class="advItem__icon advItem__icon-small">
              <div class="advItem__title"><?php echo $article['title']?></div>
              <div class="advItem__text"><?php echo $article['content']?></div>
          </div>
      </div>
    <?php endforeach;?>
  </div>
</section>
<section class="blog">
  <div class="wrapper">
      <h2 class="blogTitle">From the blog</h2>
      <div class="blogItems">
        <?php foreach(wpland_get_new_posts() as $article):?>
          <div class="blogItem">
              <img src="<?php echo $article['img']?>" alt="" class="blogItem__img">
              <div class="blogItem__title"><?php echo $article['title']?></div>
              <div class="blogItem__text"><?php echo $article['content']?></div>
              <div class="blogItem__meta">
                <span class="blogItem__metaItem">
                  <span class="blogItem__metaIcon fa fa-user"></span>
                  <span class="some"><?php echo $article['author']?></span>
                </span>
                  <span class="blogItem__metaItem">
                  <span class="blogItem__metaIcon fa fa-calendar"></span>
                  <span class="some"><?php echo $article['date']?></span>
                </span>
              </div>
          </div>
        <?php endforeach;?>
      </div>
      <div class="blogButtons">
          <a class="btn btn-green" href="<?php echo $wp_rewrite->front?>blog">
            See all posts
          </a>
      </div>
  </div>
</section>
<div class="stats">
  <div class="wrapper">
      <div class="statItems">
        <?php foreach(wpland_get_new_posts('stats', -1) as $article):?>
          <div class="statItem">
              <div class="statItem__icon"><img src="<?php echo $article['img']?>" alt=""></div>
              <div class="statItem__number"><?php echo $article['title']?></div>
              <div class="statItem__text"><?php echo $article['content']?></div>
          </div>
        <?php endforeach;?>
      </div>
  </div>
</div>
<section class="packages">
  <div class="wrapper">
      <h2 class="blogTitle">Affordable Packages</h2>
      <div class="pacItems">
      <?php foreach(wpland_get_new_posts('packages', -1, 'ASC') as $article):?>
          <div class="pacItem">
              <div class="pacItem__title"><?php echo $article['title']?></div>
              <div class="pacItem__price"><sup class="pacItem__sup">$</sup><?php echo $article['content']?><sub class="pacItem__sub">/month</sub></div>
              <ul class="pacItem__lists">
              <?php foreach(packages_list($article['id']) as $field){ echo $field;}?>              
              </ul>
          </div>
          <?php endforeach;?>
      </div>
  </div>
</section>
<div class="botSlider">
  <div class="sliderBot">
    <?php foreach(wpland_get_new_posts('reviews', -1) as $article):?>
      <div class="slider__team">
          <div class="sliderBot__img"><img src="<?php echo $article['img']?>" alt="tom" class="sliderBot__photo"></div>
          <div class="sliderBot__text"><?php echo $article['content']?></div>
          <div class="sliderBot__title"><?php echo $article['title']?></div>
          <div class="sliderBot__position"><?php echo $article['profession']?></div>
      </div>
    <?php endforeach;?>
  </div>
</div>
 
<?php get_footer() ?>  