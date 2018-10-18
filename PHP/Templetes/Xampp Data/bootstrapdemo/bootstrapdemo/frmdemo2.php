<!DOCTYPE html>
<html>
    <head>
   <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>

    </head>
    <body  >
<?php
$nameerrshow="hidden ";
$nameErr=$name=" ";

if($_SERVER["REQUEST_METHOD"]=="POST"){


        if(empty($_POST["txtname"])){

            $nameErr="name is required";
            $nameerrshow=" ";
        }
        else
        {
            if(!preg_match("/^[0-9]*$/",$_POST["txtname"])){
            
            $nameErr="Only digits";
            $nameerrshow=" ";

            }
            else
            {
            $name=$_POST["txtname"];
             $nameErr=" ";
            $nameerrshow="hidden ";
            }
        }
}
 ?>
<div class="container">

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" >
    

<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="txtname" placeholder="Enter Name ">
</div>
<div <?php echo $nameerrshow; ?> class="alert alert-danger" >
<?php echo $nameErr; ?>
</div>

<div class="form-group">
<input class="form-control" type="submit" name="btnadd" value="Add">
</div>

<div class="form-group">

<h1>Input</h1>
<?php echo $name;  ?>
</div>
</form>
</div>
    </body>
    </html>