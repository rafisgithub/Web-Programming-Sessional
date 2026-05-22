<?php
 // have to print 500 students name and roll number using for loop

$students = [
    ["name" => "Student 1", "roll" => 1],
    ["name" => "Student 2", "roll" => 2],
    ["name" => "Student 3", "roll" => 3],
    // ... up to Student 500
];

for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i]['name'] . ", Roll Number: " . $students[$i]['roll'] . "<br>";
}

foreach ($students as $student) {
    echo "Name: " . $student['name'] . ", Roll Number: " . $student['roll'] . "<br>";
}

?>