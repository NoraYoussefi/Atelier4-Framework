<?php 

class hasDAO{

private $bdd;

// const 
public function __construct()
{
    try
    {
    $this->bdd  = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', 'root');

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); }
}

// save (Creat)
public function save($id_b,$id_s){

    $res=$this->bdd->prepare("INSERT INTO has (id_book,id_bookstore) VALUES (:id_b,:id_s);");

    $res->execute(array('id_b'=> $id_b,'id_s'=>$id_s));
  
}

//delete
public function delete($id_b,$id_s){

    $res=$this->bdd->prepare("DELETE FROM has where id_book=:id_b and id_bookstore=:id_s");

    $res->execute(array('id_b'=> $id_b,'id_s'=>$id_s));
}

//get all
public function getAllById($id){

    $res=$this->bdd->prepare("select * from has where id_bookstore=:id");

    $res->execute(array('id'=> $id));
    $books=array();
    while($data=$res->fetch()){
    array_push($books,$data["id_book"]);}
    return $books;
}

public function getAllByIdDiff($id){
    $res=$this->bdd->prepare("select * from book where id_book not in( select id_book from has where id_bookstore=:id)");
    
    $res->execute(array('id'=> $id));
    $books=array();
    while($data=$res->fetch()){
    array_push($books,$data["id_book"]);}
    return $books;    
}


}
?>