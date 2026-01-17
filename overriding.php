<?php
class Teacher {
    public function getRole() {
        return "I am a teacher.";
    }
}


class MathTeacher extends Teacher {
    public function getRole() {
        return "I am a math teacher.";
    }
}

$teacher = new MathTeacher();
echo $teacher->getRole(); // Outputs: I am a math teacher.

?>