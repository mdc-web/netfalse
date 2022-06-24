<?php
$user = new user();//DECLARATION D'UN NOUVEL OBJET STOCKÉ DANS LA VARIABLE
if (isset($_POST['submit'])) {//RECUPERATION DE LA SOUMISSION DU FORMULAIRE
    $formError = [];
    $formSucess = [];
    if (!empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['pseudo'])  && !empty($_FILES['fileAvatar'])) {
//RECUPERATION DES DONNÉES SOUMISE VIA LE FORMULAIRE
        $mail = htmlspecialchars($_POST['mail']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // proteger mdp et xss
//GESTION DE L'ARRAY DU FILE
        $tmpName = $_FILES['fileAvatar']['tmp_name'];
        $avatar = $_FILES['fileAvatar']['name'];
        $size = $_FILES['fileAvatar']['size'];
        $error = $_FILES['fileAvatar']['error'];
//SECURITÉ POUR LIMITÉ LE TYPE DE FICHIER UPLOADABLE
        $tabExtension = explode('.', $avatar);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        $formSucess['sucess'] =  "compte crée!";
//GESTION DU NOM UNIQUE POUR ENREGISTRER EN BASE DE DONNÉES LE FICHIER
        if(in_array($extension, $extensions) && $error == 0){
            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $avatar = $uniqueName.".".$extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            move_uploaded_file($tmpName, './assets/media/avatar/'.$avatar);
        }
        else{
            
        }
    } else {
        echo $formError['mail'] = "mail non validée! <br>";
        echo $formError['pseudo'] = "pseudo non validée! <br>";
        echo $formError['mdp'] = "mdp non validée! <br>";
    }
    if (empty($formError)) {
        $user->mail = $mail;//ATTRIBUTION DES DONNÉES A L'OBJET
        $user->pseudo = $pseudo;
        $verifuser = $user->verifuser();
        if(is_object($verifuser)){
            if ($verifuser->pseudo === $pseudo && $verifuser->mail === $mail ){
                $errorLogForm = "vous avez deja un compte chez nous";
            }else if($verifuser->pseudo === $pseudo){
                $errorLogForm = "le pseudo existe deja";
            }else if($verifuser->mail === $mail){
              $errorLogForm = "l'email existe deja";
            }
          }else {
            $user->mdp = $mdp;
            $user->avatar = $avatar;
            $user->insertUser();//APPEL DE LA PUBLIC FUNCTION CREATE
            header('location:index.php?connexion');
          }

        
    }
}