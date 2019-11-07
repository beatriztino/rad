<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Barra Circular de Carregamento</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
     <link rel="stylesheet" href="bootstrap/bootstrap.css">
     <link rel="stylesheet" href="radial.css">
     <script src="js/jquery-3.4.1.js"></script>
     <script src="js/script.js"></script>
     <script src="jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
     <script src="js/plugin.js"></script>

  </head>
  <body>
    <div class="" id = "fundo">
    <div class="" >
      <h1>Barra Circular de Carregamento</h1>
      <h2>Como utillizar:</h2>
      <h5> Inicialmente baixe o plugin:</h5>
      <a href="https://www.jqueryscript.net/loading/jQuery-Circular-Progress-Bar-With-Text-Counter.html"> Circular-Progress-Bar</a>
      <h5>Em seguida adicione as importações: </h5>
      <img src="img/script1.png" alt="">
      <h5>Após crie uma div com a seguinte classe: </h5>
      <img src="img/script2.png" alt="">
    </div>
    <div class="my-progress-bar">
    </div>
    </div>
    <script type="text/javascript">
var progress_circle = $(".my-progress-bar").gmpc({

    // color
    color: "#000000",

    // height
    height: "300px",

    // width
    width: "300px",

    // line width
    line_width: 8,

    // stating value
    starting_position: 25,

    // max value
    percent: 100,

    // false = counterclockwise
    counter_clockwise: false,

    // show value
    percentage: true,

    // custom counter text
    text: ''

})
</script>
  </body>
</html>
