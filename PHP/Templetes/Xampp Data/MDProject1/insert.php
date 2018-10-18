
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
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<table class="table">
<tr><td>Roll No</td><td><input type="text" name="rollno"></td></tr>
<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td>Mobile No</td><td><input type="text" name="mobileno"></td></tr>
<tr><td>Fees</td><td><input type="number" name="fees"></td></tr>

<tr><td>Gender</td><td><input type="radio" name="rd1" value="Male">Male<input type="radio" name="rd1" value="Female">Female</td></tr>

<tr><td>Year</td><td><select name="sl1"><option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        
        <option value="2017">2017</option></select>
        



</td></tr>
<tr><td></td><td><input type="submit" name="in" value="Insert"></td></tr>
</table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);
$rollno=$_POST["rollno"];
$name=$_POST["name"];
$mobileno=$_POST["mobileno"];
$fees=$_POST["fees"];
$year=$_POST["sl1"];
$gender=$_POST["rd1"];


$q="insert into student_tbl values (". $rollno .",'". $name ."','". $mobileno ."','". $fees ."','". $gender ."','". $year ."')";



if($result=$conn->query($q)===true)
{
    echo "Succesfull Inserted";
    }
else
{
    echo $q;
    echo "Not Successfully Inserted";
}


}
?>

</body>
</html>         