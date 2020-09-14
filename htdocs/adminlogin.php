<html>
<head>
<title>Admin Login</title>
</head>
<body background="bg1.jpg">
<a href="logout.php" >Log Out</a>
<?php
	
if(isset($_GET["login"]))
{	
    $con=mysqli_connect("localhost","root","","result_recorder");
    if(!$con)
    {
    echo "<br>connection to database failed </br>";
    }
    else
    {
        $un=$_GET["id"];
        $pw=$_GET["password"];
        $query1="select * from admin where admin_id='$un' and password='$pw'";
        $result1=mysqli_query($con,$query1);
     
		$row=mysqli_fetch_array($result1);
        if(mysqli_num_rows($result1))
        {
       
            echo "<br>Logged in as Administrator";
			echo "<br><br>";
			echo '<div style="text-align: center;">';
			echo '<h2><a href="addstudent.php">Add  Student details</a></h2>';
			echo "<br><br>";
			echo '<h2><a href="removestudent.php"><br>Remove a student</a></h2>';
			echo "<br><br>";
			echo '<h2><a href="addteacher.php">Add Teacher details</a></h2>';
			echo "<br><br>";
			echo '<h2><a href="removeteacher.php"><br>Remove a Teacher</a></h2>';
			echo "<br><br>";
			echo '<h2><a href="viewdb.php"><br>View Teacher or Student Details</a></h2>';
			echo '</div>';
       }
        else
		{	
			echo "<br><br><br><br>";
            echo "<br> Invalid pin or Account Number <br>";		
		}
			
    }
}
?>


</body>
</html

