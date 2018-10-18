<?php
    include 'model/model.php';
    class controller
    {
        public function invoke()
        {
            if(!isset($_GET["id"]))
            {
                $mod=new model();
                $result=$mod->sendData();
               include 'view/view1.php';
            }
            else
            {
                $id=$_GET["id"];
                $mod=new model();
                $result=$mod->deleteData($id);
                if($result==true)
                {
                   header('location:index.php');
                }
                else
                {
                    include 'view/view2.php';
                }
            }
        }
    }
?>