<html>
<head>
	<style type="text/css">
	     center table{
			position:absolute;
			bottom:330px;
			left:460px;
			height:400px;
			width:600px;
			border-collapse: collapse;

		}
		button{
			position: absolute;
			bottom:100px;
			left:710px;
			height:50px;
			width:80px;
			background-color:#4d94ff;

		}
		.trenglish,.trchemistry,.trcompsci{
			background-color:#DCDCDC;

		}
		.pt,.ro{
			background-color:#90EE90;
		}
		.tr1{
			background-color: #fff0f5;
		}
			
	</style>
</head>
<body>		
<?php
$s=$_POST['t1'];
$m=$_POST['t2'];
$flag=0;
$h=mysqli_connect("localhost","root","","hscresult",'3308');//3308 is my port number for mysql//
$q="select Seat_no,mother from hscdata";
$r=mysqli_query($h,$q);
while($a=mysqli_fetch_array($r))
{
	if($a[0]==$s and $a[1]==$m)
	{
		$flag=1;
	

	}
	
}
if($flag==1)
{
$q1="select *from hscdata";
$r1=mysqli_query($h,$q1);
$a1=mysqli_fetch_array($r1);
echo"<center>";
echo"<table border='2'>";
echo"<tr>";
echo"<td class='tr1' align='center' colspan='12'>HSC EXAMINATION RESULT 2021</td>";
echo"<tr>";
echo"<td>Name:</td>";
echo"<td colspan='11'>".$a1[0]."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Seat no:</td>";
echo"<td colspan='11'>".$a1[1]."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Division:</td>";
echo"<td colspan='11'>".$a1[2]."</td>";
echo"</tr>";
echo"<tr>";
echo"<td align='center' colspan='4'>Subject Code</td>";
echo"<td align='center'colspan='4'>Subject Name</td>";
echo"<td align='center' colspan='4'>Marks Obtained</td>";
echo"<tr class='trenglish'>";
echo"<td align='center' colspan='4'>".$a1[3]."</td>";
echo"<td align='center' colspan='4'>".$a1[4]."</td>";
echo"<td align='center'colspan='4'>".$a1[5]."</td>";
echo"</tr>";
echo"<tr>";
echo"<td align='center' colspan='4'>".$a1[6]."</td>";
echo"<td align='center' colspan='4'>".$a1[7]."</td>";
echo"<td align='center' colspan='4'>".$a1[8]."</td>";
echo"</tr>";
echo"<tr class='trchemistry'>";
echo"<td align='center' colspan='4'>".$a1[9]."</td>";
echo"<td align='center' colspan='4'>".$a1[10]."</td>";
echo"<td align='center' colspan='4'>".$a1[11]."</td>";
echo"</tr>";
echo"<tr>";
echo"<td align='center' colspan='4'>".$a1[12]."</td>";
echo"<td align='center' colspan='4'>".$a1[13]."</td>";
echo"<td align='center' colspan='4'>".$a1[14]."</td>";
echo"</tr>";
echo"<tr class='trcompsci'>";
echo"<td align='center' colspan='4'>".$a1[15]."</td>";
echo"<td align='center' colspan='4'>".$a1[16]."</td>";
echo"<td align='center' colspan='4'>".$a1[17]."</td>";
echo"</tr>";
echo"<tr>";
echo"<td align='center' colspan='4'>".$a1[18]."</td>";
echo"<td align='center' colspan='4'>".$a1[19]."</td>";
echo"<td align='center' colspan='4'>".$a1[20]."</td>";
echo"</tr>";
echo"<tr class='pt'>";
echo"<td colspan='4' align='center'>£ Percentage</td>";
echo"<td align='center' colspan='4'>".$a1[24]."</td>";
echo"<td colspan='2' align='center'>Total Marks</td>";
echo"<td colspan='2' align='center'>".$a1[21]."</td>";
echo"</tr>";
echo"<tr class='ro'>";
echo"<td colspan='4' align='center'>Result</td>";
echo"<td align='center' colspan='4'>".$a1[22]."</td>";
echo"<td colspan='2' align='center'>Out Off</td>";
echo"<td colspan='2' align='center'>".$a1[23]."</td>";
echo"</tr>";
echo"</table>";
echo"</center>";

echo"<button onclick='window.print()'>PRINT</button>";
	//header('Location:form.php');

}
else
{
	header('Location:RMCC.php?a=1');

}
mysqli_close($h);
?>
</body>
</html>