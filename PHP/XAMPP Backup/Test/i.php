<?php require_once "richtexteditor/include_rte.php" ?>   
<html>   
<body>   
        <form id="form1" action="i.php" method="POST">   
            <?php   
                // Create Editor instance and use Text property to load content into the RTE.  
                $rte=new RichTextEditor();   
                $rte->Text="Type here"; 
                // Set a unique ID to Editor   
                $rte->ID="Editor1";    
                $rte->MvcInit();   
                // Render Editor 
                echo $rte->GetString();  
            ?>   
            <input type="Submit" name="sub" value="Submit">
            <?php
    if(isset($_POST))
    {

          echo $rte->GetString();

    }
            ?>
        </form>   
</body>   
</html> 