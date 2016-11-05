/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(e){
    $('#create_customer').click(function(e){
        e.preventDefault();
        $('#exampleFormModal').modal('show');
    });
    
    $(document).on('click', '#startNow', function(){
        var stackform   = $('#customerForm').serialize();
        $.post('http://localhost/peprice/backend/customer/register', stackform, function(data){
            var stackflow   = $.parseJSON(JSON.stringify(data));
            if(stackflow.status == true){
                window.location.reload();
            }
        });
    });
    
    //This emptys the shopping cart basket
    $(document).on('click', '#emptyTask', function(evt){
        evt.preventDefault();
        var dataRowString   = {action: 'empty'};
        $.post('http://localhost/peprice/backend/order/addToCart', dataRowString, function(text){
            if(parseInt(text) == 0){
                window.location.reload();
            }
        })
    });
})

//'.shown.bs.modal'