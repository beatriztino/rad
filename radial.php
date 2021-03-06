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


    <header>
      <!-- Menu Fixo -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Barra Circular de Carregamento</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <br>
        <br>
            <br>
    <div class="row" >
      <div class="col-md-4">
        <div class="my-progress-bar">
        </div>
      </div>

      <div class="col-md" align="justify" >
          <div class="" >
            <h1>Barra Circular de Carregamento</h1>
            <br>
            <h2>Como utillizar:</h2>
            <h6> (É necessário que você já tenha o jQuery.)</h6>
            <h5> 1 - Download:</h5>
            <a href="https://www.jqueryscript.net/loading/jQuery-Circular-Progress-Bar-With-Text-Counter.html"> Circular-Progress-Bar</a>
            <br>
            <br>
            <h5> 2 - Adicionar as importações: </h5>
            <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:400px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
  2
  3</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;script </span><span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot;js/script.js&quot;</span><span style="color: #007700">&gt;&lt;/script&gt;</span>
  <span style="color: #007700">&lt;script </span><span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot;js/plugin.js&quot;</span><span style="color: #007700">&gt;&lt;/script&gt;</span>
  <span style="color: #007700">&lt;link</span> <span style="color: #0000CC">rel=</span><span style="background-color: #fff0f0">&quot;stylesheet&quot;</span> <span style="color: #0000CC">href=</span><span style="background-color: #fff0f0">&quot;radial.css&quot;</span><span style="color: #007700">&gt;</span>
  </pre></td></tr></table></div>

            <br>
            <h5> 3 - Defina um local na página para a barra de carregamento: </h5>
            <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:350px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;div</span> <span style="color: #0000CC">class=</span><span style="background-color: #fff0f0">&quot;my-progress-bar&quot;</span><span style="color: #007700">&gt;&lt;/div&gt;</span>
          </pre></td></tr></table></div>
          <br>
          <br>
          <h5> 4 - Adicione o estilo ao CSS: </h5>
          <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:450px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #BB0066; font-weight: bold">.circular-progress-bar</span> {
  <span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">relative</span>;
  <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #008800; font-weight: bold">auto</span>;
  transform<span style="color: #333333">:</span> rotate(<span style="color: #6600EE; font-weight: bold">-90</span>deg);
}

<span style="color: #BB0066; font-weight: bold">.progress-percentage</span><span style="color: #333333">,</span> <span style="color: #BB0066; font-weight: bold">.progress-text</span> {
  <span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">absolute</span>;
  <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">%</span>;
  <span style="color: #008800; font-weight: bold">top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">50</span><span style="color: #333333">%</span>;
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">50</span><span style="color: #333333">%</span>;
  transform<span style="color: #333333">:</span> translate(<span style="color: #6600EE; font-weight: bold">-50</span><span style="color: #333333">%,</span> <span style="color: #6600EE; font-weight: bold">-50</span><span style="color: #333333">%</span>) rotate(<span style="color: #6600EE; font-weight: bold">90</span>deg);
  <span style="color: #008800; font-weight: bold">text-align</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">center</span>;
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span> <span style="color: #6600EE; font-weight: bold">60px</span>;
}

<span style="color: #BB0066; font-weight: bold">.progress-percentage</span> {
  <span style="color: #008800; font-weight: bold">font-size</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">60px</span>;
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">60</span><span style="color: #333333">%</span>;
}

<span style="color: #BB0066; font-weight: bold">.progress-text</span> {
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">35</span><span style="color: #333333">%</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#585858</span>;
  <span style="color: #008800; font-weight: bold">font-size</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">21px</span>;
}
</pre></td></tr></table>
</div>

                <br>
                <br>
                <h5> 5 - Configuração padrão:</h5>
                <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:600px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
                2
                3
                4
                5
                6
                7
                8
                9
                10
                11
                12
                13
                14
                15
                16
                17
                18
                19
                20
                21
                22
                23
                24
                25
                26
                27
                28
                29
                30</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">var</span> progress_circle <span style="color: #333333">=</span> $(<span style="background-color: #fff0f0">&quot;.my-progress-bar&quot;</span>).gmpc({

                  <span style="color: #888888">// color</span>
                  color<span style="color: #333333">:</span> <span style="background-color: #fff0f0">&quot;#000000&quot;</span>,

                  <span style="color: #888888">// height</span>
                  height<span style="color: #333333">:</span> <span style="background-color: #fff0f0">&quot;300px&quot;</span>,

                  <span style="color: #888888">// width</span>
                  width<span style="color: #333333">:</span> <span style="background-color: #fff0f0">&quot;300px&quot;</span>,

                  <span style="color: #888888">// line width</span>
                  line_width<span style="color: #333333">:</span> <span style="color: #0000DD; font-weight: bold">8</span>,

                  <span style="color: #888888">// stating value</span>
                  starting_position<span style="color: #333333">:</span> <span style="color: #0000DD; font-weight: bold">25</span>,

                  <span style="color: #888888">// max value</span>
                  percent<span style="color: #333333">:</span> <span style="color: #0000DD; font-weight: bold">100</span>,

                  <span style="color: #888888">// false = counterclockwise</span>
                  counter_clockwise<span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">false</span>,

                  <span style="color: #888888">// show value</span>
                  percentage<span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">true</span>,

                  <span style="color: #888888">// custom counter text</span>
                  text<span style="color: #333333">:</span> <span style="background-color: #fff0f0">&#39;&#39;</span>

                })
              </pre></td></tr></table>
            </div>
          </div>
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
</div>
  </body>
</html>
