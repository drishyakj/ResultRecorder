<html>
<head>
<title>Remove Student Details</title>
</head>
<body background="bg1.jpg">
<a href="logout.php" >Log Out</a>
<div style="text-align: center;"><h1>REMOVE STUDENT</h1></div><br><br>
<br>
<br>
<br>
<br>
<form action="http://localhost/asd/removestudent.php" method="get">
<div style="text-align: center;"> <span style="">
</span><span style="font-weight: bold;">
Student Roll Number *
</span><input name="rollno" type="text"> <br>
<br>
<br>
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
	
	$rn=$_GET["rollno"];
	$query="delete from student where rollno='$rn'";
	if ($con->query($query) == TRUE) 
	{
		
    echo "<br>Record deleted successfully";
	}   
	else {
		echo "<br>Error deleting record: ";
		}
}  
} 
?>
</body>
</html>