<?php $this->load->view("includes/header_top"); ?>

<?php foreach($singleproduct as $list) { 

?>
<?php if(!empty($list['page_title'])){ ?>
<title> <?php echo $list['page_title'] ?></title>
<?php }else{ ?>
<title><?php echo $web_settings['site_title']; ?></title>
<meta property="og:title"  content="<?php echo $web_settings['site_title']; ?>" />
<?php } ?>
    <meta property="og:type" content="article" />

<?php if(!empty($list['meta_tags'])){ ?>
<meta name="keyword" content="<?php echo $list['meta_tags'] ?>">
<?php } ?>

<?php if(!empty($list['image'])){ ?>
<meta property=og:image itemprop="image" content="<?php echo ADMINASSETS ?><?php echo $list['image'] ?>"/>
<?php } ?>

 <meta property="og:url" content="<?php echo base_url(); ?>Products/productdetail/<?php echo $list['slug'] ?>/<?php echo $list['category_id'] ?>" />



<?php if(!empty($list['meta_description'])){ ?>
<meta property="og:description" content="<?php echo $list['meta_description'] ?>" />
<meta name="description" content="<?php echo $list['meta_description'] ?>">
<?php }} ?>





<?php $this->load->view("includes/header"); ?>


<div class="breadcrumb-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <?php foreach($singleproduct as $single){ ?>
                                        <div class="breadcrumb-container">
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>">Home</a> <span class="bc-separator">|</span>
                                                </li>
                                                <li class="active"><?php echo $single['name'] ?></li>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

<section class="single-product-page-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">

                            <div class="single-product-page-image-gallery " >
                                <!-- product quickview image gallery -->
                                <!--Modal Tab Content Start-->
                            <div class="tab-content product-details-large sale-badge new-badge" id="Div1">
                                        <?php 
                                               
                                                $i=0; 
                                            foreach($varient_value as $list) {
                                                
                                                
                                                $arr=$list['vimage'];
                                                
                                               // echo "<pre>"; print_r($arr);
                                               
                                                    
                                                
                                                
                                            ?>
                                    <div class="tab-pane fade <?php 
                            if($i==0){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="single-slide<?php echo $i ?>" role="tabpanel"
                                        aria-labelledby="single-slide-tab-1">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full sale-badge new-badge">
                                        
                                            
                                            
                                            <img src="<?php echo ADMINASSETS.$arr; ?>" class="img-fluid" alt="">
                                            
                                            
                                                
                                                
                                         
                                            
                                            
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                       <?php 
                                        $i++;   
                                                // echo "<pre>"; print_r($arr);
                                            } ?>

                                </div>

                                <div class="tab-content product-details-large  sale-badge new-badge" id="Div2">
                                       
                                    <div class="tab-pane fade sc show active" id="single-slide" role="tabpanel"
                                        aria-labelledby="single-slide-tab-1">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full sale-badge new-badge">
                                        
                                            
                                            <div id="show_v_img"></div>
                                            
                                            
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                       

                                </div>
                                
                                <div class="single-product-menu">
                                    <div class="nav single-slide-menu" role="tablist">
                                        
                                            <?php 
                                                $i=0; 
                                            foreach($varient_value as $list) {
                                                
                                                    $arr=$list['vimage'];
                                                    
                                               // echo "<pre>"; print_r($arr);
                                                
                                            ?>
                                            <div class="single-tab-menu img-full">
                                            <a data-toggle="tab" onclick="switchVisible1();" id="single-slide-tab-1" href="#single-slide<?php echo $i ?>">
                                                
                                                <img src="<?php echo ADMINASSETS.$arr; ?>"class="img-fluid" alt="">
                                            
                                            </a>
                                            </div>
                                            <?php $i++; } ?>
                                        
                                    </div>
                                </div>
                        </div>



                        
                                
                            
                        
                        </div>
                        <div class="col-lg-7 col-md-5">
                            <!-- product quick view description -->

                            <?php foreach($singleproduct as $list) { ?>
                            <div class="product-options">
                                <h2 class="product-title"><?php echo $list['name']; ?></h2>
                                <!-- <h2 class="product-price"  id="price2" >₹ <?php echo $list['special_price']; ?></h2> -->
                                <h2 class="product-price" >
                                    <span1 id="special_price" >₹ <?php echo $list['special_price']; ?></span1> 
                                    <span id="price"></span>
                                </h2> 
                                
                                <p class="product-description"><?php echo $list['short_description']; ?></p>


                                <div class="social-share-buttons">
                                    <ul>
                                    <!--<ul>href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url() ?>Products/productdetail/<?php echo $list['slug'].'/'.$list['id'] ?>"-->
                                        <li><a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url() ?>Products/productdetail/<?php echo $list['slug'].'/'.$list['id'] ?>"><i class="fa fa-facebook"></i>
                                                Share</a></li>
                                        <!--<li><a class="instagram" href="#!"><i class="fa fa-instagram"></i>-->
                                        <!--        Instagram</a></li>-->
                                        
                                        
                                    </ul>
                                </div>
                                <p class="stock-details" ><span1 id="stock_show"></span1> items <span class="stock-status in-stock">In
                                        Stock</span></p>
                                <form action="<?php echo base_url(); ?>Cart/add_to_cart" method="post">
                                <p class="quantity">Quantity:
                                    <?php $user_id=$this->session->userdata('id');?>
                                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                    <input type="hidden" name="sum_sp" id="final_special_price" >
                                    <input type="hidden" name="sum_p" id="final_price" >
                                    <input type="hidden" name="product_id" value="<?php echo $list['product_id']; ?>">
                                    <span class="pro-qty counter"><input type="text" value="1" class="mr-5" name="qty"></span>

                                </p>
                                <div class="color">
                                    

                                     <?php foreach($varient_value as $colval){ 

                                    if($colval['variant']=='ply'){
                                        $abc='shows';
                                    }else{
                                        $abc='hides';
                                    }
                                }
                                    ?>  

                                    <p class="<?php echo $abc; ?>">Color:</p>


                                    <ul>
                                <?php foreach($varient_value as $colval){ 

                                        if($colval['variant']=='color'){

                                     ?>

                          



                                    <li><input type="radio"  onclick="switchVisible();" class="colors" id="<?php echo $colval['id'] ?>" value="<?php echo $colval['variant_text'] ?>" data-color="<?php echo $colval['id'] ?>" name="colors" checked > <label for="<?php echo $colval['id'] ?>"><?php echo $colval['variant_text'] ?></label></li>
                                <?php } } ?>
                                    </ul> 

                                    
                                </div>


                                <div class="color">

                                     <?php foreach($varient_value as $colval){ 

                                    if($colval['variant']=='ply'){
                                        $abc='shows';
                                    }else{
                                        $abc='hides';
                                    }
                                }
                                    ?>    

                                    <p class="<?php echo $abc ?>">Ply Thickness:</p>

                                 
                                    
                                    

                                    <ul>
                                       <?php 
                                        foreach($varient_value as $colval){ 

                                        if($colval['variant']=='ply'){
                                     ?>
                                      

                                        <li><input type="radio" class="plys" onclick="switchVisible();" id="<?php echo $colval['id'] ?>" value="<?php echo $colval['variant_text'] ?>" data-ply="<?php echo $colval['id'] ?>" name="plys" checked> <label for="<?php echo $colval['id'] ?>"><?php echo $colval['variant_text'] ?></label></li>
                            <?php }} ?>
                                    </ul>   
                                </div>
                            

                                <div style="display:flex;">
                                    <?php
                                    $username=$this->session->userdata('user');
                                    $pid=0;
                                    if($username!=NULL){
                                    foreach($usercart as $cart){ $pid=$cart['product_id']; }
                                        if($pid!=$list['id']){
                                    ?>
                                    <button type="submit" name="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </form>
                                    <?php } else { ?>
                                    <a href="<?php echo base_url(); ?>Cart/remove_cart/<?php echo $list['id']; ?>" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Remove cart</a>
                                    <?php } } else{ ?>
                                    <a href="<?php echo base_url(); ?>Login_Register" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    <?php } ?>

                                    <form action="<?php echo base_url(); ?>Wishlist/add_to_wishlist" method="post">
                                    <?php
                                    $username=$this->session->userdata('user');
                                    $proid=0;
                                    $abc=explode(" ",$username);
                                    if($username!=NULL){ 
                                    foreach($userwishlist as $wish){ $proid = $wish['product_id']; }
                                    if($proid!=$list['id']){
                                    ?>
                                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                    <input type="hidden" name="product_id" value="<?php echo $list['id']; ?>">
                                    <button type="submit" name="submit" class="wishlist_btn"><i class="fa fa-heart-o"></i> Add to wishlist</button>
                                    </form>
                                    <?php } else { ?>
                                        <a href="<?php echo base_url(); ?>Wishlist/remove_wishlist/<?php echo $list['id']; ?>" class="wishlist_btn"><i class="fa fa-heart-o"></i> Remove from wishlist</a>
                                    <?php } }else{ ?>
                                    <a href="<?php echo base_url(); ?>Login_Register"><button type="submit" name="submit" class="wishlist_btn"><i class="fa fa-heart-o"></i> Add to wishlist</button></a>
                                    <?php } ?>
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- end ofproduct quick view description --> 
                        <?php } ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-description-tab-container section-padding">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#more-info"
                                            role="tab" aria-selected="true">MORE
                                            INFO</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" 
                                        href="#reviews"
                                            role="tab" aria-selected="false">REVIEWS</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="more-info" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <?php foreach($singleproduct as $list) { ?>
                                            <?php echo $list['description']; ?>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div class="product-ratting-wrap">
                                           <!--  <div class="pro-avg-ratting">
                                                <h4>4.5 <span>(Overall)</span></h4>
                                                <span>Based on 9 Comments</span>
                                            </div> -->
                                            <?php if(!empty($reviews)){ ?>
                                            <div class="rattings-wrapper">
                                            <?php foreach($reviews as $rev){ ?>
                                                <?php 
                                                $r1=0;
                                                $r2=0;
                                                $r3=0;
                                                $r4=0;
                                                $r5=0;
                                                
                                                
                                                 if($rev['rating']=="1"){  $r1="active"; }
                                                 if($rev['rating']=="2"){  $r1="active"; $r2="active";  }
                                                 if($rev['rating']=="3"){  $r1="active"; $r2="active";  $r3="active"; }
                                                 if($rev['rating']=="4"){  $r1="active";  $r2="active";  $r3="active";  $r4="active";   }
                                                 if($rev['rating']=="5"){  $r1="active";  $r2="active";  $r3="active";  $r4="active"; $r5="active";   }
                                                 ?>
                                                <div class="sin-rattings">
                                                    <div class="ratting-author">
                                                        <h3><?php  echo $username=$this->session->userdata('user'); ?></h3>
                                                        <div class="ratting-star">
                                                            <span class="<?php echo $r1 ?>"><i class="fa fa-star"></i></span>
                                                            <span class="<?php echo $r2 ?>"><i class="fa fa-star"></i></span>
                                                            <span class="<?php echo $r3 ?>"><i class="fa fa-star"></i></span>
                                                            <span class="<?php echo $r4 ?>"><i class="fa fa-star"></i></span>
                                                            <span class="<?php echo $r5 ?>"><i class="fa fa-star"></i></span>
                                                            <span>(<?php echo $rev['rating'] ?>)</span>
                                                        </div>
                                                    </div>
                                                    <p><?php echo $rev['comment'] ?></p>
                                                </div>
                                            <?php } ?>


                                        

                                            </div>
                                        <?php } ?>

                                            <?php if(!empty($username)){
                                                $order_details=$this->Order_model->getOrderforReview();

                                                foreach($order_details as $od){
                                                    $od['product_id'];
                                                    $od['status'];

                                                    if(($list['product_id'])==($od['product_id']) && ($od['status'])=='Delivered'){
                                                
                                                ?>
                                            <div class="ratting-form-wrapper fix">
                                                <h3>Add your Comments</h3>
                                                <form method="post" action="<?php echo base_url() ?>Products/add_review">
                                                    <div class="ratting-form row">
                                                        <div class="col-12 mb-15">
                                                            <h5>Rating:</h5>
                                                            <input type="hidden" name="p_id" value="<?php echo $list['product_id']; ?>" >
                                                            <div id="full-stars-example-two">
                                                                <div class="rating-group">
                                                                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                                                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                                                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                                                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                                                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                                                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col-12 mb-15">
                                                            <label for="your-review">Your Review:</label>
                                                            <textarea name="review" id="your-review"
                                                                placeholder="Write a review"></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <input value="add review" type="submit">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        <?php }}} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- related horizontal product slider -->
                    <?php if($relatedproducts >0){ ?>
                    <div class="horizontal-product-slider">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="block-title">
                                    <h2><a href="#">RELATED PRODUCTS</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- horizontal product slider container -->
                                <div class="horizontal-product-list">
                                    <!-- single product -->
                                    <?php foreach($relatedproducts as $related){ ?>
                                    <div class="single-product">
                                        <div class="single-product-content single-related-product-content">
                                            <div class="product-image">
                                                <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $related['slug']; ?>/<?php echo $related['category_id']; ?>">
                                                    <img src="<?php echo ADMINASSETS.$related['image'] ?>" class="img-fluid" alt="">
                                                    <img src="<?php echo ADMINASSETS.$related['image'] ?>" class="img-fluid" alt="">
                                                </a>
                                                <div class="image-btn">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <h5 class="product-name"><a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $related['slug']; ?>/<?php echo $related['category_id']; ?>"><?php echo $related['name'] ?></a></h5>
                                            <div class="price-box">
                                                <h4>₹ <?php echo $related['special_price'] ?></h4>
                                            </div>

                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $related['slug']; ?>/<?php echo $related['category_id']; ?>" class="add-to-cart-btn">View details</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- end of single product -->
                                </div>
                                <!-- end of horizontal product slider container -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- end of related horizontal product slider -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- ======  Single product sidebar  ====== -->

                    <div class="single-product-page-sidebar">
                        <!-- vertical auto slider container -->
                        <div class="sidebar">
                            <h2 class="block-title">BESTSELLER</h2>
                            <div class="vertical-product-slider-container mb-50">

                                <div class="single-vertical-slider">

                                    <div class="vertical-auto-slider-product-list">
                                        <!-- single vertical product -->
                                        <?php
                                        if($bestseller>0){
                                        foreach($bestseller as $best){ ?>
                                        <div class="single-auto-vertical-product d-flex">
                                            <div class="product-image">
                                                <a href="single-product-variable.html"><img
                                                        src="<?php echo ADMINASSETS.$best['image'] ?>" class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="product-description">
                                                <h5 class="product-name"><a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $best['slug']; ?>/<?php echo $best['category_id']; ?>"><?php echo $best['name'] ?></a></h5>
                                                <div class="price-box">
                                                    <h4>₹ <?php echo $best['special_price'] ?></h4>
                                                </div>

                                            </div>
                                        </div>
                                        <?php } }?>
                                        <!-- end of single vertical product -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                         <div class="sidebar">
                                            <div class="homepage-sidebar-banner-container mt-40 mb-40">
                                                <!--<a href="shop-left-sidebar.html">-->
                                                    <img width="269" height="389" src="<?php echo ASSETS; ?>assets/images/banners/banner-left.jpg" class="img-fluid" alt="">
                                                <!--</a>-->
                                            </div>
                                        </div>
                        <!-- end of vertical auto slider container -->
                    </div>

                    <!-- ====  End of Single product sidebar  ==== -->

                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view("includes/footer"); ?>

    <?php $this->load->view("includes/script"); ?>
    
     <script>
            function switchVisible() {
                       
            
            document.getElementById('Div2').style.display = 'block';
                                        document.getElementById('Div1').style.display = 'none';             
                                // if (document.getElementById('Div2').style.display == 'block') {
                                        
                                // }else{
                                //     document.getElementById('Div1').style.display = 'block';
                                //     document.getElementById('Div2').style.display = 'none';
                                // }
            
            }
            
            function switchVisible1() {
            
                                document.getElementById('Div2').style.display = 'none';
                                document.getElementById('Div1').style.display = 'block';
            
            
                        // if (document.getElementById('Div2')) {
            
                        //     if (document.getElementById('Div2').style.display == 'block') {
                        //         document.getElementById('Div2').style.display = 'none';
                        //         document.getElementById('Div1').style.display = 'block';
                        //     }
                        //     else {
                        //         document.getElementById('Div2').style.display = 'block';
                        //         document.getElementById('Div1').style.display = 'none';
                        //     }
                        // }
            }
</script>
    </body>

</html>