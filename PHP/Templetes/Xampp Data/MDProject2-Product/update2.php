<html>
<head>
 <script src="bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrapdemo/js/bootstrap.min.js" ></script>

</head>
<body>
<?php
$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);


$rollno=$_GET["id"];

$qu="select * from student_tbl where roll_no=".$rollno;

$result=$conn->query($qu);
$row=$result->fetch_assoc();
$rollno=$row["roll_no"];
$name=$row["name"];
$mobileno=$row["mobile_no"];
$fees=$row["fees"];
$year=$row["year"];
$gender=$row["gender"];


?>

<form action="update3.php" method="post">
<table class="table">
<tr><td>Roll No</td><td><input type="text" name="rollno" value="<?php echo $rollno; ?>"></td></tr>
<tr><td>Name</td><td><input type="text" name="name"  value="<?php echo $name; ?>"></td></tr>
<tr><td>Mobile No</td><td><input type="text" name="mobileno" value="<?php echo $mobileno; ?>"></td></tr>
<tr><td>Fees</td><td><input type="number" name="fees" value="<?php echo $fees; ?>"></td></tr>

<tr><td>Gender</td><td>
<?php
if($gender=="Male")
{
echo '<input type="radio" name="rd1" value="Male" checked>Male';
echo '<input type="radio" name="rd1" value="Female">Female';
}
else
{
echo '<input type="radio" name="rd1" value="Male" >Male';
echo '<input type="radio" name="rd1" value="Female" checked>Female';
}
?>
</td></tr>

<tr><td>Year</td><td><select name="sl1">
<?php
if($year==2011)
{        
 echo   '<option value="2011" selected>2011</option>';
 echo       '<option value="2012">2012</option>';
echo      '<option value="2013">2013</option>';
 echo       '<option value="2014">2014</option>';
   echo     '<option value="2015">2015</option>';
    echo    '<option value="2016">2016</option>';
     echo   '<option value="2017">2017</option></select>';
        

}
if($year==2012)
{        
 echo   '<option value="2011">2011</option>';
 echo       '<option value="2012" selected>2012</option>';
echo      '<option value="2013">2013</option>';
 echo       '<option value="2014">2014</option>';
   echo     '<option value="2015">2015</option>';
    echo    '<option value="2016">2016</option>';
     echo   '<option value="2017">2017</option></select>';
        

}if($year==2013)
{        
 echo   '<option value="2011">2011</option>';
 echo       '<option value="2012">2012</option>';
echo      '<option value="2013" selected>2013</option>';
 echo       '<option value="2014">2014</option>';
   echo     '<option value="2015">2015</option>';
    echo    '<option value="2016">2016</option>';
     echo   '<option value="2017">2017</option></select>';
        

}if($year==2014)
{        
 echo   '<option value="2011" >2011</option>';
 echo       '<option value="2012">2012</option>';
echo      '<option value="2013">2013</option>';
 echo       '<option value="2014" selected>2014</option>';
   echo     '<option value="2015">2015</option>';
    echo    '<option value="2016">2016</option>';
     echo   '<option value="2017">2017</option></select>';
        

}if($year==2015)
{        
 echo   '<option value="2011">2011</option>';
 echo       '<option value="2012">2012</option>';
echo      '<option value="2013">2013</option>';
 echo       '<option value="2014">2014</option>';
   echo     '<option value="2015" selected>2015</option>';
    echo    '<option value="2016">2016</option>';
     echo   '<option value="2017">2017</option></select>';
        

}if($year==2016)
{        
 echo   '<option value="2011">2011</option>';
 echo       '<option value="2012">2012</option>';
echo      '<option value="2013">2013</option>';
 echo       '<option value="2014">2014</option>';
   echo     '<option value="2015">2015</option>';
    echo    '<option value="2016" selected>2016</option>';
     echo   '<option value="2017">2017</option></select>';
        

}if($year==2017)
{        
 echo   '<option value="2011" >2011</option>';
 echo       '<option value="2012">2012</option>';
echo      '<option value="2013">2013</option>';
 echo       '<option value="2014">2014</option>';
   echo     '<option value="2015">2015</option>';
    echo    '<option value="2016">2016</option>';
     echo   '<option value="2017" selected>2017</option></select>';
        

}
?>

</td></tr>
<tr><td></td><td><input type="submit" name="in" value="Update"></td></tr>
</table>
</form>


</body>
</html>