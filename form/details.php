<html>
<body>
<h1>
 <?php
 
$con = mysqli_connect("localhost","root","0105@suv@m","form");

if($con)
{
	echo "<h1>Connection is succesful!!</h1>";
}
else
{
	die("Unable to connect");
}

 if (isset($_POST['add1']))
 {
$add=$_POST['add'];

mysqli_query($con,"INSERT INTO `register` (`Task Name`, `Date Created`) VALUES ('$add' , CURRENT_TIME());");
 }
if (isset($_POST['delete1']))
{
$delete=$_POST['delete'];

mysqli_query($con,"DELETE FROM `register` WHERE `register`.`Task Name` = '$delete'");
 }
 
if (isset($_POST['update1']))
{ $update=$_POST['update'];

mysqli_query($con,"UPDATE `register` SET `Task Name` = '$update' WHERE `register`.`Task Name` = 'Laundry'");
}
?>
</h1>
</body>
</html>
