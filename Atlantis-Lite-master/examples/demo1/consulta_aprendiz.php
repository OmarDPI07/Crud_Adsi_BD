<?php include ("cabesera.php");?>
<?php include ("menu.php");?>
<?php 
    include("conectar.php");
    $con=conectar();

    $sql="SELECT *  FROM aprendices";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Consultas</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/mystyle1.css" /> 

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Formulario de Consulta</h2>
								<h5 class="text-white op-7 mb-2">perfil de usuario - Consultar Programa</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div>
						</div>
					</div>
				</div>
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Consultas</h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Export Datatable start -->
                <div>
                    <br>
                    <div id="div2"> 
                        <div id="div3" >
                            <form name="formulario" role="form" method="post">
                                <div class="col-md-12">
                                    <strong class="lgris">Ingrese criterio de busqueda.</strong>
                                    <br><br>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                        <input class="form-control" type="number" name="apre_numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" />
                                        </div>
                                        <br>
                                        <div class="form-group col-md-3"> 
                                            <input class="form-control" style="text-transform:uppercase;" type="text" name="apre_nombres" value="" placeholder="Nombres" />
                                            </div>
                                            <br>
                                            <div class="form-group col-md-3">
                                                <input class="form-control" style="text-transform:uppercase;" type="text" name="apre_apellidos" value="" placeholder="Apellidos" />
                                            </div>
                                            <br>
                                            <div class="form-group col-md-3">
                                            <input class="btn btn-Primary btn-lg" type="submit" value="Consultar">
                                            </div>
                                        </div>
                                    <br>
                                </div>
                            </form>
                        <br>
                    </div>
                <div>
                <?php
                if ($_POST)
                {
                include('funciones.php');
                $apre_numid=$_POST['apre_numid'];
                $apre_nombres=$_POST['apre_nombres'];
                $apre_apellidos=$_POST['apre_apellidos'];
                $miconexion=conectar_bd('', 'crud');
                $resultado=consulta($miconexion,"SELECT *FROM aprendices WHERE 
                trim(apre_numid) like '%{$apre_numid}%' and (trim(apre_nombres) like '%{$apre_nombres}%' and trim(apre_apellidos) like '%{$apre_apellidos}%')");
                if($resultado->num_rows>0)
                { 
				echo"<table border='1'>
				<tr>
				<th>Id </th>
				<th>Tipo de documento</th>
				<th>Numero de documento</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Numero de ficha</th>
				</tr>";
                while ($fila = $resultado->fetch_object())
                {   
					echo"<tr>";
					echo"<td>".$fila->apre_id."</td>";
					echo"<td>".$fila->apre_tipoid."</td>";
					echo"<td>".$fila->apre_numid."</td>";
					echo"<td>".$fila->apre_nombres."</td>";
					echo"<td>".$fila->apre_apellidos."</td>";
					echo"<td>".$fila->apre_direccion."</td>";
					echo"<td>".$fila->apre_telefono."</td>";
					echo"<td>".$fila->ficha_numero."</td>";
					echo"</tr>";
					
                }
				echo"</table>";
                }
                else
                {
					echo '<script language="javascript">';
					echo 'alert("No existen registros del aprendiz");';
					echo 'window.location="consulta_aprendiz.php";';
					echo '</script>';
                }
                $miconexion->close();
                }
                ?>
				<!-- Export Datatable End -->
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>