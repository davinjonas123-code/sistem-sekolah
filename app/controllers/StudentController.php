<?php
namespace App\Controllers;
 
class StudentController
{
    public function index()
 
    {
  require_once '../app/views/students/index.php';
    }
 
    public function create()
 
    {
       require_once '../app/views/students/create.php';
    }
}
?>