<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
    .map_canvas {
      width:100%;
      height:100%;
      position: absolute;
      top: 0px;
      left: 0px;
    }
    </style>

  </head>
  <body>
      <div class="map_canvas">
  	     {!! Mapper::render() !!}
  </div>
  </body>
</html>
