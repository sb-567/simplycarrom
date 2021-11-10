$(document).ready(function() {

    $('.alert').addClass("show");
    $('.alert').removeClass("hide");
    $('.alert').addClass("showAlert");
    setTimeout(function() {
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    }, 5000);
    $('.close-btn').click(function(){
      $('.alert').removeClass("show");
      $('.alert').addClass("hide");
    });
    

    var base_url= Settings.base_url;


    $('.apply_promo_code').click(function(){
    var value=$(this).attr("data-id");
    // var total_value = $('#total_value').val();
    // var promo_type = $('#promo_type').val();
    // var promo_val = $('#promo_val').val();
        $.ajax({
            url: base_url+"Checkout/apply_promo_code",
            type: 'post',
            data: {value:value},
            dataType:'json',
            success: function(response) {
            //     $('#special_price').text('₹'+response[0].special_price);
            // $('#final_special_price').val(response[0].special_price);
            // $('#price').text('₹'+response[0].price);
            // $('#final_price').val(response[0].price);
            // $('#stock_show').text(response[0].stock);
            // $('#stock').val(response[0].stock);
            
            }
        });
    });



 //       $(document).ready(function(){
 //    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
 //    // var colors=$('.colors:checked').attr("data-color");
 //    var ply=$('.plys:checked').attr("data-ply");
 //    // var colors = $('#colors').val();
 //    // var ply = $('#ply').val();
 //       $.ajax({
 //            url: base_url+"Products/product_variant",
 //            type: 'post',
 //            data: {ply:ply},
 //            dataType:'json',
 //            success: function(response) {
 //           $('#special_price').text('₹'+response[0].special_price);
 //            $('#final_special_price').val(response[0].special_price);
 //            $('#price').text('₹'+response[0].price);
 //            $('#final_price').val(response[0].price);
 //            $('#stock_show').text(response[0].stock);
 //            $('#stock').val(response[0].stock);
 //                // alert(response);
 //                // records = JSON.parse(response);
 //            }
 //        });
 //    });

    

    
 // $('.plys').click(function(){
 //    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
 //    var ply=$(this).attr("data-ply");
 //    // var colors=$('.colors:checked').attr("data-color");
 //    // var colors = $('#colors').val();
 //    // var ply = $('#ply').val();
 //        $.ajax({
 //            url: base_url+"Products/product_variant",
 //            type: 'post',
 //            data: {ply:ply},
 //            dataType:'json',
 //            success: function(response) {
 //           $('#special_price').text('₹'+response[0].special_price);
 //            $('#final_special_price').val(response[0].special_price);
 //            $('#price').text('₹'+response[0].price);
 //            $('#final_price').val(response[0].price);
 //            $('#stock_show').text(response[0].stock);
 //            $('#stock').val(response[0].stock);
 //                // alert(response);
 //                // records = JSON.parse(response);
 //            }
 //        });
 //    });
    

       $(document).ready(function(){
    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
    var colors=$('.colors:checked').attr("data-color");
    var ply=$('.plys:checked').attr("data-ply");
    // var colors = $('#colors').val();
    // var ply = $('#ply').val();
       $.ajax({
            url: base_url+"Products/product_variant",
            type: 'post',
            data: {'ply':ply,'colors':colors},
            dataType:'json',
            success: function(response) {
           $('#special_price').text('₹'+response[0].special_price);
            $('#final_special_price').val(response[0].special_price);
            $('#price').text('₹'+response[0].price);
            $('#final_price').val(response[0].price);
            $('#stock_show').text(response[0].stock);
            $('#stock').val(response[0].stock);
                // alert(response);
                // records = JSON.parse(response);
            }
        });
    });

    

    
 $('.plys').click(function(){
    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
    var ply=$(this).attr("data-ply");
    var colors=$('.colors:checked').attr("data-color");
    // var colors = $('#colors').val();
    // var ply = $('#ply').val();
        $.ajax({
            url: base_url+"Products/product_variant",
            type: 'post',
            data: {'ply':ply,'colors':colors},
            dataType:'json',
            success: function(response) {
           $('#special_price').text('₹'+response[0].special_price);
            $('#final_special_price').val(response[0].special_price);
            $('#price').text('₹'+response[0].price);
            $('#final_price').val(response[0].price);
            $('#stock_show').text(response[0].stock);
            $('#stock').val(response[0].stock);
                // alert(response);
                // records = JSON.parse(response);
            }
        });
    });


$('.colors').click(function(){
    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
    var colors=$(this).attr("data-color");
    var ply=$('.plys:checked').attr("data-ply");
    // var colors = $('#colors').val();
    // var ply = $('#ply').val();
        $.ajax({
            url: base_url+"Products/product_variant",
            type: 'post',
            data: {'ply':ply,'colors':colors},
            dataType:'json',
            success: function(response) {
           $('#special_price').text('₹'+response[0].special_price);
            $('#final_special_price').val(response[0].special_price);
            $('#price').text('₹'+response[0].price);
            $('#final_price').val(response[0].price);
            $('#stock_show').text(response[0].stock);
            $('#stock').val(response[0].stock);
                // alert(response);
                // records = JSON.parse(response);
            }
        });
    });


$(document).ready(function(){
    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
    var colors=$('.colors:checked').attr("data-color");
    // var colors = $('#colors').val();
    // var ply = $('#ply').val();
       $.ajax({
            url: base_url+"Products/product_variant_img",
            type: 'post',
            data: {'colors':colors},
            dataType:'json',
            success: function(response) {
            // $('#show_v_img').text(response[0].vimage);
            $('#show_v_img').html('<img src="'+ base_url +'admin/' + response[0].vimage + '" class="img-fluid" />');
            // $('#show_v_img_a').html('<a href="'+ base_url +'admin/' + response[0].vimage + '" class="big-image-popup"><i class="fa fa-search-plus"></i></a>');
                // alert(response);
                // records = JSON.parse(response);
            }
        });
    });

$('.colors').click(function(){
    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
    var colors=$(this).attr("data-color");
    
    
        $.ajax({
            url: base_url+"Products/product_variant_img",
            type: 'post',
            data: {'colors':colors},
            dataType:'json',
            success: function(response) {
            // $('#show_v_img').text(response[0].vimage);
            $('#show_v_img').html('<img src="'+ base_url +'admin/' + response[0].vimage + '" class="img-fluid" />');
            $(".sc").addClass("show active");
            // $('#show_v_img_a').html('<a href="'+ base_url +'admin/' + response[0].vimage + '" class="big-image-popup"><i class="fa fa-search-plus"></i></a>');
                // alert(response);
                // records = JSON.parse(response);
            }
        });
    });

    $('.plys').click(function(){
    // var baseUrl = 'https://localhost/webcosmic/organic/html/';
    var ply=$(this).attr("data-ply");

    // var colors = $('#colors').val();
    // var ply = $('#ply').val();
        $.ajax({
            url: base_url+"Products/product_variant_img_ply",
            type: 'post',
            data: {'ply':ply},
            dataType:'json',
            success: function(response) {
           $('#show_v_img').html('<img src="'+ base_url +'admin/' + response[0].vimage + '" class="img-fluid" />');
            $(".sc").addClass("show active");
                // alert(response);
                // records = JSON.parse(response);
            }
        });
    });
    
    $(document).ready(function(){
     $('.sortby').change(function() {
    
    var sortby = $('#sortby').val();
        $.ajax({
            url: base_url+"Products/sort_by",
            type: 'post',
            data: {sortby:sortby},
            dataType:'json',
            success: function(response) {
            // location.reload(true); 
            location.reload(); 
                
            }
        });
    });
    });



    

    

    
   

    



});