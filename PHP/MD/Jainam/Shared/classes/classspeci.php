<?php
class spec_all
{
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","medsky");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=spec_all::connect();
        $q="select * from doc_specialist";
        $result=$cnn->query($q);
        return $result;
        spec_all::disconnect();
    }
    public function selectbytitle($na)
    {
        $cnn=spec_all::connect();
        $q='select pk_spec_id from doc_specialist where spec_name="'. $na .'"';
        $result=$cnn->query($q);
        return $result;
        spec_all::disconnect();
    }
    public function insert($na)
    {
        $cnn=spec_all::connect();
        $q="insert into doc_specialist values('". $na ."')";
        $result=$cnn->query($q);
        return $result;
        spec_all::disconnect();
    }
}
?>