{% extends "templates/base.volt" %}

{% block head %}{% endblock %}

{% block content %}
<div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-12">
            {{flash.output()}}
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title"><strong>Agents Creation</strong></h4>
                <div class="example">
                  <form autocomplete="off" action="{{url('backend/agents')}}" id="agentTookan" method="post">
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label class="control-label" for="inputBasicFirstName">First Name</label>
                        <input type="text" class="form-control input-lg" id="inputBasicFirstName" name="firstname"
                        placeholder="Type Agents First Name" autocomplete="off" required />
                      </div>
                      
                      <div class="col-sm-6">
                        <label class="control-label" for="inputBasicLastName">Last Name</label>
                        <input type="text" class="form-control input-lg" id="inputBasicLastName" name="lastname"
                        placeholder="Type Agents Last Name" autocomplete="off" required />
                      </div>
                      
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-4">
                        <label class="control-label" for="inputBasicLastName">Agent Role</label>
                            <select class="form-control input-lg" required name="role">
                                <option value="user">USER</option>
                                <option value="admin">ADMIN</option>
                              </select>
                        </div>
                        <div class="col-sm-4">
                          <label class="control-label" for="phone">Phone Number</label>
                          <input type="text" class="form-control input-lg" id="phone" name="phone"
                          placeholder="Enter Phone Number" required autocomplete="off" />
                        </div>
                        <div class="col-sm-4">
                          <label class="control-label" for="email">Email</label>
                          <input type="email" class="form-control input-lg" id="email" name="email"
                          placeholder="Enter Your Email Address" required autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                        <label class="control-label" for="Privy">Privy</label>
                            <select class="form-control input-lg" required name="privy">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                      </div>
                        <div class="col-sm-4">
                          <label class="control-label" for="agent_id">Agent ID</label>
                          
                          <input type="text" class="form-control input-lg" id="agent_id" name="agent_id"
                          placeholder="Agent ID from Tookan" required autocomplete="off" />
                        </div>
                        <div class="col-sm-4">
                          <label class="control-label" for="team_id"><strong>Team ID</strong></label>
                          <input type="text" class="form-control input-lg" id="team_id" name="team_id"
                          placeholder="Team ID from Tookan" autocomplete="off" />
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label class="control-label" for="username">Username</label>
                        <input type="text" class="form-control input-lg" id="username" name="username"
                        placeholder="Type Username for Agents" autocomplete="off" required />
                      </div>
                      <div class="col-sm-6">
                        <label class="control-label" for="password">Password</label>
                        <input type="password" class="form-control input-lg" id="password" name="password"
                        placeholder="Type Agents Password(password)" autocomplete="off" required />
                      </div>
                      
                    </div>
                    
                    <div class="form-group">
                      <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" checked autocomplete="off"
                        />
                        <label for="inputBasicRemember"><strong>Have you confirmed the input(s)</strong></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Create Agent</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Example Basic Form -->
            </div>
        </div>
    </div>
</div>
{% endblock %}

