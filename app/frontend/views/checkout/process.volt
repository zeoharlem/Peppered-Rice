{% extends "templates/base.volt" %}

{% block head %}
{% endblock %}
{% block content %}
<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<section class="section sign-in inner-right-xs">
					<h2 class="bordered">Sign In</h2>
					<p>Hello, Welcome to your account</p>

					<div class="social-auth-buttons">
						<div class="row">
							<div class="col-md-6">
								<button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
							</div>
						</div>
					</div>

					<form role="form" class="login-form cf-style-1" method="post" action="{{url('login/')}}">
						<div class="field-row">
                                                    <label>Email</label>
                                                    <input type="text" class="le-input input-lg" name="email">
                                                </div><!-- /.field-row -->

                                                <div class="field-row">
                                                    <label>Password</label>
                                                    <input type="password" class="le-input input-lg" name="password">
                                                </div><!-- /.field-row -->

                                                <div class="field-row clearfix">
                                                        <span class="pull-left">
                                                                <label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Remember me</span></label>
                                                        </span>
                                                        <span class="pull-right">
                                                                <a href="#" class="content-color bold">Forgotten Password ?</a>
                                                        </span>
                                                </div>

                                                <div class="buttons-holder">
                                                    <button type="submit" class="le-button huge"> Sign In</button>
                                                </div><!-- /.buttons-holder -->
					</form><!-- /.cf-style-1 -->

				</section><!-- /.sign-in -->
			</div><!-- /.col -->

			<div class="col-md-6">
				<section class="section register inner-left-xs">
					<h2 class="bordered">Create New Account</h2>

					<form role="form" class="register-form cf-style-1" action="{{url('registration/')}}" method="post">
						<div class="field-row">
                                                    <label>First Name</label>
                                                    <input type="text" name="firstname" class="le-input input-lg" placeholder="Type your First Name">
                                                </div><!-- /.field-row -->
						<div class="field-row">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lastname" class="le-input input-lg" placeholder="Type your lastname">
                                                </div><!-- /.field-row -->
						<div class="field-row">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="le-input input-lg" placeholder="Enter your email here">
                                                </div><!-- /.field-row -->
						<div class="field-row">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="le-input input-lg" placeholder="Type your password">
                                                </div><!-- /.field-row -->
						<div class="field-row">
                                                    <label>Phone Number</label>
                                                    <input type="text" name="phonenumber" class="le-input input-lg" placeholder="Input your Phone Number">
                                                </div><!-- /.field-row -->
                                                
						<div class="field-row">
                                                    <label>Phone Number</label>
                                                    <textarea name="address" class="le-input form-control input-lg"></textarea>
                                                </div><!-- /.field-row -->
                                                

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Sign Up</button>
                        </div><!-- /.buttons-holder -->
					</form>

					<h2 class="semi-bold">Sign up today and you'll be able to :</h2>

					<ul class="list-unstyled list-benefits">
						<li><i class="fa fa-check primary-color"></i> Speed your way through the checkout</li>
						<li><i class="fa fa-check primary-color"></i> Track your orders easily</li>
						<li><i class="fa fa-check primary-color"></i> Keep a record of all your purchases</li>
					</ul>

				</section><!-- /.register -->

			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		
{% endblock %}


