
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/camera.css">
        <link rel="stylesheet" href="css/google-map.css">
        <link rel="stylesheet" href="css/mailform.css">
        <link rel="stylesheet" href="css/color.css">
        <link rel="stylesheet" href="css/Pformulario.css">
        <!-- CSS MÃ�O -->
        <link rel="stylesheet" type="text/css" href="css/Pfuentes.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-migrate-1.2.1.js"></script><!--[if lt IE 9]>
        <html class="lt-ie9">
        <div style="clear: both; text-align:center; position: relative;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        </html>
        <script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/device.min.js"></script>
        <script src="js/PIluminar.js"></script>
        <script src="js/ValidacionForm.js"></script>

        <?php
        //Muestra el titulo de la ventana
        if(sizeof($_GET)>=1) {
            foreach ($_GET as $indice => $a) {
                echo "<title>Wild Safary - " . $indice . "</title>";
            }
        }else{
            echo "<title>Wild Safary</title>";
        }
        ?>
    </head>
    <body>
    <div class="page">
    <!--
    ========================================================
                                HEADER
    ========================================================


    -->
    <header>
        <div class="container">
            <div class="brand">
                <h1 class="titulo"><a href="./">fWILD SAFARIa</a></h1>
             </div>  
            <a href="callto:900999999" class="fa-phone"><strong>900 999 999</strong></a>
            <p><strong>Bienvenido a Wild Safari, llÃ¡menos para cualquier informaciÃ³n</strong></p>
        </div>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <nav class="nav">
                    <ul id="menu" data-type="navbar" class="sf-menu">
                        <li><a href="./" title="PÃ¡gina principal">HOME</a>
                        </li>
                        <li><a href="?actividades"  title="Nuestras actividades">ACTIVIDADES</a>
                        </li>
                        <li><a href="?galeria"  title="Imagenes de nuestro safary">GALERIA</a>
                            <ul>
                                <li><a href="#zona1">ZONA 1</a></li>
                                <li><a href="#zona2">ZONA 2</a></li>
                                <li><a href="#zona3">ZONA 3</a></li>
                                <li><a href="#zona4">ZONA 4</a></li>
                            </ul>
                        </li>
                        <li><a href="?contacto"  title="Contacte con nosotros">CONTACTO</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

