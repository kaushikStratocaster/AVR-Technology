<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="https://www.avrtechnology.in/wp-content/uploads/2019/06/logo-200.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Admin LogIn</title>
	<style type="text/css">
.left-container
{
align-content: center;
height: 500px;
width: 390px;
border-radius: 10px;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
background-color:white;
}
input
{
	background-color: #eee;
	border: none;
	padding: 10px;
	width: 250px;
}
button
{

	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	transition: transform 80ms ease-in;
}
button:hover
{
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FFFFFF;
	color: #FF4B2B;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;	
}
h2
{
	letter-spacing: 2px;
	font-family: 'Montserrat', sans-serif;
}
</style>
</head>
<body>
<center>
	<div class="logo"><center><a href="https://www.avrtechnology.in/"><img src="https://www.avrtechnology.in/wp-content/uploads/2019/06/logo-200.png" alt="AVR Technology" height="95px" width="100px"></a></center></div>
		<div class="left-container">
		<br><br><br><br><br><br><h2>Sign In</h2><br>
		<input type="text" name="email" placeholder="Email"><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<button name="submit" onclick="window.location.href='https://www.avrtechnology.in/public_html/internal/validate.php'">Sign In</button>
	</div>
</center>
</body>
</html>