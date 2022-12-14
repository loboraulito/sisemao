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
	<title>Planillas - SisEmao</title>
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
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>app-assets/css/pages/app-email.css">
    <!-- END: Page CSS-->
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
	<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns email-application  fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

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
				<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new"></div>
				<div class="content-header-right col-md-6 col-12">
					<div class="btn-group float-md-right">
					</div>
				</div>
			</div>
			<div class="content-body">
				<div class="row">
					<div class="col-4 content-right">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Planillas</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body">
									<!-- email app overlay -->
									<div class="app-content-overlay"></div>
									<div class="email-app-area">
										<!-- Email list Area -->
										<div class="email-app-list-wrapper">
											<div class="email-app-list">                                
												<!-- email user list start -->
												<div class="email-user-list list-group">
													<ul class="users-list-wrapper media-list">
													<?php foreach ($planillas as $i => $planilla) : ?>
														<li class="media mail-read list-button"> 
															<button class="sin_espacios" href="#" target="_blank" rel="noopener noreferrer" onclick="editar_marcados(<?= $planilla->id_planilla?>)">
															<div class="media-body">
																<div class="user-details">
																	<div class="mail-items">
																		<span class="list-group-item-text text-truncate"><?= $planilla->paterno . ' ' . $planilla->materno . ' ' . $planilla->nombres ?></span>
																	</div>
																</div>
																<div class="mail-message">
																	<p class="list-group-item-text truncate mb-0">
																	<?= $planilla->dip ?>
																	</p>
																	<div class="mail-meta-item">
																		<span class="float-right">
																			<span class="bullet bullet-success bullet-sm"></span>
																		</span>
																	</div>
																</div>
															</div>
															</button>
														</li>
														<?php endforeach; ?>
													</ul>
													<!-- email user list end -->

													<!-- no result when nothing to show on list -->
													<div class="no-results">
														<i class="ft-info font-large-2"></i>
														<h5>No Items Found</h5>
													</div>
												</div>
											</div>
										</div>
										<!--/ Email list Area -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Asistencias</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body">
									<div class="table-responsive">
										<div class="row">
											<div class="col-8 tabla-asistencia">tabla</div>
											<div class="col-4 formulario-asistencia">formulario</div>
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
	<!-- END: Content-->

	<!-- Modal -->
	<div class="modal fade text-left" id="dias-trabajados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="myModalLabel35">Dias Trabajados</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-planilla-datos-descuentos">
					<div class="modal-body">
						<fieldset class="form-group floating-label-form-group">
							<label for="dias_traba">D??as trabajados</label>
							<input type="text" class="form-control" id="dias_traba" name="dias_traba" placeholder="dias_traba">
						</fieldset>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
						<!-- <input type="submit" class="btn btn-outline-primary btn-lg" value="Login"> -->
						<!-- <button id="guardar-btn-editar4" type="button" class="btn btn-primary">Guardar</button> -->
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
			$('.tabla-planillas').DataTable({
				"language": {
					"url": "<?= base_url(); ?>app-assets/js/scripts/tables/datatables/locales/es-ES.json"
				}
			});
		});
	</script>
</body>
<!-- END: Body-->

<script>
	var js_data = '<?php echo json_encode($planillas); ?>';
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

		// tabla = $('#tabla').DataTable({
		// 	language: {
		// 		"url": "/sergeominweb/public/vendors/datatables.net/js/Spanish.json"
		// 	},
		// 	data: js_obj_data,
		// 	"columns": [{
		// 			"data": "id_empleado",
		// 			searchable: false
		// 		},
		// 		{
		// 			"data": null,
		// 			"render": function(a, b, data, d) {
		// 				return data.nombre + " " + data.apellido_paterno + " " + data.apellido_materno;
		// 			}
		// 		},
		// 		{
		// 			"data": "ci"
		// 		},
		// 		{
		// 			"data": "telefono",
		// 			searchable: false
		// 		},
		// 		{
		// 			"data": null
		// 		},
		// 		{
		// 			"targets": -1,
		// 			"data": null,
		// 			"render": function(a, b, data, d) {
		// 				if (data.estado == 'A') {
		// 					return "<button class='btn btn-primary btn-editar'>Editar</button><button class='btn btn-danger btn-borrar'>Borrar</button><button class='btn btn-info btn-imprimir'>Imprimir</button>";
		// 				}
		// 				return "<button class='btn btn-warning btn-activar'>Activar</button><button class='btn btn-info btn-imprimir'>Imprimir</button>";
		// 			},
		// 			searchable: false
		// 		}
		// 	]

		// });

		// $('#tabla tbody').on('click', '.btn-usuario', function() {
		// 	var data = tabla.row($(this).parents('tr')).data();
		// 	location = "<?php echo site_url('administracion/usuario/listar_usuarios_empleado/') ?>" + data['id_empleado'];
		// });

		// $('#tabla tbody').on('click', '.btn-editar', function() {
		// 	var data = tabla.row($(this).parents('tr')).data();
		// 	editar(data['id_empleado']);
		// });

		// $('#tabla tbody').on('click', '.btn-borrar', function() {
		// 	var data = tabla.row($(this).parents('tr')).data();
		// 	borrar(data['id_empleado']);
		// });

		// $('#tabla tbody').on('click', '.btn-activar', function() {
		// 	var data = tabla.row($(this).parents('tr')).data();
		// 	activar(data['id_empleado']);
		// });

		// $('#tabla tbody').on('click', '.btn-imprimir', function() {
		// 	var data = tabla.row($(this).parents('tr')).data();
		// 	window.open("<?php echo site_url('planilla/planilla/imprimir/') ?>" + data['id_empleado']);
		// });
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
	// dias-trabajados
	function diastrabajados(id) {
		$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/dias_trabajados/'); ?>'+id,
				data: $('#form').serialize(),
				success: function(response) {
					$('#dias_traba').val(response.dias_trabajados);
					$('#dias-trabajados').appendTo("body").modal('show');
					console.log(response);
				},
				error: function() {
					alert('Formulario con errores al crear nuevo empleado');
				}
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

	function editar_marcados(id){
		$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/getasistenciavista/'); ?>' + id,
				success: function(response) {
					$('.tabla-asistencia').html(response);
				},
				error: function() {
					alert('Formulario con errores');
				}
			});
			$.ajax({
				type: "POST",
				url: '<?php echo site_url('planilla/planilla/getplanillavista/'); ?>' + id,
				success: function(response) {
					$('.formulario-asistencia').html(response);
				},
				error: function() {
					alert('Formulario con errores');
				}
			});
	}

	function guardarDiasplanilla(){
		var formData = $("#form-diasplanilla").serializeArray();
		console.log(formData);
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
