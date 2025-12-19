<?php 
include 'conn.php';

$id=$_GET['id'];


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Attendance With date</title>
</head>
<style>
		body{
		background: whitesmoke;
	}
	h4{
		padding: 19px;
		text-align: center;
		margin: 20px;
		color: #2E4053;
		font-weight: normal;
	}
	.form-box {
 	 max-width: 600px;
  	margin: 30px auto;
  	padding: 20px;
  	background: #fff;
  	box-shadow: 0 0 10px rgba(0,0,0,0.1);
  	border-radius: 10px;
}
.form-box h3 {
  margin-bottom: 20px;
  font-size: 1.5rem;
  text-align: center;
}

.form-box label {
  display: block;
  margin: 10px 0 5px;
  font-weight: bold;
}

.form-box input,
.form-box select {
  width: 100%;
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
  margin-bottom: 15px;
  box-sizing: border-box;
}

.form-box button {
  padding: 10px 15px;
  background-color: #007bff;
  border: none;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}

.form-box button:hover {
  background-color: #0056b3;
}
.button{
	padding: 12px;
}
textarea{
	 padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      resize: none;
       height: 150px;
        width: 100%;
        box-sizing: border-box;
}
</style>
<body>
	<?php include 'header.php'; ?>
	<div class="dashboard">
		<div class="form-box">
			<form action="school.php"  method="POST"  id="dynamicForm">
				<h5>School Attended </h5><hr>
				<label>School Attended:</label>
				 <div id="inputFields">
         </div>
				<button type="button" id="addInput">➕ </button>
		<label>Career Objectives</label>
		<textarea name="career" required>
			
		</textarea>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<button>Submit</button>
			</form>
		</div>
	</div>
</body>
<script>
document.getElementById('addInput').addEventListener('click', function() {
    const container = document.getElementById('inputFields');
    const group = document.createElement('div');
    group.style.marginBottom = "15px";

    group.innerHTML = `
        <input type="text" name="school_attendance[]" placeholder="School Attended" >
        <input type="text" name="optional[]" placeholder="Optional Course" >
        <input type="text" name="sDate[]" placeholder="Date of Attendance" >
        <input type="text" name="qualifications[]" placeholder="Qualification" >
        <hr>
    `;
    container.appendChild(group);
});
</script>


</html>