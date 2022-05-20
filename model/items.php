<?php
class item extends database
{
    public $titre;
    public $categorie;
    public $duration;
    public $description;
    public $nom;
    public $id;


    public function __construct()
    {
        parent::__construct();
    }


    public function createItem()
    {
        $req = 'INSERT INTO `item`(`titre`, `categorie`, `duration`, `description`, `nom`) VALUES (:titre, :categorie, :duration, :description, :nom);';
        $insertItem = $this->db->prepare($req);
        $insertItem->bindValue(':titre', $this->titre, PDO::PARAM_STR);
        $insertItem->bindValue(':categorie', $this->categorie, PDO::PARAM_STR);
        $insertItem->bindValue(':duration', $this->duration, PDO::PARAM_INT);
        $insertItem->bindValue(':description', $this->description, PDO::PARAM_STR);
        $insertItem->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        return $insertItem->execute();
    }


    public function getAllItem() 
    {
        $query = 'SELECT * FROM `item`';
        $item = $this->db->query($query);
        return $item->fetchAll(PDO::FETCH_OBJ);
    }


    public function getItemById()
    {
        $query = 'SELECT * FROM `item` WHERE `id`=:id ;';
        $item = $this->db->prepare($query);
        $item->bindValue(':id', $this->id, PDO::PARAM_INT);
        $item->execute();
        return $item->fetch(PDO::FETCH_OBJ);
    }


    public function getItemByCatAct()
    {
        $query = 'SELECT * FROM item WHERE categorie = "action" ;';
        $item = $this->db->prepare($query);
        $item->execute();
        return $item->fetchAll(PDO::FETCH_OBJ);
        
    }

    public function getItemByCatHist()
    {
        $query = 'SELECT * FROM item WHERE categorie = "histoire" ;';
        $item = $this->db->prepare($query);
        $item->execute();
        return $item->fetchAll(PDO::FETCH_OBJ);
        
    }

    public function getItemByCatSyfy()
    {
        $query = 'SELECT * FROM item WHERE categorie = "syfy" ;';
        $item = $this->db->prepare($query);
        $item->execute();
        return $item->fetchAll(PDO::FETCH_OBJ);
        
    }

    public function getItemByCatAnime()
    {
        $query = 'SELECT * FROM item WHERE categorie = "anime" ;';
        $item = $this->db->prepare($query);
        $item->execute();
        return $item->fetchAll(PDO::FETCH_OBJ);
        
    }


    public function updateItem()
    {
        $req = 'UPDATE `item` SET `titre`=:titre, `categorie`=:categorie, `duration`=:duration, `description`=:description, `nom`=:nom WHERE id=:id';
        $item = $this->db->prepare($req);
        $item->bindValue(':titre', $this->titre, PDO::PARAM_STR);
        $item->bindValue(':categorie', $this->categorie, PDO::PARAM_STR);
        $item->bindValue(':description', $this->description, PDO::PARAM_STR);
        $item->bindValue(':duration', $this->duration, PDO::PARAM_INT);
        $item->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $item->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $item->execute();
    }


    public function deleteItem()
    {
        $query = 'DELETE FROM `item` WHERE `id`=:id;';
        $item = $this->db->prepare($query);
        $item->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $item->execute();
    }

    public function getRandItem() 
    {
        $query = 'SELECT * FROM `item` ORDER BY RAND();';
        $item = $this->db->query($query);
        return $item->fetchAll(PDO::FETCH_OBJ);
    }


    public function searchItem($recherche){
        $rechercheItem ='SELECT * FROM item WHERE titre LIKE ?';
        $item = $this->db->prepare($rechercheItem);
        $item->execute(array("%".$recherche."%"));
        return $item->fetchAll(PDO::FETCH_OBJ);
    }


/*
    public function numberPage(){
        $req = 'SELECT COUNT(id)/4 AS numberPage FROM item;';
        $item = $this->db->prepare($req);
        if($item->execute()){
        return $item->fetch(PDO::FETCH_OBJ);
    }
    }
    */
}
