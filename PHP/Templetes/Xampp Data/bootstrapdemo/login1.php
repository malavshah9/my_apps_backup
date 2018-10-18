<?php session_start();?>
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
<body  style="background-color:rgb(230,200,150)">
<?php 
echo $_COOKIE["uname"];
echo $_SESSION["uname"];
?>
<?php

$titlelshow=$idlshow=$titleshow=$idshow=$id1show=$id2show=$ashow="hidden ";
$idl=$idlErr=$titlel=$titlelErr=$id=$idErr=$title=$titleErr=$id1=$id1Err=$id2=$id2Err=$a=$aErr="";
if(isset($_POST["btlog"])){
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["idl"])) {
     $idlErr = "value required"; 
     $idlshow=" ";
  } else {
       
      if (!preg_match("/^[a-zA-Z]*$/",$_POST["idl"])) {
     $idlErr = "Only letters and white space allowed";
     $idlshow=" ";
    }
    else
    {
 $idl = $_POST["idl"];
  $idlErr=" ";
  $idlshow="hidden ";
    }
   
  }
       
    if (empty($_POST["titlel"])) {
        $titlelErr = "value required"; 
        $titlelshow=" ";
    }
    else
    {
       
        if (!filter_var($_POST["titlel"], FILTER_VALIDATE_EMAIL)) {
         $titlelErr = "Invalid email format";
          $titlelshow=" ";
        }
        else
        {
            $titlel = $_POST["titlel"];
  $titlelErr=" ";
  $titlelshow="hidden ";
        }
    }
    }
}
if(isset($_POST["btsign"])){
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST["id"])) {
     $idErr = "value required"; 
     $idshow=" ";
  } else {
       
      if (!preg_match("/^[a-zA-Z]*$/",$_POST["id"])) {
     $idErr = "Only letters and white space allowed";
     $idshow=" ";
    }
    else
    {
 $id = $_POST["id"];
  $idErr=" ";
  $idshow="hidden ";
    }
   }
    
if (empty($_POST["a"])) {
     $aErr = "value required"; 
     $ashow=" ";
  } else {
 $a = $_POST["a"];
  $aErr=" ";
  $ashow="hidden ";
    }
   
  

   if (empty($_POST["id1"])) {
     $id1Err = "value required"; 
     $id1show=" ";
  } else {
       
      if (!preg_match("/^[a-zA-Z]*$/",$_POST["id1"])) {
     $id1Err = "Only letters and white space allowed";
     $id1show=" ";
    }
    else
    {
 $id1 = $_POST["id1"];
  $id1Err=" ";
  $id1show="hidden ";
    }
   }

   if (empty($_POST["id2"])) {
     $id2Err = "value required"; 
     $id2show=" ";
  } else {
       
      if (!preg_match("/^[a-zA-Z]*$/",$_POST["id2"])) {
     $id2Err = "Only letters and white space allowed";
     $id2show=" ";
    }
    else
    {
 $id2 = $_POST["id2"];
  $id2Err=" ";
  $id2show="hidden ";
    }
   
  }

    if (empty($_POST["title"])) {
        $titleErr = "value required"; 
        $titleshow=" ";
    }
    else
    {
       
        if (!filter_var($_POST["title"], FILTER_VALIDATE_EMAIL)) {
         $titleErr = "Invalid email format";
          $titleshow=" ";
        }
        else
        {
            $title = $_POST["title"];
  $titleErr=" ";
  $titleshow="hidden ";
        }
    }
    }
}
        ?>


<div class="container" style="background-color:rgb(230,200,150)">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">KUMAR</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">sign in <span class="sr-only">(current)</span></a></li>
        </ul>     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">signup</a></li>
      </ul>
    </div>
</nav>
</div>
<div class="container"><center><h1>login and signup page</h1></center></div>

<div class="container" >
<div class="col-md-6 ">


<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div class="container col-md-11" >
<div class="col-md-12 input-group" style="background-color:rgb(230,200,255)"><center><h1><font color="white">sign up now</font></h1></center></div>
<div>
  <input type="text" name="id" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>

<div <?php echo $idshow; ?>
class="alert alert-danger">
<?php echo $idErr ?> 
</div>

<div>
  <input type="text" name="id1" class="form-control" placeholder="password" aria-describedby="basic-addon2">
</div>

<div <?php echo $id1show; ?>
class="alert alert-danger">
<?php echo $id1Err ?> 
</div>

<div >
  <input type="text" name="id2" class="form-control" placeholder="confirm password" aria-label="Amount (to the nearest dollar)">
</div>

<div <?php echo $id2show; ?>
class="alert alert-danger">
<?php echo $id2Err ?> 
</div>

<div >
    <input type="text" name="title" class="form-control" placeholder="Email address" id="basic-url" aria-describedby="basic-addon3">
</div>
  
<div <?php echo $titleshow; ?>
class="alert alert-danger">
<?php echo $titleErr ?> 
</div>

    <div class="input-group">
      <span class="input-group-addon" >
        <input type="radio" name="a" aria-label="...">male
      </span>
      <span class="input-group-addon">
        <input type="radio" name="a" aria-label="...">female
      </span>
    </div><!-- /input-group -->

<div <?php echo $ashow; ?>
class="alert alert-danger">
<?php echo $aErr ?> 
</div>

    <div  style="background-color:rgb(230,200,150)">
  
  <input type="submit" class="form-control" name="btsign" value="submit">

</div>
</div>
</form>
</div>

<div class="col-md-6" style="background-color:rgb(230,200,150)">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div class="container col-md-11">
<div class=" input-group col-md-12" style="background-color:rgb(230,200,255)"><center><h1><font color="white">sign in</font></h1></center></div>      <div>
  <input type="text"  name="titlel" class="form-control" placeholder="Username/Email address" aria-describedby="basic-addon1">
</div>

<div <?php echo $titlelshow; ?>
class="alert alert-danger">
<?php echo $titlelErr ?>  
</div>

<div >
  <input type="text" name="idl"  class="form-control" placeholder="password" aria-describedby="basic-addon2">
</div>
    
    <div <?php echo $idlshow; ?>
class="alert alert-danger">
<?php echo $idlErr ?> 
</div>

    <div >

  <input type="submit" class="form-control" name="btlog" value="submit">

</div>
</div>
</form>
</div>
</div>
<div class="container"><center><h1>or</h1></center></div>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-md-4">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">instagram</a>
    </div>
<div class="navbar-header col-md-4">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">facebook</a>
    </div><div class="navbar-header col-md-4">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">google+</a>
    </div>
</nav>
</div>

</body>
</html>