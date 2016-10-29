/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
        
//    $('#place-order').on('click', function(e){
//        e.preventDefault();
//        var serialFormFlow  = $('#billing-form').serialize();
//        $.ajax({
//            type:   'POST',
//            url:    'http://localhost/peprice/order/start',
//            data:   serialFormFlow,
//            success: function(response){
//                cartStackFlow().getCartFlowId();
//                if(response.status == true){
//                    $.post('http://localhost/peprice/order/fixAssignTeam', {data: serialFormFlow}, function(data){
//                        var jsonResult  = $.parseJSON(JSON.stringify(data));
//                        if(jsonResult.data.status == 200){
//                            $('#view-alert').find('monitor').html('<a href="'+
//                                    jsonResult.data.data.delivery_tracing_link+'">click</a>');
//                            $('#view-alert').find('order_id').html(jsonResult.order_id)
//                            $('#view-alert').fadeIn();
//                        }
//                    });
//                }
//                else{
//                    alert(response.data);
//                }
//            }
//        });
//    });
//    
    $('#place-order').on('click', function(e){
        e.preventDefault();
        var serialFormFlow  = $('#billing-form').serialize();
        $.ajax({
            type:   'POST',
            url:    'http://localhost/peprice/order/start',
            data:   serialFormFlow,
            success: function(response){
                cartStackFlow().getCartFlowId();
                if(response.status == true){
                    var urlTask = $.param(response.tookan.data);
                    window.location.href = 'http://localhost/dashboard/taskHalf?'+urlTask;
                }
                else{
                    alert(response.data.message);
                }
            }
        });
    });

    $('#updateShoppingCart').on('click', function(e){
        e.preventDefault();
        var quantity = [];
        $.each($('.qty_pack'), function(index, element){
            quantity.push(element.value);
        });
        $.post('http://localhost/peprice/checkout/cartShow',
        {'quantity[]': quantity}, function(data){
            var stackFlow   = $.parseJSON(JSON.stringify(data));
            if(stackFlow.status == true){
                $('#show-updated').addClass('show');
                setTimeout(function(){
                    window.location.reload();
                }, 2000);
            }
        });
    });

    $('.singleToCart > .plus, .singleToCart > .minus').on('click', function(e){
        e.preventDefault();
        var cartPriceVar    = $('#price-detail').text().valueOf();
        var cartPriceMulti  = parseInt(cartPriceVar) * parseInt($('.qty-num').val());
        $('#price-detail').text(cartPriceMulti + '.00');
    })

    $('#singleAddToCart').on('click', function(e){
        e.preventDefault();
        var quantity    = $('.qty-num').val();
        var itemImage   = $('#item0_img').attr('src');
        var product_id  = $('#item0_pro_id').val();
        var itemName    = $('#item0_name').val();
        var itemPrice   = $('#item0_price').val();
        $.ajax({
            type:   'POST',
            url:    'http://localhost/peprice/product/ajaxToCart',
            data:   {
                item_src: itemImage, 
                item_name: itemName, 
                item_product: product_id,
                item_price: itemPrice,
                qty: quantity,
                action: 'add'
            },
            success: function(response){
                cartStackFlow().getCartFlowId();
            }
        });
    });

    $('.cancel').on('click', function(e){
        e.preventDefault();
        var thisVar     = $(this);
        var stringVar   = $(this).attr('id');
        $.post('http://localhost/peprice/checkout/remove',{id:stringVar}, function(data){
            var stringJson  = $.parseJSON(JSON.stringify(data));
            if(stringJson.status == true){
                thisVar.parent().closest('tr').remove();
            }
        })
    });

    $('.plus, .minus').on('click', function(e){
        e.preventDefault();
        var textInput   = $(this).siblings('input[name=quantity]');
        var multiplyer  = $(this).parents('.no-margin').siblings('.sPrice').text();
        var textMultis  = parseInt(textInput.val()) * parseInt($.trim(multiplyer).substr(1));
        var multiTotal  = $(this).parents('.no-margin').siblings('.pricer');
        multiTotal.children('.price').html('$'+textMultis+'.00');
        //alert(textMultis);
    });

    $('i.fa-sort-desc').on('click', function(e){
        e.preventDefault();
    })

    $('a.addToCart, button.addToCart').on('click', function(evt){
        evt.preventDefault();
        var tracker = $(this).attr('id');
        cartStackFlow().setCartFlowId(tracker);
        cartStackFlow().getCartFlowId();
        cartStackFlow().getTotalAmount();
    });

    $('#basketMouth').on('click', function(evt){
        evt.preventDefault();
        cartStackFlow().showCartFlow();
    })

    $(document).on('click','.cancel', function(evt){
        evt.preventDefault();
        cartStackFlow().removeItemFlow($(this).attr('title'));
        cartStackFlow().getCartFlowId();
    })
    
    $(document).on('click','.cancel_tr', function(evt){
        evt.preventDefault();
        cartStackFlow().removeItemFlow($(this).attr('id'));
        $(this).parents('.cart-item').remove();
        cartStackFlow().getCartFlowId();
        cartStackFlow().getTotalAmount();
    })
    
    $(document).on('click','.empty', function(evt){
        evt.preventDefault();
        cartStackFlow().clearCartFlow();
        cartStackFlow().getCartFlowId();
    })

    cartStackFlow().getCartFlowId();
    cartStackFlow().getTotalAmount();

    $('ul#state-packages > li').on('click', function(evt){
        evt.preventDefault();
        var textString  = $(this).text().replace(/\s+/g, '-').toLowerCase();
        if(textString.length > 0 && textString != ''){
            $.post('http://localhost/peprice/setlocal',{state: textString}, function(data){
                var JSONString  = $.parseJSON(JSON.stringify(data));
                if(JSONString.status == 'OK'){
                    window.location.href    = 'http://localhost/peprice/stores';
                }
                else{
                    alert('We are not available in your state yet!');
                }
            });
        }
    })
});

var cartStackFlow   = function(){
    return {
        setCartFlowId : function(id){
            //alert(id);
            var idTracker   = document.getElementById(id);
            //var imageSrc    = idTracker.getElementsByTagName("img")[0].src;
            var imageSrc    = $('#'+id+'_img').attr('src');
            var product_id  = document.getElementById(id+'_pro_id').value;
            var elementName = document.getElementById(id+'_name').value;
            var tagPrice    = document.getElementById(id+'_price').value;

            /**
             * Set Ajax Control for the price tags
             * @returns {undefined}
             */
            $.ajax({
                type:   'POST',
                url:    'http://localhost/peprice/product/ajaxToCart',
                data:   {
                    item_src: imageSrc, 
                    item_name: elementName, 
                    item_product: product_id,
                    item_price: tagPrice,
                    action: 'add'
                },
                success: function(response){
                    $('.count').html(response);
                }
            });
        },
        getCartFlowId : function(){
            $.ajax({
                type:   'POST',
                url:    'http://localhost/peprice/product/totalItem',
                data:   {
                    total_cart_items: true, 
                },
                success: function(response){
                    $('.count').html(response);
                }
            });
        },
        getTotalAmount: function(){
            $.ajax({
                type:   'POST',
                url:    'http://localhost/peprice/product/grandTotal',
                data:   {
                    total_cart_items: true, 
                },
                success: function(response){
                    $('.value').html(response);
                }
            });
        },
        showCartFlow : function(){
            $.ajax({
                type:   'POST',
                url:    'http://localhost/peprice/product/showCart',
                data:   {
                    showcart: true
                },
                success:function(response){
                    $('#mycart').html(response);
                }
            })
        },
        clearCartFlow : function(){
            $.ajax({
                type:   'POST',
                url:    'http://localhost/peprice/product/ajaxToCart',
                data:   {
                    action: 'empty'
                },
                success:function(response){
                    $('#mycart').html(response);
                }
            })
        },
        removeItemFlow: function(product_id){
            $.ajax({
                type:   'POST',
                url:    'http://localhost/peprice/product/ajaxToCart',
                data:   {
                    item_product:   product_id,
                    action:         'remove'
                },
                success:function(response){
                    $('#mycart').html(response);
                }
            })
        }
    }
}

$.get('http://localhost/peprice/agents/getAgents', function(data, textStatus){
    var jsonString  = $.parseJSON(JSON.stringify(data));
    
})
