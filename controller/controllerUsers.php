<?php

// liée avec la base de donnée
$user = new user();
if (isset($_POST['submit'])) {
     //relié au model.php avec (class user extends)
    $formError = [];
    $formSucess = [];
    if (!empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['pseudo'])  && !empty($_FILES['fileAvatar'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // proteger mdp et xss

        $tmpName = $_FILES['fileAvatar']['tmp_name'];
        $avatar = $_FILES['fileAvatar']['name'];
        $size = $_FILES['fileAvatar']['size'];
        $error = $_FILES['fileAvatar']['error'];

        $tabExtension = explode('.', $avatar);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        $formSucess['sucess'] =  "compte crée!";

        
        if(in_array($extension, $extensions) && $error == 0){

            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $avatar = $uniqueName.".".$extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            
            move_uploaded_file($tmpName, './avatar/'.$avatar);
        }
        else{
            echo "Une erreur est survenue";
        }


    } else {
        echo $formError['mail'] = "mail non validée! <br>";
        echo $formError['pseudo'] = "pseudo non validée! <br>";
        echo $formError['mdp'] = "mdp non validée! <br>";
        var_dump($_FILES);
       
    }

    if (empty($formError)) {
        $user->mail = $mail;
        $user->mdp = $mdp;
        $user->pseudo = $pseudo;
        $user->avatar = $avatar;
        $user->insertUser();
        header('location:index.php?connexion');
    }
}