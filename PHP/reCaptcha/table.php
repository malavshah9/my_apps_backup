 <html>
<head><title>Prescription</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script src='https://www.google.com/recaptcha/api.js'></script>


</head>
<?php
  if((isset($_POST['g-recaptcha-response']))){
    // process form here
	echo " you are human ";
  }
  else{
    echo "oops please verify you are human ";
  }
require('recaptcha/src/autoload.php');

$siteKey = '6LcNqjYUAAAAALdMRtjhXkJl0tbrqKLZcRfa2jZO';
$secret = '6LcNqjYUAAAAAJtIwJpIZEoYsjsPYHlnfNir3GS6';

$recaptcha = new \ReCaptcha\ReCaptcha($secret);

$gRecaptchaResponse = $_POST['g-recaptcha-response']; //google captcha post data
$remoteIp = $_SERVER['REMOTE_ADDR']; //to get user's ip

$recaptchaErrors = ''; // blank varible to store error

$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp); //method to verify captcha
if ($resp->isSuccess()) {
   // send mail or insert in db or do whatver you wish to
} else {
   $recaptchaErrors = $resp->getErrorCodes(); // set the error in varible
}
?>
<form action="table1.php" method="post">
<body>
        <div class="table-responsive">
                <form>
                        Name:<input type="text" name="name"><br>
                        Contact No:<input type="text" name="hello"><br>
                        <div class="g-recaptcha" data-sitekey="6LcNqjYUAAAAALdMRtjhXkJl0tbrqKLZcRfa2jZO"></div>
                        <span>
                        <?php
                        if(isset($recaptchaErrors[0]))
                        echo $recaptchaErrors[0];
                        ?>
                        </span>
                        <input type="submit" value="submit" name="sub">
                </form>
         

        </div>
</body>
</form>
</html>

