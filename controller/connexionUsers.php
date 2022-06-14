<?php
//RECUPERATION DE LA SOUMISSION DU FORMULAIRE PAR LA METHODE POST
    if(isset($_POST['submit'])){//CONDITION QUI CAPTE LA SOUMISSION FORMULAIRE DE CONNEXION
//DECLARATION DES VARIABLES
        $connexion = new user();//DECLARATION D'UN NOUVEL OBJET STOCKÉ DANS LA VARIABLE
        $formError = [];
        if(!empty($_POST['mail']) AND !empty($_POST['mdp'])){//CONDITION QUI CAPTE LA SOUMISSION FORMULAIRE DE CONNEXION
            $mail = htmlspecialchars($_POST['mail']);//RECUPERATION DU CONTENU DES INPUTS
            $connexion->mail = $mail;
            $mdp =htmlspecialchars($_POST['mdp']);
            $formSucces['connexion']="vous ete connecter";
        }else{
           $formError['erreur'] ="veuillez completer tous les champs";
        }
        if(empty($formError)){
            $verifConnexion = $connexion->session();//APPEL DE LA PUBLIC FUNCTION
            if(is_object($verifConnexion)){
                if (($mail == $verifConnexion->mail) && password_verify($mdp , $verifConnexion->mdp)){//VERIFICATION DES DONNÉES
                    $_SESSION['role'] = $verifConnexion->nom ;
                    $_SESSION['id']= $verifConnexion->id;
                    header('location: index.php?home');//REDIRECTION APRES LE LOGIN VERS HOME
                }else {
                    $errorLogForm = 'Mot de passe ou Adresse Email incorrect';//MESSAGE D'ERREUR SI LOG ERREUR
                }
            }else {
                $errorLogForm = 'mot de passe ou adresse  incorrect';
            }         
         }
    }
    