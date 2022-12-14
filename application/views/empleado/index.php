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
	<title>empleados - SisEmao</title>
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
				<li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="Crypto Dashboard">Men?? de Opciones</span></a>
				</li>
				<li class=" navigation-header"><span data-i18n="Crypto">Planillas</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
				</li>
				<li class=" nav-item"><a href="<?= site_url("planilla/planilla") ?>"><i class="la la-list"></i><span class="menu-title" data-i18n="Transactions">Tabla Planilla</span></a>
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
					<h3 class="content-header-title mb-0 d-inline-block">Empleados</h3>
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
								<h4 class="card-title">Empleados</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table tabla-empleados">
											<thead>
												<tr>
													<th>#</th>
													<th>Nombres</th>
													<th>Dip</th>
													<th>Fecha Nacimiento</th>
													<th>Fecha Contrato</th>
													<th>Opciones</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($empleados as $i => $empleado) : ?>
													<tr>
														<th><?= $empleado->id_empleado ?></th>
														<td><?= $empleado->paterno . ' ' . $empleado->materno . ' ' . $empleado->nombres ?></td>
														<td><?= $empleado->dip ?></td>
														<td><?= $empleado->fecha_nacimiento ?></td>
														<td><?= $empleado->fecha_ingreso ?></td>
														<td>
															<div class="transact form-inline">
																<div class="mr-xl-2 mr-1">
																	<button onclick="modalEditarDatosDescuento(<?= $empleado->id_empleado ?>)"><i class="la la-arrow-circle-o-down"></i> Datos Descuento</button>
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
			$('.tabla-empleados').DataTable({
				"language": {
					"url": "<?= base_url(); ?>app-assets/js/scripts/tables/datatables/locales/es-ES.json"
				}
			});
		});
	</script>
</body>
<!-- END: Body-->

<script>
	var js_data = '<?php echo json_encode($empleados); ?>';
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

	function modalEditarPlanilla(id) {
		editar(id);
	}

	function imprimirPlanillaEmpleado(id) {
		window.open("<?php echo site_url('planilla/planilla/imprimir/') ?>" + id);
	}

	function guardar_nuevo() {
		if (!$('#form').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/nuevo'); ?>',
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

	function guardar_editar(id) {
		if (!$('#form-planilla').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/editar/'); ?>' + id,
				data: $('#form-planilla').serialize(),
				success: function(response) {
					$('#nuevo1').modal('hide');
					location.reload();
				},
				error: function() {
					alert('Formulario con errores al editar');
				}
			});
		}
	}

	function nuevo() {
		$('#form').resetear();
		$('#nuevo').appendTo("body").modal('show');
		$("#guardar-btn").unbind("click");
		$("#guardar-btn").bind("click", function() {
			guardar_nuevo();
		});
	}

	function buscar(id) {
		return js_obj_data.filter(
			function(data) {
				return data.id_planilla == id
			}
		);
	}

	function editar(id) {
		$('#form-planilla').resetear();
		datos = buscar(id)[0];

		populate_form(datos);

		$('#planilla-modal').modal('show');
		$("#guardar-btn-editar").unbind("click");
		$("#guardar-btn-editar").bind("click", function() {
			guardar_editar(id);
		});
	}

	function borrar(id) {
		$('#confirmar').modal('show');
		$("#confirmar-guardar-btn").unbind("click");
		$("#confirmar-guardar-btn").bind("click", function() {
			guardar_borrar(id);
		});
	}

	function guardar_borrar(id) {
		$.ajax({
			type: "POST",
			url: '<?php echo site_url('planilla/planilla/borrar/'); ?>' + id,
			success: function(response) {
				$('#confirmar').modal('hide');
				location.reload();
			},
			error: function() {
				alert('Formulario con errores al Borrar');
			}
		});
	}

	function activar(id) {
		$.ajax({
			type: "POST",
			url: '<?php echo site_url('planilla/planilla/activar/'); ?>' + id,
			success: function(response) {
				location.reload();
			},
			error: function() {
				alert('Formulario con errores al Activar');
			}
		});
	}

	function populate_form(datos) {
		console.log(datos);
		$.each(datos, function(name, val) {
			var $el = $('[name="' + name + '"]'),
				type = $el.attr('type');
			// console.log(name);
			// console.log($el);
			// console.log(type);
			// console.log(val);
			switch (type) {
				case 'checkbox':
					$el.attr('checked', 'checked');
					break;
				case 'radio':
					$el.filter('[value="' + val + '"]').attr('checked', 'checked');
					break;
				default:
					$el.val(val);
			}
		});
	}
	function modalEditarDatosPersonales(id) {
		$('#form-planilla-datos-personal').resetear();
		datos = buscar(id)[0];

		populate_form(datos);

		$('#planilla-modal-datos-personal').modal('show');
		$("#guardar-btn-editar2").unbind("click");
		$("#guardar-btn-editar2").bind("click", function() {
			guardar_editar2(id);
		});
	}
	function guardar_editar2(id) {
		if (!$('#form-planilla-datos-personal').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/editar/'); ?>' + id,
				data: $('#form-planilla-datos-personal').serialize(),
				success: function(response) {
					$('#planilla-modal-datos-personal').modal('hide');
					location.reload();
				},
				error: function() {
					alert('Formulario con errores al editar');
				}
			});
		}
	}

	function modalEditarDatosPago(id) {
		$('#form-planilla-datos-pago').resetear();
		datos = buscar(id)[0];

		populate_form(datos);

		$('#planilla-modal-datos-pago').modal('show');
		$("#guardar-btn-editar3").unbind("click");
		$("#guardar-btn-editar3").bind("click", function() {
			guardar_editar3(id);
		});
	}
	function guardar_editar3(id) {
		if (!$('#form-planilla-datos-pago').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/editar/'); ?>' + id,
				data: $('#form-planilla-datos-pago').serialize(),
				success: function(response) {
					$('#planilla-modal-datos-pago').modal('hide');
					location.reload();
				},
				error: function() {
					alert('Formulario con errores al editar');
				}
			});
		}
	}

	function modalEditarDatosDescuento(id) {
		$('#form-planilla-datos-descuentos').resetear();
		datos = buscar(id)[0];

		populate_form(datos);

		$('#planilla-modal-datos-descuentos').modal('show');
		$("#guardar-btn-editar4").unbind("click");
		$("#guardar-btn-editar4").bind("click", function() {
			guardar_editar4(id);
		});
	}
	function guardar_editar4(id) {
		if (!$('#form-planilla-datos-descuentos').find('.has-error').length) {
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/editar/'); ?>' + id,
				data: $('#form-planilla-datos-descuentos').serialize(),
				success: function(response) {
					$('#planilla-modal-datos-descuentos').modal('hide');
					location.reload();
				},
				error: function() {
					alert('Formulario con errores al editar');
				}
			});
		}
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
