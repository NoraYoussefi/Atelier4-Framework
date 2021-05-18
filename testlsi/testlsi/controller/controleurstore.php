<?php 
// importer les deux classes model entity et DAO
require_once "model/store.php";
require_once "model/storeDAO.php";
require_once 'view/view.php';
class controllerstore{
  //attr
private $storeDao;
//constr
public function __construct()
{
   $this->storeDao=new storeDAO(); 
}
public function getstore(){
 $stores=$this->storeDao->getAll();
$vue =new vue("store");
$vue->generer(array('stores' => $stores));
    
}

//save
public function savestore(){
  $this->storeDao->save(new store(0,'store2','Tetouan','toto@gmail.com','04548454845'));
  }

  //add
public function addstore(){
  if(isset($_POST['submit'])){
    $this->storeDao->save(new store(0,$_POST['name'],$_POST['adresse'],$_POST['email'],$_POST['telephone']));
    header('location:?action=getstores');}
    else{
    $vue= new vue("addstore");
    $vue->generer(array());}

}

//edit
public function editstore($id){
    if(isset($_POST["submit"])){
        $this->storeDao->update(new store($id,$_POST['name'],$_POST['adresse'],$_POST['email'],$_POST['telephone']));
        $this->getstore();
        }
        else{
$store = $this->storeDao->getById($id);
$vue =new vue("editstore");
$vue->generer(array('store'=>$store));}
}

//delete
public function deletestore($id){
$this->storeDao->del($id);
$this->getstore();
}



}
