<html>
<title> Contact Admin
</title>
<style>
	body{
			background-color:#ff0066;
			background-repeat: repeat;
			background-size:cover;
			background-attachment: scroll;
			font-family: white;

	
		}
		.frame{
			background-color:white;
			width:400px;
			height:800px;
			align-self: center;
			padding-left:15px;
			border-radius: 20px;
			position: absolute;
			font-size: 15px;
			left:550px;
			top:70px;
			border:solid;
			color:black;

			

		}
		.l1{
			color:white;
			font-size:35px;
		}

		input[type=text] {
        width:80%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border-radius:10px;
        font-size:16px;
       
}
.list{
	width:65%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border-radius:10px;
        font-size:16px;

}
.txtarea{
	    width:80%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border-radius:10px;
        font-size:16px;

}
.sn{
	font-size: 20px;
}
.seatno,.pn,.eid,.stream,.query{
	font-size: 20px;
}
.submit{
	width:95%;
	border:none;
	outline:none;
	padding :20px;
	font-size:24px;
	border-radius: 8px;
	font-family:'arial';
	color:rgb(27,166,247);
	text-align: center;
	cursor:pointer;
	transition :.3s ease background-color;
}
.submit:hover{
	background-color: rgb(214,226,236);
}
</style>
<body>
	<label class="l1">
	Welcome Student, Please Fill the below form for any grievances.....!!!!
	</label>
	
	<div class="frame">
		<form action="cadminback.php" method="POST">
		<div class="stdname">
			<br>
			<label class="sn"> Students Name:</label> 
			<input type="text" name="t1" placeholder="Enter your full name:">

		</div >
		<hr>
		<div class="seatnumber">
			<label class="seatno">Enter your seat number:</label>
			<input type="text" name="t2" placeholder="Enter your seat number:">
		</div>
		<hr>	
		<div class="phonenumber">
			<label class="pn"> Phone number: </label>
			<input type="text" name="t3" placeholder="Enter your valid phone no:">
		</div>	
		<hr>
		<div class="Query">
			<label class="eid" >Email ID:</label>
			<input type="text" name="t4" placeholder="Enter your valid Email ID:">
		</div>
		<hr>	
		<label class="stream">Stream:</label><select  class="list" name="t5"> 
		           <option value="Science">Science</option> 
		           <option value=Commerce>Commerce</option> 
		           <option value="Arts">Arts</option> 
		           </select><hr> 
		<label class="query"> Query:</label>
		<textarea name="t6" class="txtarea" placeholder="Write your query in short:"></textarea><hr>          
		<input class="submit" type="submit" value="submit">
	</form>
	</div>
	<?php
if(isset($_GET['a']))
{
	echo"<script> alert('Email Id is required...Try again..!!!')</script>";
}
if(isset($_GET['b']))
{
	echo"<script> alert('Submission successful , Checkout your mail for confirmation')</script>";
}
?>
</body>	
</html>