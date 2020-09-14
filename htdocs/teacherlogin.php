<html>
<head>
<title>Teacher Login</title>
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
        $query1="select * from teacher where id='$un' and password='$pw'";
        $result1=mysqli_query($con,$query1);
     
		$row=mysqli_fetch_array($result1);
        if(mysqli_num_rows($result1))
        {
            $name=$row["name"];
            echo "<br>Logged in as $name<br>";
			echo "<br><br><br><br>";
			echo '<div style="text-align: center;">';
			echo '<h2><a href="insert.php">Enter Mark</a></h2>';
			echo "<br><br><br><br>";
			echo '<h2><a href="select_analysis.html"><br>View Analysis<br></a></h2>';
			echo "<br><br><br><br>";
			echo '<h2><a href="studentdisplay.php"><br>View Result<br></a></h2>';
			echo '</div>';
       }
        else
		{	
			echo "<br><br><br><br>";
            echo "<br> Invalid Username or password <br>";
			
		}
			
    }
}

 
?>


</body>
</html

