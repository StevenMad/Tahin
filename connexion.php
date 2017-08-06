<?php
include 'fonctions.php';
    if (isset($_POST['valider'])){

    if ((isset($_POST['ident']) && !empty($_POST['ident']))  
    && (isset($_POST['psw']) && !empty($_POST['psw']))) {

        // récupération des infos de connex
        $identifiant=$_POST['ident'];
        $psw=$_POST['psw'];

      if(connectionIdent($identifiant,$psw) ===true){
          session_start();
          $_SESSION['id'] = $identifiant;
          $_SESSION['psw'] = hash("sha256",$psw);
        
          header ('Refresh:0; URL= http://localhost/pageconnect.php');

      }else{
          Echo 'Identifiant ou mot de passe incorrects, vous allez être redirigé';
          header ('Refresh :3; URL=http://localhost/acces.php#connexion');
      }
    }
    }