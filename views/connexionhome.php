<!DOCTYPE html>
<html lang="en">
 <?php 
   
    require_once 'models/connexion.php';
 ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <?php
      
          if (isset($_POST['Pseudo']) || isset($_POST['Password']) ) //Oublie d'un champ
            {
                
                $bdd = getConnexion();
                $query=$bdd->prepare('SELECT *
                FROM user WHERE identifiant = :Pseudo AND mdp = :Password');
                $query->bindValue(':Pseudo',$_POST['Pseudo'], PDO::PARAM_STR);
                $query->bindValue(':Password',$_POST['Password'], PDO::PARAM_STR);
                $query->execute();
                
              
                
            /*if ($data = $query->fetch()) // Acces OK !
            {
                $_SESSION['Pseudo'] = $data['identifiant'];
                $_SESSION['id'] = $data['id_s'];
                $_SESSION['connecter'] = true;
                $message = '<p>Bienvenue '.$data['identifiant'].', 
                    vous êtes maintenant connecté!</p>
                    <p>Cliquez <a href="./index.php">ici</a> 
                    pour revenir à la page d accueil</p>'; 
                echo $message;
            }
            else // Acces pas OK !
            {
                $message = '<p>Une erreur s\'est produite 
                pendant votre identification.<br /> Le mot de passe ou le pseudo 
                    entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
                pour revenir à la page précédente
                <br /><br />Cliquez <a href="./index.php">ici</a> 
                pour revenir à la page d accueil</p>';
            }
            }*/
               
    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-push-4 col-xs-12">
      <form class="form-signin" method="post" action="#">
        <h2 class="form-signin-heading">Connectez-vous :</h2>
        <label class="sr-only">Adresse Email</label>
        <input type="text" name="Pseudo" id="Pseudo" class="form-control" placeholder="Identifiant">
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="Password" id="Password" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se rappeler de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>

    </div> <!-- /container -->
    </div>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
