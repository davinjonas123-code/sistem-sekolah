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

    public function show(string $id)
    {
       require_once '../app/views/students/show.php';
       }
       public function edit(string $id)
       {
          require_once '../app/views/students/edit.php';
       }
}
?>