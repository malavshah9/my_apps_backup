<?php
class product_all
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
        $cnn=product_all::connect();
        $q="select * from product";
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
    }
     public function selectbyid($pid)
    {
              $cnn=product_all::connect();
        $q="select * from product where p_id=".$pid;
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
    }
    public function update($pid,$pname,$pcolor,$pprice,$manu,$war,$soh,$img,$qua)
    {
               $cnn=product_all::connect();
               $q="update product set p_name='". $pname ."', p_color='". $pcolor  ."', p_price='". $pprice  ."', manuf='". $manu  ."', warranty='". $war  ."', soh='". $qua  ."', img='". $img  ."' where p_id='". $pid ."'";
         $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
    }
    public function insert($pname,$pcolor,$pprice,$manu,$war,$qua,$img,$fk_cat_id,$pdesc)
    {
        $cnn=product_all::connect();      
        $q="insert into product values ('".null."','". $pname ."','". $pcolor ."','". $pprice ."','". $manu ."','". $war ."','". $qua ."','". $img ."','".$fk_cat_id."','".$pdesc."')";
        
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();

    }
     public function deletebyid($pid)
    {
              $cnn=product_all::connect();
            $q="select * from product where p_id=".$pid;
            $result=$cnn->query($q);
            if($result->num_rows==1)
            {
                $row=$result->fetch_assoc();
                if($row["img"]==null)
                {
                }
                else
                {
                    unlink($row["img"]);
                }

            }
        $q="delete from product where p_id=".$pid;
        $result=$cnn->query($q);
        return $result;
        product_all::disconnect();
    }

}
?>