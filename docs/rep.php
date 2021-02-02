<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Life Care - Responsive HTML5 Multi Page Template</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Alignment CSS -->
   <link rel="stylesheet" href="css/alignment.css">
   <!-- Media CSS -->
   <link rel="stylesheet" href="css/media.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   <script src="js/main.js"></script>
   </head>
   <body>
            <form action="php/traitement.php" method="post">
                <div class="code" >
                    <div id="div">
                        <input id="boite" type="password" name="code" placeholder="Entrez un code" required>
                    </div>
                        <!--bouton d'ajout-->
                        <button type="button" onclick="addInput()">+</button>
                </div>
                <div class="form">
                    <!--bouton relié au form-->
                    <button type="submit">Valider</button>
                </div>
                
            </form>

            
            
            <div><?php if(isset($_GET['r'])){echo $_GET['r'];};?></div>
       
   </body>