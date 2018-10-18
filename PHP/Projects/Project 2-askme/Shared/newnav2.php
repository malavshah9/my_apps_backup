<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style> 
#search-box {
position: relative;
width: 100%;
margin: 0;
}

#search-form 
{
height: 40px;
border: 1px solid #999;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
background-color: #fff;
overflow: hidden;
}

#search-text 
{
font-size: 14px;
color: #ddd;
border-width: 0;
background: transparent;
}

#search-box input[type="text"]
{
width: 90%;
padding: 11px 0 12px 1em;
color: #333;
outline: none;
}

#search-button {
position: absolute;
top: 0;
right: 0;
height: 42px;
width: 80px;
font-size: 14px;
color: black;
text-align: center;
line-height: 42px;
border-width: 4px;
background-color: #00b3fe;
-webkit-border-radius: 0px 5px 5px 0px;
-moz-border-radius: 0px 5px 5px 0px;
border-radius: 0px 5px 5px 0px;
cursor: pointer;
}
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #00b3fe;" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"  href="../Visitors/index.php">AskMe.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../Visitors/index.php">Home</a></li>
        <li><a href="../Users/askq.php">Ask Question</a></li>
        <li><a href="#">Make Your Own Community</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../Users/logout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
    
      </ul>
    </div>
  </div>
 <div id='search-box'>
<form action='../Visitors/search.php' id='search-form' method='get' target='_top'>
<input id='search-text' name='search' placeholder='Search Question,Answers,Topics' type='text'/>
<button id='search-button' type='submit' name='btnsearch'>                     
<span>Search</span>
</button>
</form>
</div>
</nav>

</body>
</html>
