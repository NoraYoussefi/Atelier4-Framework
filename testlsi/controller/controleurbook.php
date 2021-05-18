<?php

// importer les deux classes model entity et DAO
require_once "model/book.php";
require_once "model/bookDao.php";
require_once 'view/view.php';


class ControleurBook
{
// attr
  private $book, $bookDao;

  //cnstr
  public function __construct()
  {

    $this->bookDao = new BookDAO();
  }


  // action get all 
  public function getBooks()
  {
    $books = $this->bookDao->getAll();

    $vue = new Vue("book");

    $vue->generer(array('books' => $books));
  }




  // action get all (save)
  public function addbook()
  {
    if (isset($_POST["name"])) {
      $book = $this->book = new Book(0, $_POST["name"], $_POST["auteur"], $_POST["annee"]);
      $this->bookDao->save($book);
      $this->getBooks();
    } else {
      $vue = new Vue("addbook");
      $vue->generer(array('toto' => 'hello lsi 2021'));
    }
  }
  //edite

  public function editbook($id)
  {
    if (isset($_POST['submit'])) {
      $book = $this->book = new Book($id, $_POST["name"], $_POST["auteur"], $_POST["annee"]);
      $this->bookDao->edit($id, $book);
      $this->getbooks($id);
      // redirection vers  getBooks

    } else {
      $vue = new Vue("edite");
      $vue->generer(array('book' => $this->bookDao->getById($id)));
    }
  }
  //delete
  public function deletebook($id)
  {
    $this->bookDao->Delete($id);
    $this->getbooks();
    // redirection vers  getBooks

  }
}
