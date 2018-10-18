<?php
class Connection
{
    private static $conn=null;
    private static function dataconnect()
    {
        self::$conn=mysqli_connect("localhost","root","","task_db");
        return self::$conn;
    }
    private static function datadisconnect($conn)
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function SelectAllData()
    {
        $conn=self::dataconnect();
        $q="select * from task";
        $result=$conn->query($q);
        self::datadisconnect($conn);
        return $result;
    }
    public function InsertAllData($id,$title,$status)
    {
        $conn=self::dataconnect();
        $q="insert into task values('".$id."','".$title."','".$status."')";
        $result=$conn->query($q);
        self::datadisconnect($conn);
        return $result;
    }
    public function SelectOneData($id)
    {
        $conn=self::dataconnect();
        $q="select * from task where Id='".$id."'";
        $result=$conn->query($q);
        self::datadisconnect($conn);
        return $result;
    }
    public function LogInQuery($email,$pass)
    {
        $conn=self::dataconnect();
        $q="select * from user_tbl where email_id='".$email."' password='".$pass."'";
        echo $q;
        $result=$conn->query($q);
        self::datadisconnect($conn);
        return $result;
    }
    
    public function UpdateData($id,$title,$status)
    {
        $conn=self::dataconnect();
        $q="update task set Title='".$title."',Status='".$status."' where Id='".$id."'";
        $result=$conn->query($q);
        self::datadisconnect($conn);
        return $result;
    }
    public function DeleteData($id)
    {
        $conn=self::dataconnect();
        $q="delete from task where Id='".$id."'";
        $result=$conn->query($q);
        self::datadisconnect($conn);
        return $result;
    }
    
}
?>