<?php $this->load->view("includes/header_top"); ?>

<?php foreach($singleblog as $list) { 

?>
<?php if($list['page_title']>0){ ?>
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

                    <div class="col-12 mb-50">
                        <?php
                        foreach($singleblog as $single){ ?>
                        <div class="rossi-single-blog">
                            <div class="image"><img src="<?php echo ADMINASSETS.$single['image'] ?>" alt="Blog Image"></div>
                            <div class="content">
                                <h3><?php echo $single['name']; ?></h3>
                                <ul class="meta">
                                    <li><a href="#"><?php echo $single['modified']; ?></a></li>
                                </ul>
                                <?php echo $single['description']; ?>
                            </div>
                        </div>
                    <?php } ?>
                    </div>

                </div>

                <div class="row">
                    <div class="blog-author col mb-80">

                        <div class="image"><img src="<?php echo ASSETS; ?>/assets/images/blog/author.jpg" alt="Blog Author"></div>
                        <div class="content">
                            <h4><a href="#">Elina Smith</a></h4>
                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magn lores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dorem ipsum quia dolor sit etur, adipisci velit, sed quia non
                                numquam eius mod</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1">

                <!-- Blog Sidebar -->
                <div class="blog-sidebar mb-40">
                    <h2 class="block-title">CATEGORIES</h2>
                    <ul>
                        <?php foreach($blogcategories as $blogcat){ ?>
                            <li><a href="<?php echo base_url(); ?>Blog/index/<?php echo $blogcat['id']; ?>"><?php echo $blogcat['name'] ?></a></li>
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