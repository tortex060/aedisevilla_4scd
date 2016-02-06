<?php
  include ("navbar.html");
 ?>
<header>
  <div class="page-title">
    <h2>PONENTES</h2>
  </div>
</header>

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
        </div>
        <div class="images-column-speaker" id="josegon1" onclick="showSpeakerInfo(this.id)">
          <div class="images-column-speaker-name">
            <p>José González<br><span>ZUMEX</span></p>
          </div>
          <img src="images/ponentes/jose-gonzalez.jpg" alt="jose gonzalez"/>
        </div>
        <div class="images-column-speaker center-speaker">
          <div class="images-column-speaker-name">
            <p>Marc Fabra<br><span>LUCID</span></p>
          </div>
          <img src="images/ponentes/marc-fabra.jpg" alt="marc fabra" />
        </div>
        <div class="images-column-speaker">
          <div class="images-column-speaker-name">
            <p>Pol Andrés<br><span>LUCID</span></p>
          </div>
          <img src="images/ponentes/pol-andres.jpg" alt="pol andres" />
        </div>
        <div class="images-column-speaker center-speaker">
          <div class="images-column-speaker-name">
            <p>Gerard Miró<br><span>LO SIENTO STUDIO</span></p>
          </div>
          <img src="images/ponentes/gerard-miro.jpg" alt="gerard miro" />
        </div>
        <div class="images-column-speaker">
          <div class="images-column-speaker-name">
            <p>Borja Martínez<br><span>LO SIENTO STUDIO</span></p>
          </div>
          <img src="images/ponentes/borja-martinez.jpg" alt="borja martinez" />
        </div>
      </div>


    <div class="speaker-info-text" style="width: 50%; padding: 15px;">
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
