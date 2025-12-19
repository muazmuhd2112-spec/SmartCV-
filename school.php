<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $school_attendance = $_POST['school_attendance'] ?? [];
    $optional = $_POST['optional'] ?? [];
    $sDate = $_POST['sDate'] ?? [];
    $qualifications = $_POST['qualifications'] ?? [];
    $career = $_POST['career'] ?? '';
    $id = $_POST['id'] ?? 0;

    try {
        $queryattendance = $conn->prepare("
            INSERT INTO school_attendance 
            (school_attendance, optional, sDate, qualifications, career, user_id)
            VALUES (:school_attendance, :optional, :sDate, :qualifications, :career, :user_id)
        ");

        // Loop through each group of inputs
        for ($i = 0; $i < count($school_attendance); $i++) {
            $queryattendance->execute([
                ':school_attendance' => $school_attendance[$i],
                ':optional' => $optional[$i],
                ':sDate' => $sDate[$i],
                ':qualifications' => $qualifications[$i],
                ':career' => $career,
                ':user_id' => $id
            ]);
        }

        $_SESSION['success'] = "Skills";
        header("Location: skills.php?user_id=$id");
        exit();

    } catch (PDOException $e) {
        die("ERROR INSERTING RECORD: " . $e->getMessage());
    }
}
?>
