

$(document).ready(function(){
  $(".speaker-info-text").hide();
  $(".speaker-info-text-resp").hide();
  $(".speaker-info-image").hide();
  $(".speaker-close").hide();

  $(window).on('scroll',function(){//=========Calcula la posicion del scroll
    var stop = Math.round($(window).scrollTop());
    var cont = 0;
    if (stop > 0) {//=========================Añade background y sombra al nav
      $('.nav-container').addClass('navbar-scroll');

    } else {
      $('.nav-container').removeClass('navbar-scroll');

    }
  });

});

//Variables para mostrar o cerrar info de ponente
var windowWidth = $(window).width();
var $text = $(".speaker-info-text");
var $textResp = $(".speaker-info-text-resp");
var $slider = $(".speaker-info-image");


function speakerClose(){
  $textResp.slideToggle();
  $slider.slideToggle();
  $(".speaker-close").hide();
  $(".page-title h2").show();
  $(".images-column-speaker img").show();
}

//==========TEXTOS E IMAGENES DE PONENTES=======================
function showSpeakerInfo(ponente){

  switch (ponente) {
    case "josegon1":
      document.getElementById("speakerName").innerHTML = "JOSÉ ALBERTO GONZÁLEZ";
      document.getElementById("speakerCorp").innerHTML = "Director en innovación y creatividad en ZUMEX";
      document.getElementById("speakerText1").innerHTML = "José A. González, nacido en Valencia y graduado en Ingeniería en Diseño Industrial por la UPV. En 2008 comenzó a trabajar en varias empresas como diseñador de producto y entornos. En 2007 y 2008 exhibió sus proyectos personales en “Nude”, en Valencia, los cuales llamaron la atención de algunas revistas internacionales de diseño. The Surface Magazine (NY) lo designó como uno de los más notables Jóvenes Diseñadores Españoles. Su trabajo fue elegido para representar a España en exposiciones internacionales de diseño como la “Biennale Saint-Étienne” (Francia)."
      document.getElementById("speakerText2").innerHTML = "Desde 2011 estuvo trabajando como senior designer para Yamaha Corp. una de las divisiones más sobresalientes de la compañía nipona. Tras cuatro años, José González regresó a España para convertirse en director de innovación y creatividad en Zumex."
      document.getElementById("speakerLectureTitle").innerHTML = "Diseño, personas y tecnología <span>| Sábado 12 -  16:00</span>"
      document.getElementById("speakerLectureText1").innerHTML = "La base tecnológica de los objetos que nos rodean es incomprensible para la mayoría de nosotros. Este sector no sólo trabaja sobre el funcionamiento interno de cada producto, sino que también precisa de un lenguaje que traduzca toda esta información a nuestro lenguaje."
      document.getElementById("speakerLectureText2").innerHTML = "En esta ponencia, José González mostrará cómo el diseño puede acercar productos de base tecnológica a los usuarios de una manera más humanizada y cercana."

      $("#product1").attr("src", "/images/ponentes/products/jose-gonzalez-00.jpg");
      $("#product2").attr("src", "/images/ponentes/products/jose-gonzalez-01.jpg");
      $("#product3").attr("src", "/images/ponentes/products/jose-gonzalez-02.jpg");
      $("#product4").attr("src", "/images/ponentes/products/jose-gonzalez-03.jpg");
      $("#product5").attr("src", "/images/ponentes/products/jose-gonzalez-04.jpg");

      if(windowWidth < 768){
        $(".images-column-speaker img").hide();
        $(".page-title h2").hide();
        $(".speaker-close").show();
        document.getElementById("speakerNameR").innerHTML = "JOSÉ ALBERTO GONZÁLEZ";
        document.getElementById("speakerCorpR").innerHTML = "Director en innovación y creatividad en ZUMEX";
        document.getElementById("speakerText1R").innerHTML = "José A. González, nacido en Valencia y graduado en Ingeniería en Diseño Industrial por la UPV. En 2008 comenzó a trabajar en varias empresas como diseñador de producto y entornos. En 2007 y 2008 exhibió sus proyectos personales en “Nude”, en Valencia, los cuales llamaron la atención de algunas revistas internacionales de diseño. The Surface Magazine (NY) lo designó como uno de los más notables Jóvenes Diseñadores Españoles. Su trabajo fue elegido para representar a España en exposiciones internacionales de diseño como la “Biennale Saint-Étienne” (Francia)."
        document.getElementById("speakerText2R").innerHTML = "Desde 2011 estuvo trabajando como senior designer para Yamaha Corp. una de las divisiones más sobresalientes de la compañía nipona. Tras cuatro años, José González regresó a España para convertirse en director de innovación y creatividad en Zumex."
        document.getElementById("speakerLectureTitleR").innerHTML = "Diseño, personas y tecnología <span>| Sábado 12 -  16:00</span>"
        document.getElementById("speakerLectureText1R").innerHTML = "La base tecnológica de los objetos que nos rodean es incomprensible para la mayoría de nosotros. Este sector no sólo trabaja sobre el funcionamiento interno de cada producto, sino que también precisa de un lenguaje que traduzca toda esta información a nuestro lenguaje."
        document.getElementById("speakerLectureText2R").innerHTML = "En esta ponencia, José González mostrará cómo el diseño puede acercar productos de base tecnológica a los usuarios de una manera más humanizada y cercana."
        $textResp.slideToggle();
      } else {
        $text.slideToggle();
      }

      $slider.slideToggle();

      startCarousel();

      break;
      case "marcfabra2":
        document.getElementById("speakerName").innerHTML = "MARC FABRA";
        document.getElementById("speakerCorp").innerHTML = "LÚCID";
        document.getElementById("speakerText1").innerHTML = "Marc Fabra Ferrer es Diseñador Industrial (Escola de disseny Eina) con un máster de ingeniería (Fundación CIM UPC). Trayectoria profesional como diseñador en el departamento de diseño en estudios como Lagranja Design o Gemma Bernal Estudio y como responsable de departamento de diseño y desarrollo de producto en TEDISEL MEDICAL."
        document.getElementById("speakerText2").innerHTML = "LÚCID es una agencia de diseño de producto cuyo propósito es diseñar y desarrollar productos innovadores que estimulen, inspiren y resulten útiles para el consumidor. Se centran en ayudar a las empresas a crecer y adquirir una ventaja competitiva sostenible través de un equipo formado por los diseñadores más técnicos y los ingenieros más creativos. Trabajan para transformar las ideas en productos innovadores, rentables y que superarán las expectativas del consumidor."
        document.getElementById("speakerLectureTitle").innerHTML = "10 Máximas que definen nuestro diseño <span>| Viernes 11 -  10:00</span>"
        document.getElementById("speakerLectureText1").innerHTML = "Pol y Marc nos explicarán cómo entienden en LÚCID el diseño de producto, cuales son, en su opinión, los puntos clave para enfocar bien un diseño y un desarrollo de producto. Todo ello irá sustentado mediante proyectos propios del estudio, que utilizarán para ejemplificar estas máximas de diseño."
        document.getElementById("speakerLectureText2").innerHTML = ""

        $("#product1").attr("src", "/images/ponentes/products/lucid-00.jpg");
        $("#product2").attr("src", "/images/ponentes/products/lucid-01.jpg");
        $("#product3").attr("src", "/images/ponentes/products/lucid-02.jpg");
        $("#product4").attr("src", "/images/ponentes/products/lucid-03.jpg");
        $("#product5").attr("src", "/images/ponentes/products/lucid-04.jpg");

        if(windowWidth < 768){
          $(".images-column-speaker img").hide();
          $(".page-title h2").hide();
          $(".speaker-close").show();
          document.getElementById("speakerNameR").innerHTML = "MARC FABRA";
          document.getElementById("speakerCorpR").innerHTML = "LÚCID";
          document.getElementById("speakerText1R").innerHTML = "Marc Fabra Ferrer es Diseñador Industrial (Escola de disseny Eina) con un máster de ingeniería (Fundación CIM UPC). Trayectoria profesional como diseñador en el departamento de diseño en estudios como Lagranja Design o Gemma Bernal Estudio y como responsable de departamento de diseño y desarrollo de producto en TEDISEL MEDICAL."
          document.getElementById("speakerText2R").innerHTML = "LÚCID es una agencia de diseño de producto cuyo propósito es diseñar y desarrollar productos innovadores que estimulen, inspiren y resulten útiles para el consumidor. Se centran en ayudar a las empresas a crecer y adquirir una ventaja competitiva sostenible través de un equipo formado por los diseñadores más técnicos y los ingenieros más creativos. Trabajan para transformar las ideas en productos innovadores, rentables y que superarán las expectativas del consumidor."
          document.getElementById("speakerLectureTitleR").innerHTML = "10 Máximas que definen nuestro diseño <span>| Viernes 11 -  10:00</span>"
          document.getElementById("speakerLectureText1R").innerHTML = "Pol y Marc nos explicarán cómo entienden en LÚCID el diseño de producto, cuales son, en su opinión, los puntos clave para enfocar bien un diseño y un desarrollo de producto. Todo ello irá sustentado mediante proyectos propios del estudio, que utilizarán para ejemplificar estas máximas de diseño."
          document.getElementById("speakerLectureText2R").innerHTML = ""
          $textResp.slideToggle();
        } else {
          $text.slideToggle();
        }

        $slider.slideToggle();

        startCarousel();

        break;

        case "polandres":
          document.getElementById("speakerName").innerHTML = "POL ANDRÉS";
          document.getElementById("speakerCorp").innerHTML = "LÚCID";
          document.getElementById("speakerText1").innerHTML = "Pol Andrés Fantoba es Ingeniero Técnico Mecánico (UPC) con máster en diseño de producto (ELISAVA) y con cursos de formación especializada en plásticos (ASCAMM). Es fundador de estudios de ingeniería y diseño como de ENGINEERWORKS SL, PLAFANTOBA SL y, actualmente, LÚCID Product Design."
          document.getElementById("speakerText2").innerHTML = "LÚCID es una agencia de diseño de producto cuyo propósito es diseñar y desarrollar productos innovadores que estimulen, inspiren y resulten útiles para el consumidor. Se centran en ayudar a las empresas a crecer y adquirir una ventaja competitiva sostenible través de un equipo formado por los diseñadores más técnicos y los ingenieros más creativos. Trabajan para transformar las ideas en productos innovadores, rentables y que superarán las expectativas del consumidor."
          document.getElementById("speakerLectureTitle").innerHTML = "10 Máximas que definen nuestro diseño <span>| Viernes 11 -  10:00</span>"
          document.getElementById("speakerLectureText1").innerHTML = "Pol y Marc nos explicarán cómo entienden en LÚCID el diseño de producto, cuales son, en su opinión, los puntos clave para enfocar bien un diseño y un desarrollo de producto. Todo ello irá sustentado mediante proyectos propios del estudio, que utilizarán para ejemplificar estas máximas de diseño."
          document.getElementById("speakerLectureText2").innerHTML = ""

          $("#product1").attr("src", "/images/ponentes/products/lucid-00.jpg");
          $("#product2").attr("src", "/images/ponentes/products/lucid-01.jpg");
          $("#product3").attr("src", "/images/ponentes/products/lucid-02.jpg");
          $("#product4").attr("src", "/images/ponentes/products/lucid-03.jpg");
          $("#product5").attr("src", "/images/ponentes/products/lucid-04.jpg");

          if(windowWidth < 768){
            $(".images-column-speaker img").hide();
            $(".page-title h2").hide();
            $(".speaker-close").show();
            document.getElementById("speakerNameR").innerHTML = "POL ANDRÉS FANTOBA";
            document.getElementById("speakerCorpR").innerHTML = "LÚCID";
            document.getElementById("speakerText1R").innerHTML = "Pol Andrés Fantoba es Ingeniero Técnico Mecánico (UPC) con máster en diseño de producto (ELISAVA) y con cursos de formación especializada en plásticos (ASCAMM). Es fundador de estudios de ingeniería y diseño como de ENGINEERWORKS SL, PLAFANTOBA SL y, actualmente, LÚCID Product Design."
            document.getElementById("speakerText2R").innerHTML = "LÚCID es una agencia de diseño de producto cuyo propósito es diseñar y desarrollar productos innovadores que estimulen, inspiren y resulten útiles para el consumidor. Se centran en ayudar a las empresas a crecer y adquirir una ventaja competitiva sostenible través de un equipo formado por los diseñadores más técnicos y los ingenieros más creativos. Trabajan para transformar las ideas en productos innovadores, rentables y que superarán las expectativas del consumidor."
            document.getElementById("speakerLectureTitleR").innerHTML = "10 Máximas que definen nuestro diseño <span>| Viernes 11 -  10:00</span>"
            document.getElementById("speakerLectureText1R").innerHTML = "Pol y Marc nos explicarán cómo entienden en LÚCID el diseño de producto, cuales son, en su opinión, los puntos clave para enfocar bien un diseño y un desarrollo de producto. Todo ello irá sustentado mediante proyectos propios del estudio, que utilizarán para ejemplificar estas máximas de diseño."
            document.getElementById("speakerLectureText2R").innerHTML = ""
            $textResp.slideToggle();
          } else {
            $text.slideToggle();
          }

          $slider.slideToggle();

          startCarousel();

          break;

          case "gerardmiro":
            document.getElementById("speakerName").innerHTML = "GERARD MIRÓ";
            document.getElementById("speakerCorp").innerHTML = "LO SIENTO STUDIO";
            document.getElementById("speakerText1").innerHTML = "Diseñador Gráfico y Realizador publicitario. Forma parte del estudio de diseño gráfico Lo siento, especializado en identidad, packaging y editorial."
            document.getElementById("speakerText2").innerHTML = "Lo Siento es un estudio pequeño que se divierte principalmente haciéndose cargo del conjunto de la identidad corporativa de los proyectos. Su principal característica es el enfoque orgánico y físico que aportan a las soluciones, dando como resultado un campo para el diálogo entre el diseño industrial y el diseño gráfico, y buscando siempre la concordancia con el proceso artístico."
            document.getElementById("speakerLectureTitle").innerHTML = "El diseño tiene un color especial <span>| Jueves 10 -  16:00</span>"
            document.getElementById("speakerLectureText1").innerHTML = "Dicen que todo depende del color del cristal con que se mire. Si miramos el diseño con el cristal de Lo Siento, no solo veremos el diseño, también lo oleremos, podremos escucharlo, tocarlo y también morderlo. Diseño con los cinco sentidos."
            document.getElementById("speakerLectureText2").innerHTML = ""

            $("#product1").attr("src", "/images/ponentes/products/losiento-00.jpg");
            $("#product2").attr("src", "/images/ponentes/products/losiento-01.jpg");
            $("#product3").attr("src", "/images/ponentes/products/losiento-02.jpg");
            $("#product4").attr("src", "/images/ponentes/products/losiento-03.jpg");
            $("#product5").attr("src", "/images/ponentes/products/losiento-04.jpg");

            if(windowWidth < 768){
              $(".images-column-speaker img").hide();
              $(".page-title h2").hide();
              $(".speaker-close").show();
              document.getElementById("speakerNameR").innerHTML = "GERARD MIRÓ";
              document.getElementById("speakerCorpR").innerHTML = "LO SIENTO STUDIO";
              document.getElementById("speakerText1R").innerHTML = "Diseñador Gráfico y Realizador publicitario. Forma parte del estudio de diseño gráfico Lo siento, especializado en identidad, packaging y editorial."
              document.getElementById("speakerText2R").innerHTML = "Lo Siento es un estudio pequeño que se divierte principalmente haciéndose cargo del conjunto de la identidad corporativa de los proyectos. Su principal característica es el enfoque orgánico y físico que aportan a las soluciones, dando como resultado un campo para el diálogo entre el diseño industrial y el diseño gráfico, y buscando siempre la concordancia con el proceso artístico."
              document.getElementById("speakerLectureTitleR").innerHTML = "El diseño tiene un color especial <span>| Jueves 10 -  16:00</span>"
              document.getElementById("speakerLectureText1R").innerHTML = "Dicen que todo depende del color del cristal con que se mire. Si miramos el diseño con el cristal de Lo Siento, no solo veremos el diseño, también lo oleremos, podremos escucharlo, tocarlo y también morderlo. Diseño con los cinco sentidos."
              document.getElementById("speakerLectureText2R").innerHTML = ""
              $textResp.slideToggle();
            } else {
              $text.slideToggle();
            }

            $slider.slideToggle();

            startCarousel();

            break;

        case "borjamartinez":
          document.getElementById("speakerName").innerHTML = "BORJA MARTÍNEZ";
          document.getElementById("speakerCorp").innerHTML = "LO SIENTO STUDIO";
          document.getElementById("speakerText1").innerHTML = "Borja se formó en Diseño Industrial, pero encontró su verdadera vocación al estudiar diseño gráfico en el London College of Printing. En 2003 monta su estudio LoSiento en el barrio barcelonés del Raval. Es el vigente ganador de los premios Laus y Grand Laus de su especialidad."
          document.getElementById("speakerText2").innerHTML = "Lo Siento es un estudio pequeño que se divierte principalmente haciéndose cargo del conjunto de la identidad corporativa de los proyectos. Su principal característica es el enfoque orgánico y físico que aportan a las soluciones, dando como resultado un campo para el diálogo entre el diseño industrial y el diseño gráfico, y buscando siempre la concordancia con el proceso artístico."
          document.getElementById("speakerLectureTitle").innerHTML = "El diseño tiene un color especial <span>| Jueves 10 -  16:00</span>"
          document.getElementById("speakerLectureText1").innerHTML = "Dicen que todo depende del color del cristal con que se mire. Si miramos el diseño con el cristal de Lo Siento, no solo veremos el diseño, también lo oleremos, podremos escucharlo, tocarlo y también morderlo. Diseño con los cinco sentidos."
          document.getElementById("speakerLectureText2").innerHTML = ""

          $("#product1").attr("src", "/images/ponentes/products/losiento-00.jpg");
          $("#product2").attr("src", "/images/ponentes/products/losiento-01.jpg");
          $("#product3").attr("src", "/images/ponentes/products/losiento-02.jpg");
          $("#product4").attr("src", "/images/ponentes/products/losiento-03.jpg");
          $("#product5").attr("src", "/images/ponentes/products/losiento-04.jpg");

          if(windowWidth < 768){
            $(".images-column-speaker img").hide();
            $(".page-title h2").hide();
            $(".speaker-close").show();
            document.getElementById("speakerNameR").innerHTML = "GERARD MIRÓ";
            document.getElementById("speakerCorpR").innerHTML = "LO SIENTO STUDIO";
            document.getElementById("speakerText1R").innerHTML = "Borja se formó en Diseño Industrial, pero encontró su verdadera vocación al estudiar diseño gráfico en el London College of Printing. En 2003 monta su estudio LoSiento en el barrio barcelonés del Raval. Es el vigente ganador de los premios Laus y Grand Laus de su especialidad."
            document.getElementById("speakerText2R").innerHTML = "Lo Siento es un estudio pequeño que se divierte principalmente haciéndose cargo del conjunto de la identidad corporativa de los proyectos. Su principal característica es el enfoque orgánico y físico que aportan a las soluciones, dando como resultado un campo para el diálogo entre el diseño industrial y el diseño gráfico, y buscando siempre la concordancia con el proceso artístico."
            document.getElementById("speakerLectureTitleR").innerHTML = "El diseño tiene un color especial <span>| Jueves 10 -  16:00</span>"
            document.getElementById("speakerLectureText1R").innerHTML = "Dicen que todo depende del color del cristal con que se mire. Si miramos el diseño con el cristal de Lo Siento, no solo veremos el diseño, también lo oleremos, podremos escucharlo, tocarlo y también morderlo. Diseño con los cinco sentidos."
            document.getElementById("speakerLectureText2R").innerHTML = ""
            $textResp.slideToggle();
          } else {
            $text.slideToggle();
          }

          $slider.slideToggle();

          startCarousel();

          break;

          case "lauracamara":
            document.getElementById("speakerName").innerHTML = "LAURA CÁMARA";
            document.getElementById("speakerCorp").innerHTML = "IMAGINARIUM";
            document.getElementById("speakerText1").innerHTML = "Tras 13 años trabajando para Imaginarium como parte del Departamento de Diseño y haber desarrollado numerosas familias de productos, Laura  Cámara puede considerarse una experta en la búsqueda del concepto, que analiza nuevas propuestas cada día. Se define a sí misma como una creativa sensible que sabe enfrentarse a fechas de entrega ajustadas. Destaca por su agudo sentido del color, su capacidad de invención creativa y un don para la búsqueda de la solución más viable."
            document.getElementById("speakerText2").innerHTML = ""
            document.getElementById("speakerLectureTitle").innerHTML = "Diseñando desde cero <span>| Viernes 11 -  16:00</span>"
            document.getElementById("speakerLectureText1").innerHTML = "En su ponencia podremos disfrutar de los aspectos básicos que se tratan en el diseño y desarrollo de juguetes para los más pequeños, de la mano de una diseñadora del equipo de Imaginarium, empresa española líder en el sector y que destaca por el ingenio y la calidad de sus productos. Una primera introducción a un mundo que cautiva a muchos diseñadores por su nivel de libertad y conceptualización."
            document.getElementById("speakerLectureText2").innerHTML = ""

            $("#product1").attr("src", "/images/ponentes/products/laura-camara-00.jpg");
            $("#product2").attr("src", "/images/ponentes/products/laura-camara-01.jpg");
            $("#product3").attr("src", "/images/ponentes/products/laura-camara-02.jpg");
            $("#product4").attr("src", "/images/ponentes/products/laura-camara-03.jpg");
            $("#product5").attr("src", "/images/ponentes/products/laura-camara-04.jpg");

            if(windowWidth < 768){
              $(".images-column-speaker img").hide();
              $(".page-title h2").hide();
              $(".speaker-close").show();
              document.getElementById("speakerNameR").innerHTML = "LAURA CÁMARA";
              document.getElementById("speakerCorpR").innerHTML = "IMAGINARIUM";
              document.getElementById("speakerText1R").innerHTML = "Tras 13 años trabajando para Imaginarium como parte del Departamento de Diseño y haber desarrollado numerosas familias de productos, Laura  Cámara puede considerarse una experta en la búsqueda del concepto, que analiza nuevas propuestas cada día. Se define a sí misma como una creativa sensible que sabe enfrentarse a fechas de entrega ajustadas. Destaca por su agudo sentido del color, su capacidad de invención creativa y un don para la búsqueda de la solución más viable."
              document.getElementById("speakerText2R").innerHTML = ""
              document.getElementById("speakerLectureTitleR").innerHTML = "Diseñando desde cero <span>| Viernes 11 -  16:00</span>"
              document.getElementById("speakerLectureText1R").innerHTML = "En su ponencia podremos disfrutar de los aspectos básicos que se tratan en el diseño y desarrollo de juguetes para los más pequeños, de la mano de una diseñadora del equipo de Imaginarium, empresa española líder en el sector y que destaca por el ingenio y la calidad de sus productos. Una primera introducción a un mundo que cautiva a muchos diseñadores por su nivel de libertad y conceptualización."
              document.getElementById("speakerLectureText2R").innerHTML = ""
              $textResp.slideToggle();
            } else {
              $text.slideToggle();
            }

            $slider.slideToggle();

            startCarousel();

        break;
        case "israelcastro":
          document.getElementById("speakerName").innerHTML = "ISRAEL CASTRO";
          document.getElementById("speakerCorp").innerHTML = "MOUNTAIN";
          document.getElementById("speakerText1").innerHTML = "Israel Castro se formó en la Escuela de Arte Trazos de Madrid. Ha trabajado en Monigotes Studio 2.0 en la producción de proyectos cinematográficos, en Belt Ibérica como creativo y actualmente es el Director de producto e i+D de Mountain Labs."
          document.getElementById("speakerText2").innerHTML = "MOUNTAIN es una marca MADE IN SPAIN, orientada a fabricar sistemas informáticos de alto rendimiento. Cuenta con su propio laboratorio I+D para el estudio y creación de ordenadores orientados a los profesionales que demandan productos que respondan a sus necesidades adecuadamente. MOUNTAIN es una marca comprometida con la robustez y fiabilidad en cada uno de los productos que entrega. Para ello, fabrica desde equipos orientados a ofimática y el uso casual hasta los exigentes sistemas destinados al diseño gráfico, o los servidores con prestaciones específicas y estabilidad crítica para la empresa, así como los equipos diseñados para propósito multimedia y disfrute de videojuegos de última generación."
          document.getElementById("speakerLectureTitle").innerHTML = "El valor añadido: que sea único, que sea para ti <span>| Jueves 10 -  11:30</span>"
          document.getElementById("speakerLectureText1").innerHTML = "Cada usuario busca características distintas para su ordenador, pues cada tarea precisa de exigencias técnicas distintas. ¿Qué espera de su equipo un gamer?, ¿y un redactor?, ¿y un oficinista o un diseñador gráfico? Israel nos hablará de adaptación de los productos, de la personalización de los objetos a la medida del usuario y de sus costes y sus beneficios. Una tendencia que cada día aumenta más y que podremos conocer de la mano de una de las empresas que despuntan en este ámbito."
          document.getElementById("speakerLectureText2").innerHTML = ""

          $("#product1").attr("src", "/images/ponentes/products/israel-castro-00.jpg");
          $("#product2").attr("src", "/images/ponentes/products/israel-castro-01.jpg");
          $("#product3").attr("src", "/images/ponentes/products/israel-castro-02.jpg");
          $("#product4").attr("src", "/images/ponentes/products/israel-castro-03.jpg");
          $("#product5").attr("src", "/images/ponentes/products/israel-castro-04.jpg");

          if(windowWidth < 768){
            $(".images-column-speaker img").hide();
            $(".page-title h2").hide();
            $(".speaker-close").show();
            document.getElementById("speakerNameR").innerHTML = "ISRAEL CASTRO";
            document.getElementById("speakerCorpR").innerHTML = "MOUNTAIN";
            document.getElementById("speakerText1R").innerHTML = "Israel Castro se formó en la Escuela de Arte Trazos de Madrid. Ha trabajado en Monigotes Studio 2.0 en la producción de proyectos cinematográficos, en Belt Ibérica como creativo y actualmente es el Director de producto e i+D de Mountain Labs."
            document.getElementById("speakerText2R").innerHTML = "MOUNTAIN es una marca MADE IN SPAIN, orientada a fabricar sistemas informáticos de alto rendimiento. Cuenta con su propio laboratorio I+D para el estudio y creación de ordenadores orientados a los profesionales que demandan productos que respondan a sus necesidades adecuadamente. MOUNTAIN es una marca comprometida con la robustez y fiabilidad en cada uno de los productos que entrega. Para ello, fabrica desde equipos orientados a ofimática y el uso casual hasta los exigentes sistemas destinados al diseño gráfico, o los servidores con prestaciones específicas y estabilidad crítica para la empresa, así como los equipos diseñados para propósito multimedia y disfrute de videojuegos de última generación."
            document.getElementById("speakerLectureTitleR").innerHTML = "El valor añadido: que sea único, que sea para ti <span>| Jueves 10 -  11:30</span>"
            document.getElementById("speakerLectureText1R").innerHTML = "Cada usuario busca características distintas para su ordenador, pues cada tarea precisa de exigencias técnicas distintas. ¿Qué espera de su equipo un gamer?, ¿y un redactor?, ¿y un oficinista o un diseñador gráfico? Israel nos hablará de adaptación de los productos, de la personalización de los objetos a la medida del usuario y de sus costes y sus beneficios. Una tendencia que cada día aumenta más y que podremos conocer de la mano de una de las empresas que despuntan en este ámbito."
            document.getElementById("speakerLectureText2R").innerHTML = ""
            $textResp.slideToggle();
          } else {
            $text.slideToggle();
          }

          $slider.slideToggle();

          startCarousel();

      break;

      break;
      case "jaimearanda":
        document.getElementById("speakerName").innerHTML = "JAIME ARANDA";
        document.getElementById("speakerCorp").innerHTML = "workINcompany";
        document.getElementById("speakerText1").innerHTML = "Emprendedor en serie, especialista en gestión y diseño de entornos de trabajo, desarrollo y acompañamiento para profesionales y para emprendedores. Arquitecto superior formado en la Universidad de Sevilla y el Politécnico de Milán. Máster en Artes del Espectáculo Vivo (Universidad de Sevilla), MBA Executive (Máster en Administración de Empresas) (Cámara de Comercio de Sevilla) y Especialista en Social Media Management (ESIC Sevilla)."
        document.getElementById("speakerText2").innerHTML = "Trabaja en diferentes estudios de arquitectura y, posteriormente, como Consultor escenotécnico durante varios años hasta que inicia su actividad empresarial independiente en diferentes iniciativas. Cofundador de workINcompany, primer espacio coworking de Andalucía en Sevilla, vozWise, equipo multidisciplinar de formación para hablar en público para profesionales, y Nativo Social, agencia de comunicación social media. Director de proyectos en el programa emprendedor internacional Cosmopolitia. Asesor personal de emprendedores y profesionales en ThinkPal. Socio fundador y presidente de la asociación SevillaUP. Ponente y formador habitual en múltiples foros sobre coworking, emprendimiento, y desarrollo de ecosistemas profesionales. Profesor invitado en la Universidad de Sevilla, Universidad Pablo de Olavide, Campus EUSA o Universidad Loyola Andalucía para formaciones relativas a modelos de negocio, comunicación personal o innovación y competitividad."
        document.getElementById("speakerLectureTitle").innerHTML = "Tu modelo de negocio: de la cartera a la startup"
        document.getElementById("speakerLectureText1").innerHTML = "Todos queremos montar startups, ser emprendedores, lanzar una idea que nos lleve directamente al éxito… siempre ganando algunos millones de dólares por el camino, por supuesto… Mientras nos descubren, estaría genial trabajar para convertirnos en grandes profesionales que sumen valor añadido a ese proyecto que nos jubilará."
        document.getElementById("speakerLectureText2").innerHTML = "En 4 horas haremos un zoom in-out: de profesional a empresa. Un taller intensivo de “defensa profesional”. Analizaremos el valor de nuestro trabajo, veremos herramientas para crear nuestro modelo de vida (sostenible), interrogaremos a un producto que diseñaremos sobre la marcha e inventaremos el modelo de negocio de esa idea que nos lanzará al estrellato. Si te atreves a hablar de pasta, a admitir que necesitas comer a diario y tienes ganas de vivir de tus ideas… ¡Ven! Te vamos a dar un buen acelerón."

        $("#product1").attr("src", "/images/ponentes/products/jaime-aranda-00.jpg");
        $("#product2").attr("src", "/images/ponentes/products/jaime-aranda-01.jpg");
        $("#product3").attr("src", "/images/ponentes/products/jaime-aranda-02.jpg");
        $("#product4").attr("src", "/images/ponentes/products/jaime-aranda-03.jpg");
        $("#product5").attr("src", "/images/ponentes/products/jaime-aranda-04.jpg");

        if(windowWidth < 768){
          $(".images-column-speaker img").hide();
          $(".page-title h2").hide();
          $(".speaker-close").show();
          document.getElementById("speakerNameR").innerHTML = "JAIME ARANDA";
          document.getElementById("speakerCorpR").innerHTML = "workINcompany";
          document.getElementById("speakerText1R").innerHTML = "Emprendedor en serie, especialista en gestión y diseño de entornos de trabajo, desarrollo y acompañamiento para profesionales y para emprendedores. Arquitecto superior formado en la Universidad de Sevilla y el Politécnico de Milán. Máster en Artes del Espectáculo Vivo (Universidad de Sevilla), MBA Executive (Máster en Administración de Empresas) (Cámara de Comercio de Sevilla) y Especialista en Social Media Management (ESIC Sevilla)."
          document.getElementById("speakerText2R").innerHTML = "Trabaja en diferentes estudios de arquitectura y, posteriormente, como Consultor escenotécnico durante varios años hasta que inicia su actividad empresarial independiente en diferentes iniciativas. Cofundador de workINcompany, primer espacio coworking de Andalucía en Sevilla, vozWise, equipo multidisciplinar de formación para hablar en público para profesionales, y Nativo Social, agencia de comunicación social media. Director de proyectos en el programa emprendedor internacional Cosmopolitia. Asesor personal de emprendedores y profesionales en ThinkPal. Socio fundador y presidente de la asociación SevillaUP. Ponente y formador habitual en múltiples foros sobre coworking, emprendimiento, y desarrollo de ecosistemas profesionales. Profesor invitado en la Universidad de Sevilla, Universidad Pablo de Olavide, Campus EUSA o Universidad Loyola Andalucía para formaciones relativas a modelos de negocio, comunicación personal o innovación y competitividad."
          document.getElementById("speakerLectureTitle").innerHTML = "Tu modelo de negocio: de la cartera a la startup"
          document.getElementById("speakerLectureText1").innerHTML = "Todos queremos montar startups, ser emprendedores, lanzar una idea que nos lleve directamente al éxito… siempre ganando algunos millones de dólares por el camino, por supuesto… Mientras nos descubren, estaría genial trabajar para convertirnos en grandes profesionales que sumen valor añadido a ese proyecto que nos jubilará."
          document.getElementById("speakerLectureText2").innerHTML = "En 4 horas haremos un zoom in-out: de profesional a empresa. Un taller intensivo de “defensa profesional”. Analizaremos el valor de nuestro trabajo, veremos herramientas para crear nuestro modelo de vida (sostenible), interrogaremos a un producto que diseñaremos sobre la marcha e inventaremos el modelo de negocio de esa idea que nos lanzará al estrellato. Si te atreves a hablar de pasta, a admitir que necesitas comer a diario y tienes ganas de vivir de tus ideas… ¡Ven! Te vamos a dar un buen acelerón."
          $textResp.slideToggle();
        } else {
          $text.slideToggle();
        }

        $slider.slideToggle();

        startCarousel();

    break;
    case "benedito":
      document.getElementById("speakerName").innerHTML = "RAMÓN BENEDITO";
      document.getElementById("speakerCorp").innerHTML = "BENEDITO DESIGN";
      document.getElementById("speakerText1").innerHTML = "Funda en 1973, BENEDITO DESIGN equipo dedicado al diseño de producto que ha  realizado proyectos para destacadas empresas tanto nacionales como internacionales. En 1992 recibe el Premio Nacional de Diseño."
      document.getElementById("speakerText2").innerHTML = "Durante 19 años ha impartido la asignatura de proyectos en la Escuela Elisava. Con Lluís Morillas y Josep Puig, funda en 1983 el equipo de diseño experimental Transatlantic. Ha sido Presidente de la Junta Directiva de ADI-FAD (Agrupación de Diseño Industrial del FAD), miembro del Consejo Directivo del FAD (Fomento de las Artes y el Diseño), consultor del KIDP (Korean Institute of Industrial Design) y miembro del Patronato de la Fundación BCD  (Barcelona Centro de Diseño). En junio de 2010 es nombrado Director General de Elisava. Sus proyectos se han expuesto en las principales capitales del mundo."
      document.getElementById("speakerLectureTitle").innerHTML = "La forma del paisaje"
      document.getElementById("speakerLectureText1").innerHTML = "Una mirada de retrovisor que recorre el discurrir de una trayectoria de diseño vinculada a Barcelona y que participa de la tradición emprendedora y artística de esta ciudad. Escuelas, instituciones, experiencias, empresas y la difusión internacional configuran este paisaje singular."
      document.getElementById("speakerLectureText2").innerHTML = "Desde la formación, hasta la gestión y desde la práctica profesional hasta la experiencia docente. Benedito Design: tecnología y diseño, cuarenta años de historia y proyección de futuro."

      $("#product1").attr("src", "/images/ponentes/products/ramon-benedito-00.jpg");
      $("#product2").attr("src", "/images/ponentes/products/ramon-benedito-01.jpg");
      $("#product3").attr("src", "/images/ponentes/products/ramon-benedito-02.jpg");
      $("#product4").attr("src", "/images/ponentes/products/ramon-benedito-03.jpg");
      $("#product5").attr("src", "/images/ponentes/products/ramon-benedito-04.jpg");

      if(windowWidth < 768){
        $(".images-column-speaker img").hide();
        $(".page-title h2").hide();
        $(".speaker-close").show();
        document.getElementById("speakerNameR").innerHTML = "RAMÓN BENEDITO";
        document.getElementById("speakerCorpR").innerHTML = "BENEDITO DESIGN";
        document.getElementById("speakerText1R").innerHTML = "Funda en 1973, BENEDITO DESIGN equipo dedicado al diseño de producto que ha  realizado proyectos para destacadas empresas tanto nacionales como internacionales. En 1992 recibe el Premio Nacional de Diseño."
        document.getElementById("speakerText2R").innerHTML = "Durante 19 años ha impartido la asignatura de proyectos en la Escuela Elisava. Con Lluís Morillas y Josep Puig, funda en 1983 el equipo de diseño experimental Transatlantic. Ha sido Presidente de la Junta Directiva de ADI-FAD (Agrupación de Diseño Industrial del FAD), miembro del Consejo Directivo del FAD (Fomento de las Artes y el Diseño), consultor del KIDP (Korean Institute of Industrial Design) y miembro del Patronato de la Fundación BCD  (Barcelona Centro de Diseño). En junio de 2010 es nombrado Director General de Elisava. Sus proyectos se han expuesto en las principales capitales del mundo."
        document.getElementById("speakerLectureTitleR").innerHTML = "La forma del paisaje"
        document.getElementById("speakerLectureText1R").innerHTML = "Una mirada de retrovisor que recorre el discurrir de una trayectoria de diseño vinculada a Barcelona y que participa de la tradición emprendedora y artística de esta ciudad. Escuelas, instituciones, experiencias, empresas y la difusión internacional configuran este paisaje singular."
        document.getElementById("speakerLectureText2R").innerHTML = "Desde la formación, hasta la gestión y desde la práctica profesional hasta la experiencia docente. Benedito Design: tecnología y diseño, cuarenta años de historia y proyección de futuro."
        $textResp.slideToggle();
      } else {
        $text.slideToggle();
      }

      $slider.slideToggle();

      startCarousel();

    break;
    case "jmoreno":
      document.getElementById("speakerName").innerHTML = "JAIME MORENO";
      document.getElementById("speakerCorp").innerHTML = "MORMEDI";
      document.getElementById("speakerText1").innerHTML = "Jaime Moreno se formó como diseñador en España, Suiza y Estados Unidos. Durante 15 años ha hecho posible el crecimiento de Mormedi a través de proyectos de significativa relevancia profesional premiados a nivel nacional e internacional."
      document.getElementById("speakerText2").innerHTML = "MORMEDI es una consultora de innovación y diseño de producto, que se basa en el diseño centrado en el usuario. Mormedi busca soluciones que añadan un valor comercial aportando una visión creativa que cautive al usuario."
      document.getElementById("speakerLectureTitle").innerHTML = "Innovar a través de la experiencia cliente, utilizando el diseño como una herramienta estratégica"
      document.getElementById("speakerLectureText1").innerHTML = "Hoy en día es imprescindible diseñar poniendo al cliente en el centro. Las empresas deben para poder innovar con éxito aplicar procesos \"customer centric\" para la conceptualización y el diseño de cualquier nuevo producto o servicio. Las metodologías del diseño estratégico que combinan el \"Design Thinking\" con el \"Business Thinking\" son clave para la innovación ya que permiten enfocar, iterar y validar los conceptos de una forma óptima tanto a nivel de experiencia como a nivel de viabilidad económica."
      document.getElementById("speakerLectureText2").innerHTML = ""

      $("#product1").attr("src", "/images/ponentes/products/mormedi-00.jpg");
      $("#product2").attr("src", "/images/ponentes/products/mormedi-01.jpg");
      $("#product3").attr("src", "/images/ponentes/products/mormedi-02.jpg");
      $("#product4").attr("src", "/images/ponentes/products/mormedi-03.jpg");
      $("#product5").attr("src", "/images/ponentes/products/mormedi-04.jpg");

      if(windowWidth < 768){
        $(".images-column-speaker img").hide();
        $(".page-title h2").hide();
        $(".speaker-close").show();
        document.getElementById("speakerNameR").innerHTML = "JAIME MORENO";
        document.getElementById("speakerCorpR").innerHTML = "MORMEDI";
        document.getElementById("speakerText1R").innerHTML = "Jaime Moreno se formó como diseñador en España, Suiza y Estados Unidos. Durante 15 años ha hecho posible el crecimiento de Mormedi a través de proyectos de significativa relevancia profesional premiados a nivel nacional e internacional."
        document.getElementById("speakerText2R").innerHTML = "MORMEDI es una consultora de innovación y diseño de producto, que se basa en el diseño centrado en el usuario. Mormedi busca soluciones que añadan un valor comercial aportando una visión creativa que cautive al usuario."
        document.getElementById("speakerLectureTitleR").innerHTML = "Innovar a través de la experiencia cliente, utilizando el diseño como una herramienta estratégica"
        document.getElementById("speakerLectureText1R").innerHTML = "Hoy en día es imprescindible diseñar poniendo al cliente en el centro. Las empresas deben para poder innovar con éxito aplicar procesos \"customer centric\" para la conceptualización y el diseño de cualquier nuevo producto o servicio. Las metodologías del diseño estratégico que combinan el \"Design Thinking\" con el \"Business Thinking\" son clave para la innovación ya que permiten enfocar, iterar y validar los conceptos de una forma óptima tanto a nivel de experiencia como a nivel de viabilidad económica."
        document.getElementById("speakerLectureText2R").innerHTML = ""
        $textResp.slideToggle();
      } else {
        $text.slideToggle();
      }

      $slider.slideToggle();

      startCarousel();

    break;
    case "gandia":
      document.getElementById("speakerName").innerHTML = "TONO GANDÍA";
      document.getElementById("speakerCorp").innerHTML = "ENERGY SISTEM";
      document.getElementById("speakerText1").innerHTML = "Tono Gandia, valenciano de 29 años, es Diseñador Industrial por la UPV con un master en Ingeniería del diseño (UPV) y un master en diseño y organización industrial en el sector del mueble (CETEM). Se define a sí mismo como un apasionado de conceptualizar nuevos productos enfocados al usuario y concibe el diseño como un factor influyente en la calidad de vida de las personas."
      document.getElementById("speakerText2").innerHTML = "Aunque comenzó con el diseño de mobiliario, desarrollando conceptos para una empresa del sector, pronto evolucionó hacia otros sectores trabajando como freelance para distintas agencias y proyectos de diseño industrial y 3D hasta que en 2013 pasó a formar parte de Energy Sistem Technology, empresa especializada en el diseño, desarrollo y comercialización de productos tecnológicos con más de 20 años de trayectoria, donde ejerze actualmente como responsable de diseño industrial llevando a cabo tareas como conceptualización de nuevos productos, prototipado 3D y supervisión de procesos y materiales."
      document.getElementById("speakerLectureTitle").innerHTML = "De una parte al todo"
      document.getElementById("speakerLectureText1").innerHTML = "En Energy Sistem, se concibe el diseño como un factor fundamental en todo el proceso de desarrollo y lanzamiento de un producto. Por eso en esta ponencia Tono Gandía expondrá el valor estratégico del diseño en cada una de las fases del proceso creativo de un producto tecnológico, desde que nace hasta que llega al consumidor."
      document.getElementById("speakerLectureText2").innerHTML = ""

      $("#product1").attr("src", "/images/ponentes/products/tono-gandia-00.jpg");
      $("#product2").attr("src", "/images/ponentes/products/tono-gandia-01.jpg");
      $("#product3").attr("src", "/images/ponentes/products/tono-gandia-02.jpg");
      $("#product4").attr("src", "/images/ponentes/products/tono-gandia-03.jpg");
      $("#product5").attr("src", "/images/ponentes/products/tono-gandia-02.jpg");

      if(windowWidth < 768){
        $(".images-column-speaker img").hide();
        $(".page-title h2").hide();
        $(".speaker-close").show();
        document.getElementById("speakerNameR").innerHTML = "TONO GANDÍA";
        document.getElementById("speakerCorpR").innerHTML = "ENERGY SISTEM";
        document.getElementById("speakerText1R").innerHTML = "Tono Gandia, valenciano de 29 años, es Diseñador Industrial por la UPV con un master en Ingeniería del diseño (UPV) y un master en diseño y organización industrial en el sector del mueble (CETEM). Se define a sí mismo como un apasionado de conceptualizar nuevos productos enfocados al usuario y concibe el diseño como un factor influyente en la calidad de vida de las personas."
        document.getElementById("speakerText2R").innerHTML = "Aunque comenzó con el diseño de mobiliario, desarrollando conceptos para una empresa del sector, pronto evolucionó hacia otros sectores trabajando como freelance para distintas agencias y proyectos de diseño industrial y 3D hasta que en 2013 pasó a formar parte de Energy Sistem Technology, empresa especializada en el diseño, desarrollo y comercialización de productos tecnológicos con más de 20 años de trayectoria, donde ejerze actualmente como responsable de diseño industrial llevando a cabo tareas como conceptualización de nuevos productos, prototipado 3D y supervisión de procesos y materiales."
        document.getElementById("speakerLectureTitleR").innerHTML = "De una parte al todo"
        document.getElementById("speakerLectureText1R").innerHTML = "En Energy Sistem, se concibe el diseño como un factor fundamental en todo el proceso de desarrollo y lanzamiento de un producto. Por eso en esta ponencia Tono Gandía expondrá el valor estratégico del diseño en cada una de las fases del proceso creativo de un producto tecnológico, desde que nace hasta que llega al consumidor."
        document.getElementById("speakerLectureText2R").innerHTML = ""
        $textResp.slideToggle();
      } else {
        $text.slideToggle();
      }

      $slider.slideToggle();

      startCarousel();

    break;

    case "hugo":
      document.getElementById("speakerName").innerHTML = "VÍCTOR HUGO";
      document.getElementById("speakerCorp").innerHTML = "BQ";
      document.getElementById("speakerText1").innerHTML = "Graduado como Ingeniero Técnico en Diseño Industrial en la Elisava y Master en Ingeniería del Diseño de la UPV. Trabaja actualmente en BQ, Madrid, en la posición de Devices Technical Leader, en el departamento de Mecánica y Diseño Industrial."
      document.getElementById("speakerText2").innerHTML = "Cuando llegó a BQ, hace dos años, la compañía se propuso el reto de lanzar su primer teléfono desarrollado íntegramente en España. Un mes y medio después fue destinado a Shenzen (China), donde se convertiría en el responsable del departamento de Mecánica en Asia. Así pudo trabajar directamente con las fábricas y proveedores de la empresa, haría de puente de comunicación entre oriente y occidente, y ayudaría a que en verano de 2014, el BQ Aquaris E5, saliera a la luz como primer Smartphone de BQ desarrollado en España. Desde entonces la empresa ha diseñado ocho dispositivos de plástico, y uno en cuerpo de metal."
      document.getElementById("speakerLectureTitle").innerHTML = "Cómo se hace un smartphone"
      document.getElementById("speakerLectureText1").innerHTML = "En esta ponencia, se expone el ejemplo práctico del desarrollo de un producto: <a href=\"http://www.bq.com/es/aquaris-x5\" style=\"color: #CD3161;\" target=\"_blank\"> el Aquaris X5</a>. Aprenderemos cual es el proceso de diseño de un producto tecnológico a través de este smartphone de la mano de un diseñador del equipo BQ."
      document.getElementById("speakerLectureText2").innerHTML = ""

      $("#product1").attr("src", "/images/ponentes/products/victor-hugo-00.jpg");
      $("#product2").attr("src", "/images/ponentes/products/victor-hugo-01.jpg");
      $("#product3").attr("src", "/images/ponentes/products/victor-hugo-02.jpg");
      $("#product4").attr("src", "/images/ponentes/products/victor-hugo-01.jpg");
      $("#product5").attr("src", "/images/ponentes/products/victor-hugo-02.jpg");

      if(windowWidth < 768){
        $(".images-column-speaker img").hide();
        $(".page-title h2").hide();
        $(".speaker-close").show();
        document.getElementById("speakerNameR").innerHTML = "VÍCTOR HUGO";
        document.getElementById("speakerCorpR").innerHTML = "BQ";
        document.getElementById("speakerText1R").innerHTML = "Graduado como Ingeniero Técnico en Diseño Industrial en la Elisava y Master en Ingeniería del Diseño de la UPV. Trabaja actualmente en BQ, Madrid, en la posición de Devices Technical Leader, en el departamento de Mecánica y Diseño Industrial."
        document.getElementById("speakerText2R").innerHTML = "Cuando llegó a BQ, hace dos años, la compañía se propuso el reto de lanzar su primer teléfono desarrollado íntegramente en España. Un mes y medio después fue destinado a Shenzen (China), donde se convertiría en el responsable del departamento de Mecánica en Asia. Así pudo trabajar directamente con las fábricas y proveedores de la empresa, haría de puente de comunicación entre oriente y occidente, y ayudaría a que en verano de 2014, el BQ Aquaris E5, saliera a la luz como primer Smartphone de BQ desarrollado en España. Desde entonces la empresa ha diseñado ocho dispositivos de plástico, y uno en cuerpo de metal."
        document.getElementById("speakerLectureTitleR").innerHTML = "Cómo se hace un smartphone"
        document.getElementById("speakerLectureText1R").innerHTML = "En esta ponencia, se expone el ejemplo práctico del desarrollo de un producto: <a href=\"http://www.bq.com/es/aquaris-x5\" style=\"color: #CD3161;\" target=\"_blank\"> el Aquaris X5</a>. Aprenderemos cual es el proceso de diseño de un producto tecnológico a través de este smartphone de la mano de un diseñador del equipo BQ."
        document.getElementById("speakerLectureText2R").innerHTML = ""
        $textResp.slideToggle();
      } else {
        $text.slideToggle();
      }

      $slider.slideToggle();

      startCarousel();

    break;

    default:
  }
}
//=======================================================================
