<?php
$students = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$totalGrades = 0;
foreach ($students as $student) {
    $totalGrades += $student[1]; 
}

$average = $totalGrades / count($students);

echo "Students with grades above the class average of $average:\n";
foreach ($students as $student) {
    if ($student[1] > $average) {
        echo "<br>";
        echo $student[0] . " achieved " . $student[1] . "\n" ;
    }
}
?>
