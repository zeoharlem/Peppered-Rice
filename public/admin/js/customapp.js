/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });
        
        var agentList = $('#agentList').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });
        
        var tablePage = $('#examplePageHeader').DataTable({
          "responsive": true,
          "processing": true,
          "serverSide": true,
          "ajax": "http://localhost/peprice/backend/products/tableProduct",
          "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='btn-group'><button class='btn viewer' data-view=''>View</button><button class='btn editorn'>Edit</button><button class='btn delete'>Delete</button></div>",
            },
            {
                "render": function(data, type, row){
                    //return data + '{' + row[4] + '}';
                    return '<img class="img-responsive" width="30%" src="http://localhost/peprice/assets/uploads/'+data+'" />';
                },
                "targets": 4
            },
        ]
          //"sDom": "t" // just show table, no other controls
        });
        
        //control click on the button on the exampleFixedHeader
        $('#examplePageHeader tbody').on('click', 'button.viewer', function(ev){
            var clickData   = tablePage.row($(this).parents('tr')).data();
            bootbox.confirm({
                size:   "large",
                message:"Still Under Contruction",
                callback: function(results){
                    
                }
            });
        })
        
        //control click on the button on the exampleFixedHeader
        $('#examplePageHeader tbody').on('click', 'button.editorn', function(ev){
            var clickData   = tablePage.row($(this).parents('tr')).data();
            window.location.href    = 'http://localhost/peprice/backend/products/viewProduct/'+clickData[5]
        })
        
        //control click on the button on the exampleFixedHeader
        $('#examplePageHeader tbody').on('click', 'button.delete', function(ev){
            var tableStack  = $(this).closest('tr');
            var clickData   = tablePage.row($(this).parents('tr')).data();
            $.post('http://localhost/peprice/backend/products/deletePro',{product_id:clickData[5]}, function(data){
                var stringJSON  = $.parseJSON(JSON.stringify(data));
                if(stringJSON.status == 'OK'){
                    tableStack.remove();
                }
            })
        })
        
        //Place order for customers who called agents or cashier
        var tableOrderPro = $('#exampleOrderPro').DataTable({
          "responsive": true,
          "processing": true,
          "serverSide": true,
          "ajax": "http://localhost/peprice/backend/order/tableShow",
          "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='btn-group'><button class='btn addto'>Add To Cart</button><button class='btn btn-danger remove'>Remove</button></div>",
            },
            {
                "render": function(data, type, row){
                    //return data + '{' + row[4] + '}';
//                    return '<img class="img-responsive" width="30%" src="http://localhost/peprice/backend/assets/uploads/'+data+'" />';
                    return '<input type="text" name="qty" class="qty" value="1" style="width:60px" />';
                },
                "targets": 5
            },
        ]
          //"sDom": "t" // just show table, no other controls
        });
        
        //Click to Add To cart
        $('#exampleOrderPro tbody').on('click', 'button.addto', function(){
            var thisFlow    = $(this);
            $(this).text('Please Wait...');
            var dataRow = tableOrderPro.row($(this).parents('tr')).data();
            var qtyStrRow       = $(this).closest('tr').children('td').eq(5);
            var newQtyRow       = qtyStrRow.find('input').val();
            var stringRowData   = {
                action : 'add', item_product: dataRow[6], qty: newQtyRow
            }
            $.post("http://localhost/peprice/backend/order/addToCart", stringRowData, function(d,success,xhr){
                var stringJSON  = $.parseJSON(JSON.stringify(d));
                if(xhr.status == 200 && xhr.statusText == 'OK'){
                    thisFlow.text('Add To Cart');
                    $('span#cart_id').text('('+d+')');
                }
            })
            //alert(dataRow[0] + "'id is:" + dataRow[6]);
            
        });
        
        //Click to Remove From cart
        $('#exampleOrderPro tbody').on('click', 'button.remove', function(){
            var dataRow = tableOrderPro.row($(this).parents('tr')).data();
            var stringRowData   = {action : 'remove', item_product: dataRow[6]};
            $.post("http://localhost/peprice/backend/order/addToCart", stringRowData, function(d){
                var stringJSON  = $.parseJSON(JSON.stringify(d));
                $('span#cart_id').text('('+d+')');
            })
        });
        
        $('#exampleSizingDropdown1').click(function(e){
            e.preventDefault();
            var dataRowString   = {showcart: true};
            $.post('http://localhost/peprice/backend/order/showCart', dataRowString, function(text){
                $('#exampleSplitDropdown1').html(text);
            })
        });
        
        $(document).on('click','.remove_qty', function(evt){
            evt.preventDefault();
            var dataRowString   = {action: 'remove', item_product:$(this).attr('title')};
            //alert(JSON.stringify(dataRowString));
            $.post('http://localhost/peprice/backend/order/addToCart', dataRowString, function(text){
                $('#exampleSplitDropdown1').html(text);
            })
        });
        
        $(document).on('click','#empty', function(evt){
            evt.preventDefault();
            var dataRowString   = {action: 'empty', item_product:$(this).attr('title')};
            $.post('http://localhost/peprice/backend/order/showCart', dataRowString, function(text){
                $('#exampleSplitDropdown1').html(text);
            })
        })
        
        var tableCategory = $('#exampleCategory, #exampleSubCategory').DataTable({
          responsive: true,
          //"sDom": "t" // just show table, no other controls
        });
        
        $('#exampleCategory tbody').on('click', 'button.edit', function(){
            var dataRow = tableCategory.row($(this).parents('tr')).data();
            //alert("transaction _id is:" + dataRow[5]);
            dataRowTrans_id = parseInt($(this).attr('id'));
            $.post('http://localhost/peprice/backend/products/view',{category_id:dataRowTrans_id}, function(data){
                var stringJSON  = $.parseJSON(JSON.stringify(data));
                if(stringJSON.status == 'OK'){
                    $('#editCategoryModal').modal('show');
                    $('#editCategoryModal').on('shown.bs.modal', function (event) {
                        var thisTask    = $(this);
                        var button  = $(event.relatedTarget);
                        thisTask.find('.category_id').val(stringJSON.data.category_id);
                        thisTask.find('.category_name').val(stringJSON.data.category_name);
                        thisTask.find('.description').val(stringJSON.data.description);
                        thisTask.find('#editcat').on('click', function(ev){
                            ev.preventDefault();
                            var formSerial  = thisTask.find('form').serialize();
                            $.post('http://localhost/peprice/backend/products/editPost',formSerial, function(data){
                                var editJSON    = $.parseJSON(JSON.stringify(data));
                                if(editJSON.status == "OK"){
                                    window.location.reload();
                                }
                            })
                        })
                    });
                }
            });
        });
        
        var tableOrder = $('#exampleOrder').DataTable({
          responsive: true,
          "processing": true,
          "serverSide": true,
          "ajax": "http://localhost/peprice/backend/order",
          "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='btn-group'><button type='button' class='btn btn-default view' data-target='#examplePositionSidebar' data-toggle='modal'>View</button><button class='btn btn-default delete'>Delete</button></div>"
            }]
          //"sDom": "t" // just show table, no other controls
        });
        
        //Click to Remove From cart
        var dataRowTrans_id;
        $('#exampleOrder tbody').on('click', 'button.view', function(){
            var dataRow = tableOrder.row($(this).parents('tr')).data();
            //alert("transaction _id is:" + dataRow[5]);
            dataRowTrans_id = parseInt(dataRow[5]);
            
            //window.location.href    = 'http://localhost/bucketmanager/order/view/'+dataRowTrans_id;
        });
        
        $('#examplePositionSidebar').on('shown.bs.modal', function(e){
            $.post('http://localhost/peprice/backend/order/view', {trans:dataRowTrans_id}, function(htmlString){
                $('.modal-title > span').text(dataRowTrans_id);
                $('.modal-body').html(htmlString)
            })
        });
        
        
        //Customer Controller System
        var customerView    = $('#customerView').DataTable({
            responsive: true,
            "processing": true,
            "serverSide": true,
            "ajax": "http://localhost/peprice/backend/customer/show",
            "columnDefs": [{
                  "targets": -1,
                  "data": null,
                  "defaultContent": "<div class='btn-group'><button type='button' class='btn btn-default view' data-target='#examplePositionSidebar' data-toggle='modal'>View</button><button class='btn btn-default delete'>Delete</button></div>"
              }]
            //"sDom": "t" // just show table, no other controls
        });
        
        //Click to Remove From cart
        
        $('#customerView tbody').on('click', 'button.view', function(){
            var dataRow = customerView.row($(this).parents('tr')).data();
            window.location.href    = 'http://localhost/peprice/backend/customer/detail/'
                    +dataRow[5]+'?task=view';
        });
        
        
        $('#customerView tbody').on('click', 'button.delete', function(){
            var tdRow   = $(this).closest('tr');
            var dataRow = customerView.row($(this).parents('tr')).data();
            $.post('http://localhost/peprice/backend/customer/delete/',{register_id:dataRow[5]}, function(data){
                var stringJSON  = $.parseJSON(JSON.stringify(data));
                if(stringJSON.status == "OK"){
                    tdRow.remove();
                }
                else{
                    alert('Unable to Delete!'+stringJSON.status);
                }
            });
        });
        
        //Customer Controller System
        var getCustomer    = $('#getCustomers').DataTable({
            responsive: true,
            "processing": true,
            "serverSide": true,
            "ajax": "http://localhost/peprice/backend/order/getCustomers",
            "columnDefs": [{
                  "targets": -1,
                  "data": null,
                  "defaultContent": "<button type='button' class='btn btn-default ordernow'>Order Now</button>"
              }]
            //"sDom": "t" // just show table, no other controls
        });
        
        //Click to set customer for order
        $('#getCustomers tbody').on('click', 'button.ordernow', function(){
            var dataRow = getCustomer.row($(this).parents('tr')).data();
            var stringRowData   = {action : 'remove', register_id: dataRow[5]};
            window.location.href    = 'http://localhost/peprice/backend/order/basket/'+dataRow[5];
        });
        
        //Customer Controller System
        var orderTracker    = $('#orderTracker').DataTable({
            responsive: true,
            "processing": true,
            "serverSide": true,
            "ajax": "http://localhost/peprice/backend/order/orderTracker",
            "columnDefs": [{
                  "targets": -1,
                  "data": null,
                  "defaultContent": "<button type='button' class='btn btn-default monitor'>Monitor</button>"
              }]
            //"sDom": "t" // just show table, no other controls
        });
        
        //Click to set customer for order
        $('#orderTracker tbody').on('click', 'button.monitor', function(){
            var dataRow     = orderTracker.row($(this).parents('tr')).data();
            var windowTab   = window.open(dataRow[5], '_blank');
            windowTab.focus();
        });
        
        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                    '<select class="form-control width-full"><option value=""></option></select>'
                  )
                  .appendTo($(column.footer()).empty())
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                    );

                    column
                      .search(val ? '^' + val + '$' : '',
                        true, false)
                      .draw();
                  });

                column.data().unique().sort().each(function(
                  d, j) {
                  select.append('<option value="' + d +
                    '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "../../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
            ]).draw();
          });
        });
      })();
    })(document, window, jQuery);