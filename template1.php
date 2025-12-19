<?php 
include 'conn.php';
$id = $_GET['user_id'];

$queryuser = $conn->prepare("SELECT * FROM personal_info WHERE id = :id");
$queryuser->bindParam(':id', $id);
$queryuser->execute();
$rowuser = $queryuser->fetch(PDO::FETCH_ASSOC);

$querycareer = $conn->prepare("SELECT * FROM school_attendance WHERE user_id = :user_id ");
$querycareer->bindParam(':user_id', $id);
$querycareer->execute();
$rowcareer = $querycareer->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $rowuser['fName']?> - CV</title>

	<style>
	
		.container{
			border-radius: 8px;
			padding: 25px;
			margin: 30px auto;
			max-width: 1000px;
			background: #fff;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			box-sizing: border-box;
			color: #222;
			line-height: 1.6;
		}

		h1 {
			text-align: center;
			font-size: 2.2rem;
			margin-bottom: 10px;
			color: #111;
		}

		.contact {
			text-align: right;
			font-size: 0.95rem;
			line-height: 1.4;
		}

		.contact span {
			color: #333;
			font-weight: 600;
		}

		.header {
			font-weight: bold;
			font-size: 1.2rem;
			margin-top: 25px;
			text-transform: uppercase;
			color: #111;
			border-bottom: 1px solid #ccc;
			padding-bottom: 5px;
		}

		.data {
			display: flex;
			flex-wrap: wrap;
			margin: 8px 0;
		}

		.title {
			flex: 1 1 150px;
			font-weight: 600;
			color: #444;
		}

		.answe {
			flex: 2 1 250px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 10px;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		ul {
			margin: 10px 0 0 20px;
		}

		@media (max-width: 768px) {
			.container {
				padding: 15px;
				margin: 10px;
				border-width: 1px;
			}

			h1 {
				font-size: 1.6rem;
			}

			.contact {
				text-align: left;
			}

			.data {
				
			}

			.title {
				margin-bottom: 4px;
			}
			
		}

	
	</style>
</head>

<body>
	<div style="text-align:center; margin-top:-10px;padding: 12px;">
  <a href="download_cv.php?user_id=<?= $id ?>" style="color: #f1f1f1;" >      Download as PDF</a></div>
<div class="container">
	
	<div class="contact">
		<label> <span><?= $rowuser['phone'] ?></span></label><br>
		<label> <span><?= $rowuser['email'] ?></span></label><br>
		<label> <span><?= $rowuser['address'] ?></span></label>
	</div>

	
	<h1><?= $rowuser['fName'] ?></h1>


	<div class="section">
		<div class="header"> Career Objective</div>
		<p><?= $rowcareer['career'] ?></p>
	</div>

	
	<div class="section">
		<div class="header"> Personal Data</div>

		<div class="data"><div class="title">Date of Birth:</div><div class="answe"><?= $rowuser['birth'] ?></div></div>
		<div class="data"><div class="title">Gender:</div><div class="answe"><?= $rowuser['gender'] ?></div></div>
		<div class="data"><div class="title">Marital Status:</div><div class="answe"><?= $rowuser['marital'] ?></div></div>
		<div class="data"><div class="title">Local Govt:</div><div class="answe"><?= $rowuser['lga'] ?></div></div>
		<div class="data"><div class="title">State of Origin:</div><div class="answe"><?= $rowuser['state'] ?> State</div></div>
		<div class="data"><div class="title">Nationality:</div><div class="answe"><?= $rowuser['nationality'] ?></div></div>
	</div>

	<div class="section">
		<div class="header"> Institutions Attended & Qualifications</div>
		<?php 
		$queryschool = $conn->prepare("SELECT * FROM school_attendance WHERE user_id = :user_id");
		$queryschool->bindParam(':user_id', $id);
		$queryschool->execute();
		$rowschool = $queryschool->fetchAll(PDO::FETCH_ASSOC);
		?>

		<?php foreach ($rowschool as $scol): ?>
			<div class="data">
				<div class="title"><?= $scol['sDate'] ?></div>
				<div class="answe">
					<b><?= $scol['school_attendance'] ?></b><br>
					<?= $scol['qualifications'] ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="section">
		<div class="header"> Skills Obtained</div>
		<ul>
			<?php 
			$queryskill = $conn->prepare("SELECT * FROM skills WHERE user_id = :user_id");
			$queryskill->bindParam(':user_id', $id);
			$queryskill->execute();
			$rowskill = $queryskill->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rowskill as $skil): ?>
				<li><?= $skil['skills'] ?></li>
			<?php endforeach; ?>
		</ul>
	</div>


	<div class="section">
		<div class="header"> Work Experience</div>
		<table>
			<tr>
				<th>Place</th>
				<th>Post</th>
				<th>Year</th>
			</tr>
			<?php 
			$querywork = $conn->prepare("SELECT * FROM skills WHERE user_id = :user_id");
			$querywork->bindParam(':user_id', $id);
			$querywork->execute();
			$rowwork = $querywork->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rowwork as $work): ?>
				<tr>
					<td><?= $work['place_working'] ?></td>
					<td><?= $work['Post'] ?></td>
					<td><?= $work['eDate'] ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>


	<div class="section">
		<div class="header"> Hobbies</div>
		<ul>
			<?php 
			$queryhooby = $conn->prepare("SELECT * FROM hobbies WHERE user_id = :user_id");
			$queryhooby->bindParam(':user_id', $id);
			$queryhooby->execute();
			$rowhooby = $queryhooby->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rowhooby as $hooby): ?>
			<li><?= $hooby['hobbies']  ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

		<div class="section">
		<div class="header"> References</div>
		<ul>
			<?php 
			$queryreferee = $conn->prepare("SELECT * FROM hobbies WHERE user_id = :user_id");
			$queryreferee->bindParam(':user_id', $id);
			$queryreferee->execute();
			$rowreferee = $queryreferee->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rowhooby as $referee): ?>
			
			
			<li>
				<?= $referee['Rname']  ?><br>
				<?= $referee['rank']  ?><br>
				 <?= $referee['phone']  ?>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

</body>

</html>
