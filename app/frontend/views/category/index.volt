{% extends "templates/base.volt" %}

{% block head %}
{% endblock %}
{% block content %}
<div class="container">
<div class="col-xs-12 col-sm-9 no-margin wide sidebar">

<section id="gaming">
    <div class="grid-list-products">
        <h2 class="section-title">{{catName.category_name | capitalize}}</h2>
        
        <div class="control-bar">
            
            
            <div id="item-count" class="le-select">
                <select>
                    <option value="24">24 per page</option>
                    <option value="32">32 per page</option>
                    <option value="48">48 per page</option>
                </select>
            </div>

            <div class="grid-list-buttons">
                <ul>
                    <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>
                    <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> List</a></li>
                </ul>
            </div>
        </div><!-- /.control-bar -->
                                
        <div class="tab-content">
            <div id="grid-view" class="products-grid fade tab-pane in active">
                
                <div class="product-grid-holder">
                    <div class="row no-margin">
                        
                        {% for keys,values in pager.getPaginate().items %}
                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
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
                                    <div class="price-prev">$0.00</div>
                                    <div class="price-current pull-right">${{values.sale_price}}</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">add to cart</a>
                                    </div>
                                    
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->
                            {% endfor %}

                    </div><!-- /.row -->
                </div><!-- /.product-grid-holder -->
                
                {{ partial('partials/pagination', [
                    'page': pager.getPaginate(),
                    'limit': pager.getLimit()
                  ])
                }}

            </div><!-- /.products-grid #grid-view -->

            <div id="list-view" class="products-grid fade tab-pane ">
                <div class="products-list">
                    {% for keys,values in pager.getPaginate().items %}
                    <div class="product-item product-item-holder">
                        <div class="ribbon red"><span>selling</span></div> 
                        <div class="row">
                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                <div class="image">
                                    <img alt="" id="item{{keys+1}}_img" src="{{url('assets/images/blank.gif')}}" data-echo="{{url('assets/uploads/'~values.front_image)}}" />
                                    <input type="hidden" id="item{{keys+1}}_name" value="{{values.title | capitalize}}">
                                    <input type="hidden" id="item{{keys+1}}_price" value="{{values.sale_price}}">
                                    <input type="hidden" id="item{{keys+1}}_pro_id" value="{{values.product_id}}">
                                </div>
                            </div><!-- /.image-holder -->
                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                <div class="body">
                                    <div class="label-discount green"></div>
                                    <div class="title">
                                        <a href="javascript:void(0);">{{values.title}}</a>
                                    </div>
                                    <div class="brand">Peppered Rice</div>
                                    <div class="excerpt">
                                        <p>{{values.description | capitalize}}</p>
                                    </div>
                                    <!--<div class="addto-compare">
                                        <a class="btn-add-to-compare" href="#">add to compare list</a>
                                    </div>-->
                                </div>
                            </div><!-- /.body-holder -->
                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                <div class="right-clmn">
                                    <div class="price-current">${{values.sale_price}}</div>
                                    <div class="price-prev">$0.00</div>
                                    <div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
                                    <a href="javascript:void(0)" class="le-button addToCart" id="item{{keys+1}}">add to cart</a>
                                    
                                </div>
                            </div><!-- /.price-area -->
                        </div><!-- /.row -->
                    </div><!-- /.product-item -->
                    {% endfor %}
                </div><!-- /.products-list -->

                {{ partial('partials/pagination', [
                    'page': pager.getPaginate(),
                    'limit': pager.getLimit()
                  ])
                }}

        </div><!-- /.tab-content -->
    </div><!-- /.grid-list-products -->

</section><!-- /#gaming -->     
</div>
</div>    
{% endblock %}
