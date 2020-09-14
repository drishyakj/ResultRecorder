<html>
<head>
<title>Add Student</title>
</head>
<body background="bg3.jpg">
<a href="logout.php" >Log Out</a>
<div style="text-align: center;"><h1>ADD STUDENT</h1></div><br><br>
<br>
<br>
<form action="http://localhost/asd/addstudent.php" method="get">
<div style="text-align: center;"> <span style="">
</span><span style="font-weight: bold;">
Student Roll Number *&nbsp;&nbsp;&nbsp;&nbsp;
</span><input name="rollno" type="text"> <br>
<br><br>
Student Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text"> <br>
<br><br>
Student DOB(YYYY-MM-DD)<input name="dob" type="text"> <br>
<br><br>
Student Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="class" type="text"> <br>
<br><br>
Student Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="div" type="text"> <br>
<br><br>
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
	$name=$_GET["name"];
	$dob=$_GET["dob"];
	$class=$_GET["class"];
	$div=$_GET["div"];
	$query1="insert into student (rollno,name,dob,class,division) values ('$rn','$name','$dob','$class','$div')";
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