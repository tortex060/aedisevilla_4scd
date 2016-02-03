$(document).ready(function(){
  $(".speaker-info-text").hide();
  $(".speaker-info-image").hide();

  $(window).on('scroll',function(){//=========Calcula la posicion del scroll
    var stop = Math.round($(window).scrollTop());
    if (stop > 250) {//=========================Añade background y sombra al nav
      $('.nav-container').addClass('navbar-scroll').animate({top: "0"},2000);
    } else if(stop < 250){
      $('.nav-container').animate({top: "-100%"},1000).removeClass('navbar-scroll');
    }
  });
});



//==========TEXTOS E IMAGENES DE PONENTES=======================
function showSpeakerInfo(ponente){
  var $text = $(".speaker-info-text");
  var $slider = $(".speaker-info-image");
  var $photo = $("#speakerPhoto");


  switch (ponente) {
    case "josegon1":
      document.getElementById("speakerName").innerHTML = "JOSÉ ALBERTO GONZÁLEZ";
      document.getElementById("speakerCorp").innerHTML = "Director en innovación y creatividad en ZUMEX";
      document.getElementById("speakerText1").innerHTML = "José A. González, nacido en Valencia y graduado en Ingeniería en Diseño Industrial por la UPV. En 2008 comenzó a trabajar en varias empresas como diseñador de producto y entornos. En 2007 y 2008 exhibió sus proyectos personales en “Nude”, en Valencia, los cuales llamaron la atención de algunas revistas internacionales de diseño. The Surface Magazine (NY) lo designó como uno de los más notables Jóvenes Diseñadores Españoles. Su trabajo fue elegido para representar a España en exposiciones internacionales de diseño como la “Biennale Saint-Étienne” (Francia)."
      document.getElementById("speakerText2").innerHTML = "Desde 2011 estuvo trabajando como senior designer para Yamaha Corp. una de las divisiones más sobresalientes de la compañía nipona. Tras cuatro años, José González regresó a España para convertirse en director de innovación y creatividad en Zumex."
      document.getElementById("speakerLectureTitle").innerHTML = "Diseño, personas y tecnología <span>| Viernes 11 -  10:00</span>"
      document.getElementById("speakerLectureText1").innerHTML = "La base tecnológica de los objetos que nos rodean es incomprensible para la mayoría de nosotros. Este sector no sólo trabaja sobre el funcionamiento interno de cada producto, sino que también precisa de un lenguaje que traduzca toda esta información a nuestro lenguaje."
      document.getElementById("speakerLectureText2").innerHTML = "En esta ponencia, José González mostrará cómo el diseño puede acercar productos de base tecnológica a los usuarios de una manera más humanizada y cercana."
      $text.slideToggle();
      $slider.slideToggle();


              //case 1:
              //  $photo.attr("src", "images/ponentes/products/jose-gonzalez-00.jpg");
              //  break;
              //case 2:
              //  $photo.attr("src", "images/ponentes/products/jose-gonzalez-01.jpg");
              //  break;
              //case 3:
              //  $photo.attr("src", "images/ponentes/products/jose-gonzalez-02.jpg");
              //  break;
              //case 4:
              //  $photo.attr("src", "images/ponentes/products/jose-gonzalez-03.jpg");
              //  break;
              //case 5:
              //  $photo.attr("src", "images/ponentes/products/jose-gonzalez-04.jpg");
              //  break;

      break;
    default:
  }
}
