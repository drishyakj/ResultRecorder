<html>
<head>
<title>RESULT</title>
</head>
<body background="bg1.jpg">
<a href="logout.php" >Log Out</a>
<div style="text-align: center;"><h1>DISPLAY DATA</h1></div><br><br>
<br>
<div style="text-align: center;">
<form action="http://localhost/asd/viewdb.php" method="get">
<br><br><br><br>
<input name="student" value="Get_Student_Details" type="submit">
  <br>
  </form>

 <form action="http://localhost/asd/viewdb.php" method="get">
<br><br><br><br>
<input name="teacher" value="Get_Teacher_Details" type="submit">
  <br>
  </form>
 </div>
 <?php
	
if(isset($_GET["student"]))
{	
    $con=mysqli_connect("localhost","root","","result_recorder");
    if(!$con)
    {
    echo "<br>connection to database failed </br>";
    }
    else
    {
        $query1="select rollno,name,dob,class,division from student";
        $result1=mysqli_query($con,$query1);
        if(mysqli_num_rows($result1))
        {
				echo "Roll No".str_repeat("&nbsp;",10)."Name".str_repeat("&nbsp;",10)."DOB".str_repeat("&nbsp;",10)."Class".str_repeat("&nbsp;",10)."Division";
				while($row = $result1->fetch_assoc()) 
				{	
					echo "<br><br><br>";
					echo $row["rollno"].str_repeat("&nbsp;",10).$row["name"].str_repeat("&nbsp;",20).$row["dob"].str_repeat("&nbsp;",10).$row["class"].str_repeat("&nbsp;",10).$row["division"];	
				}
			} 
		else 
		{	
			echo "<br><br><br>";echo "<br><br><br>";
			echo "Something Went Wrong!!!!!!";
		}
	}
			
			
   
}

if(isset($_GET["teacher"]))
{	
    $con=mysqli_connect("localhost","root","","result_recorder");
    if(!$con)
    {
    echo "<br>connection to database failed </br>";
    }
    else
    {
        $query1="select * from teacher";
        $result1=mysqli_query($con,$query1);
        if(mysqli_num_rows($result1))
        {
				echo "id".str_repeat("&nbsp;",10)."Name".str_repeat("&nbsp;",10)."Password";
				while($row = $result1->fetch_assoc()) 
				{	
					echo "<br><br><br>";
					echo $row["id"].str_repeat("&nbsp;",10).$row["name"].str_repeat("&nbsp;",20).$row["password"];
				} 
		}
		else 
		{	
			echo "<br><br><br>";echo "<br><br><br>";
			echo "Something Went Wrong!!!!!!";
		}
	}
			
			
   
}
?>

