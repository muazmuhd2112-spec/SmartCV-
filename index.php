<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical"  href="htttps://getbootstrap./docs/5.1/examples/dashboard/">
	<link rel="stylesheet"  href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>SmartCV - Build. Edit. Download. Get Hired.</title>
</head>
<style>
	.dashboard-content{
      	display: flex;
      	min-height: 100vh;
      	justify-content: center;
      	align-items: center;
      	flex-direction: column;
     }
   
    
     h1{
     	text-align: center;
     	font-weight:bold;
     	font-size: 45px;
     	text-transform: capitalize;
     }
     .description{
     	display: flex;
     	justify-content: center;
     	align-items: center;
     	padding: 15px;
     }
     p{
     	width: 70%;
     	text-align: center;
     	color: #3a3a3a;
       	line-height: 40px;
     }
     .btn-container{
     	display: flex;
     	justify-content: center;
     	align-items: center;
     	gap: 40px;
     }
     .sig-btn{
     	padding: 14px;
     	background:linear-gradient(45deg,#194b4f,#33fffc) ;
     	width: 25%;
     	border-radius:5px;
     }
     .lig-btn{
     	padding: 14px;
     	border: 1px solid #ccc;
     	width: 25%;
     	background: whitesmoke;
     	border-radius: 5px;

     }
     .lig-btn:hover{
     	box-shadow: 0 4px 6px rgb(0, 0, 0,0.1);
     	cursor: pointer;
     }
     .sig-btn:hover{
     	box-shadow: 0 4px 6px rgb(0, 0, 0,0.1);
     	cursor: pointer;
     }
     @media(max-width: 768px){
     	.header{
     		margin-top:50px;
     		line-height: 50px;

     	}
     	h1{
     		font-size: 30px;
     	}
     	p{
     		width: 100%;
     	}
     	.btn-container{
     		flex-direction: column;
     	}
     	.sig-btn{
     		width: 50%;
     		padding: 3px;
     		text-align: center;
     	}
     	.lig-btn{
     		width: 50%;
     		padding: 3px;
     		text-align: center;
     	}
     	.wraper{
     		flex-direction: column;
     		padding: 19px;
     		width: 100%;
     	}
     	.card{
     		margin-top: 0px;
     		
     	}
     }
   
     .wraper{
     	
     	display: flex;
		flex-wrap: wrap;
		gap: 30px;
		justify-content: center;
		align-items: center;
		margin-top:0;

		

     }
     .card{
       	width: 24%;
		box-shadow: 0 4px 6px rgba(0,0,0,0.5);
		padding: 40px;
		transition: all 0.3s ease;
		height: 200px;
		border-radius: 10px;
		text-align: left;
     }
     .footer {
    background-color: whitesmoke;
    text-align: center;
    padding: 14px 30px;
    font-size: 0.9rem;
    color: #7f8c8d;
    border-top: 1px solid #ecf0f1;
    box-shadow: 0 4px 6px rgba(0,0,0,0.6);
}
</style>
<body>
	<?php 	include 'header.php'; ?>
	<div class="dashboard-content">
		<div class="header">
			<h1>Design  <span style="color: #4da3ff;"> professional  CV quickly <br> with our easy-to-use templates  </span></h1>
			<div class="description">
			<p>Create professional <b>CVs</b> and <b>resumes</b> easily with ready-made <b>templates</b>, smart formatting, and instant <b>downloads</b> no design skills required.
				Turn your <b>skills</b> and <b>experience </b>into a professional resume that gets noticed. <b>Build and download </b> your CV all in one place.
				Our intelligent builder guides you step-by-step to craft a stunning, professional resume tailored to your dream job

			</p>
			</div>
			<div class="btn-container">
				<div class="sig-btn"><a href="resume_input.php">Start Creating CV</a></div>
				<div class="lig-btn"><a style="color: black;" href="#">Explore CV Templates</a></div>
			</div>
		</div>
		
	</div>
	<br><br>
		<!-- Footer -->
        <footer class="footer">
            &copy; 2025 S-Connect Tech Limited | For more @smadigawa@gmail.com
        </footer>
</body>
</html>