<?php
session_start();
require 'classcat.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <script src="bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrapdemo/js/bootstrap.min.js" ></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
   <!-- Side Navbar -->
    <div class="row">
  
  <div class="col-4">
</div>
  <?php
include "adminnav1.php";
  ?>
  
    </div>
    
     <div class="page home-page">
      <!-- Counts Section -->
            <div class="col-12">
   <!-- navbar-->
      
      <!-- Counts Section -->
      <?php

$cnn=new cat_all;
$result=$cnn->select_all();
?>
 <section class="dashboard-counts section-padding">
        
             <table>
                  <tr><th>For Inserting Another Category</th></tr>
                  <form name="frm1" action="tabcat.php" method="post">
                  <tr><td>Category Name</td><td><input type="text" name="catn"></td></tr>
                  <tr><td></td><td><input type="submit" value="Insert" name="i1"></td></tr>
                  </form>
                  </table>
                  <h2 class="h5 display">Category Table</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Action</th>
                     </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row=$result->fetch_assoc())
                    {
                  echo "<tr>";
echo '<td>'.$row["cat_id"].'<td>'.$row["cat_name"].'</td>';
echo '<td>'.'<a href="catdelete1.php?id1='.$row["cat_id"].'"><span class="glyphicon glyphicon-trash"></span>Delete||</a>';
echo '<a href="catupdate1.php?id2='.$row["cat_id"].'"><span class="glyphicon glyphicon-pencil"></span>Update</a></td>';

                    }
                    ?>

                       </tbody>
                  </table>
                  
                  <?php
                  if(isset($_POST["i1"]))
                  {
                    $cat=$_POST["catn"];
                    //require 'classcat.php';
                    $cnn1=new cat_all;
                    $result=$cnn1->insert($cat);
                    if($result===true)
                  {
                header('location:tabcat.php');
                  }
                  else
                  {
                      echo $q;
                    echo "Not Successfully Inserted";
                  }

                  }
                  ?>
                 
          
                  </section></div></div>
                   </div>
           
         
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>