<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>#4SCD - Indivisible Knowledge</title>

    <!--++++++++++Estilos++++++++++++++++++++-->
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/pagesNavbar.css">
    <link rel="stylesheet" type="text/css" href="css/ponentes.css">
    <!--++++++++++Estilos responsive++++++++++++++++++++-->
    <link rel="stylesheet" type="text/css" href="css/responsiveMenu.css">
    <link rel="stylesheet" type="text/css" href="css/responsiveHome.css">
    <!--++++++++++Fuentes++++++++++++++++++++-->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--++++++++++Javascript++++++++++++++++++++-->
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>

    <!--++++++++++JS plugins++++++++++++++++++++++++-->
    <script type="text/javascript" src="js/vendors/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/vendors/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/menuresponsive.js"></script>
    <script>
    $(document).ready(function(){
        $('#fullpage').fullpage({
          verticalCentered: true
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#owl").owlCarousel({
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem: true,
          autoPlay: 2000,
          pagination: false,
          stopOnHover: true,
          autoHeight: true,
        });

        var owl = $("#owl");

        owl.owlCarousel({
            items : 1, //10 items above 1000px browser width
            itemsDesktop : [1000,1], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,1], // betweem 900px and 601px
            itemsTablet: [600,1], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });
        $(".next").click(function(){
          owl.trigger('owl.next');
        })
        $(".prev").click(function(){
          owl.trigger('owl.prev');
        })
    });
    </script>
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
    <!--++++++++++JS custom++++++++++++++++++++++++-->
    <script type="text/javascript" src="js/animations.js"></script>
  </body>
</html>
