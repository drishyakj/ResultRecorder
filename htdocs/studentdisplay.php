<html>
<head>
<title>RESULT</title>
</head>
<body background="bg1.jpg">
<a href="logout.php" >Log Out</a>
<div style="text-align: center;">
<form action="http://localhost/asd/studentdisplay.php" method="get">
<br><br><br>
Enter class <span style=""></span><input name="class" type="text"> <br><br><br>
Enter division<span style=""></span><input name="div" type="text"> <br><br><br><br>
<input name="login" value="Login" type="submit">
  <br>
  </form>
 </div>

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
        $class=$_GET["class"];
        $div=$_GET["div"];
        $query1="select * from student where class='$class' and division='$div'";
        $result1=mysqli_query($con,$query1);
     
		$row=mysqli_fetch_array($result1);
        if(mysqli_num_rows($result1))
        {

			echo "<br><br><br><br>";
			$query2="select rollno,name,first_language,gradefl,second_language,gradesl,English,gradeeng,hindi,gradehin,physics,gradephy,chemistry,gradeche,biology,gradebio,social_science,gradess,mathematics,grademat from student where class='$class' and division='$div'";
			$result2=mysqli_query($con,$query2);
		
			if ($result2->num_rows > 0) 
			{
				// output data of each row
				echo "<h1>Result</h1>";
				echo "<br><br><br>";echo "<br><br><br>";
				echo "Roll No".str_repeat("&nbsp;",10)."Name".str_repeat("&nbsp;",10)."first_language".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."second_language".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."English".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."hindi".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."physics".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."chemistry".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."biology".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."social_science".str_repeat("&nbsp;",10)."Grade".str_repeat("&nbsp;",10)."mathematics".str_repeat("&nbsp;",10)."Grade";

				while($row = $result2->fetch_assoc()) 
				{	
					echo "<br><br><br>";
					echo $row["rollno"].str_repeat("&nbsp;",10).$row["name"].str_repeat("&nbsp;",20).$row["first_language"].str_repeat("&nbsp;",23).$row["gradefl"].str_repeat("&nbsp;",20).$row["second_language"].str_repeat("&nbsp;",28).$row["gradesl"].str_repeat("&nbsp;",20).$row["English"].str_repeat("&nbsp;",18).$row["gradeeng"].str_repeat("&nbsp;",12).$row["hindi"].str_repeat("&nbsp;",18).$row["gradehin"].str_repeat("&nbsp;",13).$row["physics"].str_repeat("&nbsp;",17).$row["gradephy"].str_repeat("&nbsp;",18).$row["chemistry"].str_repeat("&nbsp;",17).$row["gradeche"].str_repeat("&nbsp;",17).$row["biology"].str_repeat("&nbsp;",17).$row["gradebio"].str_repeat("&nbsp;",20).$row["social_science"].str_repeat("&nbsp;",27).$row["gradess"].str_repeat("&nbsp;",15).$row["mathematics"].str_repeat("&nbsp;",25).$row["grademat"];

				}
			} 
			else 
			{	
				echo "<br><br><br>";echo "<br><br><br>";
				echo "Something Went Wrong!!!!!!";
			}
       }
        else
		{	
				echo "<br><br><br><br>";
            echo "<br> Invalid Class or Division <br>";
		}
			
			
    }
}
?>


</body>
</html

