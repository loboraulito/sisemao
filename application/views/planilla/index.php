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
				<li class=" navigation-header"><span data-i18n="Crypto">Planillas</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
				</li>
				<li class=" nav-item"><a href="<?= site_url("planilla/planilla") ?>"><i class="la la-list"></i><span class="menu-title" data-i18n="Transactions">Tabla Planilla</span></a>
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
					<h3 class="content-header-title mb-0 d-inline-block">Planillas</h3>
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
								<h4 class="card-title">Planillas</h4>
							</div>
							<div class="card-content collapse show">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table tabla-planillas">
											<thead>
												<tr>
													<th>#</th>
													<th>Nombres</th>
													<th>Dip</th>
													<th>Fecha Nacimiento</th>
													<th>Fecha Contrato</th>
													<th>Haber Básico</th>
													<th>Total a Cancelar</th>
													<th>Opciones</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($planillas as $i => $planilla) : ?>
													<tr>
														<th><?= $planilla->id_planilla ?></th>
														<td><?= $planilla->paterno . ' ' . $planilla->materno . ' ' . $planilla->nombres ?></td>
														<td><?= $planilla->dip ?></td>
														<td><?= $planilla->fecha_nacimiento ?></td>
														<td><?= $planilla->fecha_ingreso ?></td>
														<td><?= $planilla->haber_basico ?></td>
														<td><?= $planilla->total_cancelar ?></td>
														<td>
															<div class="transact form-inline">
																<div class="mr-xl-2 mr-1">
																	<button onclick="modalEditarPlanilla(<?= $planilla->id_planilla ?>)"><i class="la la-arrow-circle-o-down"></i> Datos Planilla</button>
																</div>
																<div>
																	<button onclick="imprimirPlanillaEmpleado(<?= $planilla->id_planilla ?>)"> <i class="la la-arrow-circle-o-up"></i>Papeleta de Pago de <?= $planilla->id_planilla ?></button>
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
	<div class="modal fade text-left" id="planilla-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="myModalLabel35">Planilla</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-planilla">
					<div class="modal-body">
						<fieldset class="form-group floating-label-form-group">
							<label for="tipo_documento">tipo_documento</label>
							<input type="text" class="form-control" id="tipo_documento" name="tipo_documento" placeholder="tipo_documento">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="dip">dip</label>
							<input type="text" class="form-control" id="dip" name="dip" placeholder="dip">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="exp">exp</label>
							<input type="text" class="form-control" id="exp" name="exp" placeholder="exp">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="fecha_nacimiento">fecha_nacimiento</label>
							<input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="fecha_nacimiento">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="edad">edad</label>
							<input type="text" class="form-control" id="edad" name="edad" placeholder="edad">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="turno">turno</label>
							<input type="text" class="form-control" id="turno" name="turno" placeholder="turno">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="paterno">paterno</label>
							<input type="text" class="form-control" id="paterno" name="paterno" placeholder="paterno">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="materno">materno</label>
							<input type="text" class="form-control" id="materno" name="materno" placeholder="materno">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="nombres">nombres</label>
							<input type="text" class="form-control" id="nombres" name="nombres" placeholder="nombres">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="pais">pais</label>
							<input type="text" class="form-control" id="pais" name="pais" placeholder="pais">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="sexo">sexo</label>
							<input type="text" class="form-control" id="sexo" name="sexo" placeholder="sexo">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="jubilado">jubilado</label>
							<input type="text" class="form-control" id="jubilado" name="jubilado" placeholder="jubilado">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="aporte_afp">aporte_afp</label>
							<input type="text" class="form-control" id="aporte_afp" name="aporte_afp" placeholder="aporte_afp">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="discapacidad">discapacidad</label>
							<input type="text" class="form-control" id="discapacidad" name="discapacidad" placeholder="discapacidad">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="tutor">tutor</label>
							<input type="text" class="form-control" id="tutor" name="tutor" placeholder="tutor">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="fecha_ingreso">fecha_ingreso</label>
							<input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="fecha_ingreso">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="fecha_retiro">fecha_retiro</label>
							<input type="text" class="form-control" id="fecha_retiro" name="fecha_retiro" placeholder="fecha_retiro">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="motivo_retiro">motivo_retiro</label>
							<input type="text" class="form-control" id="motivo_retiro" name="motivo_retiro" placeholder="motivo_retiro">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="caja_salud">caja_salud</label>
							<input type="text" class="form-control" id="caja_salud" name="caja_salud" placeholder="caja_salud">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="afp_aporta">afp_aporta</label>
							<input type="text" class="form-control" id="afp_aporta" name="afp_aporta" placeholder="afp_aporta">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="nua_cua">nua_cua</label>
							<input type="text" class="form-control" id="nua_cua" name="nua_cua" placeholder="nua_cua">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="sucursal">sucursal</label>
							<input type="text" class="form-control" id="sucursal" name="sucursal" placeholder="sucursal">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="clasificacion">clasificacion</label>
							<input type="text" class="form-control" id="clasificacion" name="clasificacion" placeholder="clasificacion">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="cargo">cargo</label>
							<input type="text" class="form-control" id="cargo" name="cargo" placeholder="cargo">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="modalidad_contrato">modalidad_contrato</label>
							<input type="text" class="form-control" id="modalidad_contrato" name="modalidad_contrato" placeholder="modalidad_contrato">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="tipo_contrato">tipo_contrato</label>
							<input type="text" class="form-control" id="tipo_contrato" name="tipo_contrato" placeholder="tipo_contrato">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="dias_pagados">dias_pagados</label>
							<input type="text" class="form-control" id="dias_pagados" name="dias_pagados" placeholder="dias_pagados">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="horas_pagadas">horas_pagadas</label>
							<input type="text" class="form-control" id="horas_pagadas" name="horas_pagadas" placeholder="horas_pagadas">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="haber_basico">haber_basico</label>
							<input type="text" class="form-control" id="haber_basico" name="haber_basico" placeholder="haber_basico">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="dias">dias</label>
							<input type="text" class="form-control" id="dias" name="dias" placeholder="dias">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_dias_trabajados">total_dias_trabajados</label>
							<input type="text" class="form-control" id="total_dias_trabajados" name="total_dias_trabajados" placeholder="total_dias_trabajados">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="anios_antiguedad">anios_antiguedad</label>
							<input type="text" class="form-control" id="anios_antiguedad" name="anios_antiguedad" placeholder="anios_antiguedad">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="porcentaje_bono_antiguedad">porcentaje_bono_antiguedad</label>
							<input type="text" class="form-control" id="porcentaje_bono_antiguedad" name="porcentaje_bono_antiguedad" placeholder="porcentaje_bono_antiguedad">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="bono_antiguedad">bono_antiguedad</label>
							<input type="text" class="form-control" id="bono_antiguedad" name="bono_antiguedad" placeholder="bono_antiguedad">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="horas_extra">horas_extra</label>
							<input type="text" class="form-control" id="horas_extra" name="horas_extra" placeholder="horas_extra">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_horas_extra">monto_horas_extra</label>
							<input type="text" class="form-control" id="monto_horas_extra" name="monto_horas_extra" placeholder="monto_horas_extra">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="horas_recargo_nocturno">horas_recargo_nocturno</label>
							<input type="text" class="form-control" id="horas_recargo_nocturno" name="horas_recargo_nocturno" placeholder="horas_recargo_nocturno">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_horas_recargo_nocturno">monto_horas_recargo_nocturno</label>
							<input type="text" class="form-control" id="monto_horas_recargo_nocturno" name="monto_horas_recargo_nocturno" placeholder="monto_horas_recargo_nocturno">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="feriados">feriados</label>
							<input type="text" class="form-control" id="feriados" name="feriados" placeholder="feriados">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_feriados">monto_feriados</label>
							<input type="text" class="form-control" id="monto_feriados" name="monto_feriados" placeholder="monto_feriados">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="pagos_2">pagos_2</label>
							<input type="text" class="form-control" id="pagos_2" name="pagos_2" placeholder="pagos_2">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="domintos_trabajados">domintos_trabajados</label>
							<input type="text" class="form-control" id="domintos_trabajados" name="domintos_trabajados" placeholder="domintos_trabajados">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_domintos_trabajados">monto_domintos_trabajados</label>
							<input type="text" class="form-control" id="monto_domintos_trabajados" name="monto_domintos_trabajados" placeholder="monto_domintos_trabajados">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="toneladas">toneladas</label>
							<input type="text" class="form-control" id="toneladas" name="toneladas" placeholder="toneladas">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_toneladas">monto_toneladas</label>
							<input type="text" class="form-control" id="monto_toneladas" name="monto_toneladas" placeholder="monto_toneladas">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_tonelaje">total_tonelaje</label>
							<input type="text" class="form-control" id="total_tonelaje" name="total_tonelaje" placeholder="total_tonelaje">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="p_av">p_av</label>
							<input type="text" class="form-control" id="p_av" name="p_av" placeholder="p_av">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="p_aw">p_aw</label>
							<input type="text" class="form-control" id="p_aw" name="p_aw" placeholder="p_aw">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="p_ax">p_ax</label>
							<input type="text" class="form-control" id="p_ax" name="p_ax" placeholder="p_ax">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="bono_produccion">bono_produccion</label>
							<input type="text" class="form-control" id="bono_produccion" name="bono_produccion" placeholder="bono_produccion">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_tonelaje_tripulacion">total_tonelaje_tripulacion</label>
							<input type="text" class="form-control" id="total_tonelaje_tripulacion" name="total_tonelaje_tripulacion" placeholder="total_tonelaje_tripulacion">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="p_ba">p_ba</label>
							<input type="text" class="form-control" id="p_ba" name="p_ba" placeholder="p_ba">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="p_bb">p_bb</label>
							<input type="text" class="form-control" id="p_bb" name="p_bb" placeholder="p_bb">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="p_bc">p_bc</label>
							<input type="text" class="form-control" id="p_bc" name="p_bc" placeholder="p_bc">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_tonelaje2">total_tonelaje2</label>
							<input type="text" class="form-control" id="total_tonelaje2" name="total_tonelaje2" placeholder="total_tonelaje2">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_tonelaje3">total_tonelaje3</label>
							<input type="text" class="form-control" id="total_tonelaje3" name="total_tonelaje3" placeholder="total_tonelaje3">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_a_cancelar_tonelaje">monto_a_cancelar_tonelaje</label>
							<input type="text" class="form-control" id="monto_a_cancelar_tonelaje" name="monto_a_cancelar_tonelaje" placeholder="monto_a_cancelar_tonelaje">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_ganado">total_ganado</label>
							<input type="text" class="form-control" id="total_ganado" name="total_ganado" placeholder="total_ganado">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="cot_mens_afp">cot_mens_afp</label>
							<input type="text" class="form-control" id="cot_mens_afp" name="cot_mens_afp" placeholder="cot_mens_afp">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="r_comun_afp">r_comun_afp</label>
							<input type="text" class="form-control" id="r_comun_afp" name="r_comun_afp" placeholder="r_comun_afp">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="comision_afp">comision_afp</label>
							<input type="text" class="form-control" id="comision_afp" name="comision_afp" placeholder="comision_afp">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="apo_sol_afp">apo_sol_afp</label>
							<input type="text" class="form-control" id="apo_sol_afp" name="apo_sol_afp" placeholder="apo_sol_afp">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="aporte_afp2">aporte_afp2</label>
							<input type="text" class="form-control" id="aporte_afp2" name="aporte_afp2" placeholder="aporte_afp2">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="aporte_sindicato">aporte_sindicato</label>
							<input type="text" class="form-control" id="aporte_sindicato" name="aporte_sindicato" placeholder="aporte_sindicato">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="marcacion_fuera_de_horario">marcacion_fuera_de_horario</label>
							<input type="text" class="form-control" id="marcacion_fuera_de_horario" name="marcacion_fuera_de_horario" placeholder="marcacion_fuera_de_horario">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_fuera_de_horario">monto_fuera_de_horario</label>
							<input type="text" class="form-control" id="monto_fuera_de_horario" name="monto_fuera_de_horario" placeholder="monto_fuera_de_horario">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="faltas">faltas</label>
							<input type="text" class="form-control" id="faltas" name="faltas" placeholder="faltas">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_faltas">monto_faltas</label>
							<input type="text" class="form-control" id="monto_faltas" name="monto_faltas" placeholder="monto_faltas">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="abandones">abandones</label>
							<input type="text" class="form-control" id="abandones" name="abandones" placeholder="abandones">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="monto_abandonos">monto_abandonos</label>
							<input type="text" class="form-control" id="monto_abandonos" name="monto_abandonos" placeholder="monto_abandonos">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="retrasos">retrasos</label>
							<input type="text" class="form-control" id="retrasos" name="retrasos" placeholder="retrasos">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_retrasos">total_retrasos</label>
							<input type="text" class="form-control" id="total_retrasos" name="total_retrasos" placeholder="total_retrasos">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="multas_sindicato">multas_sindicato</label>
							<input type="text" class="form-control" id="multas_sindicato" name="multas_sindicato" placeholder="multas_sindicato">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="apoyo_trabajador">apoyo_trabajador</label>
							<input type="text" class="form-control" id="apoyo_trabajador" name="apoyo_trabajador" placeholder="apoyo_trabajador">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="retencion_judicial">retencion_judicial</label>
							<input type="text" class="form-control" id="retencion_judicial" name="retencion_judicial" placeholder="retencion_judicial">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="otros_descuentos">otros_descuentos</label>
							<input type="text" class="form-control" id="otros_descuentos" name="otros_descuentos" placeholder="otros_descuentos">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="rc_iva">rc_iva</label>
							<input type="text" class="form-control" id="rc_iva" name="rc_iva" placeholder="rc_iva">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="finiquito">finiquito</label>
							<input type="text" class="form-control" id="finiquito" name="finiquito" placeholder="finiquito">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_descuentos">total_descuentos</label>
							<input type="text" class="form-control" id="total_descuentos" name="total_descuentos" placeholder="total_descuentos">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="total_cancelar">total_cancelar</label>
							<input type="text" class="form-control" id="total_cancelar" name="total_cancelar" placeholder="total_cancelar">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="centros_de_costo">centros_de_costo</label>
							<input type="text" class="form-control" id="centros_de_costo" name="centros_de_costo" placeholder="centros_de_costo">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="cuenta">cuenta</label>
							<input type="text" class="form-control" id="cuenta" name="cuenta" placeholder="cuenta">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="centros_de_costo_2">centros_de_costo_2</label>
							<input type="text" class="form-control" id="centros_de_costo_2" name="centros_de_costo_2" placeholder="centros_de_costo_2">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="nombre_planilla_asistencia">nombre_planilla_asistencia</label>
							<input type="text" class="form-control" id="nombre_planilla_asistencia" name="nombre_planilla_asistencia" placeholder="nombre_planilla_asistencia">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="planilla_mes_num">planilla_mes_num</label>
							<input type="text" class="form-control" id="planilla_mes_num" name="planilla_mes_num" placeholder="planilla_mes_num">
						</fieldset>
						<fieldset class="form-group floating-label-form-group">
							<label for="planilla_anio">planilla_anio</label>
							<input type="text" class="form-control" id="planilla_anio" name="planilla_anio" placeholder="planilla_anio">
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
