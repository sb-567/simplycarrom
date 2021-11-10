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
                                                <li class="active">Cart</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <div class="page-content mt-50 mb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2>Cart</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <!-- Cart Table -->

                        <?php if(empty($user_cart_product)){ ?>
                            <h1>Your cart is empty</h1>
                        <?php }else{ ?>
                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $value_cart=0;
                                        // echo "<pre>"; print_r($user_cart_product);
                                    foreach($user_cart_product as $cart){
                                            $sub_total=$cart['sum_sp']*$cart['qty'];
                                            $value_cart+=$sub_total;
                                     ?>
                                    <tr>
                                        <td class="pro-thumbnail">
                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cart['slug']; ?>/<?php echo $cart['category_id']; ?>">
                                            <img class="img-fluid" src="<?php echo ADMINASSETS.$cart['image'] ?>" alt="Product"></a>
                                        </td>
                                        <td class="pro-title">
                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cart['slug']; ?>/<?php echo $cart['category_id']; ?>"><?php echo $cart['name'].'-'.$cart['variant_text'].','.$cart['value'] ?></a>
                                        </td>
                                        <td class="pro-price">
                                            <span>₹ <?php echo $cart['sum_sp'] ?></span>
                                        </td>
                                        <td class="pro-quantity">
                                            
                                        <input  id="special_price-<?php echo $cart["product_id"]; ?>" type="hidden" name="special_price" value="<?php echo $cart['sum_sp'] ?>">

                                            <button onClick='decrement_quantity(<?php echo $cart["product_id"]; ?>)' ><i class="fa fa-minus" aria-hidden="true"></i></button>

                                <input id="quantity-<?php echo $cart["product_id"]; ?>" type="text" name="quantity" value="<?php echo $cart['qty'] ?>">
                                
                                <button onClick='increment_quantity(<?php echo $cart["product_id"]; ?>)'><i class="fa fa-plus" aria-hidden="true"></i></button>

                                        </td>
                                        <td class="pro-subtotal">
                                            <span id="spriceres-<?php echo $cart["product_id"]; ?>">₹ <?php echo $cart['sum_sp'] ?></span>
                                        </td>
                                        <td class="pro-remove">
                                            <a href="<?php echo base_url(); ?>Cart/remove_cart/<?php echo $cart['product_id']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                                </tbody>
                            </table>
                        </div>

                    </form>

                    <div class="row">

                        <div class="col-lg-6 col-12 mb-15">
                        </div>

                        <!-- Cart Summary -->
                        <div class="col-lg-6 col-12 mb-40 d-flex">
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Cart Summary</h4>
                                
                                    
                                    <h2>Sub Total <span>₹ <?php echo $value_cart ?></span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <button class="checkout-btn" onclick="location.href='<?php base_url() ?>Checkout'">Checkout</button>
                                    <!-- <button class="update-btn" onclick="location.href='<?php base_url() ?>Cart'">Update Cart</button> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

     <script>
            function increment_quantity(product_id) {
    var inputQuantityElement = $("#quantity-"+product_id);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    var special_price = $("#special_price-"+product_id).val();
    save_to_db(product_id, newQuantity, special_price);
    event.preventDefault();
}

function decrement_quantity(product_id) {
    var inputQuantityElement = $("#quantity-"+product_id);
    if($(inputQuantityElement).val() > 1) 
    {
    var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    var special_price = $("#special_price-"+product_id).val();
    save_to_db(product_id, newQuantity, special_price);
    }

    event.preventDefault();
}

function save_to_db(product_id, new_quantity, special_price) {
    var inputQuantityElement = $("#quantity-"+product_id);
    $.ajax({
        url : "<?php echo base_url() ?>Cart/increment_decrement",
        data : "product_id="+product_id+"&new_quantity="+new_quantity+"&special_price="+special_price,
        dataType:'json',
        type : 'post',
        success : function(response) {
            $.map(response, function(qtyprice, product_id) {
            $("#spriceres-"+response.product_id).text('₹'+response.qtyprice);
            $('#total').text(response.total);
              // alert("Value is :" + qtyprice);
              // alert("key is :" + key);
            });
            
            // $('#checkres').val(response.product_id);
            
            $(inputQuantityElement).val(new_quantity);
            
        }
    });
}
        </script>

    </body>

</html>