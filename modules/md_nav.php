<nav class="b-top-nav f-top-nav b-right j-top-nav menu">
    <ul class="b-top-nav__1level_wrap js_menu">
        <li class="b-top-nav__1level f-top-nav__1level  f-primary-b " style="border-radius: 3px !important;" ><a href="/"><i class="fa fa-home b-menu-1level-ico"></i>Главная <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a  class ="" href="?pages=progects"><i class="fa fa-folder-open b-menu-1level-ico"></i>Проекты<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="?pages=blog_post"><i class="fa fa-picture-o b-menu-1level-ico"></i>Блог <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="?pages=about_us"><i class="fa fa-code b-menu-1level-ico"></i>О нас <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
        <a href="?pages=pricing"><i class="fa fa-cloud-download b-menu-1level-ico"></i>Цены<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
        <a href="shortcode_typography.html"><i class="fa fa-inbox b-menu-1level-ico"></i>Бриф <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="shop_listing_col.html"><i class="fa fa-list b-menu-1level-ico"></i>Поддержка <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="?pages=contact_us"><i class="fa fa-folder-open b-menu-1level-ico"></i>Контакты<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
        <a href="education_listing.html"><i class="fa fa-folder-open b-menu-1level-ico"></i>Бланки<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
</ul>

</nav>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
   
    <script>
 $(function () {  
    $('.js_menu a').each(function () { 
        var location = window.location.href; 
        var link = this.href;  
        if(location == link) { 
            $(this).addClass('active');
        }
        console.log(location);
    });
    
});
        

    </script>