<?php
session_start();
?>
<html>
<body>
<h2>MOVIE TICKET BOOKING PORTAL</h2>
<a href="logout.php" align="right" id="x">Logout</a>
</body>
<style>
#x
{
	margin-left:1095px;

}
#t
{
	border-style:solid;
	border-color:Black;
	width:500px;
}
#t tr{
	background-color:lightblue;
}

</style>
<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<table id="t" align="center">
<tr>
<th>BOOK ID</th>
<th>TITLE</th>
<th>PRICE</th>
<th>AUTHOR</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['book_id'];?></td>
<td><?php echo $row['title'];?></td>

<td><?php echo $row['price'];?></td>

<td><?php echo $row['author'];?></td>
</tr>
<?php
}
?>
</table>


</html>

