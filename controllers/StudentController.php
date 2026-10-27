
<?php

require_once __DIR__ . '/../models/Student.php';

class StudentController
{
    public function index()
    {
        $message = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['student_name'] ?? '');

            if ($name !== '') {
                $student = new Student();
                $message = $student->createGreeting($name);
            }
        }

        require __DIR__ . '/../views/welcome.php';
    }
}
