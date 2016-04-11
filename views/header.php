<?php
  include_once('model/user.php');
 function getuser($login){
      global $users;
         foreach($users as $user) {
            if($user["login"]==$login)
                return $user; 
            } return false; 
    } 


 function getUserById($id){
     global $users;
         foreach($users as $user) {
            if($user["id"]==$id)
                return $user; 
            } return false; 
    } 
 function getStatusById($id){
     global $statuses;
         foreach($statuses as $status) {
            if($status["id"]==$id)
                return $status; 
            } return false; 
    } 

 function getuserByStatusId($id){
     global $statuses;
     global $users;
         foreach($statuses as $status) {
            if($status["id"]==$id)
            {
                return getUserById($status["user_id"]);
            }
            } return false; 
    } 
?>
    <header class="header" style="top:0px;">
        <div class="top-header">
            <div class="logo-wrapper">
                <img class="logo" src="images/leaf_960_720.png" alt="Logo">
                <div class="tagline">Nexus of people</div>
            </div>
            <div class="account">
                <ul class="">
                    <li>
                        <?php               

                        if(isset($_COOKIE["login"])) {  
                            $current_user=getuser($_COOKIE["login"]);
                            if ($current_user!=false)
                            {                             
                             echo 'Hello, '.($current_user["full_name"]).'!' ;   
                            }
                            }
                            else
                            {
                                    echo 'Hello, there!';    
                            }
                       
                      if(isset($_POST['login'] ) && !isset($_COOKIE["login"])) 
                      {
                            ?>
                            <span class="error">   <?php echo 'Invalid Credentials' ;}?></span></li>

                    <li><a href="#">Edit my profile</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
        <button id="nav-button" class="navButton2" title="Navigate"></button>
        <nav class="nav-show">
            <ul>
                <li><a href="index.php" class="navButton">Home</a></li>
                <li><a href="user.php" class="navButton">My Statuses</a></li>
                <li><a href="users.php" class="navButton">All Users</a></li>
                <li><a href="AboutUs.php" class="navButton">About Us</a></li>
                <li><a href="contactus.php" class="navButton">Contact Us</a></li>
            </ul>
        </nav>
    </header>