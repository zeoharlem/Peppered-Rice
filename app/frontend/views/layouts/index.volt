{% extends "templates/base.volt" %}

{% block head %}

{% endblock %}
{% block content %}
     <div id="top-banner-and-menu" class="homepage2" style="background: url(assets/images/backfull.jpg) no-repeat;">
    <div class="container">
        <div class="col-xs-12">
            <!-- ========================================== SECTION – HERO ========================================= -->
            
<div id="hero">
    <div id="owl-main" class="owl-carousel height-lg owl-inner-nav owl-ui-lg">
        
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
                <li><a href="#new-arrivals" data-toggle="tab">Recommended</a></li>
                <!--<li><a href="#top-sales" data-toggle="tab">Starters</a></li>-->
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

<!-- ========================================= BEST SELLERS ========================================= -->
<section id="bestsellers" class="color-bg wow fadeInUp">
    <div class="container">
        <h1 class="section-title">Package List(s)</h1>

        <div class="product-grid-holder medium">
            <div class="col-xs-12 col-md-7 no-margin">
                
                <div class="row no-margin">
                    {% for keys,values in package %}
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~values.front_image)}}" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="javascript:void(0)">{{values.title | capitalize}}</a>
                                </div>
                                <div class="brand">Peppered Rice</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">&#8358;{{values.sale_price}}</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->
                    {% endfor %}
                </div><!-- /.row -->
                
                <div class="row no-margin">
                    {% for keys,values in package %}
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~values.front_image)}}" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="javascript:void(0)">{{values.title | capitalize}}</a>
                                </div>
                                <div class="brand">Peppered Rice</div>
                            </div>
                            <div class="prices">

                                <div class="price-current text-right">&#8358;{{values.sale_price}}</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->
                    {% endfor %}

                </div><!-- /.row -->
            </div><!-- /.col -->
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">
                    
                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~singles.front_image)}}" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~singles.front_image)}}" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="javascript:void(0)">
                                <img alt="" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~singles.front_image)}}" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->

                    <div class="gallery-thumbs clearfix">
                        
                    </div><!-- /.gallery-thumbs -->

                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <a href="javascript:void(0)">{{singles.title | capitalize}}</a>
                        </div>
                        <div class="brand">Peppered Rice</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline">&#8358;{{singles.sale_price}}</div>
                        <a href="javascript:void(0)" class="le-button big inline addToCart" id="item0">add to cart</a>
                    </div>
                </div><!-- /.product-item-holder -->
            </div><!-- /.col -->

        </div><!-- /.product-grid-holder -->
    </div><!-- /.container -->
</section><!-- /#bestsellers -->
<!-- ========================================= BEST SELLERS : END ========================================= -->
</div>

{% endblock %}