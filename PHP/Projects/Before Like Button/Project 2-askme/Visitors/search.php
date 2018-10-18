 <?php
   
    require '../Shared/Classes/classsearch.php';
    if(isset($_GET["btnsearch"]))
    {
      session_start();
      $searchstring=$_GET["search"];
      $conn=new search_all;
      $result=$conn->search($searchstring);
      if($result->num_rows>0)
      {
       $_SESSION["search"]=$searchstring;
       header('location: searched.php');
       
        

      }
      else
      {
        header('location:notsearchedsuccessfully.php');
      }

    }

    ?>

	
	
	
	
	
	
	
	
	
	
	
	
