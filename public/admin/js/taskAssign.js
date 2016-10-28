/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.sweetAlertReply').on("click", function() {
        var agentName   = $(this).attr('data-title');
        var taskAgent   = $(this).attr('data-agent');
        swal({
            title: "Are you sure?",
            text: "Assigning " + agentName,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, Assign!',
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
              if(isConfirm){
                  swal("Agent Confirmed!",
                  agentName.toUpperCase()+" assigned! CLick Order Now","success");
                  $('input[name=fleet_id]').val(taskAgent);
                  $('#agent_name').text(agentName.toUpperCase());
                  $('#agent_stack').addClass('show');
              }
              else{
                  swal("Cancelled", "Your imaginary file is safe :)",
                  "error");
              }
          });
    });
    
    $('#orderNow').click(function(e){
        var taskAgent   = $('input[name=fleet_id]').val();
        if($.trim(taskAgent).length > 0){
            $.ajax({
                url: "http://localhost/peprice/backend/order/orderNow",
                type: "POST",
                data: {
                    order: $('#postOrderNow').serialize(),
                },
                dataType: "json",
                error: function(){
                    window.alert("Error: Unable to Post")
                },
                success: function(response){
                    if(response.status == true){
                        $.post('http://localhost/peprice/backend/order/job', 
                        {trans_id:response.posted.trans_id, data:response.data.data}, function(j){
                            var js  = $.parseJSON(JSON.stringify(j));
                            var rp  = response.data.data;
                            if(js.status == 'OK'){
                                window.location.href = 'http://localhost/peprice/backend/order/tracker?job_id='
                                        +rp.job_id+'&track='+rp.tracking_link
                            }
                            else{
                                window.alert("Job returned not uploaded");
                            }
                        });
                    }
                }
            });
        }
        else{
            alert('Agent Not Assigned');
        }
    })
    
    $('.delete_product').click(function(e){
        e.preventDefault();
        var idDelete    = $(this).attr('title');
        $.post('http://localhost/peprice/backend/order/baskets',{key:idDelete}, function(data){
            var jsonString  = $.parseJSON(JSON.stringify(data));
            if(jsonString.status == 'OK'){
                window.location.reload();
            }
        })
    });
    
    $('.updateTotal').click(function(e){
        e.preventDefault();
        var quantity = [];
        $.each($('.qty_pack'), function(index, element){
            quantity.push(element.value);
        });
        $.post('http://localhost/peprice/backend/order/updateCart',{'quantity[]':quantity}, function(data){
            var jsonString  = $.parseJSON(JSON.stringify(data));
            if(jsonString.status == 'OK'){
                window.location.reload();
            }
        })
    })
})
