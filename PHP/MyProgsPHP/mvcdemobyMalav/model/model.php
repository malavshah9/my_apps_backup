<?php
include 'DataConnecion.php';
    class model
    {
        
        public function sendData()
        {
            $conn=new Connection();
            $result=$conn->SelectAllData();
            return $result;
        }
        public function deleteData($id)
        {
            $conn=new Connection();
            $result=$conn->DeleteData($id);
            return $result;
        }

    }
?>