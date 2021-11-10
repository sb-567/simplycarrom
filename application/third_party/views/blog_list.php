<?php $this->load->view("includes/header_top"); ?>

<?php foreach($blogs as $list) { 
    
?>
<?php if(!empty($list['page_title'])){ ?>
<title> <?php echo $list['page_title'] ?></title>
<?php }else{ ?>
<title><?php echo $web_settings['site_title']; ?></title>
<?php } ?>
<?php if(!empty($list['meta_tags'])){ ?>
<meta name="keyword" content="<?php echo $list['meta_tags'] ?>">
<?php } ?>

<?php if(!empty($list['meta_description'])){ ?>
<meta name="description" content="<?php echo $list['meta_description'] ?>">
<?php }} ?>


<?php $this->load->view("includes/header"); ?>

<div class="blog-section mt-50 mb-50">
    <div class="container">
        <div class="row row-40">

            <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2">
                <div class="row">

                    <!-- Blog Item -->
                    <?php foreach($blogs as $b){ ?>
                    <div class="col-md-6 col-12 mb-40">
                        <div class="rossi-blog">
                            <a href="<?php echo base_url(); ?>Blog/single_blog/<?php echo $b['slug']; ?>" class="image"><img
                                    src="<?php echo ADMINASSETS.$b['image'] ?>" alt="Blog Image"></a>
                            <div class="content">
                                <h4><a href="<?php echo base_url(); ?>Blog/single_blog/<?php echo $b['slug']; ?>"><?php echo $b['name']; ?></a></h4>
                                <ul class="meta">
                                    <li><a href="#"><?php echo $b['modified']; ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1">

                <!-- Blog Sidebar -->
                <div class="blog-sidebar mb-40">
                    <h2 class="block-title">CATEGORIES</h2>
                    <ul>
                        <?php foreach($blogcategories as $blogcat){ ?>
                            <li><a href="<?php echo base_url(); ?>Blog/blog_list/<?php echo $blogcat['id']; ?>"><?php echo $blogcat['name'] ?></a></li>
                        <?php } ?>
                    </ul>

                </div>

                <!-- Blog Sidebar -->
                <div class="blog-sidebar mb-40">

                    <h2 class="block-title">RECENT POSTS</h2>
                    <?php foreach($fourblogs as $four){ ?>
                    <div class="sidebar-blog">
                        <a href="#" class="image"><img src="<?php echo ADMINASSETS.$four['image'] ?>"
                                alt="Sidebar Blog"></a>
                        <div class="content">
                            <h5><a href="#"><?php echo $four['name'] ?></a></h5>
                            <span><?php echo $four['modified'] ?></span>
                        </div>
                    </div>
                <?php } ?>
                </div>

            </div>

        </div>
    </div>
</div>

    <?php $this->load->view("includes/footer"); ?>
    <?php $this->load->view("includes/script"); ?>

    </body>

</html>