<!DOCTYPE html>
<html lang="en">
	<head>

		<?php $this->load->view("include/head"); ?>
		
<style type="text/css">
	.rem-btn{
		   /* position: relative;
    top: 0px;
    left: 1px;*/
	}
</style>
		<!-- Internal Summernote css-->
		<link rel="stylesheet" href="<?php echo ASSETS; ?>assets/plugins/summernote/summernote-bs4.css">
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
								<h2 class="main-content-title tx-24 mg-b-5">Products</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
									<li class="breadcrumb-item " >Products</li>
									<li class="breadcrumb-item active"  aria-current="page">Attributes and Variants</li>
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
									<form action="<?php echo base_url(); ?>Product/update_variants_and_attributes" method="POST" enctype="multipart/form-data" id="myForm">
										<?php if(isset($product)){ ?>
															<input type="hidden" class="form-control " name="id" id="id" placeholder="Product Name" value="<?php if(isset($product)){ echo $product['id'];} ?>">
														<?php } ?>
										<div class="row row-sm">
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<h3 class="main-content-label">Product Data</h3>
									</div>
									<div class="card-body text-center item-user">
										<div class="profile-pic">
											<div class="profile-pic-img">
												<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
												<img src="<?php echo base_url().$product['image']; ?>" class="rounded-circle" alt="user">
											</div>
											<a href="#" class="text-dark"><h5 class="mt-3 mb-0 font-weight-semibold"><?php echo $product['name']; ?></h5></a>
										</div>
									</div>
									<ul class="item1-links nav nav-tabs  mb-0">
										<!-- <li class="nav-item">
											<a data-target="#attributes" class="nav-link active" data-toggle="tab" role="tablist"><i class="ti-save-alt icon1"></i> Attributes</a>
										</li> -->
										<li class="nav-item">
											<a data-target="#variants" class="nav-link active" data-toggle="tab" role="tablist"><i class="ti-save-alt icon1"></i> Variants</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade " id="attributes" role="tabpanel">
												<div class="d-flex mb-4">
													<label class="main-content-label my-auto">All Attributes</label>
													<h6 class="mb-0 ml-auto"><button class="btn btn-success  float-right" data-target="#modalAddAttribute" data-toggle="modal" type="button" onclick="clearAttributeId()"><i class=""></i>Add Attribute</button></h6>
												</div>
												<div class="table-responsive">
													<table class="table border text-md-nowrap text-nowrap">
														<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Description</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php
															foreach($attributes as $att){ ?>
															<tr class="border-bottom">
																<th scope="row"><?php echo $att['id']; ?></th>
																<td><?php echo $att['attribute_name']; ?></td>
																<td><?php echo $att['value']; ?></td>
																<td>
																	<a href="<?php echo base_url(); ?>Product/delete_attribute/<?php echo $att['id']; ?>/<?php echo $att['product_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
																	<a href="#" onclick="editAttribute('<?php echo $att['id']; ?>','<?php echo $att['attribute_id']; ?>','<?php echo $att['value']; ?>')" class="btn btn-info btn-sm">Edit</a>
																</td>
															</tr>
														<?php } ?>
															
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane fade show active " id="variants" role="tabpanel">
												<div class="d-flex mb-4">
													<label class="main-content-label my-auto">All Variants</label>
													<?php if($product['type'] == 'variable_product' || (count($variants) < 1)){ ?>
													<h6 class="mb-0 ml-auto"><button class="btn btn-success  float-right" type="button" data-target="#modalAddVariant" data-toggle="modal" onclick="clearVariantId()"><i class=""></i>Add Variant</button></h6>
												<?php } ?>
												</div>
												<div class="table-responsive">
													<table class="table border text-md-nowrap text-nowrap">
														<thead>
															<tr>
																<th>#</th>
																<th>Text</th>
																<th>Price</th>
																<th>Special Price</th>
																<th>Image</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php

															foreach($variants as $var){ ?>
															<tr class="border-bottom">
																<th scope="row"><?php echo $var['id']; ?></th>
																<td><?php echo $var['variant_text']; ?></td>
																<td><?php echo $var['price']; ?></td>
																<td><?php echo $var['special_price']; ?></td>
																<td><img src="<?php echo base_url().$var['vimage']; ?>" height="70px"></td>
																<td>
																	<a href="<?php echo base_url(); ?>Product/delete_variant/<?php echo $var['id']; ?>/<?php echo $var['product_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
																	<a href="#" onclick="editVariant('<?php echo $var['id']; ?>','<?php echo $var['variant']; ?>','<?php echo $var['variant_text']; ?>','<?php echo $var['price']; ?>','<?php echo $var['special_price']; ?>','<?php echo $var['sku']; ?>','<?php echo $var['stock']; ?>','<?php echo $var['vimage']; ?>')" class="btn btn-info btn-sm">Edit</a>
																</td>
															</tr>
														<?php } ?>
															
														</tbody>
													</table>
												</div>
											</div>
											
										</div>
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
			<div class="modal" id="scrollmodal" style="z-index:99999">
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

			<div class="modal" id="modalAddAttribute" >
				<div class="modal-dialog modal-md" role="document">
					<form method="POST" action="<?php echo base_url(); ?>Product/add_attribute" id="attributeForm">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">Add Attribute</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div class="row row-sm">
									<div class="col-md-12">
										<div class="form-group">
											<p class="mg-b-10">Select Attribute</p>
											<select  class="form-control select2" name="attribute_id" id="attribute_id" placeholder="Product Name " >
												<option value="">Select Attribute</option>
													<?php foreach ($all_attributes as $at) { ?>
														
													<option value="<?php echo $at['id']; ?>" data-textvalue="<?php echo $at['name']; ?>"><?php echo $at['name']; ?></option>
													<?php } ?>
											</select>
											<input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
											<input type="hidden" name="product_attribute_id" id="product_attribute_id">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<p class="mg-b-10">Set Value</p>
											<textarea type="text" class="form-control " rows="6" name="attribute_value" id="attribute_value" placeholder="Value or Description" ></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-primary" type="submit" >Save changes</button>
								<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="modal" id="modalAddVariant">
				<div class="modal-dialog modal-md" role="document">
					<form method="POST" action="<?php echo base_url(); ?>Product/add_Variant" id="variantForm">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">Add Variant</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div class="row row-sm">
									
									
									
									<div class="col-md-12">
										<div class="form-group">
											<p class="mg-b-10">Selected varient</p>
											<input type="text" class="form-control"  id="set_vattribute" readonly>
											
										</div>

										<div class="form-group">
											<p class="mg-b-10">Select varient</p>
											<select name="set_vattribute" class="form-control select2">
												<!--<option value="0">Select Category</option>-->
												<option value="color">Colors</option>
												<option value="ply">Ply Thickness</option>
											</select>
										</div>

										
										<input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
									<input type="hidden" name="product_variant_id" id="product_variant_id">
									
									</div>

									
									
									<div class="col-md-12">
										<div class="form-group">
											<p class="mg-b-10">Variant Text</p>
											<input type="text" class="form-control "  name="variant_text" id="variant_text" placeholder="variant Text" >
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">Price</p>
											<input type="text" class="form-control "  name="price" id="price" placeholder="Price" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">Special Price</p>
											<input type="text" class="form-control "  name="special_price" id="special_price" placeholder="Special Price" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">SKU</p>
											<input type="text" class="form-control "  name="sku" id="sku" placeholder="SKU" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<p class="mg-b-10">Stock Qty</p>
											<input type="text" class="form-control "  name="stock" id="stock" placeholder="Stock Qty" >
										</div>
									</div>

									
													<div class="col-md-12">
														<div class="form-group" >
															<p class="mg-b-10">Main Image</p>
															<input type="text" readonly="" class="form-control " name="path" id="path"  value="" >
															<br>
															<a class="btn ripple btn-secondary" data-target="#scrollmodal" data-toggle="modal" href="" onclick="setCurrentFlag('main')">Select Image</a>
														</div>
														
													</div>
													<!-- <div class="col-md-2">
														<div class="form-group row justify-content-center mb-0">
															 
															<img src="" id="img-preview" height="75">
															 	
														</div>
														
													</div> -->
												
									
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-primary" type="submit" >Save changes</button>
								<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
							</div>
						</div>
					</form>
				</div>
			</div>

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
		<!-- Internal Summernote js-->
		<script src="<?php echo ASSETS; ?>assets/plugins/summernote/summernote-bs4.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#myForm").validate({
					rules: {
						category_name: {
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

				$("#attributeForm").validate({
					rules: {
						attribute_id: {
							required: true,
						},
						attribute_value: {
							required: true,
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
			function setCurrentFlag(path){
				$("#current_image_section").val(path);
			}
			function removeDiv(div){
				$("#"+div).remove()
			}
			function editAttribute(id,attribute_id,value){
				$("#product_attribute_id").val(id);
				$("#attribute_id").val(attribute_id);
				$("#attribute_value").val(value);
				$("#modalAddAttribute").modal("show")
				$('#attribute_id').select2({refresh:'1'});

			}
			function clearAttributeId(){
				$("#product_attribute_id").val("");
				$("#attribute_id").val("");
				$("#attribute_value").val("");
				// $('#attribute_id').select2({refresh:'1'});
			}
			function clearVariantId(){
				$("#product_variant_id").val("");
				$("#set_vattribute").val("");
				$("#variant_text").val("");
				$("#price").val("");
				$("#special_price").val("");
				$("#sku").val("");
				$("#stock").val("");
				$("#path").val("");
			}
			function editVariant(id,variant,variant_text,price,special_price,sku,stock,path){
				$("#product_variant_id").val(id);
				$("#set_vattribute").val(variant);
				$("#variant_text").val(variant_text);
				$("#price").val(price);
				$("#special_price").val(special_price);
				$("#sku").val(sku);
				$("#stock").val(stock);
				$("#path").val(path);
				$("#modalAddVariant").modal("show")
			}
		</script>

	</body>
</html>