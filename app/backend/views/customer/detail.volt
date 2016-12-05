{% extends "templates/base.volt" %}

{% block head %}{% endblock %}

{% block content %}
<div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">{{custDetail.firstname | capitalize}} <strong>{{custDetail.lastname | upper}}</small></strong> <hr></h3>
        </header>
        <div class="panel-body">
          
        </div>
      </div>
      <!-- End Panel Basic -->
{% endblock %}
