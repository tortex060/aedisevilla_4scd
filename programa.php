<?php
  include ("navbar.html");
 ?>
 <header>
   <div class="page-title">
     <h2>PROGRAMA</h2>
   </div>
 </header>
 <script type="text/javascript">
   $(document).ready(function(){
     $("header").css({background:"url(/images/cabecera-rosa.jpg) no-repeat center", "background-size": "cover"});
     //$(".nav-container").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});

     $("#jueves").hide();
     $("#viernes").hide();
     $("#sabado").hide();
   });

   function showDay(day){
     if(day=="jday") {
       var imgDay = $("#jday");
       var img = imgDay.attr("src");
       if(img == "/images/programa/plus.png") {
         imgDay.attr("src","/images/programa/minus.png");
       } else {
         imgDay.attr("src","/images/programa/plus.png");
       }
       
       $("#jueves").slideToggle();
       var posicion = $("#jueves").offset().top;
       $("html, body").animate({
        scrollTop: posicion - 220
      }, 500);

     } else if(day=="vday") {
       var imgDay = $("#vday");
       var img = imgDay.attr("src");
       if(img == "/images/programa/plus.png") {
         imgDay.attr("src","/images/programa/minus.png");
       } else {
         imgDay.attr("src","/images/programa/plus.png");
       }

       $("#viernes").slideToggle();
       var posicion = $("#viernes").offset().top;
       $("html, body").animate({
         scrollTop: posicion - 220
       }, 500)

     } else if(day=="sday") {
       var imgDay = $("#sday");
       var img = imgDay.attr("src");
       if(img == "/images/programa/plus.png") {
         imgDay.attr("src","/images/programa/minus.png");
       } else {
         imgDay.attr("src","/images/programa/plus.png");
       }

       $("#sabado").slideToggle();
       var posicion = $("#sabado").offset().top;
       $("html, body").animate({
        scrollTop: posicion - 220
      }, 500)
     }
   }
 </script>
 <div class="page-container">
   <div class="page-content">
     <div class="day-container">
       <div class="day-title">
         <h4>JUEVES 10 <span> Pabellón de Uruguay</span></h4>
         <p>Pabellón de Uruguay</p>
       </div>
       <img src="/images/programa/drop.jpg" alt="" class="drop-img"/>
       <img src="/images/programa/corner.jpg" alt="" class="corner-img"/>
       <img src="/images/programa/plus.png" alt="" class="drop-btn" id="jday" onclick="showDay(this.id)"/>
     </div>

     <div class="day-schedule-container" id="jueves">

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>9:30 <span>PRESENTACIÓN</span></h4>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>10:00 <span>JOSÉ MANUEL MATEO <span>OZESTUDI</span></span></h4>
           <p>Las grandes respuestas del diseño industrial</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>11:00 <span>ISRAEL CASTRO <span>MOUNTAIN</span></span></h4>
           <p>El valor añadido: que sea único, que sea para ti</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">12:00 <span>DESCANSO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>12:30 <span>JAIME MORENO <span>MORMEDI</span></span></h4>
           <p>Innovar a través de la experiencia cliente, utilizando el diseño como una herramienta estratégica</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">13:30 <span>ALMUERZO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>16:00 <span>BORJA MARTÍNEZ Y GERARD MIRÓ <span>LOSIENTO</span></span></h4>
           <p>El diseño tiene un color especial</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #EB6851">17:00 <span>DEBATE <span>POR DETERMINAR</span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-debate.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">18:00 <span>DESCANSO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>18:30 <span>PEDRO LORCA <span>AIRZONE</span></span></h4>
           <p>Presente y futuro del control</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

     </div>

     <div class="day-container">
       <div class="day-title">
         <h4>VIERNES 11 <span> Pabellón de Uruguay</span></h4>
         <p>Pabellón de Uruguay</p>
       </div>
       <img src="/images/programa/drop.jpg" alt="" class="drop-img"/>
       <img src="/images/programa/corner.jpg" alt="" class="corner-img"/>
       <img src="/images/programa/plus.png" alt="" class="drop-btn" id="vday" onclick="showDay(this.id)"/>
     </div>

     <div class="day-schedule-container" id="viernes">

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>9:00 <span>TONO GANDÍA <span>ENERGY SISTEM</span></span></h4>
           <p>De una parte al todo</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>10:00 <span>POL ANDRÉS FANTOBA Y MARC FABRA <span>LÚCID</span></span></h4>
           <p>10 máximas que definen nuestro diseño</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">11:00 <span>DESCANSO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>12:00 <span>ARIEL GUERSENZVAIG <span>ELISAVA</span></span></h4>
           <p>Diseño y toma de decisiones</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>13:00 <span>VÍCTOR HUGO DE PABLO <span>BQ</span></span></h4>
           <p>Cómo se hace un smartphone</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">14:00 <span>ALMUERZO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>16:00 <span>LAURA CÁMARA <span>IMAGINARIUM</span></span></h4>
           <p>Imaginarium: diseñando para niños</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #EB6851">17:00 <span>DEBATE: EL INTERNET DE LAS COSAS <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-debate.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">18:00 <span>DESCANSO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>18:30 <span>PILO MARTÍN <span>CON ACENTO</span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

     </div>

     <div class="day-container">
       <div class="day-title">
         <h4>SÁBADO 12 <span> CICUS</span></h4>
         <p>CICUS</p>
       </div>
       <img src="/images/programa/drop.jpg" alt="" class="drop-img"/>
       <img src="/images/programa/corner.jpg" alt="" class="corner-img"/>
       <img src="/images/programa/plus.png" alt="" class="drop-btn" id="sday" onclick="showDay(this.id)"/>
     </div>

     <div class="day-schedule-container" id="sabado">

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>9:00 <span>WORKSHOPS <span></span></span></h4>
           <!--<p class="workshop">TU MODELO DE NEGOCIO <span>Jaime Aranda</span></p>
           <p class="workshop">MAPAS CONCEPTUALES <span>Fernando Infante y Javier Rodríguez</span></p>
           <p class="workshop">MONTA TU DRON <span>Nito García y Santi Tudela</span></p>-->
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #FFC556">14:00 <span>ALMUERZO <span></span></span></h4>
           <p></p>
         </div>
         <img src="/images/programa/point-break.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>16:00 <span>JOSÉ GONZÁLEZ <span>YAMAHA/ZUMEX</span></span></h4>
           <p>Diseño, personas y tecnología</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4>17:00 <span>RAMÓN BENEDITO <span>BENEDITO DESIGN</span></span></h4>
           <p>La forma del paisaje</p>
         </div>
         <img src="/images/programa/point.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #00A19A">18:00 <span>NETWORKING</span></h4>
         </div>
         <img src="/images/programa/point-net.jpg" alt="" class="day-schedule-img" />
       </div>

       <div class="day-schedule-row">
         <div class="day-schedule-speak">
           <h4 style="color: #00A19A">23:00 <span>FIESTA DE CIERRE</span></h4>
         </div>
         <img src="/images/programa/point-party.jpg" alt="" class="day-schedule-img" />
       </div>

     </div>

   </div>

 </div>
