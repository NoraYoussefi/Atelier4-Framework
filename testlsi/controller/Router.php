<?php

require_once "controleurbook.php";
require_once "controleurstore.php";
require_once "controleurhas.php";
require_once "view/view.php";


class Routeur
{

    private $ctrlBook;
    private $ctrlStore;
    private $ctrlHas;

    public function __construct()
    {

        $this->ctrlBook = new ControleurBook();
        $this->ctrlStore = new controllerstore();
        $this->ctrlHas = new controllerhas();
    }

    // Traite une requête entrante
    public function routerRequete()
    {
        try {
            //books
            if (isset($_GET['action'])) {

                if ($_GET['action'] == 'book') {
                    $this->ctrlBook->getBooks();
                } else if ($_GET['action'] == 'addbook') {
                    $this->ctrlBook->addbook();
                } else if ($_GET['action'] == 'editbook') {
                    $this->ctrlBook->editbook($_GET["id"]);
                } else if ($_GET['action'] == 'savebook') {
                    $this->ctrlBook->savebook();
                } else if ($_GET['action'] == 'deletebook') {
                    $this->ctrlBook->deletebook($_GET["id"]);
                }


                //stores
                else if ($_GET['action'] == 'addstore') {
                    $this->ctrlStore->addstore();
                } else if ($_GET['action'] == 'editstore') {
                    $this->ctrlStore->editstore($_GET["id"]);
                } else if ($_GET['action'] == 'deletestore') {
                    $this->ctrlStore->deletestore($_GET["id"]);
                } else if ($_GET['action'] == 'getstores') {
                    $this->ctrlStore->getstore();
                } else if ($_GET['action'] == 'savestore') {
                    $this->ctrlStore->savestore();
                }

                //has
                else if ($_GET['action'] == 'showBook') {
                    $this->ctrlHas->showBook($_GET["id"]);
                } else if ($_GET['action'] == 'showOthers') {
                    $this->ctrlHas->showOthers($_GET["id"]);
                } else {

                    throw new Exception("Action non valide");
                }
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    private function erreur($msgErreur)
    {

        $vue = new Vue("Erreur");

        $vue->generer(array('msgErreur' => $msgErreur));
    }
}
