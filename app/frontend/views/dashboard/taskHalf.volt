
{% block content %}
<!-- ========================================= CONTENT ========================================= -->

<section id="checkout-page">
    <div class="container">
        <div class="alert alert-success"><h3>{{query['customer_name'] | capitalize}}</h3><p>{{query['customer_address'] | capitalize}}</p>, <a href="{{query['tracking_link']}}" target="_blank" class="btn btn-danger"><small>Track Now</small></a></div>
    </div><!-- /.container -->    
</section><!-- /#checkout-page -->
<!-- ========================================= CONTENT : END ========================================= -->		
{% endblock %}