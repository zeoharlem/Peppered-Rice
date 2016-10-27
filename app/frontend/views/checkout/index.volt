{% extends "templates/base.volt" %}

{% block head %}
{% endblock %}
{% block content %}
<!-- ============================================================= HEADER : END ============================================================= -->		<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">
            <div style="height:30px;"></div>
            {% if session.has('cart_item') %}
            
            {% for keys, values in cart_item %}
                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder" style="width:50%; border:none;">
                            <img class="lazy" alt="" src="{{values['image']}}" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <div class="title">
                            <a href="#">{{values['name']}} ({{values['price']}}) <small>x</small> {{values['qty']}}</a>
                        </div>
                        <div class="brand">peppered rice</div>
                    </div> 

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                <form>
                                    <a class="minus" href="#reduce"></a>
                                    <input name="quantity" readonly="readonly" class="qty_pack" type="text" value="1" />
                                    <a class="plus" href="#add"></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-1 no-margin sPrice">
                        <div class="price">
                            ${{values['price']}}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 no-margin pricer">
                        <div class="price">
                            ${{values['price']*values['qty']}}.00
                        </div>
                        <a class="close-btn cancel" href="#" id="{{values['id']}}"></a>
                    </div>
                </div><!-- /.cart-item -->
            {% endfor %}
<p>&nbsp;</p>
        <button class="le-button big" id="updateShoppingCart" href="{{url('checkout/process')}}" >Update Shopping Cart</button>
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div style="height:30px;"></div>
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>
                <div class="body">
                <div style="height:30px;"></div>
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div class="value pull-right">${{grandTotal}}.00</div>
                        </li>
                        
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>
                            <div class="value pull-right">${{grandTotal}}.00</div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big" href="{{url('checkout/process')}}" >checkout</a>
                        <a class="simple-link block" href="{{url('category')}}" >continue shopping</a>
                    </div>
                </div>
            </div><!-- /.widget -->

            <!--<div id="cupon-widget" class="widget">
                <h1 class="border">use coupon</h1>
                <div class="body">
                    <form>
                        <div class="inline-input">
                            <input data-placeholder="enter coupon code" type="text" />
                            <button class="le-button" type="submit">Apply</button>
                        </div>
                    </form>
                </div>
            </div>--><!-- /.widget -->
        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>
{% else %}
<div class="alert alert-warning"><strong>Cart is empty(0). Go Shopping Now.</strong></div>
{% endif %}	
{% endblock %}