<?php include("seguridad.php") ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.2 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play|Yanone+Kaffeesatz|ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/extra.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Buttons DataTables -->
    <link rel="stylesheet" href="css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<script>
    $(document).ready(function(){
    $('#myTable').DataTable();
});

    
</script>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <?php include("menu.php"); ?>
    </div>
    <!-- Start Welcome area -->
<section id="bot">
  
                        </section>}
                        <section id="modal">
                            <a href="reportes.php" id="cerr"><i class="fa fa-times-circle-o"  aria-hidden="true"></i></a>

    <?php 
    include ("conexion.php");
    $id=$_REQUEST['Id_reporte'];
    
        $sql="SELECT * from reportes ORDER BY Id_reporte ASC
         INNER JOIN Foliorel 
        ON reportes.Id_reporte = Foliorel.id_reporte
        ";
        $result = mysqli_query($conexion,$sql);
     while($row=mysqli_fetch_array($result)){
$numeroConCeros = str_pad($row['Id_reporte'], 6, "0", STR_PAD_LEFT);
     if ($row['Id_reporte']==$id) {
         # code...
    
        
     ?>
   
     <section id="centro">
           <article>REPORTE</article>
    <label><span>Folio:</span>&nbsp;&nbsp;<?php  echo "REP".$numeroConCeros; ?></label>
    <label><span>Fecha:</span>&nbsp;&nbsp;<?php  echo $row['fecha']; ?></label>
    <label><span>Empresa:</span>&nbsp;&nbsp;<?php  echo $row['empresa']; ?></label>
    <label><span>Numero Economico:</span>&nbsp;&nbsp;<?php  echo $row['numec']; ?></label>
    <label><span>Persona que reporta:</span>&nbsp;&nbsp;<?php  echo $row['persona']; ?></label>
    <label><span>Descripcion:</span>&nbsp;&nbsp;<div id="parrafo"><p><?php  echo $row['descripcion']; ?></p></div></label>
   
<label><span>Folio relacional:</span><?php echo $row['folionu'] ?></label>
 
    </section>
    <br>
     <center>
    <?php echo "<a class='btn btn-warning' href='folionuevo.php?Id_reporte=".$row['Id_reporte']." ' >Agregar Folio Relacional</a> "; ?></center>
   <br>
   
 
                        </section>
    <?php } } ?>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>|
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- float JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <!--botones DataTables-->   
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.bootstrap.min.js"></script>
    <!--Libreria para exportar Excel-->
    <script src="js/jszip.min.js"></script>
    <!--Librerias para exportar PDF-->
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <!--Librerias para botones de exportación-->
    <script src="js/buttons.html5.min.js"></script>
</body>

</html>
