<html>
<head>
<title>Division Analysis</title>
</head>
<body background="bg1.jpg">
<a href="logout.php" >Log Out</a>
<div style="text-align: center;">
<?php
	
	
    $con=mysqli_connect("localhost","root","","result_recorder");
    if(!$con)
    {
    echo "<br>connection to database failed </br>";
    }
    else
    {
        $class=$_GET["class"];
        $div=$_GET["division"];
        $query1="select rollno,name from student where class='$class' and division='$div' order by total_mark desc";
        $result1=mysqli_query($con,$query1);
		
		if ($result1->num_rows > 0) 
		{
		// output data of each row
		echo "<h1>Ranking</h1>";
		echo "<br><br><br>";
		echo "Rank".str_repeat("&nbsp;",25)."Roll No.".str_repeat("&nbsp;",25)."Name";
		$r=0;
		while($row = $result1->fetch_assoc()) 
		{	$r=$r+1;
			echo "<br><br><br>";
			echo "$r".str_repeat("&nbsp;",35).$row["rollno"].str_repeat("&nbsp;",35).$row["name"];
			
		}
		} 
		else 
		{
			echo "0 results";
		}
	
		mysqli_close($con);
	}
		$con=mysqli_connect("localhost","root","","result_recorder");
		if(!$con)
		{
			echo "<br>connection to database failed </br>";
		}
		else
		{
			$class=$_GET["class"];
			$div=$_GET["division"];
			$query2="select rollno,name from student where class='$class' and division='$div' and gradefl='A+' and gradesl='A+' and gradeeng='A+' and gradehin='A+' and gradephy='A+' and gradeche='A+' and gradebio='A+' and gradess='A+' and grademat='A+'";			
			$result2=mysqli_query($con,$query2);
			echo "<br><br><br>";echo "<br><br><br>";
			echo "<h1>Full A+ Scholars</h1>";
			if ($result2->num_rows > 0) 
			{
			// output data of each row
			
				echo "<br><br><br>";
				echo "Roll No.".str_repeat("&nbsp;",25)."Name";
			
				while($row = $result2->fetch_assoc()) 
				{	echo "<br><br><br>";
					echo $row["rollno"].str_repeat("&nbsp;",35).$row["name"];
				}
			} 
			else 
			{	echo "<br><br><br>";echo "<br><br><br>";
				echo "0 Full A+ Scholars";
			}

		}
?>

</div>
</body>
</html

