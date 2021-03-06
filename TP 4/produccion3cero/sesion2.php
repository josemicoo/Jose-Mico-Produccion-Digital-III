<?php session_start (); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sesion Exitosa - LandArt</title>
</head>

<body>
    
<header>
      <div class="container">

        <div class="container mt-2 logo">
          <a href="index.html" id="aLogo">
            <img src="images/logo.png" alt="">
            </a>
      </div>

      <ul class="nav mt-3 text-center-right">
        <li class="nav-item">
          <a class="nav-link aNav" aria-current="page" href="subpaginas/iniciativa.html">Iniciativa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="subpaginas/historia.html">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="subpaginas/obras.html">Obras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="subpaginas/museos.html">Museos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="subpaginas/contacto.html">Contacto</a>
        </li>
       
      </ul>

      </div>



    <div class="container">
      <form action="resultados_buscar.php" class="text-center" method="post">
        <label>Buscar Artistas
        <input type="search" name="buscar" style="color: black;" placeholder="Buscar..." />
        <input type="submit" value="Enviar">
        </label>
        </form>

        
      </div>

    </header>

    <div class="container">
      <div class="row">
        <div class="col-12">
            <img src="images/bienvenido.png" style="width:100%" class="mt-3" alt="">
        </div>

        <div class="col-12">
            <a href="sesion3.php">
                <button type="button" style="width:50%; margin-right:25%; margin-left: 25%" class="btn btn-primary mt-4">Ir al panel</button>
            </a>
        </div>
      </div>

      
      <footer class="mt-5">
        <div class="container footer">
          <div class="row">
            <div class="col-lg-12">
              <h5 class="text-center txt-footer mt-5">Jos?? Mic?? - Producci??n Digital III</h5>
              <p class="text-center txt-footer  ">?? 2?? cuatrimestre 2021 - Todos los derechos reservados</p>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
