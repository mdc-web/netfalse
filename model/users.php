<?php
class user extends database
{
    public $mail;
    public $mdp;
    



    // method __construct qui se connect a ma database

    public function __construct()
    {
        parent::__construct();
    }

    // method qui sert a aller recuperer mes donnees dans la database

    public function insertUser()
    {
        $requete = 'INSERT INTO `user`(`mail`, `mdp`) VALUES (:mail , :mdp)';
        $insert = $this->db->prepare($requete);
        $insert->bindValue(':mail', $this->mail, PDO::PARAM_STR);  // string(mot/phrase)
        $insert->bindValue(':mdp', $this->mdp, PDO::PARAM_STR);
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
        $req = 'UPDATE `user` SET `mail`=:mail WHERE id=:id';
        $user = $this->db->prepare($req);
        $user->bindValue(':mail', $this->mail, PDO::PARAM_STR);
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