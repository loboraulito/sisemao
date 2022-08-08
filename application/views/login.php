<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
	<meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
	<meta name="author" content="PIXINVENT">
	<title>Login with Background Image - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
	<link rel="apple-touch-icon" href="<?= base_url(); ?>app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>app-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/vendors/css/forms/icheck/icheck.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/vendors/css/forms/icheck/custom.css">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/bootstrap-extended.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/colors.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/components.css">
	<!-- END: Theme CSS-->

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/pages/login-register.css">
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
	<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
			</div>
			<div class="content-body">
				<section class="row flexbox-container">
					<div class="col-12 d-flex align-items-center justify-content-center">
						<div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
							<div class="card border-grey border-lighten-3 px-1 py-1 m-0">
								<div class="card-header border-0">
									<div class="card-title text-center">
										<img src="<?= base_url(); ?>app-assets/images/logo/logo-dark.png" alt="branding logo">
									</div>
									<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>SISEMAO</span></h6>
									<?php if(!empty($error)):?>
									<div class="alert alert-danger mb-2" role="alert">
										<strong>¡Error!</strong> Usuario o contraseña incorrectos.
									</div>
									<?php endif;?>
								</div>
								<div class="card-content">
									<div class="card-body">
										<form id="form-login" action="<?= site_url('login/verificar'); ?>" class="form-horizontal" method="post" novalidate>
											<fieldset class="form-group position-relative has-icon-left">
												<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de Usuario" required>
												<div class="form-control-position">
													<i class="la la-user"></i>
												</div>
											</fieldset>
											<fieldset class="form-group position-relative has-icon-left">
												<input type="password" class="form-control" id="clave" name="clave" placeholder="Clave" required>
												<div class="form-control-position">
													<i class="la la-key"></i>
												</div>
											</fieldset>
											<button onclick="verificar();" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Ingresar</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
	</div>
	<!-- END: Content-->


	<!-- BEGIN: Vendor JS-->
	<script src="<?= base_url(); ?>app-assets/vendors/js/vendors.min.js"></script>
	<!-- BEGIN Vendor JS-->

	<!-- BEGIN: Page Vendor JS-->
	<script src="<?= base_url(); ?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
	<script src="<?= base_url(); ?>app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
	<!-- END: Page Vendor JS-->

	<!-- BEGIN: Theme JS-->
	<script src="<?= base_url(); ?>app-assets/js/core/app-menu.js"></script>
	<script src="<?= base_url(); ?>app-assets/js/core/app.js"></script>
	<!-- END: Theme JS-->

	<!-- BEGIN: Page JS-->
	<script src="<?= base_url(); ?>app-assets/js/scripts/forms/form-login-register.js"></script>
	<!-- END: Page JS-->

</body>

</html>
