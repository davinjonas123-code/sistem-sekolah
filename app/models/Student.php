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
 
    //fungsi menambahkan siswa baru
    public function insert(array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "INSERT INTO {$this->table} (name, nis, class, phone_number) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ssss', $name, $nis, $class, $phoneNumber);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /students');
            exit;
        } else {
            echo 'Error to store student';
        }
    }
}
 
?>