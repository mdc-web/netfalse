<?php

if (isset($_POST['submit'])) {//RECUPERATION DE LA SOUMISSION DU FORMULAIRE

    $item = new item();//DECLARATION D'UN NOUVEL OBJET STOCKÉ DANS LA VARIABLE
    
    $formError = [];

    if(!empty($_POST['titre']) && !empty($_POST['categorie']) && !empty($_POST['duration']) && !empty($_POST['description']) && !empty($_FILES['file'])){
//RECUPERATION DES DONNÉES SOUMISE VIA LE FORMULAIRE
        $titre = $_POST['titre'];
        $categorie = $_POST['categorie'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];
//GESTION DE L'ARRAY DU FILE
        $tmpName = $_FILES['file']['tmp_name'];
        $nom = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
//SECURITÉ POUR LIMITÉ LE TYPE DE FICHIER UPLOADABLE
        $tabExtension = explode('.', $nom);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        $formSucces['succes'] = "votre item a bien ete envoyer";
//GESTION DU NOM UNIQUE POUR ENREGISTRER EN BASE DE DONNÉES LE FICHIER
        if(in_array($extension, $extensions) && $error == 0){

            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $nom = $uniqueName.".".$extension;
            
            move_uploaded_file($tmpName, './upload/'.$nom);
        }
        else{
            echo "Une erreur est survenue";
        }
    } else {
            $formError['file'] = "fichier non validée!";
    } if(empty($formError)){//ATTRIBUTION DES DONNÉES A L'OBJET
        $item->titre = $titre;
        $item->categorie = $categorie;
        $item->duration = $duration;
        $item->description = $description;
        $item->nom = $nom;
        $item->createItem();//APPEL DE LA PUBLIC FUNCTION CREATE
        echo $formSucces['succes'];
     }
}


