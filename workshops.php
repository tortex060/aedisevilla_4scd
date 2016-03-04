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
     $('#pensamiento').css({"background":"url(\"/images/workshops/pensamiento.jpg\") no-repeat center", "background-size": "cover"});
     $('#mapas').css({"background":"url(\"/images/workshops/mapas.jpg\") no-repeat center", "background-size": "cover"});
     $('#negocio').css({"background":"url(\"/images/workshops/negocio.jpg\") no-repeat center", "background-size": "cover"});
     $('#foto').css({"background":"url(\"/images/workshops/foto.jpg\") no-repeat center", "background-size": "cover"});
     $('#laser').css({"background":"url(\"/images/workshops/laser.jpg\") no-repeat center", "background-size": "cover"});

     $('#dron-body').hide();
     $('#solidwork-body').hide();
     $('#mapas-body').hide();
     $('#negocio-body').hide();
     $('#foto-body').hide();
     $('#laser-body').hide();
     $('#pensamiento-body').hide();
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
         <p>No es necesario.</p>
         <h4>20 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en la Escuela Politécnica Superior de Sevilla el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/DHbYec3H8qS2" target="_blank">VER MAPA</a></p>
       </div>
     </div>

     <div class="workshop-container">
       <div class="workshop-banner" id="mapas" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2 class="workshop-long-title">Mapas conceptuales: cómo hacer física la lógica creativa</h2>
         </div>
       </div>
       <div class="workshop-content" id="mapas-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-mapas" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>La plastilina, el cartón, la tela, los objetos que tenemos a mano nos sirven para visualizar el proceso creativo, para hacer que la lógica de la invención y del descubrimiento se manifiesten físicamente y así podamos pensar de una manera sensible y clara, palpando o viendo los conceptos y sus relaciones. Este taller muestra diferentes formas de realizar mapas conceptuales con objetos aplicados a un proyecto de diseño de espacios comerciales.</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/infante-javier.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>Javier Rodríguez Calvo, uno de los dos componentes del existoso estudio sevillano Buenos días, el cual ha recibido ocho premios Laus. Su trabajo se centra en el sector cultural, poniendo especial interés en los proyectos pequeños, las ediciones cuidadas, el mimo en el detalle y el diálogo con el cliente.</p>
             <p>Fernando Infante del Rosal, director del estudio de diseño El golpe Cultura del entorno y doctor en Filosofía por la Universidad de Sevilla, ha realizado la Dirección de arte de numerosos proyectos gráficos para instituciones como Unión Europea y para empresas como Coca-Cola o Heineken. Su labor como director y diseñador se ha centrado sobre todo en el ámbito de la comunicación cultural. Ha obtenido varios premios de artes plásticas y literarios y el Laus Bronce de la Asociación de Diseñadores Gráficos en 2012.</p>
             <!--<p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>-->
           </div>
         </div>
         <h4>Material necesario</h4>
         <p></p>
         <h4>20 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en el estudio El Golpe el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/nan3CU1gApw" target="_blank">VER MAPA</a></p>
       </div>
     </div>

     <div class="workshop-container">
       <div class="workshop-banner" id="negocio" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2 class="workshop-long-title">Tu modelo de negocio: de la cartera a la startup</h2>
         </div>
       </div>
       <div class="workshop-content" id="negocio-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-negocio" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>Todos queremos montar startups, ser emprendedores, lanzar una idea que nos lleve directamente al éxito… siempre ganando algunos millones de dólares por el camino, por supuesto… Mientras nos descubren, estaría genial trabajar para convertirnos en grandes profesionales que sumen valor añadido a ese proyecto que nos jubilará.</p>
         <p>En 4 horas haremos un zoom in-out: de profesional a empresa. Un taller intensivo de “defensa profesional”. Analizaremos el valor de nuestro trabajo, veremos herramientas para crear nuestro modelo de vida (sostenible), interrogaremos a un producto que diseñaremos sobre la marcha e inventaremos el modelo de negocio de esa idea que nos lanzará al estrellato. Si te atreves a hablar de pasta, a admitir que necesitas comer a diario y tienes ganas de vivir de tus ideas… ¡Ven! Te vamos a dar un buen acelerón.</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/jaime-aranda.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>Emprendedor en serie, especialista en gestión y diseño de entornos de trabajo, desarrollo y acompañamiento para profesionales y para emprendedores. Arquitecto superior formado en la Universidad de Sevilla y el Politécnico de Milán. Máster en Artes del Espectáculo Vivo (Universidad de Sevilla), MBA Executive (Máster en Administración de Empresas) (Cámara de Comercio de Sevilla) y Especialista en Social Media Management (ESIC Sevilla).</p>
             <p>Trabaja en diferentes estudios de arquitectura y, posteriormente, como Consultor escenotécnico durante varios años hasta que inicia su actividad empresarial independiente en diferentes iniciativas. Cofundador de workINcompany, primer espacio coworking de Andalucía en Sevilla, vozWise, equipo multidisciplinar de formación para hablar en público para profesionales, y Nativo Social, agencia de comunicación social media. Director de proyectos en el programa emprendedor internacional Cosmopolitia. Asesor personal de emprendedores y profesionales en ThinkPal. Socio fundador y presidente de la asociación SevillaUP. Ponente y formador habitual en múltiples foros sobre coworking, emprendimiento, y desarrollo de ecosistemas profesionales. Profesor invitado en la Universidad de Sevilla, Universidad Pablo de Olavide, Campus EUSA o Universidad Loyola Andalucía para formaciones relativas a modelos de negocio, comunicación personal o innovación y competitividad.</p>
             <!--<p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>-->
           </div>
         </div>
         <h4>Material necesario</h4>
         <p></p>
         <h4>25 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en el CICUS el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/hYxNGCBkY3w" target="_blank">VER MAPA</a></p>
       </div>
     </div>

     <div class="workshop-container">
       <div class="workshop-banner" id="foto" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2>Fotogrametría de objetos cercanos</h2>
         </div>
       </div>
       <div class="workshop-content" id="foto-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-foto" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>La fotogrametría de objetos cercanos es aquella que, a través de procesos de grabación, como fotografías, trata de reproducir de forma fiel objetos que distan menos de 300 metros.</p>
         <p>Este taller constará de tres partes. Una primera en la que se expondrán brevemente los fundamentos en los que se basa la Fotogrametría, y cómo funciona, así como las recomendaciones para tomar las fotos adecuadas (1 hora). La segunda parte consistirá en la toma de fotos de diferentes objetos, y también, toma de medidas (1 hora). Por último, se realizará el trabajo en equipo para la obtención del modelo tridimensional que se obtendrá como resultado final, exponiendo los diferentes trabajos. Además se explicarán las posibilidades de Software libre que existen (3 horas).</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/elena-cabrera.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>El workshop será impartido por Elena Cabrera Revuelta. Estudió en la Escuela de Aparejadores de Sevilla y empezó en 2011 a impartir clases en el Departamento de Ingeniería Gráfica, sobre Geometría Descriptiva y Topografía. Desde 2013 imparte la asignatura de Nuevas Tecnologías Aplicadas a los Levantamientos Arquitectónicos, la cual trata sobre diferentes técnicas de adquisición de datos geométricos de bienes arquitectónicos y arqueológicos. Entre estas técnicas se encuentra la Fotogrametría. Estudiante de Doctorado, vive y trabaja también en Cádiz.</p>
             <!--<p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>-->
           </div>
         </div>
         <h4>Material necesario</h4>
         <p>Es necesario que el asistente lleve ordenador y cámara de fotos (no es necesario una profesional). También es necesario instalar <a href="http://www.agisoft.com/downloads/request-trial/" target="_blank">este software</a> en el ordenador (es necesario rellenar el formulario para obtener la licencia de prueba).</p>
         <h4>20 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en la Escuela Politécnica Superior de Sevilla el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/DHbYec3H8qS2" target="_blank">VER MAPA</a></p>
       </div>
     </div>

     <div class="workshop-container">
       <div class="workshop-banner" id="laser" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2>Escaneado láser 3D de largo alcance</h2>
         </div>
       </div>
       <div class="workshop-content" id="laser-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-laser" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>El workshop trata la práctica de escaneado 3D de tiempo de vuelo, aplicado al modelado, control dimensional y recreación de espacios virtuales. Manejo de nube de puntos.</p>
         <p>El escaneado 3D de tiempo de vuelo es una técnica de control dimensional de gran precisión aplicada a grandes volúmenes, como pueden ser edificios o zonas geográficas concretas, cubriendo espacios que van desde unos pocos metros hasta cientos de metros en las tres dimensiones del espacio. Esta técnica tiene múltiples aplicaciones desde topografía, recreaciones virtuales o control dimensional de grietas entre otras.</p>
         <p>En el taller se desarrollará la base teórica necesaria sobre el funcionamiento de un escáner láser 3D, así como una introducción a los software con los que procesaremos la información. Con ésto se llevará acabo una demostración sobre un volumen de gran tamaño, como es un edificio, el proceso seguirá el siguiente esquema:</p>
         <p>- Una primera fase de adquisición de información tridimensional directamente con el escáner, realizando las capturas necesarias para cubrir una muestra representativa del edificio.</p>
         <p>- Un procesado de la información de la nube de puntos obtenida del edificio, llevando a cabo una limpieza de la nube de puntos de las capturas realizadas y la unión de dichas capturas en una única nube de puntos. En este punto se hablará de los problemas típicos de este tipo de trabajos, como puede ser el excesivo "peso" de las nubes de puntos.</p>
         <p>- Finalmente se desarrollarán ejemplos de las aplicaciones típicas sobre los trabajos realizados, como la realización de un recorrido virtual, toma de medidas representativas o el mallado tridimensional de la nube de puntos para impresión 3D. Dichos ejemplos pueden variar en función del transcurso del workshop.</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/joseantonio-barrera.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>El workshop será impartido por José Antonio Barrera Vera, profesor del Departamento de Ingeniería Gráfica de la Universidad de Sevilla. Es doctor en Técnicas Gráficas y Cartográficas. Docencia Actual: Nuevas Tecnologías en Levantamientos Arquitectónicos, Innovación Docente e Investigación Educativa en Tecnología.</p>
             <!--<p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>-->
           </div>
         </div>
         <h4>Material necesario</h4>
         <p>Aunque no es obligatorio, es recomendable que el asistente disponga de un portátil con un programa para la gestión de nubes de puntos como puede ser Autodesk Recap.</p>
         <h4>10 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en el CICUS el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/hYxNGCBkY3w" target="_blank">VER MAPA</a></p>
       </div>
     </div>

     <div class="workshop-container">
       <div class="workshop-banner" id="pensamiento" onclick="showWorkshop(this.id)">
         <div class="workshop-title">
           <h2>Pensamiento visual</h2>
         </div>
       </div>
       <div class="workshop-content" id="pensamiento-body">
         <img class="workshop-close" src="/images/close-green.png" alt="" id="close-pensamiento" onclick="closeWorkshop(this.id)"/>
         <h4>Descripción</h4>
         <p>El objetivo de este taller intensivo es que el alumno aprenda a desarrollar toda su potencialidad en el dibujo. No hay personas que dibujen mejor que otras, simplemente no se han detenido a pensar que son capaces.</p>
         <p>Está destinado a poder representar cualquier elemento, buscando la interacción persona-objeto y mostrando diseños de forma más sencilla y rápida que con un típico sketch de seducción. De esa forma, permitirá al asistente tener una comunicación eficaz con el resto del equipo de trabajo en plena reunión o poder visualizar posibles ideas de un objeto sin tener que recurrir a bocetos tan cuidadosos.</p>
         <div class="workshop-monitor">
           <div class="workshop-monitor-photo">
             <img src="/images/workshops/alvaro-reinoso.jpg" alt="" />
           </div>
           <div class="workshop-monitor-text">
             <p>El workshop será impartido por Álvaro Reinoso. Siempre le ha gustado dibujar, es parte de su ADN. Le gusta la ilustración porque le permite contar las historias que tiene dentro de sí y toman sentido cuando se comparten. Tras licenciarse en Ciencias de la Comunicación, dio sus primeros pasos como profesional creativo de publicidad para empresas como Danone, Martini, Olay y Hugo Boss, entre otros. Desde 2004, ha estado dedicándose al 100% en obra gráfica, proyectos editoriales y cuentos infantiles. Ha sido colaborador para El País De Las Tentaciones, La Vanguardia y Calle 20. Recientemente participó en una actuación de música – proporcionando la ilustración en vivo en el festival “Música no Claustro”, y expuso las Aropostcards en el CaixaForum de Barcelona.</p>
             <p>Actualmente proporciona ilustraciones para el blog de Sylvia de Béjar y lleva a cabo el proyecto de “SketchShooting”, además de la aplicación de la ilustración para conferencias, actuaciones y presentaciones.</p>
             <!--<p>Más información: <a href="http://www.tallerdedrones.es/">tallerdedrones.es</a></p>-->
           </div>
         </div>
         <h4>Material necesario</h4>
         <p>Es necesario aportar un cuaderno para dibujar y un smartphone (para utilizar la cámara)</p>
         <h4>20 PLAZAS</h4>
         <h4>Localización</h4>
         <p>El workshop será impartido en el CICUS el <b>Sábado 12 a las 09:00</b>, con una duración de 4 horas.</p>
         <p><a href="https://goo.gl/maps/hYxNGCBkY3w" target="_blank">VER MAPA</a></p>
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
      case "mapas":
        $("#mapas-body").slideDown();
        $("#mapas").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

        var posicion = $("#mapas").offset().top;
        $("html, body").animate({
         scrollTop: posicion - 115
       }, 1000)

      break;
      case "negocio":
        $("#negocio-body").slideDown();
        $("#negocio").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

        var posicion = $("#negocio").offset().top;
        $("html, body").animate({
         scrollTop: posicion - 115
       }, 1000)

      break;
      case "foto":
        $("#foto-body").slideDown();
        $("#foto").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

        var posicion = $("#foto").offset().top;
        $("html, body").animate({
         scrollTop: posicion - 115
       }, 1000)

      break;
      case "laser":
        $("#laser-body").slideDown();
        $("#laser").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

        var posicion = $("#laser").offset().top;
        $("html, body").animate({
         scrollTop: posicion - 115
       }, 1000)

      break;
      case "pensamiento":
        $("#pensamiento-body").slideDown();
        $("#pensamiento").addClass("workshop-banner-border");
        $(".workshop-container").addClass("workshop-container-shadow");

        var posicion = $("#pensamiento").offset().top;
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
      case "close-mapas":
        $("#mapas-body").slideUp();
        $("#mapas").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      case "close-negocio":
        $("#negocio-body").slideUp();
        $("#negocio").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      case "close-foto":
        $("#foto-body").slideUp();
        $("#foto").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      case "close-laser":
        $("#laser-body").slideUp();
        $("#laser").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      case "close-pensamiento":
        $("#pensamiento-body").slideUp();
        $("#pensamiento").removeClass("workshop-banner-border");
        $(".workshop-container").removeClass("workshop-container-shadow");

      break;
      default:

    }
  }
</script>
