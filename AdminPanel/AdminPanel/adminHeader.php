<?php
   session_start();
   include_once "./config/dbconnect.php";

   if (!isset($_SESSION['ADMIN_ID'])) {
      header("location:loginpage.php");
      die();
   }
?>

 <!-- nav -->
 <nav id="navbar-main"  class="navbar navbar-expand-lg navbar-light px-3" style="background-color: #ffd6d6;">
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assets/images/header_logo.png" width="208" height="63.23">
    </a>
    <a class="navbar-brand ml-4" href="./index.php">
        <h2>Admin Portal</h2>
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            <img src="./assets/images/user_circle.png">
          </div>
          <span>Welcome, <?php echo $_SESSION['ADMIN_NAME'] ?>
            <i class="fas fa-angle-down"></i></span>
        </div>

        <ul class="profile-dropdown-list"> 
          <li class="profile-dropdown-list-item">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
          </li>
        </ul>
    </div>
</nav>
