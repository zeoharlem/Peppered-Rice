
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

        {{ this.assets.outputCss('headers') }}
            
        {% block head %} {% endblock %}
        

<body>
<div class="wrapper">
    <nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="{{url('newsEvent')}}">News</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
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
                        {% for keys,values in category %}
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('category/?cat='~values['category_id'])}}">{{values['category_name'] | capitalize}}</a></li>
                        {% endfor %}
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
                        <span class="sign">&#8358;</span><span class="value">0</span>
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
                <li><a href="{{url('category/?cat='~values['category_id'])}}">{{values['category_name'] | capitalize}}</a></li>
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
            {% for keys,values in category %}
            <li><a href="{{url('category/?cat='~values['category_id'])}}">{{values['category_name'] | capitalize}}</a></li>
            {% endfor %}
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Information</h3>
        <ul>
            <li><a href="#">Find a Store</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Careers</a></li>

        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>Information</h3>
        <ul>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order Tracking</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Sign In</a></li>
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

{{ this.assets.outputJs('footers') }}
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
                $(api.column(3).footer()).html(pageTotal+' &#8358;('+total+' Total)');
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