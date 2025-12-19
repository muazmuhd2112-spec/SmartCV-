<?php 

$id = $_GET['user_id'];



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template</title>
</head>
<style>
	h4{
		padding: 19px;
		text-align: center;
		margin: 20px;
		color: #2E4053;
		font-weight: normal;
	}
	.form-box {
 	 max-width: 500px;
  	margin: 30px auto;
  	padding: 20px;
  background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
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
<div class="form-box">
	<h2 style="text-align: center; color: #ffff;">Choose Your CV Template</h2>
	<form action="generate.php" method="POST" >

		<select name="template">
			<option value="" >Select Template</option>
			<option value="Normal White  Paper">Normal White  Paper</option>
			<option value="Blue → Cyan (Clean & Modern)">Blue → Cyan (Clean & Modern)</option>
			<option value="Multi-color Accent">Multi-color Accent </option>
			<option value="Dark Mode">Dark Mode</option>
		</select>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<button>Generate CV</button>
	</form>
</div>
</body>
</html>