

    <!-- Favicon -->
     <link rel="icon" href="<?php echo ADMINASSETS.$web_settings['web_logo']; ?>"> 

    <!-- ************************* CSS ************************* -->
    <!-- Bootstrap CSS -->
    <link href="<?php echo ASSETS; ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="<?php echo ASSETS; ?>assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- IcoFont CSS -->
    <link href="<?php echo ASSETS; ?>assets/css/icon-font.min.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="<?php echo ASSETS; ?>assets/css/plugins.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?php echo ASSETS; ?>assets/css/main.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="<?php echo ASSETS; ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="https://kit.fontawesome.com/f994287557.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
         var Settings = {
                base_url: '<?php echo base_url() ?>',
            }
         </script>

    <?php if($this->session->flashdata('success')){ ?>
        <div class="alert hide" >
          <span class="fas fa-exclamation-circle"></span>
          <span class="msg"><?php echo $this->session->flashdata('success'); ?></span>
          <div class="close-btn">
            <span class="fas fa-times"></span>
          </div>
        </div>        
    <?php } ?>

</head>

<body class="full-width">

    <!--=============================
    =            Header             =
    ==============================-->

    <header>
        <!-- header top nav -->
        <div class="header-top-nav">
            <div class="container">
                <div class="row">
                    <!--<div class="col-lg-3 offset-lg-3 col-md-6 col-sm-12">-->
                        <!-- language and currency changer -->
                        <!-- end of language and currency changer -->
                    <!--</div>-->


                    <div class="col-md-12 col-sm-12">
                        <!-- user information menu -->
                        <div class="user-information-menu">
                            <ul>
                                <?php $username=$this->session->userdata('user');
                                    $abc=explode(" ",$username);
                                    if($username!=NULL){
                                    ?>
                                <li><a href="<?php echo base_url() ?>My_Account">Welcome <?php echo $abc[0]; ?></a> <span class="separator">|</span></li>
                                <li><a href="<?php echo base_url() ?>My_Orders">My Orders</a> <span class="separator">|</span></li>
                                <?php } else{ ?>
                                <li></li>
                                <?php } ?>
                                <li><a href="<?php echo base_url(); ?>Wishlist">My Wishlist</a> <span class="separator">|</span></li>
                                
                                <?php $username=$this->session->userdata('user');
                                    $abc=explode(" ",$username);
                                    if($username!=NULL){
                                    ?>
                                <li><a href="<?php echo base_url(); ?>Login_Register/logout">Logout</a></li>
                                <?php } else{ ?>
                                <li><a href="<?php echo base_url(); ?>Login_Register">Sign In</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- end of user information menu -->
                    </div>

                </div>
            </div>
        </div>
        <!-- end of header top nav -->

        <!-- header content -->
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 offset-lg-0 text-md-left text-sm-center">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>Home"><img src="<?php echo ADMINASSETS.$web_settings['web_logo']; ?>" class="img-fluid" alt="logo"></a>
                        </div>
                        <!-- end of logo -->
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <!-- header search bar -->
                        <div class="header-search-bar">
                            <div class="input-group">
                                <!--<select name="categoryName" id="categoryName">-->
                                <!--    <option value="">Categories</option>-->
                                <!--   >-->
                                <!--</select>-->
                               <div class="input-group-append">
                                    <input type="search" id="search_text" name="search" onclick="shareVis()" class="sharebtn" autocomplete="off">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    
                                    <div id="mySharedown" class="dropdown-content">
   
                                    <div id="result"></div>
                                    
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end of header search bar -->
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <!-- shopping cart -->
                        <div class="shopping-cart float-lg-right d-flex justify-content-start" id="shopping-cart">
                            
                            <div class="cart-content">
                                
                                
                                <div class="iconss"><a href="<?php echo base_url(); ?>Wishlist"><i class="fas fa-heart"></i></a>
                                    <?php if(!empty($this->session->userdata('id'))){ ?>
                                    <span><?php echo count($wishlistcount) ?></span>
                                <?php }else{?>
                                    <span>0</span>
                                <?php } ?>
                                </div>
                        
                            </div>

                            <div class="cart-content">
                                
                                <div class="iconss"><a href="<?php echo base_url(); ?>Cart"><i class="fas fa-shopping-basket"></i></a>
                                    <?php if($this->session->userdata('id')>0){ ?>
                                    <span><?php echo count($usercart) ?></span>
                                    <?php }else{?>
                                    <span>0</span>
                                <?php } ?>
                                </div>
                            <?php if ($user_cart_count>0) { ?>
                                <span><?php echo $user_cart_count ?></span>
                            </div>

                            <div class="cart-floating-box" id="cart-floating-box">
                                <div class="cart-items">
                                    
                                    <?php 
                                    $total=0;
                                    // echo "<pre>"; print_r($user_cart_product);
                                    foreach($user_cart_product as $cart){ 
                                     $sub_total=$cart['sum_sp']*$cart['qty'];
                                     $total+=$sub_total;
                                     
                                     
                                     
                                     ?>
                                    <div class="cart-float-single-item d-flex">
                                        <span class="remove-item"><a href="<?php echo base_url(); ?>Cart/remove_cart/<?php echo $cart['product_id']; ?>"><i class="fa fa-trash"></i></a></span>
                                        <div class="cart-float-single-item-image">
                                            <img src="<?php echo ADMINASSETS.$cart['image'] ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="cart-float-single-item-desc">
                                            <p class="product-title"><span class="count"><?php echo $cart['qty'] ?> Qty</span> <a
                                                    href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cart['slug']; ?>"></a></p>
                                            <p class="size"> <a href="<?php echo base_url(); ?>Products/productdetail/<?php echo $cart['slug']; ?>/<?php echo $cart['category_id']; ?>"><?php echo $cart['name'] ?></a></p>
                                            <p class="price">₹ <?php echo $cart['sum_sp'] ?></p>
                                        </div>
                                    </div>
                                <?php  } ?>
                                
                                </div>
                                <div class="cart-calculation d-flex">
                                    <div class="calculation-details">
                                        
                                        <p class="total">Total <span>₹ <?php echo $total; ?></span></p>
                                    </div>
                                    <div class="checkout-button">
                                        <a href="<?php echo base_url() ?>Checkout">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            <!-- end of shopping cart -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of header content -->
        <!-- header navigation menu -->
        <nav class="header-navigation black-bg">
            <div class="container px-0">
                <div class="navigation-container mb-0">
                    <div class="row">
                        <!--<div class="col-lg-3 d-none d-lg-block">-->
                            <!-- ======  Header menu left text  ====== -->
                            <!--<p class="call-us-text">Call us 24/7: (+66) 123-456-789</p>-->
                        <!--</div>-->
                        <div class="col-lg-12 col-md-12">

                            <!-- Header navigation right side-->

                            <!-- main menu start -->
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>Home">Home</a>
                                        </li>

                                        <li><a href="<?php echo base_url(); ?>Common/about">About Us</a></li>
                                        
                                        
                                        
                                        <?php 
                                        
                                        foreach($categories as $row){
                                            
                                            $sub=$this->Category_model->getSubCategories($row['id']);
                                            $submenu=$this->Category_model->getsubmenuCategories($row['id']);
                                            
                                            $url=(!empty($sub)) ? base_url().'Products/view/'.$row['slug']:'';
                                           
                                        ?>
                                        
                                        <li class="menu-item-has-children"><a href="<?php echo $url ?>"><?php echo $row['name'] ?></a>
                                            <?php 
                                                foreach($submenu as $row3){
                                             if($row3['parent_id']==$row['id']){ ?>
                                            <ul class="sub-menu">
                                                <?php foreach($sub as $row2){
                                                    if($row2['parent_id']==$row['id']){
                                                ?>
												<li><a href="<?php echo base_url(); ?>Products/view/<?php echo $row2['slug']; ?>"><?php echo $row2['name'] ?></a></li>
												<?php } } ?>
											</ul>
									        <?php }} ?>
                                        </li>
                                        
                                        <?php  }  ?>
                                        
                                    
                                    
                                    <li class="menu-item-has-children"><a href="<?php echo base_url(); ?>Blog">Blogs</a>
                                    <?php  if(!empty($blogcategories)){ ?>
                                        <ul class="sub-menu">
                                        <?php foreach($blogcategories as $blogcat){ ?>
                                            <li><a href="<?php echo base_url(); ?>Blog/blog_list/<?php echo $blogcat['id']; ?>"><?php echo $blogcat['name'] ?></a></li>
                                        <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </li>
                                        

                                    <li><a href="<?php echo base_url() ?>Common/contact">Contact</a></li>



                                       
                                    </ul>
                                </nav>

                                <!-- Mobile Menu -->
                                <div class="mobile-menu order-12 d-block col d-lg-none"></div>

                            </div>

                            <!-- end of Header navigation right side-->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end of header navigation menu -->

    </header>
    
    
     <?php if($this->session->flashdata('error')){ ?>
                            <div class="alert alert-error hide" role="alert">
                                <button type="button" class="close close-btn" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 <span class="fas fa-exclamation-circle"></span>
                              <span class="msg"><?php echo $this->session->flashdata('error'); ?></span>
                                
                            </div>
                            
                        <?php } ?>

                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success hide" role="alert">
                                <button type="button" class="close close-btn" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 <span class="fas fa-check-circle"></span>
                              <span class="msg"><?php echo $this->session->flashdata('success'); ?></span>
                                
                            </div>
                             
                        <?php } ?>
    
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>