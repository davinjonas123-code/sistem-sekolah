<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use App\Core\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getStudents();

        $this->view('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        $this->view('students.create');

    }

    public function show(string $id)
    {
        $id = intval($id);
        $studentModel = new Student();
        $student = $studentModel->getStudent($id);


        $this->view('students.show', [
            'student' => $student
        ]);

    }

    public function edit(string $id)
    {
        $this->view('students.edit');

    }

public function store()
    {
        $studentModel = new Student();
        $studentModel->insert($_POST);
    }
}
?>