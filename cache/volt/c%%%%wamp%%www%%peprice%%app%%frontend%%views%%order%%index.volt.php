
<!DOCTYPE html>
<html lang="en">


        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="eCommerce">
        <meta name="robots" content="all">

        <title>Peppered Rice</title>

        <?= $this->assets->outputCss('headers') ?>
            
        
<style type="text/css">
/**
 * Extra large button extensions. Extends `.btn`.
 */

.bootbox {
   /**background: #3498db !important;**/
   background: #fafafa !important;
   /**opacity: .80;
   filter: Alpha(Opacity=80);**/
}

.modal-header, .modal-footer {
  text-align: center;
  padding: 20px !important;
  border: none !important;
}

.modal-title {
    /**color: white !important;**/
}   

.modal-content {
    background: none !important;
    box-shadow: none !important;
    border: none !important;
}

</style>

        

<body>
<div class="wrapper">
    <nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="index.php?page=blog">News</a></li>
                <li><a href="index.php?page=faq">FAQ</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
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
                <li><a href="authentication">Register</a></li>
                <li><a href="authentication">Login</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav>

    <header class="no-padding-bottom header-alt">
    <div class="container no-padding">
        
        <div class="col-xs-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
    <a href="#">
        <img alt="logo" src="<?= $this->url->get('assets/images/logo.png') ?>" />
    </a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->     </div><!-- /.logo-holder -->

        <div class="col-xs-12 col-md-6 top-search-holder no-margin">
            <div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> (+800) 123 456 7890
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="Search for item">

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="category-grid.html">all categories</a>

                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">laptops</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">tv &amp; audio</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">gadgets</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">cameras</a></li>

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
                        <span class="sign">$</span><span class="value">3219,00</span>
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
                <li><a href="#"><?= ucwords($values['category_name']) ?></a></li>
            <?php } ?>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.yamm-content --></li>
                        </ul>
                    </li>
                            
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Order / Cart</a>
                    </li>
                            
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Sign In</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">News &amp; Events</a>
                        
                    </li>
                    
                    
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Agents &amp; Dispatchers</a>
                    </li><!-- /.yamm-fw -->
                    
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Contact Us</a>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.navbar -->
    </div><!-- /.container -->
</nav><!-- /.megamenu-vertical -->
<!-- ========================================= NAVIGATION : END ========================================= -->
    
</header>



<style>
#billing-form input[type=text], input[type=email], input[type=number]{
    font-size:13px;
}
</style>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<h3 class="section-title"><?php echo @$this->session->get('strLocation'); ?>  STORE CATEGORIES</h3>
		<div class="logo-slider-inner-text">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel-text owl-theme">
                                <?php foreach ($category as $keys => $values) { ?>
				<div class="text-item">
					<a href="<?= $this->url->get('stores/browse/?strLocation=' . $this->session->get('strLocation') . '&goto=' . $values['category_id']) ?>" class="image">
						<?= Phalcon\Text::upper($values['category_name']) ?>
					</a>	
				</div><!--/.item-->
                                <?php } ?>
		    </div><!-- /.owl-carousel #logo-slider -->
		</div>
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->

            <div id="grid-container">
								<div class="contact-page">
									<div class="row">
                            <div class="alert alert-success view-alert hide"><strong>
                                Thank you! Your delivery is being processed. Clear the order or Log out once you are done.
                                Keep this:- Order Number:<span id="order_id"></span>
                            </strong><p>Monitor your delivery <span id="monitor"></span></p></div>
                            <div class="col-md-8 col-sm-8 create-new-account">
                            <p>&nbsp;</p>
	<h4 class="checkout-subtitle"><strong>BILLING DETAILS</strong></h4>
	<p class="text title-tag-line">All fields with <strong>*</strong> are required.</p>
        <?= $this->flash->output() ?>
	<form class="register-form outer-top-xs" id="billing-form" role="form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail2">First Name <span>*</span></label>
                        <input type="text" name="firstname" value="<?php echo $_SESSION['auth']['firstname']; ?>" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail2">Last Name <span>*</span></label>
                        <input type="text" name="lastname" value="<?php echo $_SESSION['auth']['lastname']; ?>" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
                        </div>
                    </div>
                </div>
		<div class="form-group">
                    <label class="info-title" for="exampleInputEmail2">Company Name </label>
                    <input type="text" name="company" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
	    	</div>
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail2">Delivery Date/Time <span>*</span></label>
                    <input type="text" name="delivery_time" class="form-control unicase-form-control text-input" id="pick_date" >
                    <input type="hidden" name="trans_id" class="form-control unicase-form-control text-input" value="<?= $track_id ?>" >
                    <input type="hidden" name="date_of_order" class="form-control unicase-form-control text-input" value="<?php echo date('Y-m-d h:i:s'); ?>" >
	  	</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                        <input type="email" name="email" value="<?php echo $_SESSION['auth']['email']; ?>" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail2">Phone Number <span>*</span></label>
                        <input type="text" name="phonenumber" value="<?php echo $_SESSION['auth']['phonenumber']; ?>" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
                        </div>
                    </div>
                </div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Home Address <span>*</span></label>
	    	<input type="text" name="address" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" placeholder="Street Address" >
	  	</div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Town / City <span>*</span></label>
	    	<input type="text" name="city" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" placeholder="Town / City" >
	  	</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail2">State <span>*</span></label>
                        <input type="text" name="state" value="<?php echo $_SESSION['strLocation']; ?>" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail2">Postcode / ZIP <span>*</span></label>
                        <input type="number" name="postzip" required class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Additional Information</label>
	    	<textarea name="additional_info" class="form-control unicase-form-control text-input" id="exampleInputEmail2"></textarea>
	  	</div>
	  	<!--<button type="submit" class="btn-upper btn btn-primary checkout-page-button btn-lg">PLACE ORDER NOW</button>-->
	</form>
	
	<div class="checkbox">
	  	
	</div>
        
</div>	
<!-- create a new account -->	
<style>
.table tr td{
    padding-bottom:8px !important;
    padding-top:8px !important;
}
</style>                            
<div class="col-md-4 col-sm-4">
        <p>&nbsp;</p>
	<h4 class="text-center">YOUR ORDER</h4>
	<p class="text-center"><strong><?= ucwords($this->session->get('auth')['fullname']) ?>!</strong> Shopping Basket</p>
        <?php if ($this->session->has('cart_item')) { ?>
	<table class="table table-bordered">
        <tr>
            <td><strong>PRODUCT</strong></td>
            <td><strong>TOTAL</strong></td>
        </tr>
        <?php foreach ($this->session->get('cart_item') as $keys => $values) { ?>
        <tr>
            <td><strong><?= ucwords($values['name']) ?></strong> (Sold By <?= $values['addedby'] ?>) <strong>x <?= $values['qty'] ?></strong></td>
            <td>₦<?= $values['qty'] * $values['price'] ?></td>
        </tr>
        <?php } ?>
        <tr style="border-top:1px solid #bbb;">
            <td><strong>CART TOTAL</strong></td>
            <td><strong>₦<?= $totalPrice ?></strong></td>
        </tr>
        </table>
        <p>I've read and accepted the <strong>terms & conditions</strong></p>
	<button type="submit" class="btn-upper btn-lg btn btn-primary checkout-page-button" id="place-order" style="background:#ff0405;">PLACE ORDER NOW</button>
	<a href="<?= $this->url->get('checkout/?clear=true') ?>" class="btn-upper btn-lg btn btn-primary checkout-page-button" id="place-order" style="background:#f90;">CLEAR ORDER</a>
        <?php } else { ?><hr/>
        <strong>EMPTY CART(0)</strong>
        <?php } ?>
        
        <p>&nbsp;</p>
</div>
<div class="col-md-4 contact-info contact-form">
	<div class="contact-title">
		<h4>AGENTS AVAILABLE</h4>
	</div>
        <div id="list_agents"></div>
	
</div>	
                        <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
        </div>
</div>



<!-- ========================================= TOP BRANDS ========================================= -->
<section id="top-brands" class="wow fadeInUp">
    <div class="container">
        <div class="carousel-holder" >
            
            <div class="title-nav">
                <h1>Agents &amp; Dispatchers</h1>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div><!-- /.title-nav -->
            
            <div id="owl-brands" class="owl-carousel brands-carousel">
                
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-01.jpg" />
                    </a>
                </div><!-- /.carousel-item -->
                
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-02.jpg" />
                    </a>
                </div><!-- /.carousel-item -->
                
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-03.jpg" />
                    </a>
                </div><!-- /.carousel-item -->
                
                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-04.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-01.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-02.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-03.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-04.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

            </div><!-- /.brands-caresoul -->

        </div><!-- /.carousel-holder -->
    </div><!-- /.container -->
</section><!-- /#top-brands -->
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
        17 Princess Road, London, Greater London NW1 8JR, UK
        1-888-8MEDIA (1-888-892-9953)
    </p>
    
    <div class="social-icons">
        <h3>Get in touch</h3>
        <ul>
            <li><a href="http://facebook.com/transvelo" class="fa fa-facebook"></a></li>
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

<?= $this->assets->outputJs('footers') ?>	
</body>
</html>