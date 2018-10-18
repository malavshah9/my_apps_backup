<?php
class usr_all
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
        $cnn=usr_all::connect();
        $q="select * from usr";
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    }
     public function loginselect($id,$pass)
    {
        $cnn=usr_all::connect();
        $q='select * from usr where usr_id="'. $id .'"'.' and password="'. $pass .'"';
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    }
   
     public function selectbyid($uid)
    {
              $cnn=usr_all::connect();
        $q="select * from usr where usr_id="."'$uid'";
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    }
     public function update($uid,$uname,$mob,$add,$img,$gen)
    {
               $cnn=usr_all::connect();
               $q="update usr set usr_name='". $uname ."', mobile='". $mob  ."', address='". $add  ."', img='". $img  ."', gender='". $gen  ."' where usr_id='". $uid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        usr_all::disconnect();
    }
    public function insert($uid,$uname,$pass,$mob,$add,$img,$gen)
    {
        $cnn=usr_all::connect();      
        $q="insert into  usr ('".$uid."','". $uname ."','". $pass ."','". $mob ."','". $add ."','". $img ."','". $gen ."')";
        
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();

    }
     public function deletebyid($uid)
    {
              $cnn=usr_all::connect();
        $q="delete from usr where usr_id="."'$uid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        usr_all::disconnect();
    }

}
/*------------Here Starts "Join Classes"-----------*/
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