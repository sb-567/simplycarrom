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
                                                <li class="active">Contact Us</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<section class="page-content mt-50 mb-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="page-title">
                                        <h2>CUSTOMER SERVICE - CONTACT US</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="map">
                                        <?php  echo $web_settings['map_iframe']; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="row">-->
                                
                            <!--    <div class="col-lg-4">-->
                            <!--        <div class="contactdetails">-->
                            <!--           <div class="box">-->
                            <!--                <i class="fa fa-map-marker"></i>-->
                            <!--                    <div class="ctext"><?php echo $web_settings['address'] ?></div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                                
                            <!--    <div class="col-lg-4">-->
                            <!--        <div class="contactdetails">-->
                            <!--           <div class="box">-->
                            <!--                <i class="fa fa-phone fa-rotate-90"></i>-->
                            <!--                    <div class="ctext"><?php echo $web_settings['support_number'] ?></div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                                
                            <!--    <div class="col-lg-4">-->
                            <!--        <div class="contactdetails">-->
                            <!--           <div class="box">-->
                            <!--                <i class="fa fa-envelope"></i>-->
                            <!--                    <div class="ctext"><?php echo $web_settings['support_email'] ?></div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                                            
                                            
                                        
                            <!--</div>-->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form-container">
                                        <h2>SEND A MESSAGE</h2>
                                        <form  action="<?php echo base_url() ?>Common/send_mail" method="post"
                                            >
                                            
                                                
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" placeholder="Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <input type="text" name="subject">
                                                    </div>

                                                
                                                
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <textarea name="message" cols="30" rows="10"></textarea>
                                                    </div>
                                                

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <button type="submit" > Submit <i
                                                                class="fa fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                            
                                        </form>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="contactdetails">
                                        <div class="box">
                                            <i class="fa fa-map-marker"></i>
                                            <p>Address</p>
                                        </div>
                                        <div class="ctext"><?php echo $web_settings['address'] ?></div>
                                    </div>
                                    
                                    
                                     <div class="contactdetails">
                                        <div class="box">
                                            <i class="fa fa-phone fa-rotate-90"></i>
                                            <p>Phone</p>
                                        </div>
                                        <div class="ctext"><?php echo $web_settings['support_number'] ?></div>
                                    </div>
                                    
                                    
                                     <div class="contactdetails">
                                        <div class="box">
                                            <i class="fa fa-envelope"></i>
                                            <p>Email</p>
                                        </div>
                                        <div class="ctext"><?php echo $web_settings['support_email'] ?></div>
                                    </div>
                                    
                                    
                                    <div class="social">
                                        <ul>
                                            <li><a href="" class="fb"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="" class="insta"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="" class="link"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--====  End of contact content section  ====-->
                    
                       <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>
