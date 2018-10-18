<?php
session_start();
require 'classpro.php';
require 'classprojoincat.php';
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
      <?php
$cnn=new cat_all;
$result=$cnn->select_all();
?>
  <section class="dashboard-counts section-padding">
            <?php
$conn=new prod_cat_join;
$result=$conn->cat_name_by_id();
?>
                              <h2 class="h5 display">Product Table</h2>
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Color</th>
                        <th>Product Price</th>
                        
                        <th>Product Manufacturer</th>
                        
                        <th>Warranty</th>
                        
                        <th>Stock Onn Hand</th>
                        
                        <th>Product Image</th>
                        
                        <th>Category</th>  
                        
                        <th>Action</th>  
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row=$result->fetch_assoc())
                    {
                  echo "<tr>";
echo '<td>'.$row["p_id"].'<td>'.$row["p_name"].'<td>'.$row["p_color"].'</td>'.'<td>'.$row["p_price"].'</td>'.'<td>'.$row["manuf"].'</td>'.'<td>'.$row["warranty"].'</td>'.'<td>'.$row["soh"].'</td>';
echo '<td>'.'<img src="'.$row["img"].'" height="150px" width="150px"></img></td>'.'<td>'.$row["cat_name"].'</td>';
echo '<td>'.'<a href="delete1.php?id1='.$row["p_id"].'"><span class="glyphicon glyphicon-trash"></span>Delete</a>';
echo '<a href="update1.php?id2='.$row["p_id"].'"><span class="glyphicon glyphicon-pencil"></span>Update</a></td>';

                    }
                    ?>

                    </tbody>
                  </table>
          </section> </div></div>
           </div>
<!--afjkohdfhsdlkjhf-->
                  
                  
          
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