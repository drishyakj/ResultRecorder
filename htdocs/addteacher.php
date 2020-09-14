<html>
<head>
<title>Add Teacher</title>
</head>
<body background="bg3.jpg">
<a href="logout.php" >Log Out</a>
<div style="text-align: center;"><h1>ADD TEACHER</h1></div><br><br>
<br>
<br>
<br>
<form action="http://localhost/asd/addteacher.php" method="get">
<div style="text-align: center;"> <span style="">
</span><span style="font-weight: bold;">
Teacher ID
</span><input name="id" type="text"> <br>
<br><br><br>
Teacher Name<input name="name" type="text"> <br>
<br><br><br>
Teacher Password<input name="password" type="text"> <br>
<br><br><br>
<input name="submit" value="submit" type="submit">
</form>
<?php
if(isset($_GET["submit"]))
{
	
$con=mysqli_connect("localhost","root","","result_recorder");
if(!$con)
{
	echo "Database connectivity error !!!";
}
else
{	
	
	$id=$_GET["id"];
	$name=$_GET["name"];
	$password=$_GET["password"];
	$query1="insert into teacher values ('$id','$name','$password')";
	if ($con->query($query1) === TRUE) {
		echo "<br><br>New record created successfully";
	} 
	else {
		
    echo "<br><br>ERROR";
	}
	
}
}  
?>
</body>
</html>