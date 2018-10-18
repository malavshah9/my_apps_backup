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
<body bgcolor="Black">
   
<?php
if(isset($_POST["display"]))
{
    header('location:display.php');
}
else if (isset($_POST["insert"]))
{
header('location:insert.php');
}
else if(isset($_POST["update"]))
{
header('location:update1.php');
}
else if(isset($_POST["delete"]))
{
   header('location:delete1.php'); 
}
else
{
    
}
?>
<table class="table">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

<tr><td align="center"><input type="submit" name="display" value="Display"></td></tr>
<tr><td align="center"><input type="submit" name="insert" value="Insert"></td></tr>

<tr><td align="center"><input type="submit" name="update" value="Update"></td></tr>
<tr><td align="center"><input type="submit" name="delete" value="Delete"></td></tr>

</form>
</table>
</body>
</html>