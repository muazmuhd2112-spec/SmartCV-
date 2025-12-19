<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $hobbies = $_POST['hobbies'] ?? [];
    $Rname = $_POST['Rname'] ?? [];
    $rank = $_POST['rank'] ?? [];
    $phone = $_POST['phone'] ?? [];
    $id = $_POST['id'] ?? 0;

    try {
        $queryskill = $conn->prepare("
            INSERT INTO hobbies (hobbies, Rname, rank, phone, user_id)
            VALUES (:hobbies, :Rname, :rank, :phone, :user_id)
        ");

        // Loop through each group of inputs
        for ($i = 0; $i < count($hobbies); $i++) {
            // Skip empty rows
            if (empty($hobbies[$i])) continue;

            $queryskill->execute([
                ':hobbies' => $hobbies[$i],
                ':Rname' => $Rname[$i] ?? '',
                ':rank' => $rank[$i] ?? '',
                ':phone' => $phone[$i] ?? '',
                ':user_id' => $id
            ]);
        }

        $_SESSION['success'] = "Successfully added!";
        header("Location:template.php?user_id=$id");
        exit();

    } catch (PDOException $e) {
        die("ERROR INSERTING RECORD: " . $e->getMessage());
    }
}
?>
