{% extends "templates/base.volt" %}

{% block head %}{% endblock %}

{% block content %}
    <!-- Panel Inline Form -->
      <div class="panel">
        
        <div class="panel-body">
          <div class="example-wrap">
            <h4 class="example-title">All Agents Registered</h4>
            
            <p>&nbsp;</p>
              <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable" id="agentList">
            <thead>
              <tr>
                <th>Title</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone(s)</th>
                <th>Action(s)</th>
              </tr>
            </thead>
            
            <tbody>
            {% for keys, values in agentList %}
              <tr>
                <td>{{keys + 1}}</td>
                <td>{{values.firstname}} {{values.lastname}}</td>
                <td>{{values.email}}</td>
                <td>{{values.phone}}</td>
                <td><a href="{{url('backend/agents/block?type='~values.agent_id~'&task=block')}}" class="btn btn-primary">Block</a><a class="btn btn-danger" href="{{url('backend/agents/block?type='~values.agent_id~'&task=delete')}}">Delete</a></td>
              </tr>
              {% endfor %}
            </tbody>
          </table>

            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Inline Form -->

{% endblock %}
