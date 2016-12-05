{% extends "templates/base.volt" %}

{% block head %}

{% endblock %}
{% block content %}
     <div id="top-banner-and-menu" class="homepage2">
    <div class="container">
    
            <!-- ========================================== SECTION – HERO ========================================= -->
            
<div id="hero">
    <div id="owl-main" class="owl-carousel height-md owl-inner-nav owl-ui-md">
        
        <div class="item"  style="background: url(assets/images/slider1.jpg) no-repeat;">
            
        </div><!-- /.item -->

        <div class="item" style="background: url(assets/images/homedelivery.jpg) no-repeat;">
            
        </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
</div>
            
<!-- ========================================= SECTION – HERO : END ========================================= -->       </div>
    
</div><!-- /.homepage2 -->

<!-- ========================================= HOME BANNERS ========================================= -->
<section id="banner-holder" class="wow fadeInUp">
    <div class="container">
        <div class="col-xs-12 col-lg-6 no-margin banner">
            <a href="category-grid-2">
                <div class="banner-text theblue">
                    <h1>New Life</h1>
                    <span class="tagline">View All Menus</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="{{url('assets/images/banners/banner-narrow-01.jpg')}}" />
            </a>
        </div>
        <div class="col-xs-12 col-lg-6 no-margin text-right banner">
            <a href="category-grid-2">
                <div class="banner-text right">
                    <h1>Time &amp; Style</h1>
                    <span class="tagline">View All Food Packages</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="{{url('assets/images/banners/banner-narrow-02.jpg')}}" />
            </a>
        </div>
    </div><!-- /.container -->
</section><!-- /#banner-holder -->
<!-- ========================================= HOME BANNERS : END ========================================= -->
<!-- ========================================= TOP BRANDS ========================================= -->
<section id="top-brands" class="wow fadeInUp">
<div class="container">
<div class="carousel-holder">
<div class="title-nav">
<h1>Menu Type</h1>
<div class="nav-holder">
<a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
<a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
</div>
</div><!-- /.title-nav -->
<div id="owl-brands" class="owl-carousel brands-carousel">
{% for keys,values in category %}
<div class="carousel-item">
<a href="{{url('category/?cat='~values['category_id'])}}&task={{values['category_name']}}">
<!--<strong>{{values['category_name'] | capitalize}}</strong>-->
<img alt="" src="assets/images/brands/brand-01.jpg" />
</a>
</div><!-- /.carousel-item -->
{% endfor %}
<div class="carousel-item">
<a href="{{url('category/')}}">
<img alt="" src="assets/images/brands/brand-02.jpg" />
<!--<img alt="" src="assets/images/brands/brand-01.jpg" />-->
</a>
</div><!-- /.carousel-item -->
</div><!-- /.brands-caresoul -->
</div><!-- /.carousel-holder -->
</div><!-- /.container -->
</section><!-- /#top-brands -->


</div><!-- /.widgets-row-->
</div><!-- /.container --></div>
{% endblock %}