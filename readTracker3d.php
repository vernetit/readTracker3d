<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ReadTracker3d</title>
    <meta name="description" content="Cube - A-Frame">


    <script src="js/jquery.min.js"></script>
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src="js/aframe-master.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.12/vue.min.js"></script>

    <!--  https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.12/vue.min.js -->
    <style>
      body { background-color: black; }
        /*
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
           
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    */
    </style>
  </head>
  <script type="text/javascript">bMostrar=0;</script>
  <body>
      <div style="color:green"  class="dropdown"><a href="#" onclick="bMostrar=!bMostrar; if(bMostrar){ $('#controlsDiv').show(); }else{ $('#controlsDiv').hide(); } "> Config</a>
      <div class="dropdown-content" style="width: 800px !important; display:none;" id="controlsDiv">
      <div style="color: green" id="screen"></div>
      

  <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->

  <div id="controles" style="/*display:none;*/">
  <center>    
    <span style="display:none;">
      <input type="button" value="start" onclick="start();">
      <input type="button" value="answer" onclick="answer();">

      follow
      <select id="cantidadBolas">
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>

      time
      <select id="time">
        <option value="5">5</option>
        <option value="6" selected>6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
      </select>
    </span>
    v min <input type="text" value="8" id="vMin" style="width:35px;">
    v max <input type="text" value="10" id="vMax" style="width:35px;">
    <input type="button" value="+" onclick="aumenta();">
    <input type="button" value="-" onclick="disminuye();">

    <input type="button" value="nextPhrase" onclick="goNextPhrase()">
    <input type="button" value="prevPhrase" onclick="goPrevPhrase()">

    <span style="display:none;">
      Autoplay <input type="checkbox" onclick="autoplay=!autoplay;" checked>
      collision <input type="checkbox" onclick="collision=!collision;" id="coll-ch" checked>
      auto-correct <input type="checkbox" onclick="autoCorrect=!autoCorrect;" checked>
    </span>
    chColor <input type="checkbox" onclick="bChColor=!bChColor;">
    &nbsp; <a href="https://github.com/vernetit/readTracker" target="_blank">https://github.com/vernetit/readTracker3d</a>

    
    </center>

  </div>
  </div>
  </div>
    
      <a-scene id="myScene">
        <!-- Cube -->
        <a-entity position="0 0 -12" rotation="45 30 0"
                  geometry="primitive: box; height: 4; width: 4; depth: 8;"
                  material="color: #167341; roughness: 1.0; metalness: 0.2;" id="cube1"></a-entity>
      </a-scene>



    <script src="js/app/readTracker3d.js"></script>
  </body>

