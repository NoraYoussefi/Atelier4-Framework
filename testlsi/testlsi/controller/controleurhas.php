<?php

// importer les deux classes model entity et DAO
require_once "model/has.php";
require_once "model/hasDAO.php";
require_once "model/book.php";
require_once "model/bookDao.php";
require_once "model/store.php";
require_once "model/storeDAO.php";
require_once 'view/view.php';


class Controllerhas {


    //attr

    private   $hasDao;
    //constr
public function __construct() { 
 
    $this->hasDao = new hasDAO();
    $this->storeDao=new storeDAO();
    $this->bookDao = new BookDAO();

 }


public function showBook($id){
    $index=$this->hasDao->getAllById($id);
    $book=array();
    foreach($index as $i):
    array_push($book,$this->bookDao->getById($i));
    endforeach;
    if(isset($_POST["submit"])){
     
    ;
        $this->hasDao->delete($_POST["id1"] ,$_GET["id"]) ; 
        header('location:?action=showBook&id='.$_GET["id"]);
    }
    $vue=new vue("has");
    $vue->generer(array('books'=>$book));

}


public function showOthers($id){
    $index=$this->hasDao->getAllByIdDiff($id);
    $book=array();
    foreach($index as $i):
    array_push($book,$this->bookDao->getById($i));
    endforeach;
    $vue=new vue("edithas");
    $vue->generer(array('books'=>$book
    ));
    if(isset($_POST["submit"])){
        $this->hasDao->save($_POST["id"],$id);
        header('location:?action=getstores');
    }
}

}
?>