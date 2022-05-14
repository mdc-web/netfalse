<?php

$note = new note();

if(isset($_POST['submitNote'])){
        $formError = [];
        if(!empty($_POST['note'])){
            $noteI = htmlspecialchars($_POST['note']);
            // var_dump($_POST['note']);
           
            $formSucces['succes'] = "votre note a bien ete envoyer";
        }else{
            $formError['erreur'] ="error";
            //header("location: index.php?connexionAdmin");
            //var_dump($formError);
            
        }
        
        if(empty($formError)){
            $note->note= $noteI;
            $note->user_id = $_SESSION['id'];
            $note->item_id = $_GET['idItem'];
            $note->insertNote();
        }else{
            
           echo ("erreur");
        }
           
}   
if(isset($_GET['idItem'])){
    //$note = new note();
    $note->item_id = $_GET['idItem'];
    $noteV = $note->moyNote();
    

}