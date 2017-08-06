<?php
 
//Fonction de vérification de connexion

 //fonction d'insertion données dans base à l'inscription

 //fonction de vérification identifiant

function verificationIdent ($ident){

    /*connexion à la base de données */
    $bdd= 'tahin';
    $hote='localhost';
    $user='root';
    $mdp='rootroot';

    $conn=mysqli_connect($hote,$user,$mdp,$bdd);
    /*if (mysqli_connect_errno()){
        echo"failed";
    }else{
        echo"connected";
    }*/

    /*verification identifiant*/

    $req=('SELECT  FROM abonnes WHERE identifiant = "'.$ident.'"');
    $res=mysqli_query($conn,$req);

    if (!$res){ // si res est true alors la requete renvoie l'existance d'un identifiant identique, dans le cas contraire
    //si res est vide donc !res true, alors la requête ne renvoie rien .
     return true;   
      }else{
    return false;
      }
      
}

function insertion ($ident,$nom,$prenom,$psw){
      /*connexion à la base de données */
    $bdd= 'tahin';
    $hote='localhost';
    $user='root';
    $mdp='rootroot';

    $conn=mysqli_connect($hote,$user,$mdp,$bdd);
  
    $req =('INSERT INTO abonnes (identifiant,nom, prenom, mdp)VALUES("'.$ident.'","'.$nom.'","'.$prenom.'","'.$psw.'")');
    $res=mysqli_query($conn,$req);
     if (!$res){
        echo'erreur d\'inscription';
        exit;
    }
}

function connectionIdent ($ident,$psw){
    $bdd= 'tahin';
    $hote='localhost';
    $user='root';
    $mdp='rootroot';
    $psw=hash("sha256",$psw);

    $conn=mysqli_connect($hote,$user,$mdp,$bdd);
    $req=('SELECT * FROM abonnes WHERE identifiant = "'.$ident.'"');
    $res=mysqli_query($conn,$req);
    if($res ===false)
    {
        echo "erreur pas d'identifiant";
        return false;
    }

    if (mysqli_num_rows($res)==1){ // si res est true alors la requete renvoie l'existance d'un identifiant identique, dans le cas contraire
    //si res est vide donc !res true, alors la requête ne renvoie rien .
     while ($row= mysqli_fetch_assoc($res)){
        if($row['mdp']===$psw) {
            return true;
             }else{
            return false;
             }
}
    }
}

