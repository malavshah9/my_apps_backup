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
$titleshow=$idshow="hidden ";
$id=$idErr=$title=$titleErr="";
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
    
     ?>
    <div class="container-fluid">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Jinal Shah</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div>
<div class="container">
 <div class="col-md-9">
<div class="page-header">
  <h1>Sign Up <small>demo</small></h1>
</div>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
<div class="form-group">
 
<label for="id">Name</label>
 
<input type="text" 
 
name="id"
 
class="form-control">
 
</div>
<div <?php echo $idshow; ?>
class="alert alert-danger">
 
<?php echo $idErr ?> 
 
</div>
&nbsp;
<div class="form-group">
 
<label for="name">Email</label>
 
<input type="text" 
 
name="title"
 
class="form-control" >
 
</div>
<div <?php echo $titleshow; ?>
 
class="alert alert-danger">
 
<?php echo $titleErr ?> 
 
</div>
<div class="form-group">
 
<label for="power">Status</label>
 
<select class="form-control"  name="status">
<option value="1" >done</option>
<option value="1" >pending</option>
</select>
 
</div>
<button type="submit" class="btn btn-default form-control"  >Add Task</button>
 
</form>
 </div>
 <div class="col-md-3">
  <ul class="list-group">
  <li class="list-group-item list-group-item-success">
    <span class="badge">14</span>
    Cras justo odio
  </li>
   <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
   <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
  <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
   <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
   <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
</ul>
 </div>
</div>

<div class="container-fluid"> <nav class="navbar navbar-default">
  
</nav></div>
</body>
</html>