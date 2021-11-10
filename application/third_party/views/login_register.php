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
                                                <li class="active">Login Register</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<div class="account-area page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2>Login - Register</h2>
                    </div>
                </div>
            </div>
            
                                        
            <div class="row">
                <div class="col-sm-6 col-xs-12 mb-30">
                    <!-- Login Form s-->
                    <form action="<?php echo base_url(); ?>Login_Register/login" method="post" class="login-form">

                        <div id="login-form">
                            <h4 class="login-title">Login</h4>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Mobile Number*</label>
                                    <input class="mb-0" type="text" placeholder="Mobile Number"name="mobile" value="<?php echo set_value('mobile') ?>">
                                <?php echo form_error('mobile','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" placeholder="Password" name="password" autocomplete="off" value="<?php echo set_value('password') ?>">
                                <?php echo form_error('password','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" name="submit" class="register-button mt-0">Login</button>
                                    
                                </div>

                                <div class="col-md-4 mt-10 text-left text-md-right">
                                    <a href="#"> Forget password?</a>
                                </div>

                            </div>
                        </div>

                    </form>
                    
                    <div class="social_login">
                        <div class="row">
                            <div class="col-6">
                                <a href="<?php echo base_url(); ?>Oauth" class="google"><img src="<?php echo ASSETS ?>assets/images/social/glogo.png" > Google</a>
                            </div>
                            <div class="col-6">
                                <a href="<?php echo base_url(); ?>Facebookauth" class="facebook"><img src="<?php echo ASSETS ?>assets/images/social/fblogo.png" > Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <form action="<?php echo base_url(); ?>Login_Register/register" method="post" class="login-form">

                        <div id="register-form">
                            <h4 class="login-title">Register</h4>

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Full Name*</label>
                                    <input class="mb-0" type="text" name="username" placeholder="First Name" value="<?php echo set_value('username') ?>">
                                    <?php echo form_error('username','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Mobile Number*</label>
                                    <input class="mb-0" type="text" name="mobile" placeholder="Mobile Number" value="<?php echo set_value('mobile') ?>">
                                    <?php echo form_error('mobile','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email Address" value="<?php echo set_value('email') ?>">
                                    <?php echo form_error('email','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Password" value="<?php echo set_value('password') ?>">
                                    <?php echo form_error('password','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo set_value('cpassword') ?>">
                                    <?php echo form_error('cpassword','<p class="text-danger">','</p>'); ?>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="register-button mt-0">Register</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>