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
	<title>Planillas Gestión - SisEmao</title>
	<link rel="apple-touch-icon" href="<?= base_url(); ?>app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>app-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/vendors/css/tables/datatable/datatables.min.css">
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
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/core/colors/palette-callout.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/pages/single-page.css">
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
	<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

	<!-- BEGIN: Header-->
	<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row">
					<li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
					<li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="<?= base_url(); ?>app-assets/images/logo/logo.png">
							<h3 class="brand-text">SisEmao</h3>
						</a></li>
					<li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
					<li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
				</ul>
			</div>
			<div class="navbar-container content">
				<div class="collapse navbar-collapse" id="navbar-mobile">
					<ul class="nav navbar-nav mr-auto float-left">
						<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

					</ul>
					<ul class="nav navbar-nav float-right">


						<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Usuario</span><span class="avatar avatar-online"><img src="<?= base_url(); ?>app-assets/images/portrait/small/images.png" alt="avatar"><i></i></span></a>
							<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-clipboard"></i> Todo</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Salir</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- END: Header-->


	<!-- BEGIN: Main Menu-->

	<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="Crypto Dashboard">Menú de Opciones</span></a>
				</li>
				<li class=" navigation-header"><span data-i18n="Crypto">Planillas Gestión</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
				</li>
				<li class=" nav-item"><a href="<?= site_url("planillagestion/planillagestion") ?>"><i class="la la-list"></i><span class="menu-title" data-i18n="Transactions">Tabla Planilla</span></a>
				</li>
				<li class=" navigation-header"><span data-i18n="Crypto">Empleados</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
				</li>
				<li class=" nav-item"><a href="<?= site_url("empleado/empleado") ?>"><i class="la la-list"></i><span class="menu-title" data-i18n="Transactions">Tabla Empleado</span></a>
				</li>
				<li class=" navigation-header"><span data-i18n="Crypto">Marcados</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
				</li>
				<li class=" nav-item"><a href="<?= site_url("marcado/marcado") ?>"><i class="la la-list"></i><span class="menu-title" data-i18n="Transactions">Tabla Marcados</span></a>
				</li>
			</ul>
		</div>
	</div>

	<!-- END: Main Menu-->
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
					<h3 class="content-header-title mb-0 d-inline-block">Planillas Gestión</h3>
				</div>
				<div class="content-header-right col-md-6 col-12">
					<div class="btn-group float-md-right">
					</div>
				</div>
			</div>
			<div class="content-body">
				<!-- Basic Tables start -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Planillas Gestión</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table tabla-planillagestiones">
											<thead>
												<tr>
													<th>#</th>
													<th>Gestión</th>
													<th>Mes</th>
													<th>Opciones</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($planillagestiones as $i => $planillagestion) : ?>
													<tr>
														<th><?= $planillagestion->id_planilla_gestion ?></th>
														<td><?= $planillagestion->gestion ?></td>
														<td><?= $planillagestion->mes ?></td>
														<td>
															<div class="transact form-inline">
																<div class="mr-xl-2 mr-1">
																	<button onclick="duplicar(<?= $planillagestion->id_planilla_gestion ?>)"><i class="la la-arrow-circle-o-down"></i> duplicar</button>
																	<a href="<?=site_url("planilla/planilla/index2/".$planillagestion->id_planilla_gestion)?>" ><i class="la la-arrow-circle-o-down"></i> ir a planilla</a>
																	<a target="_blank" href="<?=site_url("planilla/planilla/imprimirPlanillaGestion/".$planillagestion->id_planilla_gestion)?>" ><i class="la la-arrow-circle-o-down"></i> Imprimir Planilla</a>
																</div>
															</div>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Responsive tables end -->
			</div>
		</div>
	</div>
	<!-- END: Content-->

	<!-- Modal -->
	<div class="modal fade text-left" id="planillagestion-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="myModalLabel35">Planilla</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-planillagestion">
					<div class="modal-body">
						<fieldset class="form-group floating-label-form-group">
							<label for="gestion">Gestión</label>
							<select id="gestion" name="gestion">
								<option value="<?php echo date("Y"); ?>" selected><?php echo date("Y"); ?></option>
								<option value="<?php echo date("Y")+1; ?>"><?php echo date("Y")+1; ?></option>
							</select>
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="mes">Mes</label>
							<select id="mes" name="mes">
							<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</fieldset>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
						<!-- <input type="submit" class="btn btn-outline-primary btn-lg" value="Login"> -->
						<button id="guardar-btn-editar" type="button" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END: Modal -->

	<div class="sidenav-overlay"></div>
	<div class="drag-target"></div>

	<!-- BEGIN: Footer-->
	<footer class="footer footer-static footer-light navbar-border navbar-shadow">
		<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022 <a class="text-bold-800 grey darken-2" href="#" target="_blank">RAVM</a></span></p>
	</footer>
	<!-- END: Footer-->


	<!-- BEGIN: Vendor JS-->
	<script src="<?= base_url(); ?>app-assets/vendors/js/vendors.min.js"></script>
	<!-- BEGIN Vendor JS-->

	<!-- BEGIN: Page Vendor JS-->
	<script src="<?= base_url(); ?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
	<!-- END: Page Vendor JS-->

	<!-- BEGIN: Theme JS-->
	<script src="<?= base_url(); ?>app-assets/js/core/app-menu.js"></script>
	<script src="<?= base_url(); ?>app-assets/js/core/app.js"></script>
	<!-- END: Theme JS-->

	<!-- BEGIN: Page JS-->
	<script src="<?= base_url(); ?>app-assets/js/scripts/tables/datatables/datatable-styling.js"></script>
	<!-- END: Page JS-->
	<script>
		$(document).ready(function() {
			$('.tabla-planillagestiones').DataTable({
				"language": {
					"url": "<?= base_url(); ?>app-assets/js/scripts/tables/datatables/locales/es-ES.json"
				}
			});
		});
	</script>
</body>
<!-- END: Body-->

<script>
	var js_data = '<?php echo json_encode($planillagestiones); ?>';
	var js_obj_data = JSON.parse(js_data);
	var tabla;
	var a;

	$(function() {
		$('#nuevo').on('shown.bs.modal', function(e) {
			$('#form').validator()
		});

		jQuery.fn.resetear = function() {
			$(this).each(function() {
				this.reset();
			});
		}
	});

	function modalDuplicar(id) {
		editar(id);
	}

	function guardar_nuevo() {
		if (!$('#form').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planillagestion/planillagestion/nuevo'); ?>',
				data: $('#form').serialize(),
				success: function(response) {
					$('#nuevo').modal('hide');
					location.reload();
				},
				error: function() {
					alert('Formulario con errores al crear nuevo empleado');
				}
			});
		}
	}

	function duplicar(id) {
		$('#form-planillagestion').resetear();

		$('#planillagestion-modal').modal('show');
		$("#guardar-btn-editar").unbind("click");
		$("#guardar-btn-editar").bind("click", function() {
			guardar_editar(id);
		});
	}

	function guardar_editar(id) {
		if (!$('#form-planillagestion').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planillagestion/planillagestion/duplicar/'); ?>' + id,
				data: $('#form-planillagestion').serialize(),
				success: function(response) {
					$('#planillagestion-modal').modal('hide');
					location.reload();
				},
				error: function() {
					alert('Formulario con errores al editar');
				}
			});
		}
	}

	function buscar(id) {
		return js_obj_data.filter(
			function(data) {
				return data.id_planillagestion == id
			}
		);
	}
</script>
<?php
function buscar($lista, $campo, $valor, $campo_a_retornar)
{
	foreach ($lista as &$elemento) {
		$elemento     = get_object_vars($elemento);
		$val = $elemento[$campo];
		if ($val == $valor) return $elemento[$campo_a_retornar];
	}
	return '';
}
?>

</html>
