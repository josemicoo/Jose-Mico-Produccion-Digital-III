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
                <h5><strong>??5 obras de arte de Land Art que no podes dejar de ver!</strong></h5>
                <p>Te tramos algunas obras de arte Land Art que como fanatico, no podes dejar de ver. Respecto al origen de la palabra, el t??rmino<strong> land art </strong> fue elaborado y popularizado gracias al t??tulo de la exposici??n<strong> Earthworks</strong>, del artista estadounidense <strong> Robert Smithson </strong> en la Dwan Gallery de Nueva York en 1968, en la que se presentaron registros de sus proyectos a gran escala realizados con materiales naturales en terrenos amplios, y la exposici??n Earth, Wind, Fire, Water en el Museo de Bellas Artes de Boston en 1969, donde participaron artistas como Richard Long, Christo y Jeanne-Claude y el propio Smithson, entre muchos otros.

                    <br>A continuaci??n, presentamos 5 proyectos que son referentes imprescindibles para entender el land art. El orden es cronol??gico.</p>
            </div>
        </div>
    </div>
<hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5> <strong><em>Una l??nea trazada al caminar, de Richard Long (1967) </em> </strong></h5>
                <p>Buena parte de los creadores relacionados con el land art convergen en el uso de alg??n tipo de material natural o industrial dispuesto de cierta forma en el entorno, o el empleo de alg??n tipo de maquinaria para modificar el paisaje. Sin embargo, el trabajo de Richard Long fuera de las galer??as ha destacado por usar un elemento adicional para significar el espacio: su propio cuerpo.

                <br>Un ejemplo de ello son las acciones derivadas de A Line Made by Walking (1967) en la que, como su nombre lo indica, es posible ver una l??nea sobre ??reas verdes o caminos monta??osos realizada solamente por la caminata del artista por la zona.

                <br>Si bien las intervenciones de Long en la naturaleza no son permanentes, el registro fotogr??fico nos permite apreciar de qu?? forma una acci??n tan sencilla puede ocasionar un cambio notable en el paisaje, a la vez que nos invita a poner m??s atenci??n en otros actos humanos que, de manera directa o indirecta, deterioran el entorno.</p>
            
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

                 <p>Considerado como el pionero del land art,<strong> Robert Smithson (1938-1973)</strong> fue un artista comprometido con un nuevo tipo de producci??n art??stica, lejana de la frialdad del arte minimalista, en la que los lugares inhabitados fueran los motivos de trabajo y el espacio de exhibici??n.

               <br> En su corta pero prol??fica carrera,<strong> Smithson produjo distintas intervenciones en espacios naturales y poco transformados por la presencia de las ciudades. </strong>El ejemplo m??s destacado es Spiral Jetty, realizada en el Gran Lago Salado del desierto de Utah, en Estados Unidos, con poco m??s de 5 000 toneladas de basalto negro, transportadas por diferentes m??quinas.

             <br>   En Spiral Jetty, Smithson contempl?? los agentes clim??ticos y qu??micos del agua como parte del proceso que, a mediano y largo plazo, permitir??an una integraci??n de la forma con el ambiente: con el paso del tiempo, las rocas oscuras se tornaron claras por las sales del lago, adem??s de formar una capa de cieno que las hac??a ver como si fueran parte natural del entorno.  </p>
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
                 <h5> <strong><em> Campo de rel??mpagos, de Walter de Maria (1977) </em> </strong></h5>

                 <p>El artista estadounidense <strong> Walter de Maria </strong> tuvo una prol??fica carrera en el campo de la escultura y la instalaci??n, influido por los procesos del arte conceptual, el minimal y Fluxus; movimientos con los que estuvo en contacto directo despu??s de que se mudara a Nueva York en 1960 al concluir sus estudios de maestr??a.

                   <br> Con una reconocida carrera en el circuito galer??stico, <strong>Walter de Maria decidi?? explorar nuevos formatos de exposici??n m??s all?? de los espacios cerrados.</strong> De esta forma, <strong>a mediados de la d??cada de 1970 comenz?? la planeaci??n de Lightning Field: una instalaci??n conformada por 400 postes de acero colocados en un ??rea de un kil??metro cuadrado en Nuevo Mexico.</strong>

                  <br>  A pesar de que el proyecto lleve por t??tulo Lightning Field, el prop??sito de De Maria no era hacer una pieza para atraer rel??mpagos, sino que fuera un espacio que despertara el inter??s del p??blico por la zona y as?? pudiera contemplar las particularidades del paisaje semides??rtico ???colores, sonidos, geograf??a, etc??tera??? frente a la monoton??a gris de la urbe.

                   <br> Cada cierto tiempo, la Dia Art Foundation ???encargada de la preservaci??n de la obra??? abre su agenda para recibir a personas interesadas en experimentar la vida en dicho espacio. Puedes consultar los detalles en su p??gina oficial. </p>
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

                    <p>Con una formaci??n como artista y arquitecta, <strong>Maya Lin (Estados Unidos, 1959)</strong> tiene una amplia trayectoria realizando proyectos en los que interviene de manera directa en la forma del terreno, los cuales han sido reconocidos con diversos premios y expuestos en museos de diferentes partes del mundo.

                     <br>   Pero sin duda su proyecto m??s destacado lo realiz?? en 1981, cuando, con tan s??lo 21 a??os y siendo todav??a estudiante en la Universidad de Yale,<strong> Lin asombr?? al mundo cuando se dio a conocer que su proyecto para el Memorial a los veteranos de Vietnam para Washington DC era el ganador de un concurso abierto.</strong>

                      <br>  Con un dise??o minimalista, el memorial consiste en<strong> una irrupci??n descendente y angular en una ??rea verde del National Mall de Washington, donde se puede ver un largo muro de granito negro en el que est??n grabados los nombres de 58 261 soldados fallecidos durante la guerra de Vietnam.</strong>

                      <br>  Este proyecto de Maya Lin es un referente para comprender los alcances del land art como posicionamiento pol??tico, cultural y social en un contexto espec??fico, a diferencia de artistas como Robert Smithson o Richard Long, quienes procuraron trabajar en regiones alejadas del entorno urbano.</p>
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
                <h5> <strong><em> Campo de trigo-Una confrontaci??n, de Agnes Denes (1982) </em> </strong></h5>

                <p><strong>Agnes Denes</strong> renov?? la concepci??n del land art a inicios de la d??cada de 1980 al darle una perspectiva pol??tica al trabajo art??stico en y con el entorno. En 1982, empez??<strong> Wheatfield-A Confrontation: un proyecto de cuatro meses que consisti?? en la siembra de dos acres de trigo en una zona de aparcamiento de camiones para la construcci??n en Manhattan, Nueva York,</strong> a unas calles de Wall Street y el Wall Trade Center ???de cara a la Estatua de la Libertad. La siembra de las semillas de trigo involucr?? una limpieza del terreno y la fertilizaci??n del mismo.</p>
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
                <h5 class="text-center txt-footer mt-5">Jos?? Mic?? - Producci??n Digital III</h5>
                <p class="text-center txt-footer  ">?? 2?? cuatrimestre 2021 - Todos los derechos reservados</p>
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
