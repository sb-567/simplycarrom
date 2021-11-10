<?php $this->load->view("includes/header_top"); ?>
<title><?php echo $web_settings['site_title']; ?></title>
<?php $this->load->view("includes/header"); ?>

<div class="breadcrumb-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="breadcrumb-container">
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>">Home</a> <span class="bc-separator">|</span>
                                                </li>
                                                <li class="active">Checkout</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="page-content checkout mt-50 mb-10">
                        <div class="container">
                            
                            <div class="row">
                                <div class="col-12">
                                    <!-- Checkout Form s-->
                                    <form method="post" action="<?php echo base_url() ?>Checkout/place_order" class="checkout-form" id="checkout-form">
                                        <div class="row row-40">

                                            <div class="col-lg-7 mb-20">

                                                <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                              <div class="row">
                                                    <div class="col-md-6">
                                                    <h4>Address Book Entries</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="" data-toggle="modal" data-target="#exampleModal">Add Address</button>
                                                    </div>
                                              </div>  
                                            </div>
                                            
                                            <?php $cnt = 0;foreach($useraddress as $add){ ?>
                                                <input type="radio" name="add_id" value="<?php echo $add['id']; ?>" id="add_id<?php echo $add['id']; ?>" <?php if($cnt == 0 ){ ?>checked <?php } ?> >
                                                <label for="add_id<?php echo $add['id']; ?>">
                                            <div class="entries-wrapper" >
                                                <div class="row">
                                                    <div
                                                        class="col-lg-7 col-md-7 d-flex">
                                                        <div class="entries-info">
                                                        
                                                            <p><b>Area : </b><?php echo $add['area'] ?></p>
                                                            <p><b>Pincode : </b><?php echo $add['pincode'] ?></p>
                                                            <p><b>City : </b><?php echo $add['city'] ?></p>
                                                            <p><b>Address : </b><?php echo $add['address'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-5 col-md-5 d-flex align-items-center justify-content-center">
                                                        <div class="entries-edit-delete text-center">
                                                            <!-- <a class="edit-btn" href="#">Edit</a> -->
                                                            <button class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModal<?php echo $add['id']; ?>">Edit</button>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </label>
                                        <?php $cnt ++; } ?>
                                            
                                        </div>

                                            </div>

                                            <div class="col-lg-5">
                                                <div class="row">

                                                    <!-- Cart Total -->
                                                    <div class="col-12 mb-40">

                                                        <h4 class="checkout-title">Cart Total</h4>

                                                        <div class="checkout-cart-total">

                                                            <h4>Product <span>Total</span></h4>
                                                            
                                                            <ul>
                                                                <?php 
                                                                
                                                                $value_cart=0;
                                                                $value_gst=0;
                                                            
                                                            foreach($user_cart_product as $cart){
                                                                // echo "<pre>"; print_r($cart);
                                                                if($cart['percentage']==0){
                                                                    $percentage=0;    
                                                                }else{
                                                                    $percentage=$cart['percentage'];
                                                                }
                                                                
                                                                $gst=$percentage/100;
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                    $pro_total=$cart['sum_sp']*$cart['qty'];
                                                                      $withgst=$gst*$pro_total;
                                                                        
                                                                     $value_gst+=$withgst;
                                                                    $value_cart+=$pro_total;
                                                                    $divgst=$value_gst/2;
                                                                    // $grand=$value_cart-$value_gst;
                                                             ?>
                                                                <li><?php echo $cart['name'] ?> X <?php echo $cart['qty']; ?> <span>₹ <?php echo $pro_total ?></span>
                                                                </li>
                                                              
                                                                  <?php    } ?>
                                                            </ul>

                                                            <p>Sub Total <span>₹ <?php echo $value_cart ?></span></p>
                                                            <p>CGST (Inclusive) <span>₹ <?php echo $divgst ?></span></p>
                                                            <p>SGST (Inclusive)<span>₹ <?php echo $divgst ?></span></p>
                                                            <p>Shipping Fee <span>Free</span></p>

                                                            <h4>Grand Total <span  id="final_value">₹ <?php echo $value_cart ?></span></h4>
                                                            <input type="hidden" name="final_value1" id="final_value1" value="<?php echo $value_cart ?>" >
                                                            <input type="hidden" name="grand_total" id="grand_total" value="<?php echo $value_cart; ?>" >
                                                            <input type="hidden" name="promo_amt" id="promo_amt" value="" >
                                                            <input type="hidden" name="promo_code" id="promo_code" value="" >
                                                        </div>

                                                    </div>

                                                      <?php 
                                                                $value_cart_p=0;
                                                                $value_cart_sp=0;
                                                            
                                                            foreach($user_cart_product as $cart){
                                                                $gst=$cart['percentage']/100;
                                                                
                                                                    $sub_total_p=$cart['sum_p']*$cart['qty'];
                                                                    $with_p_gst=$gst*$sub_total_p;
                                                                    $subtotal_p=$sub_total_p;
                                                                    
                                                                    $sub_total_sp=$cart['sum_sp']*$cart['qty'];
                                                                    $with_sp_gst=$gst*$sub_total_sp;
                                                                    $subtotal_sp=$sub_total_sp;
                                                                    
                                                                    $value_cart_p+=$subtotal_p;
                                                                    $value_cart_sp+=$subtotal_sp;
                                                             ?>
                                                             
                                                    <input type="hidden" name="product_id[]" value="<?php echo $cart['product_id'] ?>">
                                                    <input type="hidden" name="product_name[]" value="<?php echo $cart['name'] ?>">
                                                    <input type="hidden" name="price[]" value="<?php echo $cart['sum_p'] ?>">
                                                    <input type="hidden" name="special_price[]" value="<?php echo $cart['sum_sp'] ?>">
                                                    <input type="hidden" name="color[]" value="<?php echo $cart['colors'] ?>">
                                                    <input type="hidden" name="ply[]" value="<?php echo $cart['ply'] ?>">
                                                    <input type="hidden" name="gst[]" value="<?php echo $gst ?>">
                                                    <input type="hidden" name="qty[]" value="<?php echo $cart['qty'] ?>">
                                                    <input type="hidden" name="total_p[]" value=" <?php echo $value_cart_p ?>"><br>
                                                    <input type="hidden" name="total_sp[]"  value=" <?php echo $value_cart ?>"><br>
                                                    
                                                <?php } ?>


                                                    <div class="col-12 mb-40">

                                                        <h4 class="checkout-title">Promo Code</h4>

                                                        <div class="checkout-payment-method">
                                                            <input type="hidden" name="razorpay_payment_id_new" id="razorpay_payment_id_new" >
                                                            <input type="hidden" name="razorpay_signature_new" id="razorpay_signature_new" >

                                                             <input type="hidden" name="payment_id_new" id="payment_id_new" >
                                                            <input type="hidden" name="signature_new" id="signature_new" >

                                                        <?php foreach($promo_code as $code){ ?>
                                                        <div class="promo-method">
                                                            <label><?php echo $code['code'] ?></label>
                                                           
                                                            <input type="hidden" id="code-<?php echo $code['id'] ?>" name="code[]" value="<?php echo $code["code"]; ?>" >

                                                            <input type="hidden" name="total_value[]" id="total_value-<?php echo $code["id"]; ?>" value="<?php echo $value_cart ?>" >


                                                            <input type="hidden" name="promo_type[]" id="promo_type-<?php echo $code["id"]; ?>" value="<?php echo $code['type'] ?>" >


                                                            <input type="hidden" name="promo_val[]" id="promo_val-<?php echo $code["id"]; ?>" value="<?php echo $code['value'] ?>" >

                                                            
                                                            
                                                            <button type="button" class="SeeMore2" onClick='apply_promo_code(<?php echo $code["id"]; ?>)'>Apply</button>
                                                        </div>
                                                    <?php } ?>

                                                           

                                                            

                                                        </div>

                                                      

                                                    </div>
                                                

                                                    <!-- Payment Method -->
                                                    <div class="col-12 mb-40">

                                                        <h4 class="checkout-title">Payment Method</h4>

                                                        <div class="checkout-payment-method">

                                                            <div class="single-method">
                                                                <input type="radio" id="payment_check"
                                                                    name="cod" value="cod">
                                                                <label for="payment_check">Cash On Delivery</label>
                                                               
                                                            </div>

                                                            <div class="single-method">
                                                                <input type="radio" id="payment_bank"
                                                                    name="cod" value="razorpay" checked="">
                                                                <label for="payment_bank">Razorpay - Online Payment</label>
                                                                <!-- <p data-method="bank">Please send a Check to Store name
                                                                    with Store Street, Store Town, Store State, Store
                                                                    Postcode, Store Country.</p> -->
                                                            </div>

                                                           

                                                            

                                                        </div>

                                                        <button type="button"  class="place-order" id="checkout-form-button" value="Place order">Place Order</button>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

    <?php $this->load->view("includes/footer"); ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>My_Account/add_address" method="post">

        <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Whom you want to deliver?">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location</label>
            <!-- <input type="text" class="form-control" placeholder="Mobile No"> -->
            <select class="form-control" name="location">
                <option value="home">Home</option>
                <option value="office">Office</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pincode</label>
            <input type="text" class="form-control" name="pincode" placeholder="Pincode">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No</label>
            <input type="text" class="form-control" name="mobile" placeholder="Mobile No">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Area</label>
            <input type="text" class="form-control" name="area" placeholder="Area">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">City</label>
            <input type="text" class="form-control" name="city" placeholder="City">
          </div>

        </div>
        </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter your Address" rows="4"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
    </div>
  </div>
</div>

<?php foreach($useraddress as $add){ ?>
<div class="modal fade" id="exampleModal<?php echo $add['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>My_Account/edit_address/<?php echo $add['id']; ?>" method="post">

        <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $add['name']; ?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location</label>
            <!-- <input type="text" class="form-control" placeholder="Mobile No"> -->
            <select class="form-control" name="location">
                <option value="home">Home</option>
                <option value="office">Office</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pincode</label>
            <input type="text" class="form-control" name="pincode" value="<?php echo $add['pincode']; ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $add['mobile']; ?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Area</label>
            <input type="text" class="form-control" name="area" value="<?php echo $add['area']; ?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">City</label>
            <input type="text" class="form-control" name="city" value="<?php echo $add['city']; ?>">
          </div>

        </div>
        </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter your Address" rows="4"><?php echo $add['address']; ?></textarea>
          </div>
      </div>
      <div class="modal-footer text-center">
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

<?php } ?>

    
    <?php $this->load->view("includes/script"); ?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    
    $('.SeeMore2').click(function() {
        //alert('clicked');
        // this.value = 'Applied';
        $(this).html('Applied');
    });
         function apply_promo_code(id) {
            //  if($("#code-"+id).val()){
            //      $(".SeeMore2").html("Applied"+1);
            //  }
    var code = $("#code-"+id).val();
    var total_value = $("#total_value-"+id).val();
    var promo_type = $("#promo_type-"+id).val();
    var promo_val = $("#promo_val-"+id).val();
   
    		
    $.ajax({
        url : "<?php echo base_url() ?>Checkout/apply_promo_code",
        data : "code="+code+"&total_value="+total_value+"&promo_type="+promo_type+"&promo_val="+promo_val,
        dataType:'json',
        type : 'post',
        success : function(response) {
            $('#final_value').text('₹ '+response.promo_discount);
            $('#final_value1').val(response.promo_discount);
            $('#final_value2').val(response.promo_discount);
            $('#promo_amt').val(response.promo_amt);
            $('#promo_code').val(response.code);
            
            
            
        }
    });
    event.preventDefault();
}





$(document).ready(function () {

    $("#checkout-form-button").on("click",function(e){
    var method = $('input[name="cod"]:checked').val();
    console.log(method);

     var add_id = $('input[name="add_id"]:checked').val();

    if(add_id > 0){


        if(method == "razorpay"){

            var val = $("#razorpay_payment_id_new").val();

            if(val.length >  0){
                $("#checkout-form").submit();
                // e.currentTarget.submit();
                // return true;    
            }else{
              // e.preventDefault();
              var add_id = $('input[name="add_id"]:checked').val();

              if(add_id > 0){
                $('#checkout-form-button').attr('disabled', true).html('Processing...');

                initiatePayment(e);  
              }else{
                alert("Please select Address");
              }

            }

            
        }else{
            // e.preventDefault();
            console.log("cod type");
            $("#checkout-form").submit();
        }
    }else{
        alert("Please select Address");
      }
})


    var addresses = [];

    function razorpay_setup(razorpay_order_id,e) {
        var amount = $('#final_value1').val();
        var options = {
            "key": "<?php echo KEY; ?>", // Enter the Key ID generated from the Dashboard
            "amount": (amount * 100), // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Simply Carrom",
            "description": "Product Purchase",
            "image": "",
            "order_id": razorpay_order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response) {
                console.log(response)
                var res = response;
                $('#payment_id_new').val(res.razorpay_payment_id);
                $('#razorpay_payment_id_new').val(res.razorpay_payment_id);
                $('#signature_new').val(res.razorpay_signature);
                $('#razorpay_signature_new').val(res.razorpay_signature);
                // console.log(res.razorpay_payment_id);
                // console.log(res.razorpay_signature);

                // $("#checkout-form").children(':input[value=""]').attr("disabled", "disabled");

                // console.log($("#checkout-form").serialize());
                $("#checkout-form").submit();
               
                // e.submit()
                // e.currentTarget.submit();
            //     place_order().done(function (result) {
            //         console.log(result)
            //         console.log(result.error)
            //         if (result.error == false) {
            //             setTimeout(function () {
            //                 location.href = base_url + 'payment/success';
            //             }, 3000);
            //         }else{
            //             Toast.fire({
            //             icon: 'error',
            //             title: 'Something went wrong while placing your order please try again!'
            //         });
            //         }
            //     });
            },
            "prefill": {
                "name": "<?php echo $this->session->userdata('user'); ?>",
                "email": "<?php echo $this->session->userdata('email'); ?>",
                "contact": ""
            },
            "notes": {
                "address": "Simply Carrom Purchase"
            },
            "theme": {
                "color": "#3399cc"
            },
            "escape": false,
            "modal": {
                "ondismiss": function () {
                    $('#checkout-form-button').attr('disabled', false).html('Place Order');
                }
            }
        };
        // console.log(options);
        var rzp = new Razorpay(options);
        rzp.open();
                    rzp.on('payment.failed', function (response) {
                        alert("Your Payment Failed...");
                        window.location.reload();
                    });
        // return rzp;
    }

function initiatePayment(e){
    var final_value = $('#final_value1').val();
    $.ajax({
        url : "<?php echo base_url() ?>Checkout/initiate_razorpay",
        data : "final_value="+final_value+"",
        // dataType:'json',
        type : 'post',
        success : function(response) {
            var response = $.parseJSON(response);
            razorpay_setup(response.order_id,e);
            // $('#final_value').text('₹ '+response.promo_discount);
            // $('#final_value1').val(response.promo_discount);
            // $('#promo_amt').val(response.promo_amt);
            // $('#promo_code').val(response.code);
            
            
            
        }
    });
}

})


    </script>
    </body>

</html>