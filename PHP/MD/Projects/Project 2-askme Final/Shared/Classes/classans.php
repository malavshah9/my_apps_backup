<?php
class ans
{
    private static $conn=null;
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
     public function insert($ans_desc,$ans_img,$fkuid,$fkqid,$adate)
    {
        $cnn=ans::connect();
        $q="insert into  answer_tbl values ('".null."','". $ans_desc ."','". $ans_img ."','".$fkuid."','".$fkqid."','". $adate ."','". null ."')";
       // echo $q;        
        $result=$cnn->query($q);
        return $result;
        ans::disconnect();

    }/*
    public function newsfeedq()
    {
        $cnn=qa::connect();
        $q="select * from  user_tbl u,question_tbl q where q.fk_user_id=user_pk_email_id order by q.question_date desc";
        $result=$cnn->query($q);
        return $result;
        qa::disconnect();
    }
    public function selectq($id)
    {
        $cnn=qa::connect();
        $q="select q.*,u.* from question_tbl q,user_tbl u where q.fk_user_id=u.user_pk_email_id and q.question_pk_id=".$id;
        $result=$cnn->query($q);
        return $result;
        qa::disconnect();
    }
    
    public function selectans($id)
    {
        $cnn=qa::connect();
        $q="select u.*,a.* from answer_tbl a,user_tbl u where a.fk_question_id=".$id." and a.fk_user_id=u.user_pk_email_id";
        $result=$cnn->query($q);
        return $result;
        qa::disconnect();
    }
    /*
     public function selectbyid($pid)
    {
              $cnn=product_all::connect();
        $q="select * from product_tbl where pk_prod_id=".$pid;
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
    }
    /*public function update($pid,$pname,$pprice,$pmanu,$pcolor,$pimg1,$pimg2,$pimg3,$pwar,$pdesc,$pqua,)
    {
               $cnn=product_all::connect();
               $q="update product_tbl set prod_name='". $pname ."', prod_price='". $pprice  ."', prod_mfg='". $pmanu  ."', prod_color='". $pcolor  ."', prod_img1='". $pimg1  ."', prod_img2='". $pimg2  ."', prod_img3='". $pimg3  ."',prod_waranty='".$pwar ."',prod_soh='". $pqua."' where pk_prod_id='". $pid ."'";
         $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
}*//*
    public function insert($pname,$pprice,$pmanu,$pcolor,$pimg1,$pimg2,$pimg3,$pwar,$pdesc,$pqua,$fk_cat_id)
    {
        $cnn=product_all::connect();      
        $q="insert into product_tbl values ('".null."','". $pname ."','". $pprice ."','". $pmanu ."','". $pcolor ."','". $pimg1 ."','". $pimg2 ."','". $pimg3 ."','".$pwar."','".$pdesc."','".$pqua."','".$fk_cat_id."')";
        
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();

    }
     public function deletebyid($pid)
    {
              $cnn=product_all::connect();
              $q="select * from product_tbl where pk_prod_id=".$pid;
              $result=$cnn->query($q);
              $row=$result->fetch_assoc();
              unlink($row["img"]);
        $q="delete from product_tbl where pk_prod_id=".$pid;
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
    }
*/
}
?>