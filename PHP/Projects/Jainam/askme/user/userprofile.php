<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
session_start();
    include '../Shared/links.php';
    ?>
  </head>
  <body>
   
    <?php
  if(empty($_SESSION["id"]))
	{
 //       echo $_SESSION["id"];
header('location:../Visitors/index.php');
$name="Please Sign In";
$id="0";
	}
    else
    {

  $name=$_SESSION["name"];
$id=$_SESSION["id"];
   }
    //include '../Shared/usrnav.php';
    require '../Shared/Classes/classusr.php';
 /*   $conn=new product_all;
    $result=$conn->select_all();*/
    ?>

	<?php

$id=$_SESSION["id"];
//require '../Shared/Classes/classusr.php';
$conn=new usr_all;
$result=$conn->selectbyid($id);
$row=$result->fetch_assoc();
$name=$row["user_uname"];
$mob=$row["user_mobile_no"];
$add=$row["user_Address"];
$img=$row["user_profile_pic"];
$gen=$row["user_gender"];

?>
<div class="container">
    <form enctype="multipart/form-data" action="update.php" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>User Profile</h3>
                                        

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Name <abbr title="required" class="required" readonly>*</abbr>
                                                </label>
                                                <input type="text" value="<?php echo $name; ?>" placeholder="" id="billing_first_name" name="nm1" class="input-text " readonly>
                                            </p>
											<p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Email id <abbr title="required" class="required" readonly>*</abbr>
                                                </label>
                                                <input type="text" value="<?php echo $id; ?>" placeholder="" id="billing_first_name" name="idd" class="input-text " readonly>
                                            </p>
									
												<p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Mobile No <abbr title="required" class="required" readonly>*</abbr>
                                                </label>
                                                <input type="number" value="" placeholder="<?php echo $mob; ?>" id="billing_first_name" name="mobi" class="input-text " readonly>
                                            </p>
								            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="<?php echo $add; ?>" placeholder="Street address" id="billing_address_1" name="add1" class="input-text " readonly>
                                            </p>
										
											<p class="form-row form-row-first validate-required">
											<label class="" for="billing_address_1">Gender <abbr title="required" class="required">*</abbr></label>
                                                <input type="text" value="<?php echo $gen; ?>" placeholder="Street address" id="billing_address_1" name="add1" class="input-text " readonly>

											</p>
											
											<p class="form-row form-row-first validate-required">
											<label class="" for="billing_address_1">Profile Pic <abbr title="required" class="required">*</abbr></label>
											<img src="<?php echo $img; ?>">
											
											</p>
											
	
											<p class="form-row form-row-first validate-required">
										<input type="Submit" name="but2" value="Update Profile">	
											</p>
                                          


                                        </div>
                                    </div>
                                  </div>
</div>
	
	
	
	
	
	
	
	

	
  </body>
</html>