<?php
class prod_cat_join
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
    public static function cat_name_by_id()
    {
        $cnn=prod_cat_join::connect();
        $q="select p.*,c.* from product p,cat_tbl c where p.fk_cat_id=c.cat_id";
        $result=$cnn->query($q);
        return $result;
        prod_cat_join::disconnect();
    }
}
?>