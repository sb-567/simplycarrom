<!DOCTYPE html>
<html lang="en">
	<head>
        <link rel="stylesheet" href="<?php echo ASSETS; ?>assets/plugins/summernote/summernote-bs4.css">
		<?php $this->load->view("include/head"); ?>
		

	</head>

	<body class="main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?php echo ASSETS; ?>assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">

			<?php $this->load->view("include/sidemenu"); ?>


			<?php $this->load->view("include/header"); ?>

			

			<!-- Main Content-->
			<div class="main-content side-content pt-0">

				<div class="container-fluid">
					<div class="inner-body">

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Blog Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
									<li class="breadcrumb-item "  aria-current="page">Blog Details</li>
									<li class="breadcrumb-item active">Add blogs</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									
									
								</div>
							</div>
							
						</div>
					

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md-12">
								<?php if($this->session->flashdata('error')){ ?>
								<div class="alert alert-danger" role="alert">
										<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span>
										</button>
									<?php echo $this->session->flashdata('error'); ?>
								</div>
								<?php } ?>

								<?php if($this->session->flashdata('success')){ ?>
								<div class="alert alert-success" role="alert">
									<button aria-label="Close" class="close" data-dismiss="alert" type="button">
										<span aria-hidden="true">&times;</span>
									</button>
									<?php echo $this->session->flashdata('success'); ?>
								</div>
								<?php } ?>
							</div>
							
								<div class="col-lg-12">
									<form action="<?php echo base_url(); ?>Blog/add_blog" method="POST" enctype="multipart/form-data" id="myForm">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row row-sm">
													<div class="col-md-12">
														<div class="form-group">
															<p class="mg-b-10">Blog title</p>
															<input type="text" class="form-control " name="blog_title" id="blog_title" placeholder="Blog title" value="<?php if(isset($blogs)){ echo $blogs['name'];} ?>">
															<?php if(isset($blogs)){ ?>
															<input type="hidden" class="form-control " name="id" id="id" placeholder="blogs Name" value="<?php if(isset($blogs)){ echo $blogs['id'];} ?>">
														<?php } ?>
														</div>
													</div>
													<div class="col-md-6">
															<div class="form-group">
																<p class="mg-b-10">Categories</p>
																<select name="category_id" id="category_id" class="form-control select2">
																	<option value="0">Select Category</option>
																	<?php foreach ($blog_categories as $cat) { ?>
																		
																	<option value="<?php echo $cat['id']; ?>" <?php if(isset($blogs) && $blogs['category_id'] == $cat['id']){ echo 'selected'; } ?> ><?php echo $cat['name']; ?></option>
																	<?php } ?>
																</select>
																
															</div>
														</div>

													<div class="col-md-6">
														<div class="form-group" >
															<p class="mg-b-10">Image Path</p>
															<input type="text" readonly="" class="form-control " name="path" id="path"  value="<?php if(isset($blogs)){ echo $blogs['image'];} ?>" >
															<br>
															<a class="btn ripple btn-secondary" data-target="#scrollmodal" data-toggle="modal" href="">Select Image</a>
														</div>
														
													</div>
													<div class="col-md-6">
														<div class="form-group row justify-content-center mb-0">
															 <?php if(isset($blogs)){  ?>

															<img  id="img-preview" src="<?php echo base_url().$blogs['image']; ?>" height="250">
															 	<?php }else{ ?>
															<img src="" id="img-preview" style="display:none" height="250">
															 	<?php } ?>
														</div>
														
													</div>
													
													
												
													
													<div class="col-md-12">
														<div class="form-group">
															<p class="mg-b-10"> Description </p>
															<textarea id="product_description" name="description"  id="description" placeholder="Description"><?php if(isset($blogs)){ echo $blogs['description'];} ?></textarea>
															
														</div>
														
													</div>
												    
												    	
													
													<div class="col-md-12">
														<div class="form-group">
															<p class="mg-b-10">Page title </p>
															<textarea class="form-control"  name="page_title" rows="3"><?php if(isset($blogs)){ echo $blogs['page_title'];} ?></textarea>
															
														</div>
														
													</div>
													
												
													<div class="col-md-12">
														<div class="form-group">
															<p class="mg-b-10">Meta Tags  </p>
															<textarea class="form-control"  name="meta_tags" rows="3"><?php if(isset($blogs)){ echo $blogs['meta_tags'];} ?></textarea>
															
														</div>
														
													</div>
													
													
													<div class="col-md-12">
														<div class="form-group">
															<p class="mg-b-10">Meta Description</p>
															<textarea class="form-control" name="meta_description" rows="3"><?php if(isset($blogs)){ echo $blogs['meta_description'];} ?></textarea>
															
														</div>
														
													</div>
													
											    	
													
												</div>
												<div class="form-group row justify-content-end mb-0">
														<div class="col-md-8 pl-md-2">
															<button class="btn ripple btn-secondary pd-x-30" type="reset">Cancel</button>
															<button class="btn ripple btn-primary pd-x-30 mg-r-5" type="submit">Submit</button>
														</div>
													</div>
											</div>
										</div>
									</form>
							</div>

						</div>
						<!-- End Row -->

						
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<!-- Scroll with content modal -->
			<div class="modal" id="scrollmodal">
            	<div class="modal-dialog modal-dialog-scrollable" role="document">
            		<div class="modal-content modal-content-demo">
            			<div class="modal-header">
            				<h6 class="modal-title">Select Image</h6>
            				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body">
            				<div class="table-responsive">
            					<table class="table category" id="example1">
            						<thead>
            							<tr>
            								<th class="wd-25p">Image</th>
            								<th class="wd-20p">Action</th>
            							</tr>
            						</thead>
            						<tbody>
            							<?php foreach($media as $m){ ?>
            							<tr>
            								<td>
            									<img src="<?php echo base_url().$m['path']; ?>" height="50">
            									<?php echo $m[ 'title']; ?>
            								</td>
            								<td>
            									<button class="btn btn-success" onClick="selectImage('<?php echo $m['id']; ?>','<?php echo $m['path']; ?>')">Select</button>
            								</td>
            							</tr>
            							<?php } ?>
            						</tbody>
            					</table>
            				</div>
            			</div>
            			<div class="modal-footer">
            				<!-- <button class="btn ripple btn-primary" type="button">Save changes</button> -->
            				<button class="btn ripple btn-info" data-dismiss="modal" type="button">Close</button>
            			</div>
            		</div>
            	</div>
            </div>
			<!--End Scroll with content modal -->

			<?php $this->load->view("include/footer"); ?>
			<?php $this->load->view("include/leftsidemenu"); ?>

			

		</div>
		<!-- End Page -->
        
        
		<?php $this->load->view("include/script"); ?>
		<!-- Internal Data Table js -->
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/jszip.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
		<script src="<?php echo ASSETS; ?>assets/js/table-data.js"></script>
		<script src="<?php echo ASSETS; ?>assets/plugins/summernote/summernote-bs4.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#myForm").validate({
					rules: {
						blogs_name: {
							required: true,
						},
						path: {
							required: true,
						},
						order: {
							required: true,
							number: true,
							min: 1,
						}
					}
				});
				$('.select2').select2({
					placeholder: 'Choose one',
					searchInputPlaceholder: 'Search',
					 width: '100%'
				});
				$('#product_description').summernote({
					placeholder: 'Product Description',
					tabsize: 3,
					height: 300
				});
			})
			function selectImage(id,path){
				$("#img-preview").attr("src","<?php echo base_url(); ?>"+path);
				$("#img-preview").show();
				$("#scrollmodal").modal("hide");
				$("#path").val(path);
			}
		</script>

	</body>
</html>