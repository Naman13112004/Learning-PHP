<?php

trait Logger {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}

interface Authentication {
    public function login($password);
    public function logout();
}

class Person {
    protected $name;
    protected $email;
    public function __construct($name = null, $email = null) {
        $this->name = $name;
        $this->email = $email;
    }
    public function introduce() {
        echo "Name: $this->name\n";
        echo "Email: $this->email\n";
    }
}

class Student extends Person implements Authentication {
    use Logger;
    private $cgpa;
    private $attendance;
    // Method and constructor overloading doesn't natively exist in PHP
    public function __construct($name = null, $email = null, $cgpa = null, $attendance = null) {
        parent::__construct($name, $email);
        $this->cgpa = $cgpa;
        $this->attendance = $attendance;
    }
    public function updateCgpa($newCgpa) {
        $this->cgpa = $newCgpa;
        $this->log("CGPA updated successfully for $this->name.\n");
    }
    public function isEligible() {
        ($this->attendance > 75) ? $this->log("Eligible") : $this->log("Not eligible");
    }
    public function printProfile() {
        echo "=========================================\n";
        parent::introduce();
        echo "Cgpa: $this->cgpa\n";
        echo "Attendance: $this->attendance\n";
        echo "=========================================\n";
    }
    public function login($password) {
        ($password == "123") ? $this->log("Login Successful") : $this->log("Login Unsuccessful");
    }
    public function logout() {
        $this->log("Logged Out Successfully");
    }
}

class Teacher extends Person implements Authentication {
    use Logger;
    private $subject;
    public function __construct($name = null, $email = null, $subject = null) {
        parent::__construct($name, $email);
        $this->subject = $subject;
    }
    public function assignGrade() {
        $this->log("All grades assigned");
    }
    public function login($password) {
        ($password == "456") ? $this->log("Login Successful") : $this->log("Login Unsuccessful");
    }
    public function logout() {
        $this->log("Logged Out Successfully");
    }
}

// $person = new Person("Naman", "naman@mu.com");
// $person->introduce();

// $student = new Student("Naman", "naman@mu.com", 9.58, 71);
// $student->login("123");
// $student->updateCgpa(9.85);
// $student->printProfile();
// $student->isEligible();
// $student->logout();

// $teacher = new Teacher("Atul", "atul@mu.com", "System Design");
// $teacher->login("456");
// $teacher->assignGrade();
// $teacher->logout();

$student = [
    new Student("Naman", "naman@mu.com", 9.58, 71),
    new Student("Atul", "atul@mu.com", 9.1, 85),
    new Student("Aaryan", "aaryan@mu.com", 8.9, 60)
];
for($i = 0; $i < count($student); $i++) {
    $student[$i]->printProfile();
}