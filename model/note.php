<?php
class note extends database
{
    public $note;
    public $user_id;
    public $item_id;



    public function __construct()
    {
        parent::__construct();
    }


    public function insertNote()
    {
        $requete = 'INSERT INTO `note`(`note`, `user_id`, `item_id`) VALUES (:note, :user_id, :item_id);';
        $insert = $this->db->prepare($requete);
        $insert->bindValue(':note', $this->note, PDO::PARAM_INT);
        $insert->bindValue(':user_id', $this->user_id, PDO::PARAM_INT);
        $insert->bindValue(':item_id', $this->item_id, PDO::PARAM_INT);
        return $insert->execute();
    }


    public function getNote(){
        $query = 'SELECT * FROM note WHERE idItem = :idItem';
        $selectNote = $this->db->query( $query);
        $selectNote->bindValue(':idItem', $this->idItem, PDO::PARAM_INT);
        $selectNote->execute();
        return $selectNote->fetchAll(PDO::FETCH_OBJ);
    }

    public function checkNote(){
        $query = 'SELECT * FROM note WHERE user_id=$user_id AND item_id=$item_id';
        $check = $this->db->query($query);
        $check->bindValue(':user_id', $this->user_id, PDO::PARAM_INT);
        $check->bindValue(':item_id', $this->item_id, PDO::PARAM_INT);
        $check->execute();
        return $check->fetchAll(PDO::FETCH_OBJ);
    }

    public function moyNote(){
        $query = 'SELECT AVG(note) AS moyenne FROM note WHERE item_id = :item_id;';
        $moy = $this->db->prepare($query);
        $moy->bindValue(':item_id', $this->item_id, PDO::PARAM_INT);
        $moy -> execute();
        return $moy->fetch(PDO::FETCH_OBJ);
    }

}