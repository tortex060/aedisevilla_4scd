<?php
  include ("navbar.html");
 ?>
 <header>
   <div class="page-title">
     <h2>COMPRA DE ENTRADAS</h2>
   </div>
 </header>
 <script type="text/javascript">
   $(document).ready(function(){
     $("header").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
     //$(".nav-container").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
   });
 </script>
 <div class="page-container">
   <div class="page-content">

     <div id="ts-shop"></div>
                             <script type="text/javascript">
                                 var Ticketscript={};
                                 Ticketscript.Application={
                                     containerId:"ts-shop",
                                     channel:"NXYJUT8X",
                                     eventId:"",
                                     type:"iframe",
                                     language:"es",
                                     width:"500",
                                     height:"650"
                                 };
                             </script>
                             <script type="text/javascript" src="https://shop.ticketscript.com/assets/js/ga-embed.js"></script>
   </div>
 </div>
