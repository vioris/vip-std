<?php require_once 'config.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>        
        <link rel="shortcut icon" href="favicon.ico">
        <?php include  'modules/md_head.php';?>
    </head>
    <body >
        <header >  
        <?php include 'modules/md_header.php'; ?>
       </header>
        <div class="j-menu-container"></div>
        <div class="l-main-container">
            <div class="b-slidercontainer">
                <div class="b-slider j-contentwidthslider">
                    <ul>
                        <li data-transition="3dcurtain-vertical" data-slotamount="7">
                            <div class="tp-bannertimer"></div>
                            <img data-retina src="img/slider/slider-lg__bg.png">
                            <div class="caption sfb"  data-x="center" data-y="bottom" data-speed="700" data-start="1700" data-easing="Power4.easeOut" style="z-index: 2">
                                <img data-retina src="img/slider/slider_main_2-1.png">
                            </div>
                            <div class="caption sfl"  data-x="50" data-y="bottom" data-speed="700" data-start="2500" data-easing="Power4.easeOut">
                                <img data-retina src="img/slider/slider_main_2-2.png">
                            </div>
                            <div class="caption sfr"  data-x="right" data-y="bottom" data-hoffset="-30" data-speed="700" data-start="2500" data-easing="Power4.easeOut">
                                <img data-retina src="img/slider/slider_main_2-3.png">
                            </div>
                            <div class="caption lft"  data-x="center" data-y="30" data-speed="600" data-start="2600">
                                <h1 class="f-primary-b c-white" >превосходные сайты и шаблоны</h1>
                            </div>
                            <div class="caption"  data-x="center" data-y="90" data-speed="600" data-start="3200">
                                <p class="f-primary-b f-slider-lg-item__text_desc f-center c-white" >
                                    <h4 class="c-white">
                                    Универсальный шаблоны с более чем 100 psd-файлами для корпоративных целей,<br/> Путешествий, образования, недвижимости,
                                    и многое другое.
                                    </h4>
                                </p>
                            </div>
                        </li>
                        <li data-transition="" data-slotamount="7">
                            <div class="tp-bannertimer"></div>
                            <img data-retina src="img/slider/slider_shop_1.jpg">
                            <div class="caption sfb"  data-x="30" data-y="bottom" data-speed="700" data-start="1700" data-easing="Power4.easeOut"><img data-retina src="img/slider/slider_shop_1-1.png"></div>
                            <div class="caption"  data-x="180" data-y="bottom" data-voffset="-1" data-speed="2100" data-start="3300" data-easing="easeOutBack"><img data-retina src="img/slider/slider_shop_1-2.png"></div>
                            <div class="caption lfr"  data-x="400"  data-y="100" data-speed="300" data-start="2000">
                                <div class="b-header-group f-header-group f-header-group--light">
                                    <h2 class="f-primary-l">Летняя</h2>
                                    <h1 class="f-primary-sb">коллекция</h1>
                                </div>
                            </div>
                            <div class="caption lfb"  data-x="400" data-y="270" data-speed="300" data-start="2300">
                                <p class="f-primary-b f-uppercase f-slider-lg_text-medium c-white" >успейти получить летнюю коллекцию</p>
                            </div>
                            <div class="caption lfb"  data-x="400" data-y="300" data-speed="300" data-start="2600">
                                <p class="f-primary-b f-uppercase f-slider-lg_text-medium c-white" >С сумасшедшей скидкой</p>
                            </div>
                            <div class="caption"  data-x="400" data-y="340" data-speed="600" data-start="3000">
                                <p><a class="b-link f-link f-primary-b f-uppercase" href="#">вперед <span><i class="fa fa-chevron-right"></i></span></a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> 
    <!-- our service  -->         
  <?php include 'modules/md_ourservice.php' ?>
    <!-- service end --> 
 <section class="b-about-container f-about-container b-bg-gradient b-about-container__with-img-l">
  <div class="container">
    <div class="b-about-container__img"><img class="j-data-element" data-animate="fadeInUp" data-retina src="img/animation-data/about-img.png" alt=""/></div>
    <div class="b-about-container__inner j-data-element" data-animate="fadeInRight">
      <div class="b-about-container__title f-about-container__title f-secondary-b">Education is great!</div>
      <div class="b-about-container__title_second f-about-container__title_second f-secondary-l">Are you looking the best School for
        your child?
      </div>
      <div class="b-about-container__text f-about-container__text f-secondary-l">
        Maecenas eros tellus, vulputate in felis eu, tristique lobortis nisl. Nullam ornare, justo sit amet cursus
        auctor, lorem lacus laoreet ante, nec lacinia diam urna ut justo. Pellentesque blandit iaculis justo, ut
        imperdiet metus eleifend nec. Aenean a vestibulum risus. Nulla vitae ultricies velit, et pulvinar mauris. Donec
        mattis sagittis enim. Vivamus ac sapien placerat nisi elementum
      </div>
      <a class="f-more f-secondary-b" href="#">Read more <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</section>
<section class="b-diagonal-line-bg-light b-section-info b-section-info__img-r f-section-info__img-r">
    <div class="container">
        <div class="row">
            <div class="b-section-info__img col-sm-6 col-xs-12">
                <img data-retina class="j-data-element" data-animate="fadeInRight" src="img/animation-data/responsive_img_2.png" alt=""/>
            </div>
        <div class="b-section-info__text f-section-info__text col-sm-6 col-xs-12">
            <h2 class="f-primary-l f-center c-default">О наших проектах</h2>
            <p class="f-section-info__text_short">Основные технические данные проектов.</p>
               <hr class="b-hr-light"/>
                <div class="b-section-info__text_group">
                    <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium f-color-primary b-list-markers-2col f-list-markers-2col">
                     <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> 10+ Homepage versions</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> 10+ shortcode files</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> 15+ blog layouts</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> 30+ inner pages</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> 0+ Portfolio layout</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> and much more...</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> E-commerce intergrated</a></li>
                        </ul>
                        <a href="#" class="b-btn f-btn b-btn-default b-btn-md f-primary-b">request a quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our work section -->
   <?php include 'modules/md_ourwork.php';?>
                                                        
    <!-- end our work section -->
       
   </div>
   <!-- pricing -->
   <?php include 'modules/md_pricing.php';?>
   <!-- /pricing -->
   <!-- fАQ -->
   <?php  include 'modules/md_quest.php';?>
   <!-- /fАQ -->
   <!-- client -->
            <div class="b-info-container f-info-container">
                <div class="container">
                    <div class="b-info-container__title f-info-container__title">
                        <i class="fa fa-twitter"></i><br/>
                        <span class="f-b f-secondary-b">frexystudio</span>
                    </div>
                    <p class="b-info-container__text f-info-container__text f-secondary-l-it">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan porttitor egestas.<br/> Suspendisse gravida ultrices convallis. Interdum et malesuada fames <a href="http://bly.shotlinks.com">http://bly.shotlinks.com</a></p>
                </div>
            </div>
            <!-- client end -->
            <!-- blog -->
            <section class="b-infoblock b-diagonal-line-bg-light f-secondary">
                <div class="container">
                    <h2 class="f-primary-l f-center c-default">Наши последние статьи</h2>
                    <p class="b-infoblock-description f-desc-section f-center f-employee__desc f-small">Reprehendunt in, quo ea esse civibus
                    suavitate. Pro gubergren persecuti moderatius, id laudem vix, an eos. Adversarium principes.</p>
                    <div class="b-carousel-primary">
                        <div class="j-carousel-primary">
                            <div class="b-carousel-primary__item">
                                <div class="b-news-item f-news-item">
                                    <div class="hidden-xs b-news-item__img view view-sixth">
                                        <img data-retina="" src="img/homepage/news_1.png" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">
                                                <div class="b-item-hover-action__inner-btn_group">
                                                    <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-news-item__info">
                                        <div class="b-news-item__info_title f-news-item__info_title f-primary-b">Vestibulum accumsan</div>
                                        <div class="b-news-item__info_additional">
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-calendar-o"></i> 22, February
                                            </span>
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-comments"></i> 2 comments
                                            </span>
                                        </div>
                                        <div class="b-news-item__info_text f-news-item__info_text">
                                            Vestibulum accumsan habitasse dictum id ut Curabitur amet libero mauris condimentum. Ut in lobortis
                                            nulla sed augueuisque aenean
                                        </div>
                                        <a class="f-news-item__info_more f-more f-secondary-b" href="blog_detail_right_slidebar.html">Read more <i class="fa fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="b-carousel-primary__item">
                                <div class="b-news-item f-news-item">
                                    <div class="hidden-xs b-news-item__img view view-sixth">
                                        <img data-retina="" src="img/homepage/news_1.png" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">
                                                <div class="b-item-hover-action__inner-btn_group">
                                                    <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-news-item__info">
                                        <div class="b-news-item__info_title f-news-item__info_title f-primary-b">Vestibulum accumsan</div>
                                        <div class="b-news-item__info_additional">
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-calendar-o"></i> 22, February
                                            </span>
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-comments"></i> 2 comments
                                            </span>
                                        </div>
                                        <div class="b-news-item__info_text f-news-item__info_text">
                                            Vestibulum accumsan habitasse dictum id ut Curabitur amet libero mauris condimentum. Ut in lobortis
                                            nulla sed augueuisque aenean
                                        </div>
                                        <a class="f-news-item__info_more f-more f-secondary-b" href="blog_detail_right_slidebar.html">Read more <i
                                        class="fa fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="b-carousel-primary__item">
                                <div class="b-news-item f-news-item">
                                    <div class="hidden-xs b-news-item__img view view-sixth">
                                        <img data-retina="" src="img/homepage/news_1.png" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">
                                                <div class="b-item-hover-action__inner-btn_group">
                                                    <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-news-item__info">
                                        <div class="b-news-item__info_title f-news-item__info_title f-primary-b">Vestibulum accumsan</div>
                                        <div class="b-news-item__info_additional">
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-calendar-o"></i> 22, February
                                            </span>
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-comments"></i> 2 comments
                                            </span>
                                        </div>
                                        <div class="b-news-item__info_text f-news-item__info_text">
                                            Vestibulum accumsan habitasse dictum id ut Curabitur amet libero mauris condimentum. Ut in lobortis
                                            nulla sed augueuisque aenean
                                        </div>
                                        <a class="f-news-item__info_more f-more f-secondary-b" href="blog_detail_right_slidebar.html">Read more <i
                                        class="fa fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="b-carousel-primary__item">
                                <div class="b-news-item f-news-item">
                                    <div class="hidden-xs b-news-item__img view view-sixth">
                                        <img data-retina="" src="img/homepage/news_2.png" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">
                                                <div class="b-item-hover-action__inner-btn_group">
                                                    <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-news-item__info">
                                        <div class="b-news-item__info_title f-news-item__info_title f-primary-b">Vestibulum accumsan</div>
                                        <div class="b-news-item__info_additional">
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-calendar-o"></i> 22, February
                                            </span>
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-comments"></i> 2 comments
                                            </span>
                                        </div>
                                        <div class="b-news-item__info_text f-news-item__info_text">
                                            Vestibulum accumsan habitasse dictum id ut Curabitur amet libero mauris condimentum. Ut in lobortis
                                            nulla sed augueuisque aenean
                                        </div>
                                        <a class="f-news-item__info_more f-more f-secondary-b" href="blog_detail_right_slidebar.html">Read more <i
                                        class="fa fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="b-carousel-primary__item">
                                <div class="b-news-item f-news-item">
                                    <div class="hidden-xs b-news-item__img view view-sixth">
                                        <img data-retina="" src="img/homepage/news_1.png" alt="">
                                        <div class="b-item-hover-action f-center mask">
                                            <div class="b-item-hover-action__inner">
                                                <div class="b-item-hover-action__inner-btn_group">
                                                    <a href="blog_detail_right_slidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-news-item__info">
                                        <div class="b-news-item__info_title f-news-item__info_title f-primary-b">Vestibulum accumsan</div>
                                        <div class="b-news-item__info_additional">
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-calendar-o"></i> 22, February
                                            </span>
                                            <span class="f-news-item__info_additional_item b-news-item__info_additional_item">
                                                <i class="fa fa-comments"></i> 2 comments
                                            </span>
                                        </div>
                                        <div class="b-news-item__info_text f-news-item__info_text">
                                            Vestibulum accumsan habitasse dictum id ut Curabitur amet libero mauris condimentum. Ut in lobortis
                                            nulla sed augueuisque aenean
                                        </div>
                                        <a class="f-news-item__info_more f-more f-secondary-b" href="blog_detail_right_slidebar.html">Read more <i
                                        class="fa fa-chevron-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  <?php include 'modules/md_article.php';?> -->
            <!-- blog end -->
            <!-- contаct -->
            <!-- <?php include'modules/md_contact.php';?> -->
            <!-- /contаct -->
            <footer>
                <?php include 'modules/md_footer.php';?>
            </footer>
            <?php include 'modules/md_script.php';?>
        </body>
    </html>