<html>
<head>
 
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
<link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });
        });
    </script>
</head>
<body>

<form action="newsdelall.php" method="post">
 <table class="table" id="dataTable">
 <thead>
 <th>Action</th>

<th>News Title</th> 
<th>News Desc</th> 
<th>Action</th> 
 </thead>
 <?php
require 'database.php';


$obj=new database();


$res=$obj->getAllNews();

$i=0;
while($row=$res->fetch_assoc())
{
	
	$i=$i+1;
   
	echo '<tr>';
	
	
	echo '<td><input type="checkbox" name="chk[]" value="'.$row["news_id"].'" /></td>';
	
	
	
	echo '<td>' . $row["news_title"] . '</td>';
	
	
	echo '<td>' . $row["news_desc"] . '</td>';
	
	
	echo '<td> <a href="delete.php?id='.$row["news_id"].'"><span class="glyphicon glyphicon-trash"></span></a> |
 <a href="update.php?id='.$row["news_id"].'"><span class="glyphicon glyphicon-pencil"></span></a> 
 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal'.$i.'">
  Launch demo modal
</button> 
  </td>';
	
	
	echo '</tr>';
    echo '
    <div class="modal fade" id="myModal'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        '. $row["news_title"].'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	
	';
}


?>
 </table>
 
 <input type="submit" value="Delete All" name="delall"/>
 </form>
 <?php

if(isset($_POST["btndemo"]))
{
	
	
	header('location:delete.php');
	
	
}


?>
 <form action="dbselectdemo.php" method="post">
     <input type="submit" name="btndemo" value="Click Me">
 </form>
</body>
</html>