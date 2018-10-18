<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="jquery-3.2.1.min.js">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     </head>
<body>

<?php
$nameerrshow="hidden";
$name=$nameerr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["txtname"])){
        $nameerr="Value required";
        $nameerrshow=" ";
    }
    else
    {
        if(!preg_match("/^[a-z]*$/",$_POST["txtname"])){
        $nameerr="only char";
        $nameerrshow=" ";    
        }
        else
        {
            $name=$_POST["txtname"];
        $nameerrshow="hidden";
        $_SESSION["uname"]=$name;
        setcookie("uname",$name,86400,"/");        }
    }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div class="form_group">
<input class="form_control" type="text" name="txtname" placeholder="Enter Name">
</div>
<div <?php echo $nameerrshow; ?> class="alert alert-danger">
<?php echo $nameerr; ?>

</div>
<div class="form_group">
<input  type="submit" class="form_control" name="btnsub" value="Click Me">
</div>
</form>
</body>
</html>