<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["user_id"])){
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
<title>Consultar Ticket</title>
</head>
<body class="with-side-menu">

<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../MainNav/nav.php");?>
		<!-- contenido -->
	<div class="page-content">
		<div class="container-fluid">
		<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Consultar Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Consultar Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>
				<div class="box-typical box-typical-padding"> 
					<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
							<tr>
								<th style="width: 10%;">Id_ticket</th>
								<th style="width: 15%;">nombre_tienda</th>
								<th class="d-none d-sm-table-cell" style="width: 20%;">user_nom</th>
								<th class="text-center" style="width: 15%;">ticket_titulo</th>
								<th class="text-center" style="width: 15%;">Fecha Creacion</th>
								<th class="text-center" style="width: 15%;">ticket_descrip</th>
								<th class="text-center" style="width: 15%;"></th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
		</div><!--.container-fluid-->
	</div><!--.page-content -->

	<!-- contenido -->

    <?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="consultarticket.js"></script>
</body>
</html>
<?php
	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>