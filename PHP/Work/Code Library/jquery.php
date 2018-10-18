<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script>
$(document).ready(function(){

$('#btn1').click(function(){

    $('#demo').html('hello');
});
$('#txt1').keyup(function(){

$.ajax({

 type: "POST",
 url: "fetch_state1.php",
 data:'',
 success:function(x){

     $('#drp1').html(x);

 }

});
    

});

});
</script>

</head>
<body>
<input type="text"  id="txt1">
<select id="drp1">
   
</select>
 <button id="btn1">Click Me</button>
 <p id="demo"></p>
</body>
</html>