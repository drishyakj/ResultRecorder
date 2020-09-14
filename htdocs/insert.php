<html>
<head>
<title>Insert</title>
</head>
<body background="bg1.jpg">
<a href="logout.php" >Log Out</a>
<br>
<br>
<form action="http://localhost/asd/insert.php" method="get">
<div style="text-align: center;"> <span style="">
</span><span style="font-weight: bold;">Student Roll Number *
</span><input name="rollno" type="text"> <br>
<br>
<br>
</div>
<big><big><span style="font-weight: bold;">ENTER MARKS</span></big></big><br>
<br>
First Language&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
&nbsp; &nbsp; <span style=""></span> <input name="fl"
type="text"><br>
<br>
Second Language&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <span
style=""></span> <input name="sl" type="text"><br>
<br>
English&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; <span
style=""></span> <input name="eng" type="text"><br>
<br>
Hindi&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<span style=""></span> <input name="hin" type="text"><br>
<br>
Physics&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span
style=""></span> <input name="phy" type="text"><br>
<br>
chemistry&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <span
style=""></span> <input name="che" type="text"><br>
<br>
Biology&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
&nbsp; <span style=""></span> <input name="bio" type="text"><br>
<br>
Social Science &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <span style=""></span> <input
name="ss" type="text"><br>
<br>
Mathematics&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; <span style=""></span> <input
name="mat" type="text"><br>
<br>
<div style="text-align: center;"><br>
</div>
<div style="text-align: center;"><input name="submit" value="submit"
type="submit"></div>
</form>
<?php
if(isset($_GET["submit"]))
{
	
function grade($mark)
{
    switch ($mark)
    {
    case $mark >= "90":
       return "A+";
       break;
    case $mark >= "80":
       return "A";
       break;
	case $mark >= "70":
       return "B+";
       break;
	case $mark >= "60":
       return "B";
       break;
	case $mark >= "50":
       return "C+";
       break;
	case $mark >= "40":
       return "C";
       break;
	case $mark >= "30":
       return "D+";
       break;
	case $mark >= "20":
       return "D";
       break;
	case $mark < "20":
       return "E";
       break;
    }
}
$con=mysqli_connect("localhost","root","","result_recorder");
if(!$con)
{
	echo "Database connectivity error !!!";
}
else
{	
	
	$rn=$_GET["rollno"];
	$query1="select * from student where rollno='$rn'";
    $result1=mysqli_query($con,$query1);
	$row=mysqli_fetch_array($result1);
	$name=$row["name"];
    if(mysqli_num_rows($result1))
    {
    $fl=$_GET["fl"];
	$sl=$_GET["sl"];
	$eng=$_GET["eng"];
	$hin=$_GET["hin"];
	$phy=$_GET["phy"];
	$che=$_GET["che"];
	$bio=$_GET["bio"];
	$mat=$_GET["mat"];
	$ss=$_GET["ss"];
	$gfl=grade($fl);
	$gsl=grade($sl);
	$geng=grade($eng);
	$ghin=grade($hin);
	$gphy=grade($phy);
	$gche=grade($che);
	$gbio=grade($bio);
	$gmat=grade($mat);
	$gss=grade($ss);
	$query3="update student set first_language='$fl',gradefl='$gfl',second_language='$sl',gradesl='$gsl',english='$eng',gradeeng='$geng',hindi='$hin',gradehin='$ghin',physics='$phy',gradephy='$gphy',chemistry='$che',gradeche='$gche',biology='$bio',gradebio='$gbio',social_science='$ss',gradess='$gss',mathematics='$mat',grademat='$gmat',total_mark='$fl'+'$sl'+'$eng'+'$hin'+'$phy'+'$che'+'$bio'+'$ss'+'$mat' where rollno='$rn'";
	$result3=mysqli_query($con ,$query3);
	echo "<br>Entered Marks are ";
	echo "<br><br> Roll Number". str_repeat("&nbsp;",10 )."Student Name".str_repeat("&nbsp;",10)."First Language".str_repeat("&nbsp;",10)."Second Language".str_repeat("&nbsp;",10)."English".str_repeat("&nbsp;",10)."Hindi".str_repeat("&nbsp;",10)."Physics".str_repeat("&nbsp;",10)."Chemistry".str_repeat("&nbsp;",10)."Biology".str_repeat("&nbsp;",10)."Social Science".str_repeat("&nbsp;",10)."Mathematics".str_repeat("&nbsp;",10)."<br><br><br>";
	echo  "$rn".str_repeat("&nbsp;",30 )."$name".str_repeat("&nbsp;",30 )."$fl".str_repeat("&nbsp;",30 )."$sl".str_repeat("&nbsp;",30 )."$eng".str_repeat("&nbsp;",15 )."$hin".str_repeat("&nbsp;",18 )."$phy".str_repeat("&nbsp;",20 )."$che".str_repeat("&nbsp;",20 )."$bio".str_repeat("&nbsp;",23 )."$ss".str_repeat("&nbsp;",30 )."$mat";
	echo "<br><br>Re-enter all the marks if there is any mistake <br><br>";
	echo "<br><br><br>";
    }
    else
		echo "<br> Invalid Roll No.<br>";
}
}	
?>
</body>
</html>


