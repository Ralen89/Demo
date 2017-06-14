<?php
    $Enlace = "http://www.google.com.mx";
    echo "Demo";
    echo "Prueba 001";
    echo "Prueba 002"; //PanelPublicidad
    echo "Prueba 003"; // Rafael Altamirano
    echo "Prueba 004"; //PanelPublicidad

    echo "Prueba 005"; //PanelPublicidad

    echo "Prueba 006"; //PanelPublicidad
    echo "Prueba 007"; //PanelPublicidad
    echo "Prueba 008"; //PanelPublicidad
    echo "Prueba 009"; //PanelPublicidad

    //Demo VS CODE V1

    $Conexion = "Demo";
    $db = "pruebas";

    $conexion_base = "interbase01";
    
?>


<html xmlns="http://www.w3.org/1999/xhtml" lang="ES">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Aerolineas demo - Reservas - Carga de datos y selecci&oacute;n de asiento</title>
		<!-- START ESTILOS -->
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css"><!-- Bootstrap -->
		<link rel="stylesheet" href="lib/jquery-ui-1.11.2/jquery-ui.css"><!-- Jquery UI -->
		<link rel="stylesheet" href="styles/main.css" /><!-- Estilos Generales -->
		<!-- END ESTILOS -->
		
		<!-- START SCRIPTS -->
		<script type="text/javascript" src="lib/jquery-1.11.1.js"></script><!-- Jquery -->
		<script type="text/javascript" src="lib/bootstrap/js/bootstrap.js"></script><!-- Bootstrap -->
		<script type="text/javascript" src="lib/jquery-ui-1.11.2/jquery-ui.js"></script><!-- Jquery UI -->
		<script type="text/javascript" src="js/reserva.js"></script><!-- Scripts de esta opcion -->
		<!-- END SCRIPTS -->

	</head>
	
	<body>
		<!-- START LOAD BLOCK -->
		<?php include("load_block.php"); ?>
		<!-- END LOAD BLOCK -->
		
		<!-- START NAV BAR -->
		<?php include("nav_bar.php");?>
		<!-- END NAV BAR -->
		
		<div id='contenedorPrincipal' class="container maincont">


		</div>
	</body>
</html>