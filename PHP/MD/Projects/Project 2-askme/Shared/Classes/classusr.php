<?php
class usr_all
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
	public function selectimg($uid)
	{
		 $cnn=usr_all::connect();
        $q='select * from user_tbl where user_pk_email_id="'. $uid .'"';
//		echo $q;
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    
		
	}
	public function selectuser($pass)
	{
		 $cnn=usr_all::connect();
        $q="select * from user_tbl where user_password=".$pass;
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    
		
	}
    public function select_all()
    {
        $cnn=usr_all::connect();
        $q="select * from user_tbl";
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    }
     public function loginselect($id,$pass)
    {
        $cnn=usr_all::connect();
        $q='select * from user_tbl where user_pk_email_id="'. $id .'"'.' and user_password="'. $pass .'"';
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    }    
    public function isverified($id)
    {
        $cnn=usr_all::connect();
        $q='select * from user_tbl where user_pk_email_id="'. $id .'"';
        $result=$cnn->query($q);
        $row=$result->fetch_assoc();
        //$veri=$row["user_verify"];
        $v="Yes";
        if($row["user_verify"]==$v)
        {
            return true;
        }
        else
        {
        return false;
        }
        usr_all::disconnect();
    }
      public function verificationupdate($id,$t)
    {
       $cnn=usr_all::connect();
       $p="Yes";
        $q="update user_tbl set user_verify='". $p ."' where user_pk_email_id='". $id ."' and user_token='".$t."'";
         $result=$cnn->query($q);
       return $result;
        usr_all::disconnect();  
    }
    public function getpassword($enteredid)
    {
        $cnn=usr_all::connect();
         $q='select password from user_tbl where user_pk_email_id="'. $enteredid .'"';
        $result=$cnn->query($q);
        $row=$result->fetch_assoc();
        $pass=$row["user_password"];
        return $pass;
        usr_all::disconnect();
       }
       public function verify($id,$name,$token)
       {
						error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
			require_once "Shared/phpmailer/class.phpmailer.php";

			$rmail=$id;;
			$link='<h3>Respected Sir,'.$name.'</h3><a href="http://localhost/md/Projects/Project%202-askme/verified.php?token='.$token.'&id='.$rmail.'&name='.$name.'"><br><p><h1>Please Click here to Verify your account!!!</h1></p></a>';
			$message=$link;
			// creating the phpmailer object
			$mail = new PHPMailer(true);

			// telling the class to use SMTP
			$mail->IsSMTP();

			// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
			$mail->SMTPDebug = 0;

			// enable SMTP authentication
			$mail->SMTPAuth = true;

			// sets the prefix to the server
			$mail->SMTPSecure = 'ssl';

			// sets GMAIL as the SMTP server
			$mail->Host = 'smtp.gmail.com';

			// set the SMTP port for the GMAIL server
			$mail->Port = 465;

			// your gmail address
			$mail->Username = 'shoppercompanyservice@gmail.com';

			// your password must be enclosed in single quotes
			$mail->Password = 'common@1234';

			// add a subject line
			$mail->Subject = 'Verification Mail';

			// Sender email address and name
			$mail->SetFrom('info@askme.com', 'DO NOT REPLY-THIS IS VERIFICATION MAIL');

			$email1=$rmail;
			// reciever address, person you want to send
			$mail->AddAddress($email1);

			// if your send to multiple person add this line again
			//$mail->AddAddress('tosend@domain.com');

			// if you want to send a carbon copy
			//$mail->AddCC('tosend@domain.com');


			// if you want to send a blind carbon copy
			//$mail->AddBCC('tosend@domain.com');

			// add message body
			$mail->MsgHTML($message);


			// add attachment if any
			//$mail->AddAttachment('time.png');

			try {
			// send mail

			//don't forget to enable openssl true from php_extensions
			$mail->Send();
		//	$msg = "We had send you Verification Email so please first verify it ...";


			} catch (phpmailerException $e) {
			$msg = $e->getMessage();
			} catch (Exception $e) {
			$msg = $e->getMessage();
			}
			//echo $msg;


       }
   
     public function selectbyid($uid)
    {
              $cnn=usr_all::connect();
    $q='select * from user_tbl where user_pk_email_id='.'"'.$uid.'"';
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();
    }
     public function update($uid,$uname,$mob,$add,$img,$gen)
    {
               $cnn=usr_all::connect();
               $q="update user_tbl set user_uname='". $uname ."', user_mobile_no='". $mob ."', user_Address='". $add  ."', user_profile_pic='". $img  ."', user_gender='". $gen  ."' where user_pk_email_id='". $uid ."'";

         $result=$cnn->query($q);
         //echo $q;
        return $result;
        usr_all::disconnect();
    }
    public function insert($uid,$uname,$pass,$token)
    {
        $cnn=usr_all::connect();
        $vari="No";      
		$usertype="User";
        $q="insert into  user_tbl values ('".$uid."','". $uname ."','". $pass ."','".$token."','".$vari."','". $usertype ."','". null ."','". null ."','". null ."','". null ."')";
       // echo $q;        
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();

    }
     public function insert1($id,$gen,$mob,$img)
    {
        $cnn=usr_all::connect();
        $q="update user_tbl set user_gender='". $gen ."', user_profile_pic='". $img ."', user_mobile_no='". $mob  ."' where user_pk_email_id='". $id ."'";
        echo $q;
        $result=$cnn->query($q);
        return $result;
        usr_all::disconnect();

    }
     public function deletebyid($uid)
    {
              $cnn=usr_all::connect();
        $q="delete from user_tbl where user_pk_email_id="."'$uid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        usr_all::disconnect();
    }
    public function checkpass($id,$p)
    {
       $cnn=usr_all::connect();
        $q="select * from user_tbl where user_pk_email_id="."'$id'";
        $result=$cnn->query($q);
        $row=$result->fetch_assoc();
        if(($row["user_password"])==$p)
        {
            return true;
        }
        else
        {
            return false;
        }
        usr_all::disconnect();  
    }
     public function uppass($id,$p)
    {
       $cnn=usr_all::connect();
        $q="update user_tbl set user_password='". $p ."' where usr_pk_email_id='". $id ."'";
         $result=$cnn->query($q);
       return $result;
        usr_all::disconnect();  
    }


}
?>