<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['psw'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'LOGIN');
$q="Select * from USER where USERNAME='$username' && PASSWORD='$password'";
$result=mysqli_query($con,$q);
$num=mysql_fetch_array($result);
if($num['uname']==$username && $num['psw']==$password)
{
	
	
	header('location:http://localhost/book.php');
}
else
{
	header('location:http://localhost/FORM.php');
}
?>

