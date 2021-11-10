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
                                                <li class="active">Wishlist</li>
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
                        <h2>Wishlist</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                
                <div class="shop-product-wrap grid row">
                            
                        <?php if(empty($user_wishlist_product)){ ?>
                            <div class="col-12">
                                <h1>Your Wishlist is empty</h1>
                            </div>
                        <?php }else{ ?>
                        	<?php foreach($user_wishlist_product as $list) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                                <!-- product start -->
                                <div class="single-product shop-page-product single-grid-product new-badge sale-badge">
                                    <div class="single-product-content">
                                        <div class="product-image">
                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $list['slug']; ?>/<?php echo $list['category_id']; ?>">
                                                <img src="<?php echo ADMINASSETS.$list['image'] ?>" class="img-fluid" alt="">
                                                <img src="<?php echo ADMINASSETS.$list['image'] ?>" class="img-fluid" alt="">
                                            </a>
                                            <div class="image-btn">
                                                <!--<a href="#" data-toggle="modal"-->
                                                <!--    data-target="#quick-view-modal-container"><i-->
                                                <!--        class="fa fa-search"></i></a>-->
                                                 <form action="<?php echo base_url(); ?>Wishlist/add_to_wishlist" method="post">
                                                    <?php $username=$this->session->userdata('user');
                                                    $user_id=$this->session->userdata('id');
                                                    $abc=explode(" ",$username);
                                                    $proid=0;
                                                    if($username!=NULL){ 
                                                        
                                                        foreach($wishlistcount as $wish){ $proid = $wish['product_id']; $wish_id=$wish['id']; }
                                                        
                                                          if($proid!=$list['product_id']){
                                                         ?>
                                                    
                                                    
                                                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                                    <input type="hidden" name="product_id" value="<?php echo $list['product_id']; ?>">
                                                                <button type="submit" name="submit" ><i class="fa fa-heart-o"></i></button>
                                                                 <?php } else { ?>
                                                                 <input type="hidden" name="wish_id" value="<?php echo $wish_id ?>">
                                                                  <button type="submit" name="submit" class="active"><i class="fa fa-heart-o"></i></button>
                                                            <?php } }else{ ?>
                                                                <a href="<?php echo base_url(); ?>Login_Register"><i class="fa fa-heart-o"></i></a>
                                                           <?php } ?>
                                                 </form>
                                            </div>
                                        </div>
                                        <h5 class="product-name"><a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $list['slug']; ?>/<?php echo $list['category_id']; ?>"><?php echo $list['name'] ?></a></h5>
                                        <div class="price-box">
                                            <h4>₹ <?php echo $list['special_price'] ?></h4>
                                        </div>

                                        <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $list['slug']; ?>/<?php echo $list['category_id']; ?>" class="add-to-cart-btn"> View Details</a>
                                    </div>
                                </div>
                                <!-- product end -->
                            </div>
                        <?php } ?>
                        <?php } ?>
                        
                        </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>