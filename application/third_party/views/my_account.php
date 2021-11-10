<?php $this->load->view("includes/header_top"); ?>
<title><?php echo $web_settings['site_title']; ?></title>
<?php $this->load->view("includes/header"); ?>

<div class="myaccount-area page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2>My Account</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto mr-auto col-lg-9">
                    <div class="myaccount-wrapper">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            1. Edit your account information <span> <i class="fa fa-chevron-down"></i>
                                                <i class="fa fa-chevron-up"></i> </span>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>My Account Information</h4>
                                                <h5>Your Personal Details</h5>
                                            </div>
                                            	<form action="<?php echo base_url(); ?>My_Account/edit" method="post">
                                            <div class="row">
                                            	<?php foreach($userdetails as $user){ ?>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Full Name</label>
                                                        <input type="text" name="username" value="<?php echo $user['username'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Phone Number</label>
                                                        <input type="text" name="mobile" value="<?php echo $user['mobile'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email" value="<?php echo $user['email'] ?>">
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            </div>
                                            <div class="billing-back-btn text-right">

                                                <div class="billing-btn">
                                                    <button type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            2. Change your password <span> <i class="fa fa-chevron-down"></i> <i
                                                    class="fa fa-chevron-up"></i>
                                            </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>Change Password</h4>
                                                <h5>Your Password</h5>
                                            </div>
                                            <form action="<?php echo base_url(); ?>My_Account/change_password" method="post">
                                            <div class="row">
                                            	<div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Old Password</label>
                                                        <input type="password" name="oldpass">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Password</label>
                                                        <input type="password" name="newpass">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Password Confirm</label>
                                                        <input type="password" name="cpass">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-btn text-right">
                                                    <button type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            3. Modify your address book entries <span> <i
                                                    class="fa fa-chevron-down"></i>
                                                <i class="fa fa-chevron-up"></i> </span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>Address Book Entries</h4>
                                            </div>
                                            <?php foreach($useraddress as $add){ ?>
                                            <div class="entries-wrapper">
                                                <div class="row">
                                                    <div
                                                        class="col-lg-6 col-md-6 d-flex">
                                                        <div class="entries-info">
                                                            <p><b>Name : </b><?php echo $add['name'] ?></p>
                                                            <p><b>Mobile No : </b><?php echo $add['mobile'] ?></p>
                                                            <p><b>Location : </b><?php echo $add['location'] ?></p>
                                                            <p><b>Area : </b><?php echo $add['area'] ?></p>
                                                            <p><b>Pincode : </b><?php echo $add['pincode'] ?></p>
                                                            <p><b>City : </b><?php echo $add['city'] ?></p>
                                                            <p><b>Address : </b><?php echo $add['address'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                        <div class="entries-edit-delete text-center">
                                                            <!-- <a class="edit-btn" href="#">Edit</a> -->
                                                            <button class="edit-btn" type="button" data-toggle="modal" data-target="#exampleModal<?php echo $add['id']; ?>">Edit</button>
                                                            <a class="del-btn" href="<?php echo base_url(); ?>My_Account/remove_address/<?php echo $add['id']; ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                            <div class="billing-back-btn">

                                                <div class="billing-btn text-right mt-10">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Address</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>My_Account/add_address" method="post">

        <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Whom you want to deliver?">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location</label>
            <!-- <input type="text" class="form-control" placeholder="Mobile No"> -->
            <select class="form-control" name="location">
                <option value="home">Home</option>
                <option value="office">Office</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pincode</label>
            <input type="text" class="form-control" name="pincode" placeholder="Pincode">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No</label>
            <input type="text" class="form-control" name="mobile" placeholder="Mobile No">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Area</label>
            <input type="text" class="form-control" name="area" placeholder="Area">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">City</label>
            <input type="text" class="form-control" name="city" placeholder="City">
          </div>

        </div>
        </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter your Address" rows="4"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>

<?php foreach($useraddress as $add){ ?>
<div class="modal fade" id="exampleModal<?php echo $add['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>My_Account/edit_address/<?php echo $add['id']; ?>" method="post">

        <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $add['name']; ?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location</label>
            <!-- <input type="text" class="form-control" placeholder="Mobile No"> -->
            <select class="form-control" name="location">
                <option value="home">Home</option>
                <option value="office">Office</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pincode</label>
            <input type="text" class="form-control" name="pincode" value="<?php echo $add['pincode']; ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $add['mobile']; ?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Area</label>
            <input type="text" class="form-control" name="area" value="<?php echo $add['area']; ?>">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">City</label>
            <input type="text" class="form-control" name="city" value="<?php echo $add['city']; ?>">
          </div>

        </div>
        </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter your Address" rows="4"><?php echo $add['address']; ?></textarea>
          </div>
      </div>
      <div class="modal-footer text-center">
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
<?php } ?>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>


    </body>

</html>