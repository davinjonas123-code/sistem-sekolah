<?php 
namespace App\Core;

class Controller

{
    public function view(string $view, array $data = [])
 {
    extract($data);
    $view = str_replace('.', '/', $view);
    require_once "../app/views/{$view}.php";
 }
}


?>