<?php
    if (isset($_POST['gabe'])) {
        $gaben = $_POST['gabe'];
        $gabenwebsite = array("http://gaben.tv", "http://gabegaming.com/");
        $nummer = mt_rand(0, 1);

        if ($gaben == "gaben" || $gaben == "gabe" || $gaben == "steam") {
            header("Location: $gabenwebsite[$nummer]");
            echo "";
        } else {
        }
    }
 ?>

 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="robots" content="all">
         <meta name="language" content="Dutch">
         <meta name="description" content="werkmanrooster">
         <meta name="keywords" content="rooster, werkmanrooster, stadslyceum, werkman college, werkman, werkmancollege rooster">
         <meta name="copyright" content="copyright">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="css/style.css">
         <link href="http://allfont.net/allfont.css?fonts=oswald-stencil-bold" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
         <title>geit mekker kaas</title>
     </head>
     <body>
         <div id="title">WERKMANROOSTER</div>
         <div class="row zoek">
             <div class="col l3 m3 s1"></div>
             <form method="post" class="col l6 m6 s10">
                 <div class="row">
                     <div class="input-field col s12 center">
                         <input id="zoek" type="text" name="gabe" class="validate center">
                         <label for="zoek">Zoeken: Je naam, leerlingnummer, docentcode, klas of lokaalnummer</label>
                     </div>
                 </div>
             </form>
             <div class="col l3 m3 s1"></div>

         </div>
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

     </body>
 </html>
