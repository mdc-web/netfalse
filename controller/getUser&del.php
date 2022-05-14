<?php

$user = new user();

$user->id = $_SESSION['id'];

$classUser = $user->getUserByid();
$listUser = $user->getUser();


if(isset($_POST['submitModif'])){
    $user->mail=$_POST['mail'];
    $user->mdp=$_POST['mdp'];
    $user->updateUser();
    header('location:index.php?spaceUsers');
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
