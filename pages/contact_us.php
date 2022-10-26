<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Наши контакты | Vitor P. Studio</title>
       <link rel="shortcut icon" href="../pages/favicon.ico">
        <?php include 'modules/md_head.php';?>
    </head>
    <body>
        <header >
            <?php include 'modules/md_header.php';?>
        </header>
        <div class="j-menu-container"></div>
        <div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
            <div class="b-inner-page-header__content">
                <div class="container">
                    <h1 class="f-primary-l c-default">Наши контакты</h1>
                </div>
            </div>
        </div>
        <div class="l-main-container">
            <div class="b-breadcrumbs f-breadcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
                        <li><i class="fa fa-angle-right"></i><span> Контакты </span></li>
                    </ul>
                </div>
            </div>
            <section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">
                <div class="b-google-map__map-view b-google-map__map-height">
                    <!-- Google map load -->
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.895776787527!2d27.491138015752423!3d53.89805638009835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbdaad4e291f8d%3A0x5b1999b96827b305!2z0YPQuy4g0K_QvdC60Lgg0JzQsNCy0YDQsCAyOSwg0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1663075906369!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                </div>
                <img data-retina src="img/google-map-marker-default.png" data-label="" class="marker-template hidden" />
                <div class="b-google-map__info-window-template hidden"
                    data-selected-marker="0"
                    data-width="250">
                    <div class="b-google-map__info-window f-center b-google-map__info-office f-google-map__info-office">
                        <h4 class="f-primary-b">Viktor P. Studio</h4>
                        <small>Главный офис</small>
                    </div>
                </div>
            </section>
            <div class="b-desc-section-container">
                <section class="container b-welcome-box">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <h1 class="is-global-title f-center">Мы были бы рады услышать  вас</h1>
                            <p class="f-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a scelerisque turpis, ut porta turpis. Integer imperdiet aliquet velit, vel tincidunt lectus dictum sed. Curabitur dignissim ut massa vel tincidunt. Nullam imperdiet pharetra ipsum in lobortis. Etiam convallis, felis quis dapibus dictum, libero mauris luctus nunc, non fringilla purus ligula non justo. Nullam </p>
                        </div>
                    </div>
                </section>
                <section class="container">
                    <div class="row">
                        <div class="col-sm-6 b-contact-form-box">
                            <h3 class="f-primary-b b-title-description f-title-description">
                           Свяжитесь с нами
                            <div class="b-title-description__comment f-title-description__comment f-primary-l">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc at augue tincidunt </div>
                            </h3>
                            <div class="row">
                                <form action="" method="post">
                                    <div class="col-md-6">
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="name">Ваше имя</label>
                                            <div class="b-form-vertical__input">
                                                <input type="text" id="name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="email">Ваш email</label>
                                            <div class="b-form-vertical__input">
                                                <input type="text" id="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="website">Ваш вебсайт</label>
                                            <div class="b-form-vertical__input">
                                                <input type="text" id="website" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="title">Ваш заголовок</label>
                                            <div class="b-form-vertical__input">
                                                <input type="text" id="title" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="b-form-row b-form--contact-size">
                                            <label class="b-form-vertical__label">Ваше сообщение</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="b-form-row">
                                            <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">отправить сообщение</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 b-contact-form-box">
                            <h3 class="f-primary-b b-title-description f-title-description">
                            контактная информация
                            <div class="b-title-description__comment f-title-description__comment f-primary-l">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc at augue tincidunt </div>
                            </h3>
                            <div class="row b-google-map__info-window-address">
                                <ul class="list-unstyled">
                                    <li class="col-xs-12">
                                        <div class="b-google-map__info-window-address-icon f-center pull-left">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div>
                                            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                                Viktor P. Studio
                                            </div>
                                            <div class="desc">1234 Street Name, City Name, Беларусия</div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <div class="b-google-map__info-window-address-icon f-center pull-left">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div>
                                            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                                домашняя страница
                                            </div>
                                            <div class="desc"><a href="/">http://Vip-std.site</a></div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <div class="b-google-map__info-window-address-icon f-center pull-left">
                                            <i class="fa fa-skype"></i>
                                        </div>
                                        <div>
                                            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                                Skype
                                            </div>
                                            <div class="desc">ask.company</div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <div class="b-google-map__info-window-address-icon f-center pull-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div>
                                            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                                                email
                                            </div>
                                            <div class="desc">mail@example.com</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--  -->
        </div>
        <footer>
            <?php include 'modules/md_footer.php';?>
        </footer>
        
        <?php include 'modules/md_script.php';?>
    </body>
</html>