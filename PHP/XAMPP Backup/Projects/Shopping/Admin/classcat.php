<?php
class cat_all
{
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","shopping_cart");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=cat_all::connect();
        $q="select * from cat_tbl";
        $result=$cnn->query($q);
        return $result;
        cat_all::disconnect();
    }
     public function selectbyid($cid)
    {
              $cnn=cat_all::connect();
        $q="select * from cat_tbl where cat_id=".$cid;
        $result=$cnn->query($q);
        return $result;
        cat_all::disconnect();
    }
    public function update($i,$cname)
    {
         $cnn=cat_all::connect();
        $q="update cat_tbl set cat_name='". $cname ."' where cat_id='". $i ."'";
         $result=$cnn->query($q);
        return $result;
        cat_all::disconnect();
    }
    public function insert($cname)
    {
        $cnn=cat_all::connect();      
        $q="insert into cat_tbl values ('".null."','". $cname ."')";
        echo $q;
        $result=$cnn->query($q);
        return $result;
        cat_all::disconnect();

    }
     public function deletebyid($cid)
    {
              $cnn=cat_all::connect();
        $q="delete from cat_tbl where cat_id="."'$cid'";
        $result=$cnn->query($q);
        return $result;
        cat_all::disconnect();
    }

}
?>