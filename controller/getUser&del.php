<?php

$user = new user();//DECLARATION D'UN NOUVEL OBJET STOCKÉ DANS LA VARIABLE

$user->id = $_SESSION['id'];
//APPEL DES PUBLICS FUNCTION STOCKÉ DES VARIABLES
$classUser = $user->getUserByid();
$listUser = $user->getUser();

if (isset($_POST['submitModifUser'])) {//CONDITION DE MODIFICATION DONNÉES USERS
   $formError = [];
   $formSucess = [];
   if (!empty($_POST['mail']) && !empty($_POST['pseudo']) && !empty($_FILES['fileAvatars'])) {
//RECUPERATION DES DONNÉES SOUMISE VIA LE FORMULAIRE
//GESTION DE L'ARRAY DU FILE
    $tmpName = $_FILES['fileAvatars']['tmp_name'];//VERIFICATION DES DONNÉES SOUMISE
    $avatar = $_FILES['fileAvatars']['name'];
    $size = $_FILES['fileAvatars']['size'];
    $error = $_FILES['fileAvatars']['error'];
//SECURITÉ POUR LIMITÉ LE TYPE DE FICHIER UPLOADABLE
    $tabExtension = explode('.', $avatar);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
        if(in_array($extension, $extensions)){
//GESTION DU NOM UNIQUE POUR ENREGISTRER EN BASE DE DONNÉES LE FICHIER
            $avatar = '';
            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $avatar = $uniqueName.".".$extension;
            move_uploaded_file($tmpName, './assets/media/avatar/'.$avatar);
        }
//ATTRIBUTION DES VALEURS SOUMISE
    $user->mail =$_POST['mail'];
    $user->pseudo =$_POST['pseudo'];
    $user->avatar= $avatar;
    $user->id = $_SESSION['id'];
    }
    else {
        echo "Une erreur est survenue";
    } 
    $user->updateUser();//APPEL DE LA PUBLIC FUNCTION UPDATE
    header('location:index.php?spaceUsers');//redirection
} 

if(isset($_POST['submitDelet']))//CONDITION DE SUPPRESSION D'ITEM
{
    $user->id = $_POST['submitDelet'];
    $user->deleteUser();//APPEL DE LA PUBLIC FUNCTION DELETE
    session_start();
    $_SESSION = array();//DESTRUCTION DE LA SESSION USERS
    session_destroy();
    header('location: index.php?home');
 } 

 if(isset($_POST['submitDeletByAdmin']))//DELETE USERS PAR L'ADMIN
{
    $user->id = $_POST['submitDeletByAdmin'];
    $user->deleteUser();
    header('location: index.php?listUsers');
 } 
