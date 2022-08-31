<!-- ----------------------------------------------Formul'hair---------------------------------------------------------- -->
<!------------------------------ Pour un meilleur formulaire voir celui de Mathieu sur discord -->
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        setlocale(LC_TIME, 'fr_FR');
        date_default_timezone_set('Europe/Paris');
        utf8_encode(strftime('%A %d %B %Y, %H:%M'));
    ?>
    <title>Document</title>
</head>
<body>
    <h3></h3>
    <form action="" method="post">
        <p>Nom : <input type="text" name="nom"></p>
        <p>Prénom : <input type="text" name="prenom"></p>
        <p>E-mail : <input type="email" name="mail" ></p>
        <p>Identifiant : <input type="text" name="login" ></p>
        <p>Mot de passe : <input type="password" name="password" ></p>
        <p>Date : <input type="date" name="date"></p>
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>
</body>
</html>
<?php

//--------------------------------------------Méthode Get (ne pas utiliser en formulaire)-----------------------------------------------------

    // //test si le bouton à été cliqué
    // if(isset($_GET['submit'])){
    //     //tester si les champs sont remplis
    //     if(!empty($_GET['nom']) AND !empty($_GET['prenom'])){
    //         echo '<p>Le compte '.$_GET['prenom'].' a été ajouté</p>';
    //     }
    //     else{
    //         echo '<p>Veuillez remplir tous les champs</p>';
    //     }
    // }
    // //test bouton non cliqué
    // else{
    //     echo '<p>Pour ajouter un utilisateur 
    //     cliquez sur le bouton ajouter</p>';
    // }


// -----------------------------------------Méthode POST (à utiliser en formulaire)---------------------------------------------
// La fct isset permet de savoir si la variable est déclarée, d'où le nom à l'input submit qui lui permet de lui donner un nom en cliquant dessus.
//-----------------------------------------Et utilisation de la date en français avec l'objet DateTime +++ création d'un tableau semaine réutilisable avec date('N') 
// qui renvoie un numéro de tableau

    $maintenant = new DateTime();
    $semaine = array(" Lundi "," Mardi "," Mercredi "," Jeudi ", " vendredi "," samedi ", " Dimanche ");

    if(isset($_POST['submit'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['date'])){
            echo 'Le compte '.$_POST['mail'].' à été ajouté le '.$semaine[date('N')-1].' '.$maintenant->format('d/m /Y').'';
        }
        else{
            echo "<p>Bouh Wendy Bouh</p>";
        }
    }
    else{
        echo "<p>Bouh t'as pas cliqué</p>";
    }
?>