<?php 
namespace App\Controllers;

require_once 'Models/BookModel.php';

use App\Models\BookModel;

class BookController{
    protected $bookModel;

    public function __construct(){
        $this->bookModel = new BookModel();
    }

    public function getIndex(){
        $books = $this->bookModel->getAll();
        // require_once '../Views/books/index.php';
    }
}