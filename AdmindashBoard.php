<html>
<head>
	<title>Admin page</title>
	<style>
		body{
			background-color:#4c0080;
			background-repeat: repeat;
			background-size:cover;
			background-attachment: scroll;
			

		}
		.l1{
			color:white;
			font-size:35px;
		}
		.statistics{
	    	width:400px;
			height:400px;
			border:10px;
			bottom:150px;
			right:2px;
			border-color: black;
			border-width: 15px;
			background-color: #cc80ff; 
			position: absolute;
			border-radius: 35px;
			font-size:35px;
		

	    }
	    .inner{
	    	width:330px;
			height:330px;
			border:10px;
			bottom:35px;
			left:38px;
			border-color: black;
			background-color: white; 
			position: absolute;
			border-radius: 35px;
			font-size:35px;
		}
	    .l2{
			color:white;
			font-size:35px;
			bottom:500px;
			position: absolute;
		}
		 input[type=text] {
        width: 95%;
        padding:20px;
        bottom:100px;
        margin: 10px 5px 22px 0;
        border-radius:10px;
        font-size:16px;
        border:solid;
        color: black;
        font-family:cursive;
        background:#f1f1f1;
}
.submit{
		 padding:10px;
	     background-color: #04AA6D;
	     font-size:25px;
	     position: absolute;
	     left:100px;
		}
	.sg{
		position: absolute;
		left:15px;
	}
	.th1,.th2,.th3,.th3,.th4,.th5,.th6,.th8{
		padding:1px;
	}
	.th7{
		padding:55px;
	}
	.table{
		left:200px;
		background-color: white;
	}
	td{
		padding:15px;
	}
	</style>
</head>	
<body>
	<label class="l1">
		Welcome back, Admin.......!!!
	</label>

	
		<div class="statistics">
			<div class="inner">
				<form action="ABoardback.php" method="POST">
		     <div class="rollno">
			<br>
			  <label class="sg">Student Grievance:</label><br>
			<input type="text" name="t1" placeholder = "Enter date in {yyyy-mm-dd} format" >
             </div >
             <input class="submit" type="submit" value="VIEW">
	</form>

		    </div>
			
		</div>
		
<?php
if(isset($_GET['a']))
{

$h=mysqli_connect("localhost","root","" ,"grievances",'3308');
$q="select * from stdquery";
$r1=mysqli_query($h,$q);
$a1=mysqli_fetch_array($r1);
echo"<table class='table' border='2'>";
echo"<tr>";
echo"<th align='center'class='th1' >  DATE </th>";
echo"<th align='center'class='th2'> STUDENT NAME </th>";
echo"<th align='center'class='th3'> SEAT NUMBER </th>";
echo"<th align='center'class='th4'> PHONE NO </th>";
echo"<th align='center'class='th5'> EMAIL ID </th>";
echo"<th align='center'class='th6'> STREAM </th>";
echo"<th align='center'class='th7'> QUERY </th>";
echo"<th align='center'class='th8'> STATUS </th>";
echo"</tr>";
echo"<tr>";
echo"<td align='center' cellpadding='15'>".$a1[0]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[1]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[2]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[3]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[4]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[5]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[6]."</td>";
echo"<td align='center' cellpadding='15'>".$a1[7]."</td>";
echo"</tr>";


echo"</table>";
mysqli_close($h);
}
else
{
	echo"<script> alert('No data found..!!!')</script>";
}

?>
</body>	

</html>