<?php 

$classItem = new item();

$item = $classItem->getAllItem();
$itemR = $classItem->getRandItem();


$classCategorie = new item();

$action = $classCategorie->getItemByCatAct();
$histoire = $classCategorie->getItemByCatHist();
$syfy = $classCategorie->getItemByCatSyfy();
$anime = $classCategorie->getItemByCatAnime();



if(isset($_GET['idItem'])){

    $classItem->id=$_GET['idItem'];
    $itemId = $classItem->getItemById();
    $_SESSION['idItem'] =  $itemId->id;//???

}



if(isset($_POST['submitModif'])){


        
    if(!empty($_POST['titre']) && !empty($_POST['categorie']) && !empty($_POST['duration']) && !empty($_POST['description']) && !empty($_FILES['file']) && !empty($_GET['idItem'])){




        $tmpName = $_FILES['file']['tmp_name'];
        $nom = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        $tabExtension = explode('.', $nom);
        $extension = strtolower(end($tabExtension));

        $extensions = ['jpg', 'png', 'jpeg', 'gif'];





        if(in_array($extension, $extensions)){
            $nom = '';
            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $nom = $uniqueName.".".$extension;
            
            move_uploaded_file($tmpName, './upload/'.$nom);

            
            
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
    
    
    var_dump($classItem);
    $classItem->updateItem();//appel a notre fonction update avec la variable classItem
    header('location:index.php?listItems');//redirection
    exit();

} 
if(isset($_POST['submitDelet'])) { //idem pour le btn submit delet
    $classItem->id = $_POST['submitDelet'];
    $classItem->deleteItem();
    header('location: index.php?listItems');
}

if (isset($_POST["btnrechercheArticleHome"]) AND $_POST["btnrechercheArticleHome"] == "btnrechercheArticle")
{
 $_POST["rechercheArticle"] = htmlspecialchars($_POST["rechercheArticle"]); //pour sécuriser le formulaire contre les failles html
 $rechercheItem = $_POST["rechercheArticle"];
 $rechercheItem = trim($rechercheItem); //pour supprimer les espaces dans la requête de l'internaute
 $rechercheItem = strip_tags($rechercheItem); //pour supprimer les balises html dans la requête`
 $searchV = $classItem->searchItem($rechercheItem);
 //var_dump($fff);
}