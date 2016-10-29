
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

        {{ this.assets.outputCss('headers') }}
            
        {% block head %} {% endblock %}
        

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
                <li><a href="{{url('checkout/process')}}">Register</a></li>
                <li><a href="{{url('checkout/process')}}">Login</a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav>

    <header class="no-padding-bottom header-alt">
    <div class="container no-padding">
        
        <div class="col-xs-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
    <a href="{{url('index?task=simple&log=version')}}">
        <img alt="logo" src="{{url('assets/images/logo.png')}}" />
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

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">all categories</a>

                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('category/?cat=')}}">laptops</a></li>

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
                    <img src="{{url('assets/images/icon-cart.png')}}" alt="">
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
            {% for keys,values in category %}
                <li><a href="#">{{values['category_name'] | capitalize}}</a></li>
            {% endfor %}
            </ul>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.yamm-content --></li>
                        </ul>
                    </li>
                            
                    <li class="dropdown">
                        <a href="{{url('checkout')}}">Order / Cart</a>
                    </li>
                            
                    <li class="dropdown">
                        <a href="{{url('checkout/process')}}">Sign In</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="{{url('newsEvents')}}">News &amp; Events</a>
                        
                    </li>
                    
                    
                    <li class="dropdown">
                        <a href="{{url('agents')}}">Agents &amp; Dispatchers</a>
                    </li>
                    
                    
                    <li class="dropdown">
                        <a href="{{url('contacts')}}">Contact Us</a>
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.navbar -->
    </div><!-- /.container -->
</nav><!-- /.megamenu-vertical -->
<!-- ========================================= NAVIGATION : END ========================================= -->
    
</header>


{% block content %}{% endblock %}


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
                                {% for keys, values in taskAgents.data %}
				<div class="no-margin carousel-item product-item-holder size-small hover">
					<div class="product-item">
						
						<div class="image" style="width:194px; height:143px; overflow:hidden;">
							<img alt="" src="{{values.fleet_image}}" />
						</div>
						<div class="body">
							<div class="title">
								<a href="single-product.html">{{values.username | capitalize}}</a>
							</div>
							<div class="brand" style="text-transform:lowercase !important;">{{values.email}}</div>
						</div>
						<div class="prices">
							<div class="price-current text-right">{{values.phone}}</div>
						</div>
					</div><!-- /.product-item -->
				</div><!-- /.product-item-holder -->
                                {% endfor %}
                                
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
        <img src="{{url('assets/images/logo.png')}}" />
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
                        <li><img alt="" src="{{url('assets/images/payments/payment-visa.png')}}"></li>
                        <li><img alt="" src="{{url('assets/images/payments/payment-master.png')}}"></li>
                        <li><img alt="" src="{{url('assets/images/payments/payment-paypal.png')}}"></li>
                        <li><img alt="" src="{{url('assets/images/payments/payment-skrill.png')}}"></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.copyright-bar -->

</footer>

</div>

{{ this.assets.outputJs('footers') }}	
</body>
</html>