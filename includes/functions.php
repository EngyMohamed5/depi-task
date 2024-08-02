<?php

    function insertStudent($fname, $lname, $gender, $email, $address, $course) {
        global $con;
        $stmt = $con->prepare("INSERT INTO students (first_name, last_name, gender, email, address, course) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($fname, $lname, $gender, $email, $address, $course));
    }

    function getStudents(){
        global $con; 
        $stmt = $con->query("SELECT * FROM students");
        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $students;
    }

?>