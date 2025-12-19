<?php 
session_start();

include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$fName=$_POST['fName'];
	$birth=$_POST['birth'];
	$gender=$_POST['gender'];
	$marital=$_POST['marital'];
	$lga=$_POST['lga'];
	$state=$_POST['state'];
	$nationality=$_POST['nationality'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	try {
$queryinfo=$conn->prepare("INSERT INTO personal_info(fName,birth,gender,marital,lga,state,nationality,address,email,phone) VALUES(:fName,:birth,:gender,:marital,:lga,:state,:nationality,:address,:email,:phone)");
$queryinfo->bindParam(':fName',$fName);
$queryinfo->bindParam(':birth',$birth);
$queryinfo->bindParam(':gender',$gender);
$queryinfo->bindParam(':marital',$marital);
$queryinfo->bindParam(':lga',$lga);
$queryinfo->bindParam(':state',$state);
$queryinfo->bindParam(':nationality',$nationality);
$queryinfo->bindParam(':address',$address);
$queryinfo->bindParam(':email',$email);
$queryinfo->bindParam(':phone',$phone);
$queryinfo->execute();



$queryselect=$conn->prepare("SELECT * FROM personal_info WHERE fName= :fName");
$queryselect->bindParam(':fName',$fName);
$queryselect->execute();
$rowselect=$queryselect->fetch(PDO::FETCH_ASSOC);
$id=$rowselect['id'];

$_SESSION['success'] = "NEXT PAGE FOR YOU";

	//Redirect back to instution
	header("Location:school_attend.php?id=$id ");
	exit();
		
	} catch (PDOException $e) {
	die("ERROR INSERTING RECORD:" .$e->getMessage());
	}
}


 ?>