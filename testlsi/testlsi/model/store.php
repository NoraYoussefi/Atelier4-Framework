<?php

// entites

class store{

    // attrs
        private $id_bookstore;
        private $name;
        private $adresse;
        private $email;
        private $telephone;

    // actions methods 

        // const

      public function __construct($id_bookstore,$name,$adresse,$email,$telephone){

              $this->id_bookstore=$id_bookstore;
              $this->name=$name;
              $this->adresse=$adresse;
              $this->email=$email;
              $this->telephone=$telephone;

}

    // get an set 
     public function getIdBookStore(){

         return $this->id_bookstore;  
     }

     public function getName(){

         return $this->name;
     }

     public function getAdresse(){

         return $this->adresse;
     }

     public function getEmail(){

         return $this->email;
     }
     
     public function getTelephone(){

         return $this->telephone;
     }
}
