<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $skills = $_POST['skills'] ?? [];
    $place_working = $_POST['place_working'] ?? [];
    $post = $_POST['post'] ?? [];
    $eDate = $_POST['eDate'] ?? [];
    $id = $_POST['id'] ?? 0;

    try {
        $queryskill = $conn->prepare("
            INSERT INTO skills (skills, place_working, post, eDate, user_id)
            VALUES (:skills, :place_working, :post, :eDate, :user_id)
        ");

        // Loop through each group of inputs
        for ($i = 0; $i < count($skills); $i++) {
            // Skip empty rows
            if (empty($skills[$i])) continue;

            $queryskill->execute([
                ':skills' => $skills[$i],
                ':place_working' => $place_working[$i] ?? '',
                ':post' => $post[$i] ?? '',
                ':eDate' => $eDate[$i] ?? '',
                ':user_id' => $id
            ]);
        }

        $_SESSION['success'] = "Successfully added!";
        header("Location: referees.php?user_id=$id");
        exit();

    } catch (PDOException $e) {
        die("ERROR INSERTING RECORD: " . $e->getMessage());
    }
}
?>
