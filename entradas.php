<?php
  include ("navbar.html");
 ?>
 <header>
   <div class="page-title">
     <h2>ENTRADAS</h2>
   </div>
 </header>

 <script type="text/javascript">
   $(document).ready(function(){
     $("header").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
     //$(".nav-container").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
   });
 </script>

 <div class="page-container">
   <div class="page-content ticket-flex">

     <div class="ticket-container purple-border">
       <div class="ticket-title purple-bg">
         <h4>ABONO 3 DÍAS</h4>
         <h5>SOCIOS DE AEDI</h5>
       </div>
       <div class="ticket-content">
         <h4 class="purple-text">AGOTADAS</h4>
         <p class="light-bg"><b>Disponibilidad</b></p>
         <p class="light-bg">8 febrero 20:00 al 29 febrero 20:00</p>
         <p class="light-bg addinfo">Aplica el descuento introduciendo los
           5 últimos dígitos numéricos de tu DNI.</p>
       </div>
     </div>

     <div class="ticket-container pink-border">
       <div class="ticket-title pink-bg">
         <h4>ABONO 3 DÍAS</h4>
         <h5>PASE GENERAL</h5>
       </div>
       <div class="ticket-content">
         <h4 class="pink-text">AGOTADAS</h4>
         <p class="light-bg"><b>Disponibilidad</b></p>
         <p class="light-bg">11 febrero 20:00 al 29 febrero 20:00</p>
       </div>
     </div>

     <div class="ticket-container turquesa-border">
       <div class="ticket-title turquesa-bg">
         <h4>ABONO 3 DÍAS</h4>
         <h5>GRUPOS</h5>
       </div>
       <div class="ticket-content">
         <h4 class="turquesa-text">AGOTADAS</h4>
         <p class="light-bg"><b>Disponibilidad</b></p>
         <p class="light-bg">11 febrero 20:00 al 29 febrero 20:00</p>
         <p class="light-bg addinfo">Para grupos a partir de 10 personas. Precio por persona.</p>
       </div>
     </div>

     <div class="ticket-container green-border">
       <div class="ticket-title green-bg">
         <h4>PASE DE 1 DÍA</h4>
         <h5>PASE GENERAL</h5>
       </div>
       <div class="ticket-content">
         <h4 class="green-text">10,00 €</h4>
         <p class="light-bg" style="color: #333;"><b>Disponibilidad</b></p>
         <p class="light-bg"style="color: #333;">29 febrero 20:00 hasta agotar existencias</p>
       </div>
     </div>

     <p class="light-bg" style="margin-top: 5px">Los precios incluyen IVA. No incluyen los gastos de gestión de la plataforma Ticketscript, aunque AEDI asume 1€ del total (Por ello el precio aparecerá reducido al realizar la compra).</p>

      <div class="buy-tickets">
        <!--<a href="index.php?page=pasarela"><button>COMPRAR ENTRADAS</button></a>-->
        <a href="index.php?page=pasarela"><button>COMPRAR ENTRADAS</button></a> <!--enlace directo-->
        <p class="light-bg" style="opacity: 0.6;margin-top: 20px; text-align: center">DESCARGA LA ENTRADA EN TU MÓVIL, NO ES NECESARIO IMPRIMIRLA</p>
        <img src="/images/eco.png" alt="" />
      </div>

  </div>
 </div>
