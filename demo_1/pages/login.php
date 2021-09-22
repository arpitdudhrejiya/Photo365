<!DOCTYPE html>
<html lang="en">
  	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>Plus Admin</title>
		<link rel="shortcut icon" href="../../assets/images/favicon.png" />

		<style>
			body{
				margin:0;
				background-color:#00BFFF;
			}
			#main{
				height:300px;
				padding-bottom:60px;
				width:400px;
				background-color:white;
				margin-top:100px;
			}
			#title{
				padding-top:50px;
				text-align:center;
				font:22px arial;
				font-weight:600;
			}	
			#tab1 input,#tab2 input,#tab3 input{
				margin-top:30px;
				height:40px;
				width:300px;
				padding-left:5px;
				outline:none;
				border:2px dashed #00BFFF;
			}
			#tab4 input{
				height:40px;
				width:100px;
				background-color:#191970;
				outline:none;
				border:none;
				color:white;
				font:16px arial;
				margin-top:55px;
				cursor: pointer;
			}
			#tab4 input:hover{
				height:40px;
				width:100px;
				background-color:#191970;
				outline:none;
				border:none;
				color:white;
				font:16px arial;
				margin-top:55px;
				cursor: pointer;
				box-shadow: 0 0 0 0.1rem rgba(50, 50, 150, 639); 
			}
			.footer p{
				color:#e0e0e0;
			}
			.footer a{
				color:#f8f8f8;
				text-decoration: none;
			}
		</style>
    </head>
	<body>
		<center>
			<div id="main">
				<div id="title"> Company Name </div>
				<form action="loginconn.php" method="post">
					<div id="tab1">	
						<input type="email" placeholder="example@mail.com" required="" name="email" autofocus/>
					</div>
					<div id="tab3">	
						<input type="password" placeholder="********" required="" name="password"/>
					</div>
					<div id="tab4">
						<input type="submit" value="LOG IN!"/>
					</div>
				</form>
			</div>
			<br><br><br><br><br><br>
			<div class="footer">
				<p>Copyright © 2020 <a href="#">Andropedia infoteh.</a> All rights reserved.</p>
			</div>
		</center>
	</body>
</html>