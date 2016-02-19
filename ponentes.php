<?php
  include ("navbar.html");
 ?>
<header>
  <div class="page-title">
    <h2>PONENTES</h2>
  </div>
</header>
<script type="text/javascript">
  $(document).ready(function(){
    $("header").css({background:"url(/images/cabecera-rosa.jpg) no-repeat center", "background-size": "cover"});
    //$(".nav-container").css({background:"url(/images/cabecera-verde.jpg) no-repeat center", "background-size": "cover"});
  });
</script>

  <img class="speaker-close" src="images/close.png" alt="" onclick="speakerClose()"/>

<div class="page-container">

  <div class="page-content">

      <div class="images-column">
        <div class="speaker-info-image">
          <div id="owl" class="owl-carousel">
            <img id="product1" src="" alt="" />
            <img id="product2" src="" alt="" />
            <img id="product3" src="" alt="" />
            <img id="product4" src="" alt="" />
            <img id="product5" src="" alt="" />
          </div>
          <div class="buttons">
            <div class="btn prev"><</div>
            <div class="btn next">></div>
          </div>
          <div class="speaker-info-text-resp">
            <h4 id="speakerNameR"></h4>
            <h5 id="speakerCorpR"></h5>
            <p id="speakerText1R" class="light-bg"></p>
            <p id="speakerText2R" class="light-bg"></p>
            <h5 id="speakerLectureTitleR" class="pink-lower"></h5>
            <p id="speakerLectureText1R" class="light-bg"></p>
            <p id="speakerLectureText2R" class="light-bg"></p>
          </div>
        </div>

        <div class="images-column-speaker" id="gandia" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Tono Gandía<br><span>ENERGY SISTEM</span></p>
          </div>
          <img src="images/ponentes/tono-gandia.jpg" alt="tono gandia"/>
        </div>

        <div class="images-column-speaker center-speaker" id="benedito" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Ramón Benedito<br><span>BENEDITO DESIGN</span></p>
          </div>
          <img src="images/ponentes/ramon-benedito.jpg" alt="ramon benedito"/>
        </div>

        <div class="images-column-speaker " id="jmoreno" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Jaime Moreno<br><span>MORMEDI</span></p>
          </div>
          <img src="images/ponentes/mormedi.jpg" alt="jaime moreno"/>
        </div>

        <div class="images-column-speaker" id="jaimearanda" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Jaime Aranda<br><span>workINcompany</span></p>
          </div>
          <img src="images/ponentes/jaime-aranda.jpg" alt="jaime aranda"/>
        </div>

        <div class="images-column-speaker center-speaker" id="israelcastro" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Israel Castro<br><span>MOUNTAIN</span></p>
          </div>
          <img src="images/ponentes/israel-castro.jpg" alt="israel castro"/>
        </div>

        <div class="images-column-speaker " id="lauracamara" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Laura Cámara<br><span>IMAGINARIUM</span></p>
          </div>
          <img src="images/ponentes/laura-camara.jpg" alt="laura camara"/>
        </div>

        <div class="images-column-speaker" id="josegon1" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>José González<br><span>ZUMEX</span></p>
          </div>
          <img src="images/ponentes/jose-gonzalez.jpg" alt="jose gonzalez"/>
        </div>

        <div class="images-column-speaker center-speaker" id="marcfabra2" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Marc Fabra<br><span>LÚCID</span></p>
          </div>
          <img src="images/ponentes/marc-fabra.jpg" alt="marc fabra" />
        </div>

        <div class="images-column-speaker " id="polandres" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Pol Andrés<br><span>LÚCID</span></p>
          </div>
          <img src="images/ponentes/pol-andres.jpg" alt="pol andres" />
        </div>

        <div class="images-column-speaker center-speaker" id="gerardmiro" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Gerard Miró<br><span>LO SIENTO STUDIO</span></p>
          </div>
          <img src="images/ponentes/gerard-miro.jpg" alt="gerard miro" />
        </div>

        <div class="images-column-speaker" id="borjamartinez" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>Borja Martínez<br><span>LO SIENTO STUDIO</span></p>
          </div>
          <img src="images/ponentes/borja-martinez.jpg" alt="borja martinez" />
        </div>

      </div>


    <div class="speaker-info-text">
      <h4 id="speakerName"></h4>
      <h5 id="speakerCorp"></h5>
      <p id="speakerText1" class="light-bg"></p>
      <p id="speakerText2" class="light-bg"></p>
      <h5 id="speakerLectureTitle" class="pink-lower"></h5>
      <p id="speakerLectureText1" class="light-bg"></p>
      <p id="speakerLectureText2" class="light-bg"></p>
    </div>


  </div>
</div>
