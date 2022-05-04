<?php

// liée avec la base de donnée
$user = new user();
if (isset($_POST['submit'])) {
     //relié au model.php avec (class user extends)
    $formError = [];
    $formSucess = [];
    if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // proteger mdp et xss
        

        $formSucess['sucess'] =  "compte crée!";
    } else {
        echo $formError['mail'] = "mail non validée!";
        echo $formError['mdp'] = "mdp non validée! <br>";
       
    }

    if (empty($formError)) {
        $user->mail = $mail;
        $user->mdp = $mdp;
        $user->insertUser();
        //header('location:index.php?connexionAdmin');
        //var_dump($user);
    }
}
//$user->getUser();