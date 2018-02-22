<?php require_once("../private/initialize.php"); ?>

<!DOCTYPE html>
<html>
    
    <head>
       <title>Nice Trip Beta</title>
       <style type="text/css">
           .card-header, .btn {
               font-family: 'Oswald', sans-serif;
              }
            header {
                
             font-family: 'Lobster', cursive;
            
            }
       </style>
       
	<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <header>
        <?php require_once(SHARED_PATH."/header.php")?>
    </header>
    
    <body class="bg-light container-fluid" style="background: url("https://en.wikipedia.org/wiki/Nice#/media/File:Hafen_von_Nizza.jpg")">
          <?php require_once(PUBLIC_PATH."/login.php") ?>
    </body>
    
    <footer>
        <?php require_once(SHARED_PATH."/footer.php")?>
    </footer>
    
    <?php require_once(SHARED_PATH."/dependencies.php")?>
      
</html>