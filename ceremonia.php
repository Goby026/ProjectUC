<!doctype html>
<html >
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(inicio)
       function inicio() {
        $("select").change(cambiacss)
        }
        function cambiacss(){
            var plantilla=$("select").attr("value");
        $("plantilla").html('<link rel="stylesheet" href="css/'+plantilla+'.css" type="text/css">')
     }
</script>
<link rel="stylesheet" href="css/css.css" type="text/css">

</head>
<body>
        <div id="titulo">
                <h1> CEREMONIA </h1>
                </div>
    <div id="contenedor">
        <header>
            
        </header>
        <section>
            <div id="contieneformulario">
           <p> Acto o serie de actos públicos y formales de acuerdo con 
               reglas o ritos fijados por la ley o por la costumbre.ewe
            fefefefef fefeerer rererere rererere rererer rerer erererer 
        rerererer wrer ere  re rererreerre</p>
            </div>

        </section>
        <br/>
        <br/>
              
              <div class="row">
                <div class="col-3 col-s-3 menu">
                  <ul>
                    <li>Ver Mas</li>
                  </ul>
                </div>
              
                <div class="col-6 col-s-9">
                  <h2>CEREMONIA DE INAGURACION</h2>
                  <video width="400" controls>
                    <source src="mov_bbb.mp4" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML5 video.
                  </video>
                </div>
                </div>
      
        <div class="row">
                <div class="col-3 col-s-3 menu">
                  <ul>
                    <li>Ver Mas</li>
                  </ul>
                </div>
              
                <div class="col-6 col-s-9">
                  <h2>CEREMONIA DE ClAUSURA</h2>
                  <video width="400" controls>
                    <source src="mov_bbb.mp4" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                    Your browser does not support HTML5 video.
                  </video>
                </div>
                </div>
        <div style="clear:both;"></div>
        <footer>
            <h6>(c)2019 Juegos Panamericanos</h6>
        </footer>
    </div>
</body>
</html>