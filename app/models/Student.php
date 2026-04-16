<?php
namespace App\Models;
require_once '../app/core/Database.php';
 
use App\Core\Database;
 
class Student extends Database
{
 
    protected $table ='students';
 
    // Fungsi menampilkan daftar siswa
    public function getStudents()
    {
        $students = [];
 
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
 
        $result = $stmt->get_result();
 
        while($student = $result->fetch_assoc()) {
            $students[] = $student;
        }
 
        return $students;
    }

    //fungsi menampilkan detail siswa
    public function getStudent(int $id)
    {          
        $query = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
 
        $result = $stmt->get_result();

        $student = $result->fetch_assoc();

        return $student;
    }
 
}
 
?>