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
      body { background-color: #35383d; }
      body { background-color: rgb(174,183,175); }*/
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
    a {
      color: inherit;
    }
    </style>
    <script>
    
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-45359665-6', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <script type="text/javascript">bMostrar=0; bMostrarGuide=1;</script>
  <body>
      <div id="guideDiv" style="position: fixed; top: 0; left: 300px;" onclick="bMostrarGuide=!bMostrarGuide; if(bMostrarGuide){ $('#guideDiv').show(); }else{ $('#guideDiv').hide(); } ">
        <div id="output1" style="/*background-color:rgb(174,183,175)*/ "><span style=" font-size: 30px;  color: transparent"><b> </b></span><span style=" font-size: 30px;  color: transparent"><b>&nbsp;</b></span><span style=" font-size: 30px;  color: transparent"><b>&nbsp;</b></span><span style=" font-size: 30px;  color: transparent"><b>&nbsp;</b></span><span style=" font-size: 30px;  color: rgb(0,0,180)"><b>A</b></span><span style=" font-size: 30px;  color: rgb(0,0,180)"><b>á</b></span><span style=" font-size: 30px;  color: rgb(175,13,102)"><b>B</b></span><span style=" font-size: 30px;  color: rgb(146,248,70)"><b>C</b></span><span style=" font-size: 30px;  color: rgb(255,200,47)"><b>D</b></span><span style=" font-size: 30px;  color: rgb(255,118,0)"><b>E</b></span><span style=" font-size: 30px;  color: rgb(255,118,0)"><b>é</b></span><span style=" font-size: 30px;  color: rgb(255,152,213)"><b>F</b></span><span style=" font-size: 30px;  color: rgb(235,235,222)"><b>G</b></span><span style=" font-size: 30px;  color: rgb(100,100,100)"><b>H</b></span><span style=" font-size: 30px;  color: rgb(255,255,0)"><b>I</b></span><span style=" font-size: 30px;  color: rgb(255,255,0)"><b>í</b></span><span style=" font-size: 30px;  color: rgb(255,255,150)"><b>J</b></span><span style=" font-size: 30px;  color: rgb(55,19,112) "><b>K</b></span><span style=" font-size: 30px;  color: rgb(202,62,94)"><b>L</b></span><span style=" font-size: 30px;  color: rgb(205,145,63)"><b>M</b></span><span style=" font-size: 30px;  color: rgb(12,75,100)"><b>N</b></span><span style=" font-size: 30px;  color: rgb(12,75,100)"><b>ñ</b></span><span style=" font-size: 30px;  color: rgb(255,0,0)"><b>O</b></span><span style=" font-size: 30px;  color: rgb(255,0,0)"><b>ó</b></span><span style=" font-size: 30px;  color: rgb(175,155,50)"><b>P</b></span><span style=" font-size: 30px;  color: rgb(185,185,185)"><b>Q</b></span><span style=" font-size: 30px;  color: rgb(37,70,25)"><b>R</b></span><span style=" font-size: 30px;  color: rgb(121,33,135)"><b>S</b></span><span style=" font-size: 30px;  color: rgb(83,140,208)"><b>T</b></span><span style=" font-size: 30px;  color: rgb(0,154,37)"><b>U</b></span><span style=" font-size: 30px;  color: rgb(0,154,37)"><b>ú</b></span><span style=" font-size: 30px;  color: rgb(178,220,205)"><b>V</b></span><span style=" font-size: 30px;  color: rgb(169,34,0)"><b>W</b></span><span style=" font-size: 30px;  color: rgb(0,0,74)"><b>X</b></span><span style=" font-size: 30px;  color: rgb(175,200,74)"><b>Y</b></span><span style=" font-size: 30px;  color: rgb(63,25,12)"><b>Z</b></span><!--<span style=" font-size: 30px;  color: rgb(0,0,180)"><b>0</b></span><span style=" font-size: 30px;  color: rgb(175,13,102)"><b>1</b></span><span style=" font-size: 30px;  color: rgb(146,248,70)"><b>2</b></span><span style=" font-size: 30px;  color: rgb(255,200,47)"><b>3</b></span><span style=" font-size: 30px;  color: rgb(255,118,0)"><b>4</b></span><span style=" font-size: 30px;  color: rgb(255,152,213)"><b>5</b></span><span style=" font-size: 30px;  color: rgb(235,235,222)"><b>6</b></span><span style=" font-size: 30px;  color: rgb(100,100,100)"><b>7</b></span><span style=" font-size: 30px;  color: rgb(255,255,0)"><b>8</b></span><span style=" font-size: 30px;  color: rgb(255,255,150)"><b>9</b></span><span style=" font-size: 30px;  color: transparent"><b>
    </b></span><span style=" font-size: 30px;  color: transparent"><b>  </b></span>-->
        </div>
      </div>
      <script type="text/javascript">_ww=$(window).width(); _gw=$("#guideDiv").width(); _gw=$("#guideDiv").css("left", ((_ww-_gw)/2)+"px" ); </script>
      
      <div style="color:green; "  class="dropdown">
      <a href="#" onclick="bMostrar=!bMostrar; if(bMostrar){ $('#controlsDiv').show(); }else{ $('#controlsDiv').hide(); } "> Config</a>
      <a href="#" onclick="bMostrarGuide=!bMostrarGuide; if(bMostrarGuide){ $('#guideDiv').show(); }else{ $('#guideDiv').hide(); } "> Guide </a>
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
    v min <input type="text" value="0.35" id="vMin" style="width:35px;">
    v max <input type="text" value="0.5" id="vMax" style="width:35px;">
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
    collision <input type="checkbox" onclick="collision=!collision;" checked>
    &nbsp; <a href="https://github.com/vernetit/readTracker" target="_blank">https://github.com/vernetit/readTracker3d</a>

    
    </center>

  </div>
  </div>
  </div>
    
      <a-scene id="myScene" onclick="goNextPhrase()">
        <!-- Cube -->
        <a-entity position="0 0 -12" rotation="45 30 0"
                  geometry="primitive: box; height: 4; width: 4; depth: 8;"
                  material="color: #167341; roughness: 1.0; metalness: 0.2;" id="cube1"></a-entity>
      </a-scene>



    <script src="js/app/readTracker3d.js"></script>
  </body>

