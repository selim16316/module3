<?php
$studentGrades = array(
    array('Math' => 87, 'English' => 90, 'Science' => 75),
    array('Math' => 84, 'English' =>82, 'Science' => 92),
    array('Math' => 75, 'English' => 82, 'Science' => 68)
);

function averageGrades($gradesArray) {
    foreach ($gradesArray as $student) {
        $total = 0;
        $subjectCount = 0;

        foreach ($student as $subject => $grade) {
            $total += $grade;
            $subjectCount++;
        }

        $average = $total / $subjectCount;

        echo "Student Average Grade: " . $average . "<br>";
    }
}

averageGrades($studentGrades);
