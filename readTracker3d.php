<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cube</title>
    <meta name="description" content="Cube - A-Frame">


    <script src="js/jquery.min.js"></script>
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src="js/aframe-master.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.12/vue.min.js"></script>

    <!--  https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.12/vue.min.js -->
    <style>
      body { background-color: black; }
    </style>
  </head>
  <body>
    
      
   

      <a-scene id="myScene">
        <!-- Cube -->
        <a-entity position="0 0 -12" rotation="45 30 0"
                  geometry="primitive: box; height: 4; width: 4; depth: 8;"
                  material="color: #167341; roughness: 1.0; metalness: 0.2;" id="cube1"></a-entity>
      </a-scene>



    
    <script src="js/app/readTracker3d.js"></script>
  </body>

