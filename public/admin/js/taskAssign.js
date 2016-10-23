/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('#sweetAlertReply').on("click", function() {
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
                  $.ajax({
                      url: "http://localhost/peprice/backend/order/assign",
                      type: "POST",
                      data: {
                          fleet_id: taskAgent,
                      },
                      dataType: "json",
                      error: function(){
                          
                      },
                      success: function(){
                          
                      }
                  });
                  swal("Deleted!",
                  "Your imaginary file has been deleted!",
                  "success");
              }
              else{
                  swal("Cancelled", "Your imaginary file is safe :)",
                  "error");
              }
          });
    });
    
    $()
    
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
