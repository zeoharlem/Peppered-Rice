{% extends "templates/base.volt" %}

{% block head %}

{% endblock %}
{% block content %}
     <div id="top-banner-and-menu" class="homepage2" style="background: url(assets/images/backfull.jpg) no-repeat;">
    <div class="container">
        <div class="col-xs-12">
            <!-- ========================================== SECTION – HERO ========================================= -->
            
<div id="hero">
    <div id="owl-main" class="owl-carousel height-md owl-inner-nav owl-ui-md">
        
        <div class="item" style="background:none !important;">
            <div class="container-fluid">
                <img src="{{url('assets/images/slide2.png')}}" class="caption vertical-center text-left left" style="margin-top:-100px;" />
                <div class="caption vertical-center text-left right" style="padding-right:0;">
                    <div class="big-text fadeInDown-1">
                        <span class="small">Door to </span><span class="big">DOOR</span>Deliveries
                    </div>

                    <div class="excerpt fadeInDown-2">
                        Packaged Rice &amp; Beans<br>
                        &amp; correct meat<br>
                        spiced
                    </div>
                    <div class="small fadeInDown-2">
                        terms and conditions apply
                    </div>
                    <div class="button-holder fadeInDown-3">
                        <a href="javascript:void(0)" class="big le-button ">Order Now</a>
                    </div>
                </div><!-- /.caption -->
            </div><!-- /.container-fluid -->
        </div><!-- /.item -->

        <div class="item" style="background:none !important;">
            <div class="container-fluid">
                <img src="{{url('assets/images/homedelivery.png')}}" class="caption vertical-center text-right right" style="margin-top:-100px;" />
                <div class="caption vertical-center text-left left" style="padding-left:7%;">
                    <div class="big-text fadeInDown-1">
                        Want a<span class="big"><span class="sign">&#8358;</span>200</span>Discount?
                    </div>

                    <div class="excerpt fadeInDown-2">
                        on our packaged foods
                    </div>
                    <div class="small fadeInDown-2">
                        terms and conditions apply
                    </div>
                    <div class="button-holder fadeInDown-3">
                        <a href="javascript:void(0)" class="big le-button ">check menu</a>
                    </div>
                </div><!-- /.caption -->
            </div><!-- /.container-fluid -->
        </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
</div>
            
<!-- ========================================= SECTION – HERO : END ========================================= -->       </div>
    </div>
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
<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                <li class="active"><a href="#featured" data-toggle="tab">All</a></li>
                <li><a href="#new-arrivals" data-toggle="tab">Regular 1 Pack</a></li>
                <li><a href="#top-sales" data-toggle="tab">Regular 2 Pack</a></li>
                <li><a href="#top-sales" data-toggle="tab">Regular 3 Pack</a></li>
                <li><a href="#top-sales" data-toggle="tab">Executive Pack</a></li>
                <li><a href="#top-sales" data-toggle="tab"><strong>Breakfast</strong></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">
                    {% for keys, values in products %}
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>selling</span></div> 
                                <div class="image">
                                    <img alt="" id="item{{keys+1}}_img" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~values['front_image'])}}" />
                                    <input type="hidden" id="item{{keys+1}}_name" value="{{values['title'] | capitalize}}">
                                    <input type="hidden" id="item{{keys+1}}_price" value="{{values['sale_price']}}">
                                    <input type="hidden" id="item{{keys+1}}_pro_id" value="{{values['product_id']}}">
                                </div>
                                <div class="body">
                                    <div class="label-discount green"></div>
                                    <div class="title">
                                        <a href="javascript:void(0)">{{values['title']|capitalize}}</a>
                                    </div>
                                    <div class="brand">Peppered Rice</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">&#8358;0.00</div>
                                    <div class="price-current pull-right">&#8358;{{values['sale_price']}}</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            VIEW ALL</a>
                    </div> 

                </div>
                <div class="tab-pane" id="new-arrivals">
                    <div class="product-grid-holder">
                        
                        {% for keys, values in available %}
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>selling</span></div> 
                                <div class="image">
                                    <img alt="" src="{{url('assets/uploads/'~values['front_image'])}}" />
                                    <input type="hidden" id="item{{keys+1}}_name" value="{{values['title'] | capitalize}}">
                                    <input type="hidden" id="item{{keys+1}}_price" value="{{values['sale_price']}}">
                                    <input type="hidden" id="item{{keys+1}}_pro_id" value="{{values['product_id']}}">
                                </div>
                                <div class="body">
                                    <div class="label-discount green"></div>
                                    <div class="title">
                                        <a href="javascript:void(0)">{{values['title']|capitalize}}</a>
                                    </div>
                                    <div class="brand">Peppered Rice</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">&#8358;0.00</div>
                                    <div class="price-current pull-right">&#8358;{{values['sale_price']}}</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            VIEW ALL</a>
                    </div> 

                </div>

                
        </div>
    </div>
</div>
</div>

<!-- ========================================= TOP BRANDS : END ========================================= -->	<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="color-bg">
<div class="container">
<div class="row no-margin widgets-row">
<div class="col-xs-12  col-sm-4 no-margin-left">
<!-- ============================================================= FEATURED PRODUCTS ============================================================= -->
<div class="widget">
<h2>Featured Menu List</h2>
<div class="body">
{% if featured is defined %}
<ul>
{% for keys, values in featured %}
<li>
<div class="row">
<div class="col-xs-12 col-sm-9 no-margin">
<a href="index.php?page=single-product">Peppered Rice | {{values.title | capitalize}}</a>
<div class="price">
<div class="price-prev">&#8358;0</div>
<div class="price-current">&#8358; {{values.sale_price}}</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif.pagespeed.ce.2JdGiI2i2V.gif" data-echo="{{url('assets/uploads/'~values.front_image)}}" pagespeed_url_hash="3686187641" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" onload="var elem=this;if (this==window) elem=document.body;elem.setAttribute('data-pagespeed-loaded', 1)"/>
</a>
</div>
</div>
</li>
{% endfor %}
</ul>
{% endif %}
</div><!-- /.body -->
</div> <!-- /.widget -->
<!-- ============================================================= FEATURED PRODUCTS : END ============================================================= --> </div><!-- /.col -->
<div class="col-xs-12 col-sm-4 ">
<!-- ============================================================= ON SALE PRODUCTS ============================================================= -->
<div class="widget">
<h2>Breakfast Menu</h2>
<div class="body">
<ul>
<li>
<div class="row">
<div class="col-xs-12 col-sm-9 no-margin">
<a href="index.php?page=single-product">HP Scanner 2910P</a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif.pagespeed.ce.2JdGiI2i2V.gif" data-echo="assets/images/products/product-small-04.jpg" pagespeed_url_hash="3686187641" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" onload="var elem=this;if (this==window) elem=document.body;elem.setAttribute('data-pagespeed-loaded', 1)"/>
</a>
</div>
</div>
</li>

</ul>
</div><!-- /.body -->
</div> <!-- /.widget -->
<!-- ============================================================= ON SALE PRODUCTS : END ============================================================= --> </div><!-- /.col -->
<div class="col-xs-12 col-sm-4 ">
<!-- ============================================================= TOP RATED PRODUCTS ============================================================= -->
<div class="widget">
<h2>Top Rated Products</h2>
<div class="body">
<ul>

<li>
<div class="row">
<div class="col-xs-12 col-sm-9 no-margin">
<a href="index.php?page=single-product">Surface RT 64GB, Wi-Fi, 10.6in - Dark Titanium</a>
<div class="price">
<div class="price-prev">$2000</div>
<div class="price-current">$1873</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 no-margin">
<a href="#" class="thumb-holder">
<img alt="" src="assets/images/blank.gif.pagespeed.ce.2JdGiI2i2V.gif" data-echo="assets/images/products/product-small-09.jpg" pagespeed_url_hash="3686187641" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" onload="var elem=this;if (this==window) elem=document.body;elem.setAttribute('data-pagespeed-loaded', 1)"/>
</a>
</div>
</div>
</li>
</ul>
</div><!-- /.body -->
</div><!-- /.widget -->
<!-- ============================================================= TOP RATED PRODUCTS : END ============================================================= --> </div><!-- /.col -->
</div><!-- /.widgets-row-->
</div><!-- /.container --></div>
{% endblock %}