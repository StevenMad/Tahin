<?php

include 'fonctions.php';
if (isset($_POST['valider'])){
    
    if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prenom']) && !empty($_POST['prenom'])) 
    && (isset($_POST['identifiant']) && !empty($_POST['identifiant'])) && (isset($_POST['psw']) && !empty($_POST['psw']))) {
    
        // récupération des infos d'insctiption
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $identifiant=$_POST['identifiant'];
        $psw=$_POST['psw'];
        $psw=hash("sha256",$psw);
        
    if(verificationIdent($identifiant) === false){
    echo ' identifiant déjà pris!';
    header('Refresh:5; URL= http://localhost/acces.php#inscription');
    } else{    
//fonction insertion dans base

    insertion ($identifiant,$nom,$prenom,$psw);
    header('Refresh:1; URL= http://localhost/acces.php#radioConnect');
    }
   
    }else{
    echo"certains champs sont vides";
    }
}else{
echo'veuillez valider ';
 }

   // vérification de L'identifiant ( fonctions)'



