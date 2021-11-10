<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

		<!-- Favicon -->
		<link rel="icon" href="<?php echo ASSETS; ?>assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<?php
			$title = "";
			$settings = $this->common_model->getSetting("web_settings",true);
			if($settings && isset($settings['site_title'])){
				$title = " | ".$settings['site_title'];
			}
		?>
		<title>Admin <?php echo $title; ?></title>

		<!-- Bootstrap css-->
		<link href="<?php echo ASSETS; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="<?php echo ASSETS; ?>assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="<?php echo ASSETS; ?>assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo ASSETS; ?>assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="<?php echo ASSETS; ?>assets/css/style.css" rel="stylesheet">
		<link href="<?php echo ASSETS; ?>assets/css/skins.css" rel="stylesheet">
		<link href="<?php echo ASSETS; ?>assets/css/dark-style.css" rel="stylesheet">
		<link href="<?php echo ASSETS; ?>assets/css/colors/default.css" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo ASSETS; ?>assets/css/colors/color.css">

		<!-- Owl-carousel css-->
		<link href="<?php echo ASSETS; ?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Select2 css-->
		<link href="<?php echo ASSETS; ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo ASSETS; ?>assets/plugins/multipleselect/multiple-select.css">

		<!-- Internal DataTables css-->
		<link href="<?php echo ASSETS; ?>assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="<?php echo ASSETS; ?>assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
		<link href="<?php echo ASSETS; ?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />

		<!-- Sidemenu css-->
		<link href="<?php echo ASSETS; ?>assets/css/sidemenu/sidemenu.css" rel="stylesheet">
		<style type="text/css">
			label.is-invalid{
				    width: 100%;
				    margin-top: 0.25rem;
				    font-size: 80%;
				    color: #f16d75;
			}
			.my-customm-logo-class{
				max-height: 36px;
			}
			.main-header-center .search-panel .dropdown-toggle {
                border-radius: 6px 0 0 6px !important;
              }
              @media (min-width: 576px){
                .modal-dialog {
                    max-width: 600px;
                    margin: 1.75rem auto;
                }
                }
		</style>

		<script src="<?php echo ASSETS; ?>assets/plugins/jquery/jquery.min.js"></script>