<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create CV</title>
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
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 12px;
  width: 100%;
  font-size: 1rem;
  border-radius: 6px;
  cursor: pointer;
}

.form-box button:hover {
  background-color: #0056b3;
}

</style>
<body>
	<?php include 'header.php'; ?>
	<div class="dashboard-container">
		<h4>Our smart platform helps you design clean, <br>job-ready CVs that stand out to employers. Fast, simple, and fully customizable.</h4>
		<div class="form-box">
			<h3>Build Your CV</h3>
			<form action="personal_info.php" method="POST"  >
				<h5>Personal Info</h5><hr>
				<label>FULL NAME</label>
				<input type="text"placeholder="Full name" name="fName"required>
				<label>Date Of Birth</label>
				<input type="date"placeholder="Date Of Birth" name="birth"required>
				<label>Gender</label>
				<select name="gender"required>
					<option>Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				<label>Marital Status</label>
				<select name="marital"required>
					<option>marital status</option>
					<option value="married">married</option>
					<option value="single">single</option>
				</select>
				<label>Local Govt</label>
				<input type="text"placeholder="Local Govt" name="lga"required>
				<label>State of Origin</label>
				<input type="text"placeholder="State of Origin" name="state"required>
				<label>Nationality</label>
				<input type="text"placeholder="Nationality" name="nationality"required>
				<label>Contact Address</label>
				<input type="text"placeholder="Contact Address" name="address"required>
				<label>Email</label>
				<input type="email" name="email" placeholder="email" required>
				<label>Phone</label>
  					<input type="text" name="phone" placeholder="pho" required>
  					<button>Submit</button>
			</form>
		</div>
	</div>
</body>
</html>