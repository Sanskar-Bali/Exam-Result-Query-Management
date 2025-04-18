<?php
$name=$_POST['t1'];
$seatno=$_POST['t2'];
$pno=$_POST['t3'];
$email=$_POST['t4'];
$stream=$_POST['t5'];
$query=$_POST['t6'];
$status = "unassigned";

$to=$email;
$subject="Mail From Exam Section";
$txt="Name : ".$name."\r\n Seat Number : ".$seatno."\r\n Phone Number : ".$pno."\r\n Email : ".$email."\r\n Stream : ".$stream."\r\n Query :".$query;
$headers = "From: bali.sanskar@kgce.edu.in"."\r\n"."CC: bali.sanskar@kgce.edu.in";
if($email!=NULL){
	mail($to,$subject,$txt,$headers);
	header('Location:contactadmin.php?b=1');


}
else
{
	header('Location:contactadmin.php?a=1');

}

$h=mysqli_connect("localhost","root","" ,"grievances",'3308');
$q="insert into stdquery (stdname ,seatno,phoneno,email,stream,query,status) values('".$name."','".$seatno."',".$pno.",'".$email."','".$stream."','".$query."','".$status."')";

mysqli_query($h,$q);
mysqli_close($h);


?>