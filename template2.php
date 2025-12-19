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
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: #f4f4f4;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #222;
      line-height: 1.6;
    }

    .container {
      border-radius: 8px;
      padding: 25px;
      margin: 30px auto;
      max-width: 1000px;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
      padding: 15px;
      background: #212842;
      border-radius: 8px;
      flex-wrap: wrap;
    }

    .image-container {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: #FFFCF2;
      height: 130px;
      width: 130px;
      margin: 10px auto;
      flex-shrink: 0;
    }

    img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #212842;
    }

    h1 {
      color: #fff;
      font-size: 2rem;
      text-align: center;
      font-family: Arial,sans-serif;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      background: #FFFCF2;
      margin-top: 20px;
      border-radius: 8px;
    }

    .right, .left {
      width: 50%;
      padding: 15px;
    }

    .left{
      font-family: Times New Roman;
    }

    .right {
      border-right: 1px solid #ccc;
    }

    .title {
      font-weight: bold;
      font-size: 1.3rem;
      margin-top: 20px;
      text-transform: uppercase;
      color: #111;
      border-bottom: 2px solid #212842;
      padding-bottom: 5px;
    }

    .contact-info label {
      display: block;
      padding: 8px 0;
      font-weight: 500;
    }

    @media (max-width: 900px) {
      .header {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      h1 {
        font-size: 1.8rem;
      }

      .right, .left {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #ccc;
      }

      .content {
        flex-direction: column;
      }
    }

    @media (max-width: 600px) {
      .container {
        padding: 15px;
        margin: 15px;
      }

      h1 {
        font-size: 1.5rem;
      }

      .title {
        font-size: 1.1rem;
      }

      img {
        width: 100px;
        height: 100px;
      }

      .contact-info label {
        font-size: 0.95rem;
      }
    }

    @media (max-width: 400px) {
      h1 {
        font-size: 1.3rem;
      }

      .title {
        font-size: 1rem;
      }

      img {
        width: 80px;
        height: 80px;
      }
      .links{
      	display:inline-block;
      }
    }

    .data {
      display: flex;
      flex-wrap: wrap;
      margin: 8px 0;
    }

    .ques {
      flex: 1 1 150px;
      font-weight: 600;
      color: #444;
    }

    .answe {
      flex: 2 1 250px;
    }

    li {
      padding: 12px;
      list-style: none;
      gap: 10px;
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

    td {
      font-size: 14px;
      font-weight: 600;
    }

    ul {
      margin: 10px 0 0 20px;
    }



    a {
      text-decoration: none;
      color: white;
    }

  </style>
</head>
<body>

 d

  <div class="container">
    <div class="header">
      <div class="image-container">
      	<?php


$image = $conn->prepare("SELECT pic FROM pictures WHERE user_id =:user_id ");
$image->bindParam(':user_id', $id);
$image->execute();
$rowimage = $image->fetch(PDO::FETCH_ASSOC);

?>        <img src="uploads/<?= $rowimage['pic'] ?>" alt="Profile Photo">

      </div>
      <div class="name">
        <h1><?= $rowuser['fName'] ?></h1>
      </div>
    </div>

    <div class="content">
      <div class="right">
        <div class="section">
          <div class="title">🏠 Contacts</div>
          <div class="contact-info">
            <label><strong>📞</strong><?= $rowuser['phone'] ?></label>
            <label><strong>✉️</strong> <?= $rowuser['email'] ?></label>
            <label><strong>📍</strong> <?= $rowuser['address'] ?></label>
          </div>
        </div>

        <div class="section">
          <div class="title">💻 Skills</div>
          <div class="contact-info">
            <?php 
            $queryskill = $conn->prepare("SELECT * FROM skills WHERE user_id = :user_id");
            $queryskill->bindParam(':user_id', $id);
            $queryskill->execute();
            $rowskill = $queryskill->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rowskill as $skil): ?>
              <label><?= $skil['skills'] ?></label>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="section">
          <div class="title">Hobbies</div>
          <div class="contact-info">
            <?php 
            $queryhooby = $conn->prepare("SELECT * FROM hobbies WHERE user_id = :user_id");
            $queryhooby->bindParam(':user_id', $id);
            $queryhooby->execute();
            $rowhooby = $queryhooby->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rowhooby as $hooby): ?>
              <label><?= $hooby['hobbies']  ?></label>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="section">
          <div class="title">✍️ Referees</div>
          <div class="contact-info">
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
      </div>

      <div class="left">
        <div class="section">
          <div class="title">Career Objective</div>
          <p style="padding:10px;">
            <?= $rowcareer['career'] ?>
          </p>
        </div>

        <div class="section">
          <div class="title">Personal Information</div>
          <div class="data"><div class="ques">Date of Birth:</div><div class="answe"><?= $rowuser['birth'] ?></div></div>
          <div class="data"><div class="ques">Gender:</div><div class="answe"><?= $rowuser['gender'] ?></div></div>
          <div class="data"><div class="ques">Marital Status:</div><div class="answe"><?= $rowuser['marital'] ?></div></div>
          <div class="data"><div class="ques">Local Govt:</div><div class="answe"><?= $rowuser['lga'] ?></div></div>
          <div class="data"><div class="ques">State of Origin:</div><div class="answe"> <?= $rowuser['state'] ?> State</div></div>
          <div class="data"><div class="ques">Nationality:</div><div class="answe"><?= $rowuser['nationality'] ?></div></div>
        </div>

        <div class="section">
          <div class="title">🎓 Institutions Attended With Dates</div>
          <ul>
            <?php 
            $queryschool = $conn->prepare("SELECT * FROM school_attendance WHERE user_id = :user_id");
            $queryschool->bindParam(':user_id', $id);
            $queryschool->execute();
            $rowschool = $queryschool->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rowschool as $scol): ?>
              <li><?= $scol['sDate'] ?><span style="font-weight: bold;"> <?= $scol['school_attendance'] ?></span> <span style="font-weight:bold;"> <?= $scol['qualifications'] ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="section">
          <div class="title">🏢 Working Experience</div>
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
      </div>
    </div>
  </div>

  <!-- ✅ FIXED SCRIPT STARTS HERE -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


  <!-- ✅ FIXED SCRIPT ENDS HERE -->

</body>
</html>
