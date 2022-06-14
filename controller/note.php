<?php

$note = new note();//DECLARATION D'UN NOUVEL OBJET STOCKÉ DANS LA VARIABLE

if(isset($_POST['submitNote'])){//RECUPERATION DE LA SOUMISSION DU FORMULAIRE
        $formError = [];
        if(!empty($_POST['note'])){//RECUPERATION DES DONNÉES SOUMISE VIA LE FORMULAIRE
            $noteI = htmlspecialchars($_POST['note']);
           
            $formSucces['succes'] = "votre note a bien ete envoyer";
        }else{
            $formError['erreur'] ="error";
        }
        
        if(empty($formError)){//ATTRIBUTION DES DONNÉES A L'OBJET
            $note->note= $noteI;
            $note->user_id = $_SESSION['id'];
            $note->item_id = $_GET['idItem'];
            $note->insertNote();//APPEL DE LA PUBLIC FUNCTION INSERT
        }else{
           echo ("erreur");
        }
}   
if(isset($_GET['idItem'])){//RECUPERE L'ID DE L'ITEM VIA LA METHODE GET
    $note->item_id = $_GET['idItem'];
    $noteV = $note->moyNote();//APPEL DE LA PUBLIC FUNCTION MOYNOTE
}