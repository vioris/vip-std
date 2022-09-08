<?php require '../mysql.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Детали проекта | Viktor P. studio</title>
    <link rel="shortcut icon" href="favicon.ico">
    <?php include '../modules/md_head.php';?>
  </head>
  <body>
     <header>  
      <?php include  '../modules/md_header.php';?>
      </header>
    <div class="j-menu-container"></div>
    <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
      <div class="b-inner-page-header__content">
        <div class="container">
          <h1 class="f-primary-l c-default" style="color: #fff;">Детали проекта</h1>
          
        </div>
      </div>
    </div>
    <div class="l-main-container">
      <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
          <ul>
            <li><a href="/"><i class="fa fa-home"></i>Главная</a></li>
            <li><i class="fa fa-angle-right"></i><a href="">Проект</a></li>
            
          </ul>
        </div>
      </div>
       
      <section class="b-portfolio-slider-box container">
        <?php foreach ($row as $key => $value) { ?>   
        <div class="f-carousel-secondary b-portfolio__example-box f-some-examples-tertiary b-carousel-reset b-carousel-arr-square b-carousel-arr-square--big f-carousel-arr-square">
         <!--  <div class="b-carousel-title f-carousel-title f-carousel-title__color f-primary-b b-diagonal-line-bg-light">
            Lorem ipsum dolor sit amet conse
            <div class="b-arrow-title-box f-arrow-title-box">
              <a href="#"><i class="fa fa-angle-left"></i></a>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div> -->
          <div class="b-portfolio-slider-box__items">
            <div class="b-slider-images j-slider-images">
              <img class="" data-retina="" src="<?php echo $row['progect_screen']?>" width="700" alt="">
              <img class="" data-retina="" src="<?php echo $row['progect_screen']?>"  alt="">
              <img class="" data-retina="" src="<?php echo $row['progect_screen']?>"  alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="b-portfolio-overview b-diagonal-line-bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="f-primary-b b-title-b-hr--position b-title-b-hr f-title-b-hr">Описание</div>
              <p><?php echo $row['progect_desc'];?></p>
              <div class="b-portfolio-overview__project">
                <a href="#" class="f-project f-primary-b">
                  <i class="fa fa-share-square-o"></i>
                  launch project
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="f-primary-b b-title-b-hr f-title-b-hr f-h4-special">information</div>
              <div class="b-information-box f-information-box f-primary-b">
                <ul>
                  <li>
                    <strong class="f-information-box__name b-information-box__name">Автор</strong>
                    <i class="b-dotted f-dotted">:</i>
                    <span class="f-information_data"><?php echo $row['progect_autor'];?></span>
                  </li>
                  <li>
                    <strong class="f-information-box__name b-information-box__name">дата</strong>
                    <i class="b-dotted f-dotted">:</i>
                    <span class="f-information_data"><?php echo $row['progect_date'];?></span>
                  </li>
                  <li>
                    <strong class="f-information-box__name b-information-box__name">SKILLS </strong>
                    <i class="b-dotted f-dotted">:</i>
                    <span class="f-information_data">PHOTOSHOP / HTML 5 /  CSS 3</span>
                  </li>
                </ul>
              </div>
              <div class="b-overview__comment">
                <div class="b-mention-short-item">
                  <div class="b-mention-short-item__comment">
                    <div class="f-mention-short-item__comment_name f-primary-b">Really great work</div>
                    <div class="b-mention-short-item__comment_text f-mention-short-item__comment_text">usce eu nisi risus. Vestibulum mattis, velit nec pell entesque varius, mi est dignissim massa, at volu  pat mi augue quis risus. Suspendisse vitae lectus in tellus scelerisque aliquam. Lorem ipsum dolor sit amet purus consectetuer vulputate vitae...</div>
                    <div class="b-stars-group f-stars-group">
                      <i class="fa fa-star is-active-stars"></i>
                      <i class="fa fa-star is-active-stars"></i>
                      <i class="fa fa-star is-active-stars"></i>
                      <i class="fa fa-star is-active-stars"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="b-mention-short-item__user">
                    <div class="b-mention-short-item__user_img b-right">
                      <img class="fade-in-animate" data-retina src="img/users/user.png" alt=""/>
                    </div>
                    <div class="b-mention-short-item__user_info f-right">
                      <div class="f-mention-short-item__user_name f-primary-b">Mark Alexis</div>
                      <div class="f-mention-short-item__user_position">CEO & Founder - Envato</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <?php break; };?>

      </section>
   
      <section class="container">
        <div class="l-inner-page-container">
          <div class="b-carousel-secondary f-carousel-secondary b-portfolio__example-box f-some-examples-tertiary b-carousel-reset">
            <div class="b-carousel-title f-carousel-title f-carousel-title__color f-primary-b">Похожие проекты</div>
            <div class="b-some-examples f-some-examples j-carousel-secondary">
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/video-pic10.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="http://player.vimeo.com/video/48511895" class="b-btn f-btn b-btn-light f-btn-light info fancybox fancybox.iframe" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/our_portfolio_dt-1.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="img/portfolio/big/our_portfolio_dt-1.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/our_portfolio_dt-2.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="img/portfolio/big/our_portfolio_dt-2.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/our_portfolio_dt.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="img/portfolio/big/our_portfolio_dt.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/our_portfolio_dt-2.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="img/portfolio/big/our_portfolio_dt-2.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/our_portfolio_dt.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="img/portfolio/big/our_portfolio_dt.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
              <div class="b-app-with-img__item">
                <div class="b-app-with-img__item_img view view-sixth">
                  <img data-retina="" src="img/portfolio/our_portfolio_dt-1.jpg" alt="">
                  <div class="b-item-hover-action f-center mask">
                    <div class="b-item-hover-action__inner">
                      <div class="b-item-hover-action__inner-btn_group">
                        <a href="img/portfolio/big/our_portfolio_dt-1.jpg" class="b-btn f-btn b-btn-light f-btn-light info fancybox" title="Mobile games" rel="group1"><i class="fa fa-arrows-alt"></i></a>
                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-app-with-img__item_text f-center">
                  <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b"><a href="#">Mobile games</a></div>
                  <div class="b-app-with-img__item_info f-app-with-img__item_info f-primary">Mobile Design, 3D Graphic</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <?php include '../modules/md_footer.php';?>
    </footer>
    <?php include '../modules/md_script.php';?>
  </body>
</html>