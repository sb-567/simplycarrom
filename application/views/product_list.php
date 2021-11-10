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
                                                <li class="active"><?php echo $categoryslug['name'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<section class="shop-content mt-40 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shoppage-sidebar">
                        <!-- category list -->
                        <!-- Header Category -->
                        <div class="hero-side-category shop-side-category">

                             <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle">All Categories <i class="ti-menu"></i></button>
                        </div>

                       

                        <!-- Category Menu -->
                        <nav class="category-menu">
                             <ul>
                                 <?php 
                                        
                                        
                                        
                                        foreach($categories as $row){
                                            
                                            $sub=$this->Category_model->getSubCategories($row['id']);
                                            $submenu=$this->Category_model->getsubmenuCategories($row['id']);
                                            
                                        ?>
                                        

                                  <li class="menu-item-has-children"><a href="#!"><?php echo $row['name']; ?></a>

                                    
                                   
                                    
                                    <?php 
                                                foreach($submenu as $row3){
                                             if($row3['parent_id']==$row['id']){ ?>
                                            <ul class="category-mega-menu">
                                                <?php foreach($sub as $row2){
                                                    if($row2['parent_id']==$row['id']){
                                                ?>
												<li><a href="<?php echo base_url(); ?>Products/view/<?php echo $row2['slug']; ?>"><?php echo $row2['name'] ?></a></li>
												<?php } } ?>
											</ul>
									        <?php } } ?>
                                
                                 </li>
                                        
                                        <?php  }  ?>



                                    
                            </ul>
                        </nav>
                            <!-- end of Category menu -->
                        </div>
                        <!-- End of Header Category -->
                        <!-- end of category list -->



                    </div>
                </div>
                <div class="col-lg-9 col-md-12 order-1 order-lg-2">
                    <div class="shop-page-container">
                        <div class="shop-page-header">
                            <div class="row">
                                
                                <div class="col-lg-6 col-sm-12 d-flex justify-content-start align-items-center">
                                    <!-- Product view mode -->
                                    <h2><?php echo $categoryslug['name'] ?></h2>
                                </div>
                                <div
                                    class="col-lg-6 col-sm-12 d-flex flex-column flex-sm-row justify-content-lg-end justify-content-start">
                                    <!-- Product Showing -->
                                    
                                    
                                    <!-- Product Short -->
                                    <!--<div class="product-sort">-->
                                    <!--    <p>Sort by-->
                                    <!--        <select class="sortby" name="sortby" id="sortby">-->
                                    <!--            <option >Sort By</option>-->
                                    <!--            <option value="<?php echo $min_price[0]['special_price'] ?>">Price: low to high</option>-->
                                    <!--            <option value="<?php echo $max_price[0]['special_price'] ?>">Price: high to low</option>-->
                                    <!--        </select>-->
                                    <!--    </p>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>


                        <div class="shop-product-wrap grid row">
                            <?php if(!empty($submenuproduct)){ 
                                
                                foreach($submenuproduct as $sm){
                                    
                                    		$productbycategory = $this->Product_model->getSubCategoryProducts($sm['id']);
                                
                                if(!empty($productbycategory)){
                                foreach($productbycategory as $pbcat){
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6 pb-30 pt-10">
                                <!-- product start -->
                                <div class="single-product shop-page-product single-grid-product new-badge sale-badge">
                                    <div class="single-product-content">
                                        <div class="product-image">
                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $pbcat['slug']; ?>/<?php echo $pbcat['category_id']; ?>">
                                                <img src="<?php echo ADMINASSETS.$pbcat['image'] ?>" class="img-fluid" alt="">
                                                <img src="<?php echo ADMINASSETS.$pbcat['image'] ?>" class="img-fluid" alt="">
                                            </a>
                                            
                                        </div>
                                        <h5 class="product-name"><a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $pbcat['slug']; ?>/<?php echo $pbcat['category_id']; ?>"><?php echo $pbcat['name'] ?></a></h5>
                                        
                                        
                                        <div class="price-box">
                                            <h4>₹ <?php echo $pbcat['special_price'] ?></h4>
                                        </div>

                                        <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $pbcat['slug']; ?>/<?php echo $pbcat['category_id']; ?>" class="add-to-cart-btn"> View Details</a>

                                        
                                    </div>
                                </div>
                                <!-- product end -->
                            </div>
                            <?php } }else{ ?>
                            
                            <h1>Product Not Available</h1>
                            <?php  } } }else{ ?>
                            
                            
                        	<?php 
                        	    if(!empty($subcategoryproducts)){
                                    // echo "<pre>"; print_r($subcategoryproducts);
                        	foreach($subcategoryproducts as $list) { ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6 pb-30 pt-10">
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
                            <?php } }else{?>
                                <h1> Product Not Available  </h1>
                            <?php } } ?>
                        
                        </div>

                        <!-- product pagination -->

                        <div class="shop-page-pagination-section d-flex justify-content-between align-items-center">
                          


                        </div>


                        <!-- end of product pagination -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>