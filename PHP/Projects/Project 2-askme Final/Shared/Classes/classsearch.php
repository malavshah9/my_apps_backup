<?php
class search_all
{   private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","askme");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
 /*    public function update($uid,$uname,$mob,$add,$img,$gen)
    {
               $cnn=search_all::connect();
               $q="update usr set usr_name='". $uname ."', mobile='". $mob  ."', address='". $add  ."', img='". $img  ."', gender='". $gen  ."' where usr_id='". $uid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        search_all::disconnect();
    }
	*/
    public function search($searchingstring)
    {
        $cnn=search_all::connect();
        $q=" SELECT * FROM user_tbl u,question_tbl q WHERE q.question_title like '%".$searchingstring."%' OR q.question_description like '%".$searchingstring."%' and q.fk_user_id=u.user_pk_email_id";      
        echo $q;
        $result=$cnn->query($q);
            return $result;
        search_all::disconnect();

    }
}
?>