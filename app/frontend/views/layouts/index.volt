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
            <a href="#">
                <div class="banner-text theblue">
                    <h1>Delivery</h1>
                    <span class="tagline">Services</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="{{url('assets/images/banners/delivery_service.jpg')}}" />
            </a>
        </div>
        <div class="col-xs-12 col-lg-6 no-margin text-right banner">
            <a href="{{url('category/')}}">
                <div class="banner-text right">
                    <h1>Time &amp; Style</h1>
                    <span class="tagline">View All</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="{{url('assets/images/banners/food_packages.jpg')}}" />
            </a>
        </div>
    </div><!-- /.container -->
</section><!-- /#banner-holder -->
<!-- ========================================= HOME BANNERS : END ========================================= -->
<section id="bestsellers" class="wow fadeInUp">
<div class="container">
<h1 class="section-title">Bundle Packs</h1>
<div class="product-grid-holder">
                    {% for keys, values in products %}
                    
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon green"><span>{{values.productCat.category_name}}</span></div> 
                                <div class="image">
                                    <img alt="" id="item{{keys+1}}_img" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~values.front_image)}}" />
                                    <input type="hidden" id="item{{keys+1}}_name" value="{{values.title | capitalize}}">
                                    <input type="hidden" id="item{{keys+1}}_price" value="{{values.sale_price}}">
                                    <input type="hidden" id="item{{keys+1}}_pro_id" value="{{values.product_id}}">
                                </div>
                                <div class="body">
                                    <div class="label-discount green"></div>
                                    <div class="title">
                                        <a href="javascript:void(0)">{{values.title | capitalize}}</a>
                                    </div>
                                    <p>
                                        <small>{{helper.wordLimit(values.description,80)}}</small>
                                    </p>
                                    <div class="brand">Peppered Rice</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">&#8358;0.00</div>
                                    <div class="price-current pull-right">&#8358;{{values.sale_price}}</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">add to cart</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    
                    <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                        <div style="height:50px;"></div>
                        <div class="body">
                                    <div class="title">
                                        <a href="{{url('category/')}}">VIEW ALL</a>
                                    </div>
                                    <div class="brand">Peppered Rice</div>
                                </div>
                        
                    </div>
                    
</div>
</div>
</section>

<!-- ========================================= RECENTLY VIEWED ========================================= -->
<section id="recently-reviewd" class="wow fadeInUp" style="margin-top:-80px;">
<div class="container">
<div class="carousel-holder hover">
<div class="title-nav">
<h2 class="h1">Recommended</h2>
<div class="nav-holder">
<a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
<a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
</div>
</div><!-- /.title-nav -->
<div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
{% for keys,values in available %}
<div class="no-margin carousel-item product-item-holder size-small hover">
    <div class="product-item">
        <div class="ribbon green"><span>{{values.productCat.category_name}}</span></div>
        <div class="image">
            <img alt="" id="item{{keys+1}}_img" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~values.front_image)}}" />
            <input type="hidden" id="item{{keys+1}}_name" value="{{values.title | capitalize}}">
            <input type="hidden" id="item{{keys+1}}_price" value="{{values.sale_price}}">
            <input type="hidden" id="item{{keys+1}}_pro_id" value="{{values.product_id}}">
        </div>
        <div class="body">
            <div class="title">
                <a href="javascript:void(0)">{{values.title | capitalize}}</a>
            </div>
            <div class="brand">Peppered Rice</div>
        </div>
<div class="prices">
    <div class="price-prev">&#8358;0.00</div>
    <div class="price-current pull-right">&#8358;{{values.sale_price}}</div>
</div>
<div class="hover-area">
    <div class="add-cart-button">
        <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">add to cart</a>
    </div>
    
</div>

</div><!-- /.product-item -->
</div><!-- /.product-item-holder -->
{% endfor %}
</div><!-- /#recently-carousel -->
</div><!-- /.carousel-holder -->
</div><!-- /.container -->
</section><!-- /#recently-reviewd -->
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->
</div><!-- /.widgets-row-->
</div><!-- /.container --></div>
{% endblock %}