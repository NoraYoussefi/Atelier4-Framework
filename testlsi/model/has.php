<?php

// entites

class has{

    // attrs 

    private $id_has;
    private $date_has;
    private $id_book;
    private $id_bookstore;


    // actions methods 

        // const

    public function __construct($id_has,$date_has,$id_book,$id_bookstore)
    {
       $this->id_has=$id_has;
       $this->date_has=$date_has;
       $this->id_book=$id_book;
       $this->id_bookstore=$id_bookstore; 
    }

    // get an set 

    public function getIdHas(){

        return  $this->id_has;
    }

    public function getDateHas(){

        return  $this->date_has;
    }

    public function getIdBook(){

      return  $this->id_book ;
    }

    public function getIdBookstore(){

        return  $this->id_bookstore;
    }
}
