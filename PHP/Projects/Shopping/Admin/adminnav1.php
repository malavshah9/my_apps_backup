<!-- Side Navbar -->
<?php
  echo '<nav class="side-navbar">'.
      '<div class="side-navbar-wrapper">'.
        '<div class="admin-menu">'.
          '<ul id="side-admin-menu" class="side-menu list-unstyled"> '.
            '<h1>Tables</h1>'.
            '<form action ="adminnav1.php" method="post"><input type="submit" name="s1" value="Log Out"></form>'.
            '<li><a href="tabpro.php">Product Table</a></li>'.
            '<li><a href="tabusr.php">User Table</a></li>'.
            '<li><a href="tabcat.php">Category Table</a></li>'.
                  '</ul></div></div></nav>';
     
    if(isset($_POST["s1"]))
    {
      header('location:login.php');
       $_SESSION["id"]=null;
       $_SESSION["pass"]=null;
    }
           ?>  
      <!-- navbar-->
      <?php
     /* echo '<header class="header">'.
        '<nav class="navbar">'.
          '<div class="container-fluid">'.
            '<div class="navbar-holder d-flex align-items-center justify-content-between">'.
               '<li class="nav-item"><input type="Submit" value="Log Out" class="nav-link logout"></li>'.
              '</ul>'.
           ' </div>'.
          '</div>'.
        '</nav>'.*/


      ?>
    