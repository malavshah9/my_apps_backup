<html lang="en">
<head>
<title>Selectbox with search option | sanwebcorner.com</title>  
<link rel="stylesheet" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="choosen.js"></script>
</head>
<body>
    <?php
$conn=new mysqli("localhost","root","","medsky");
$q="select * from medicine_mst";
$result=$conn->query($q);
    ?>
<div style="width:520px;margin:0px auto;margin-top:30px;">
<h2>Select Box with Search Option Jquery</h2>
<select class="chosen" style="width:500px;">
<option value="NoMedicineSelected">Type Medicines Name Here</option>

<?php
while($row=$result->fetch_assoc())
{
echo '<option value="'.$row["pk_med_id"].'">'.$row["med_name"].'</option>';
}
?>
</select>
</div>
<script type="text/javascript">
$(".chosen").chosen();
</script>
</body>
</html>