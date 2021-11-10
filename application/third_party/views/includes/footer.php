<section class="newsletter-section">
        <div class="">
            <div class="newsletter-container dark-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">

                            <!-- ======  Newsletter input box  ======= -->

                            <div class="newsletter-wrapper d-md-flex">
                                <!-- newsletter text -->
                                <div class="newsletter-text">
                                    <h2>newsletter <span>Sign up for our newsletter</span></h2>
                                </div>
                                <!-- end of newsletter text -->

                                <!-- newsletter input -->
                                <div class="newsletter-input">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <form id="mc-form" class="mc-form subscribe-form">
                                                <input type="email" id="mc-email" type="email" autocomplete="off"
                                                    placeholder="Enter your e-mail" required>
                                                <button id="mc-submit" type="submit">Subscribe</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                                <!-- end of newsletter input -->
                            </div>

                            <!-- ====  End of Newsletter input box  ==== -->

                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <!-- ======  Social icon list  ======= -->

                            <div class="social-icons text-right mt-5">
                                <ul>
                                    <li><a class="facebook-link" href="http://www.facebook.com/"><i
                                                class="fa fa-facebook"></i></a>
                                        <span class="popup">facebook</span>
                                    </li>
                                    <li><a class="instagram-link" href="http://instagram.com/"><i class="fa fa-instagram"></i></a>
                                        <span class="popup">Instagram</span>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- ====  End of Social icon list  ==== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <!-- footer navigation -->
            <div class="footer-navigation section-padding">
                <div class="row">
                    <div class="col-md-3">
                        <!-- footer description -->
                        <div class="footer-description">
                            <div class="footer-logo">
                                <img class="img-fluid" src="<?php echo ADMINASSETS.$web_settings['web_logo']; ?>" alt="">
                            </div>
                            <p> Simply Carrom provides the best carrom products and accessories by Siscaa.</p>
                        </div>
                        <!-- end of footer description -->
                    </div>

                            
                    <div class="col-md-3">
                        <!-- single footer nav block -->
                        <div class="single-footer-nav-block">
                            <h2 class="block-title">Products</h2>
                            <ul class="footer-nav-links">
                                <?php foreach($footcategories as $foot){ ?>
                                <li><a href="<?php echo base_url(); ?>Products/view/<?php echo $foot['slug']; ?>"><?php echo $foot['name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- end of single footer nav block -->
                    </div>

                    <div class="col-md-3">
                        <!-- single footer nav block -->
                        <div class="single-footer-nav-block">
                            <h2 class="block-title">Useful Links</h2>
                            <ul class="footer-nav-links">
                                <li><a href="<?php echo base_url() ?>">Home</a></li>
                                <li><a href="<?php echo base_url() ?>Common/about">About us</a></li>
                                <li><a href="<?php echo base_url() ?>Common/contact">Contact us</a></li>
                                <li><a href="#!">Blogs</a></li>
                                <li><a href="<?php echo base_url() ?>Common/refund_and_return">Refund and Return policy</a></li>
                                <li><a href="<?php echo base_url() ?>Common/terms_and_condition">Terms & Condition</a></li>
                            </ul>
                        </div>
                        <!-- end of single footer nav block -->
                    </div>


                    <div class="col-md-3">
                        <!-- single footer nav block -->
                        <div class="single-footer-nav-block">
                            <h2 class="block-title">Contact Us</h2>
                            
                            <div class="footer-con">
                                <p><i class="fa fa-map-marker"></i> <?php echo $web_settings['address'] ?></p>

                                <p><i class="fa fa-phone fa-rotate-90"></i> <?php echo $web_settings['support_number'] ?></p>

                                <p><i class="fa fa-envelope"></i> <?php echo $web_settings['support_email'] ?></p>
                            </div>
                        </div>
                        <!-- end of single footer nav block -->
                    </div>
                </div>
            </div>
            <!-- end of footer navigation -->

            <!-- copyright section -->

        </div>
            <div class="copyright-section">
                <div class="copyright-container">
                    <div class="text-center">
                        <p class="copyright-text">Copyright &copy; 2021 <a
                                href="#">Simply Carrom</a>. All Rights
                            Reserved.Developed by <a href="https://cosmicwebsolution.com/" target="_blank">Cosmic Web Solution</a></p>
                    </div>
                </div>
                <!-- end of copyright section -->
            </div>
    </footer>

    <!--====  End of footer  ====-->


    <!-- quick view modal -->
    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <!-- product quickview image gallery -->
                            <!--Modal Tab Content Start-->
                            <div class="tab-content product-details-large" id="myTabContent">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                    aria-labelledby="single-slide-tab-1">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="assets/images/product-slider-images/image1.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide2" role="tabpanel"
                                    aria-labelledby="single-slide-tab-2">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="assets/images/product-slider-images/image2.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide3" role="tabpanel"
                                    aria-labelledby="single-slide-tab-3">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="assets/images/product-slider-images/image3.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide4" role="tabpanel"
                                    aria-labelledby="single-slide-tab-4">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="assets/images/product-slider-images/image4.jpg" class="img-fluid"
                                            alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            </div>
                            <!--Modal Content End-->
                            <!--Modal Tab Menu Start-->
                            <div class="single-product-menu">
                                <div class="nav single-slide-menu" role="tablist">
                                    <div class="single-tab-menu img-full">
                                        <a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img
                                                src="assets/images/product-slider-images/image1.jpg" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single-tab-menu img-full">
                                        <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img
                                                src="assets/images/product-slider-images/image2.jpg" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single-tab-menu img-full">
                                        <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img
                                                src="assets/images/product-slider-images/image3.jpg" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="single-tab-menu img-full">
                                        <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img
                                                src="assets/images/product-slider-images/image4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--Modal Tab Menu End-->
                            <!-- end of product quickview image gallery -->
                        </div>
                        <div class="col-lg-7 col-md-5">
                            <!-- product quick view description -->
                            <div class="product-options">
                                <h2 class="product-title">FADED SHORT SLEEVE</h2>
                                <p class="condition"><span>Condition:</span> New</p>
                                <h2 class="product-price">$12.90</h2>
                                <p class="product-description">Faded short sleeve t-shirt with high neckline. Soft and
                                    stretchy material for a
                                    comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                <div class="social-share-buttons">
                                    <ul>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i>
                                                Google+</a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i> Pinterest</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="stock-details">288 items <span class="stock-status in-stock">In Stock</span>
                                </p>
                                <p class="quantity">Quantity:
                                    <span class="pro-qty counter"><input type="text" value="1" class="mr-5"></span>

                                </p>
                                <p class="size">
                                    Size: <br>
                                    <select name="chooseSize" id="chooseSize">
                                        <option value="0">XXL</option>
                                        <option value="0">L</option>
                                        <option value="0">M</option>
                                        <option value="0">S</option>
                                    </select>
                                </p>
                                <p class="color">
                                    Color: <br>
                                    <a href="#"><span class="color-block color-choice-1"></span></a>
                                    <a href="#"><span class="color-block color-choice-2"></span></a>
                                    <a href="#"><span class="color-block color-choice-3 active"></span></a>
                                </p>

                                <a href="#" class="add-to-cart-btn" data-toggle="modal"
                                    data-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                    Add to Cart</a>
                            </div>
                            <!-- end of product quick view description -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end of quick view modal -->


    <!-- add to cart modal -->
    <div class="modal fade add-to-cart-modal-container" id="add-to-cart-modal-container" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!-- cart product short details -->

                            <div class="cart-product-short-desc">
                                <h2 class="cart-success-message"> Product successfully added to your shopping cart</h2>
                                <div class="cart-product-short-desc-content d-flex">
                                    <div class="product-image">
                                        <img src="assets/images/products/faded-short-sleeve-tshirts.jpg"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="product-desc">
                                        <h4 class="product-title">Printed Dress</h4>
                                        <p class="color-size">Yellow, S</p>
                                        <p class="quantity"><span>Quantity</span> 1</p>
                                        <p class="total-amount"><span>Total:</span> $20.40</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end of cart product short details -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- cart product calculation -->
                            <div class="cart-product-calculation">
                                <h2 class="cart-info-message">There is 1 item in your cart.</h2>
                                <div class="product-calculations">
                                    <p><span>Total products</span> $20.50</p>
                                    <p><span>Total shipping</span> $2</p>
                                    <p><span>Total</span> $22.50</p>
                                </div>
                            </div>
                            <!-- end of cart product calculation -->

                            <!-- cart modal buttons -->
                            <div class="cart-modal-buttons">
                                <a class="continue-shopping-btn" href="shop-left-sidebar-wide.html"><i
                                        class="fa fa-chevron-left"></i>
                                    Continue
                                    shopping</a>
                                <a class="proceed-checkout-btn" href="checkout-wide.html">Proceed to checkout <i
                                        class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                            <!-- end of cart modal buttons -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end of add to cart modal -->




    <!-- scroll to top  -->
    <a href="#" class="scroll-top"></a>
    
