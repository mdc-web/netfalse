<?php
//DECLARATION DE LA CLASS ET DES ATTRIBUS
class user extends database
{
    public $mail;
    public $mdp;
    public $pseudo;
    public $avatar;


    public function __construct()
    {
        parent::__construct();
    }
//DECLARATION DES METHODES
    public function insertUser()
    {
        $requete = 'INSERT INTO `user`(`mail`, `mdp`, `pseudo`, `avatar`) VALUES (:mail , :mdp, :pseudo, :avatar)';
        $insert = $this->db->prepare($requete);
        $insert->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $insert->bindValue(':mdp', $this->mdp, PDO::PARAM_STR);
        $insert->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $insert->bindValue(':avatar', $this->avatar, PDO::PARAM_STR);
        return $insert->execute();
    }


    public function deleteUser() {
        $query = 'DELETE FROM `user` WHERE `id`= :id ;';
        $user = $this->db->prepare($query);
        $user->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $user->execute();
    }

    public function getUser(){
        $user = 'SELECT * FROM `user`';
        $selectUser = $this->db->query( $user);
        $selectUser->execute();
        return $selectUser->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUserById(){
        $query = 'SELECT * FROM `user` WHERE `id`=:id ;';
        $find = $this->db->prepare($query);
        $find->bindValue(':id', $this->id, PDO::PARAM_INT);
        $find->execute();
        return $find->fetch(PDO::FETCH_OBJ); 
    }

    public function updateUser()
    {
        $req = 'UPDATE `user` SET `mail`=:mail, `pseudo`=:pseudo,`avatar`=:avatar WHERE id=:id';
        $user = $this->db->prepare($req);
        $user->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $user->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $user->bindValue(':avatar', $this->avatar, PDO::PARAM_STR);
        $user->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $user->execute();
    }
  
    public function session(){
        $garderSession = 'SELECT user.id , mail, mdp, nom FROM `user` INNER JOIN role ON user.id_role = role.id WHERE `mail` = :mail';
        $selectuser = $this->db->prepare($garderSession);
        $selectuser->bindValue(':mail', $this->mail, PDO::PARAM_STR); 
        $selectuser->execute();
        return $selectuser->fetch(PDO::FETCH_OBJ);
    }

}