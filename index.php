<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>#4SCD - Indivisible Knowledge</title>

    <!--++++++++++Estilos++++++++++++++++++++-->
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/pagesNavbar.css">
    <link rel="stylesheet" type="text/css" href="css/ponentes.css">
    <!--++++++++++Fuentes++++++++++++++++++++-->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--++++++++++Javascript++++++++++++++++++++-->
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>

    <!--++++++++++JS plugins++++++++++++++++++++++++-->
    <script type="text/javascript" src="js/vendors/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/vendors/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
    <script>
    $(document).ready(function(){
        $('#fullpage').fullpage({
          verticalCentered: true
        });
      });
    </script>
    <!--++++++++++JS plugins++++++++++++++++++++++++-->
  </head>
  <body>
    <!--<nav>
      <ul>
        <li><a href="index.php?page=ponentes">ponentes</a></li>
        <li><a href="index.php?page=scd">scd</a></li>
        <li><a href="index.php?page=ponentes">ponentes</a></li>
      </ul>
    </nav>-->
    <?php
      if(isset($_GET['page'])){
        switch ($_GET['page']){
          case "4scd":
            include_once ("4scd.php");
          break;
          case "ponentes":
            include_once ("ponentes.php");
          break;
          case "programa":
            include_once ("programa.php");
          break;
          case "localizacion":
            include_once ("localizacion.php");
          break;
          case "entradas":
            include_once ("entradas.php");
          break;
          case "prensa":
            include_once ("prensa.php");
          break;
          case "contacto":
            include_once ("contacto.php");
          break;
        }
      } else {
        include ("home.html");
      }
    ?>
  </body>
</html>
