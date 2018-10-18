<?php  
		//session_start();
  
    
        $name=$_SESSION["name"];
    ?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">AskMe???.com</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">HOME</a></li>
            <li><a href="Visitors/about.php">ABOUT</a></li>
            <li><a href="Visitors/contact.php">CONTACT</a></li>

    
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $name; ?>,Your Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="">My Account</a></li>
                <li><a href="">Asked Qustions</a></li>
                <li><a href="">Given Aswers</a></li>
                <li><a href="">Check Out Your Interest</a></li>
                <li><a href="">Your Groups</a></li>
			</ul>
        </li>

    
         <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="single-post.html">SINGLE POST</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="single-project.html">SINGLE PROJECT</a></li>
              </ul>
            </li>
        
        
        
        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>