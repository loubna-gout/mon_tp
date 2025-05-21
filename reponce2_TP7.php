<!doctype html>
<html>
  <head>
    <link rel="icon" type="image/png" href="ico.png"/>
    <meta charset="utf-8" />
    <title>
      Test Formulaire PHP
    </title>
  </head>
  <body>
    <?php
    
      if(!empty($_POST['nom'])){
          
          echo "<br/><br/> <h1>Bonjour " . $_POST['titre'] . " " . $_POST['prenom'] . " " . $_POST['nom'] . "</h1><br/>";
          echo "<h2> Votre identifiant est : " . $_POST['identifiant'] . "</h2>";
          echo "<h2> Votre mot de passe est : " . $_POST['mdp'] . "</h2><br/>";
          if(isset($_POST['annee'])){
            echo " <h1>Voilà  votre année de naissance :". $_POST['annee']. "</h1><br/>" ;
          if($_POST['sexe'] == 'H') {
              $mot = "débutant";
          }
          else {
              $mot = "débutante";
          }
          
        
          if(isset($_POST['debutant'])){
              echo "<h2> Comme vous êtes " . $mot . ", c'est une bonne idée de commencer à apprendre à programmer en PHP !</h2><br/><br/>";
          }
  
      
            
      }
    }
     
    ?>
  </body>
</html>
