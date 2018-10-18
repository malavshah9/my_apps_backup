<?php
class cat
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
    public function catfornewsfeed()
    {
        $cnn=cat::connect();
        $q="select * from  cat_tbl";
        $result=$cnn->query($q);
        return $result;
        cat::disconnect();
    }
        public function catone($id)
    {
        $cnn=cat::connect();
        $q="select q.*,u.*,c.* from  user_tbl u,question_tbl q,cat_tbl c where q.fk_user_id=u.user_pk_email_id and c.pk_cart_id=".$id." and c.pk_cart_id=q.fk_cat_id order by q.question_date desc";
        $result=$cnn->query($q);
        return $result;
        cat::disconnect();
    }
      public function showcount($catid)
    {
        $cnn=cat::connect();
        $q="select * from question_tbl where fk_cat_id=".$catid;
        $result=$cnn->query($q);
        return $result;
        cat::disconnect();
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