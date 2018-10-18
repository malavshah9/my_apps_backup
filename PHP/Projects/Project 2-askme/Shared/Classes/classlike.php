<?php
class likeq
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
 
    public function insert($qid,$uid)
    {
        $cnn=likeq::connect();
         $q="insert into  likequestion_tbl values ('". null ."','".$qid."','".$uid."')";
        $result=$cnn->query($q);
            return $result;
        likeq::disconnect();

    }
        public function delete($qid,$uid)
    {
        $cnn=likeq::connect();
         $q="delete  from  likequestion_tbl where fk_question_id="."'".$qid."'and fk_uid="."'".$uid."'";
        $result=$cnn->query($q);
            return $result;
        likeq::disconnect();

    }
       public function likecounter($qid)
    {
        $cnn=likeq::connect();
         $q="select * from likequestion_tbl where fk_question_id="."'".$qid."'";
        $result=$cnn->query($q);
        $cnt=$result->num_rows;
        if($cnt==0)
        {
            return 0;
        }
        else
        {
            return $cnt;
        }
         likeq::disconnect();
    }
      public function checklike($uid,$qid)
    {
        $cnn=likeq::connect();
         $q="select * from likequestion_tbl where fk_question_id="."'".$qid."' and fk_uid="."'".$uid."'";
        $result=$cnn->query($q);
        $cnt=$result->num_rows;
        if($cnt==1)
        {
            return "True";
        }
        else
        {
            return "False";
        }
         likeq::disconnect();
    }
}
?>