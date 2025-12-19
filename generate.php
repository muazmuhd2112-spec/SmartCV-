<?php 
session_start();

include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$template=$_POST['template'];
	 $id= $_POST['id']; 
	

	try {
$queryinfo=$conn->prepare("INSERT INTO template(template,user_id) VALUES(:template,:user_id)");
$queryinfo->bindParam(':template',$template);
$queryinfo->bindParam(':user_id',$id);
$queryinfo->execute();

$_SESSION['success'] = "welcome to meemz dinerr payment";

	if ($template == "Normal White  Paper") {
			header("Location:template1.php?user_id=$id");
			exit();
		}
		if ($template == "Blue → Cyan (Clean & Modern)") {
			header("Location:upload_pic.php?user_id=$id");
			exit();
		}
		if ($template == "Multi-color Accent") {
			header("Location:template3.php?user_id=$id");
			exit();
		}
		if ($template == "Dark Mode") {
			header("Location:template4.php?user_id=$id");
			exit();
		}




	} catch (PDOException $e) {
	die("ERROR INSERTING RECORD:" .$e->getMessage());
	}
}


 ?>