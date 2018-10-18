
    <?php
    session_start();
    $_SESSION["id"]=null;
    session_destroy();
	if(empty($_SESSION["id"]))
	{
        
    header('location:../Visitors/index.php');
	}
    ?>
    