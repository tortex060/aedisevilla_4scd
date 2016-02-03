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
            <img  src="images/ponentes/products/jose-gonzalez-00.jpg" alt="" />
            <img  src="images/ponentes/products/jose-gonzalez-01.jpg" alt="" />
            <img  src="images/ponentes/products/jose-gonzalez-02.jpg" alt="" />
            <img  src="images/ponentes/products/jose-gonzalez-01.jpg" alt="" />
            <img  src="images/ponentes/products/jose-gonzalez-02.jpg" alt="" />
          </div>
          <div class="buttons">
            <div class="btn prev"><</div>
            <div class="btn next">></div>
          </div>
        </div>
        <div class="images-column-speaker">
          <img src="images/ponentes/jose-gonzalez.jpg" alt="" id="josegon1" onclick="showSpeakerInfo(this.id)"/>
        </div>
        <div class="images-column-speaker center-speaker">
          <img src="images/ponentes/marc-fabra.jpg" alt="" />
        </div>
        <div class="images-column-speaker">
          <img src="images/ponentes/pol-andres.jpg" alt="" />
        </div>
        <div class="images-column-speaker center-speaker">
          <img src="images/ponentes/gerard-miro.jpg" alt="" />
        </div>
        <div class="images-column-speaker">
          <img src="images/ponentes/borja-martinez.jpg" alt="" />
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
