<?php 

$classItem = new item();//DECLARATION D'UN NOUVEL OBJET STOCKÉ DANS LA VARIABLE

//APPEL DES PUBLICS FUNCTION STOCKÉ DES VARIABLES
$item = $classItem->getAllItem();
$itemR = $classItem->getRandItem();

$classCategorie = new item();

$action = $classCategorie->getItemByCatAct();
$histoire = $classCategorie->getItemByCatHist();
$syfy = $classCategorie->getItemByCatSyfy();
$anime = $classCategorie->getItemByCatAnime();

if(isset($_GET['idItem'])){//RECUPERATION DE L'ITEM PAR ID VIA LA METHODE GET

    $classItem->id=$_GET['idItem'];
    $itemId = $classItem->getItemById();
    $_SESSION['idItem'] =  $itemId->id;//???
}

if(isset($_POST['submitModif'])){ //CONDITION DE MODIFICATION DONNÉES USERS
    if(!empty($_POST['titre']) && !empty($_POST['categorie']) && !empty($_POST['duration']) && !empty($_POST['description']) && !empty($_FILES['file']) && !empty($_GET['idItem'])){
//RECUPERATION DES DONNÉES SOUMISE VIA LE FORMULAIRE
//GESTION DE L'ARRAY DU FILE
        $tmpName = $_FILES['file']['tmp_name'];//VERIFICATION DES DONNÉES SOUMISE
        $nom = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
//SECURITÉ POUR LIMITÉ LE TYPE DE FICHIER UPLOADABLE
        $tabExtension = explode('.', $nom);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];

        if(in_array($extension, $extensions)){
//GESTION DU NOM UNIQUE POUR ENREGISTRER EN BASE DE DONNÉES LE FICHIER
            $nom = '';
            $uniqueName = uniqid('', true);
            $nom = $uniqueName.".".$extension;
            move_uploaded_file($tmpName, './upload/'.$nom);
//ATTRIBUTION DES VALEURS SOUMISE
            $classItem->titre=$_POST['titre'];
            $classItem->categorie=$_POST['categorie'];
            $classItem->duration=$_POST['duration'];
            $classItem->description=$_POST['description'];
            $classItem->id = $_GET['idItem'];
            $classItem->nom=$nom;
        }
        else{
            echo "Une erreur est survenue";
        }
    }
    $classItem->updateItem();//APPEL DE LA PUBLIC FUNCTION UPDATE
    header('location:index.php?listItems');
    exit();
} 
if(isset($_POST['submitDelet'])) { //CONDITION DE SUPPRESSION D'ITEM
    $classItem->id = $_POST['submitDelet'];
    $classItem->deleteItem();//APPEL DE LA PUBLIC FUNCTION DELETE
    header('location: index.php?listItems');
}

if (isset($_POST["btnrechercheArticleHome"]) AND $_POST["btnrechercheArticleHome"] == "btnrechercheArticle"){//CONDITION DE RECHERCHE ITEM
 $_POST["rechercheArticle"] = htmlspecialchars($_POST["rechercheArticle"]); //pour sécuriser le formulaire contre les failles html
 $rechercheItem = $_POST["rechercheArticle"];
 $rechercheItem = trim($rechercheItem); //pour supprimer les espaces dans la requête de l'internaute
 $rechercheItem = strip_tags($rechercheItem); //pour supprimer les balises html dans la requête`
 $searchV = $classItem->searchItem($rechercheItem);
}