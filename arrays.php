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

$highestMarks = [$students[0]["name"], $students[0]["cgpa"]];
foreach($students as $student) {
    $name = $student["name"];
    $attendance = $student["attendance"];
    $cgpa = $student["cgpa"];
    // if($attendance > 75) {
    //     echo "$name -> "."$attendance% -> "."$cgpa\n";
    // }
    if($cgpa > $highestMarks[1]) {
        $highestMarks[0] = $name;
        $highestMarks[1] = $cgpa;
    }
}
echo "Topper: $highestMarks[0] -> $highestMarks[1]\n";

$sum = 0;
foreach($students as $student) {
    $cgpa = $student["cgpa"];
    $sum += $cgpa;
}
$average = $sum / count($students);
echo "Average cgpa: $average";

$lowestAtt = ["", 101];
foreach($students as $student) {
    $name = $student["name"];
    $attendance = $student["attendance"];
    if($lowestAtt[1] > $attendance) {
        $lowestAtt[0] = $name;
        $lowestAtt[1] = $attendance;
    }
}
echo "Lowest attendance -> $lowestAtt[0] : $lowestAtt[1]%";

$students = ["Naman", "Atul", "Aryan"];

unset($students[1]);

// $students = array_values($students);

print_r($students);