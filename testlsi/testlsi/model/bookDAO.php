<?php
require_once "book.php";

class BookDAO{

  private $book, $bdd ;
  
  // const 
  public function __construct(){
    try
    {
    $this->bdd = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', 'root');

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); }
        
  }

// save (Creat)// mapping OR 
  public function save($book){

    $req = $this->bdd->prepare('INSERT INTO book(name, auteur, annee ) VALUES(:name, :auteur, :annee)');
  
    $req->execute(array( 'name' => $book->getName(),
                         'auteur' => $book->getAuteur(),
                         'annee' => $book->getAnnee()
    
    ));
    
  }

  //edit
  public function edit($id,$book){

    $res= $this->bdd->prepare("UPDATE book SET name=:name ,auteur=:auteur,annee=:annee WHERE id_book=:id ");

    $res->execute(array('name'=>$book->getName(),
                        'auteur'=>$book->getAuteur(),
                        'annee'=>$book->getAnnee(),
                        'id'=>$id));
  }

  //delete
  public function Delete($id){ 

    $res = $this->bdd->prepare('DELETE FROM book WHERE id_book = :id');
    $res->execute(array('id'=>$id));
  }

  //select
  public function getById($id){
    $reponse  = $this->bdd->prepare('select * from book where id_book=:id');
    $reponse->execute(array('id'=>$id));
    $donnees = $reponse->fetch(); 
  return new Book ($donnees['id_book'],$donnees['name'], $donnees['auteur'] , $donnees['annee']);
  }

  
  //get all
  public function getAll(){
    $reponse  = $this->bdd->query('select * from book');
    $arrayBooks =  array();
    while ($donnees = $reponse->fetch()) {
        array_push($arrayBooks, new Book ($donnees['id_book'],$donnees['name'], $donnees['auteur'] , $donnees['annee']));
  }
  return $arrayBooks;
  }

}
