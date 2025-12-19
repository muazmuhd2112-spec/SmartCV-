<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $id = $_POST['id'];

    // Ensure upload folder exists
    $targetDir = "uploads/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    // Handle file upload
    if (isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {

        $fileName = basename($_FILES['pic']['name']);
        $fileTmp = $_FILES['pic']['tmp_name'];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Rename file to avoid duplicates
        $newName = "user_" . $id . "_" . time() . "." . $fileType;
        $targetFilePath = $targetDir . $newName;

        // Allowed file types
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowed)) {
            if (move_uploaded_file($fileTmp, $targetFilePath)) {
                try {
                    $stmt = $conn->prepare("INSERT INTO pictures (pic, user_id) VALUES (:pic, :user_id)");
                    $stmt->bindParam(':pic', $newName);
                    $stmt->bindParam(':user_id', $id);
                    $stmt->execute();

                    header("Location: template2.php?user_id=$id");
                    exit();
                } catch (PDOException $e) {
                    die("❌ ERROR INSERTING RECORD: " . $e->getMessage());
                }
            } else {
                echo "❌ Failed to move uploaded file.";
            }
        } else {
            echo "⚠️ Only JPG, JPEG, PNG, and GIF formats are allowed.";
        }
    } else {
        echo "⚠️ Please select a valid image file.";
    }
}
?>
