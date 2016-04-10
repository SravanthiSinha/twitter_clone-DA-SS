<header class="header" style="top:0px;">
    <div class="top-header">
        <div class="logo-wrapper">
            <img class="logo" src="images/leaf_960_720.png" alt="Logo">
            <div class="tagline">Nexus of people</div>
        </div>
        <div class="account">
            <ul class="">
                <li>
                    <?php echo 'Hello, '.$fname.'!' ?>
                        <span class="error">   <?php echo $error ?></span></li>
                <li><a href="#">Edit my profile</a></li>
                <li><a href="#">Log out</a></li>
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