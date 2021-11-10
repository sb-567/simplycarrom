<?php $this->load->view("includes/header_top"); ?>
<title><?php echo $web_settings['site_title']; ?></title>
<?php $this->load->view("includes/header"); ?>

<div class="myaccount-area page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2>My Orders</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="ml-auto mr-auto col-lg-12">
                    
                    <?php 
                
                    foreach($orders as $o){
                        $order_details=$this->Order_model->getAllOrderDetails($o['id']);
                        $date=$o['created'];
                        $modified=$o['modified'];
                        $pieces = explode(" ", $date);
                        $pieces1 = explode(" ", $modified);
                        
                        
                        
                    ?>
                    
                    <div class="my_orders_status">
                        <div class="myorders">
                            <div class="row">
                                
                                    <div class="col-md-4">
                                        <div class="order_header">
                                        <h2><?php echo $o['order_no'] ?></h2>
                                    </div>
                                    </div>        

                                    <div class="col-md-4">
                                        <div class="order_header">
                                            <?php if($o['status'] == 'Placed'){ ?>
                                        <p>Orders have been placed on <?php echo $pieces[0];  ?> </p>
                                        <?php } ?>
                                        <?php if($o['status'] == 'Packed'){ ?>
                                        <p>Orders have been Packed on <?php echo $pieces1[0];  ?> </p>
                                        <?php } ?>
                                        
                                        <?php if($o['status'] == 'Shipped'){ ?>
                                        <p>Orders have been Shipped on <?php echo $pieces1[0];  ?> </p>
                                        <?php } ?>
                                        
                                        <?php if($o['status'] == 'Delivered'){ ?>
                                        <p>Orders have been Delivered  </p>
                                        <?php } ?>
                                        
                                        <?php if($o['status'] == 'Cancel'){ ?>
                                        <p class="canp">Order have been Canceled</p>
                                        <?php } ?>
                                        
                                       
                                        </div>
                                    </div>  

                                     <div class="col-md-4">
                                        <div class="order_header order_right">
                                        
                                        
                                        
                                        <?php if($o['status']=="Cancel"){ ?>
                                        
                                        <button type="button" class="cancel_dis" >Cancel Order</button>
                                        <?php }else{ ?>
                                        <?php if(($o['status']=="Placed") || ($o['status']=="Packed") ){ ?>
                                        <a href="<?php echo base_url() ?>My_Orders/invoice/<?php echo $o['id']; ?>" target="_blank" class="cancel_order">View Invoice</a>
                                        <button type="button" class="cancel_order" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $o['id'] ?>">Cancel Order</button>
                                        
                                        <?php } } ?>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                             
                             <?php foreach($order_details as $od){
                                $single_total=$od['special_price']*$od['qty'];
                             ?>
                            <div class="order_middle_desc">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="order_middle">
                                       <div class="row">
                                           <div class="col-md-4">
                                               <img src="<?php echo base_url() ?>admin/<?php echo $od['image'] ?>" class="img-fluid" >
                                           </div>
                                           <div class="col-md-8">
                                               <div class="order_desc">
                                                   <strong><?php echo $od['product_name'] ?> </strong>
                                                   <p>price: <?php echo $od['special_price'] ?></p>
                                                   <p>Qty: <?php echo $od['qty'] ?></p>
                                               </div>
                                           </div>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="order_desc_detials">
                                        <?php
                                        // echo $o['status'];
                                               
                                                $placed=0;
                                                $pack=0;
                                                $ship=0;
                                                $del=0;
                                                
                                                
                                                 if($o['status']=="Placed"){  $placed="active"; }
                                                 if($o['status']=="Packed"){  $pack="active"; $placed="active";  }
                                                 if($o['status']=="Shipped"){  $ship="active"; $pack="active";  $placed="active"; }
                                                 if($o['status']=="Delivered"){  $del="active";  $ship="active";  $pack="active";  $placed="active";   }
                                         ?>
                                        
                                        <!--<p>This Product Has Been Cancelled on 20-09-2021 02:48 PM</p>-->
                                        <!--<strong>Reason: wvbv</strong>-->
                                       <ul>
                                           <li class="<?php echo $placed ?>" id="step1"><p>Placed</p></li>
                                           <li class="<?php echo $pack ?>" id="step2"><p>Packed</p></li>
                                           <li class="<?php echo $ship ?>" id="step3"><p>Shipped</p></li>
                                           <li class="<?php echo $del ?>" id="step4"><p>Delivered</p></li>
                                       </ul>
                                    </div>
                                </div>
                                

                                <div class="col-md-3">
                                    <div class="order_desc">
                                        <strong>Order Total Rs. <?php echo $single_total ?></strong>
                                        
                                        
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <?php  } ?>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($orders as $o){ ?>
    <div class="modal cancel_order fade bd-example-modal-sm<?php echo $o['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            
        <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
         <h1>Are you sure ?</h1>
          
          <div class="row">
              <div class="col-md-6">
                  <a href="<?php echo base_url() ?>My_Orders/cancel_order/<?php echo $o['id']?>" class="yes">Yes</a>
              </div>
              <div class="col-md-6">
                  <button class="no" data-dismiss="modal">No</button>
              </div>
          </div>
          
        
        </div>
      </div>
    </div>
    <?php } ?>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>


    </body>

</html>