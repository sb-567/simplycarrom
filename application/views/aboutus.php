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
                                                <li class="active">About us</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<div class="account-area page-content">
        
                    <section class="page-content about-page-content mb-50">
                        <div class="container">
                            
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <div class="about-single-block">
                                        
                                        <div class="about-team-image">
                                            <img src="<?php echo ASSETS ?>assets/images/carrom.jpg" class="img-fluid" alt="">
                                        </div>
                                        

                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="about-single-block">
                                        <?php echo $about_us1['value']; ?>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </section>
                    
                       

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>
