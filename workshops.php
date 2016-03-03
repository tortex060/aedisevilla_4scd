<?php
  include ("navbar.html");
 ?>
 <header>
   <div class="page-title">
     <h2>WORKSHOPS</h2>
   </div>
 </header>

 <script type="text/javascript">
   $(document).ready(function(){
     $("header").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
     //$(".nav-container").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
     $('#dron').css({"background":"url(\"/images/workshops/dron.jpg\") no-repeat center", "background-size": "cover"});
     $('#solidwork').css({"background":"url(\"/images/workshops/solidworks.jpg\") no-repeat center", "background-size": "cover"});
     $('#dron-body').hide();
     $('#solidwork-body').hide();
   });

 </script>

 <div class="page-container">
   <div class="page-content">

     <div class="workshop-container">
       <div class="workshop-banner" id="dron" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2>Introducción y montaje de drones</h2>
         </div>
       </div>
       <div class="workshop-content" id="dron-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-dron" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>Este workshop pretende ser una introducción a este apasionante hobby, donde asesoraremos y enseñaremos todo lo que se necesita saber sobre el uso y aplicaciones de estos vehículos. Aprender desde cero a conocer reglamentación, tipos de multirrotores y montar un dron multirotor basándote en uno de dos de los modelos más conocidos y versátiles, en dos de las modalidades más conocidas; dron de carreras o dron utilitario.</p>
         <p>Además conoceremos distintas técnicas de vuelo, materiales y elementos asociados así como la demostración de nuestros propios modelos impresos en 3D gracias a nuestra máquina de impresión de adicción de ABS, la cual seremos capaces de ver funcionar y producir piezas para el drone durante el curso.</p>
         <p>Mostraremos de forma transparente todas las posibilidades que ofrecen estos vehículos de control remoto, tanto en cuanto a características técnicas, como posibles modificaciones, diseño, reparación, fabricación de modelos por impresión 3D, etc.</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/santi-tudela.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>Antonio J. Sanguino y Santos Tudela, Ingenieros en Diseño Industrial y amplia experiencia en sectores aeronáuticos y comercio internacional, imparte un Workshop para la #4SCD sobre la instalación, uso y aplicaciones de drones así como uso de impresoras 3D para elementos de uso cotidiano y aplicados a la tecnología del vuelo con multirrotor. Expondrán conceptos detallados sobre estas tecnologias en los que se podrán ver distintas aplicaciones y el presente podrá interactuar con todos los materiales y elementos usados así como nociones básicas de vuelo de drones y uso de impresores 3D comerciales.</p>
             <p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>
           </div>
         </div>
         <h4>Material necesario</h4>
         <p>Los asistentes pueden llevarse su propio ordenador para diseñar piezas que después se podrán imprimir en la impresora 3D.</p>
         <h4>25 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en el CICUS el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/hYxNGCBkY3w" target="_blank">VER MAPA</a></p>
       </div>
     </div>

     <div class="workshop-container">
       <div class="workshop-banner" id="solidwork" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2>Solidworks Simulation</h2>
         </div>
       </div>
       <div class="workshop-content" id="solidwork-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-solidwork" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>Puedes tener una idea de producto genial en tu cabeza pero... ¿qué pasa si se rompe en el primer uso? ¿sabes hasta qué temperatura puede seguir funcionando? ¿y si se cae? ¿soportará la fuerza que le aplique el usuario? Como diseñador industrial debes ser capaz de que tu producto perdure en el tiempo, que soporte los esfuerzos de su uso y que el cliente quede satisfecho con su compra. Para ello es necesario hacer incontables tests de caídas, de frecuencia, de uso, de fatiga, etc. todos ellos muy costosos y que retrasan la salida del producto al mercado. En este pequeño curso de 4 horas te enseñaremos cómo SOLIDWORKS es capaz de realizar todas estas simulaciones de forma muy sencilla en tu ordenador a coste cero, paralelas al proceso de diseño y que asegurará que tu producto final sea adecuado para el uso y si es un buen diseño, que sea un éxito en el mercado.</p>
         <p>En este curso también haremos una presentación del nuevo software de Dassault Systèmes desarrollada por diseñadores para diseñadores que se lanzará próximamente en España, el SOLIDWORKS Industrial Design, una herramienta que es la leche y que nos facilitará la vida a los diseñadores industriales.</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/manuel-fernandez.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>Manuel Fernández trabaja actualmente como soporte técnico y formador para la empresa ORIGEN, proveedor oficial de SOLIDWORKS, certificado por Dassault Systèmes como instructor de Soldiworks Simulation y Mechanical Design. Se ha formado en la Escuela Politécnica Superior de Sevilla como Ingeniero de Diseño Industrial compaginando sus estudios con los de música en el Conservatorio Superior de Música Manuel Castillo. En 2010 le fue otorgada la Beca Kemper por su excelencia académica para perfeccionar los estudios de Ingeniería, Música y Arte en el prestigioso Phillips Academy Andover (Boston, MA). En 2013 fue nombrado presidente de AEDI, puesto que ocupó hasta el año pasado luchando por promover el diseño en Andalucía.</p>
             <!--<p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>-->
           </div>
         </div>
         <h4>Material necesario</h4>
         <p></p>
         <h4>PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en la Escuela Politécnica Superior de Sevilla el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/DHbYec3H8qS2" target="_blank">VER MAPA</a></p>
       </div>
     </div>



   </div>
 </div>
<script type="text/javascript">
  function showWorkshop(id){
    switch (id) {
      case "dron":
        $("#dron-body").slideDown();
        $("#dron").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

      break;
      case "solidwork":
        $("#solidwork-body").slideDown();
        $("#solidwork").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

        var posicion = $("#solidwork").offset().top;
        $("html, body").animate({
         scrollTop: posicion - 115
       }, 1000)

      break;
      default:

    }
  }
  function closeWorkshop(id){
    switch (id) {
      case "close-dron":
        $("#dron-body").slideUp();
        $("#dron").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      case "close-solidwork":
        $("#solidwork-body").slideUp();
        $("#solidwork").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      default:

    }
  }
</script>
