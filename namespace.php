<?php
 include 'teacher.php';
 include 'management.php';
 

    $teacherJoining = new teacher\JoiningDate();
    echo $teacherJoining->getJoiningDate();
    echo "<br>";
    $managementJoining = new Management\JoiningDate();
    echo $managementJoining->admissionDate();
?>