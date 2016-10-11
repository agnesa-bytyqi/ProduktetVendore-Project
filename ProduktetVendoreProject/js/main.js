$(document).ready(function() {
 
  var latestProduct = $("#latest-product"),
      saleProduct = $("#sale-product"),
      recentProduct = $("#recent-product");
      
 
  latestProduct.owlCarousel({
      autoPlay: 3000,
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 2],
        [700, 3],
        [1000, 4],
        [1200, 5]
      ]
  });
    
    // Custom Navigation Events
      $(".next1").click(function(){
        latestProduct.trigger('owl.next');
      });
      $(".prev1").click(function(){
        latestProduct.trigger('owl.prev');
      });
    
    saleProduct.owlCarousel({
      autoPlay: 3500,
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 2],
        [700, 3],
        [1000, 4],
        [1200, 5]
      ]
  });
    
    // Custom Navigation Events
      $(".next2").click(function(){
        saleProduct.trigger('owl.next');
      });
      $(".prev2").click(function(){
        saleProduct.trigger('owl.prev');
      });
    
    recentProduct.owlCarousel({
      autoPlay: 4000,
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 2],
        [700, 3],
        [1000, 4],
        [1200, 5]
      ]
  });
    
    // Custom Navigation Events
      $(".next3").click(function(){
        recentProduct.trigger('owl.next');
      });
      $(".prev3").click(function(){
        recentProduct.trigger('owl.prev');
      });
    
    $("#brands").owlCarousel({
 
          autoPlay: 4500, //Set AutoPlay to 3 seconds

          itemsCustom : [
            [0, 1],
            [450, 1],
            [600, 2],
            [700, 3],
            [1000, 3],
            [1200, 4]
          ]

      });
 
    /*dataTable for Companies
    $('#table-companies').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } ); */
    
    $('#table-companies').DataTable();
    $('#table-products').DataTable();
    
    //validate forms
    $("#contact-form").validate();
    $("#add-about-validate").validate();
    $("#modify-about-validate").validate();
    
});