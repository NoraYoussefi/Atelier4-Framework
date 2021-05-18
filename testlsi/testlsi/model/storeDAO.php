<?php 
require_once 'store.php';
class storeDAO{

    private $bdd;

    // const 
public function __construct(){

    try
    {
    $this->bdd    = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', 'root');

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); }
}

// save (Creat)
public function save($store){

    $res=  $this->bdd->prepare("INSERT INTO bookstore (name,adresse,email,telephone) VALUES(:name,:adresse,:email,:telephone)");

    $res->execute(array(
        'name' => $store->getName(),
        'adresse' => $store->getAdresse(),
        'email' =>$store->getEmail(),
        'telephone' => $store->getTelephone()
      ));
  }

  //edit
  public function update($store){
    $res= $this->bdd->prepare("UPDATE bookstore SET name=:name ,adresse=:adresse,email=:email, telephone=:telephone WHERE id_bookstore=:id ");

    $res->execute(array( 'name' => $store->getName(),
                        'adresse' => $store->getAdresse(),
                        'email' =>$store->getEmail(),
                        'telephone' => $store->getTelephone(),
                        'id'=> $store->getIdBookStore()
   ));
   }

   //delete
   public function del($id){

    $res=$this->bdd->prepare("DELETE FROM bookstore WHERE id_bookstore =:id");

    $res->execute(array('id'=>$id));  
}

 

//select
public function getById($id){

  $reponse  = $this->bdd->prepare('select * from bookstore where id_bookstore=:id');
  
  $reponse->execute(array('id'=>$id));
  $donnees = $reponse->fetch(); 
return new store ($donnees['id_bookstore'],$donnees['name'], $donnees['adresse'] , $donnees['email'] , $donnees['telephone']);
}


  //get all
  public function getAll(){

    $res=$this->bdd->query("select * from bookstore");
 
      $stores=array();
      while($donnees=$res->fetch()){
      array_push($stores,new store($donnees['id_bookstore'],$donnees['name'],$donnees['adresse'],$donnees['email'],$donnees['telephone']));
   } 
       return $stores;  
  }  



}
?>