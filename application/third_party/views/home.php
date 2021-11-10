<?php $this->load->view("includes/header_top"); ?>
<title><?php echo $web_settings['site_title']; ?></title>
<?php $this->load->view("includes/header"); ?>


    <!-- Slider area -->
    <section class="hero-slider-container">
        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one mb-20">
            <!-- Hero Item Start -->
            <?php 
            // echo "<pre>"; print_r($slide);
            foreach($slide as $img){
                if($img['show_on_home']==0){
            ?>
            <div class="hero-item" style="background-image: url('<?php echo ADMINASSETS.$img['image']?>');">
            
            </div><!-- Hero Item End -->
        <?php } } ?>
        </div><!-- Hero Slider End -->
    </section>

    <section class="featured-service-container mb-20">
        <div class="container">
            <div class="row">
                 <?php 
                 $firstThreeElements = array_slice($categories, 0, 3);
                        foreach($firstThreeElements as $row){
                                            
                                            $sub=$this->Category_model->getSubCategories($row['id']);
                                            $submenu=$this->Category_model->getsubmenuCategories($row['id']);
                                            
                                            $url=(!empty($sub)) ? base_url().'Products/view/'.$row['slug']:'';
                                            
                                        ?>
                <div class="col-lg-4 col-md-6 col-4">
                     
                    <div class="single-featured-service ">
                        <img src="<?php echo ADMINASSETS ?><?php echo $row['image'] ?>" class="img-fluid" >
                        <div class="single-featured-service-content">
                            <h3><?php echo $row['name'] ?></h3>
                            
                            <a href="<?php echo $url ?>">View Collection</a>
                        </div>
                    </div>
                     
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
     
    <div class="homepage-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <!-- Header category list -->
                    <div class="hero-side-category">

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
									        <?php }} ?>
                                
                                 </li>
                                        
                                        <?php  }  ?>



                                    
                            </ul>
                        </nav>
                    </div>
                    <!-- end of Header category list -->
                </div>
                <div class="col-lg-9 col-lg-">
                    <!-- homepage horizontal tab slider -->
                    <div class="horizontal-tab-section">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php if($latestproducts>0){ ?>
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#new-arrival" role="tab" aria-selected="true">NEW ARRIVALS</a>
                                    <?php } ?>
                                    <?php if($bestseller>0){ ?>
                                <a class="nav-item nav-link <?php 
                            if(empty($latestproducts)){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="nav-profile-tab" data-toggle="tab" href="#best-seller"
                                    role="tab" aria-selected="false">BEST SELLER</a>
                                    <?php } ?>
                                    <?php if($onsale>0){ ?>
                                <a class="nav-item nav-link <?php 
                            if(empty($bestseller)){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="nav-profile-tab" data-toggle="tab" href="#on-sale"
                                    role="tab" aria-selected="false">ON SALE</a>
                                    <?php } ?>
                                    <?php if($featured>0){ ?>
                                <a class="nav-item nav-link <?php 
                            if(empty($featured)){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="nav-contact-tab" data-toggle="tab"
                                    href="#featured-product" role="tab" aria-selected="false">FEATURED PRODUCT</a>
                                    <?php } ?>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <?php if($latestproducts>0){ ?>
                            <div class="tab-pane fade show active" id="new-arrival" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <?php
                                                // echo "<pre>"; print_r($prices);
                                                if($latestproducts>0){
                                                foreach($latestproducts as $latest){
                                                    $lprices = $this->Product_model->getPrice($latest['id']);
                                                    // echo "<pre>"; print_r($lprices);
                                                    // foreach($lprices as $lp){
                                                    //     echo $lp['special_price'];
                                                    // }
                                                    
                                                ?>
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $latest['slug']; ?>/<?php echo $latest['category_id']; ?>">
                                                                <img src="<?php echo ADMINASSETS.$latest['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                                <img src="<?php echo ADMINASSETS.$latest['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="<?php echo base_url(); ?>Products/productdetail/<?php echo $latest['slug']; ?>/<?php echo $latest['category_id']; ?>"><?php echo $latest['name'] ?></a></h5>
                                                        <div class="price-box">
                                                            <h4>₹ <?php echo $latest['special_price'] ?></h4>
                                                        </div>

                                                        <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $latest['slug']; ?>/<?php echo $latest['category_id']; ?>" class="add-to-cart-btn"> View Details</a>
                                                    </div>
                                                </div>
                                                <?php } } ?>
                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                        <?php } ?>
                            
                            <div class="tab-pane fade show <?php 
                            if(empty($latestproducts)){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="best-seller" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <?php
                                                if($bestseller>0){
                                                foreach($bestseller as $best){
                                                    
                                                ?>
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $best['slug']; ?>/<?php echo $best['category_id']; ?>">
                                                                <img src="<?php echo ADMINASSETS.$best['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                                <img src="<?php echo ADMINASSETS.$best['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="<?php echo base_url(); ?>Products/productdetail/<?php echo $best['slug']; ?>/<?php echo $best['category_id']; ?>"><?php echo $best['name'] ?></a></h5>
                                                        <div class="price-box">
                                                            <h4>₹ <?php echo $best['special_price'] ?></h4>
                                                        </div>

                                                        <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $best['slug']; ?>/<?php echo $best['category_id']; ?>" class="add-to-cart-btn">View Details</a>
                                                    </div>
                                                </div>
                                                <?php } } ?>
                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                            
                            <div class="tab-pane fade show <?php 
                            if(empty($bestseller)){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="on-sale" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <?php
                                                if($onsale>0){
                                                foreach($onsale as $sale){ ?>
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $sale['slug']; ?>/<?php echo $sale['category_id']; ?>">
                                                                <img src="<?php echo ADMINASSETS.$sale['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                                <img src="<?php echo ADMINASSETS.$sale['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="<?php echo base_url(); ?>Products/productdetail/<?php echo $sale['slug']; ?>/<?php echo $sale['category_id']; ?>"><?php echo $sale['name'] ?></a></h5>
                                                        <div class="price-box">
                                                            <h4>₹ <?php echo $sale['special_price'] ?></h4>
                                                        </div>

                                                        <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $sale['slug']; ?>/<?php echo $sale['category_id']; ?>" class="add-to-cart-btn">View Details</a>
                                                    </div>
                                                </div>
                                                <?php } } ?>
                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                            
                            <div class="tab-pane fade show <?php 
                            if(empty($onsale)){
                              echo "show active";  
                            }
                            else{
                                echo "";
                            } ?>" id="featured-product" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider section-padding pb-0">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <?php
                                                if($featured>0){
                                                foreach($featured as $feat){ ?>
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $feat['slug']; ?>/<?php echo $feat['category_id']; ?>">
                                                                <img src="<?php echo ADMINASSETS.$feat['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                                <img src="<?php echo ADMINASSETS.$feat['image'] ?>"
                                                                    class="img-fluid" alt="">
                                                            </a>
                                                            <div class="image-btn">
                                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <h5 class="product-name"><a
                                                                href="<?php echo base_url(); ?>Products/productdetail/<?php echo $feat['slug']; ?>/<?php echo $feat['category_id']; ?>"><?php echo $feat['name'] ?></a></h5>
                                                        <div class="price-box">
                                                            <h4>₹ <?php echo $feat['special_price'] ?></h4>
                                                        </div>

                                                        <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $feat['slug']; ?>/<?php echo $feat['category_id']; ?>" class="add-to-cart-btn">View Details</a>
                                                    </div>
                                                </div>
                                                <?php } } ?>
                                            </div>

                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                            </div>
                        </div>
                    </div>
                    <!-- End of homepage horizontal tab slider -->

                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="homepage-sidebar">


                        <!-- vertical auto slider container -->
                        <?php if($bestseller>0){ ?>
                        <div class="sidebar">
                            <h2 class="block-title">BESTSELLER</h2>
                            <div class="vertical-product-slider-container">

                                <div class="single-vertical-slider">

                                    <div class="vertical-auto-slider-product-list">
                                        <!-- single vertical product -->
                                        <?php
                                        
                                        foreach($bestseller as $best){ ?>
                                        <div class="single-auto-vertical-product d-flex">
                                            <div class="product-image">
                                                <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $best['slug']; ?>/<?php echo $best['category_id']; ?>"><img
                                                        src="<?php echo ADMINASSETS.$best['image'] ?>" class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="product-description">
                                                <h5 class="product-name"><a
                                                        href="<?php echo base_url(); ?>Products/productdetail/<?php echo $best['slug']; ?>/<?php echo $best['category_id']; ?>"><?php echo $best['name'] ?></a></h5>
                                                <div class="price-box">
                                                    <h4>₹ <?php echo $best['special_price'] ?></h4>
                                                </div>

                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- end of vertical auto slider container -->

                        <div class="sidebar">
                            <div class="homepage-sidebar-banner-container mt-40 mb-40">
                                
                                <?php foreach($slide as $sd){
                                    if(($sd['slider']=='vertical slider') && $sd['show_on_home']==1){
                                ?>
                                <!--<a href="shop-left-sidebar.html">-->
                                    <img width="269" height="389" src="<?php echo ADMINASSETS.$sd['image']; ?>" class="img-fluid" alt="">
                                <!--</a>-->
                                
                                <?php } } ?>
                            </div>
                        </div>


                    </div>
                </div>
                
                <div class="col-lg-9 col-md-8">
                    <div class="homepage-main-content">
                        <!-- horizontal product slider -->
                        <div class="homepage-banners mb-50">
                        <div class="row">
                            <?php 
                                $firsttwoslide = array_slice($slide, 0, 2);
                                // echo "<pre>"; print_r($firsttwoslide);
                                foreach($slide as $s){ 
                                    
                                if(($s['slider']=='home slider') && ($s['show_on_home']==1)){
                                    
                                   
                                ?>
                            <div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
                                <!-- ======  Homepage single split banner  ======= -->
                                
                                <div class="single-banner-container">
                                    
                                        <img width="423" height="158" src="<?php echo ADMINASSETS ?><?php echo $s['image'] ?>" class="img-fluid" alt="">
                                    
                                </div>
                                
                                

                                <!-- ====  End of Homepage single split banner  ==== -->

                            </div>
                            <?php } } ?>
                        

                        </div>
                    </div>
                    
                        <div class="horizontal-product-slider">
                            
                            <?php foreach($home_category as $home){
                            
                            $catwise = $this->Product_model->getHomeCategorieswithdetails($home['id']);
                            ?>
                            <!--<?php echo "<pre>"; print_r($lprices); ?>-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Block title -->
                                    <div class="block-title">
                                        <h2><a href="#"><?php echo $home['name']; ?></a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- horizontal product slider container -->
                                    <div class="horizontal-product-list">
                                        
                                        <?php foreach($catwise as $cat){ ?>
                                        <!-- single product -->
                                        <div class="single-product">
                                            <div class="single-product-content">
                                                <div class="product-image">
                                                    <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cat['slug']; ?>/<?php echo $cat['category_id']; ?>">
                                                        <img src="<?php echo ADMINASSETS.$cat['image'] ?>" class="img-fluid"
                                                            alt="">
                                                        <img src="<?php echo ADMINASSETS.$cat['image'] ?>" class="img-fluid"
                                                            alt="">
                                                    </a>
                                                    <div class="image-btn">
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <h5 class="product-name"><a
                                                        href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cat['slug']; ?>/<?php echo $cat['category_id']; ?>"><?php echo $cat['name'] ?></a></h5>
                                                <div class="price-box">
                                                    <h4>₹ <?php echo $cat['special_price'] ?></h4>
                                                </div>

                                                <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cat['slug']; ?>/<?php echo $cat['category_id']; ?>" class="add-to-cart-btn"> View Details</a>
                                            </div>
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
                                    <!-- end of horizontal product slider container -->
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <!-- end of horizontal product slider -->
                    </div>
                </div>
                
            </div>

            <!-- latest product section -->
            <?php if(!empty($latestproducts)){ ?>
            <div class="latest-product-section mb-50">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Block title -->
                        <div class="block-title">
                            <h2>LATEST PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($latestproducts as $latest){ ?>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <!-- single latest product -->
                        <div class="single-latest-product">
                            <div class="product-image">
                                <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $latest['slug']; ?>/<?php echo $latest['category_id']; ?>">
                                    <img src="<?php echo ADMINASSETS.$latest['image'] ?>" class="img-fluid" alt="">
                                    <img src="<?php echo ADMINASSETS.$latest['image'] ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="product-description">
                                <h5 class="product-name"><a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $latest['slug']; ?>/<?php echo $latest['category_id']; ?>"><?php echo $latest['name'] ?></a></h5>
                                <div class="price-box">
                                    <h4>₹ <?php echo $latest['special_price'] ?></h4>
                                </div>
                            </div>

                            <div class="latest-product-hover-content">
                              
                                <p>
                                     <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $latest['slug']; ?>/<?php echo $latest['category_id']; ?>">View Details</a>
                                </p>
                            </div>
                        </div>
                        <!-- end of single latest product -->
                    </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
            <!-- end of latest product section -->
        </div>
    </div>

    

        <?php $this->load->view("includes/footer"); ?>
        <?php $this->load->view("includes/script"); ?>

        </body>

    </html>