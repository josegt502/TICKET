<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["user_id"])) {
?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<title>Nuevo Ticket</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>
		<!-- contenido -->
		<div class="page-content">
			<div class="container-fluid">
				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Nuevo Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Nuevo Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">
					<p>
						Desde esta ventanda podra crear un <code>nuevo ticket</code>
					</p>
					<h5 class="m-t-lg with-border">Ingreso de Solicitud</h5>
					<div class="row">
						<form method="post" id="ticket_form" enctype="multipart/form-data">
							
							<div class="col-lg-4">
								<label class="form-label semibold" for="exampleInput">Seleccionar Tienda</label>
								<select id="Id_tienda" name="Id_tienda" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
								</select><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-ufoa-container" aria-owns="select2-ufoa-results" aria-activedescendant="select2-ufoa-result-xk46-Catprep test"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
								<br>
								<br>
							</div>
							<div class="col-lg-4">
								<label class="form-label semibold" for="exampleInput">Categoría Error</label>
								<select id="cat_error" name="Id_error" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
								</select><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-ufoa-container" aria-owns="select2-ufoa-results" aria-activedescendant="select2-ufoa-result-xk46-Catprep test"><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
								<br>
								<br>
							</div>
							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="ticket_titulo">Titulo Error</label>
									<input type="text" class="form-control" id="ticket_titulo" name="ticket_titulo" placeholder="Escribe un titulo">
									<small class="text-muted">Título de Falla o error</small>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="ticket_descrip">Descripción</label>
									<div class="summernote-theme-1">
										<textarea id="ticket_descrip" name="ticket_descrip" class="summernote" name="name"></textarea>
									</div>
								</fieldset>
								<div class="col-lg-12">
									<button type="submit" name="action" value="Enviar" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
									
								</div>
							</div>
							<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION["user_id"] ?>">
						</form><!--.fin form -->
					</div><!--.row-->
				</div>
			</div><!--.container-fluid-->
		</div><!--.page-content -->

		<!-- contenido -->

		<?php require_once("../MainJs/js.php"); ?>
		<script type="text/javascript" src="nuevoticket.js"></script>
	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>