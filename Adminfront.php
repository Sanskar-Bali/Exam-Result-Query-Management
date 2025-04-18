<html>
<head>
	<title>Admin page</title>
	<style>
		body{
			background-image:url(adminpageimage.jpg);
			background-repeat: repeat;
			background-size:cover;
			background-attachment: scroll;

		}
		.adminlogin{
			position:absolute;
	    	top:100px;
	    	right:500px;
	    	height:200px;
	    	width:400px;
	    	background-color:white;
	    	opacity:0.7;
	    	border-radius:10px;
	    	padding: 30px;
	    	font-size: 30px;
		}
		input[type=password] {
        width:80%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border-radius:10px;
        font-size:10px;
       
        
}
        input[type=submit] {
        padding: 15px;
        margin: 5px 0 22px 0;
        border-radius:10px;
        font-size:25px;
       
       
        
}
.submit:hover{
	font-size: 28px;


}
		
	</style>
</head>
<body>
	<div  class="adminlogin">
		<form action="Adminback.php" method="POST">
			Enter Password<br><br>
			<input type="password" name="pass"><br>
		    <input class="submit" type="submit" value="Login">
	</div>	

	<?php
if(isset($_GET['a']))
{
	echo"<script> alert('Invalid Password...Try again..!!!')</script>";
}
?>
	
</body>
</html>