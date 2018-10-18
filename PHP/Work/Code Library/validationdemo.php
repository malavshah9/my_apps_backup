<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var p = document.getElementById('fnamediv');
    if (x == "") {
    	p.innerHTML="enter name";
    	return false;
        }
        else{
        	p.innerHTML="";
        	return true;
        }
}
function validateEmail() {

	 var x = document.forms["myForm"]["email"].value;
	var p = document.getElementById('emaildiv');
     var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (x.match(filter)) {
    	p.innerHTML="";
        return true;
    }
    else {
    	p.innerHTML="invalid email";
        return false;
    }
}

function validatePhone() {

       var x=document.forms["myForm"]["phone"].value;
       var p = document.getElementById('phonediv');
      
       if(x.length!=10){
          p.innerHTML="length should be 10";
        return false;
       }
       else{
       	p.innerHTML="";
        return true;
       }

    
}
function validateLname(){
 var letters = /^[A-Za-z]+$/;
 var p = document.getElementById('lnamediv');
 var x=document.forms["myForm"]["lname"].value;  
   if(x.match(letters))  
     {  
     p.innerHTML="";
      return true;  
     }  
   else  
     {  
     	p.innerHTML="only letters allowed";
     return false;
     }
}

function validatePass(){
	var x = document.getElementById('passwd').value;
	var y = document.getElementById('passwd1').value;
	var p = document.getElementById('passwddiv');
	if(x==y){
		p.innerHTML="";
     	 return true;  
	}
	else{
		p.innerHTML="passwords does not match";
    	 return false;
	}
}
</script>
</head>
<body>

<form name="myForm"  method="post">
<div class="container">
<div class="row">
Name: <input type="text" id="fname" name="fname" onblur="return validateForm()" >

<p id="fnamediv" style="margin-left: 222px;margin-top: -20px;" name="fnamediv"></p>

</div>	

<br>


<div class="row">
e-Mail:<input type="text" id="email" name="email" onblur="return validateEmail()"/>
<p id="emaildiv" style="margin-left: 222px;margin-top: -20px;" ></p>
<br>
</div>



<div class="row">
Phone:<input type="number" id="phone" name="phone" onblur="return validatePhone()"/>
<p id="phonediv" style="margin-left: 222px;margin-top: -20px;"></p><br>
</div>


<div class="row">
Last Name:<input type="text" id="lname" name="lname" onblur="return validateLname()"/>
<p id="lnamediv" style="margin-left: 222px;margin-top: -20px;"></p><br>
</div>

<div class="row">
Password:<input type="password" id="passwd" name="passwd"/>
</div><br>

<div class="row">
Reenter Password:<input type="password" id="passwd1" name="passwd1" onblur="return validatePass()"/>
<p id="passwddiv" style="margin-left: 284px;margin-top: -20px;"></p><br>
</div>
</div>
<input type="submit" value="Submit">
</form>
</body>
</html>