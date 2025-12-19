<?php 
include 'conn.php';

$id = $_GET['user_id'];

// upload photo if submitted
if(isset($_FILES['profile_photo'])){
    $file_name = $_FILES['profile_photo']['name'];
    $file_tmp = $_FILES['profile_photo']['tmp_name'];
    $upload_path = "uploads/" . $file_name;
    move_uploaded_file($file_tmp, $upload_path);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Your Pic</title>

  <style>
    body {
      background: whitesmoke;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h4 {
      padding: 19px;
      text-align: center;
      margin: 20px;
      color: #2E4053;
      font-weight: normal;
    }

    .dashboard {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-box {
      width: 90%;
      max-width: 400px;
      background: #fff;
      padding: 25px 20px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .form-box h3 {
      margin-bottom: 20px;
      font-size: 1.5rem;
      text-align: center;
      color: #007bff;
    }

    .photo-upload {
      text-align: center;
      margin-bottom: 20px;
      position: relative;
    }

    .photo-upload img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #007bff;
      transition: transform 0.3s ease;
    }

    .photo-upload img:hover {
      transform: scale(1.05);
    }

    .photo-upload input[type="file"] {
      display: block;
      margin: 15px auto;
      cursor: pointer;
    }

    .form-box button {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .form-box button:hover {
      background-color: #0056b3;
    }

    @media (max-width: 480px) {
      .photo-upload img {
        width: 120px;
        height: 120px;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="dashboard">
    <div class="form-box">
      <h3>Upload Profile Photo</h3>
      <form action="pic.php" method="POST" enctype="multipart/form-data">
        <div class="photo-upload">  
          <img id="preview" src="<?php echo isset($upload_path) ? $upload_path : 'https://via.placeholder.com/150'; ?>" alt="Profile Photo">
          <input type="file" name="pic" accept="image/*" required onchange="previewImage(event)">      
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit">Upload</button>
      </form>
    </div>
  </div>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const output = document.getElementById('preview');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>

</body>
</html>
