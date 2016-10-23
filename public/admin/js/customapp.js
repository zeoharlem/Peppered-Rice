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
            alert(clickData[5]);
        })
        
        //control click on the button on the exampleFixedHeader
        $('#examplePageHeader tbody').on('click', 'button.delete', function(ev){
            var clickData   = tablePage.row($(this).parents('tr')).data();
            alert(clickData[5]);
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
            var dataRow = tableOrderPro.row($(this).parents('tr')).data();
            var qtyStrRow       = $(this).closest('tr').children('td').eq(5);
            var newQtyRow       = qtyStrRow.find('input').val();
            var stringRowData   = {
                action : 'add', item_product: dataRow[6], qty: newQtyRow
            }
            $.post("http://localhost/peprice/backend/order/addToCart", stringRowData, function(d){
                var stringJSON  = $.parseJSON(JSON.stringify(d));
                $('span#cart_id').text('('+d+')');
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
        
        $(document).on('click','#remove_qty', function(evt){
            evt.preventDefault();
            var dataRowString   = {action: 'remove', item_product:$(this).attr('title')};
            //alert(JSON.stringify(dataRowString));
            $.post('http://localhost/peprice/backend/order/showCart', dataRowString, function(text){
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
          "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='btn-group'><button class='btn'>View</button><button class='btn'>Edit</button><button class='btn'>Delete</button></div>"
            }]
          //"sDom": "t" // just show table, no other controls
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
        
        var tableCustomer = $('#getCustomers').DataTable({
          responsive: true,
          "processing": true,
          "serverSide": true,
          "ajax": "http://localhost/peprice/backend/order/getCustomers",
          "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='btn-group'><button type='button' class='btn btn-default view' data-target='#examplePositionSidebar' data-toggle='modal'>View</button></div>"
            }]
          //"sDom": "t" // just show table, no other controls
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