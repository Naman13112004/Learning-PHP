<?php

$students = [
    [
        "name" => "Naman",
        "attendance" => 70,
        "cgpa" => 9.85
    ],
    [
        "name" => "Atul",
        "attendance" => 80,
        "cgpa" => 9.1
    ],
    [
        "name" => "Aaryan",
        "attendance" => 60,
        "cgpa" => 8.2
    ]
];

function calculateCgpaAverage($students) {
    $sum = 0;
    foreach($students as $student) $sum += $student["cgpa"];
    return $sum / count($students);
}

function findTopper($students) {
    $topper = $students[0];
    foreach($students as $student) {
        if($student["cgpa"] > $topper["cgpa"]) {
            $topper = $student;
        }
    }
    return $topper;
}

function findLowestAttendance($students) {
    $lowestAtt = $students[0];
    foreach($students as $student) {
        if($lowestAtt["attendance"] > $student["attendance"]) {
            $lowestAtt = $student;
        }
    }
    return $lowestAtt;
}

function findEligibleStudents($students) {
    $eligibleStudents = [];
    foreach($students as $student) {
        if($student["attendance"] > 75) {
            $eligibleStudents[] = $student;
        }
    }
    return $eligibleStudents;
}

$updateCgpa = function(&$student, $newCgpa) {
    $student["cgpa"] = $newCgpa;
};

function createStudent(string $name, int $semester, float $cgpa): array {
    return [$name, $semester, $cgpa];
}

echo calculateCgpaAverage($students);
print_r(findTopper($students));
print_r(findLowestAttendance($students));
print_r(findEligibleStudents($students));
echo "Past Cgpa: {$students[0]['cgpa']}\n";
$updateCgpa($students[0], 10);
echo "New Cgpa: {$students[0]['cgpa']}";
print_r(createStudent(semester: 5, name: "Naman", cgpa: 4.2));

$student = [
    "name"=>"Naman",
    "cgpa"=>9.8
];

$copy = $student;

$copy["cgpa"] = 7.5;

print_r($student);
print_r($copy);