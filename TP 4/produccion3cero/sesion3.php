<?php
session_start();

if(array_key_exists("logeado", $_SESSION) and $_SESSION["logeado"]=="ok"){
   
//$_SESSION["logueado"] = $_POST['nombre'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="CSS/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Panel de Usuario - LandArt</title>
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
            <div class="col-md-10">
                <h3>Hola: 
                <?php echo $_SESSION['nombre']; ?></h3>
                <p>&nbsp;</p>
            </div>

            <div class="col-md-2">
                <a style="color:red; font-family: Montserrat" href="salir.php">Cerrar Sesion</a>
            </div>
        </div>
    </div>

   
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Contenido exclusivo para usuarios logueados</h4>
                <h5><strong>¡5 obras de arte de Land Art que no podes dejar de ver!</strong></h5>
                <p>Te tramos algunas obras de arte Land Art que como fanatico, no podes dejar de ver. Respecto al origen de la palabra, el término<strong> land art </strong> fue elaborado y popularizado gracias al título de la exposición<strong> Earthworks</strong>, del artista estadounidense <strong> Robert Smithson </strong> en la Dwan Gallery de Nueva York en 1968, en la que se presentaron registros de sus proyectos a gran escala realizados con materiales naturales en terrenos amplios, y la exposición Earth, Wind, Fire, Water en el Museo de Bellas Artes de Boston en 1969, donde participaron artistas como Richard Long, Christo y Jeanne-Claude y el propio Smithson, entre muchos otros.

                    <br>A continuación, presentamos 5 proyectos que son referentes imprescindibles para entender el land art. El orden es cronológico.</p>
            </div>
        </div>
    </div>
<hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5> <strong><em>Una línea trazada al caminar, de Richard Long (1967) </em> </strong></h5>
                <p>Buena parte de los creadores relacionados con el land art convergen en el uso de algún tipo de material natural o industrial dispuesto de cierta forma en el entorno, o el empleo de algún tipo de maquinaria para modificar el paisaje. Sin embargo, el trabajo de Richard Long fuera de las galerías ha destacado por usar un elemento adicional para significar el espacio: su propio cuerpo.

                <br>Un ejemplo de ello son las acciones derivadas de A Line Made by Walking (1967) en la que, como su nombre lo indica, es posible ver una línea sobre áreas verdes o caminos montañosos realizada solamente por la caminata del artista por la zona.

                <br>Si bien las intervenciones de Long en la naturaleza no son permanentes, el registro fotográfico nos permite apreciar de qué forma una acción tan sencilla puede ocasionar un cambio notable en el paisaje, a la vez que nos invita a poner más atención en otros actos humanos que, de manera directa o indirecta, deterioran el entorno.</p>
            
            </div>

            <div class="col-md-12">
                <img src="images/linea-trazada-long.jpg" style="width:60%; margin-right: 20%; margin-left:20%" class="text-center" alt="">
            </div>
        </div>
    </div>

<hr>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h5> <strong><em> Spiral Jetty, de Robert Smithson (1970) </em> </strong></h5>

                 <p>Considerado como el pionero del land art,<strong> Robert Smithson (1938-1973)</strong> fue un artista comprometido con un nuevo tipo de producción artística, lejana de la frialdad del arte minimalista, en la que los lugares inhabitados fueran los motivos de trabajo y el espacio de exhibición.

               <br> En su corta pero prolífica carrera,<strong> Smithson produjo distintas intervenciones en espacios naturales y poco transformados por la presencia de las ciudades. </strong>El ejemplo más destacado es Spiral Jetty, realizada en el Gran Lago Salado del desierto de Utah, en Estados Unidos, con poco más de 5 000 toneladas de basalto negro, transportadas por diferentes máquinas.

             <br>   En Spiral Jetty, Smithson contempló los agentes climáticos y químicos del agua como parte del proceso que, a mediano y largo plazo, permitirían una integración de la forma con el ambiente: con el paso del tiempo, las rocas oscuras se tornaron claras por las sales del lago, además de formar una capa de cieno que las hacía ver como si fueran parte natural del entorno.  </p>
            </div>

            <div class="col-md-12">
                <img src="images/spiral-lethy-smithson.jpg" style="width:60%; margin-right: 20%; margin-left:20%" class="text-center" alt="">
            </div>

        </div>
    </div>

<hr>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h5> <strong><em> Campo de relámpagos, de Walter de Maria (1977) </em> </strong></h5>

                 <p>El artista estadounidense <strong> Walter de Maria </strong> tuvo una prolífica carrera en el campo de la escultura y la instalación, influido por los procesos del arte conceptual, el minimal y Fluxus; movimientos con los que estuvo en contacto directo después de que se mudara a Nueva York en 1960 al concluir sus estudios de maestría.

                   <br> Con una reconocida carrera en el circuito galerístico, <strong>Walter de Maria decidió explorar nuevos formatos de exposición más allá de los espacios cerrados.</strong> De esta forma, <strong>a mediados de la década de 1970 comenzó la planeación de Lightning Field: una instalación conformada por 400 postes de acero colocados en un área de un kilómetro cuadrado en Nuevo Mexico.</strong>

                  <br>  A pesar de que el proyecto lleve por título Lightning Field, el propósito de De Maria no era hacer una pieza para atraer relámpagos, sino que fuera un espacio que despertara el interés del público por la zona y así pudiera contemplar las particularidades del paisaje semidesértico —colores, sonidos, geografía, etcétera— frente a la monotonía gris de la urbe.

                   <br> Cada cierto tiempo, la Dia Art Foundation —encargada de la preservación de la obra— abre su agenda para recibir a personas interesadas en experimentar la vida en dicho espacio. Puedes consultar los detalles en su página oficial. </p>
            </div>

            <div class="col-md-12">
                <img src="images/campo-relampagos-demaria.jpg" style="width:60%; margin-right: 20%; margin-left:20%" class="text-center" alt="">
            </div>
        </div>
    </div>

<hr>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h5> <strong><em> Memorial a los veteranos de Vietnam, de Maya Lin (1981) </em> </strong></h5>

                    <p>Con una formación como artista y arquitecta, <strong>Maya Lin (Estados Unidos, 1959)</strong> tiene una amplia trayectoria realizando proyectos en los que interviene de manera directa en la forma del terreno, los cuales han sido reconocidos con diversos premios y expuestos en museos de diferentes partes del mundo.

                     <br>   Pero sin duda su proyecto más destacado lo realizó en 1981, cuando, con tan sólo 21 años y siendo todavía estudiante en la Universidad de Yale,<strong> Lin asombró al mundo cuando se dio a conocer que su proyecto para el Memorial a los veteranos de Vietnam para Washington DC era el ganador de un concurso abierto.</strong>

                      <br>  Con un diseño minimalista, el memorial consiste en<strong> una irrupción descendente y angular en una área verde del National Mall de Washington, donde se puede ver un largo muro de granito negro en el que están grabados los nombres de 58 261 soldados fallecidos durante la guerra de Vietnam.</strong>

                      <br>  Este proyecto de Maya Lin es un referente para comprender los alcances del land art como posicionamiento político, cultural y social en un contexto específico, a diferencia de artistas como Robert Smithson o Richard Long, quienes procuraron trabajar en regiones alejadas del entorno urbano.</p>
            </div>

            <div class="col-md-12">
                <img src="images/veteranos-lin.jpg" style="width:60%; margin-right: 20%; margin-left:20%" class="text-center" alt="">
            </div>
        </div>
    </div>

<hr>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5> <strong><em> Campo de trigo-Una confrontación, de Agnes Denes (1982) </em> </strong></h5>

                <p><strong>Agnes Denes</strong> renovó la concepción del land art a inicios de la década de 1980 al darle una perspectiva política al trabajo artístico en y con el entorno. En 1982, empezó<strong> Wheatfield-A Confrontation: un proyecto de cuatro meses que consistió en la siembra de dos acres de trigo en una zona de aparcamiento de camiones para la construcción en Manhattan, Nueva York,</strong> a unas calles de Wall Street y el Wall Trade Center —de cara a la Estatua de la Libertad. La siembra de las semillas de trigo involucró una limpieza del terreno y la fertilización del mismo.</p>
            </div>

            <div class="col-md-12">
                <img src="images/trigo-agnes.jpg" style="width:60%; margin-right: 20%; margin-left:20%" class="text-center" alt="">
            </div>
        </div>    
    </div>

    
    <footer class="mt-5">
          <div class="container footer">
            <div class="row">
              <div class="col-lg-12">
                <h5 class="text-center txt-footer mt-5">José Micó - Producción Digital III</h5>
                <p class="text-center txt-footer  ">© 2° cuatrimestre 2021 - Todos los derechos reservados</p>
              </div>
            </div>
          </div>
        </footer>
<hr>
    <?php } else {
                header("Location: login.html");
            }//Cierra con el sitio ?>
</body>
</html>
