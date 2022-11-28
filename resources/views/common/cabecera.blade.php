<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../../../public/assets/vendors/bootstrap/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="../../../public/assets/vendors/fontawesome-free/css/all.css" type="text/css">
		<!-- <link rel="stylesheet" href="..assets/css/alerts-css.css" type="text/css"> -->
        <style type="text/css">
            .card
            { 
                background:rgba(255,255,255,0.9); 
            }

            body 
            {
                background-image: url("../../../public/assets/media/imgs/fondo.png");   
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
		<title>Siscarcoop&reg;</title>
	</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../../../public/assets/media/imgs/fenicootaxiof.png" width="30" height="30" class="d-inline-block align-top" alt="">
                SISCARCOOP&reg;
            </a>
            <a class="navbar-brand" href="inicio.php"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- Modulo de ventas -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Ventas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ventas2.php"><i class="fas fa-handshake"></i>&nbsp;Facturar</a>
                            <a class="dropdown-item" href="arqueo.php"><i class="fas fa-cash-register"></i>&nbsp;Arqueo de Caja</a>
                            <a class="dropdown-item" href="admon_fact.php"><i class="fas fa-book-open"></i>&nbsp;Admon Factura</a>
                            <a class="dropdown-item" href="anuladas.php"><i class="fas fa-ban"></i>&nbsp;Anuladas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="clientes.php"><i class="fas fa-users"></i>&nbsp;Clientes</a>
                            <a class="dropdown-item" href="organizacion.php"><i class="fas fa-building"></i>&nbsp;Organizacion</a>
                            <a class="dropdown-item" href="vehiculos.php"><i class="fas fa-car"></i>&nbsp;Vehiculos</a>
                        </div>
                    </li>

                    <!-- Modulo de almacen -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="mnu_almacen" role="button" data-toggle="dropdown" aria-expanded="false">
                        Almacen
                        </a>
                        <div class="dropdown-menu" aria-labelledby="mnu_almacen">
                        <a class="dropdown-item" href="ajustes.php"><i class="fas fa-exchange-alt"></i>&nbsp;Ajustes</a>
                        <a class="dropdown-item" href="traslados.php"><i class="fas fa-truck"></i>&nbsp;Traslados</a>
                        <a class="dropdown-item" href="turnos.php"><i class="fas fa-clipboard-check"></i>&nbsp;Despachar</a>
                        <a class="dropdown-item" href="reportes/almacen/rotacioncsv.php"><i class="fas fa-spinner"></i>&nbsp;Rotación</a>

                        </div>
                    </li>
      
                    <!-- Modulo de compras -->
	                <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="mnu_almacen" role="button" data-toggle="dropdown" aria-expanded="false">
        	                Compras
                        </a>
                        <div class="dropdown-menu" aria-labelledby="mnu_almacen">
                            <a class="dropdown-item" href="catalogo.php"><i class="fas fa-box-open"></i>&nbsp;Catálogo</a>
                            <a class="dropdown-item" href="entradasalidamerccont.php"><i class="fas fa-tasks"></i>&nbsp;Ajustes Contables</a>
                            <a class="dropdown-item" href="rem.php?tipo=em"><i class="fas fa-cart-plus"></i>&nbsp;REM</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="rem.php?tipo=em"><i class="fas fa-user-minus"></i>&nbsp;Diferencias</a>
                        <div>
                    </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="mnu_almacen" role="button" data-toggle="dropdown" aria-expanded="false">
          Contabilidad
        </a>
        <div class="dropdown-menu" aria-labelledby="mnu_almacen">
          <a class="dropdown-item" href="catalogo_contab2.php"><i class="fas fa-calculator"></i>&nbsp;Catálogo</a>
          <a class="dropdown-item" href="comprobantes_tipos.php"><i class="fas fa-book"></i>&nbsp;Comprobantes</a>
        </div>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="mnu_fenimarket" role="button" data-toggle="dropdown" aria-expanded="false">
          Fenimarket
        </a>
        <div class="dropdown-menu" aria-labelledby="mnu_fenimarket">
          <a class="dropdown-item" href="preciosmk.php"><i class="fas fa-tags"></i>&nbsp;Precios</a>
          <a class="dropdown-item" href="recetas.php"><i class="fas fa-utensils"></i>&nbsp;Recetas</a>
        </div>
      </li>


    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown mr-4 active">
        <a class="nav-link" href="#" id="liveToastBtn" role="button">
          <i class="fas fa-bell text-danger"></i>&nbsp;&nbsp;Alertas
        </a>
      </li>
	    <li class="nav-item">
        <span class="navbar-text">PRUEBAS | ES</span>
      </li>
    </ul>
  </div>
</nav>
<div aria-live="polite" aria-atomic="true" style="position:relative;">
	<div style="position: absolute; top: 0; right: 80px;">
		<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000" data-autohide="false">
			<div class="toast-header bg-warning">
				<strong class="mr-auto">0401.0001</strong>
				<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="toast-body">Descripcion actualizada</div>
		</div>

		<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000" data-autohide="false">
			<div class="toast-header bg-warning">
				<strong class="mr-auto">0401.0002</strong>
				<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="toast-body">Precio Actualizado</div>
		</div>
	</div>
</div>