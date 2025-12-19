<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<div class="header-container">
			<div class="logo">
				<img src="src/logo.jpg" style="border-radius:10px;height: 40px; width: ">
				<span class="span">SmartCV</span>
			</div>
			<div class="hamburger" onclick="toggleMenu()" style="font-size: 19px;" >
			<span></span>
      <span></span>
      <span></span>
      <span></span>
      </div>
			<div class="links" id="links">
				<a href="index.php">Home</a>
				<a href="#">Create</a>
				<a href="#">About</a>
				<a href="#">Help</a>
				<div class="button">
					<a href="#">Get Started</a>
				</div>
			</div>
		</div>
	</body>
	<script>
	
    function toggleMenu() {
      const nav = document.getElementById('links');
      nav.classList.toggle('active');
    }
  </script>
</html>