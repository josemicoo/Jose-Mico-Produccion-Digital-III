<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultados de la búsqueda</title>
<link href="CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>

<header>
      <div class="container">

        <div class="container mt-2 logo">
          <a href="index.html" id="aLogo">
            <img src="images/logo.png" alt="">
            </a>
      </div>

      <ul class="nav mt-3">
        <li class="nav-item">
          <a class="nav-link aNav" aria-current="page" href="iniciativa.html">Iniciativa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="historia.html">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="obras.html">Obras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="museos.html">Museos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link aNav" href="contacto.html">Contacto</a>
        </li>
      </ul>

      </div>
    </header>

<section>
	<div class="container">
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>

<br>
<article style="width:80%;margin:0 auto;">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] ;
			echo $resultados['bio'] ;
		
		?>
    </p>
	<img style="width:50%; margin-right:25%; margin-left:25%; margin-top: 5%" src=" <?php echo $resultados['imagen']; ?>" alt="">
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>

</div>

</body>
</html>