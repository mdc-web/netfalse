<?php

$classUser = new user();

$user = $classUser->getUser();
if(isset($_POST['submitDelet']))
{
    $classUser->id = $_POST['submitDelet'];
    $classUser->deleteUser();
    header('location: index.php?listUsers');
 }