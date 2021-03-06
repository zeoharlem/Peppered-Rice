
<!DOCTYPE html>
<html lang="en">


        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="eCommerce, peppered rice">
        <meta name="robots" content="all">

        <title>Peppered Rice</title>

        <?= $this->assets->outputCss('headers') ?>
            
        


        

<body>
<div class="wrapper">
    <nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="<?= $this->url->get('newsEvent') ?>">News</a></li>
                <li><a href="<?= $this->url->get('faq') ?>">FAQ</a></li>
                <li><a href="<?= $this->url->get('contact') ?>">Contact</a></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
            <!--    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#change-language">English</a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tamil</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">French</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Russian</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#change-currency">Dollar (US)</a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Euro (EU)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish Lira (TL)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indian Rupee (INR)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dollar (US)</a></li>
                    </ul>
                </li>
                -->
                <li><a href="<?= $this->url->get('checkout/process') ?>">Register</a></li>
                <li><a href="<?= $this->url->get('checkout/process') ?>">Login</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav>

    <header class="no-padding-bottom header-alt">
    <div class="container no-padding">
        
        <div class="col-xs-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
    <a href="<?= $this->url->get('index?task=simple&log=version') ?>">
        <img alt="logo" src="<?= $this->url->get('assets/images/logo.png') ?>" />
    </a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->     </div><!-- /.logo-holder -->

        <div class="col-xs-12 col-md-6 top-search-holder no-margin">
            <div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> +234 803 859 6978
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> support@<span class="le-color">pepperedrice.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="Search for item">

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">all categories</a>

                    <ul class="dropdown-menu" role="menu">
                        <?php foreach ($category as $keys => $values) { ?>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= $this->url->get('category/?cat=' . $values['category_id']) ?>"><?= ucwords($values['category_name']) ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>

            <a class="search-button" href="#"></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->      </div><!-- /.top-search-holder -->

        <div class="col-xs-12 col-md-3 top-cart-row no-margin">
            <div class="top-cart-row-container">
    <div class="wishlist-compare-holder">
        <!--<div class="wishlist ">
            <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </a>
        </div>
        <div class="compare">
            <a href="#"><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </a>
        </div>-->
    </div>

    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <div class="top-cart-holder dropdown animate-dropdown">
        
        <div class="basket">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="basketMouth">
                <div class="basket-item-count">
                    <span class="count">0</span>
                    <img src="<?= $this->url->get('assets/images/icon-cart.png') ?>" alt="">
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">$</span><span class="value">0</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu menu-drop" id="mycart">
                
            </ul>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
<!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->       </div><!-- /.top-cart-row -->

    </div><!-- /.container -->
    
    <!-- ========================================= NAVIGATION ========================================= -->
<nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
    <div class="container">
        <div class="yamm navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Menu Item</a>
                        <ul class="dropdown-menu">
                            <li><div class="yamm-content">
    <div class="row">
       <div class="col-xs-12 col-sm-12">
            <h2>Food &AMP; Packages</h2>
            <ul>
            <?php foreach ($category as $keys => $values) { ?>
                <li><a href="<?= $this->url->get('category/?cat=' . $values['category_id']) ?>"><?= ucwords($values['category_name']) ?></a></li>
            <?php } ?>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.yamm-content --></li>
                        </ul>
                    </li>
                            
                    <li class="dropdown">
                        <a href="<?= $this->url->get('checkout') ?>">Order / Cart</a>
                    </li>
                            
                    <li class="dropdown">
                        <a href="<?= $this->url->get('checkout/process') ?>">Sign In</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="<?= $this->url->get('newsEvents') ?>">News &amp; Events</a>
                        
                    </li>
                    
                    <li class="dropdown">
                        <a href="<?= $this->url->get('contacts') ?>">Contact Us</a>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.navbar -->
    </div><!-- /.container -->
</nav><!-- /.megamenu-vertical -->
<!-- ========================================= NAVIGATION : END ========================================= -->
    
</header>



     <div id="top-banner-and-menu" class="homepage2" style="background: url(assets/images/backfull.jpg) no-repeat;">
    <div class="container">
        <div class="col-xs-12">
            <!-- ========================================== SECTION – HERO ========================================= -->
            
<div id="hero">
    <div id="owl-main" class="owl-carousel height-lg owl-inner-nav owl-ui-lg">
        
        <div class="item" style="background:none !important;">
            <div class="container-fluid">
                <img src="<?= $this->url->get('assets/images/slide2.png') ?>" class="caption vertical-center text-left left" style="margin-top:-100px;" />
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
                <img src="<?= $this->url->get('assets/images/homedelivery.png') ?>" class="caption vertical-center text-right right" style="margin-top:-100px;" />
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
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="<?= $this->url->get('assets/images/banners/banner-narrow-01.jpg') ?>" />
            </a>
        </div>
        <div class="col-xs-12 col-lg-6 no-margin text-right banner">
            <a href="category-grid-2">
                <div class="banner-text right">
                    <h1>Time &amp; Style</h1>
                    <span class="tagline">View All Food Packages</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="<?= $this->url->get('assets/images/banners/banner-narrow-02.jpg') ?>" />
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
                    <?php foreach ($products as $keys => $values) { ?>
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>selling</span></div> 
                                <div class="image">
                                    <img alt="" id="item<?= $keys + 1 ?>_img" src="<?= $this->url->get('assets/images/blank.gif') ?>" data-echo="<?= $this->url->get('assets/uploads/' . $values['front_image']) ?>" />
                                    <input type="hidden" id="item<?= $keys + 1 ?>_name" value="<?= ucwords($values['title']) ?>">
                                    <input type="hidden" id="item<?= $keys + 1 ?>_price" value="<?= $values['sale_price'] ?>">
                                    <input type="hidden" id="item<?= $keys + 1 ?>_pro_id" value="<?= $values['product_id'] ?>">
                                </div>
                                <div class="body">
                                    <div class="label-discount green"></div>
                                    <div class="title">
                                        <a href="javascript:void(0)"><?= ucwords($values['title']) ?></a>
                                    </div>
                                    <div class="brand">Peppered Rice</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">&#8358;0.00</div>
                                    <div class="price-current pull-right">&#8358;<?= $values['sale_price'] ?></div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="javascript:void(0)" class="le-button addToCart" id="item<?= $keys + 1 ?>">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            VIEW ALL</a>
                    </div> 

                </div>
                <div class="tab-pane" id="new-arrivals">
                    <div class="product-grid-holder">
                        
                        <?php foreach ($available as $keys => $values) { ?>
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>selling</span></div> 
                                <div class="image">
                                    <img alt="" src="<?= $this->url->get('assets/uploads/' . $values['front_image']) ?>" />
                                    <input type="hidden" id="item<?= $keys + 1 ?>_name" value="<?= ucwords($values['title']) ?>">
                                    <input type="hidden" id="item<?= $keys + 1 ?>_price" value="<?= $values['sale_price'] ?>">
                                    <input type="hidden" id="item<?= $keys + 1 ?>_pro_id" value="<?= $values['product_id'] ?>">
                                </div>
                                <div class="body">
                                    <div class="label-discount green"></div>
                                    <div class="title">
                                        <a href="javascript:void(0)"><?= ucwords($values['title']) ?></a>
                                    </div>
                                    <div class="brand">Peppered Rice</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">&#8358;0.00</div>
                                    <div class="price-current pull-right">&#8358;<?= $values['sale_price'] ?></div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="javascript:void(0)" class="le-button addToCart" id="item<?= $keys + 1 ?>">add to cart</a>
                                    </div>
                                    <div class="wish-compare">
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

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
                    <?php foreach ($package as $keys => $values) { ?>
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?= $this->url->get('assets/images/blank.gif') ?>" data-echo="<?= $this->url->get('assets/uploads/' . $values->front_image) ?>" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="javascript:void(0)"><?= ucwords($values->title) ?></a>
                                </div>
                                <div class="brand">Peppered Rice</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">&#8358;<?= $values->sale_price ?></div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="javascript:void(0)" class="le-button addToCart" id="item<?= $keys + 1 ?>">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->
                    <?php } ?>
                </div><!-- /.row -->
                
                <div class="row no-margin">
                    <?php foreach ($package as $keys => $values) { ?>
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?= $this->url->get('assets/images/blank.gif') ?>" data-echo="<?= $this->url->get('assets/uploads/' . $values->front_image) ?>" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="javascript:void(0)"><?= ucwords($values->title) ?></a>
                                </div>
                                <div class="brand">Peppered Rice</div>
                            </div>
                            <div class="prices">

                                <div class="price-current text-right">&#8358;<?= $values->sale_price ?></div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="javascript:void(0)" class="le-button addToCart" id="item<?= $keys + 1 ?>">Add to cart</a>
                                </div>
                                <div class="wish-compare">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->
                    <?php } ?>

                </div><!-- /.row -->
            </div><!-- /.col -->
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">
                    
                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="<?= $this->url->get('assets/images/blank.gif') ?>" data-echo="<?= $this->url->get('assets/uploads/' . $singles->front_image) ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="<?= $this->url->get('assets/images/blank.gif') ?>" data-echo="<?= $this->url->get('assets/uploads/' . $singles->front_image) ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="javascript:void(0)">
                                <img alt="" src="<?= $this->url->get('assets/images/blank.gif') ?>" data-echo="<?= $this->url->get('assets/uploads/' . $singles->front_image) ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->

                    <div class="gallery-thumbs clearfix">
                        
                    </div><!-- /.gallery-thumbs -->

                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <a href="javascript:void(0)"><?= ucwords($singles->title) ?></a>
                        </div>
                        <div class="brand">Peppered Rice</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline">&#8358;<?= $singles->sale_price ?></div>
                        <a href="javascript:void(0)" class="le-button big inline addToCart" id="item0">add to cart</a>
                    </div>
                </div><!-- /.product-item-holder -->
            </div><!-- /.col -->

        </div><!-- /.product-grid-holder -->
    </div><!-- /.container -->
</section><!-- /#bestsellers -->
<!-- ========================================= BEST SELLERS : END ========================================= -->
</div>




<!-- ========================================= TOP BRANDS ========================================= -->
<section id="recently-reviewd" class="wow fadeInUp">
	<div class="container">
		<div class="carousel-holder hover">
			
			<div class="title-nav">
				<h2 class="h1">Dispatchers &amp; Team</h2>
				<div class="nav-holder">
					<a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
					<a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
				</div>
			</div><!-- /.title-nav -->

			<div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                                <?php foreach ($taskAgents as $keys => $values) { ?>
				<div class="no-margin carousel-item  size-small hover" style="border:1px solid #ccc; padding:15px;">
					<div class="product-item">
						
						
						<div class="body">
							<div class="title">
								<a href="#"><?= ucwords($values->firstname) ?> <?= ucwords($values->lastname) ?></a>
							</div>
							<div class="brand" style="text-transform:lowercase !important;"><small><?= $values->email ?></small></div>
						</div>
						<div class="prices">
							<div class="price-current text-right"><small><strong><?= $values->phone ?></strong></small></div>
						</div>
					</div><!-- /.product-item -->
				</div><!-- /.product-item-holder -->
                                <?php } ?>
                                
			</div><!-- /#recently-carousel -->

		</div><!-- /.carousel-holder -->
	</div><!-- /.container -->
</section><!-- /#recently-reviewd -->
<!-- ========================================= TOP BRANDS : END ========================================= -->

<footer id="footer" class="color-bg">
    
    <!-- /.container -->

    <div class="sub-form-row">
        <div class="container">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                <form role="form">
                    <input placeholder="Subscribe to our newsletter">
                    <button class="le-button">Subscribe</button>
                </form>
            </div>
        </div><!-- /.container -->
    </div><!-- /.sub-form-row -->

    <div class="link-list-row">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-4 ">
                <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
        <img src="<?= $this->url->get('assets/images/logo.png') ?>" />
    </div><!-- /.footer-logo -->
    
    <p class="regular-bold"> Feel free to contact us via phone,email or just send us mail.</p>
    
    <p>
        Bodija outlet: 6, Odeku close, Bodija, Ibadan. Delivery hotline-
        +234 803 859 6978
    </p>
    
    <div class="social-icons">
        <h3>Get in touch</h3>
        <ul>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-pinterest"></a></li>
            <li><a href="#" class="fa fa-linkedin"></a></li>
            <li><a href="#" class="fa fa-stumbleupon"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-vk"></a></li>
        </ul>
    </div><!-- /.social-icons -->

</div>
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            </div>

            <div class="col-xs-12 col-md-8 no-margin">
                <!-- ============================================================= LINKS FOOTER ============================================================= -->
<div class="link-widget">
    <div class="widget">
        <h3>Find it fast</h3>
        <ul>
            <li><a href="category-grid.html">Peppered Rice Jollof</a></li>
            <li><a href="category-grid.html">Peppered Rice White</a></li>
            <li><a href="category-grid.html">Fried Rice</a></li>
            <li><a href="category-grid.html">Peppered Beans</a></li>
            <li><a href="category-grid.html">Porridge</a></li>
            <li><a href="category-grid.html">Spaghetti</a></li>
            <li><a href="category-grid.html">Beef</a></li>
            <li><a href="category-grid.html">Fish</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Information</h3>
        <ul>
            <li><a href="category-grid.html">Find a Store</a></li>
            <li><a href="category-grid.html">About Us</a></li>
            <li><a href="category-grid.html">Contact Us</a></li>
            <li><a href="category-grid.html">Weekly Deals</a></li>
            <li><a href="category-grid.html">Gift Cards</a></li>
            <li><a href="category-grid.html">Recycling Program</a></li>
            <li><a href="category-grid.html">Community</a></li>
            <li><a href="category-grid.html">Careers</a></li>

        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Information</h3>
        <ul>
            <li><a href="category-grid.html">My Account</a></li>
            <li><a href="category-grid.html">Order Tracking</a></li>
            <li><a href="category-grid.html">Wish List</a></li>
            <li><a href="category-grid.html">Customer Service</a></li>
            <li><a href="category-grid.html">Returns / Exchange</a></li>
            <li><a href="category-grid.html">FAQs</a></li>
            <li><a href="category-grid.html">Product Support</a></li>
            <li><a href="category-grid.html">Extended Service Plans</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->
<!-- ============================================================= LINKS FOOTER : END ============================================================= -->            </div>
        </div><!-- /.container -->
    </div><!-- /.link-list-row -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="copyright">
                    © <a href="home">Peperedrice</a> - all rights reserved
                </div><!-- /.copyright -->
            </div>
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="payment-methods ">
                    <ul>
                        <li><img alt="" src="<?= $this->url->get('assets/images/payments/payment-visa.png') ?>"></li>
                        <li><img alt="" src="<?= $this->url->get('assets/images/payments/payment-master.png') ?>"></li>
                        <li><img alt="" src="<?= $this->url->get('assets/images/payments/payment-paypal.png') ?>"></li>
                        <li><img alt="" src="<?= $this->url->get('assets/images/payments/payment-skrill.png') ?>"></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.copyright-bar -->

</footer>

</div>

<div class="modal fade" tabindex="-1" role="dialog" id="myModalRedirect">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>-->
      <div class="modal-body">
        <p><strong>Please Wait! Redirecting in a moment....</strong></p>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?= $this->assets->outputJs('footers') ?>
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
      //Customer Controller System
        var getCustomer    = $('#getCustomers').DataTable({
            responsive: true,
            "processing": true,
            "serverSide": true,
            "ajax": "http://localhost/peprice/customer",
            "columnDefs": [{
                  "targets": -1,
                  "data": null,
                  "defaultContent": "<button type='button' class='btn btn-default btn-danger ordernow'><small>Track Now</small></button>"
              }]
            //"sDom": "t" // just show table, no other controls
        });
        
        //Click to set customer for order
        $('#getCustomers tbody').on('click', 'button.ordernow', function(){
            var dataRow = getCustomer.row($(this).parents('tr')).data();
            var stringRowData   = {action : 'remove', register_id: dataRow[6]};
            if(dataRow[6].length == 0 || dataRow[6] == ''){
                window.alert("Seems tracking link is not available");
            }
            else{
                var windowL = window.open(dataRow[6], '_blank');
                windowL.focus();
            }
        });
        
        //Customer Controller System
        var getPack    = $('#getPack').DataTable({
            responsive: true,
            "processing": true,
            "serverSide": true,
            "ajax": "http://localhost/peprice/customer/getPack",
            "columnDefs": [{
                  "targets": -1,
                  "data": null,
                  "defaultContent": "<button type='button' class='btn btn-danger getPack'><small>View Now</small></button>"
              }],
            //"sDom": "t" // just show table, no other controls
            "footerCallback": function(row, data, start, end, display){
                var api = this.api(), data, total, pageTotal;
                // Remove the formatting to get integer data for summation
                var intVal  = function(i){
                    return typeof i == 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0;
                };
                
                //Total Pages over all
                total   = api.column(3).data().reduce(function(a,b){
                    return intVal(a) + intVal(b);
                }, 0);
                
                //Total over this page
                pageTotal   = api.column(3, {page:'current'}).data().reduce(function(a,b){
                    return intVal(a) + intVal(b);
                }, 0);
                
                //update footer
                $(api.column(3).footer()).html(pageTotal+' $('+total+' Total)');
            }
        });
        
        //Click to set customer for order
        $('#getPack tbody').on('click', 'button.getPack', function(){
            var dataRow = getPack.row($(this).parents('tr')).data();
            var tr = $(this).closest('tr');
            var row = getPack.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                
                //row.child(formatJsonString(row.data())).show();
                row.child(formatJsonString(dataRow[4])).show();
                tr.addClass('shown');
            }
        });
    })(document, window, jQuery);
    
    /* Formatting function for row details - modify as you need */
    function formatJsonString(d){
        var tableFlow       = '';
        var taskStringFlow  = [];
        var JsonStringFlow  = $.parseJSON(d);
        for(var n in JsonStringFlow){
            taskStringFlow.push(JsonStringFlow[n]);
        }
        
        tableFlow = '<table cellpadding="5" cellspacing="0" border="0" class="table table-condensed" style="padding-left:50px; font-size:13px;">';
        
        for(var i in taskStringFlow){
            tableFlow += '<tr style="border:none !important;">'+
                '<td style="border:none !important;">'+taskStringFlow[i].name+'</td>'+
                '<td style="border:none !important;"><img src="'+taskStringFlow[i].image+'" class="img img-responsive" style="width:10%;" /></td>'+
                '<td style="border:none !important;">'+taskStringFlow[i].qty+'</td>'+
                '<td style="border:none !important;">'+taskStringFlow[i].price+'</td>'+
                '<td style="border:none !important;">'+parseInt(taskStringFlow[i].qty) * parseInt(taskStringFlow[i].price)+'</td>'+
            '</tr>'
        }
        tableFlow += '</table>';
        return tableFlow;
    }
    
    function format ( d ) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
            '<tr>'+
                '<td>Full name:</td>'+
                '<td>'+d.name+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td>Extension number:</td>'+
                '<td>'+d.extn+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td>Extra info:</td>'+
                '<td>And any further details here (images etc)...</td>'+
            '</tr>'+
        '</table>';
    }
  </script>
</body>
</html>