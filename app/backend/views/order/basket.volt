{% extends "templates/base.volt" %}

{% block head %}

{% endblock %}

{% block content %}

            <div class="col-md-6 masonry-item">
          <!-- Panel Followers -->
          <div class="panel" id="followers">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="icon wb-check" aria-hidden="true"></i> <strong>Agent List</strong>
              </h3>
            </div>
            <div class="panel-body">
            
              <ul class="list-group list-group-dividered list-group-full">
              {% for keys, values in agents['team'].data %}
                <li class="list-group-item">
                  <div class="media">
                    <div class="media-left">
                      <a class="avatar avatar-online" href="javascript:void(0)">
                        <img src="../../assets/images/default-avatar.jpg" alt="">
                        <i></i>
                      </a>
                    </div>
                    <div class="media-body">
                      <div class="pull-right">
                        <button type="button" id="sweetAlertReply" data-title="{{values.username}}" data-agent="{{values.fleet_id}}" class="btn btn-outline btn-default btn-lg"><small>Assign Task</small></button>
                      </div>
                      <div><strong>{{values.username | capitalize}}</strong></div>
                      <small>{{values.phone}}</small>
                    </div>
                  </div>
                </li>
               {% endfor %}
              </ul>
            </div>
          </div>
          <!-- End Panel Followers -->
        </div>

            <div class="col-md-6 masonry-item">
          <!-- Panel Followers -->
          <div class="panel" id="followers">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="icon wb-check" aria-hidden="true"></i> <strong>Order Cart</strong>
              </h3>
            </div>
            <div class="panel-body">
            <!-- Example Basic Form -->
              <div class="example-wrap">
                <div class="example">
                  <form autocomplete="off">
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label class="control-label" for="inputBasicFirstName">First Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="firstname"
                        placeholder="First Name" autocomplete="off" />
                      </div>
                      <div class="col-sm-6">
                        <label class="control-label" for="inputBasicLastName">Last Name</label>
                        <input type="text" class="form-control" id="inputBasicLastName" name="lastname"
                        placeholder="Last Name" autocomplete="off" />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Email Address</label>
                      <input type="email" class="form-control" id="inputBasicEmail" name="email"
                      placeholder="Email Address" autocomplete="off" />
                    </div>

                    <div class="form-group">
                      <label class="control-label" for="inputBasicAddress">Delivery Address</label>
                      <textarea class="form-control" name="address"></textarea>
                    </div>

                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Phone Number</label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="phonenumber"
                      placeholder="Phone Number" autocomplete="off" />
                    </div>
                    
                    <div class="form-group">
                      <button type="button" class="btn btn-primary btn-lg"><small>Order Now</small></button>
                      <button type="button" class="btn btn-danger btn-lg"><small>Cancel Order</small></button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Example Basic Form -->
            </div>
          </div>
          <!-- End Panel Followers -->
        </div>
{% endblock %}
