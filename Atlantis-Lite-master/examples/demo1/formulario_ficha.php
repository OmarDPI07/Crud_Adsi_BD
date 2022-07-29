<?php include ("cabesera.php");?>
<?php include ("menu.php");?>

<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Formulario de Registro</h2>
								<h5 class="text-white op-7 mb-2">perfil de usuario - Registro Ficha</h5>
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
								<h4>Registro</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
									<li class="breadcrumb-item  aria-current="page">Formulario de registro</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-black h4">Crear Nueva Ficha</h4>
						</div>
					</div>
					<form action="guardar_ficha.php" method="post">
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Numero de Ficha</label>
							<div class="col-sm-12 col-md-3">
							<input id="nombre" class="form-control" type="number"  min="9999" max="999999999999" value="" placeholder="N° de ficha" required name="ficha_numero" />
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Ficha programa</label>
							<?php
                include('funciones.php');
                $miconexion=conectar_bd('','crud');
                $resultado=consulta($miconexion,"SELECT * FROM `programa`");
                ?>
                <select name="progra_id">
                    <?php
                    while($fila=$resultado->fetch_object())
            
                        {
                            ?>
                            <option  value="<?php echo $fila->	progra_id ?>"><?php echo $fila->progra_nombre ?></option name="progra_id" >
							
                            <?php
                        }
                    ?>
                </select>
						</div>
						<button type="submit" class="btn btn-Primary">Registrar</button>
					</form>
				</div>
				<!-- Default Basic Forms End -->

				<!-- horizontal Basic Forms Start -->
				
				<!-- horizontal Basic Forms End -->

				
				<!-- Input Validation End -->

			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>