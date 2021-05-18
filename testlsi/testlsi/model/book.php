<?php

// entites
class Book
{

        // attrs 
        private  $id;
        private  $name;
        private  $auteur;
        private  $annee;



        // actions methods 

        // const 
        public function __construct($id, $name,  $auteur, $annee)
        {
                $this->id = $id;
                $this->name = $name;
                $this->auteur = $auteur;
                $this->annee = $annee;
        }


        // get an set 
        public function getId()
        {
                return  $this->id;
        }

        public function getName()
        {
                return  $this->name;
        }


        public function getAuteur()
        {
                return  $this->auteur;
        }


        public function getAnnee()
        {
                return  $this->annee;
        }
}
