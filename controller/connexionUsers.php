<?php
    if(isset($_POST['submit'])){
        $connexion = new user();
        $formError = [];
        if(!empty($_POST['mail']) AND !empty($_POST['mdp'])/* AND !empty($_POST['pseudo'])*/){
            $mail = htmlspecialchars($_POST['mail']);
            $connexion->mail = $mail;
            $mdp =htmlspecialchars($_POST['mdp']);
            //$surname =htmlspecialchars($_POST['pseudo']);
           // $formSucces['succes'] = "votre compte a bien été crée";
            $formSucces['connexion']="vous ete connecter";
    
            //echo "votre compte a ete crée";
        }else{
           // echo "veuillez completer tous les champs";
           $formError['erreur'] ="veuillez completer tous les champs";

        }
        if(empty($formError)){
            $verifConnexion = $connexion->session();
            if(is_object($verifConnexion)){
               //var_dump($verifConnexion);
                if ( ($mail == $verifConnexion->mail)  && password_verify($mdp , $verifConnexion->mdp)){
                    $_SESSION['role'] = $verifConnexion->nom ;
                    $_SESSION['id']= $verifConnexion->id;
                    header('location: index.php?home');
                }else {
                    echo 'mot de passe ou adresse email incorrect';
                }
            }else {
                $test = 'mot de passe ou adresse email incorrect';
                
            }         
         }
    }
    