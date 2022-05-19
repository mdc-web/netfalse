<?php

if (isset($_POST['submit'])) {

    $item = new item();
    
    $formError = [];


    if(!empty($_POST['titre']) && !empty($_POST['categorie']) && !empty($_POST['duration']) && !empty($_POST['description']) && !empty($_FILES['file'])){
        
        $titre = $_POST['titre'];
        $categorie = $_POST['categorie'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];
        


        $tmpName = $_FILES['file']['tmp_name'];
        $nom = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        $tabExtension = explode('.', $nom);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];



        $formSucces['succes'] = "votre item a bien ete envoyer";


        if(in_array($extension, $extensions) && $error == 0){

            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $nom = $uniqueName.".".$extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            
            move_uploaded_file($tmpName, './upload/'.$nom);
        }
        else{
            echo "Une erreur est survenue";
        }
    } else {
            $formError['file'] = "fichier non validée!";


    } if(empty($formError)){
        $item->titre = $titre;
        $item->categorie = $categorie;
        $item->duration = $duration;
        $item->description = $description;
        $item->nom = $nom;
        $item->createItem();
        echo $formSucces['succes'];
     }
     
}


