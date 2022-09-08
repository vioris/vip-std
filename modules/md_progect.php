<?php require '../mysql.php';?>
<div class="j-menu-container"></div>
<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
    <div class="b-inner-page-header__content">
        <div class="container">
            <h1 class="f-primary-l c-default">Реальные проекты</h1>
            
        </div>
    </div>
</div>
<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Главная</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Реальные проекты</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="l-inner-page-container">
            <div class="row">
            <?php foreach ($row as $key => $value) { ?>   
                <div class="col-md-4 col-sm-6 col-xs-12 b-item-apartment-block">
                    <div class="b-some-examples__item f-some-examples__item">
                        <div class="b-some-examples__item_img view view-sixth">
                            <img data-retina="" src="<?php echo $row['progect_screen'] ;?>" alt="" height="369">
                            <div class="b-item-hover-action f-center mask">
                                <div class="b-item-hover-action__inner">
                                    <div class="b-item-hover-action__inner-btn_group">
                                        <a href="real_estate_home_detail_left_sidebar.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-some-examples__item_info">
                            <div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="real_estate_home_detail_left_sidebar.html"><?php echo $row['progect_name'];?></a></div>
                            <div class="b-some-examples__item_info_level b-some-examples__item_double_info f-some-examples__item_double_info clearfix b-info-container--home">
                         <div class="b-blog-one-column__info_container">
                                <div class="b-blog-one-column__info">
                                  <a href="#"><img src="<?php echo $row['progect_thamb_url'];?>" width="100"/></a>
                                  <a href="#"><img src="<?php echo $row['progect_thamb_url_2'];?>" width="100"/></a>
                                 <a href="#"><img src="<?php echo $row['progect_thamb_url_3'];?>" width="100"/></a>
                                    </div>
                                    <div class="f-footer-mini-right f-selection">
                                        231 m2
                                    </div>
                                </div>
                            </div>
                            <div class="b-some-examples__item_info_level b-some-examples__item_description f-some-examples__item_description b-info-container--home">
                                <?php echo $row['progect_desc'];?>
                            </div>
                        </div>
                        <div class="b-some-examples__item_action">
                             <div class="b-remaining b-some-examples__item_total f-some-examples__item_total f-primary-b"><?php echo $row['progect_price'];?></div>
                            <div class="b-right">
                                <a href="<?php echo $row['progect_url'] ;?>" class="b-btn f-btn b-btn-sm b-btn-default f-primary-b">View detail</a>
                            </div>
                    
                        </div>
                    </div>             
       
                </div>
                <?php  break;  }?>               
          
            </div>
            <!--end row  -->
            <div class="f-center">
                <div class="b-pagination f-pagination">
                    <ul>
                        <li><a href="#">First</a></li>
                        <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="is-active-pagination"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#">Last</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>