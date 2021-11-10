<?php $this->load->view("includes/header_top"); ?>
<?php $this->load->view("includes/header"); ?>



 <div class="blog-section mt-50 mb-50">
                        <div class="container">

                            <div class="row">
                                <?php foreach($blogcategories as $blog){ ?>
                                <!-- Blog Item -->
                                <div class="col-lg-4 col-md-6 col-12 mb-40">
                                    <div class="rossi-blog">
                                        <a href="<?php echo base_url(); ?>Blog/blog_list/<?php echo $blog['id']; ?>" class="image"><img
                                                src="<?php echo ADMINASSETS.$blog['image'] ?>" alt="Blog Image"></a>
                                        <div class="content">
                                            <h4><a href="<?php echo base_url(); ?>Blog/blog_list/<?php echo $blog['id']; ?>"><?php echo $blog['name'] ?></a></h4>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                <?php } ?>

                             


                        </div>
                    </div>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>