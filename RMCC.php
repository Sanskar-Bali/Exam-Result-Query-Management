


<html>
<head>
	<title>HSC Result</title>
	<style>
 

	ul{
		margin:0;
		padding:0;
		list-style: none;
		height:36px;
	    line-height: 36px;
	    background-color:#20B2AA;
	    font-family:sans-serif;
	    font-size:13px;

	}	

	li{
		float: left;
		border-right: 1px solid white;
		text-align: center;
		
		


	}
	a{
		display: block;
		padding:0 28px;
		font-size: 18px;
		color: white;
		

	}

	a:hover{
		background-color:black;
		font-size:23px;
		text-decoration:none;



	}
	.s1,.s2,.s3{
		display:block;
		padding:0 28px;
		font-size: 18px;
		color:white;

	}
	.s1,.s2,.s3,:hover{
		background-color:none;
		font-size:18px;
		text-decoration:none;
		

	}

   input[type=text] {
        width: 80%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border-radius:10px;
        font-size:16px;
        border: none;
        background: #f1f1f1;
}

.submit{
		 padding:10px;
	     background-color: #04AA6D;
	     font-size:25px;
		}
.stdinfo{
			background-color:white;
			width:350px;
			height:350px;
			align-self: center;
			padding-left:15px;
			border-radius: 20px;
			position: absolute;
			font-size: 15px;
			left:18px;
			bottom:24px;



		}
		.rollno{
			font-size: 30px;
			width:115%;
		}
		.mothername{
			font-size: 30px;
			width:115%;
		}
		.main{

			width:400px;
			height:400px;
			border:10px;
			border-color: black;
			background-color:#708090; 
			position: absolute;
			left:590px;
			bottom:150px;
			border-radius: 35px;
		

		}
		



		}
		li .dd{
			display: block
			height:36px;
			line-height: 36px;
		}
		marquee{
	    	font-size:20px;
	    	color: black;
	    	transform: translateX();
	    	margin:0;
	    	background-color: yellow;
	    }
	    center{
	    	bottom:500px;
	    }
	    .foo{
	     	position:fixed;
	     	left:0;
	     	bottom:0;
	     	height:40px;
	     	width:100%;
	     	color:black;
	     	text-align: center;
	        background-color:#80ffbf;	
	    }
	    .statistics{
	    	width:400px;
			height:400px;
			border:10px;
			bottom:150px;
			left:50px;
			border-color: black;
			background-color:#ff1a75; 
			position: absolute;
			border-radius: 35px;
		

	    }
	    	    .admin {
	    	position:absolute;
	    	right:40px;
	    	height:50px;
	    	width:100px;
	    	background-color:#99bbff;
	    	padding:10px;
	    	border-radius:10px;



	    }
	    .stdquery {
	    	position:absolute;
	    	top:200px;
	    	right:40px;
	    	height:50px;
	    	width:100px;
	    	background-color:#ff99e6;
	    	padding:10px;
	    	border-radius:10px;




	    }

	</style>	


</head>
<body >
	<ul>
		<li><a href="RMCC.php">Home</a></li>
		<li><a href="aboutus.php">About Us</a></li>
		<li><a href="disclaimer.php">Disclaimer</a></li>	
		<li><a href="resultlist.php">Results</a></li>
		
		
	</ul>

	<p> <marquee scrollamount="10">Latest announcement:********** HSC RESULT 2021 **********</marquee></p>	
	<div class="admin"><a class="adlink" href="Adminfront.php"> <label>Admin Login</label></a></div>	
	<div class="stdquery"><a class="stdlink" href="contactadmin.php"> <label> Contact Admin</label></a></div>
	<div class="main">
	<div class="stdinfo">
		<form action="RBCC.php" method="POST">
		<div class="rollno">
			<br>
			Seat No:<br>
			<input type="text" name="t1" placeholder="Enter valid seat number">

		</div >
		<div class="mothername">
			Mother's Name:<br>
			<input type="text" name="t2" placeholder="Mothers first name as on your admit card">
		</div>	
		<input class="submit" type="submit" value="View Result">
	</form>
	</div>
	</div>
	<div class="statistics">
    <pre>
    
    <h3>		
      STATE LEVEL STATISTICS
    __________________________
 
	<a  class="s1" href="DWP.php"> <label> Division Wise Performance</label>  </a>
	<a  class="s2" href="GWP.php"> <label> Grade Wise Performance</label>  </a>
	<a  class="s3" href="SWP.php"> <label> Stream Wise Performance</label>  </a>
	</h3>
	</pre>	
	</div>
	<div class="foo">
			<p>Designed, Developed and Hosted by Sanskar Bali</p>
	</div>
			

<?php
if(isset($_GET['a']))
{
	echo"<script> alert('Invalid seat number or mothers name...Try again..!!!')</script>";
}
?>

</body>	
</html>