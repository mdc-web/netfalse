<?php

$user = new user();

$user->id = $_SESSION['id'];

$classUser = $user->getUserByid();
$listUser = $user->getUser();


if (isset($_POST['submitModif'])) {
    //relié au model.php avec (class user extends)
   $formError = [];
   $formSucess = [];
   if (!empty($_POST['mail']) && !empty($_POST['pseudo']) && !empty($_FILES['fileAvatars'])) {
    $tmpName = $_FILES['fileAvatars']['tmp_name'];
    $avatar = $_FILES['fileAvatars']['name'];
    $size = $_FILES['fileAvatars']['size'];
    $error = $_FILES['fileAvatars']['error'];

    $tabExtension = explode('.', $avatar);
    $extension = strtolower(end($tabExtension));

    $extensions = ['jpg', 'png', 'jpeg', 'gif'];





        if(in_array($extension, $extensions)){
            $avatar = '';
            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $avatar = $uniqueName.".".$extension;
            
            move_uploaded_file($tmpName, './avatar/'.$avatar);

            
            
        
        
        }
    $user->mail =$_POST['mail'];
    $user->pseudo =$_POST['pseudo'];
    $user->avatar= $avatar;
    $user->id = $_SESSION['id'];
        
    }
    else {
        echo "Une erreur est survenue";
    }
   
    
    $user->updateUser();//appel a notre fonction update avec la variable classItem
    header('location:index.php?spaceUsers');//redirection

    
} 
if(isset($_POST['submitDelet']))
{
    $user->id = $_POST['submitDelet'];
    $user->deleteUser();
    session_start();
    $_SESSION = array();
    session_destroy();
    header('location: index.php?home');
 } 

 if(isset($_POST['submitDeletByAdmin']))
{
    $user->id = $_POST['submitDeletByAdmin'];
    $user->deleteUser();
    header('location: index.php?listUsers');
 } 
